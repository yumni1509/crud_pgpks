<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "mimi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptatem, soluta eveniet tempora et nulla animi harum, 
            rerum maxime atque libero amet dicta dolor eos cum cupiditate 
            repellat eius vero facilis impedit modi obcaecati eum accusantium.
             Nisi asperiores nostrum voluptatem quia repellendus 
             perferendis rem nam dolor provident praesentium commodi ipsam 
             voluptatum vitae itaque, sequi quisquam ut saepe debitis tempore 
             nihil nemo deserunt. Impedit molestiae similique, at sapiente 
             quis omnis reprehenderit cum repellat esse aliquid ea rerum
              optio laudantium maxime, corporis nemo?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "mimimi2",
            "body" => "Lorem ipsum dolor sit, amet consectetur 
            adipisicing elit. Hic tempore in aliquid laborum, 
            alias cum iste, ullam deserunt, animi dignissimos 
            nemo obcaecati nesciunt accusantium eius similique. 
            Nesciunt, dignissimos at tempore facilis officia sit 
            iste libero nostrum odit esse veritatis enim fugiat vel 
            sapiente alias! Architecto voluptatem mollitia, praesentium 
            autem animi enim corrupti beatae hic minus quae totam? Illo 
            possimus, nisi provident nobis quasi consequatur in, soluta 
            repellendus quo ipsam amet est, incidunt asperiores minima 
            temporibus iusto quibusdam aspernatur delectus voluptatum 
            nesciunt! Tenetur id nam ut error, saepe consectetur voluptas 
            nulla ipsa, sunt, alias distinctio maxime illo ab. Delectus, 
            debitis reiciendis."
        ],
    ];

    public static function all() //untuk kesemua data
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug) //untuk mengambil satu
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
