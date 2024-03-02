<?php

namespace App\Http\Controllers\GuestController;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageDataRequest;
use App\Services\GuestServices\Home;
use Illuminate\Http\Request;

class PageData extends Controller
{
    protected $array;

    public function __construct()
    {
        $this->array = array();
    }

    public function index(PageDataRequest $r)
    {
        return match($r->data1){

            'dashboard' => (new Home($r->all()))->read(),

            // 'training-videos' => (new Dashboard($r->all()))->read(),

            default => false

        };
    }
}
