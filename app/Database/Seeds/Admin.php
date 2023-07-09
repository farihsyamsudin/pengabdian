<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $data = [
            'username'=>'admin',
            'password'=>password_hash('admin', PASSWORD_DEFAULT),
            'full_name'=>'ADMIN SATU',
            'email'=>'arih2017arih@gmail.com'
        ];

        $this->db->table('admin')->insert($data);

    }
}
