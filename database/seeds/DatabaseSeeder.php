<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TweetSeeder::class);
        $this->call(FollowerSeeder::class);
        $this->call(MessageSeeder::class);

        Model::reguard();
    }
}