<?php
namespace Luohonen\TaobaoSdk\Ability2138;

use Luohonen\TaobaoSdk\TopApiClient;
use Luohonen\TaobaoSdk\Ability2138\Request\TaobaoTbkDgNewuserOrderGetRequest;

class Ability2138 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-新用户订单明细查询
    **/
    public function taobaoTbkDgNewuserOrderGet(TaobaoTbkDgNewuserOrderGetRequest $request) {
        return $this->client->execute("taobao.tbk.dg.newuser.order.get", $request->toMap(), $request->toFileParamMap());
    }
}