<?php

use Illuminate\Database\Seeder;
use App\profil;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profil = new profil;
        $profil->judul = 'NABATOUR';
        $profil->keterangan = 'NABATOUR';
        $profil->tentang = 'NABATOUR';
        $profil->save();
    }
}
