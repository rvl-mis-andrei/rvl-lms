<?php

namespace App\Http\Controllers\MISController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class Page extends Controller
{
    private $url;
    private $request;

    public function __construct(Request $request)
    {
        $this->url = $request->segment(2);
        $this->request = $request;
    }

    public function index()
    {
        Cookie::queue('mis-page',$this->url,1440);
        return view('mis.layout.app');
    }

    public function page_content()
    {
        $data  = $this->request->page ?? Cache::get('mis-page','dashboard');
        Cookie::queue('mis-page',$data,1440);

        return match($data){

            'dashboard' => view('mis.0001'),

            'training-videos' => view('mis.0002'),
            'new-training-videos' => view('mis.0021'),

            'videos-categories' => view('mis.0003'),

            'activity-logs' => view('mis.0004'),

            default => false

        };
    }
}
