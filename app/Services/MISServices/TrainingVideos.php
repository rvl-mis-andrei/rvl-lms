<?php
namespace App\Services\MISServices;

use App\Http\Controllers\Controller;
use App\Http\Requests\MIS\CreateTraningiVideosRequest as Create;
use App\Http\Requests\MIS\ReadTraningiVideosRequest as Read;
use App\Http\Requests\MIS\UpdateTraningiVideosRequest as Update;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Exception;

use App\Models\System\TrainingVideos as TrainingVideosModel;
use Illuminate\Support\Facades\Storage;

class TrainingVideos extends Controller
{

    private $user;

    public function __construct()
    {
        $this->user    = Auth::user();
    }

    public function message($i = 0)
    {
        $message = [
            0 => 'Oops, Something went wrong with you request. Try again later.',
            1 => 'Training video is saved successfully.',
            2 => 'Training video is updated successfully.',
        ];
        return $message[$i];
    }

    public function create(Create $r)
    {
        try{
            DB::beginTransaction();

            $r = $this->_move($r);

            TrainingVideosModel::create([
                'title'         => $r->title,
                'description'   => $r->description,
                'thumbnail'     => $r->thumbnail,
                'category_id'   => $r->category_id,
                'filename'      => $r->filename,
                'video_folder'  => $r->video_folder,
                'created_by'    => $this->user->emp_id,
            ]);

            DB::commit();
            return ['status'=>'success','message'=>$this->message(1)];

        }catch(\Exception $e){
            DB::rollback();
            return ['status'=>'error','message'=>$this->message()];
        }
    }

    public function read(Read $r)
    {
        $parsed_id = $this->_decrypt($r->param1??null);
        $query     = TrainingVideosModel::where('status',1);
        $parsed_id ? $query->where('id', $parsed_id) : $query->get();

        if($parsed_id){
            if(in_array($r->data1,['update-training-details','update-training-video'])){
                $data = $query;
            }else{
                $data = [
                    'id'           => $this->_encrypt($query->id),
                    'title'        => $query->title,
                    'description'  => $query->description,
                    'thumbnail'    => $query->thumbnail,
                    'category_id'  => $query->category_id,
                    'filename'     => $query->filename,
                    'video_folder' => $query->video_folder,
                ];
            }
        }else{
            foreach($query as $data){
                $data[] = [
                    'id'           => $this->_encrypt($data->id),
                    'title'        => $data->title,
                    'description'  => $data->description,
                    'thumbnail'    => $data->thumbnail,
                    'category_id'  => $data->category_id,
                    'filename'     => $data->filename,
                    'video_folder' => $data->video_folder,
                ];
            }
        }

        return $data;
    }

    public function update(Update $r)
    {
        try{
            DB::beginTransaction();

            $query     = $this->read(app(Read::class));

            switch($r->data1){
                case 'update-training-details':
                    $query->title        = $r->title;
                    $query->description  = $r->description;
                    $query->category_id  = $r->category_id;
                break;

                case 'update-training-video':
                    $r = $this->_move($r,$query);
                    $query->thumbnail  = $r->thumbnail;
                    $query->filename   = $r->filename;
                break;
            }

            $query->updated_by   = $this->user->emp_id;
            $query->save();
            DB::commit();
            return ['status'=>'success','message'=>$this->message(2)];

        }catch (QueryException $q) {
            DB::rollback();
            return ['status'=>'error','message'=>$this->message()];

        }catch(\Exception $e){
            DB::rollback();
            return ['status'=>'error','message'=>$this->message()];
        }

    }

    public function delete()
    {
        //
    }

    public function datatable($data)
    {
        //
    }

    public function _move($r,$q=null)
    {
        $thumbnail     = $r->file('thumbnail')->getClientOriginalName();
        $filename      = $r->file('training_video')->getClientOriginalName();
        $video_folder  = $q ? $q->video_folder : $this->_generateUniqueString();

        if(!$q){ Storage::makeDirectory('public/training_videos/'.$video_folder); }
        $r->file('thumbnail')->storeAs('public/training_videos/'.$video_folder,$thumbnail);
        $r->file('training_video')->storeAs('public/training_videos/'.$video_folder,$filename);

        $r->filename = $filename;
        $r->thumbnail = $thumbnail;
        $r->video_folder = $video_folder;

        return $r;
    }
}

