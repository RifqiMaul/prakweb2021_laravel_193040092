<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Maul',
            'email' => 'Maul@gmail.com',
            'password' => bcrypt('Rifqiarmy!933')
        ]);

        User::create([
            'name' => 'Rifqi',
            'email' => 'Rifqi@gmail.com',
            'password' => bcrypt('Rifqiarmy!933')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic amet, quibusdam incidunt ea, maiores excepturi a cum reiciendis placeat blanditiis at laborum debitis quia eaque quos.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic amet, quibusdam incidunt ea, maiores excepturi a cum reiciendis placeat blanditiis at laborum debitis quia eaque quos. Laborum, corporis odio? Obcaecati esse maxime cupiditate, itaque, libero consequuntur fugit, officia natus distinctio dolorum nostrum! Quae qui doloremque error, expedita ut omnis ullam vel alias molestiae incidunt possimus atque officiis reprehenderit totam quibusdam architecto aperiam facilis quo cum. Assumenda eaque, similique aut blanditiis placeat facere deserunt eveniet maxime aliquam! Autem corporis animi sed in temporibus ex perferendis ipsa, ducimus distinctio voluptates quis vel aut quibusdam quam vero unde odio, dolore, tempora rem!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic amet, quibusdam incidunt ea, maiores excepturi a cum reiciendis placeat blanditiis at laborum debitis quia eaque quos.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic amet, quibusdam incidunt ea, maiores excepturi a cum reiciendis placeat blanditiis at laborum debitis quia eaque quos. Laborum, corporis odio? Obcaecati esse maxime cupiditate, itaque, libero consequuntur fugit, officia natus distinctio dolorum nostrum! Quae qui doloremque error, expedita ut omnis ullam vel alias molestiae incidunt possimus atque officiis reprehenderit totam quibusdam architecto aperiam facilis quo cum. Assumenda eaque, similique aut blanditiis placeat facere deserunt eveniet maxime aliquam! Autem corporis animi sed in temporibus ex perferendis ipsa, ducimus distinctio voluptates quis vel aut quibusdam quam vero unde odio, dolore, tempora rem!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic amet, quibusdam incidunt ea, maiores excepturi a cum reiciendis placeat blanditiis at laborum debitis quia eaque quos.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic amet, quibusdam incidunt ea, maiores excepturi a cum reiciendis placeat blanditiis at laborum debitis quia eaque quos. Laborum, corporis odio? Obcaecati esse maxime cupiditate, itaque, libero consequuntur fugit, officia natus distinctio dolorum nostrum! Quae qui doloremque error, expedita ut omnis ullam vel alias molestiae incidunt possimus atque officiis reprehenderit totam quibusdam architecto aperiam facilis quo cum. Assumenda eaque, similique aut blanditiis placeat facere deserunt eveniet maxime aliquam! Autem corporis animi sed in temporibus ex perferendis ipsa, ducimus distinctio voluptates quis vel aut quibusdam quam vero unde odio, dolore, tempora rem!',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic amet, quibusdam incidunt ea, maiores excepturi a cum reiciendis placeat blanditiis at laborum debitis quia eaque quos.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic amet, quibusdam incidunt ea, maiores excepturi a cum reiciendis placeat blanditiis at laborum debitis quia eaque quos. Laborum, corporis odio? Obcaecati esse maxime cupiditate, itaque, libero consequuntur fugit, officia natus distinctio dolorum nostrum! Quae qui doloremque error, expedita ut omnis ullam vel alias molestiae incidunt possimus atque officiis reprehenderit totam quibusdam architecto aperiam facilis quo cum. Assumenda eaque, similique aut blanditiis placeat facere deserunt eveniet maxime aliquam! Autem corporis animi sed in temporibus ex perferendis ipsa, ducimus distinctio voluptates quis vel aut quibusdam quam vero unde odio, dolore, tempora rem!',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
