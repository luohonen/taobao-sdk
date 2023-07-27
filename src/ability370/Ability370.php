<?php
namespace Luohonen\TaobaoSdk\Ability370;

use Luohonen\TaobaoSdk\TopApiClient;
use Luohonen\TaobaoSdk\Ability370\Request\TaobaoTbkDgMaterialOptionalRequest;
use Luohonen\TaobaoSdk\Ability370\Request\TaobaoTbkShopGetRequest;
use Luohonen\TaobaoSdk\Ability370\Request\TaobaoTbkDgMaterialTemporaryOptionalRequest;

class Ability370 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-物料搜索
    **/
    public function taobaoTbkDgMaterialOptional(TaobaoTbkDgMaterialOptionalRequest $request) {
        return $this->client->execute("taobao.tbk.dg.material.optional", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-店铺搜索
    **/
    public function taobaoTbkShopGet(TaobaoTbkShopGetRequest $request) {
        return $this->client->execute("taobao.tbk.shop.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-物料搜索（临时接口）
    **/
    public function taobaoTbkDgMaterialTemporaryOptional(TaobaoTbkDgMaterialTemporaryOptionalRequest $request) {
        return $this->client->execute("taobao.tbk.dg.material.temporary.optional", $request->toMap(), $request->toFileParamMap());
    }
}