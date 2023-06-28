<?php

namespace app\api\validate;

use app\common\validate\BaseValidate;

class IntegralShopValidate extends BaseValidate
{
    protected $rule = [
        "shop_id" => "require|number"
    ];
    protected $field = [
        "shop_id" => "商品ID"
    ];

    public function sceneAddOrder()
    {
        return $this->only(["shop_id"]);
    }
}
