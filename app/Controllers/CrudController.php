<?php


namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CrudModel;


use phpDocumentor\Reflection\Types\This;

class CrudController extends BaseController
{
    private $crud = null;
    public function __construct()
    {
        $this->crud = new CrudModel();
    }
    public function index()
    {

        $data = $this->crud->findAll();
        return view('welcome_message', ['data' => $data]);
    }


    public function insert()
    {

        $Crud = new CrudController;

        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile,100]'
                    . '|max_dims[userfile,1024,768]',
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('welcome_message', ['data' => $data]);
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $img->store();

            $data = ['uploaded_flleinfo' => new CrudController ($filepath)];
            return view('upload_success', $data);
        } 
    }
}
     

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

            var_dump($model->errors());
    
    

    }
}

        


        

    

