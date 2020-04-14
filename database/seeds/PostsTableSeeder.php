<?php

use App\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $posts = [
            'Mi primer post',
            'Segundo post',
            'Tercer post de prueba'
        ];

        $post = new Post;
        $post->title = 'Primer post';
        $post->excerpt = 'Extracto de mi primer post';
        $post->body = '<p>Contenido de mi primer post</p>';
        $post->category_id = 1;
        $post->published_at = Carbon::now();
        $post->save();
        $
    }
}
