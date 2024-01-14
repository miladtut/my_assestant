<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'translationable_type' => 'App\\Models\\Module',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'module_name',
                'value' => 'Demo Module',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'translationable_type' => 'App\\Models\\Module',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'description',
                'value' => '<p>Demo module description.</p>',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'translationable_type' => 'App\\Models\\Zone',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'name',
                'value' => 'Demo Zone',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'translationable_type' => 'App\\Models\\Category',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'name',
                'value' => 'Demo category',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'translationable_type' => 'App\\Models\\Category',
                'translationable_id' => 2,
                'locale' => 'en',
                'key' => 'name',
                'value' => 'Demo sub category',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'translationable_type' => 'App\\Models\\Store',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'name',
                'value' => 'Demo Store',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'translationable_type' => 'App\\Models\\Store',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'address',
                'value' => 'House, road',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'translationable_type' => 'App\\Models\\Item',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'name',
                'value' => 'Demo Product',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'translationable_type' => 'App\\Models\\Item',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'description',
                'value' => 'Demo Product Description',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'translationable_type' => 'App\\Models\\AdminPromotionalBanner',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'title',
                'value' => 'Demo Title',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'translationable_type' => 'App\\Models\\AdminPromotionalBanner',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'sub_title',
                'value' => 'Demo Promotional Subtitle',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'translationable_type' => 'App\\Models\\AdminFeature',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'title',
                'value' => 'Demo Feature Title',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'translationable_type' => 'App\\Models\\AdminFeature',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'sub_title',
                'value' => 'Demo Feature  Sub Title',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'translationable_type' => 'App\\Models\\AdminSpecialCriteria',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'title',
                'value' => 'Demo Title',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 24,
                'locale' => 'en',
                'key' => 'download_user_app_title',
                'value' => 'Let’s  Manage',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 25,
                'locale' => 'en',
                'key' => 'download_user_app_sub_title',
                'value' => 'Your business  Smartly or Earn.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 29,
                'locale' => 'en',
                'key' => 'contact_us_title',
                'value' => 'Contact Us',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 30,
                'locale' => 'en',
                'key' => 'contact_us_sub_title',
                'value' => 'Any question or remarks? Just write us a message!',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 34,
                'locale' => 'en',
                'key' => 'header_title',
                'value' => '$Your e-Commerce!$',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 35,
                'locale' => 'en',
                'key' => 'header_sub_title',
                'value' => 'Venture Starts Here',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 36,
                'locale' => 'en',
                'key' => 'header_tag_line',
                'value' => 'More than just a reliable $eCommerce$ platform',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 59,
                'locale' => 'en',
                'key' => 'business_title',
                'value' => '$Let’s$',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 60,
                'locale' => 'en',
                'key' => 'business_sub_title',
                'value' => 'Manage your business  Smartly',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 68,
                'locale' => 'en',
                'key' => 'fixed_header_title',
                'value' => '6amMart',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 69,
                'locale' => 'en',
                'key' => 'fixed_header_sub_title',
                'value' => 'More than just reliable eCommerce platform',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'translationable_type' => 'App\\Models\\FlutterSpecialCriteria',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'title',
                'value' => 'Demo Feature Title',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 82,
                'locale' => 'en',
                'key' => 'download_user_app_title',
                'value' => 'Download app and enjoy more!',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'translationable_type' => 'App\\Models\\DataSetting',
                'translationable_id' => 83,
                'locale' => 'en',
                'key' => 'download_user_app_sub_title',
                'value' => 'Download app from',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'translationable_type' => 'App\\Models\\RefundReason',
                'translationable_id' => 1,
                'locale' => 'en',
                'key' => 'reason',
                'value' => 'I ordered the wrong food',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}