<?php

namespace App\Services\AdminServices\Dashboard;

class Dashboard
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

    public function read(){
        dd($this->res);
    }

    public function update(){

    }

    public function delete(){

    }

    public function datatable($data){

    }

}
