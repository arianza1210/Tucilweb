<?php

namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [


            'first_name' => 'pandi',
            'last_name' => 'barep arianza',
            'username' => 'pandiarianza',
            'email' => 'pandiari@gmail',
            'password' => password_hash('123456', PASSWORD_DEFAULT)


        ];
        $this->db->table('users')->insert($data);
    }
}
