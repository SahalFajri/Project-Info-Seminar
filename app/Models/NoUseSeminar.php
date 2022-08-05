<?php

namespace App\Models;

class Seminar
{
    private static $web_seminars = [
        [
            "title" => "Judul Seminar Pertama",
            "slug" => "judul-seminar-pertama",
            "date" => "Rabu, 20 Oktober 2021",
            "time" => "20:00",
            "link" => "www.instagram.com",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla omnis assumenda quo dolore possimus. Nemo, quasi fugit. Tempora provident deserunt, voluptatum dolores reprehenderit, dolor est quo, ipsa quasi vitae asperiores sint expedita porro quod in repudiandae autem vel mollitia obcaecati unde quos veritatis voluptates labore? Sint ullam aliquid dolor, consectetur nisi ea praesentium eligendi perspiciatis dolorem. Unde, sapiente fugit obcaecati, dolorem voluptatum, vitae perspiciatis tenetur necessitatibus voluptatem optio quibusdam. Possimus pariatur dolor dicta facilis modi animi nisi laudantium placeat! Dolores!"
        ],
        [
            "title" => "Judul Seminar Kedua",
            "slug" => "judul-seminar-kedua",
            "date" => "Sabtu, 30 Oktober 2021",
            "time" => "20:30",
            "link" => "www.github.com",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla omnis assumenda quo dolore possimus. Nemo, quasi fugit. Tempora provident deserunt, voluptatum dolores reprehenderit, dolor est quo, ipsa quasi vitae asperiores sint expedita porro quod in repudiandae autem vel mollitia obcaecati unde quos veritatis voluptates labore? Sint ullam aliquid dolor, consectetur nisi ea praesentium eligendi perspiciatis dolorem. Unde, sapiente fugit obcaecati, dolorem voluptatum, vitae perspiciatis tenetur necessitatibus voluptatem optio quibusdam. Possimus pariatur dolor dicta facilis modi animi nisi laudantium placeat! Dolores!"
        ]
    ];

    public static function all()
    {
        // Menyimpan $web_seminars ke collection
        return collect(self::$web_seminars);
    }

    public static function find($slug)
    {
        // mengambil data dari collection yang isinya $web_seminars
        $seminars = static::all();

        // kembalikan data $seminar yang sudah melakukan pencarian
        return $seminars->firstWhere('slug', $slug);
    }
}
