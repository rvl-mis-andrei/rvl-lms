<?php

namespace App\Http\Controllers\GuestController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class Page extends Controller
{
    protected $url;
    protected $device_details;

    public function __construct(Request $request)
    {
        $this->url = $request->segment(2);
        $this->device_details = $this->_device();
    }

    public function index()
    {
        Cookie::queue('guest-page',$this->url,1440);
        return view('guest.layout.app');
    }

    public function page_content(Request $request)
    {
        $page  = $request->page ?? Cache::get('guest-page','home');
        Cookie::queue('guest-page',$page,1440);

        return match ($page) {

            'home' =>  view('guest.0001'),

            default => false,
        };
    }
}
