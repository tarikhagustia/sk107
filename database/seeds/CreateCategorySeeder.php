<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
          [
            'slug' => 'cerita-liburan',
            'name' => 'Cerita Liburan'
          ],
          [
            'slug' => 'promosi',
            'name' => 'Promosi'
          ],
          [
            'slug' => 'top-foto',
            'name' => 'Top Foto'
          ]
        ];

        foreach($categories as $row):
          Category::create($row);
        endforeach;
    }
}
