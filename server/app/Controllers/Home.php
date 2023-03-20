<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ["hello" => "world"];
        $json = json_encode($data);

        $this->response->setHeader("Access-Control-Allow-Origin", "*");
        $this->response->setHeader("Content-Type", "application/json");
        $this->response->setHeader("Access-Control-Allow-Methods", "GET");
        $this->response->setJSON($json);
        
        return $this->response->send();
    }
}
