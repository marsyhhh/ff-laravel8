<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Post::factory(30)->create();

        // User::create([
        //     'name' => 'Marsyah Fajar M',
        //     'email' => 'marsyhhhf@gmail.com',
        //     'password' => '12345678',
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'tittle' => 'Posting Pertama',
        //     'slug' => 'postin-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, ad optio? Voluptas impedit necessitatibus molestias eaque accusantium magni doloribus, laudantium unde tenetur. Dolorum reprehenderit eligendi deserunt quae quo harum id!'     
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'tittle' => 'Posting Kedua',
        //     'slug' => 'postin-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, ad optio? Voluptas impedit necessitatibus molestias eaque accusantium magni doloribus, laudantium unde tenetur. Dolorum reprehenderit eligendi deserunt quae quo harum id!'     
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'tittle' => 'Posting Ketiga',
        //     'slug' => 'postin-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, ad optio? Voluptas impedit necessitatibus molestias eaque accusantium magni doloribus, laudantium unde tenetur. Dolorum reprehenderit eligendi deserunt quae quo harum id!'     
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'tittle' => 'Posting keempat',
        //     'slug' => 'postin-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, ad optio? Voluptas impedit necessitatibus molestias eaque accusantium magni doloribus, laudantium unde tenetur. Dolorum reprehenderit eligendi deserunt quae quo harum id!'     
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'tittle' => 'Posting kelima',
        //     'slug' => 'postin-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, ad optio? Voluptas impedit necessitatibus molestias eaque accusantium magni doloribus, laudantium unde tenetur. Dolorum reprehenderit eligendi deserunt quae quo harum id!'     
        // ]);
    }
}
