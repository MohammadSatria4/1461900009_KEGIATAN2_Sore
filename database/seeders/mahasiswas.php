<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class mahasiswas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = 'Satria';
        $mahasiswa->nbi = '00009';
        $mahasiswa->prodi = 'informatika';
        $mahasiswa->save();

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = 'Eki';
        $mahasiswa->nbi = '00129';
        $mahasiswa->prodi = 'informatika';
        $mahasiswa->save();

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = 'Eris';
        $mahasiswa->nbi = '00439';
        $mahasiswa->prodi = 'informatika';
        $mahasiswa->save();
    }
}
