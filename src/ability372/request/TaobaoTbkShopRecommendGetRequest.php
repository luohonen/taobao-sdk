<?php
namespace Luohonen\TaobaoSdk\Ability372\Request;
use Luohonen\TaobaoSdk\TopUtil;

class TaobaoTbkShopRecommendGetRequest {

    /**
        返回数量，默认20，最大值40
     **/
    private $count;

    /**
        需返回的字段列表
     **/
    private $fields;

    /**
        链接形式：1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
        卖家Id
     **/
    private $userId;


    public function getCount() : int{
        return $this->count;
    }

    public function setCount(int $count){
        $this->count = $count;
    }

    public function getFields() : string{
        return $this->fields;
    }

    public function setFields(string $fields){
        $this->fields = $fields;
    }

    public function getPlatform() : int{
        return $this->platform;
    }

    public function setPlatform(int $platform){
        $this->platform = $platform;
    }

    public function getUserId() : int{
        return $this->userId;
    }

    public function setUserId(int $userId){
        $this->userId = $userId;
    }


    public function getApiName() : string {
        return "taobao.tbk.shop.recommend.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->count)) {
            $requestParam["count"] = TopUtil::convertBasic($this->count);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasic($this->fields);
        }

        if (!TopUtil::checkEmpty($this->platform)) {
            $requestParam["platform"] = TopUtil::convertBasic($this->platform);
        }

        if (!TopUtil::checkEmpty($this->userId)) {
            $requestParam["user_id"] = TopUtil::convertBasic($this->userId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

