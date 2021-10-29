<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'Nur Safitri',
        //     'email' => 'fitrinursa5@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Cahya Febrianti',
        //     'email' => 'cahyafd@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores minima, cupiditate laborum aliquid possimus mollitia!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores minima, cupiditate laborum aliquid possimus mollitia! Hic beatae eos cupiditate harum voluptatem a distinctio impedit magni incidunt temporibus sed nemo explicabo quasi dolor quas, ipsa consequatur, esse officia atque quos, iure totam nobis possimus. Sequi atque alias quod reiciendis culpa saepe? Ab tenetur ea consequuntur praesentium amet! Minima et, temporibus hic debitis, aut excepturi doloremque corrupti libero incidunt similique repudiandae. Perspiciatis nemo quasi harum laborum, reiciendis quas doloribus, dolor consequatur culpa similique in sapiente libero placeat optio perferendis exercitationem. Ipsa eveniet illo soluta tempora ipsum labore enim quia deleniti non nihil blanditiis officiis hic repellendus minus obcaecati voluptatem, quae dicta maiores quos architecto unde accusantium odio voluptates rem! A voluptatum unde corrupti saepe nemo exercitationem reprehenderit, eum nulla mollitia optio impedit possimus iste aut laudantium, deserunt, repudiandae dignissimos sequi quasi magni natus itaque sapiente assumenda? Soluta dolorum perspiciatis accusantium voluptatum libero.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores minima, cupiditate laborum aliquid possimus mollitia!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores minima, cupiditate laborum aliquid possimus mollitia! Hic beatae eos cupiditate harum voluptatem a distinctio impedit magni incidunt temporibus sed nemo explicabo quasi dolor quas, ipsa consequatur, esse officia atque quos, iure totam nobis possimus. Sequi atque alias quod reiciendis culpa saepe? Ab tenetur ea consequuntur praesentium amet! Minima et, temporibus hic debitis, aut excepturi doloremque corrupti libero incidunt similique repudiandae. Perspiciatis nemo quasi harum laborum, reiciendis quas doloribus, dolor consequatur culpa similique in sapiente libero placeat optio perferendis exercitationem. Ipsa eveniet illo soluta tempora ipsum labore enim quia deleniti non nihil blanditiis officiis hic repellendus minus obcaecati voluptatem, quae dicta maiores quos architecto unde accusantium odio voluptates rem! A voluptatum unde corrupti saepe nemo exercitationem reprehenderit, eum nulla mollitia optio impedit possimus iste aut laudantium, deserunt, repudiandae dignissimos sequi quasi magni natus itaque sapiente assumenda? Soluta dolorum perspiciatis accusantium voluptatum libero.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores minima, cupiditate laborum aliquid possimus mollitia!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores minima, cupiditate laborum aliquid possimus mollitia! Hic beatae eos cupiditate harum voluptatem a distinctio impedit magni incidunt temporibus sed nemo explicabo quasi dolor quas, ipsa consequatur, esse officia atque quos, iure totam nobis possimus. Sequi atque alias quod reiciendis culpa saepe? Ab tenetur ea consequuntur praesentium amet! Minima et, temporibus hic debitis, aut excepturi doloremque corrupti libero incidunt similique repudiandae. Perspiciatis nemo quasi harum laborum, reiciendis quas doloribus, dolor consequatur culpa similique in sapiente libero placeat optio perferendis exercitationem. Ipsa eveniet illo soluta tempora ipsum labore enim quia deleniti non nihil blanditiis officiis hic repellendus minus obcaecati voluptatem, quae dicta maiores quos architecto unde accusantium odio voluptates rem! A voluptatum unde corrupti saepe nemo exercitationem reprehenderit, eum nulla mollitia optio impedit possimus iste aut laudantium, deserunt, repudiandae dignissimos sequi quasi magni natus itaque sapiente assumenda? Soluta dolorum perspiciatis accusantium voluptatum libero.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores minima, cupiditate laborum aliquid possimus mollitia!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores minima, cupiditate laborum aliquid possimus mollitia! Hic beatae eos cupiditate harum voluptatem a distinctio impedit magni incidunt temporibus sed nemo explicabo quasi dolor quas, ipsa consequatur, esse officia atque quos, iure totam nobis possimus. Sequi atque alias quod reiciendis culpa saepe? Ab tenetur ea consequuntur praesentium amet! Minima et, temporibus hic debitis, aut excepturi doloremque corrupti libero incidunt similique repudiandae. Perspiciatis nemo quasi harum laborum, reiciendis quas doloribus, dolor consequatur culpa similique in sapiente libero placeat optio perferendis exercitationem. Ipsa eveniet illo soluta tempora ipsum labore enim quia deleniti non nihil blanditiis officiis hic repellendus minus obcaecati voluptatem, quae dicta maiores quos architecto unde accusantium odio voluptates rem! A voluptatum unde corrupti saepe nemo exercitationem reprehenderit, eum nulla mollitia optio impedit possimus iste aut laudantium, deserunt, repudiandae dignissimos sequi quasi magni natus itaque sapiente assumenda? Soluta dolorum perspiciatis accusantium voluptatum libero.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
