<?php
namespace Luohonen\TaobaoSdk\Ability369;

use Luohonen\TaobaoSdk\TopApiClient;
use Luohonen\TaobaoSdk\Ability369\Request\TaobaoTbkDgOptimusMaterialRequest;
use Luohonen\TaobaoSdk\Ability369\Request\TaobaoTbkDgOptimusPromotionRequest;

class Ability369 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-物料精选
    **/
    public function taobaoTbkDgOptimusMaterial(TaobaoTbkDgOptimusMaterialRequest $request) {
        return $this->client->execute("taobao.tbk.dg.optimus.material", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-权益物料精选
    **/
    public function taobaoTbkDgOptimusPromotion(TaobaoTbkDgOptimusPromotionRequest $request) {
        return $this->client->execute("taobao.tbk.dg.optimus.promotion", $request->toMap(), $request->toFileParamMap());
    }
}