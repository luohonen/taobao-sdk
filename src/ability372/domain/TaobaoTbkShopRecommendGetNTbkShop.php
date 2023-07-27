<?php
namespace Luohonen\TaobaoSdk\Ability372\Domain;

class TaobaoTbkShopRecommendGetNTbkShop {

    /**
        卖家ID
     **/
    public $user_id;

    /**
        店铺名称
     **/
    public $shop_title;

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        店铺类型，B：天猫，C：淘宝
     **/
    public $shop_type;

    /**
        店铺地址
     **/
    public $shop_url;

    /**
        店标图片
     **/
    public $pict_url;


    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getShopTitle() : string{
        return $this->shop_title;
    }

    public function setShopTitle(string $shopTitle){
        $this->shop_title = $shopTitle;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getShopType() : string{
        return $this->shop_type;
    }

    public function setShopType(string $shopType){
        $this->shop_type = $shopType;
    }

    public function getShopUrl() : string{
        return $this->shop_url;
    }

    public function setShopUrl(string $shopUrl){
        $this->shop_url = $shopUrl;
    }

    public function getPictUrl() : string{
        return $this->pict_url;
    }

    public function setPictUrl(string $pictUrl){
        $this->pict_url = $pictUrl;
    }


}

