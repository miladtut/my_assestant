<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('business_settings')->delete();
        
        \DB::table('business_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'cash_on_delivery',
                'value' => '{"status":"1"}',
                'created_at' => '2021-07-01 18:51:17',
                'updated_at' => '2021-07-01 18:51:17',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'stripe',
                'value' => '{"status":"0","api_key":null,"published_key":null}',
                'created_at' => '2021-05-11 06:57:02',
                'updated_at' => '2022-03-23 06:22:00',
            ),
            2 => 
            array (
                'id' => 4,
                'key' => 'mail_config',
                'value' => '{"name":"6am Mart","host":"mail.6amtech.com","driver":"smtp","port":"587","username":"info@6amtech.com","email_id":"info@6amtech.com","encryption":"tls","password":"password"}',
                'created_at' => NULL,
                'updated_at' => '2022-03-23 06:24:52',
            ),
            3 => 
            array (
                'id' => 5,
                'key' => 'fcm_project_id',
                'value' => 'e-food-9e6e3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'key' => 'push_notification_key',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'key' => 'order_pending_message',
                'value' => '{"status":1,"message":"Your order is successfully placed"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'key' => 'order_confirmation_msg',
                'value' => '{"status":1,"message":"Your order is confirmed"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'key' => 'order_processing_message',
                'value' => '{"status":1,"message":"Your order is started for cooking"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'key' => 'out_for_delivery_message',
                'value' => '{"status":1,"message":"Your food is ready for delivery"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'key' => 'order_delivered_message',
                'value' => '{"status":1,"message":"Your order is delivered"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'key' => 'delivery_boy_assign_message',
                'value' => '{"status":1,"message":"Your order has been assigned to a delivery man"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'key' => 'delivery_boy_start_message',
                'value' => '{"status":1,"message":"Your order is picked up by delivery man"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'key' => 'delivery_boy_delivered_message',
                'value' => '{"status":1,"message":"Order delivered successfully"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'key' => 'terms_and_conditions',
                'value' => '<p>This is a test Teams &amp; Conditions<br />
<br />
These terms of use (the &quot;Terms of Use&quot;) govern your use of our website www.evaly.com.bd (the &quot;Website&quot;) and our &quot;StackFood&quot; application for mobile and handheld devices (the &quot;App&quot;). The Website and the App are jointly referred to as the &quot;Platform&quot;. Please read these Terms of Use carefully before you use the services. If you do not agree to these Terms of Use, you may not use the services on the Platform, and we request you to uninstall the App. By installing, downloading and/or even merely using the Platform, you shall be contracting with StackFood and you provide your acceptance to the Terms of Use and other StackFood policies (including but not limited to the Cancellation &amp; Refund Policy, Privacy Policy etc.) as posted on the Platform from time to time, which takes effect on the date on which you download, install or use the Services, and create a legally binding arrangement to abide by the same. The Platforms will be used by (i) natural persons who have reached 18 years of age and (ii) corporate legal entities, e.g companies. Where applicable, these Terms shall be subject to country-specific provisions as set out herein.</p>

<h3>USE OF PLATFORM AND SERVICES</h3>

<p>All commercial/contractual terms are offered by and agreed to between Buyers and Merchants alone. The commercial/contractual terms include without limitation to price, taxes, shipping costs, payment methods, payment terms, date, period and mode of delivery, warranties related to products and services and after sales services related to products and services. StackFood does not have any kind of control or does not determine or advise or in any way involve itself in the offering or acceptance of such commercial/contractual terms between the Buyers and Merchants. StackFood may, however, offer support services to Merchants in respect to order fulfilment, payment collection, call centre, and other services, pursuant to independent contracts executed by it with the Merchants. eFood is not responsible for any non-performance or breach of any contract entered into between Buyers and Merchants on the Platform. eFood cannot and does not guarantee that the concerned Buyers and/or Merchants shall perform any transaction concluded on the Platform. eFood is not responsible for unsatisfactory services or non-performance of services or damages or delays as a result of products which are out of stock, unavailable or back ordered.</p>

<p>StackFood&nbsp;is operating an e-commerce platform and assumes and operates the role of facilitator, and does not at any point of time during any transaction between Buyer and Merchant on the Platform come into or take possession of any of the products or services offered by Merchant. At no time shall StackFood hold any right, title or interest over the products nor shall StackFood have any obligations or liabilities in respect of such contract entered into between Buyer and Merchant. You agree and acknowledge that we shall not be responsible for:</p>

<ul>
<li>The goods provided by the shops or restaurants including, but not limited, serving of food orders suiting your requirements and needs;</li>
<li>The Merchant&quot;s goods not being up to your expectations or leading to any loss, harm or damage to you;</li>
<li>The availability or unavailability of certain items on the menu;</li>
<li>The Merchant serving the incorrect orders.</li>
</ul>

<p>The details of the menu and price list available on the Platform are based on the information provided by the Merchants and we shall not be responsible for any change or cancellation or unavailability. All Menu &amp; Food Images used on our platforms are only representative and shall/might not match with the actual Menu/Food Ordered, StackFood shall not be responsible or Liable for any discrepancies or variations on this aspect.</p>

<h3>Personal Information that you provide</h3>

<p>If you want to use our service, you must create an account on our Site. To establish your account, we will ask for personally identifiable information that can be used to contact or identify you, which may include your name, phone number, and e-mail address. We may also collect demographic information about you, such as your zip code, and allow you to submit additional information that will be part of your profile. Other than basic information that we need to establish your account, it will be up to you to decide how much information to share as part of your profile. We encourage you to think carefully about the information that you share and we recommend that you guard your identity and your sensitive information. Of course, you can review and revise your profile at any time.</p>

<p>You understand that delivery periods quoted to you at the time of confirming the order is an approximate estimate and may vary. We shall not be responsible for any delay in the delivery of your order due to the delay at seller/merchant end for order processing or any other unavoidable circumstances.</p>

<p>Your order shall be only delivered to the address designated by you at the time of placing the order on the Platform. We reserve the right to cancel the order, in our sole discretion, in the event of any change to the place of delivery and you shall not be entitled to any refund for the same. Delivery in the event of change of the delivery location shall be at our sole discretion and reserve the right to charge with additional delivery fee if required.</p>

<p>You shall undertake to provide adequate directions, information and authorizations to accept delivery. In the event of any failure to accept delivery, failure to deliver within the estimated time due to your failure to provide appropriate instructions, or authorizations, then such goods shall be deemed to have been delivered to you and all risk and responsibility in relation to such goods shall pass to you and you shall not be entitled to any refund for the same. Our decision in relation to this shall be final and binding. You understand that our liability ends once your order has been delivered to you.</p>

<p>You might be required to provide your credit or debit card details to the approved payment gateways while making the payment. In this regard, you agree to provide correct and accurate credit/ debit card details to the approved payment gateways for availing the Services. You shall not use the credit/ debit card which is not lawfully owned by you, i.e. in any transaction, you must use your own credit/ debit card. The information provided by you shall not be utilized or shared with any third party unless required in relation to fraud verifications or by law, regulation or court order. You shall be solely responsible for the security and confidentiality of your credit/ debit card details. We expressly disclaim all liabilities that may arise as a consequence of any unauthorized use of your credit/ debit card. You agree that the Services shall be provided by us only during the working hours of the relevant Merchants.</p>

<h3>ACTIVITIES PROHIBITED ON THE PLATFORM</h3>

<p>The following is a partial list of the kinds of conduct that are illegal or prohibited on the Websites. StackFood reserves the right to investigate and take appropriate legal action/s against anyone who, in StackFood sole discretion, engages in any of the prohibited activities. Prohibited activities include &mdash; but are not limited to &mdash; the following:</p>

<ul>
<li>Using the Websites for any purpose in violation of laws or regulations;</li>
<li>Posting Content that infringes the intellectual property rights, privacy rights, publicity rights, trade secret rights, or any other rights of any party;</li>
<li>Posting Content that is unlawful, obscene, defamatory, threatening, harassing, abusive, slanderous, hateful, or embarrassing to any other person or entity as determined by StackFood in its sole discretion or pursuant to local community standards;</li>
<li>Posting Content that constitutes cyber-bullying, as determined by StackFood in its sole discretion;</li>
<li>Posting Content that depicts any dangerous, life-threatening, or otherwise risky behavior;</li>
<li>Posting telephone numbers, street addresses, or last names of any person;</li>
<li>Posting URLs to external websites or any form of HTML or programming code;</li>
<li>Posting anything that may be &quot;spam,&quot; as determined by StackFood in its sole discretion;</li>
<li>Impersonating another person when posting Content;</li>
<li>Harvesting or otherwise collecting information about others, including email addresses, without their consent;</li>
<li>Allowing any other person or entity to use your identification for posting or viewing comments;</li>
<li>Harassing, threatening, stalking, or abusing any person;</li>
<li>Engaging in any other conduct that restricts or inhibits any other person from using or enjoying the Websites, or which, in the sole discretion of StackFood , exposes eFood or any of its customers, suppliers, or any other parties to any liability or detriment of any type; or</li>
<li>Encouraging other people to engage in any prohibited activities as described herein.</li>
</ul>

<p>StackFood&nbsp;reserves the right but is not obligated to do any or all of the following:</p>

<ul>
<li>Investigate an allegation that any Content posted on the Websites does not conform to these Terms of Use and determine in its sole discretion to remove or request the removal of the Content;</li>
<li>Remove Content which is abusive, illegal, or disruptive, or that otherwise fails to conform with these Terms of Use;</li>
<li>Terminate a user&#39;s access to the Websites upon any breach of these Terms of Use;</li>
<li>Monitor, edit, or disclose any Content on the Websites; and</li>
<li>Edit or delete any Content posted on the Websites, regardless of whether such Content violates these standards.</li>
</ul>

<h3>AMENDMENTS</h3>

<p>StackFood&nbsp;reserves the right to change or modify these Terms (including our policies which are incorporated into these Terms) at any time by posting changes on the Platform. You are strongly recommended to read these Terms regularly. You will be deemed to have agreed to the amended Terms by your continued use of the Platforms following the date on which the amended Terms are posted.</p>

<h3>PAYMENT</h3>

<p>StackFood&nbsp;reserves the right to offer additional payment methods and/or remove existing payment methods at any time in its sole discretion. If you choose to pay using an online payment method, the payment shall be processed by our third party payment service provider(s). With your consent, your credit card / payment information will be stored with our third party payment service provider(s) for future orders. StackFood does not store your credit card or payment information. You must ensure that you have sufficient funds on your credit and debit card to fulfil payment of an Order. Insofar as required, StackFood takes responsibility for payments made on our Platforms including refunds, chargebacks, cancellations and dispute resolution, provided if reasonable and justifiable and in accordance with these Terms.</p>

<h3>CANCELLATION</h3>

<p>StackFood&nbsp;can cancel any order anytime due to the foods/products unavailability, out of coverage area and any other unavoidable circumstances.</p>',
                'created_at' => NULL,
                'updated_at' => '2021-08-22 04:48:01',
            ),
            14 => 
            array (
                'id' => 16,
                'key' => 'business_name',
                'value' => '6ammart 3.0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'key' => 'currency',
                'value' => 'USD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'key' => 'logo',
                'value' => '2023-08-16-64dca5f543996.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'key' => 'phone',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'key' => 'email_address',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'key' => 'address',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'key' => 'footer_text',
                'value' => 'Demo footer text @ 2021',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'key' => 'customer_verification',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'key' => 'map_api_key',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'key' => 'about_us',
                'value' => '<p>Lorem <strong>ipsum </strong>dolor sit amet, <em><strong>consectetur </strong></em>adipiscing elit. <em>Cras </em>dictum massa et dolor porta, rhoncus faucibus magna elementum. Sed porta mattis mollis. Donec ut est pretium, pretium nibh porttitor, <a href="http://google.com">suscipit </a>metus. Sed viverra felis sed elit vehicula sodales. Nullam ante ante, tristique vel tincidunt ac, egestas eget sem. Sed lorem nunc, pellentesque vel ipsum venenatis, pellentesque interdum orci. Suspendisse mauris dui, accumsan at dapibus sed, volutpat quis erat. Nam fringilla nisl eu nunc lobortis, feugiat posuere libero venenatis. Nunc risus lorem, ornare eget congue in, pretium quis enim. Pellentesque elit elit, pharetra eget nunc at, maximus pellentesque diam.</p>

<p>Praesent fermentum finibus lacus. Nulla tincidunt lectus sed purus facilisis hendrerit. Maecenas volutpat elementum orci, tincidunt euismod ante facilisis ac. Integer dignissim iaculis varius. Mauris iaculis elit vel posuere pellentesque. Praesent a mi sed neque ullamcorper dignissim sed ut nibh. Sed purus dui, sodales in varius in, accumsan at libero. Vestibulum posuere dui et orci tincidunt, ac consequat felis venenatis.</p>

<p>Morbi sodales, nisl iaculis fringilla imperdiet, metus tortor semper quam, a fringilla nulla dui nec dolor. Phasellus lacinia aliquam ligula sed porttitor. Cras feugiat eros ut arcu commodo dictum. Integer tincidunt nisl id nisl consequat molestie. Integer elit tortor, ultrices sit amet nunc vitae, feugiat tempus mauris. Morbi volutpat consectetur felis sed porttitor. Praesent in urna erat.</p>

<p>Aenean mollis luctus dolor, eu interdum velit faucibus eu. Suspendisse vitae efficitur erat. In facilisis nisi id arcu scelerisque bibendum. Nunc a placerat enim. Donec pharetra, velit quis facilisis tempus, lectus est imperdiet nisl, in tempus tortor dolor iaculis dolor. Nunc vitae molestie turpis. Nam vitae lobortis massa. Nam pharetra non felis in porta.</p>

<p>Vivamus pulvinar diam vel felis dignissim tincidunt. Donec hendrerit non est sed volutpat. In egestas ex tortor, at convallis nunc porttitor at. Fusce sed cursus risus. Nam metus sapien, viverra eget felis id, maximus convallis lacus. Donec nec lacus vitae ex hendrerit ultricies non vel risus. Morbi malesuada ipsum iaculis augue convallis vehicula. Proin eget dolor dignissim, volutpat purus ac, ultricies risus. Pellentesque semper, mauris et pharetra accumsan, ante velit faucibus ex, a mattis metus odio vel ligula. Pellentesque elementum suscipit laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer a turpis sed massa blandit iaculis. Sed aliquet, justo vestibulum euismod rhoncus, nisi dui fringilla sapien, non tempor nunc lectus vitae dolor. Suspendisse potenti.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dictum massa et dolor porta, rhoncus faucibus magna elementum. Sed porta mattis mollis. Donec ut est pretium, pretium nibh porttitor, suscipit metus. Sed viverra felis sed elit vehicula sodales. Nullam ante ante, tristique vel tincidunt ac, egestas eget sem. Sed lorem nunc, pellentesque vel ipsum venenatis, pellentesque interdum orci. Suspendisse mauris dui, accumsan at dapibus sed, volutpat quis erat. Nam fringilla nisl eu nunc lobortis, feugiat posuere libero venenatis. Nunc risus lorem, ornare eget congue in, pretium quis enim. Pellentesque elit elit, pharetra eget nunc at, maximus pellentesque diam.</p>

<p>Praesent fermentum finibus lacus. Nulla tincidunt lectus sed purus facilisis hendrerit. Maecenas volutpat elementum orci, tincidunt euismod ante facilisis ac. Integer dignissim iaculis varius. Mauris iaculis elit vel posuere pellentesque. Praesent a mi sed neque ullamcorper dignissim sed ut nibh. Sed purus dui, sodales in varius in, accumsan at libero. Vestibulum posuere dui et orci tincidunt, ac consequat felis venenatis.</p>

<p>Morbi sodales, nisl iaculis fringilla imperdiet, metus tortor semper quam, a fringilla nulla dui nec dolor. Phasellus lacinia aliquam ligula sed porttitor. Cras feugiat eros ut arcu commodo dictum. Integer tincidunt nisl id nisl consequat molestie. Integer elit tortor, ultrices sit amet nunc vitae, feugiat tempus mauris. Morbi volutpat consectetur felis sed porttitor. Praesent in urna erat.</p>

<p>Aenean mollis luctus dolor, eu interdum velit faucibus eu. Suspendisse vitae efficitur erat. In facilisis nisi id arcu scelerisque bibendum. Nunc a placerat enim. Donec pharetra, velit quis facilisis tempus, lectus est imperdiet nisl, in tempus tortor dolor iaculis dolor. Nunc vitae molestie turpis. Nam vitae lobortis massa. Nam pharetra non felis in porta.</p>

<p>Vivamus pulvinar diam vel felis dignissim tincidunt. Donec hendrerit non est sed volutpat. In egestas ex tortor, at convallis nunc porttitor at. Fusce sed cursus risus. Nam metus sapien, viverra eget felis id, maximus convallis lacus. Donec nec lacus vitae ex hendrerit ultricies non vel risus. Morbi malesuada ipsum iaculis augue convallis vehicula. Proin eget dolor dignissim, volutpat purus ac, ultricies risus. Pellentesque semper, mauris et pharetra accumsan, ante velit faucibus ex, a mattis metus odio vel ligula. Pellentesque elementum suscipit laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer a turpis sed massa blandit iaculis. Sed aliquet, justo vestibulum euismod rhoncus, nisi dui fringilla sapien, non tempor nunc lectus vitae dolor. Suspendisse potenti.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dictum massa et dolor porta, rhoncus faucibus magna elementum. Sed porta mattis mollis. Donec ut est pretium, pretium nibh porttitor, suscipit metus. Sed viverra felis sed elit vehicula sodales. Nullam ante ante, tristique vel tincidunt ac, egestas eget sem. Sed lorem nunc, pellentesque vel ipsum venenatis, pellentesque interdum orci. Suspendisse mauris dui, accumsan at dapibus sed, volutpat quis erat. Nam fringilla nisl eu nunc lobortis, feugiat posuere libero venenatis. Nunc risus lorem, ornare eget congue in, pretium quis enim. Pellentesque elit elit, pharetra eget nunc at, maximus pellentesque diam.</p>

<p>Praesent fermentum finibus lacus. Nulla tincidunt lectus sed purus facilisis hendrerit. Maecenas volutpat elementum orci, tincidunt euismod ante facilisis ac. Integer dignissim iaculis varius. Mauris iaculis elit vel posuere pellentesque. Praesent a mi sed neque ullamcorper dignissim sed ut nibh. Sed purus dui, sodales in varius in, accumsan at libero. Vestibulum posuere dui et orci tincidunt, ac consequat felis venenatis.</p>

<p>Morbi sodales, nisl iaculis fringilla imperdiet, metus tortor semper quam, a fringilla nulla dui nec dolor. Phasellus lacinia aliquam ligula sed porttitor. Cras feugiat eros ut arcu commodo dictum. Integer tincidunt nisl id nisl consequat molestie. Integer elit tortor, ultrices sit amet nunc vitae, feugiat tempus mauris. Morbi volutpat consectetur felis sed porttitor. Praesent in urna erat.</p>

<p>Aenean mollis luctus dolor, eu interdum velit faucibus eu. Suspendisse vitae efficitur erat. In facilisis nisi id arcu scelerisque bibendum. Nunc a placerat enim. Donec pharetra, velit quis facilisis tempus, lectus est imperdiet nisl, in tempus tortor dolor iaculis dolor. Nunc vitae molestie turpis. Nam vitae lobortis massa. Nam pharetra non felis in porta.</p>

<p>Vivamus pulvinar diam vel felis dignissim tincidunt. Donec hendrerit non est sed volutpat. In egestas ex tortor, at convallis nunc porttitor at. Fusce sed cursus risus. Nam metus sapien, viverra eget felis id, maximus convallis lacus. Donec nec lacus vitae ex hendrerit ultricies non vel risus. Morbi malesuada ipsum iaculis augue convallis vehicula. Proin eget dolor dignissim, volutpat purus ac, ultricies risus. Pellentesque semper, mauris et pharetra accumsan, ante velit faucibus ex, a mattis metus odio vel ligula. Pellentesque elementum suscipit laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer a turpis sed massa blandit iaculis. Sed aliquet, justo vestibulum euismod rhoncus, nisi dui fringilla sapien, non tempor nunc lectus vitae dolor. Suspendisse potenti.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dictum massa et dolor porta, rhoncus faucibus magna elementum. Sed porta mattis mollis. Donec ut est pretium, pretium nibh porttitor, suscipit metus. Sed viverra felis sed elit vehicula sodales. Nullam ante ante, tristique vel tincidunt ac, egestas eget sem. Sed lorem nunc, pellentesque vel ipsum venenatis, pellentesque interdum orci. Suspendisse mauris dui, accumsan at dapibus sed, volutpat quis erat. Nam fringilla nisl eu nunc lobortis, feugiat posuere libero venenatis. Nunc risus lorem, ornare eget congue in, pretium quis enim. Pellentesque elit elit, pharetra eget nunc at, maximus pellentesque diam.</p>

<p>Praesent fermentum finibus lacus. Nulla tincidunt lectus sed purus facilisis hendrerit. Maecenas volutpat elementum orci, tincidunt euismod ante facilisis ac. Integer dignissim iaculis varius. Mauris iaculis elit vel posuere pellentesque. Praesent a mi sed neque ullamcorper dignissim sed ut nibh. Sed purus dui, sodales in varius in, accumsan at libero. Vestibulum posuere dui et orci tincidunt, ac consequat felis venenatis.</p>

<p>Morbi sodales, nisl iaculis fringilla imperdiet, metus tortor semper quam, a fringilla nulla dui nec dolor. Phasellus lacinia aliquam ligula sed porttitor. Cras feugiat eros ut arcu commodo dictum. Integer tincidunt nisl id nisl consequat molestie. Integer elit tortor, ultrices sit amet nunc vitae, feugiat tempus mauris. Morbi volutpat consectetur felis sed porttitor. Praesent in urna erat.</p>

<p>Aenean mollis luctus dolor, eu interdum velit faucibus eu. Suspendisse vitae efficitur erat. In facilisis nisi id arcu scelerisque bibendum. Nunc a placerat enim. Donec pharetra, velit quis facilisis tempus, lectus est imperdiet nisl, in tempus tortor dolor iaculis dolor. Nunc vitae molestie turpis. Nam vitae lobortis massa. Nam pharetra non felis in porta.</p>

<p>Vivamus pulvinar diam vel felis dignissim tincidunt. Donec hendrerit non est sed volutpat. In egestas ex tortor, at convallis nunc porttitor at. Fusce sed cursus risus. Nam metus sapien, viverra eget felis id, maximus convallis lacus. Donec nec lacus vitae ex hendrerit ultricies non vel risus. Morbi malesuada ipsum iaculis augue convallis vehicula. Proin eget dolor dignissim, volutpat purus ac, ultricies risus. Pellentesque semper, mauris et pharetra accumsan, ante velit faucibus ex, a mattis metus odio vel ligula. Pellentesque elementum suscipit laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer a turpis sed massa blandit iaculis. Sed aliquet, justo vestibulum euismod rhoncus, nisi dui fringilla sapien, non tempor nunc lectus vitae dolor. Suspendisse potenti.</p>',
                'created_at' => NULL,
                'updated_at' => '2021-07-28 10:09:19',
            ),
            24 => 
            array (
                'id' => 26,
                'key' => 'privacy_policy',
                'value' => '<h2>This is a Demo Privacy Policy</h2>

<p>This policy explains how StackFood&nbsp;website and related applications (the &ldquo;Site&rdquo;, &ldquo;we&rdquo; or &ldquo;us&rdquo;) collects, uses, shares and protects the personal information that we collect through this site or different channels. StackFood has established the site to link up the users who need foods or grocery items to be shipped or delivered by the riders from the affiliated restaurants or shops to the desired location. This policy also applies to any mobile applications that we develop for use with our services on the Site, and references to this &ldquo;Site&rdquo;, &ldquo;we&rdquo; or &ldquo;us&rdquo; is intended to also include these mobile applications. Please read below to learn more about our information policies. By using this Site, you agree to these policies.</p>

<h2>How the Information is collected</h2>

<h3>Information provided by web browser</h3>

<p>You have to provide us with personal information like your name, contact no, mailing address and email id, our app will also fetch your location information in order to give you the best service. Like many other websites, we may record information that your web browser routinely shares, such as your browser type, browser language, software and hardware attributes, the date and time of your visit, the web page from which you came, your Internet Protocol address and the geographic location associated with that address, the pages on this Site that you visit and the time you spent on those pages. This will generally be anonymous data that we collect on an aggregate basis.</p>

<h3>Personal Information that you provide</h3>

<p>If you want to use our service, you must create an account on our Site. To establish your account, we will ask for personally identifiable information that can be used to contact or identify you, which may include your name, phone number, and e-mail address. We may also collect demographic information about you, such as your zip code, and allow you to submit additional information that will be part of your profile. Other than basic information that we need to establish your account, it will be up to you to decide how much information to share as part of your profile. We encourage you to think carefully about the information that you share and we recommend that you guard your identity and your sensitive information. Of course, you can review and revise your profile at any time.</p>

<h3>Payment Information</h3>

<p>To make the payment online for availing our services, you have to provide the bank account, mobile financial service (MFS), debit card, credit card information to the StackFood platform.</p>

<h2>How the Information is collected</h2>

<h3>Session and Persistent Cookies</h3>

<p>Cookies are small text files that are placed on your computer by websites that you visit. They are widely used in order to make websites work, or work more efficiently, as well as to provide information to the owners of the site. As is commonly done on websites, we may use cookies and similar technology to keep track of our users and the services they have elected. We use both &ldquo;session&rdquo; and &ldquo;persistent&rdquo; cookies. Session cookies are deleted after you leave our website and when you close your browser. We use data collected with session cookies to enable certain features on our Site, to help us understand how users interact with our Site, and to monitor at an aggregate level Site usage and web traffic routing. We may allow business partners who provide services to our Site to place cookies on your computer that assist us in analyzing usage data. We do not allow these business partners to collect your personal information from our website except as may be necessary for the services that they provide.</p>

<h3>Web Beacons</h3>

<p>We may also use web beacons or similar technology to help us track the effectiveness of our communications.</p>

<h3>Advertising Cookies</h3>

<p>We may use third parties, such as Google, to serve ads about our website over the internet. These third parties may use cookies to identify ads that may be relevant to your interest (for example, based on your recent visit to our website), to limit the number of times that you see an ad, and to measure the effectiveness of the ads.</p>

<h3>Google Analytics</h3>

<p>We may also use Google Analytics or a similar service to gather statistical information about the visitors to this Site and how they use the Site. This, also, is done on an anonymous basis. We will not try to associate anonymous data with your personally identifiable data. If you would like to learn more about Google Analytics, please click here.</p>',
                'created_at' => NULL,
                'updated_at' => '2021-08-22 04:49:58',
            ),
            25 => 
            array (
                'id' => 27,
                'key' => 'minimum_shipping_charge',
                'value' => '10',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'key' => 'per_km_shipping_charge',
                'value' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'key' => 'digital_payment',
                'value' => '{"status":null}',
                'created_at' => '2021-07-01 17:27:38',
                'updated_at' => '2023-10-16 22:12:15',
            ),
            28 => 
            array (
                'id' => 30,
                'key' => 'ssl_commerz_payment',
                'value' => '{"status":"0","store_id":null,"store_password":null}',
                'created_at' => '2021-07-04 18:41:24',
                'updated_at' => '2022-03-23 06:21:28',
            ),
            29 => 
            array (
                'id' => 31,
                'key' => 'razor_pay',
                'value' => '{"status":"0","razor_key":null,"razor_secret":null}',
                'created_at' => '2021-07-04 18:41:28',
                'updated_at' => '2022-03-23 06:21:38',
            ),
            30 => 
            array (
                'id' => 32,
                'key' => 'paypal',
                'value' => '{"status":"0","paypal_client_id":null,"paypal_secret":null}',
                'created_at' => '2021-07-04 18:41:34',
                'updated_at' => '2022-03-23 06:21:49',
            ),
            31 => 
            array (
                'id' => 33,
                'key' => 'paystack',
                'value' => '{"status":"0","publicKey":null,"secretKey":null,"paymentUrl":null,"merchantEmail":null}',
                'created_at' => '2021-07-04 18:41:42',
                'updated_at' => '2022-03-23 06:22:15',
            ),
            32 => 
            array (
                'id' => 34,
                'key' => 'senang_pay',
                'value' => '{"status":"1","secret_key":null,"published_key":null,"merchant_id":null}',
                'created_at' => '2021-07-04 18:41:48',
                'updated_at' => '2022-03-23 06:22:25',
            ),
            33 => 
            array (
                'id' => 35,
                'key' => 'order_handover_message',
                'value' => '{"status":1,"message":"Delivery man is on the way"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'key' => 'order_cancled_message',
                'value' => '{"status":1,"message":"Order is canceled by your request"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'key' => 'timezone',
                'value' => 'US/Central',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 38,
                'key' => 'order_delivery_verification',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 39,
                'key' => 'currency_symbol_position',
                'value' => 'left',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'key' => 'schedule_order',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'key' => 'app_minimum_version',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'key' => 'tax',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 43,
                'key' => 'admin_commission',
                'value' => '10',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 44,
                'key' => 'country',
                'value' => 'US',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 45,
                'key' => 'app_url',
                'value' => 'https://www.google.com',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 46,
                'key' => 'default_location',
                'value' => '{"lat":"0","lng":"0"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 47,
                'key' => 'twilio_sms',
                'value' => '{"status":"0","sid":null,"messaging_service_id":null,"token":null,"from":null,"otp_template":"Your otp is #OTP#."}',
                'created_at' => '2022-03-23 17:16:08',
                'updated_at' => '2022-03-23 17:16:08',
            ),
            46 => 
            array (
                'id' => 48,
                'key' => 'nexmo_sms',
                'value' => '{"status":"0","api_key":null,"api_secret":null,"signature_secret":"","private_key":"","application_id":"","from":null,"otp_template":"Your otp is #OTP#."}',
                'created_at' => '2022-03-23 17:16:18',
                'updated_at' => '2022-03-23 17:16:18',
            ),
            47 => 
            array (
                'id' => 49,
                'key' => '2factor_sms',
                'value' => '{"status":"0","api_key":null}',
                'created_at' => '2022-03-23 17:16:26',
                'updated_at' => '2022-03-23 17:16:26',
            ),
            48 => 
            array (
                'id' => 50,
                'key' => 'msg91_sms',
                'value' => '{"status":"0","template_id":null,"authkey":null}',
                'created_at' => '2022-03-23 17:16:33',
                'updated_at' => '2022-03-23 17:16:33',
            ),
            49 => 
            array (
                'id' => 51,
                'key' => 'free_delivery_over',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 52,
                'key' => 'maintenance_mode',
                'value' => '0',
                'created_at' => '2021-09-08 18:44:28',
                'updated_at' => '2021-09-08 18:44:28',
            ),
            51 => 
            array (
                'id' => 53,
                'key' => 'app_minimum_version_ios',
                'value' => NULL,
                'created_at' => '2021-09-22 01:54:10',
                'updated_at' => '2021-09-22 01:54:10',
            ),
            52 => 
            array (
                'id' => 54,
                'key' => 'app_minimum_version_android',
                'value' => NULL,
                'created_at' => '2021-09-22 01:54:10',
                'updated_at' => '2021-09-22 01:54:10',
            ),
            53 => 
            array (
                'id' => 55,
                'key' => 'app_url_ios',
                'value' => NULL,
                'created_at' => '2021-09-22 01:54:10',
                'updated_at' => '2021-09-22 01:54:10',
            ),
            54 => 
            array (
                'id' => 56,
                'key' => 'app_url_android',
                'value' => NULL,
                'created_at' => '2021-09-22 01:54:10',
                'updated_at' => '2021-09-22 01:54:10',
            ),
            55 => 
            array (
                'id' => 57,
                'key' => 'flutterwave',
                'value' => '{"status":1,"public_key":"FLWPUBK_TEST-3f6a0b6c3d621c4ecbb9beeff516c92b-X","secret_key":"FLWSECK_TEST-ec27426eb062491500a9eb95723b5436-X","hash":"FLWSECK_TEST951e36220f66"}',
                'created_at' => '2021-09-22 01:54:10',
                'updated_at' => '2021-09-22 01:54:10',
            ),
            56 => 
            array (
                'id' => 58,
                'key' => 'dm_maximum_orders',
                'value' => '2',
                'created_at' => '2021-09-24 20:46:13',
                'updated_at' => '2021-09-24 20:46:13',
            ),
            57 => 
            array (
                'id' => 59,
                'key' => 'order_confirmation_model',
                'value' => 'deliveryman',
                'created_at' => '2021-10-17 03:05:08',
                'updated_at' => '2021-10-17 03:05:08',
            ),
            58 => 
            array (
                'id' => 60,
                'key' => 'popular_food',
                'value' => '1',
                'created_at' => '2021-10-17 03:05:08',
                'updated_at' => '2021-10-17 03:05:08',
            ),
            59 => 
            array (
                'id' => 61,
                'key' => 'popular_restaurant',
                'value' => '1',
                'created_at' => '2021-10-17 03:05:08',
                'updated_at' => '2021-10-17 03:05:08',
            ),
            60 => 
            array (
                'id' => 62,
                'key' => 'new_restaurant',
                'value' => '1',
                'created_at' => '2021-10-17 03:05:08',
                'updated_at' => '2021-10-17 03:05:08',
            ),
            61 => 
            array (
                'id' => 63,
                'key' => 'mercadopago',
                'value' => '{"status":1,"public_key":"","access_token":""}',
                'created_at' => '2021-10-17 03:05:08',
                'updated_at' => '2021-10-17 03:05:08',
            ),
            62 => 
            array (
                'id' => 64,
                'key' => 'map_api_key_server',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 66,
                'key' => 'most_reviewed_foods',
                'value' => '1',
                'created_at' => '2021-11-15 17:55:37',
                'updated_at' => '2021-11-15 17:55:37',
            ),
            64 => 
            array (
                'id' => 67,
                'key' => 'landing_page_text',
                'value' => '{"header_title_1":"Food App","header_title_2":"Why stay hungry when you can order from StackFood","header_title_3":"Get 10% OFF on your first order","about_title":"StackFood is Best Delivery Service Near You","why_choose_us":"Why Choose Us?","why_choose_us_title":"Lorem ipsum dolor sit amet, consectetur adipiscing elit.","testimonial_title":"Trusted by Customer & Restaurant Owner","footer_article":"Suspendisse ultrices at diam lectus nullam. Nisl, sagittis viverra enim erat tortor ultricies massa turpis. Arcu pulvinar."}',
                'created_at' => '2021-11-15 17:55:37',
                'updated_at' => '2021-11-15 17:55:37',
            ),
            65 => 
            array (
                'id' => 68,
                'key' => 'landing_page_links',
                'value' => '{"app_url_android_status":"1","app_url_android":"https:\\/\\/play.google.com","app_url_ios_status":"1","app_url_ios":"https:\\/\\/www.apple.com\\/app-store","web_app_url_status":"1","web_app_url":"https:\\/\\/stackfood.6amtech.com\\/"}',
                'created_at' => '2021-11-15 17:55:37',
                'updated_at' => '2021-11-15 17:55:37',
            ),
            66 => 
            array (
                'id' => 69,
                'key' => 'speciality',
                'value' => '[{"img":"clean_&_cheap_icon.png","title":"Clean & Cheap Price"},{"img":"best_dishes_icon.png","title":"Best Dishes Near You"},{"img":"virtual_restaurant_icon.png","title":"Your Own Virtual Restaurant"}]',
                'created_at' => '2021-11-15 17:55:37',
                'updated_at' => '2021-11-15 17:55:37',
            ),
            67 => 
            array (
                'id' => 70,
                'key' => 'testimonial',
                'value' => '[{"img":"img-1.png","name":"Barry Allen","position":"Web Designer","detail":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. A\\r\\n                    aliquam amet animi blanditiis consequatur debitis dicta\\r\\n                    distinctio, enim error eum iste libero modi nam natus\\r\\n                    perferendis possimus quasi sint sit tempora voluptatem. Est,\\r\\n                    exercitationem id ipsa ipsum laboriosam perferendis temporibus!"},{"img":"img-2.png","name":"Sophia Martino","position":"Web Designer","detail":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem. Est, exercitationem id ipsa ipsum laboriosam perferendis temporibus!"},{"img":"img-3.png","name":"Alan Turing","position":"Web Designer","detail":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem. Est, exercitationem id ipsa ipsum laboriosam perferendis temporibus!"},{"img":"img-4.png","name":"Ann Marie","position":"Web Designer","detail":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem. Est, exercitationem id ipsa ipsum laboriosam perferendis temporibus!"}]',
                'created_at' => '2021-11-15 17:55:37',
                'updated_at' => '2021-11-15 17:55:37',
            ),
            68 => 
            array (
                'id' => 71,
                'key' => 'landing_page_images',
                'value' => '{"top_content_image":"double_screen_image.png","about_us_image":"about_us_image.png"}',
                'created_at' => '2021-11-15 17:55:37',
                'updated_at' => '2021-11-15 17:55:37',
            ),
            69 => 
            array (
                'id' => 72,
                'key' => 'paymob_accept',
                'value' => '{"status":"0","api_key":null,"iframe_id":null,"integration_id":null,"hmac":null}',
                'created_at' => '2021-11-15 17:55:37',
                'updated_at' => '2021-11-15 17:55:37',
            ),
            70 => 
            array (
                'id' => 73,
                'key' => 'admin_order_notification',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 74,
                'key' => 'swish_payment',
                'value' => '{"status":"1"}',
                'created_at' => NULL,
                'updated_at' => '2021-12-28 14:02:40',
            ),
            72 => 
            array (
                'id' => 76,
                'key' => 'service_charge',
                'value' => '12',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 77,
                'key' => 'social_login',
                'value' => '[{"login_medium":"google","client_id":null,"client_secret":null,"status":"0"},{"login_medium":"facebook","client_id":null,"client_secret":null,"status":"0"}]',
                'created_at' => NULL,
                'updated_at' => '2022-01-04 15:09:23',
            ),
            74 => 
            array (
                'id' => 78,
                'key' => 'language',
                'value' => '["en"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 79,
                'key' => 'timeformat',
                'value' => '24',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 80,
                'key' => 'canceled_by_restaurant',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 81,
                'key' => 'canceled_by_deliveryman',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 82,
                'key' => 'show_dm_earning',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 83,
                'key' => 'recaptcha',
                'value' => '{"status":"0","site_key":null,"secret_key":null}',
                'created_at' => '2022-03-23 17:17:39',
                'updated_at' => '2022-03-23 17:17:39',
            ),
            80 => 
            array (
                'id' => 84,
                'key' => 'toggle_veg_non_veg',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 85,
                'key' => 'toggle_dm_registration',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 86,
                'key' => 'toggle_restaurant_registration',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 87,
                'key' => 'order_refunded_message',
                'value' => '{"status":1,"message":"Order is refunded successfully"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 88,
                'key' => 'liqpay',
                'value' => '{"status":"1","public_key":null,"private_key":null}',
                'created_at' => NULL,
                'updated_at' => '2022-02-27 07:15:40',
            ),
            85 => 
            array (
                'id' => 89,
                'key' => 'klarna',
                'value' => '{"status":"1","region":"america","username":"PN06804_1a368db08f6d","password":"6ljrP6BDJNKT6F2y"}',
                'created_at' => NULL,
                'updated_at' => '2022-01-26 10:30:51',
            ),
            86 => 
            array (
                'id' => 90,
                'key' => 'fatoorah',
                'value' => '{"status":"1","api_key":"rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL"}',
                'created_at' => NULL,
                'updated_at' => '2022-02-20 13:05:26',
            ),
            87 => 
            array (
                'id' => 91,
                'key' => 'bkash',
                'value' => '{"status":"1","api_key":"5tunt4masn6pv2hnvte1sb5n3j","api_secret":"1vggbqd4hqk9g96o9rrrp2jftvek578v7d2bnerim12a87dbrrka","username":"sandboxTestUser","password":"hWD@8vtzw0"}',
                'created_at' => NULL,
                'updated_at' => '2022-02-27 06:37:26',
            ),
            88 => 
            array (
                'id' => 92,
                'key' => 'paytabs',
                'value' => '{"status":"1","profile_id":null,"server_key":null,"base_url":null}',
                'created_at' => NULL,
                'updated_at' => '2022-02-27 08:06:19',
            ),
            89 => 
            array (
                'id' => 93,
                'key' => 'paytm',
                'value' => '{"status":"1","paytm_merchant_key":null,"paytm_merchant_mid":null,"paytm_merchant_website":null,"paytm_refund_url":null}',
                'created_at' => NULL,
                'updated_at' => '2022-02-27 08:06:37',
            ),
            90 => 
            array (
                'id' => 94,
                'key' => 'schedule_order_slot_duration',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 95,
                'key' => 'digit_after_decimal_point',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 96,
                'key' => 'icon',
                'value' => '2023-08-16-64dca5f544de1.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 97,
                'key' => 'toggle_store_registration',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 98,
                'key' => 'canceled_by_store',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 99,
                'key' => 'parcel_per_km_shipping_charge',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 100,
                'key' => 'parcel_minimum_shipping_charge',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 101,
                'key' => 'parcel_commission_dm',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 102,
                'key' => 'landing_page_links',
                'value' => '{"app_url_android_status":"1","app_url_android":"https:\\/\\/play.google.com","app_url_ios_status":"1","app_url_ios":"https:\\/\\/www.apple.com\\/app-store","web_app_url_status":"1","web_app_url":"https:\\/\\/stackfood.6amtech.com\\/"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 103,
                'key' => 'wallet_status',
                'value' => '0',
                'created_at' => '2022-07-05 06:26:19',
                'updated_at' => '2022-07-05 06:26:19',
            ),
            100 => 
            array (
                'id' => 104,
                'key' => 'loyalty_point_status',
                'value' => '0',
                'created_at' => '2022-07-05 06:26:19',
                'updated_at' => '2022-07-05 06:26:19',
            ),
            101 => 
            array (
                'id' => 105,
                'key' => 'ref_earning_status',
                'value' => '0',
                'created_at' => '2022-07-05 06:26:19',
                'updated_at' => '2022-07-05 06:26:19',
            ),
            102 => 
            array (
                'id' => 106,
                'key' => 'wallet_add_refund',
                'value' => '0',
                'created_at' => '2022-07-05 06:26:19',
                'updated_at' => '2022-07-05 06:26:19',
            ),
            103 => 
            array (
                'id' => 107,
                'key' => 'loyalty_point_exchange_rate',
                'value' => '0',
                'created_at' => '2022-07-05 06:26:20',
                'updated_at' => '2022-07-05 06:26:20',
            ),
            104 => 
            array (
                'id' => 108,
                'key' => 'ref_earning_exchange_rate',
                'value' => '0',
                'created_at' => '2022-07-05 06:26:20',
                'updated_at' => '2022-07-05 06:26:20',
            ),
            105 => 
            array (
                'id' => 109,
                'key' => 'loyalty_point_item_purchase_point',
                'value' => '0',
                'created_at' => '2022-07-05 06:26:20',
                'updated_at' => '2022-07-05 06:26:20',
            ),
            106 => 
            array (
                'id' => 110,
                'key' => 'loyalty_point_minimum_point',
                'value' => '0',
                'created_at' => '2022-07-05 06:26:20',
                'updated_at' => '2022-07-05 06:26:20',
            ),
            107 => 
            array (
                'id' => 111,
                'key' => 'refund_active_status',
                'value' => '0',
                'created_at' => '2022-07-05 06:26:20',
                'updated_at' => '2022-07-05 06:26:20',
            ),
            108 => 
            array (
                'id' => 112,
                'key' => 'dm_tips_status',
                'value' => NULL,
                'created_at' => '2022-07-05 06:26:20',
                'updated_at' => '2022-07-05 06:26:20',
            ),
            109 => 
            array (
                'id' => 113,
                'key' => 'system_language',
                'value' => '[{"id":1,"direction":"ltr","code":"en","status":1,"default":true}]',
                'created_at' => '2023-08-16 02:29:41',
                'updated_at' => '2023-08-16 02:29:41',
            ),
            110 => 
            array (
                'id' => 114,
                'key' => 'site_direction',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 115,
                'key' => 'cookies_text',
                'value' => 'Demo cookie text',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 116,
                'key' => 'tax_included',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 117,
                'key' => 'partial_payment_status',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 118,
                'key' => 'partial_payment_method',
                'value' => 'both',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 119,
                'key' => 'order_notification_type',
                'value' => 'firebase',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 120,
                'key' => 'free_delivery_over_status',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 121,
                'key' => 'additional_charge_status',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 122,
                'key' => 'additional_charge_name',
                'value' => 'Additional Charge',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 123,
                'key' => 'additional_charge',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 124,
                'key' => 'prescription_order_status',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 125,
                'key' => 'delivery_charge_comission',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 126,
                'key' => 'opening_time',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 127,
                'key' => 'closing_time',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 128,
                'key' => 'landing_page',
                'value' => '1',
                'created_at' => '2023-08-16 02:56:24',
                'updated_at' => '2023-08-16 02:56:24',
            ),
            125 => 
            array (
                'id' => 129,
                'key' => 'landing_integration_type',
                'value' => 'file_upload',
                'created_at' => '2023-08-16 02:56:24',
                'updated_at' => '2023-08-16 02:56:24',
            ),
            126 => 
            array (
                'id' => 130,
                'key' => 'mobile_app_section_heading',
                'value' => 'Download the App for Enjoy Best Restaurant Test',
                'created_at' => '2023-08-17 03:26:56',
                'updated_at' => '2023-08-17 03:26:56',
            ),
            127 => 
            array (
                'id' => 131,
                'key' => 'mobile_app_section_text',
                'value' => 'Default Text Mobile App Section',
                'created_at' => '2023-08-17 03:26:56',
                'updated_at' => '2023-08-17 03:26:56',
            ),
            128 => 
            array (
                'id' => 132,
                'key' => 'feature_section_description',
                'value' => 'Feature section description',
                'created_at' => '2023-08-17 03:26:56',
                'updated_at' => '2023-08-17 03:26:56',
            ),
            129 => 
            array (
                'id' => 133,
                'key' => 'Feature section description',
                'value' => '{"app_url_android_status":"0","app_url_android":"https:\\/\\/play.google.com","app_url_ios_status":"0","app_url_ios":"https:\\/\\/www.apple.com\\/app-store","web_app_url_status":"0","web_app_url":"https:\\/\\/6ammart-web.6amtech.com\\/"}',
                'created_at' => '2023-08-17 03:26:56',
                'updated_at' => '2023-08-17 03:26:56',
            ),
            130 => 
            array (
                'id' => 134,
                'key' => 'home_delivery_status',
                'value' => '1',
                'created_at' => '2023-08-17 03:26:56',
                'updated_at' => '2023-08-17 03:26:56',
            ),
            131 => 
            array (
                'id' => 135,
                'key' => 'takeaway_status',
                'value' => '1',
                'created_at' => '2023-08-17 03:26:56',
                'updated_at' => '2023-08-17 03:26:56',
            ),
            132 => 
            array (
                'id' => 136,
                'key' => 'dm_picture_upload_status',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 137,
                'key' => 'offline_payment_status',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-16 23:16:58',
            ),
        ));
        
        
    }
}