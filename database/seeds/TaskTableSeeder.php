<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professor = DB::table('users')->where('rol', 'professor')->first();
        $student = DB::table('users')->where('rol', 'student')->first();
        
        DB::table('tasks')->insert([
            'name' => 'examen de putos',
            'description' => 'si sale bien esto me voy a ver la serie',
            'rol' => 'exam',
            'finnished_at' => Carbon::tomorrow()->toDateString(),

        ]);



        DB::table('notes')->insert([
            'task_id' => 1,
            'student_id' => 1,
            'state' => 'n',
            'professor_id' => 25,
            'signature_id' => 6,

        ]);
        
        DB::table('tasks')->insert([
            'name' => 'asdasdasd',
            'description' => '1',
            'rol' => 'work',
        ]);

        DB::table('notes')->insert([
            'task_id' => 2,
            'student_id' => 1,
            'state' => 'n',
            'professor_id' => 25,
            'signature_id' => 6,

        ]);

        DB::table('tasks')->insert([
            'name' => 'asdasdasd',
            'description' => '1',
            'rol' => 'work',
        ]);

        DB::table('notes')->insert([
            'task_id' => 3,
            'student_id' => 1,
            'state' => 'n',
            'professor_id' => 24,
            'signature_id' => 5,

        ]);

        DB::table('tasks')->insert([
            'name' => 'Hemos triunfado Manín',
            'description' => '1',
            'rol' => 'work',
        ]);

        DB::table('notes')->insert([
            'task_id' => 4,
            'student_id' => 1,
            'state' => 'y',
            'professor_id' => 24,
            'signature_id' => 5,

        ]);

        DB::table('tasks')->insert([
            'name' => 'Tema 3 y 4',
            'description' => 'examen de recuperación para aquellos que han suspendido',
            'rol' => 'exam',
            'finnished_at' => Carbon::tomorrow()->toDateString(),

        ]);

        DB::table('notes')->insert([
            'task_id' => 5,
            'student_id' => 1,
            'state' => 'n',
            'professor_id' => 23,
            'signature_id'=> 3
        ]);

        DB::table('tasks')->insert([
            'name' => 'Este examen no debería salir',
            'description' => 'examen de recuperación para aquellos que han suspendido',
            'rol' => 'exam',
            'finnished_at' => Carbon::now()->addDays(20),

        ]);

        DB::table('notes')->insert([
            'task_id' => 6,
            'student_id' => 1,
            'state' => 'n',
            'professor_id' => 23,
            'signature_id'=> 3
        ]);
        

    }
}
