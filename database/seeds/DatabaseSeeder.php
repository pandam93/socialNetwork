<?php

use App\Message;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CoursesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SignaturesTableSeeder::class);
        //$this->call(TaskTableSeeder::class);
        //$this->call(MessagesTableSeeder::class);
        $this->call(NotesTableSeeder::class);
    }
}
