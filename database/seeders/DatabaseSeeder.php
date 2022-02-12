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
            'email' => 'jbogan@leadmarvels.com',
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
                'summary' => 'This is my personal portfolio built with Laravel, Inertia, and Vue JS. Using tailwind CSS on the front end, I hope you enjoy it.',
                'tags' => '{"tag_1": "laravel", "tag_2": "tailwind", "tag_3": "vue"}',
                'likes' => 0,
                'code_url' => 'https://my-portfolio.test/contact',
                'github_url' => 'https://github.com/jakebogan01/my-portfolio',
                'deleted_at' => NULL,
                'created_at' => '2022-01-17 08:30:58',
                'updated_at' => '2022-01-17 08:30:58',
            ],
            [
                'image_index' => 1,
                'title' => 'Client Page',
                'summary' => 'As a business landing page, that includes a thank you page consisting of a free asset given to its viewers. It’s an eloquent design for businesses that want to provide resources to their users.',
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
                'title' => 'Message App',
                'summary' => 'This is a live chat application made with Vue, that allows users to log into a live chat room. Users can create and read messages in real-time.',
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
                'summary' => 'Gamenet is an online marketing platform for the newest releases of video games. Not only can users view games, but they can also register to add their own favorite titles for all to enjoy.',
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
            'body' => '<h3 style="color: #FFFFFF; font-size: 1.5rem; margin-top: 0.625rem; font-weight: 700;">About Me</h3><br><p>Hello, my name is Jake Bogan and I am a web developer who loves to code, create, and build.</p><br><p>Originally from the west coast, I have been living in Virginia for several years and have experience with a variety of web technologies. From working as a web designer to becoming a Jr Web Developer. I have 3 years of web experience that delivers. I have created websites for businesses, designed custom graphics, and secured online orders. I can provide you with creative ideas, beautiful designs, and a site that is both functional and interactive.</p><br><p>I graduated from college in 2019, majoring in Information Technology. I am currently employed with <a href="https://leadmarvels.com/" target=”_blank” style="color: #67e8f9; font-size: 1.125rem; font-weight: 600;">Leadmarvels</a> as a Jr Developer, where I design and create content for clients. I am a programmer who loves to learn. I also like to teach and work on team projects.</p><br><h3 style="color: #FFFFFF; font-size: 1.5rem; margin-top: 0.625rem; font-weight: 700;">My Experiences</h3><br><p>As a developer and designer, I work closely with Marketing Partners to ensure their content is optimized for their websites. I maintain a strong understanding of current trends in web design and pursue responsiveness across all devices. I have worked with teams to design and develop websites, mobile sites, and mobile applications. Using a variety of programming languages, frameworks, and tools, I always complete every job effectively.</p><br><p>I more than often troubleshoot bugs in an existing codebase. Also, I assist with the development of new features and ensure that all code is written according to best practices.</p>',
            'deleted_at' => NULL,
            'created_at' => '2022-01-17 08:30:58',
            'updated_at' => '2022-01-17 08:30:58',
        ]);
    }
}
