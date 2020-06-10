<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'Desarrollo de Aplicaciones Multiplataforma',
            'name_short' => '1º DAM',
            'year' => '1',
            'classroom' => 'Aula 1',
        ]);

        DB::table('courses')->insert([
            'name' => 'Desarrollo de Aplicaciones Multiplataforma',
            'name_short' => '2º DAM',
            'year' => '2',
            'classroom' => 'Aula 2',
        ]);

        DB::table('courses')->insert([
            'name' => 'Desarrollo de Aplicaciones Web',
            'name_short' => '1º DAW',
            'year' => '1',
            'classroom' => 'Aula 3',
        ]);

        DB::table('courses')->insert([
            'name' => 'Desarrollo de Aplicaciones Web',
            'name_short' => '2º DAW',
            'year' => '2',
            'classroom' => 'Aula 4',
        ]);

        DB::table('courses')->insert([
            'name' => 'Administración de Sistemas Informáticos en Red',
            'name_short' => '1º ASIR',
            'year' => 'Primero',
            'classroom' => 'Aula 5',
        ]);

        DB::table('courses')->insert([
            'name' => 'Administración de Sistemas Informáticos en Red',
            'name_short' => '2º ASIR',
            'year' => 'Segundo',
            'classroom' => 'Aula 6',
        ]);
    }
}
