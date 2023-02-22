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
            'name' => 'Alisya',
            'email' => 'alisya397@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('12345'),
            'role' => '1'
        ]);

        FAQ::create([
            'question' => 'Apa saja syarat yang dibutuhkan untuk mengajukan pinjaman?',
            'answer' => 'Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. In mi sem, ullamcorper id dui non,
            molestie porta diam. Pellentesque congue sit amet justo quis varius. Cras pharetra,
            arcu in maximus luctus, nisi tortor rhoncus augue, nec tempor lorem risus non enim.
            Nam porttitor quam non quam lobortis, commodo pellentesque enim semper. Vestibulum a magna nulla.
            Donec aliquet nibh in velit elementum, vulputate pharetra eros varius. Sed ultricies facilisis dapibus.'
        ]);

        FAQ::create([
            'question' => 'Bagaimana cara mengajukan sertifikat halal untuk UMKM?',
            'answer' => 'Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. In mi sem, ullamcorper id dui non,
            molestie porta diam. Pellentesque congue sit amet justo quis varius. Cras pharetra,
            arcu in maximus luctus, nisi tortor rhoncus augue, nec tempor lorem risus non enim.
            Nam porttitor quam non quam lobortis, commodo pellentesque enim semper. Vestibulum a magna nulla.
            Donec aliquet nibh in velit elementum, vulputate pharetra eros varius. Sed ultricies facilisis dapibus.'
        ]);

        FAQ::create([
            'question' => 'Bagaimana cara mengajukan kerja sama sponsorship dengan PT TASPEN?',
            'answer' => 'Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. In mi sem, ullamcorper id dui non,
            molestie porta diam. Pellentesque congue sit amet justo quis varius. Cras pharetra,
            arcu in maximus luctus, nisi tortor rhoncus augue, nec tempor lorem risus non enim.
            Nam porttitor quam non quam lobortis, commodo pellentesque enim semper. Vestibulum a magna nulla.
            Donec aliquet nibh in velit elementum, vulputate pharetra eros varius. Sed ultricies facilisis dapibus.'
        ]);

        \App\Models\Role::insert([[
            'role' => 'admin',
        ], [
            'role' => 'mitra'
        ]]);
    }
}
