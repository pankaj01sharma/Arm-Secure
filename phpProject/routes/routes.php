<?php
Route::post('payment', array(
    'as' => 'payment',
    'uses' => 'IndexController@postPayment',
));
// this is after make the payment, PayPal redirect back to your site
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'IndexController@getPaymentStatus',
));