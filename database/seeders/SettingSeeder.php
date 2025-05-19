<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            // Branding
            'website_name' => 'My Boilerplate App',
            'site_title' => 'My Awesome Platform',
            'site_motto' => 'Empowering your ideas.',
            'site_logo_white' => 'images/settings/logo-white.png',
            'site_logo_black' => 'images/settings/logo-black.png',
            'site_favicon' => 'images/settings/favicon.ico',
            'login_background_image' => 'images/settings/login-bg.jpg',

            // Contact Information
            'primary_email' => 'admin@example.com',
            'support_email' => 'support@example.com',
            'info_email' => 'info@example.com',
            'sales_email' => 'sales@example.com',
            'primary_phone' => '+1234567890',
            'alternative_phone' => '+0987654321',
            'whatsapp_number' => '+1234567890',

            // Address
            'address_line_one' => '123 Boilerplate St.',
            'address_line_two' => 'Suite 456, Dev City',

            // Timezone & Language
            'default_language' => 'en',
            'default_currency' => 'BDT',
            'system_timezone' => 'Asia/Dhaka',

            // SEO & Analytics
            'site_url' => 'https://www.example.com',
            'meta_title' => 'Welcome to My Boilerplate App',
            'meta_keyword' => 'laravel, boilerplate, starter, template',
            'meta_tags' => 'laravel, php, framework',
            'meta_description' => 'A powerful Laravel boilerplate for any project.',
            'google_analytics' => null,
            'google_adsense' => null,
            'facebook_pixel_id' => null,
            'og_image' => 'uploads/settings/og-image.jpg',
            'og_title' => 'My Boilerplate App',
            'og_description' => 'Kickstart your Laravel projects with ease.',
            'canonical_url' => 'https://www.example.com',

            // Copyright
            'copyright_title' => '© 2025 My Company. All rights reserved.',
            'copyright_url' => 'https://www.example.com',

            // Social Media URLs
            'facebook_url' => 'https://facebook.com/mycompany',
            'instagram_url' => 'https://instagram.com/mycompany',
            'linkedin_url' => 'https://linkedin.com/company/mycompany',
            'whatsapp_url' => 'https://wa.me/1234567890',
            'twitter_url' => 'https://twitter.com/mycompany',
            'youtube_url' => 'https://youtube.com/@mycompany',
            'pinterest_url' => 'https://pinterest.com/mycompany',
            'reddit_url' => 'https://reddit.com/u/mycompany',
            'tumblr_url' => 'https://mycompany.tumblr.com',
            'tiktok_url' => 'https://tiktok.com/@mycompany',
            'website_url' => 'https://www.example.com',

            // Feature Toggles
            'maintenance_mode' => false,
            'enable_user_registration' => true,
            'enable_email_verification' => true,
            'enable_api_access' => false,
            'enable_multilanguage' => false,
            'is_demo' => false,

            // Business Settings
            'company_name' => 'My Company Inc.',
            'minimum_order_amount' => 50,

            // Business Hours
            'business_hours' => json_encode([
                'saturday' => ['start' => '09:00', 'end' => '18:00'],
                'sunday' => ['start' => '09:00', 'end' => '18:00'],
                'monday' => ['start' => '09:00', 'end' => '18:00'],
                'tuesday' => ['start' => '09:00', 'end' => '18:00'],
                'wednesday' => ['start' => '09:00', 'end' => '18:00'],
                'thursday' => ['start' => '09:00', 'end' => '18:00'],
                'friday' => ['start' => null, 'end' => null],
            ]),

            // Email Settings
            'mail_driver' => 'smtp',
            'mail_host' => 'smtp.mailtrap.io',
            'mail_port' => '2525',
            'mail_username' => 'user@example.com',
            'mail_password' => 'secret',
            'mail_encryption' => 'tls',
            'mail_from_address' => 'noreply@example.com',
            'mail_from_name' => 'My Boilerplate',

            // Security & Compliance
            'captcha_enabled' => false,
            'captcha_site_key' => null,
            'captcha_secret_key' => null,
            'cookie_consent_enabled' => true,
            'cookie_consent_text' => 'This website uses cookies to ensure you get the best experience.',
            'privacy_policy_url' => 'https://www.example.com/privacy',
            'terms_conditions_url' => 'https://www.example.com/terms',

            // Advanced Settings
            'theme_color' => '#3490dc',
            'dark_mode' => false,
            'custom_css' => null,
            'custom_js' => null,

            // Custom Settings (JSON object for dynamic config)
            'custom_settings' => json_encode([
                'some_plugin_enabled' => true,
                'max_upload_size_mb' => 20,
                'notifications_enabled' => true,
            ]),

            // Auditing
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
