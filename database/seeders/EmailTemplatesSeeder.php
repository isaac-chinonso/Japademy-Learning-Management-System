<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmailTemplate;

class EmailTemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert email templates into the email_templates table
        EmailTemplate::create([
            'type' => 'user_activation',
            'name' => 'User Activation Email',
            'content' => '<div>Hi {{name}}, activate your account using this link: {{activation_link}}</div>',
        ]);

        EmailTemplate::create([
            'type' => 'welcome_mail',
            'name' => 'Welcome Email',
            'content' => '<div>Welcome {{name}}! We are thrilled to have you on board.</div>',
        ]);
    }
}
