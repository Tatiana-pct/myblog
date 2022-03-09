<?php

namespace Database\Seeders;


use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories= ['Sport', 'It', 'Science', 'physic'];

        for ($i=0; $i < count($categories); $i++){
            category::create([
                'label'=>$categories[$i]
            ]);
        }
    }
}
