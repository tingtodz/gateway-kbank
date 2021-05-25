<?php

namespace Kbank;

use Kbank\Interface\PaymentInterface;
use Kbank\Struct\Constant;

class Kbank extends Constant implements PaymentInterface
{    
    public static function request($order_id, $amount, $description = '', $params = []){

    }

    public static function decode($params){

    }

    public static function inquiry($order_id){

    }
}
