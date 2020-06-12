<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
use Carbon\Carbon;



class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'content' => Str::random(50),
            'from_id' => User::find(1)->id,
            'to_id' => User::find(2)->id,
            'time_sent' => Carbon::now()
        ]);

        DB::table('messages')->insert([
            'content' => Str::random(50),
            'from_id' => User::find(1)->id,
            'to_id' => User::find(2)->id,
            'time_sent' => Carbon::now()
        ]);

        DB::table('messages')->insert([
            'content' => Str::random(50),
            'from_id' => User::find(2)->id,
            'to_id' => User::find(1)->id,
            'time_sent' => Carbon::now()
        ]);

        DB::table('messages')->insert([
            'content' => Str::random(10),
            'from_id' => User::find(2)->id,
            'to_id' => User::find(1)->id,
            'time_sent' => Carbon::now(),
            'time_read' => Carbon::now()
        ]);

        DB::table('messages')->insert([
            'content' => Str::random(100),
            'from_id' => User::find(3)->id,
            'to_id' => User::find(1)->id,
            'time_sent' => Carbon::now()
        ]);
        
    }
}
