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
        $f = Faker\Factory::create();
        $category = ['Kerajinan', 'Pakaian', 'Aksesoris', 'Lain-lain', 'Kuliner'];

        DB::table('users')->delete();
        DB::table('ukms')->delete();
        DB::table('products')->delete();
        DB::table('articles')->delete();

        App\Model\User::create([
            'email' => 'hello@adhikasetyap.me',
            'name'  => 'Adhika Setya Pramudita',
            'password' => bcrypt('123456'),
        ]);

       App\Model\Ukm\Ukm::create([
            'name'  => 'Kelompok Ibu-ibu Pengrajin Eceng Gondok Wates',
            'long_description' => $f->text(),
            'category' => 'Kerajinan',
            'profile_picture' => '/images/ukm1.jpg',
            'follower_number' => $f->numberBetween(1, 9999)
        ]);
       App\Model\Ukm\Ukm::create([
            'name'  => 'UKM Batik Tulis Khas Ponorogo',
            'long_description' => $f->text(),
            'category' => 'Pakaian',
            'profile_picture' => '/images/ukm2.jpg',
            'follower_number' => $f->numberBetween(1, 9999)
        ]);
       App\Model\Ukm\Ukm::create([
            'name'  => 'Kelompok Ibu-ibu Pengrajin Eceng Gondok Wates',
            'long_description' => $f->text(),
            'category' => 'Kerajinan',
            'profile_picture' => '/images/ukm3.jpg',
            'follower_number' => $f->numberBetween(1, 9999)
        ]);
       App\Model\Ukm\Ukm::create([
            'name'  => 'Kelompok Ibu-ibu Pengrajin Eceng Gondok Wates',
            'long_description' => $f->text(),
            'category' => 'Kerajinan',
            'profile_picture' => '/images/ukm4.jpg',
            'follower_number' => $f->numberBetween(1, 9999)
        ]);

       App\Model\Ukm\Product::create([
            'name' => 'Kemeja batik tulis kualitas super',
            'ukm_id' => 2,
            'photo' => '\images\product\batik-1.jpg',
            'price' => $f->numberBetween(30, 150) * 1000,
        ]);
       App\Model\Ukm\Product::create([
            'name' => 'Kemeja batik tulis kualitas super',
            'ukm_id' => 2,
            'photo' => '\images\product\batik-2.jpg',
            'price' => $f->numberBetween(30, 150) * 1000,
        ]);
       App\Model\Ukm\Product::create([
            'name' => 'Kemeja batik tulis kualitas super',
            'ukm_id' => 2,
            'photo' => '\images\product\batik-3.jpg',
            'price' => $f->numberBetween(30, 150) * 1000,
        ]);

        factory(App\Model\User::class, 10)->create();
        factory(App\Model\Ukm\Ukm::class, 20)->create();
        factory(App\Model\Ukm\Article::class, 20)->create();
        factory(App\Model\Ukm\Product::class, 80)->create();
    }
}
