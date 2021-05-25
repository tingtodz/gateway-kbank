<?php 
namespace Kbank\Interface;

use Kbank\Struct\Constant;

interface PaymentInterface extends Constant
{
    public static function request($order_id, $amount, $description = '', $params = []);

    public static function decode($params);

    public static function inquiry($order_id);

}