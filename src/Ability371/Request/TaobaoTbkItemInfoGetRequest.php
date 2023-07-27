<?php
namespace Luohonen\TaobaoSdk\Ability371\Request;
use Luohonen\TaobaoSdk\TopUtil;

class TaobaoTbkItemInfoGetRequest {

    /**
        商品ID串，用,分割，最大40个
     **/
    private $numIids;

    /**
        链接形式：1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
        ip地址，影响邮费获取，如果不传或者传入不准确，邮费无法精准提供
     **/
    private $ip;

    /**
        1-动态ID转链场景，2-消费者比价场景，3-商品库导购场景（不填默认为1）
     **/
    private $bizSceneId;

    /**
        1-自购省，2-推广赚（代理模式专属ID，代理模式必填，非代理模式不用填写该字段）
     **/
    private $promotionType;

    /**
        渠道关系ID
     **/
    private $relationId;

    /**
        商品库服务账户(场景id3权限对应的memberid）
     **/
    private $manageItemPubId;


    public function getNumIids() : string{
        return $this->numIids;
    }

    public function setNumIids(string $numIids){
        $this->numIids = $numIids;
    }

    public function getPlatform() : int{
        return $this->platform;
    }

    public function setPlatform(int $platform){
        $this->platform = $platform;
    }

    public function getIp() : string{
        return $this->ip;
    }

    public function setIp(string $ip){
        $this->ip = $ip;
    }

    public function getBizSceneId() : string{
        return $this->bizSceneId;
    }

    public function setBizSceneId(string $bizSceneId){
        $this->bizSceneId = $bizSceneId;
    }

    public function getPromotionType() : string{
        return $this->promotionType;
    }

    public function setPromotionType(string $promotionType){
        $this->promotionType = $promotionType;
    }

    public function getRelationId() : string{
        return $this->relationId;
    }

    public function setRelationId(string $relationId){
        $this->relationId = $relationId;
    }

    public function getManageItemPubId() : int{
        return $this->manageItemPubId;
    }

    public function setManageItemPubId(int $manageItemPubId){
        $this->manageItemPubId = $manageItemPubId;
    }


    public function getApiName() : string {
        return "taobao.tbk.item.info.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->numIids)) {
            $requestParam["num_iids"] = TopUtil::convertBasic($this->numIids);
        }

        if (!TopUtil::checkEmpty($this->platform)) {
            $requestParam["platform"] = TopUtil::convertBasic($this->platform);
        }

        if (!TopUtil::checkEmpty($this->ip)) {
            $requestParam["ip"] = TopUtil::convertBasic($this->ip);
        }

        if (!TopUtil::checkEmpty($this->bizSceneId)) {
            $requestParam["biz_scene_id"] = TopUtil::convertBasic($this->bizSceneId);
        }

        if (!TopUtil::checkEmpty($this->promotionType)) {
            $requestParam["promotion_type"] = TopUtil::convertBasic($this->promotionType);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->manageItemPubId)) {
            $requestParam["manage_item_pub_id"] = TopUtil::convertBasic($this->manageItemPubId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

