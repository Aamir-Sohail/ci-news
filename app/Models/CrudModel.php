<?php 

namespace App\Models;
use CodeIgniter\Model;
use PhpParser\Builder\Class_;

Class CrudModel extends Model 
{
    protected $primaryKey = "id";
    protected $table = "crud";
    protected $DBGroup = "default";
    protected $allowedFields = ['username','image', 'email','password'];
    protected $useTimestamps = false;
    protected $validationRules = [
        'username'     => 'required',
        'image' =>'required',
        'email'     => 'required',
        'password'     => 'required',
      
    ];

}
