<?php

namespace App\Http\Controllers\MISController\Action;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\MIS\CreateTraningiVideosRequest as TrainingVideoRequest;
use App\Services\MISServices\TrainingVideos as TrainingVideoServices;

class Create extends Controller
{
    public function index(CreateRequest $r)
    {
        return match($r->data1){

            'create-training-videos' => (new TrainingVideoServices())->create(app(TrainingVideoRequest::class)),

            default => false

        };
    }
}
