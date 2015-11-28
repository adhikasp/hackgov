<?php

use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();
        DB::table('ukms')->delete();

        App\Model\User::create([
            'email' => 'hello@adhikasetyap.me',
            'name'  => 'Adhika Setya Pramudita',
            'password' => bcrypt('123456'),
        ]);

        factory(App\Model\User::class, 20)->create();
        factory(App\Model\Ukm\Ukm::class, 40)->create();
        factory(App\Model\Ukm\Article::class, 100)->create();
    }
}
