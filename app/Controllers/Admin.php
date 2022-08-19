<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\AdminModel;
use App\Models\RoleModel;
use App\Models\BandModel;
use App\Models\ModuleModel;
use App\Models\SessionModel;

class Admin extends ResourceController
{
    use ResponseTrait;
    // get all Admins
    public function index()
    {     
         $model = new AdminModel();
         $data = $model->findAll();
        return $this->respond($data, 200);
    }

     // Add Admins
    public function insert()
    {    $model = new AdminModel();
        $data = [
            'admin_name' => $this->request->getVar('admin_name'),
            'admin_email'  => $this->request->getVar('admin_email'),
            'admin_password'  => $this->request->getVar('admin_password'),
           
        ];
        $model->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'Admin created successfully'
          ]
      ];
      return $this->respondCreated($response);
    }
    
    // get all roles 
    public function listallroles()
    {     
         $model = new RoleModel();
         $data = $model->findAll();
        return $this->respond($data, 200);
    }

     // Add roles
    public function createroles()
    {    $model = new RoleModel();
        $data = [
            'role_name' => $this->request->getVar('role_name'),
            'role_type'  => $this->request->getVar('role_type'),
            'role_points'  => $this->request->getVar('role_points'),
           
        ];
        $model->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'Role created successfully'
          ]
      ];
      return $this->respondCreated($response);
    }
     // update roles
     public function updaterole($id = null)
     {
         $model = new RoleModel();
         $input = $this->request->getRawInput();
         $data = [
            'role_name' => $this->request->getVar('role_name'),
            'role_type'  => $this->request->getVar('role_type'),
            'role_points'  => $this->request->getVar('role_points'),
           
        ];
         $model->update($id, $data);
         $response = [
             'status'   => 200,
             'error'    => null,
             'messages' => [
                 'success' => 'Role Updated successfully'
             ]
         ];
         return $this->respond($response);
     }
    // delete Role
    public function deleterole($id = null)
    {
        $model = new RoleModel();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Role Deleted successfully'
                ]
            ];
			
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Role Found with id '.$id);
        }
        
    }

     // get all band 
     public function listallband()
     {     
          $model = new BandModel();
          $data = $model->findAll();
         return $this->respond($data, 200);
     }
 
      // Add band
     public function createband()
     {    $model = new BandModel();
         $data = [
             'band_name' => $this->request->getVar('band_name'),
             'band_color'  => $this->request->getVar('band_color'),
             'band_type'  => $this->request->getVar('band_type'),
            
         ];
         $model->insert($data);
         $response = [
           'status'   => 201,
           'error'    => null,
           'messages' => [
               'success' => 'Band created successfully'
           ]
       ];
       return $this->respondCreated($response);
     }
       // update band
       public function updateband($id = null)
       {
           $model = new BandModel();
           $input = $this->request->getRawInput();
           $data = [
            'band_name' => $this->request->getVar('band_name'),
            'band_color'  => $this->request->getVar('band_color'),
            'band_type'  => $this->request->getVar('band_type'),
           
        ];
           $model->update($id, $data);
           $response = [
               'status'   => 200,
               'error'    => null,
               'messages' => [
                   'success' => 'Band Updated successfully'
               ]
           ];
           return $this->respond($response);
       }
     // delete band
     public function deleteband($id = null)
     {
         $model = new BandModel();
         $data = $model->find($id);
         if($data){
             $model->delete($id);
             $response = [
                 'status'   => 200,
                 'error'    => null,
                 'messages' => [
                     'success' => 'Band Deleted successfully'
                 ]
             ];
             
             return $this->respondDeleted($response);
         }else{
             return $this->failNotFound('No Band Found with id '.$id);
         }
         
     }
     
        // get all modules 
        public function listallmodule()
        {     
             $model = new ModuleModel();
             $data = $model->findAll();
            return $this->respond($data, 200);
        }
    
         // Add modules
        public function createmodule()
        {    $model = new ModuleModel();
            $data = [
                'module_name' => $this->request->getVar('module_name'),
                'club_id'  => $this->request->getVar('club_id'),
                'module_type'  => $this->request->getVar('module_type'),
               
            ];
            $model->insert($data);
            $response = [
              'status'   => 201,
              'error'    => null,
              'messages' => [
                  'success' => 'Module created successfully'
              ]
          ];
          return $this->respondCreated($response);
        }
         // update modules
       public function updatemodule($id = null)
       {
           $model = new ModuleModel();
           $input = $this->request->getRawInput();
           $data = [
            'module_name' => $this->request->getVar('module_name'),
            'club_id'  => $this->request->getVar('club_id'),
            'module_type'  => $this->request->getVar('module_type'),
           
        ];
           $model->update($id, $data);
           $response = [
               'status'   => 200,
               'error'    => null,
               'messages' => [
                   'success' => 'Module Updated successfully'
               ]
           ];
           return $this->respond($response);
       }
         


        // delete modules
        public function deletemodule($id = null)
        {
            $model = new ModuleModel();
            $data = $model->find($id);
            if($data){
                $model->delete($id);
                $response = [
                    'status'   => 200,
                    'error'    => null,
                    'messages' => [
                        'success' => 'Module Deleted successfully'
                    ]
                ];
                
                return $this->respondDeleted($response);
            }else{
                return $this->failNotFound('No Module Found with id '.$id);
            }
            
        }


          // get all Session 
          public function listallsession()
          {     
               $model = new SessionModel();
               $data = $model->findAll();
              return $this->respond($data, 200);
          }
      
           // Add Session
          public function createsession()
          {    $model = new SessionModel();
              $data = [
                  'session_title' => $this->request->getVar('session_title'),                 
                 
              ];
              $model->insert($data);
              $response = [
                'status'   => 201,
                'error'    => null,
                'messages' => [
                    'success' => 'Session created successfully'
                ]
            ];
            return $this->respondCreated($response);
          }
          
           // update Session
       public function updatesession($id = null)
       {
           $model = new SessionModel();
           $input = $this->request->getRawInput();
           $data = [
            'session_title' => $this->request->getVar('session_title'),                 
           
        ];
           $model->update($id, $data);
           $response = [
               'status'   => 200,
               'error'    => null,
               'messages' => [
                   'success' => 'Session Updated successfully'
               ]
           ];
           return $this->respond($response);
       }


          // delete Session
          public function deletesession($id = null)
          {
              $model = new SessionModel();
              $data = $model->find($id);
              if($data){
                  $model->delete($id);
                  $response = [
                      'status'   => 200,
                      'error'    => null,
                      'messages' => [
                          'success' => 'Session Deleted successfully'
                      ]
                  ];
                  
                  return $this->respondDeleted($response);
              }else{
                  return $this->failNotFound('No Session Found with id '.$id);
              }
              
          }

}