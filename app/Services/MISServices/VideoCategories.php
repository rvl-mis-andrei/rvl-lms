<?php
namespace App\Services\MISServices;

use App\Http\Controllers\Controller;
use App\Http\Requests\MIS\CreateVideoCategoryRequest as Create;
use App\Http\Requests\MIS\ReadTraningiVideosRequest as Read;
use App\Http\Requests\MIS\UpdateVideoCategoryRequest as Update;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Exception;

use App\Models\System\VideoCategory as VideoCategoryModel;
use App\Models\System\VideoCategory;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class VideoCategories extends Controller
{

    private $user;
    private $message;

    public function __construct()
    {
        $this->user    = Auth::user();

        $this->message = [
            0 => 'Oops, Something went wrong with you request. Try again later.',
            1 => 'Video category is saved successfully.',
            2 => 'Video category is updated successfully.',
        ];
    }

    public function read(Read $r, $action, $val=null){
        $query = VideoCategoryModel::where('status', 1);
        $query->when($action == 'create', function ($query) use ($val) {
            return $query->where('name',$val)->count();
        });
        $query->when($action == 'update', function ($query) use ($val) {
            return $query->find($val);
        });
        $query->when($action == 'read', function ($query) {
            return $query->get();
        });

        // if($action == 'read'){
        //     foreach($query as $data){
        //         $array[] =[
        //             'id' =>$this->_encrypt($data->id),
        //             'name' =>$data->name,
        //             'status' =>$data->status,
        //         ];
        //     }
        // }else{
        //     $array = $query;
        // }
        return $query;
    }

    public function create(Create $r){
        try {

            DB::beginTransaction();

            // $count = VideoCategoryModel::where('name',strtoupper($r->name))->count();
            $count = $this->read(app(Read::class),'create',strtoupper($r->name));
            if($count == 0){
                VideoCategoryModel::create([
                    'name' => '',
                    'created_by' => $this->user->emp_id
                ]);
            }else{
                throw new \Exception("Category with name '{$r->name}' already exists.");
            }

            DB::commit();
            return ['status'=>'success','message'=>$this->message[1]];

        }catch (QueryException $exception) {
            return ['status' => 'error', 'message' => 'Database error: ' . $exception->getMessage()];

        }catch (Exception $e) {
            return ['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()];
        }
    }
 
    public function update(Update $r){

        try {
            DB::beginTransaction();

            $parsed_id = $this->_decrypt($r->param1);
            $query = $this->read(app(Read::class),'update',$parsed_id);
            $query->name       = $r->name;
            $query->status     = $r->status;
            $query->updated_by = $this->user->emp_id;
            $query->save();

            // VideoCategoryModel::where([['id',$parsed_id],['status',1]])->update([
            //     'name'=> $r->name,
            //     'status'=> $r->status,
            //     'updated_by'=> $this->user->emp_id,
            // ]);

            DB::commit();
            return ['status'=>'success','message'=>$this->message[2]];

        }catch (QueryException $exception) {
            return ['status' => 'error', 'message' => 'Database error: ' . $exception->getMessage()];
        }catch (Exception $e) {
            return ['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()];
        }

    }

    public function delete(){

    }

    public function datatable(){

    }
}

