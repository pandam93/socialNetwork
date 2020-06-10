<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->states('student-1DAW')->create();
        factory(User::class,5)->states('professor-1DAW')->create();

        factory(User::class, 20)->states('student-2DAW')->create();
        factory(User::class,5)->states('professor-2DAW')->create();

        factory(User::class, 20)->states('student-1DAM')->create();
        factory(User::class,5)->states('professor-1DAM')->create();

        factory(User::class, 20)->states('student-2DAM')->create();
        factory(User::class,5)->states('professor-2DAW')->create();

        factory(User::class, 20)->states('student-1ASIR')->create();
        factory(User::class,5)->states('professor-1ASIR')->create();

        factory(User::class, 20)->states('student-2ASIR')->create();
        factory(User::class,5)->states('professor-2ASIR')->create();
    }
}
