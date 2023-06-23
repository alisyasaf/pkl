<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\FAQ;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'username' => ''
        // ]);
        User::create([
            'name' => 'ALISYA',
            'email' => 'alisya397@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('12345'),
            'role' => '1'
        ]);

        User::create([
            'name' => 'CHRISTIANA WIDIASTUTI',
            'email' => 'christianawid@gmail.com',
            'username' => 'L400120005',
            'password' => bcrypt('12345'),
            'role' => '2'
        ]);
        User::create([
            'name' => 'ERRY BUDIARTO SULAKSONO',
            'email' => 'sulaksono@gmail.com',
            'username' => 'L400120003',
            'password' => bcrypt('12345'),
            'role' => '2'
        ]);

        User::create([
            'name' => 'NINING RAHAYU',
            'email' => 'niningra@gmail.com',
            'username' => 'L400120004',
            'password' => bcrypt('12345'),
            'role' => '2'
        ]);

        User::create([
            'name' => 'ABU SAERI',
            'email' => 'abusaeri@gmail.com',
            'username' => 'L400220001',
            'password' => bcrypt('12345'),
            'role' => '2'
        ]);

        FAQ::create([
            'question' => 'Apa saja syarat yang dibutuhkan untuk mengajukan pinjaman?',
            'answer' => 'Syarat-syarat untuk mengajukan permohonan pinjaman adalah Surat Permohonan Bantuan dengan lampiran
            copy rekening koran/tabungan/rekening pinjaman bulan terakhir, copy SIUP/SITU, pas photo ukuran 4x6, copy
            Akta Pendirian, NPWP, dan KTP, serta surat pernyataan tidak memiliki pinjaman dana program kemitraan dari BUMN lain.
            Informasi lebih lanjut bisa melalui PT TASPEN terdekat.'
        ]);

        FAQ::create([
            'question' => 'Bagaimana cara mengajukan sertifikat halal untuk UMKM?',
            'answer' => 'Untuk mengajukan sertifikat halal melalui PT TASPEN, UMKM terkait harus merupakan mitra
            binaan taspen dan memiliki produk berupa makanan atau minuman.'
        ]);

        FAQ::create([
            'question' => 'Bagaimana cara mengajukan kerja sama sponsorship dengan PT TASPEN?',
            'answer' => 'Untuk mengajukan kerja sama sponshorship, perlu mengirim proposal dan
            surat permohonan bantuan sponsor yang ditujukan kepada PT TASPEN.'
        ]);

        \App\Models\Role::insert([[
            'role' => 'admin',
        ], [
            'role' => 'mitra'
        ]]);
    }
}
