<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin'=>[
                'type'=>'INT',
                'constraint'=>11,
                'auto_increment'=>true
            ],
            'username'=>[
                'type'=>'VARCHAR',
                'constraint'=>16,
                'unique'=>true,
            ],
            'password'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'full_name'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'email'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
                'unique'=>true
            ],
            'token'=>[
                'type'=>'VARCHAR',
                'constraint'=>25,
            ],
            'last_login timestamp default now()'
        ]);

        $this->forge->addKey('id_admin',TRUE);
        $this->forge->createTable('admin', TRUE);

    }

    public function down()
    {
        //
        $this->forge->dropTable('admin');
    }
}
