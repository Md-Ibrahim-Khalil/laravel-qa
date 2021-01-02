<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create()->each(function($u) {
            $u->questions()
              ->saveMany(
                    factory(App\Question::class, rand(1, 5))->make()
              );

        });



        // $users = factory(App\User::class, 3)
        //     ->create()
        //     ->each(function ($users) {
        //     $users->questions()->save(factory(App\Question::class, rand(1, 5))->make());
        //     });

    }
}
