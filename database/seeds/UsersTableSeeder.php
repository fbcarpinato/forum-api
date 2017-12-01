<?php

use RESTfullServiceTest\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds for the user model.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
    }
}
