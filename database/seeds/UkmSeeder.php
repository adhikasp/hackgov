<?php

use Illuminate\Database\Seeder;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ukms')->delete();
        factory(App\Model\Ukm\Ukm::class, 50)->create();
    }
}
