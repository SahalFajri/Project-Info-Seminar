<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Seminar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Sahal Fajri',
            'email' => 'sahalfajri@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Seminar::factory(20)->create();
    }
}










        // 'username' => 'sahal.fjr',
        // User::factory(10)->create();

        // Seminar::create([
        //     'title' => 'Judul Seminar Pertama',
        //     'slug' => 'judul-seminar-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nesciunt vero at modi, officiis eius iusto perspiciatis est debitis ullam consequuntur!',
        //     'tanggal_seminar' => '2021-10-15',
        //     'jam' => '01:04:00',
        //     'link' => 'https://youtube.com/channel/UCHziNk1Onpz29gN5xkcsmyg',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nesciunt vero at modi, officiis eius iusto perspiciatis est debitis ullam consequuntur! Quis praesentium ut accusamus sunt mollitia hic voluptas voluptatem. Cupiditate quam ex ullam animi ipsum ad tempore rerum accusantium assumenda,</p><p>consequatur veniam vel a debitis aperiam earum maxime. Numquam consequuntur quisquam nisi molestiae eos quasi nemo delectus soluta voluptas perspiciatis, architecto commodi repellat voluptates maiores laboriosam tempore incidunt magnam dicta rem debitis? Obcaecati dolor sint cumque iste amet,</p><p>corrupti dolore facere voluptates beatae necessitatibus possimus? Unde itaque id sed minus eius, soluta modi! Sunt excepturi illum natus, praesentium, cumque minima hic placeat sit, modi omnis nesciunt quibusdam. Quas eos non quaerat officia iste accusantium enim? Harum amet nobis quibusdam id libero quisquam? Veniam animi repellendus facere impedit fugit nulla,</p><p>nostrum voluptate, assumenda aperiam tenetur laudantium consectetur inventore hic dolorum eaque cupiditate possimus autem necessitatibus? Mollitia a aliquid id vitae?</p>'
        // ]);

        // Seminar::create([
        //     'title' => 'Judul Seminar Kedua',
        //     'slug' => 'judul-seminar-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nesciunt vero at modi, officiis eius iusto perspiciatis est debitis ullam consequuntur!',
        //     'tanggal_seminar' => '2021-10-14',
        //     'jam' => '20:14:00',
        //     'link' => 'https://youtube.com/channel/UCl4ccTAI9SCrhGvPzRO4LXw',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nesciunt vero at modi, officiis eius iusto perspiciatis est debitis ullam consequuntur! Quis praesentium ut accusamus sunt mollitia hic voluptas voluptatem. Cupiditate quam ex ullam animi ipsum ad tempore rerum accusantium assumenda,</p><p>consequatur veniam vel a debitis aperiam earum maxime. Numquam consequuntur quisquam nisi molestiae eos quasi nemo delectus soluta voluptas perspiciatis, architecto commodi repellat voluptates maiores laboriosam tempore incidunt magnam dicta rem debitis? Obcaecati dolor sint cumque iste amet,</p><p>corrupti dolore facere voluptates beatae necessitatibus possimus? Unde itaque id sed minus eius, soluta modi! Sunt excepturi illum natus, praesentium, cumque minima hic placeat sit, modi omnis nesciunt quibusdam. Quas eos non quaerat officia iste accusantium enim? Harum amet nobis quibusdam id libero quisquam? Veniam animi repellendus facere impedit fugit nulla,</p><p>nostrum voluptate, assumenda aperiam tenetur laudantium consectetur inventore hic dolorum eaque cupiditate possimus autem necessitatibus? Mollitia a aliquid id vitae?</p>'
        // ]);

        // Seminar::create([
        //     'title' => 'Judul Seminar Ketiga',
        //     'slug' => 'judul-seminar-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nesciunt vero at modi, officiis eius iusto perspiciatis est debitis ullam consequuntur!',
        //     'tanggal_seminar' => '2021-10-16',
        //     'jam' => '02:23:00',
        //     'link' => 'https://youtube.com/',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nesciunt vero at modi, officiis eius iusto perspiciatis est debitis ullam consequuntur! Quis praesentium ut accusamus sunt mollitia hic voluptas voluptatem. Cupiditate quam ex ullam animi ipsum ad tempore rerum accusantium assumenda,</p><p>consequatur veniam vel a debitis aperiam earum maxime. Numquam consequuntur quisquam nisi molestiae eos quasi nemo delectus soluta voluptas perspiciatis, architecto commodi repellat voluptates maiores laboriosam tempore incidunt magnam dicta rem debitis? Obcaecati dolor sint cumque iste amet,</p><p>corrupti dolore facere voluptates beatae necessitatibus possimus? Unde itaque id sed minus eius, soluta modi! Sunt excepturi illum natus, praesentium, cumque minima hic placeat sit, modi omnis nesciunt quibusdam. Quas eos non quaerat officia iste accusantium enim? Harum amet nobis quibusdam id libero quisquam? Veniam animi repellendus facere impedit fugit nulla,</p><p>nostrum voluptate, assumenda aperiam tenetur laudantium consectetur inventore hic dolorum eaque cupiditate possimus autem necessitatibus? Mollitia a aliquid id vitae?</p>'
        // ]);
