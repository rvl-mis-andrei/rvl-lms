<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageDataRequest;
use App\Services\AdminServices\Dashboard\Dashboard;
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

            'dashboard' => (new Dashboard($r->all()))->read(),

            default => false

        };
    }
}
