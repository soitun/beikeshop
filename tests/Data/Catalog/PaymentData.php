<?php

namespace Tests\Data\Catalog;

class PaymentData
{
public const Payment_Paypal = [

    'Paypal_Email' => 'example@163.com', //paypal 沙盒 邮箱
    'Paypal_Pwd'   => '123456', //密码

];

public const Payment_Stripe = [

    'Cardholder_Name' => 'licy', //Cardholder Name
    'Card_Number'     => '4242424242424242', //Card Number
    'Expiration_Date' => '1230',
    'CVV'             => '123',

];
}
