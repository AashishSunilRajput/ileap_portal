<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MembersModel;

class Demo extends ResourceController
{
    use ResponseTrait;
    // get all Members
    public function demo1()
    {     
        $model = new MembersModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
    public function demo2()
    {     
       
        return $this->respond('demo2', 200);
    }

   
}