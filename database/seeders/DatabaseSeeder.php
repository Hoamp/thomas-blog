<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /*
        User::create([
            'name' => 'Thomas',
            'email' => 'thomas@gmail.com',
            'password' => bcrypt('asdasd')
        ]);

        User::create([
            'name' => 'Riki',
            'email' => 'riki@gmail.com',
            'password' => bcrypt('asdasd')
        ]);
        */

        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => "web-programming"
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => "personal"
        ]);

        Post::factory(20)->create();

        /*
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est blanditiis, tempora voluptates',
            'body' => 'maiores quia, magnam, vitae deleniti corrupti minus quo recusandae. Officia eius quas consectetur minima velit. Expedita qui ratione laboriosam eligendi quidem eius velit modi distinctio labore saepe ducimus tempora, corporis iusto ipsam aut nemo reprehenderit nihil? Cupiditate tenetur dicta eos blanditiis adipisci optio voluptatibus id vero earum sit dolorum nulla libero, quae delectus asperiores necessitatibus neque commodi qui nam mollitia, ipsa animi architecto accusantium? Animi eaque repellat quod repudiandae natus, iure hic veniam! Deserunt, minima. Est iste, nostrum exercitationem culpa quaerat dicta fuga doloribus, vitae in consequuntur esse?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est blanditiis, tempora voluptates',
            'body' => 'maiores quia, magnam, vitae deleniti corrupti minus quo recusandae. Officia eius quas consectetur minima velit. Expedita qui ratione laboriosam eligendi quidem eius velit modi distinctio labore saepe ducimus tempora, corporis iusto ipsam aut nemo reprehenderit nihil? Cupiditate tenetur dicta eos blanditiis adipisci optio voluptatibus id vero earum sit dolorum nulla libero, quae delectus asperiores necessitatibus neque commodi qui nam mollitia, ipsa animi architecto accusantium? Animi eaque repellat quod repudiandae natus, iure hic veniam! Deserunt, minima. Est iste, nostrum exercitationem culpa quaerat dicta fuga doloribus, vitae in consequuntur esse?',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est blanditiis, tempora voluptates',
            'body' => 'maiores quia, magnam, vitae deleniti corrupti minus quo recusandae. Officia eius quas consectetur minima velit. Expedita qui ratione laboriosam eligendi quidem eius velit modi distinctio labore saepe ducimus tempora, corporis iusto ipsam aut nemo reprehenderit nihil? Cupiditate tenetur dicta eos blanditiis adipisci optio voluptatibus id vero earum sit dolorum nulla libero, quae delectus asperiores necessitatibus neque commodi qui nam mollitia, ipsa animi architecto accusantium? Animi eaque repellat quod repudiandae natus, iure hic veniam! Deserunt, minima. Est iste, nostrum exercitationem culpa quaerat dicta fuga doloribus, vitae in consequuntur esse?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est blanditiis, tempora voluptates',
            'body' => 'maiores quia, magnam, vitae deleniti corrupti minus quo recusandae. Officia eius quas consectetur minima velit. Expedita qui ratione laboriosam eligendi quidem eius velit modi distinctio labore saepe ducimus tempora, corporis iusto ipsam aut nemo reprehenderit nihil? Cupiditate tenetur dicta eos blanditiis adipisci optio voluptatibus id vero earum sit dolorum nulla libero, quae delectus asperiores necessitatibus neque commodi qui nam mollitia, ipsa animi architecto accusantium? Animi eaque repellat quod repudiandae natus, iure hic veniam! Deserunt, minima. Est iste, nostrum exercitationem culpa quaerat dicta fuga doloribus, vitae in consequuntur esse?',
            'category_id' => 2,
            'user_id' => 2
        ]);
        */
    }
}
