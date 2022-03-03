<?php


namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CrudModel;


use phpDocumentor\Reflection\Types\This;

class CrudController extends BaseController
{
    public function index()
    {
        $crud = new CrudModel();
        $data['crud'] =$crud->findAll();

        return view('welcome_message' ,$data);
    }


    public function insert()
    {

        // $Crud = new CrudController;
                
        // $file = $this->request->getFile('image');
        // $file_type = $file->getClientMimeType();
        // $valid_file_types = array("image/png", "image/jpeg", "image/jpg");
        // $config['max_size'] = 2048;
        // $session = session();
        // if (in_array($file_type, $valid_file_types)) {

        //     if ($file->isValid() && !$file->hasMoved()) {
        //         $imageName = $file->getRandomName();
        //         $file->move('uploads/', $imageName);
        //         $session->setFlashdata("success", 'file has been uploaded');
        //     }


            $data = [
                'username' => $this->request->getPost('username'),
                'image' => $this->request->getPost('image'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),

            ];
            //    $db= \config\Database::connect();
            //     $builder = $db->table('crud');

            //    $builder->insert($data);
            $model = new CrudModel();
            $model->insert($data);
        }
    
    

  



        public function Fetch()
        {
            $crud = new CrudModel();
            $data = $crud->findAll();
            return view('welcome_message' ,$data);
            // var_dump($data);
            // exit;
        }
    
    
        public function delete($id = null)
        {
            $crud = new CrudModel();
    
            $crud->delete($id);
            return view('welcome_message');
        }
    }

