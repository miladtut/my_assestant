<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2016_06_01_000001_create_oauth_auth_codes_table',
                'batch' => 30,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2016_06_01_000002_create_oauth_access_tokens_table',
                'batch' => 30,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2016_06_01_000003_create_oauth_refresh_tokens_table',
                'batch' => 30,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2016_06_01_000004_create_oauth_clients_table',
                'batch' => 30,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2016_06_01_000005_create_oauth_personal_access_clients_table',
                'batch' => 30,
            ),
            5 => 
            array (
                'id' => 8,
                'migration' => '2021_06_17_054551_create_soft_credentials_table',
                'batch' => 31,
            ),
            6 => 
            array (
                'id' => 9,
                'migration' => '2022_04_10_030533_create_newsletters_table',
                'batch' => 32,
            ),
            7 => 
            array (
                'id' => 10,
                'migration' => '2022_04_12_015827_create_social_media_table',
                'batch' => 32,
            ),
            8 => 
            array (
                'id' => 11,
                'migration' => '2022_04_12_215009_create_jobs_table',
                'batch' => 32,
            ),
            9 => 
            array (
                'id' => 12,
                'migration' => '2022_04_21_145207_add_column_to_modules_table',
                'batch' => 32,
            ),
            10 => 
            array (
                'id' => 13,
                'migration' => '2022_05_12_170027_add_column_to_customer_addresses_table',
                'batch' => 33,
            ),
            11 => 
            array (
                'id' => 14,
                'migration' => '2022_05_14_155444_add_all_zones_column_to_modules_table',
                'batch' => 33,
            ),
            12 => 
            array (
                'id' => 15,
                'migration' => '2022_05_26_120821_change_data_column_to_user_notifiations_table',
                'batch' => 33,
            ),
            13 => 
            array (
                'id' => 16,
                'migration' => '2022_03_31_103418_create_wallet_transactions_table',
                'batch' => 34,
            ),
            14 => 
            array (
                'id' => 17,
                'migration' => '2022_03_31_103827_create_loyalty_point_transactions_table',
                'batch' => 34,
            ),
            15 => 
            array (
                'id' => 18,
                'migration' => '2022_04_09_161150_add_wallet_point_columns_to_users_table',
                'batch' => 34,
            ),
            16 => 
            array (
                'id' => 19,
                'migration' => '2022_05_14_122133_add_dm_tips_column_to_orders_table',
                'batch' => 34,
            ),
            17 => 
            array (
                'id' => 20,
                'migration' => '2022_05_14_122603_add_dm_tips_column_to_order_transactions_table',
                'batch' => 34,
            ),
            18 => 
            array (
                'id' => 21,
                'migration' => '2022_05_17_153333_add_ref_code_to_users_table',
                'batch' => 34,
            ),
            19 => 
            array (
                'id' => 22,
                'migration' => '2022_07_31_103626_add_free_delivery_by_column_to_orders_table',
                'batch' => 35,
            ),
            20 => 
            array (
                'id' => 23,
                'migration' => '2022_09_10_112137_create_user_infos_table',
                'batch' => 36,
            ),
            21 => 
            array (
                'id' => 24,
                'migration' => '2022_09_10_112203_create_conversations_table',
                'batch' => 36,
            ),
            22 => 
            array (
                'id' => 25,
                'migration' => '2022_09_10_112220_create_messages_table',
                'batch' => 36,
            ),
            23 => 
            array (
                'id' => 26,
                'migration' => '2022_10_18_092639_create_refunds_table',
                'batch' => 37,
            ),
            24 => 
            array (
                'id' => 27,
                'migration' => '2022_10_18_093323_add_refund_request_cancel_column_to_orders_table',
                'batch' => 37,
            ),
            25 => 
            array (
                'id' => 28,
                'migration' => '2022_10_18_093529_create_refund_reasons_table',
                'batch' => 37,
            ),
            26 => 
            array (
                'id' => 29,
                'migration' => '2022_10_19_150319_add_delivery_column_to_parcel_categories_table',
                'batch' => 37,
            ),
            27 => 
            array (
                'id' => 30,
                'migration' => '2022_10_19_165501_add_default_link_column_to_banners_table',
                'batch' => 37,
            ),
            28 => 
            array (
                'id' => 31,
                'migration' => '2022_10_20_105050_module_zone',
                'batch' => 37,
            ),
            29 => 
            array (
                'id' => 32,
                'migration' => '2022_10_22_115553_add_is_logged_column_to_admins_table',
                'batch' => 37,
            ),
            30 => 
            array (
                'id' => 33,
                'migration' => '2022_10_22_122336_add_is_logged_column_to_vendor_employees_table',
                'batch' => 37,
            ),
            31 => 
            array (
                'id' => 34,
                'migration' => '2022_10_25_153214_add_payment_method_columns_to_zones_table',
                'batch' => 37,
            ),
            32 => 
            array (
                'id' => 35,
                'migration' => '2022_10_31_165427_add_rename_delivery_charge_column_to_stores_table',
                'batch' => 37,
            ),
            33 => 
            array (
                'id' => 36,
                'migration' => '2022_11_05_094404_add_delivery_fee_comission_to_order_transactions_table',
                'batch' => 37,
            ),
            34 => 
            array (
                'id' => 37,
                'migration' => '2022_11_13_130054_create_contacts_table',
                'batch' => 37,
            ),
            35 => 
            array (
                'id' => 38,
                'migration' => '2022_11_15_111925_create_expenses_table',
                'batch' => 37,
            ),
            36 => 
            array (
                'id' => 39,
                'migration' => '2022_11_15_112413_add_expense_column_to_order_transactions_table',
                'batch' => 37,
            ),
            37 => 
            array (
                'id' => 40,
                'migration' => '2022_12_20_104455_add_food_variations_column_to_items_table',
                'batch' => 38,
            ),
            38 => 
            array (
                'id' => 41,
                'migration' => '2022_12_21_154227_alter_table_order_details_change_variation',
                'batch' => 38,
            ),
            39 => 
            array (
                'id' => 42,
                'migration' => '2022_12_29_103803_add_order_id_column_to_expenses_table',
                'batch' => 38,
            ),
            40 => 
            array (
                'id' => 43,
                'migration' => '2022_12_29_105321_add_maximum_cod_order_amount_column_to_module_zone_table',
                'batch' => 38,
            ),
            41 => 
            array (
                'id' => 44,
                'migration' => '2022_12_29_114005_add_prescription_order_column_to_orders_table',
                'batch' => 38,
            ),
            42 => 
            array (
                'id' => 45,
                'migration' => '2022_12_31_111437_create_notification_messages_table',
                'batch' => 38,
            ),
            43 => 
            array (
                'id' => 46,
                'migration' => '2023_01_02_112948_create_tags_table',
                'batch' => 38,
            ),
            44 => 
            array (
                'id' => 47,
                'migration' => '2023_01_02_113235_item_tag',
                'batch' => 38,
            ),
            45 => 
            array (
                'id' => 48,
                'migration' => '2023_01_03_093510_add_current_language_key_column_to_users_table',
                'batch' => 38,
            ),
            46 => 
            array (
                'id' => 49,
                'migration' => '2023_01_07_115354_add_prescription_order_to_stores_table',
                'batch' => 38,
            ),
            47 => 
            array (
                'id' => 50,
                'migration' => '2023_01_07_180000_add_description_to_expenses_table',
                'batch' => 38,
            ),
            48 => 
            array (
                'id' => 51,
                'migration' => '2023_01_10_124723_add_food_variations_column_to_item_campaigns_table',
                'batch' => 38,
            ),
            49 => 
            array (
                'id' => 52,
                'migration' => '2023_01_10_145928_change_refund_amount_column_type',
                'batch' => 38,
            ),
            50 => 
            array (
                'id' => 53,
                'migration' => '2023_01_10_150108_change_amount_column_type',
                'batch' => 38,
            ),
            51 => 
            array (
                'id' => 54,
                'migration' => '2023_01_23_144828_add_tax_status_column_to_orders_table',
                'batch' => 39,
            ),
            52 => 
            array (
                'id' => 55,
                'migration' => '2023_01_30_114113_change_delivery_charge_column_type_to_admin_wallets_table',
                'batch' => 39,
            ),
            53 => 
            array (
                'id' => 56,
                'migration' => '2023_01_23_103943_add_slug_to_items_table',
                'batch' => 40,
            ),
            54 => 
            array (
                'id' => 57,
                'migration' => '2023_01_23_144001_add_slug_to_categories_table',
                'batch' => 40,
            ),
            55 => 
            array (
                'id' => 58,
                'migration' => '2023_01_23_144119_add_slug_to_item_campaigns_table',
                'batch' => 40,
            ),
            56 => 
            array (
                'id' => 59,
                'migration' => '2023_01_23_144232_add_slug_to_stores_table',
                'batch' => 40,
            ),
            57 => 
            array (
                'id' => 60,
                'migration' => '2023_02_25_133200_create_d_m_vehicles_table',
                'batch' => 40,
            ),
            58 => 
            array (
                'id' => 61,
                'migration' => '2023_02_25_133302_add_vehicle_id_column_to_delivery_men_table',
                'batch' => 40,
            ),
            59 => 
            array (
                'id' => 62,
                'migration' => '2023_02_25_133409_add_vehicle_id_column_to_orders_table',
                'batch' => 40,
            ),
            60 => 
            array (
                'id' => 63,
                'migration' => '2023_02_25_163329_add_maximum_delivery_charge_column_to_module_zone_table',
                'batch' => 40,
            ),
            61 => 
            array (
                'id' => 64,
                'migration' => '2023_02_25_175825_add_otp_hit_count_cols_in_phone_verifications_table',
                'batch' => 40,
            ),
            62 => 
            array (
                'id' => 65,
                'migration' => '2023_02_25_175912_add_hit_count_at_col_in_password_resets_table',
                'batch' => 40,
            ),
            63 => 
            array (
                'id' => 66,
                'migration' => '2023_02_26_144503_add_campaign_status_to_campaign_store_table',
                'batch' => 40,
            ),
            64 => 
            array (
                'id' => 67,
                'migration' => '2023_02_26_162224_add_recommened_to_items_table',
                'batch' => 40,
            ),
            65 => 
            array (
                'id' => 68,
                'migration' => '2023_02_27_102931_add_ref_by_col_to_users_table',
                'batch' => 40,
            ),
            66 => 
            array (
                'id' => 69,
                'migration' => '2023_02_27_111635_create_order_cancel_reasons_table',
                'batch' => 40,
            ),
            67 => 
            array (
                'id' => 70,
                'migration' => '2023_02_27_111937_add_cancellation_reason_col_to_orders_table',
                'batch' => 40,
            ),
            68 => 
            array (
                'id' => 71,
                'migration' => '2023_02_27_161418_add_created_by_columns_to_coupons_table',
                'batch' => 40,
            ),
            69 => 
            array (
                'id' => 72,
                'migration' => '2023_02_27_161533_add_created_by_columns_to_expenses_table',
                'batch' => 40,
            ),
            70 => 
            array (
                'id' => 73,
                'migration' => '2023_02_27_162252_add_store_expense_columns_to_order_transactions_table',
                'batch' => 40,
            ),
            71 => 
            array (
                'id' => 74,
                'migration' => '2023_02_27_162357_add_coupon_created_by_columns_to_orders_table',
                'batch' => 40,
            ),
            72 => 
            array (
                'id' => 75,
                'migration' => '2023_03_01_154319_add_maximum_delivery_charge_column_to_stores_table',
                'batch' => 40,
            ),
            73 => 
            array (
                'id' => 76,
                'migration' => '2023_03_02_103114_add_discount_on_product_by_column_to_orders_table',
                'batch' => 40,
            ),
            74 => 
            array (
                'id' => 77,
                'migration' => '2023_03_02_143919_change_amount_column_to_expenses_table',
                'batch' => 40,
            ),
            75 => 
            array (
                'id' => 78,
                'migration' => '2023_03_02_144258_add_discount_amount_by_store_col_to_order_transactions_table',
                'batch' => 40,
            ),
            76 => 
            array (
                'id' => 79,
                'migration' => '2023_03_11_120645_add_temp_block_time_col_to_phone_verifications_table',
                'batch' => 41,
            ),
            77 => 
            array (
                'id' => 80,
                'migration' => '2023_03_11_121000_add_temp_block_time_col_to_password_resets_table',
                'batch' => 41,
            ),
            78 => 
            array (
                'id' => 81,
                'migration' => '2023_03_13_181502_add_temp_token_column_to_users_table',
                'batch' => 41,
            ),
            79 => 
            array (
                'id' => 82,
                'migration' => '2023_04_05_112916_add_created_by_col_to_password_resets_table',
                'batch' => 42,
            ),
            80 => 
            array (
                'id' => 83,
                'migration' => '2023_05_04_100012_create_data_settings_table',
                'batch' => 42,
            ),
            81 => 
            array (
                'id' => 84,
                'migration' => '2023_05_04_100930_create_admin_promotional_banners_table',
                'batch' => 42,
            ),
            82 => 
            array (
                'id' => 85,
                'migration' => '2023_05_04_101825_create_admin_features_table',
                'batch' => 42,
            ),
            83 => 
            array (
                'id' => 86,
                'migration' => '2023_05_04_102015_create_admin_special_criterias_table',
                'batch' => 42,
            ),
            84 => 
            array (
                'id' => 87,
                'migration' => '2023_05_07_152523_create_admin_testimonials_table',
                'batch' => 42,
            ),
            85 => 
            array (
                'id' => 88,
                'migration' => '2023_05_07_173609_create_flutter_special_criterias_table',
                'batch' => 42,
            ),
            86 => 
            array (
                'id' => 89,
                'migration' => '2023_05_08_125811_create_react_testimonials_table',
                'batch' => 42,
            ),
            87 => 
            array (
                'id' => 90,
                'migration' => '2023_05_09_170006_create_email_templates_table',
                'batch' => 42,
            ),
            88 => 
            array (
                'id' => 91,
                'migration' => '2023_05_16_104129_add_cutlery_processing_time_unavailable_product_note_col_to_orders_table',
                'batch' => 42,
            ),
            89 => 
            array (
                'id' => 92,
                'migration' => '2023_05_18_093438_add_featured_col_to_categories_table',
                'batch' => 42,
            ),
            90 => 
            array (
                'id' => 93,
                'migration' => '2023_05_18_143530_add_delivery_instruction_col_to_orders_table',
                'batch' => 42,
            ),
            91 => 
            array (
                'id' => 94,
                'migration' => '2023_05_18_163841_add_organic_col_to_items_table',
                'batch' => 42,
            ),
            92 => 
            array (
                'id' => 95,
                'migration' => '2023_05_28_153920_add_tax_percentage_col_to_orders_table',
                'batch' => 42,
            ),
            93 => 
            array (
                'id' => 96,
                'migration' => '2023_06_11_172741_add_cutlery_col_to_stores_table',
                'batch' => 42,
            ),
            94 => 
            array (
                'id' => 97,
                'migration' => '2023_07_05_104537_add_maximum_cart_quantity_col_to_items_table',
                'batch' => 43,
            ),
            95 => 
            array (
                'id' => 98,
                'migration' => '2023_07_05_135741_add_service_charge_col_to_orders_table',
                'batch' => 43,
            ),
            96 => 
            array (
                'id' => 99,
                'migration' => '2023_07_05_145800_add_service_charge_col_to_order_transactions_table',
                'batch' => 43,
            ),
            97 => 
            array (
                'id' => 100,
                'migration' => '2023_07_05_155429_add_order_proof_col_to_orders_table',
                'batch' => 43,
            ),
            98 => 
            array (
                'id' => 101,
                'migration' => '2023_07_06_124530_add_partially_paid_amount_col_to_orders_table',
                'batch' => 43,
            ),
            99 => 
            array (
                'id' => 102,
                'migration' => '2023_07_06_144944_create_order_payments_table',
                'batch' => 43,
            ),
            100 => 
            array (
                'id' => 103,
                'migration' => '2023_07_09_120533_add_meta_cols_to_stores_table',
                'batch' => 43,
            ),
            101 => 
            array (
                'id' => 104,
                'migration' => '2023_07_09_143746_create_wallet_payments_table',
                'batch' => 43,
            ),
            102 => 
            array (
                'id' => 105,
                'migration' => '2023_07_10_121938_create_wallet_bonuses_table',
                'batch' => 43,
            ),
            103 => 
            array (
                'id' => 106,
                'migration' => '2023_07_10_153950_add_user_id_col_to_expenses_table',
                'batch' => 43,
            ),
            104 => 
            array (
                'id' => 107,
                'migration' => '2023_07_19_124016_add_maximum_cart_quantity_col_to_item_campaigns_table',
                'batch' => 43,
            ),
            105 => 
            array (
                'id' => 108,
                'migration' => '0000_00_00_000000_create_websockets_statistics_entries_table',
                'batch' => 44,
            ),
            106 => 
            array (
                'id' => 109,
                'migration' => '2023_08_10_131937_create_offline_payment_methods_table',
                'batch' => 44,
            ),
            107 => 
            array (
                'id' => 110,
                'migration' => '2023_08_10_132315_create_offline_payments_table',
                'batch' => 44,
            ),
            108 => 
            array (
                'id' => 111,
                'migration' => '2023_08_14_123526_create_temp_products_table',
                'batch' => 44,
            ),
            109 => 
            array (
                'id' => 112,
                'migration' => '2023_08_14_153229_add_is_approved_col_to_items_table',
                'batch' => 44,
            ),
            110 => 
            array (
                'id' => 113,
                'migration' => '2023_08_20_143852_add_created_by_col_to_banners_table',
                'batch' => 44,
            ),
            111 => 
            array (
                'id' => 114,
                'migration' => '2023_08_21_115610_add_announcement_cols_to_stores_table',
                'batch' => 44,
            ),
            112 => 
            array (
                'id' => 115,
                'migration' => '2023_08_21_173527_create_guests_table',
                'batch' => 44,
            ),
            113 => 
            array (
                'id' => 116,
                'migration' => '2023_08_22_102914_add_is_guest_col_to_orders_table',
                'batch' => 44,
            ),
            114 => 
            array (
                'id' => 117,
                'migration' => '2023_08_24_123045_create_common_conditions_table',
                'batch' => 44,
            ),
            115 => 
            array (
                'id' => 118,
                'migration' => '2023_08_24_151032_create_pharmacy_item_details_table',
                'batch' => 44,
            ),
            116 => 
            array (
                'id' => 119,
                'migration' => '2023_08_26_164947_create_module_wise_banners_table',
                'batch' => 44,
            ),
            117 => 
            array (
                'id' => 120,
                'migration' => '2023_08_27_123438_create_module_wise_why_chooses_table',
                'batch' => 44,
            ),
            118 => 
            array (
                'id' => 121,
                'migration' => '2023_08_28_114316_create_flash_sales_table',
                'batch' => 44,
            ),
            119 => 
            array (
                'id' => 122,
                'migration' => '2023_08_28_134428_create_flash_sale_items_table',
                'batch' => 44,
            ),
            120 => 
            array (
                'id' => 123,
                'migration' => '2023_09_07_131829_create_carts_table',
                'batch' => 44,
            ),
            121 => 
            array (
                'id' => 124,
                'migration' => '2023_09_20_122921_create_store_configs_table',
                'batch' => 44,
            ),
            122 => 
            array (
                'id' => 125,
                'migration' => '2023_09_23_184806_add_flash_sale_cols_to_orders_table',
                'batch' => 44,
            ),
            123 => 
            array (
                'id' => 126,
                'migration' => '2023_10_08_103818_add_increased_delivery_fee_in_zones_table',
                'batch' => 44,
            ),
            124 => 
            array (
                'id' => 127,
                'migration' => '2023_11_21_123038_create_withdrawal_methods_table',
                'batch' => 45,
            ),
            125 => 
            array (
                'id' => 128,
                'migration' => '2023_11_21_123229_create_disbursement_withdrawal_methods_table',
                'batch' => 45,
            ),
            126 => 
            array (
                'id' => 129,
                'migration' => '2023_11_21_123320_create_disbursements_table',
                'batch' => 45,
            ),
            127 => 
            array (
                'id' => 130,
                'migration' => '2023_11_21_123742_add_cols_to_withdraw_requests_table',
                'batch' => 45,
            ),
            128 => 
            array (
                'id' => 131,
                'migration' => '2023_11_21_124049_create_disbursement_details_table',
                'batch' => 45,
            ),
            129 => 
            array (
                'id' => 132,
                'migration' => '2023_11_21_160728_add_created_by_col_to_account_transactions_table',
                'batch' => 45,
            ),
            130 => 
            array (
                'id' => 133,
                'migration' => '2023_11_23_093859_create_parcel_delivery_instructions_table',
                'batch' => 45,
            ),
        ));
        
        
    }
}