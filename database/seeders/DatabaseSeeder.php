<?php

namespace Database\Seeders;

//use App\Models\User;
//use App\Models\About;
//use App\Models\Skill;
//use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::factory()
//            ->hasAttached(Project::factory()->count(2))
//            ->hasAttached(Skill::factory()->count(2))
//            ->count(2)
//            ->create();
//        About::factory()->count(1)->create();

        DB::table('users')->insert([
            'name' => 'Jake Bogan',
            'email' => 'jakebogan01@gmail.com',
            'email_verified_at' => '2022-01-17 08:30:58',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => 'AEg0w9lSXL',
            'deleted_at' => NULL,
            'created_at' => '2022-01-17 08:30:58',
            'updated_at' => '2022-01-17 08:30:58',
        ]);

        DB::table('skills')->insert([
            [
                'name' => 'laravel',
                'skill_url' => 'https://laravel.com/',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'name' => 'mysql',
                'skill_url' => 'https://www.mysql.com/',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'name' => 'php',
                'skill_url' => 'https://www.php.net/',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'name' => 'vue',
                'skill_url' => 'https://v3.vuejs.org/',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'name' => 'laravel-nova',
                'skill_url' => 'https://nova.laravel.com/',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'name' => 'tailwindcss',
                'skill_url' => 'https://tailwindcss.com/',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
        ]);

        DB::table('skill_user')->insert([
            [
                'user_id' => 1,
                'skill_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'user_id' => 1,
                'skill_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'user_id' => 1,
                'skill_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'user_id' => 1,
                'skill_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'user_id' => 1,
                'skill_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'user_id' => 1,
                'skill_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
        ]);

        DB::table('projects')->insert([
            [
                'image_index' => 0,
                'title' => 'My Portfolio',
                'summary' => 'This is my personal portfolio showcasing a handful of projects. Here, you can read a little about me and if you like what you see, please reach out',
                'tags' => '{"tag_1": "laravel", "tag_2": "Inertia", "tag_3": "vue"}',
                'likes' => 0,
                'code_url' => 'https://jakebogan.dev/contact',
                'github_url' => 'https://github.com/jakebogan01/my-portfolio',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'image_index' => 1,
                'title' => 'Professional Form',
                'summary' => 'A quick glance at a professional form, demonstrating a simple yet easy to follow flow for any potential client. Fill out the form to access a free asset for the intended user',
                'tags' => '{"tag_1": "laravel", "tag_2": "tailwind", "tag_3": null}',
                'likes' => 0,
                'code_url' => 'http://radiant-stream-33494.herokuapp.com',
                'github_url' => 'https://github.com/jakebogan01/Landing-Page',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'image_index' => 2,
                'title' => 'Messaging App',
                'summary' => 'This app allows you to enjoy messaging as a group. Communicate with whomever is online, laugh, smile, and engage with others, all in one place',
                'tags' => '{"tag_1": "vue", "tag_2": null, "tag_3": null}',
                'likes' => 0,
                'code_url' => 'https://live-chat-c46ce.web.app',
                'github_url' => 'https://github.com/jakebogan01/Live-Chat',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'image_index' => 3,
                'title' => 'Gamenet',
                'summary' => "Love Games? If you do this simple example of an app displays several popular games. Don't forget to register to add your favorite games as well",
                'tags' => '{"tag_1": "laravel", "tag_2": "tailwind", "tag_3": null}',
                'likes' => 0,
                'code_url' => 'http://evening-everglades-28061.herokuapp.com',
                'github_url' => 'https://github.com/jakebogan01/Game-Reviews',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
        ]);

        DB::table('project_user')->insert([
            [
                'user_id' => 1,
                'project_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'user_id' => 1,
                'project_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'user_id' => 1,
                'project_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'user_id' => 1,
                'project_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
        ]);

        DB::table('about_users')->insert([
            'user_id' => 1,
            'name' => 'Jake Bogan',
            'job_title' => 'Jr Web Developer',
            'city' => ' Virginia Beach',
            'state' => 'VA',
            'social_links' => '{"github": "https://github.com/jakebogan01", "linkedin": "https://www.linkedin.com/in/theron-bogan-574b98209/"}',
            'body' => '<h3 style="color: #FFFFFF; font-size: 1.5rem; margin-top: 0.625rem; font-weight: 700;">About Me</h3><br><p>Hello world, my name is Jake Bogan and I am a Junior Full Stack Web Developer who loves coding, creating, and building out dreams.</p><br><p>Originally, I started my love of development back in 2018. You can say it had caught my eye, and I have been hooked ever since. I started with learning HTML and CSS, and with those two technologies I did nothing but design whatever had come to mind. I then ventured off to do more with interactive projects such as HTML canvas game development.</p><br><p>But... everything soon changed when I enrolled in school in 2019. While majoring in IT I took web development classes as side electives and began pursuing my goals as a developer. I soon graduated and found an internship as a Web Designer for a company using WordPress for two months before finding a new position that allowed me to grow more.</p><br></p>Fast forward to today, and I am currently employed with <a href="https://leadmarvels.com/" target=”_blank” style="color: #67e8f9; font-size: 1.125rem; font-weight: 600;">Lead Marvels</a>, where I solve problems, design sites and code in Laravel every day, all while giving my best to our clients. I am someone who loves learning and during my stay here I have not gone a day without learning something new.</p><br><h3 style="color: #FFFFFF; font-size: 1.5rem; margin-top: 0.625rem; font-weight: 700;">My Experiences</h3><br><p>My year stay at Lead Marvels has given me the knowledge to pursue my developer passions. I am strongly adequate with PHP and its framework, Laravel. I am experienced with creating migrations, models, controllers, and views. I understand the MVC structure and utilized technologies such as Tailwind CSS, Livewire, Nova and more. I understand the basics of SQL when querying MySQL data, including Laravel eloquent querying. I also have utilized frameworks such as Vue, React, and Jquery as well. I am continuously learning and plan to master my craft.</p>',
            'deleted_at' => NULL,
            'created_at' => '2022-01-17 08:30:58',
            'updated_at' => '2022-01-17 08:30:58',
        ]);
    }
}
