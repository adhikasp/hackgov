<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        App\Model\User::create([
            'email' => 'hello@adhikasetyap.me',
            'name'  => 'Adhika Setya Pramudita',
            'password' => bcrypt('123456'),
        ]);

        factory(App\Model\User::class, 50)->create();
    }
}
