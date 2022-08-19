<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MembersnewModel;

class Members_new extends ResourceController
{
    use ResponseTrait;
    // get all Members
    public function index()
    {
        $model = new MembersnewModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    // get single Members
    public function show($id = null)
    {
        $model = new MembersnewModel();
        $data = $model->getWhere(['member_id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }

    // create a Members
    // public function create()
    // {
    //     $model = new MembersnewModel();
    //     $data = [
    //         'product_name' => $this->request->getPost('product_name'),
    //         'product_price' => $this->request->getPost('product_price')
    //     ];
	// 	$data = json_decode(file_get_contents("php://input"));
	// 	//$data = $this->request->getPost();
    //     $model->insert($data);
    //     $response = [
    //         'status'   => 201,
    //         'error'    => null,
    //         'messages' => [
    //             'success' => 'Data Saved'
    //         ]
    //     ];
		
    //     return $this->respondCreated($data, 201);
    // }
     // create
     public function insert() {
        $model = new MembersnewModel();
        $data = [
            'member_first_name' => $this->request->getVar('member_first_name'),
            'member_last_name'  => $this->request->getVar('member_last_name'),
            'member_date_of_birth'  => $this->request->getVar('member_date_of_birth'),
            'grade'  => $this->request->getVar('grade'),
            'home_phone_number'  => $this->request->getVar('home_phone_number'),
            'cell_phone_number'  => $this->request->getVar('cell_phone_number'),
            'email_for_parent'  => $this->request->getVar('email_for_parent'),
            'email_for_child'  => $this->request->getVar('email_for_child'),
            'address'  => $this->request->getVar('address'),
            'gender'  => $this->request->getVar('gender'),
            'food_allergies'  => $this->request->getVar('food_allergies'),
            'special_needs_required'  => $this->request->getVar('special_needs_required'),
            'family_members_in_the_program'  => $this->request->getVar('family_members_in_the_program'),
            'how_they_heard_about_us'  => $this->request->getVar('how_they_heard_about_us'),
            'referral'  => $this->request->getVar('referral'),
        ];
        $model->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'Member created successfully'
          ]
      ];
      return $this->respondCreated($response);
    }

    // update Members
    public function update($id = null)
    {
        $model = new MembersnewModel();
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
        $model = new MembersnewModel();
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