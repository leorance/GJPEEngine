<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classes;
use App\Models\Pelayanan;
use App\Models\Talents;
use App\Models\Uname;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        Classes::insert([
            // Kelas A
            ['id_kelas' => 'CA11', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA12', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA13', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA21', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA22', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA23', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA31', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA32', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA33', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA41', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA42', 'nama_kelas' => 'A'],
            ['id_kelas' => 'CA43', 'nama_kelas' => 'A'],
            
            // Kelas B
            ['id_kelas' => 'CB11', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB12', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB13', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB21', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB22', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB23', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB31', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB32', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB33', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB41', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB42', 'nama_kelas' => 'B'],
            ['id_kelas' => 'CB43', 'nama_kelas' => 'B'],
            
            // Kelas C
            ['id_kelas' => 'CC11', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC12', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC13', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC21', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC22', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC23', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC31', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC32', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC33', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC41', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC42', 'nama_kelas' => 'C'],
            ['id_kelas' => 'CC43', 'nama_kelas' => 'C']
        ]);
        Uname::insert([
            ['id_nama' => 'U1', 'nama_usr' => 'Jason Tanu'],
            ['id_nama' => 'U2', 'nama_usr' => 'Audi'],
            ['id_nama' => 'U3', 'nama_usr' => 'Samuel'],
            ['id_nama' => 'U4', 'nama_usr' => 'Callista'],
            ['id_nama' => 'U5', 'nama_usr' => 'Graddy'],
            ['id_nama' => 'U6', 'nama_usr' => 'Daniel Sianturi'],
            ['id_nama' => 'U7', 'nama_usr' => 'Abraham Renchart'],
            ['id_nama' => 'U8', 'nama_usr' => 'Alfonsius'],
            ['id_nama' => 'U9', 'nama_usr' => 'Chika'],
            ['id_nama' => 'U10', 'nama_usr' => 'Kenny'],
            ['id_nama' => 'U11', 'nama_usr' => 'Raphael'],
            ['id_nama' => 'U12', 'nama_usr' => 'Ferdinand'],
            ['id_nama' => 'U13', 'nama_usr' => 'Cheryl'],
            ['id_nama' => 'U14', 'nama_usr' => 'Jeremy'],
            ['id_nama' => 'U15', 'nama_usr' => 'Melvita'],
            ['id_nama' => 'U16', 'nama_usr' => 'Toni Cahyadi'],
            ['id_nama' => 'U17', 'nama_usr' => 'Irma'],
            ['id_nama' => 'U18', 'nama_usr' => 'Viandi'],
            ['id_nama' => 'U19', 'nama_usr' => 'Michael Jose'],
            ['id_nama' => 'U20', 'nama_usr' => 'Tabita Evelyn'],
            ['id_nama' => 'U21', 'nama_usr' => 'Farra'],
            ['id_nama' => 'U22', 'nama_usr' => 'Matthew'],
            ['id_nama' => 'U23', 'nama_usr' => 'Jeffrey'],
            ['id_nama' => 'U24', 'nama_usr' => 'Benaya'],
            ['id_nama' => 'U25', 'nama_usr' => 'Mishael'],
            ['id_nama' => 'U26', 'nama_usr' => 'William Pakpahan'],
            ['id_nama' => 'U27', 'nama_usr' => 'Caesar'],
            ['id_nama' => 'U28', 'nama_usr' => 'Andre'],
            ['id_nama' => 'U29', 'nama_usr' => 'Timothy'],
            ['id_nama' => 'U30', 'nama_usr' => 'Sheliani']
        ]);
        Talents::insert([
            ['id_talent' => 'T1', 'nama_talent' => 'Drummer'],
            ['id_talent' => 'T2', 'nama_talent' => 'Keyboard'],
            ['id_talent' => 'T3', 'nama_talent' => 'Gitar'],
            ['id_talent' => 'T4', 'nama_talent' => 'Operator Sound'],
            ['id_talent' => 'T5', 'nama_talent' => 'Operator Multimedia'],
            ['id_talent' => 'T6', 'nama_talent' => 'Pemimpin Pujian'],
            ['id_talent' => 'T7', 'nama_talent' => 'Pembawa Firman'],
            ['id_talent' => 'T8', 'nama_talent' => 'Singer'],
            ['id_talent' => 'T9', 'nama_talent' => 'Usher'],
            ['id_talent' => 'T10', 'nama_talent' => 'Asisten'],
            ['id_talent' => 'T11', 'nama_talent' => 'Pendoa'],
            ['id_talent' => 'T12', 'nama_talent' => 'Bagian Absensi'],
        ]);

        
    }
}
