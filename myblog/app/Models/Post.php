<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts = [
        [
            "judul"=>"Judul 1",
            "penulis"=>"Penulis 1",
            "kontent"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, expedita atque.
            Similique eos dicta ut, vitae sapiente natus dolorum nostrum mollitia? Debitis sapiente
            esse minima incidunt impedit corrupti facilis atque tempore obcaecati! Facilis reiciendis
            labore magni consectetur esse perspiciatis accusantium quos eaque! Expedita corrupti totam
            earum, culpa assumenda laborum eius?"
        ],
        [
            "judul"=>"Judul 2",
            "penulis"=>"Penulis 2",
            "kontent"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, expedita atque.
            Similique eos dicta ut, vitae sapiente natus dolorum nostrum mollitia? Debitis sapiente
            esse minima incidunt impedit corrupti facilis atque tempore obcaecati! Facilis reiciendis
            labore magni consectetur esse perspiciatis accusantium quos eaque! Expedita corrupti totam
            earum, culpa assumenda laborum eius?"
        ]
   ];

    public static function all(){
        return self::$blog_posts;
    }
}


