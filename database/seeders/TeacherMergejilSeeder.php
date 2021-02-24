<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeacherMergejil;

class TeacherMergejilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherMergejil::create([
            'ner' => 'Ерөнхий эрдмийн тэнхим'
        ]);

        TeacherMergejil::create([
            'ner' => 'Техник технологийн тэнхим'
        ]);
    }
}
