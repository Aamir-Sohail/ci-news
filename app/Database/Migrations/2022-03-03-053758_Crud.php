<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Crud extends Migration
{
    public function up()
{
        $this->forge->addField([
            'id'         => ['type' =>  'INT', 'constraint' =>11 ,'auto_increment'=> true, 'unsinged'=>true,], 
            'username'       => ['type' => 'varchar', 'constraint' => 31],
            
            'image'      => ['type' => 'varchar', 'constraint' => 63],
            'email'    => ['type' => 'varchar', 'constraint' => 255],
            'password'   => ['type' => 'varchar', 'constraint' => 255],
            'created_at' => ['type' => 'datetime', 'null' => false],
        ]);
        $this->forge->addPrimaryKey('id',true);
      
        $this->forge->createTable('crud',true);
}

    public function down()
    {
        $this->forge->dropTable('crud');
}
}