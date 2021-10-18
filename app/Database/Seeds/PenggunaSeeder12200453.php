<?php

namespace App\Database\Seeds;

use App\Models\Pengguna12200453;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder12200453 extends Seeder
{
    public function run()
    {
        $data = [
        [
            'nama'      =>'SyarifAbdurrachman',
            'password'  =>md5('12200453')
        ],
        [
            'nama'      =>'admin',
            'password'  =>md5('12345')
        ],
        [
            'nama'      =>'12200453',
            'password'  =>md5('SyarifAbdurrachman')  
        ]
        ];

        
        $p = new Pengguna12200453();
        $p->insertBatch($data); 
    }
}