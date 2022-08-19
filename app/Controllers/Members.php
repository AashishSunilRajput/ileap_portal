<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MembersModel;

class Members extends ResourceController
{
    use ResponseTrait;
    // get all Members
    public function index()
    {
        $model = new MembersModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    // get single Members
    public function show($id = null)
    {
        $model = new MembersModel();
        $data = $model->getWhere(['id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }

    // create a Members
    public function create()
    {
        $model = new MembersModel();
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price')
        ];
		$data = json_decode(file_get_contents("php://input"));
		//$data = $this->request->getPost();
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];
		
        return $this->respondCreated($data, 201);
    }
     // create
     public function create_new() {
        $model = new MembersModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $model->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'Employee created successfully'
          ]
      ];
      return $this->respondCreated($response);
    }

    // update Members
    public function update($id = null)
    {
        $model = new MembersModel();
		$json = $this->request->getJSON();
		if($json){
			$data = [
				'product_name' => $json->product_name,
				'product_price' => $json->product_price
			];
		}else{
			$input = $this->request->getRawInput();
			$data = [
			    'product_name' => $input['product_name'],
			    'product_price' => $input['product_price']
			];
		}
		// Insert to Database
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }

    // delete Members
    public function delete($id = null)
    {
        $model = new MembersModel();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];
			
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
        
    }

}