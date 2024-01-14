<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmailTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_templates')->delete();
        
        \DB::table('email_templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Change Password Request',
                'body' => '<p>The following user has forgotten his password &amp; requested to change/reset their password.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>User Name: {userName}</strong></p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-6486f303174e0.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'admin',
                'email_type' => 'forget_password',
                'email_template' => '5',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 19:26:24',
                'updated_at' => '2023-06-12 22:40:28',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'New Store Registration Request',
                'body' => '<p>Please find below the details of the new Store registration:</p>

<p>&nbsp;</p>

<p><strong>Store Name: {storeName}</strong></p>

<p>To review the store from the respective Module, go to:&nbsp;</p>

<p><strong>Module Section</strong><strong>&rarr;Store Management&rarr;New Stores</strong></p>

<p>&nbsp;</p>

<p>Or you can directly review the store here &rarr;</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => '2023-06-12-6486f4420b5c1.png',
                'logo' => '2023-06-12-6486f4420d61d.png',
                'icon' => NULL,
                'button_name' => 'Review Request',
                'button_url' => 'https://www.facebook.com/',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'admin',
                'email_type' => 'store_registration',
                'email_template' => '1',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 19:32:34',
                'updated_at' => '2023-06-12 22:59:26',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'New Deliveryman Registration Request',
                'body' => '<p>Please find below the details of the new Deliveryman registration:</p>

<p>&nbsp;</p>

<p><strong>Deliveryman Name: {deliveryManName}</strong></p>

<p>To review the store from the respective Module, go to:&nbsp;</p>

<p><strong>Users</strong><strong>&rarr;Deliveryman Management&rarr;New Deliveryman</strong></p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => '2023-06-12-6486f4fe20b2c.png',
                'logo' => '2023-06-12-6486f528877fe.png',
                'icon' => NULL,
                'button_name' => 'Review Request',
                'button_url' => 'https://www.facebook.com/',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'admin',
                'email_type' => 'dm_registration',
                'email_template' => '1',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 19:35:42',
                'updated_at' => '2023-06-12 23:04:49',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'New Withdraw Request',
                'body' => '<p>Please find below the details of the new Withdraw Request:</p>

<p>&nbsp;</p>

<p><strong>Store Name: {storeName}</strong></p>

<p>To review the Refund Request, go to:&nbsp;</p>

<p><strong>Transactions &amp; Reports</strong><strong>&rarr;Withdraw Requests</strong></p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-6486f5b6a24a4.png',
                'button_name' => 'Review Request',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'admin',
                'email_type' => 'withdraw_request',
                'email_template' => '6',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 19:38:46',
                'updated_at' => '2023-06-12 23:04:17',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '“BUY ONE GET ONE” Campaign Join Request',
                'body' => '<p>Please find below the details of the new Campaign Join Request:</p>

<p>&nbsp;</p>

<p><strong>Store Name: {storeName}</strong></p>

<p>To review the Refund Request, go to:&nbsp;</p>

<p><strong>Module Section</strong><strong>&rarr;Choose Module&rarr;Promotion Management&rarr;Campaigns&rarr;Basic Campaigns&rarr;Buy One Get One</strong></p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => '2023-06-12-6486f611cfb9b.png',
                'logo' => '2023-06-12-6486f611cfdf0.png',
                'icon' => NULL,
                'button_name' => 'Review Request',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'admin',
                'email_type' => 'campaign_request',
                'email_template' => '1',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 19:40:17',
                'updated_at' => '2023-06-12 23:06:04',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'You Have A Refund Request.',
                'body' => '<p>Please find below the details of the new Refund Request:</p>

<p><strong>Customer Name: {userName}</strong></p>

<p><strong>Order ID: {orderId}</strong></p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => '2023-06-12-6486fb27a6a00.png',
                'icon' => NULL,
                'button_name' => 'Review Request',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'admin',
                'email_type' => 'refund_request',
                'email_template' => '2',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 20:01:59',
                'updated_at' => '2023-06-12 23:14:43',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Mart Morning [ID 1234] Just Signed In',
                'body' => '<p>Mart Morning [ID 1234] just signed in from the Store Panel.&nbsp;</p>

<p><br />
<strong>Login Time:</strong> 12.00pm</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => '2023-06-12-6486fbdeb92d6.png',
                'icon' => NULL,
                'button_name' => 'Check Status',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'admin',
                'email_type' => 'login',
                'email_template' => '2',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 20:05:02',
                'updated_at' => '2023-06-12 20:05:02',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Your Registration is Submitted Successfully!',
                'body' => '<p>Dear User,</p>

<p>&nbsp;</p>

<p>We&rsquo;ve received your Store Registration Request.&nbsp;</p>

<p>&nbsp;</p>

<p>Soon you&rsquo;ll know if your store registration is accepted or declined by the Admin.&nbsp;</p>

<p>&nbsp;</p>

<p>Stay Tuned!</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-6487024230762.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'store',
                'email_type' => 'registration',
                'email_template' => '5',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 20:32:18',
                'updated_at' => '2023-06-12 20:32:18',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Congratulations! Your Registration is Approved!',
                'body' => '<p>Dear User,</p>

<p>&nbsp;</p>

<p>Your registration is approved by the Admin.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>First</strong>, you need to log in to your store panel.&nbsp;</p>

<p><strong>After that,</strong> please set up your store and start selling!&nbsp;</p>

<p><br />
<strong>Click here</strong><strong> &rarr; </strong><a href="https://6ammart-admin.6amtech.com/store-panel/business-settings/store-setup">https://6ammart-admin.6amtech.com/store-panel/business-settings/store-setup</a></p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-648702fb014dd.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'store',
                'email_type' => 'approve',
                'email_template' => '5',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 20:35:23',
                'updated_at' => '2023-06-12 23:01:31',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Your Registration is Rejected',
                'body' => '<p>Dear User,&nbsp;</p>

<p>&nbsp;</p>

<p>We&rsquo;re sorry to announce that your store registration was rejected by the Admin.&nbsp;</p>

<p>&nbsp;</p>

<p>To find out more please contact us.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-648706ce4d5fb.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'store',
                'email_type' => 'deny',
                'email_template' => '5',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 20:47:03',
                'updated_at' => '2023-06-12 20:51:42',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Congratulations! Your Withdrawal is Approved!',
                'body' => '<p>Dear User,</p>

<p>&nbsp;</p>

<p>The amount you requested to withdraw is approved by the Admin and transferred to you bank account.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-64870788562d9.png',
                'button_name' => 'See details',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'store',
                'email_type' => 'withdraw_approve',
                'email_template' => '6',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 0,
                'status' => 1,
                'created_at' => '2023-06-12 20:54:48',
                'updated_at' => '2023-06-12 20:54:48',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Your Withdraw Request was Rejected.',
                'body' => '<p>Dear User,</p>

<p>&nbsp;</p>

<p>The amount you requested to withdraw is rejected by the Admin.</p>

<p>Reason: Insufficient Balance.&nbsp;</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-648708244930a.png',
                'button_name' => 'See Details',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'store',
                'email_type' => 'withdraw_deny',
                'email_template' => '6',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 20:57:24',
                'updated_at' => '2023-06-12 20:57:24',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Your Request is Completed!',
                'body' => '<p>Dear User,</p>

<p>&nbsp;</p>

<p>We&rsquo;ve received your Campaign Request.&nbsp;</p>

<p>&nbsp;</p>

<p>Soon you&rsquo;ll know if your request is approved or rejected by the Admin.&nbsp;</p>

<p>&nbsp;</p>

<p>Stay Tuned!</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => '2023-06-12-648708d132665.png',
                'logo' => '2023-06-12-6487088da18cb.png',
                'icon' => NULL,
                'button_name' => 'See Status',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'store',
                'email_type' => 'campaign_request',
                'email_template' => '1',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 20:59:09',
                'updated_at' => '2023-06-12 21:00:17',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Congratulations! Your Campaign Request is Approved!',
                'body' => '<p>Dear User,</p>

<p>&nbsp;</p>

<p>Your request to join campaign is approved by the Admin.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => '2023-06-12-6487091d3ee5a.png',
                'logo' => '2023-06-12-6487091d3f0b3.png',
                'icon' => NULL,
                'button_name' => 'View Status',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'store',
                'email_type' => 'campaign_approve',
                'email_template' => '1',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:01:33',
                'updated_at' => '2023-06-12 23:04:45',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Your Campaign Join Request Was Rejected.',
                'body' => '<p>Dear User,</p>

<p>Your request to join the&nbsp;campaign was rejected by the admin.&nbsp;</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => '2023-06-12-648709ce3e893.png',
                'logo' => '2023-06-12-648709ce3ead2.png',
                'icon' => NULL,
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'store',
                'email_type' => 'campaign_deny',
                'email_template' => '7',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:04:30',
                'updated_at' => '2023-06-12 23:06:55',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Your Registration is Completed!',
                'body' => '<p>Dear User,</p>

<p>&nbsp;</p>

<p>We&rsquo;ve received your Deliveryman Registration Request.</p>

<p>Soon you&rsquo;ll know if your Deliveryman registration is accepted or declined by the Admin.&nbsp;</p>

<p>&nbsp;</p>

<p>Stay Tuned!</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-64870c80bb7bb.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'dm',
                'email_type' => 'registration',
                'email_template' => '5',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 0,
                'status' => 1,
                'created_at' => '2023-06-12 21:16:00',
                'updated_at' => '2023-06-12 21:16:00',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Congratulations! Your Registration is Approved!',
                'body' => '<p>Dear User,</p>

<p>&nbsp;</p>

<p>Your registration is approved by the Admin.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>Here&rsquo;s what to do next:&nbsp;</strong></p>

<ol>
<li>Download the Deliveryman app</li>
<li>Login with below credentials.</li>
</ol>

<p><strong>After that,</strong> please set up your account and start delivery!&nbsp;</p>

<p><br />
<strong>Click here</strong><strong> to download the app&rarr; </strong><a href="https://play.google.com/store/apps/details?id=com.sixamtech.sixam_mart_delivery_app&amp;pli=1">https://play.google.com/store/apps/details?id=com.sixamtech.sixam_mart_delivery_app&amp;pli=1</a></p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-64870cebc5fc6.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'dm',
                'email_type' => 'approve',
                'email_template' => '5',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:17:47',
                'updated_at' => '2023-06-12 23:09:23',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Your Registration is Rejected',
                'body' => '<p>Dear User,&nbsp;</p>

<p>&nbsp;</p>

<p>We&rsquo;re sorry to announce that your Deliveryman registration was rejected by the Admin.&nbsp;</p>

<p>&nbsp;</p>

<p>To find out more please contact us.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-64870da0bf819.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'dm',
                'email_type' => 'deny',
                'email_template' => '5',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:20:48',
                'updated_at' => '2023-06-12 21:20:48',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Your Account is Suspended.',
                'body' => '<p>Dear User,</p>

<p>&nbsp;</p>

<p>Your Deliveryman account has been suspended by the Admin/Store.&nbsp;</p>

<p>&nbsp;</p>

<p>Please contact related person to know more.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => '2023-06-12-64870e1ba4908.png',
                'logo' => '2023-06-12-64870e1ba4cd1.png',
                'icon' => NULL,
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'dm',
                'email_type' => 'suspend',
                'email_template' => '7',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:22:51',
                'updated_at' => '2023-06-12 21:22:51',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Cash Collected.',
                'body' => '<p>Dear User,</p>

<p>The Admin has collected cash from you.&nbsp;</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-64870ecf8ef10.png',
                'button_name' => 'See Details',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'dm',
                'email_type' => 'cash_collect',
                'email_template' => '6',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:25:51',
                'updated_at' => '2023-06-12 23:11:22',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'Reset Your Password',
                'body' => '<p>Please use this OTP to reset your Password&nbsp;&rarr;</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-64870f8dcfcc5.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => 'Copyright 2023 6amMart. All right reserved.',
                'type' => 'dm',
                'email_type' => 'forget_password',
                'email_template' => '4',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:29:01',
                'updated_at' => '2023-06-12 23:12:27',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Your Registration is Successful!',
                'body' => '<p>Congratulations!</p>

<p>&nbsp;</p>

<p>You&rsquo;ve successfully registered.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-64871218e4c0e.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'user',
                'email_type' => 'registration',
                'email_template' => '5',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:39:52',
                'updated_at' => '2023-06-12 21:39:52',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'Please Register with The OTP',
                'body' => '<p>ONE MORE STEP:&nbsp;</p>

<p>&nbsp;</p>

<p>Please copy the following OTP &amp; paste in on your sign-up page to complete your registration.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-648712f6a5196.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'user',
                'email_type' => 'registration_otp',
                'email_template' => '4',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:43:34',
                'updated_at' => '2023-06-12 23:13:03',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'Confirm Your Login.',
                'body' => '<p>Please copy the following OTP &amp; paste in on your Log in page to confirm your account.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-648713d7b9612.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'user',
                'email_type' => 'login_otp',
                'email_template' => '4',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:46:46',
                'updated_at' => '2023-06-12 23:13:41',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'Please Verify Your Delivery.',
                'body' => '<p>Please give the following OTP to your Deliveryman to ensure your order.</p>

<p><strong>7 5 8 9 4 3 </strong></p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-648714cf7f15a.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'user',
                'email_type' => 'order_verification',
                'email_template' => '4',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 0,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:51:27',
                'updated_at' => '2023-06-12 21:51:27',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'Your Order is Successful',
                'body' => '<p>Hi <strong>{userName}</strong>,</p>

<p>Your order is successful. Please find your invoice below.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => NULL,
                'button_name' => 'Track Order',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'user',
                'email_type' => 'new_order',
                'email_template' => '3',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:52:36',
                'updated_at' => '2023-06-12 23:16:37',
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'Refund Order',
                'body' => '<p>Hi <strong>{userName}</strong>,</p>

<p>We&rsquo;ve refunded your requested amount. Please find your refund invoice below.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => NULL,
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'user',
                'email_type' => 'refund_order',
                'email_template' => '9',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:53:40',
                'updated_at' => '2023-06-12 23:18:12',
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'Reset Your Password',
                'body' => '<p>Please copy the following OTP &amp; paste in on your Log in page to&nbsp;reset your Password.</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-64872af38ecfb.png',
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved..',
                'type' => 'user',
                'email_type' => 'forget_password',
                'email_template' => '4',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:54:59',
                'updated_at' => '2023-06-12 23:25:55',
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'Your Refund Request was Rejected.',
                'body' => '<p>Dear User,</p>

<p>&nbsp;</p>

<p>The amount you request for a refund was rejected by the Admin.&nbsp;</p>

<p>&nbsp;</p>

<p>To know more please contact us.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => '2023-06-12-648716141b3fd.png',
                'icon' => NULL,
                'button_name' => '',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'user',
                'email_type' => 'refund_request_deny',
                'email_template' => '8',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:56:52',
                'updated_at' => '2023-06-12 21:56:52',
            ),
            29 => 
            array (
                'id' => 30,
                'title' => 'Fund Added to your Wallet.',
                'body' => '<p>Dear <strong>{userName}</strong>,</p>

<p>&nbsp;</p>

<p>The Admin has sent fund to your Wallet. Please check your wallet.</p>

<p>&nbsp;</p>',
                'background_image' => NULL,
                'image' => NULL,
                'logo' => NULL,
                'icon' => '2023-06-12-64871653198e0.png',
                'button_name' => 'Check Status',
                'button_url' => '',
                'footer_text' => 'Please contact us for any queries; we’re always happy to help.',
                'copyright_text' => '© 2023 6amMart. All rights reserved.',
                'type' => 'user',
                'email_type' => 'add_fund',
                'email_template' => '6',
                'privacy' => 1,
                'refund' => 1,
                'cancelation' => 1,
                'contact' => 1,
                'facebook' => 1,
                'instagram' => 1,
                'twitter' => 1,
                'linkedin' => 1,
                'pinterest' => 1,
                'status' => 1,
                'created_at' => '2023-06-12 21:57:55',
                'updated_at' => '2023-06-12 23:23:47',
            ),
        ));
        
        
    }
}