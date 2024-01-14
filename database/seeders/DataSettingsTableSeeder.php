<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_settings')->delete();
        
        \DB::table('data_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'admin_login_url',
                'value' => 'admin',
                'type' => 'login_admin',
                'created_at' => '2023-06-11 17:34:59',
                'updated_at' => '2023-06-11 17:34:59',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'admin_employee_login_url',
                'value' => 'admin-employee',
                'type' => 'login_admin_employee',
                'created_at' => '2023-06-11 17:34:59',
                'updated_at' => '2023-06-11 17:34:59',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'store_login_url',
                'value' => 'store',
                'type' => 'login_store',
                'created_at' => '2023-06-11 17:34:59',
                'updated_at' => '2023-06-11 17:34:59',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'store_employee_login_url',
                'value' => 'store-employee',
                'type' => 'login_store_employee',
                'created_at' => '2023-06-11 17:34:59',
                'updated_at' => '2023-06-11 17:34:59',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'fixed_header_title',
                'value' => 'Manage Your  Daily Life in one platform',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:06:27',
                'updated_at' => '2023-06-11 18:06:27',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'fixed_header_sub_title',
                'value' => 'More than just a reliable  eCommerce platform',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:06:27',
                'updated_at' => '2023-06-11 18:06:27',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'fixed_module_title',
                'value' => 'Your eCommerce venture starts here !',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:06:27',
                'updated_at' => '2023-06-11 18:06:27',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'fixed_module_sub_title',
                'value' => 'Enjoy all services in one platform',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:06:27',
                'updated_at' => '2023-06-11 18:06:27',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'fixed_referal_title',
                'value' => 'Earn point by',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:06:27',
                'updated_at' => '2023-06-11 18:06:27',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'fixed_referal_sub_title',
                'value' => 'Refer Your Friend',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:06:27',
                'updated_at' => '2023-06-11 18:06:27',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'fixed_newsletter_title',
                'value' => 'Sign Up to Our Newsletter',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:06:27',
                'updated_at' => '2023-06-11 18:06:27',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'fixed_newsletter_sub_title',
                'value' => 'Receive Latest News, Updates and Many Other News Every Week',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:06:27',
                'updated_at' => '2023-06-11 18:06:27',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'fixed_footer_article_title',
                'value' => '6amMart is a complete package!  It\'s time to empower your multivendor online business with  powerful features!',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:06:27',
                'updated_at' => '2023-06-11 18:06:27',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'feature_title',
                'value' => 'Remarkable Features that You Can Count!',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:14:25',
                'updated_at' => '2023-06-11 18:14:25',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'feature_short_description',
                'value' => 'Jam-packed with outstanding features to elevate your online ordering and delivery easier, and smarter than ever before. It\'s time to empower your multivendor online business with 6amMart\'s powerful features!',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:14:25',
                'updated_at' => '2023-06-11 18:14:25',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'earning_title',
                'value' => 'Earn Money',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:26:01',
                'updated_at' => '2023-06-11 18:26:01',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'earning_sub_title',
                'value' => 'Earn money  by using different platform',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:26:01',
                'updated_at' => '2023-06-11 18:26:01',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'earning_seller_image',
                'value' => '2023-08-16-64dcaa6634ab5.png',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:27:29',
                'updated_at' => '2023-08-16 02:52:22',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'seller_app_earning_links',
                'value' => '{"playstore_url_status":null,"playstore_url":null,"apple_store_url_status":null,"apple_store_url":null}',
                'type' => 'admin_landing_page',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'earning_delivery_image',
                'value' => '2023-08-16-64dcaa7ba5b80.png',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:28:48',
                'updated_at' => '2023-08-16 02:52:43',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'dm_app_earning_links',
                'value' => '{"playstore_url_status":null,"playstore_url":null,"apple_store_url_status":null,"apple_store_url":null}',
                'type' => 'admin_landing_page',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'why_choose_title',
                'value' => 'What so Special About 6amMart ?',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:30:30',
                'updated_at' => '2023-06-11 18:32:08',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'counter_section',
                'value' => '{"app_download_count_numbers":"300","seller_count_numbers":"85","deliveryman_count_numbers":"150","customer_count_numbers":"10000","status":"1"}',
                'type' => 'admin_landing_page',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'download_user_app_title',
                'value' => 'Let’s  Manage',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:38:17',
                'updated_at' => '2023-06-11 18:38:17',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'download_user_app_sub_title',
                'value' => 'Your business  Smartly or Earn.',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:38:17',
                'updated_at' => '2023-06-11 18:38:17',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'download_user_app_image',
                'value' => '2023-08-16-64dcaab460ac2.png',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:38:17',
                'updated_at' => '2023-08-16 02:53:40',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'download_user_app_links',
                'value' => '{"playstore_url_status":"1","playstore_url":"https:\\/\\/play.google.com\\/store\\/apps\\/details?id=com.sixamtech.sixam_mart_store_app","apple_store_url_status":"1","apple_store_url":"https:\\/\\/www.apple.com\\/app-store"}',
                'type' => 'admin_landing_page',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'testimonial_title',
                'value' => 'People Who Shared Love with us?',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:42:04',
                'updated_at' => '2023-06-11 18:42:04',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'contact_us_title',
                'value' => 'Contact Us',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:53:22',
                'updated_at' => '2023-06-11 18:53:22',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'contact_us_sub_title',
                'value' => 'Any question or remarks? Just write us a message!',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:53:22',
                'updated_at' => '2023-06-11 18:53:22',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'contact_us_image',
                'value' => '2023-08-16-64dcab0c7b434.png',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 18:53:23',
                'updated_at' => '2023-08-16 02:55:08',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'refund_policy_status',
                'value' => '1',
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 23:10:58',
                'updated_at' => '2023-06-11 23:10:58',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'refund_policy',
                'value' => NULL,
                'type' => 'admin_landing_page',
                'created_at' => '2023-06-11 23:10:59',
                'updated_at' => '2023-06-11 23:10:59',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'header_title',
                'value' => '$Your e-Commerce!$',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:30:53',
                'updated_at' => '2023-06-12 22:41:19',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'header_sub_title',
                'value' => 'Venture Starts Here',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:30:53',
                'updated_at' => '2023-06-12 20:55:14',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'header_tag_line',
                'value' => 'More than just a reliable $eCommerce$ platform',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:30:53',
                'updated_at' => '2023-06-12 20:45:24',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'header_icon',
                'value' => '2023-08-16-64dcac0088f46.png',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:30:53',
                'updated_at' => '2023-08-16 02:59:12',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'header_banner',
                'value' => '2023-08-20-64e1e31738bbc.png',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:30:53',
                'updated_at' => '2023-08-20 01:55:35',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'company_title',
                'value' => '$6amMart$',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:35:07',
                'updated_at' => '2023-06-12 20:46:19',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'company_sub_title',
                'value' => 'is Best Delivery Service Near You',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:35:07',
                'updated_at' => '2023-06-12 19:35:07',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'company_description',
                'value' => '6amMart is a one-stop shop for all your daily necessities. You can shop for groceries, and pharmacy items, order food, and send important parcels from one place to another from the comfort of your home.',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:35:07',
                'updated_at' => '2023-06-12 19:35:07',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'company_button_name',
                'value' => 'Order Now',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:35:07',
                'updated_at' => '2023-06-12 20:46:52',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'company_button_url',
                'value' => 'https://6ammart-react.6amtech.com/',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:35:07',
                'updated_at' => '2023-06-12 19:35:07',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'download_user_app_title',
                'value' => 'Complete Multipurpose eBusiness Solution',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:40:30',
                'updated_at' => '2023-06-12 19:40:30',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'download_user_app_sub_title',
                'value' => '6amMart is a Laravel and Flutter Framework-based multi-vendor food, grocery, eCommerce, parcel, and pharmacy delivery system. It has six modules to cover all your business function',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:40:30',
                'updated_at' => '2023-06-12 19:40:30',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'download_user_app_image',
                'value' => NULL,
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:40:30',
                'updated_at' => '2023-06-12 19:40:30',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'download_user_app_links',
                'value' => '{"playstore_url_status":"1","playstore_url":"https:\\/\\/play.google.com\\/store\\/","apple_store_url_status":"1","apple_store_url":"https:\\/\\/www.apple.com\\/app-store\\/"}',
                'type' => 'react_landing_page',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'earning_title',
                'value' => 'Let’s Start Earning with $6amMart$',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:43:22',
                'updated_at' => '2023-06-12 19:43:22',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'earning_sub_title',
                'value' => 'Join our online marketplace revolution and boost your income.',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:43:22',
                'updated_at' => '2023-06-12 19:43:22',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'earning_seller_title',
                'value' => 'Become a Seller',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:45:07',
                'updated_at' => '2023-06-12 19:45:07',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'earning_seller_sub_title',
                'value' => 'Register as seller & open shop in 6amMart to start your business',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:45:07',
                'updated_at' => '2023-06-12 19:45:07',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'earning_seller_button_name',
                'value' => 'Register',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:45:07',
                'updated_at' => '2023-06-12 19:45:07',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'earning_seller_button_url',
                'value' => 'https://6ammart-admin.6amtech.com/store/apply',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:45:07',
                'updated_at' => '2023-06-12 19:45:07',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'earning_dm_title',
                'value' => 'Become a $Delivery Man$',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:45:55',
                'updated_at' => '2023-06-12 20:53:01',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'earning_dm_sub_title',
                'value' => 'Register as delivery man and earn money',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:45:55',
                'updated_at' => '2023-06-12 19:45:55',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'earning_dm_button_name',
                'value' => 'Register',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:45:55',
                'updated_at' => '2023-06-12 19:45:55',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'earning_dm_button_url',
                'value' => 'https://6ammart-admin.6amtech.com/deliveryman/apply',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:45:55',
                'updated_at' => '2023-06-12 19:45:55',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'promotion_banner',
                'value' => '[{"img":"2023-08-16-64dcac89cd0fa.png"},{"img":"2023-08-16-64dcac93a324a.png"},{"img":"2023-08-16-64dcad5a24940.png"}]',
                'type' => 'react_landing_page',
                'created_at' => NULL,
                'updated_at' => '2023-08-16 03:01:02',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'business_title',
                'value' => '$Let’s$',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:52:29',
                'updated_at' => '2023-06-12 19:52:29',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'business_sub_title',
                'value' => 'Manage your business  Smartly',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:52:29',
                'updated_at' => '2023-06-12 20:54:18',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'business_image',
                'value' => '2023-08-16-64dcad66585e9.png',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:52:29',
                'updated_at' => '2023-08-16 03:05:10',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'download_business_app_links',
                'value' => '{"seller_playstore_url_status":"1","seller_playstore_url":"https:\\/\\/play.google.com\\/store","seller_appstore_url_status":"1","seller_appstore_url":"https:\\/\\/www.apple.com\\/app-store\\/","dm_playstore_url_status":"1","dm_playstore_url":"https:\\/\\/play.google.com\\/store","dm_appstore_url_status":"1","dm_appstore_url":"https:\\/\\/www.apple.com\\/app-store\\/"}',
                'type' => 'react_landing_page',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'testimonial_title',
                'value' => 'We $satisfied$ some Customer & Restaurant Owners',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 19:53:04',
                'updated_at' => '2023-06-12 19:53:04',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'fixed_promotional_banner',
                'value' => '2023-08-16-64dcadedb4fac.png',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 20:18:24',
                'updated_at' => '2023-08-16 03:07:25',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'fixed_footer_description',
                'value' => 'Connect with our social media and other sites to keep up to date',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 20:21:12',
                'updated_at' => '2023-06-12 20:21:12',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'fixed_newsletter_title',
                'value' => 'Join Us!',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 20:23:45',
                'updated_at' => '2023-06-12 20:23:45',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'fixed_newsletter_sub_title',
                'value' => 'Subscribe to our weekly newsletter and be a part of our journey to self discovery and love.',
                'type' => 'react_landing_page',
                'created_at' => '2023-06-12 20:23:45',
                'updated_at' => '2023-06-12 20:23:45',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'fixed_header_title',
                'value' => '6amMart',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 20:31:35',
                'updated_at' => '2023-06-12 20:31:35',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'fixed_header_sub_title',
                'value' => 'More than just reliable eCommerce platform',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 20:31:35',
                'updated_at' => '2023-06-12 20:32:30',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'fixed_header_image',
                'value' => '2023-08-16-64dcae3571b9a.png',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 20:31:35',
                'updated_at' => '2023-08-16 03:08:37',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'fixed_location_title',
                'value' => 'Choose your location',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 20:35:02',
                'updated_at' => '2023-06-12 20:35:02',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'fixed_module_title',
                'value' => 'Your eCommerce venture starts here !',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 20:37:29',
                'updated_at' => '2023-06-12 20:37:29',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'fixed_module_sub_title',
                'value' => 'Enjoy all services in one platform',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 20:37:29',
                'updated_at' => '2023-06-12 20:37:29',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'join_seller_title',
                'value' => 'Become a Seller',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:12:56',
                'updated_at' => '2023-06-12 21:12:56',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'join_seller_sub_title',
                'value' => 'Registered as a seller and open shop for start your business',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:12:56',
                'updated_at' => '2023-06-12 21:12:56',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'join_seller_button_name',
                'value' => 'Register',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:12:56',
                'updated_at' => '2023-06-12 21:12:56',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'join_seller_button_url',
                'value' => 'https://6ammart-admin.6amtech.com/store/apply',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:12:56',
                'updated_at' => '2023-06-12 21:12:56',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'join_delivery_man_title',
                'value' => 'Join as  Deliveryman',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:16:03',
                'updated_at' => '2023-06-12 21:16:03',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'join_delivery_man_sub_title',
                'value' => 'Registered as a deliveryman and earn money',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:16:03',
                'updated_at' => '2023-06-12 21:16:03',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'join_delivery_man_button_name',
                'value' => 'Register',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:16:03',
                'updated_at' => '2023-06-12 21:16:03',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'join_delivery_man_button_url',
                'value' => 'https://6ammart-admin.6amtech.com/deliveryman/apply',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:16:03',
                'updated_at' => '2023-06-12 21:16:03',
            ),
            81 => 
            array (
                'id' => 82,
                'key' => 'download_user_app_title',
                'value' => 'Download app and enjoy more!',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:17:56',
                'updated_at' => '2023-06-12 21:17:56',
            ),
            82 => 
            array (
                'id' => 83,
                'key' => 'download_user_app_sub_title',
                'value' => 'Download app from',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:17:56',
                'updated_at' => '2023-06-12 21:17:56',
            ),
            83 => 
            array (
                'id' => 84,
                'key' => 'download_user_app_image',
                'value' => '2023-08-16-64dcae82675b2.png',
                'type' => 'flutter_landing_page',
                'created_at' => '2023-06-12 21:17:56',
                'updated_at' => '2023-08-16 03:09:54',
            ),
            84 => 
            array (
                'id' => 85,
                'key' => 'download_user_app_links',
                'value' => '{"playstore_url_status":"1","playstore_url":"https:\\/\\/play.google.com\\/store\\/","apple_store_url_status":"1","apple_store_url":"https:\\/\\/www.apple.com\\/app-store\\/"}',
                'type' => 'flutter_landing_page',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}