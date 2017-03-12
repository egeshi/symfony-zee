<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class VocabularySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for($i=0;$i<rand(10,20); $i++){
            DB::table('vocabulary')->insert([
                'word' => $faker->words(1)[0],
            ]);
        }


    }
}
