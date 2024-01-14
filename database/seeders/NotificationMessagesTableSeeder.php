<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notification_messages')->delete();
        
        \DB::table('notification_messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'module_type' => 'grocery',
                'key' => 'order_pending_message',
                'message' => '{userName}, Your  order {orderId} is successfully placed',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:40',
            ),
            1 => 
            array (
                'id' => 2,
                'module_type' => 'grocery',
                'key' => 'order_confirmation_msg',
                'message' => '{userName}, Your order {orderId} is confirmed',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:40',
            ),
            2 => 
            array (
                'id' => 3,
                'module_type' => 'grocery',
                'key' => 'order_processing_message',
                'message' => '{userName}, Your order is Processing by {storeName}',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:40',
            ),
            3 => 
            array (
                'id' => 4,
                'module_type' => 'grocery',
                'key' => 'order_handover_message',
                'message' => 'Delivery man is on the way. For this order {orderId}',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:40',
            ),
            4 => 
            array (
                'id' => 5,
                'module_type' => 'grocery',
                'key' => 'order_refunded_message',
                'message' => 'Order {orderId} Refunded successfully',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:40',
            ),
            5 => 
            array (
                'id' => 6,
                'module_type' => 'grocery',
                'key' => 'refund_request_canceled',
                'message' => 'Order {orderId}  Refund request is canceled',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:40',
            ),
            6 => 
            array (
                'id' => 7,
                'module_type' => 'grocery',
                'key' => 'out_for_delivery_message',
                'message' => '{userName}, Your order {orderId} is ready for delivery',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:41',
            ),
            7 => 
            array (
                'id' => 8,
                'module_type' => 'grocery',
                'key' => 'order_delivered_message',
                'message' => 'Your order {orderId} is delivered',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:41',
            ),
            8 => 
            array (
                'id' => 9,
                'module_type' => 'grocery',
                'key' => 'delivery_boy_assign_message',
                'message' => 'Your order {orderId} has been assigned to a delivery man',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:41',
            ),
            9 => 
            array (
                'id' => 10,
                'module_type' => 'grocery',
                'key' => 'delivery_boy_delivered_message',
                'message' => 'Order {orderId} delivered successfully',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:41',
            ),
            10 => 
            array (
                'id' => 11,
                'module_type' => 'grocery',
                'key' => 'order_cancled_message',
                'message' => 'Order {orderId} is canceled by your request',
                'status' => 1,
                'created_at' => '2023-01-17 18:53:45',
                'updated_at' => '2023-06-12 21:33:41',
            ),
            11 => 
            array (
                'id' => 12,
                'module_type' => 'food',
                'key' => 'order_pending_message',
                'message' => '{userName}, Your  order {orderId} is successfully placed',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:14',
            ),
            12 => 
            array (
                'id' => 13,
                'module_type' => 'food',
                'key' => 'order_confirmation_msg',
                'message' => '{userName}, Your order {orderId} is confirmed',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:14',
            ),
            13 => 
            array (
                'id' => 14,
                'module_type' => 'food',
                'key' => 'order_processing_message',
                'message' => '{userName}, Your food is started for cooking by {storeName}',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:14',
            ),
            14 => 
            array (
                'id' => 15,
                'module_type' => 'food',
                'key' => 'order_handover_message',
                'message' => 'Delivery man is on the way. For this order {orderId}',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:14',
            ),
            15 => 
            array (
                'id' => 16,
                'module_type' => 'food',
                'key' => 'order_refunded_message',
                'message' => 'Order {orderId} Refunded successfully',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:14',
            ),
            16 => 
            array (
                'id' => 17,
                'module_type' => 'food',
                'key' => 'refund_request_canceled',
                'message' => 'Order {orderId}  Refund request is canceled',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:14',
            ),
            17 => 
            array (
                'id' => 18,
                'module_type' => 'food',
                'key' => 'out_for_delivery_message',
                'message' => '{userName}, Your order {orderId}  is ready for delivery',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:14',
            ),
            18 => 
            array (
                'id' => 19,
                'module_type' => 'food',
                'key' => 'order_delivered_message',
                'message' => 'Your order {orderId} is delivered',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:15',
            ),
            19 => 
            array (
                'id' => 20,
                'module_type' => 'food',
                'key' => 'delivery_boy_assign_message',
                'message' => 'Your order {orderId} has been assigned to a delivery man',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:15',
            ),
            20 => 
            array (
                'id' => 21,
                'module_type' => 'food',
                'key' => 'delivery_boy_delivered_message',
                'message' => 'Order {orderId} delivered successfully',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:15',
            ),
            21 => 
            array (
                'id' => 22,
                'module_type' => 'food',
                'key' => 'order_cancled_message',
                'message' => 'Order {orderId} is canceled by your request',
                'status' => 1,
                'created_at' => '2023-01-17 18:56:00',
                'updated_at' => '2023-06-12 22:19:15',
            ),
            22 => 
            array (
                'id' => 23,
                'module_type' => 'pharmacy',
                'key' => 'order_pending_message',
                'message' => '{userName}, Your  order {orderId} is successfully placed',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            23 => 
            array (
                'id' => 24,
                'module_type' => 'pharmacy',
                'key' => 'order_confirmation_msg',
                'message' => '{userName}, Your order {orderId} is confirmed',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            24 => 
            array (
                'id' => 25,
                'module_type' => 'pharmacy',
                'key' => 'order_processing_message',
                'message' => '{userName}, Your order is Processing by {storeName}',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            25 => 
            array (
                'id' => 26,
                'module_type' => 'pharmacy',
                'key' => 'order_handover_message',
                'message' => 'Delivery man is on the way. For this order {orderId}',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            26 => 
            array (
                'id' => 27,
                'module_type' => 'pharmacy',
                'key' => 'order_refunded_message',
                'message' => 'Order {orderId} Refunded successfully',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            27 => 
            array (
                'id' => 28,
                'module_type' => 'pharmacy',
                'key' => 'refund_request_canceled',
                'message' => 'Order {orderId}  Refund request is canceled',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            28 => 
            array (
                'id' => 29,
                'module_type' => 'pharmacy',
                'key' => 'out_for_delivery_message',
                'message' => '{userName}, Your order {orderId} is ready for delivery',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            29 => 
            array (
                'id' => 30,
                'module_type' => 'pharmacy',
                'key' => 'order_delivered_message',
                'message' => 'Your order {orderId} is delivered',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            30 => 
            array (
                'id' => 31,
                'module_type' => 'pharmacy',
                'key' => 'delivery_boy_assign_message',
                'message' => 'Your order {orderId} has been assigned to a delivery man',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            31 => 
            array (
                'id' => 32,
                'module_type' => 'pharmacy',
                'key' => 'delivery_boy_delivered_message',
                'message' => 'Order {orderId} delivered successfully',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            32 => 
            array (
                'id' => 33,
                'module_type' => 'pharmacy',
                'key' => 'order_cancled_message',
                'message' => 'Order {orderId} is canceled by your request',
                'status' => 1,
                'created_at' => '2023-01-17 18:57:46',
                'updated_at' => '2023-06-12 22:22:20',
            ),
            33 => 
            array (
                'id' => 34,
                'module_type' => 'ecommerce',
                'key' => 'order_pending_message',
                'message' => '{userName}, Your  order {orderId} is successfully placed',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            34 => 
            array (
                'id' => 35,
                'module_type' => 'ecommerce',
                'key' => 'order_confirmation_msg',
                'message' => '{userName}, Your order {orderId} is confirmed',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            35 => 
            array (
                'id' => 36,
                'module_type' => 'ecommerce',
                'key' => 'order_processing_message',
                'message' => '{userName}, Your order is Processing by {storeName}',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            36 => 
            array (
                'id' => 37,
                'module_type' => 'ecommerce',
                'key' => 'order_handover_message',
                'message' => 'Delivery man is on the way. For this order {orderId}',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            37 => 
            array (
                'id' => 38,
                'module_type' => 'ecommerce',
                'key' => 'order_refunded_message',
                'message' => 'Order {orderId} Refunded successfully',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            38 => 
            array (
                'id' => 39,
                'module_type' => 'ecommerce',
                'key' => 'refund_request_canceled',
                'message' => 'Order {orderId}  Refund request is canceled',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            39 => 
            array (
                'id' => 40,
                'module_type' => 'ecommerce',
                'key' => 'out_for_delivery_message',
                'message' => '{userName}, Your order {orderId} is ready for delivery',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            40 => 
            array (
                'id' => 41,
                'module_type' => 'ecommerce',
                'key' => 'order_delivered_message',
                'message' => 'Your order {orderId} is delivered',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            41 => 
            array (
                'id' => 42,
                'module_type' => 'ecommerce',
                'key' => 'delivery_boy_assign_message',
                'message' => 'Your order {orderId} has been assigned to a delivery man',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            42 => 
            array (
                'id' => 43,
                'module_type' => 'ecommerce',
                'key' => 'delivery_boy_delivered_message',
                'message' => 'Order {orderId} delivered successfully',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            43 => 
            array (
                'id' => 44,
                'module_type' => 'ecommerce',
                'key' => 'order_cancled_message',
                'message' => 'Order {orderId} is canceled by your request',
                'status' => 1,
                'created_at' => '2023-01-17 18:59:24',
                'updated_at' => '2023-06-12 22:25:02',
            ),
            44 => 
            array (
                'id' => 45,
                'module_type' => 'parcel',
                'key' => 'order_pending_message',
                'message' => '{userName}, Your parcel order is successfully placed',
                'status' => 1,
                'created_at' => '2023-01-17 19:01:02',
                'updated_at' => '2023-06-12 22:29:42',
            ),
            45 => 
            array (
                'id' => 46,
                'module_type' => 'parcel',
                'key' => 'order_confirmation_msg',
                'message' => 'Your order {orderId} is confirmed',
                'status' => 1,
                'created_at' => '2023-01-17 19:01:02',
                'updated_at' => '2023-06-12 22:29:42',
            ),
            46 => 
            array (
                'id' => 47,
                'module_type' => 'parcel',
                'key' => 'out_for_delivery_message',
                'message' => 'Your parcel order  {orderId}  is ready for delivery',
                'status' => 1,
                'created_at' => '2023-01-17 19:01:02',
                'updated_at' => '2023-06-12 22:29:42',
            ),
            47 => 
            array (
                'id' => 48,
                'module_type' => 'parcel',
                'key' => 'order_delivered_message',
                'message' => 'Your parcel id  {orderId}  is delivered',
                'status' => 1,
                'created_at' => '2023-01-17 19:01:02',
                'updated_at' => '2023-06-12 22:29:42',
            ),
            48 => 
            array (
                'id' => 49,
                'module_type' => 'parcel',
                'key' => 'delivery_boy_assign_message',
                'message' => 'Your order {orderId}  has been assigned to a delivery man',
                'status' => 1,
                'created_at' => '2023-01-17 19:01:02',
                'updated_at' => '2023-06-12 22:29:42',
            ),
            49 => 
            array (
                'id' => 50,
                'module_type' => 'parcel',
                'key' => 'delivery_boy_delivered_message',
                'message' => 'parcel id  {orderId}  delivered successfully',
                'status' => 1,
                'created_at' => '2023-01-17 19:01:02',
                'updated_at' => '2023-06-12 22:29:42',
            ),
            50 => 
            array (
                'id' => 51,
                'module_type' => 'parcel',
                'key' => 'order_cancled_message',
                'message' => 'Order is canceled by your request',
                'status' => 1,
                'created_at' => '2023-01-17 19:01:02',
                'updated_at' => '2023-01-17 19:01:02',
            ),
        ));
        
        
    }
}