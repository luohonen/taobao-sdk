<?php
namespace Luohonen\TaobaoSdk\Ability425\Domain;

class TaobaoTbkScPublisherInfoGetRegisterInfoDto {

    /**
        渠道独有 -店铺名称
     **/
    public $shop_name;

    /**
        渠道独有 -店铺类型
     **/
    public $shop_type;

    /**
        渠道独有 - 信息
     **/
    public $phone_number;

    /**
        渠道独有 -信息
     **/
    public $detail_address;

    /**
        渠道独有 -区
     **/
    public $location;

    /**
        渠道独有 -类型
     **/
    public $shop_certify_type;

    /**
        渠道独有 - 编号
     **/
    public $certify_number;

    /**
        渠道独有 -经营类型
     **/
    public $career;


    public function getShopName() : string{
        return $this->shop_name;
    }

    public function setShopName(string $shopName){
        $this->shop_name = $shopName;
    }

    public function getShopType() : string{
        return $this->shop_type;
    }

    public function setShopType(string $shopType){
        $this->shop_type = $shopType;
    }

    public function getPhoneNumber() : string{
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phoneNumber){
        $this->phone_number = $phoneNumber;
    }

    public function getDetailAddress() : string{
        return $this->detail_address;
    }

    public function setDetailAddress(string $detailAddress){
        $this->detail_address = $detailAddress;
    }

    public function getLocation() : string{
        return $this->location;
    }

    public function setLocation(string $location){
        $this->location = $location;
    }

    public function getShopCertifyType() : string{
        return $this->shop_certify_type;
    }

    public function setShopCertifyType(string $shopCertifyType){
        $this->shop_certify_type = $shopCertifyType;
    }

    public function getCertifyNumber() : string{
        return $this->certify_number;
    }

    public function setCertifyNumber(string $certifyNumber){
        $this->certify_number = $certifyNumber;
    }

    public function getCareer() : string{
        return $this->career;
    }

    public function setCareer(string $career){
        $this->career = $career;
    }


}

