<?php
namespace App\Services\GuestServices;

use App\Http\Requests\Guest\Read;

class TrainingVideos
{
    private $request;
    private $array;
    private $res;

    public function __construct($request)
    {
        $this->request = $request;
        $this->array   = array();
        $this->res     = $request;
    }

    public function create(){

    }

    public function read(Read $r){
        
    }

    public function update(){

    }

    public function delete(){

    }

    public function datatable($data){

    }
}



