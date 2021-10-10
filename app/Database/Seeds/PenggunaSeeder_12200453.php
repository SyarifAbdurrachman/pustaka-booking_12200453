<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'syarif',
                'password'  => md5('12200453')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200453',
                'password'  => md5('syarifabdurrachman')
            ]
        ];
        $p = new Pengguna();
        $p->insertBatch();
    }
}