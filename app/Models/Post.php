<?php

namespace App\Models;

class Post
{
    private static $blogData = [
        [
            "title" => "My Content 1",
            "slug" => "my-content-1",
            "author" => "Muhammad Zamrony",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos eius porro saepe beatae debitis fuga vitae quo quia veniam. In repellat velit eius cum saepe corporis officia repudiandae quas dignissimos, itaque perferendis amet aut voluptatum necessitatibus laborum nihil ea totam aperiam soluta. Exercitationem nesciunt nisi nulla sequi ut temporibus? Delectus mollitia exercitationem, corrupti, sunt, sed sit repellendus beatae dolorem similique distinctio reprehenderit excepturi? Obcaecati possimus, nemo nostrum repellendus laboriosam quod consectetur mollitia expedita repudiandae aut assumenda temporibus corrupti modi molestiae dicta molestias voluptatibus quas doloremque natus porro, nisi impedit? Explicabo eligendi officia rem doloribus beatae cumque maiores vitae, voluptate ipsa?"
        ],
        [
            "title" => "My Content 2",
            "slug" => "my-content-2",
            "author" => "Muhammad Zamrony",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos eius porro saepe beatae debitis fuga vitae quo quia veniam. In repellat velit eius cum saepe corporis officia repudiandae quas dignissimos, itaque perferendis amet aut voluptatum necessitatibus laborum nihil ea totam aperiam soluta. Exercitationem nesciunt nisi nulla sequi ut temporibus? Delectus mollitia exercitationem, corrupti, sunt, sed sit repellendus beatae dolorem similique distinctio reprehenderit excepturi? Obcaecati possimus, nemo nostrum repellendus laboriosam quod consectetur mollitia expedita repudiandae aut assumenda temporibus corrupti modi molestiae dicta molestias voluptatibus quas doloremque natus porro, nisi impedit? Explicabo eligendi officia rem doloribus beatae cumque maiores vitae, voluptate ipsa?"
        ],
        [
            "title" => "My Content 3",
            "slug" => "my-content-3",
            "author" => "Muhammad Zamrony",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos eius porro saepe beatae debitis fuga vitae quo quia veniam. In repellat velit eius cum saepe corporis officia repudiandae quas dignissimos, itaque perferendis amet aut voluptatum necessitatibus laborum nihil ea totam aperiam soluta. Exercitationem nesciunt nisi nulla sequi ut temporibus? Delectus mollitia exercitationem, corrupti, sunt, sed sit repellendus beatae dolorem similique distinctio reprehenderit excepturi? Obcaecati possimus, nemo nostrum repellendus laboriosam quod consectetur mollitia expedita repudiandae aut assumenda temporibus corrupti modi molestiae dicta molestias voluptatibus quas doloremque natus porro, nisi impedit? Explicabo eligendi officia rem doloribus beatae cumque maiores vitae, voluptate ipsa?"
        ],
    ];

    public static function all(){
        return collect(self::$blogData);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
