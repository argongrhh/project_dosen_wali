<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Mahasiswa::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['nama' => 'Argo Nugroho', 'nim' => '210202004', 'jurusan' => 'JTI', 'alamat' => 'Donan', 'nohp' => '085292477832'],
            ['nama' => 'Daffa Budi', 'nim' => '210102005', 'jurusan' => 'JTI', 'alamat' => 'PWT', 'nohp' => '085123123123'],
            ['nama' => 'Mhd Ulul', 'nim' => '210102015', 'jurusan' => 'JTI', 'alamat' => 'Demak', 'nohp' => '085912912912'],
        ];

        foreach ($data as $value) {
            Mahasiswa::insert([
                'nama' => $value['nama'],
                'nim' => $value['nim'],
                'jurusan' => $value['jurusan'],
                'alamat' => $value['alamat'],
                'nohp' => $value['nohp'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}