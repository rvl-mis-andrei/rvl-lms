<?php

namespace App\Http\Controllers\MISController;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageDataRequest;
use App\Services\MISServices\Dashboard;

// Service

class PageData extends Controller
{
    public function index(PageDataRequest $r)
    {
        return match($r->data1){

            'dashboard' => (new Dashboard($r))->read(),

            default => false

        };
    }
}
