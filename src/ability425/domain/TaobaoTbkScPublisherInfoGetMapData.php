<?php
namespace Luohonen\TaobaoSdk\Ability425\Domain;

class TaobaoTbkScPublisherInfoGetMapData {

    /**
        共享字段 - 备案场景：common（通用备案），etao（一淘备案），minietao（一淘小程序备案），offlineShop（线下门店备案），offlinePerson（线下个人备案）
     **/
    public $relation_app;

    /**
        共享字段 - 备案日期
     **/
    public $create_date;

    /**
        渠道独有 - 渠道昵称
     **/
    public $account_name;

    /**
        渠道独有 - 渠道名称
     **/
    public $real_name;

    /**
        渠道独有 - 渠道关系ID
     **/
    public $relation_id;

    /**
        渠道独有 - 线下场景信息，1 - 门店，2- 学校，3 - 工厂，4 - 其他
     **/
    public $offline_scene;

    /**
        渠道独有 - 线上场景信息，1 - 微信群，2- QQ群，3 - 其他
     **/
    public $online_scene;

    /**
        渠道独有 - 媒体侧渠道备注信息
     **/
    public $note;

    /**
        共享字段 - 渠道/会员专属pid
     **/
    public $root_pid;

    /**
        共享字段 - 渠道/会员原始身份信息
     **/
    public $rtag;

    /**
        线下备案专属信息
     **/
    public $offline_info;

    /**
        会员独有 - 会员运营ID
     **/
    public $special_id;

    /**
        渠道独有 - 处罚状态
     **/
    public $punish_status;

    /**
        淘宝客外部用户标记
     **/
    public $external_id;

    /**
        1-微信、2-微博、3-抖音、4-快手、5-QQ，0-其他
     **/
    public $external_type;


    public function getRelationApp() : string{
        return $this->relation_app;
    }

    public function setRelationApp(string $relationApp){
        $this->relation_app = $relationApp;
    }

    public function getCreateDate() : string{
        return $this->create_date;
    }

    public function setCreateDate(string $createDate){
        $this->create_date = $createDate;
    }

    public function getAccountName() : string{
        return $this->account_name;
    }

    public function setAccountName(string $accountName){
        $this->account_name = $accountName;
    }

    public function getRealName() : string{
        return $this->real_name;
    }

    public function setRealName(string $realName){
        $this->real_name = $realName;
    }

    public function getRelationId() : int{
        return $this->relation_id;
    }

    public function setRelationId(int $relationId){
        $this->relation_id = $relationId;
    }

    public function getOfflineScene() : string{
        return $this->offline_scene;
    }

    public function setOfflineScene(string $offlineScene){
        $this->offline_scene = $offlineScene;
    }

    public function getOnlineScene() : string{
        return $this->online_scene;
    }

    public function setOnlineScene(string $onlineScene){
        $this->online_scene = $onlineScene;
    }

    public function getNote() : string{
        return $this->note;
    }

    public function setNote(string $note){
        $this->note = $note;
    }

    public function getRootPid() : string{
        return $this->root_pid;
    }

    public function setRootPid(string $rootPid){
        $this->root_pid = $rootPid;
    }

    public function getRtag() : string{
        return $this->rtag;
    }

    public function setRtag(string $rtag){
        $this->rtag = $rtag;
    }

    public function getOfflineInfo() : TaobaoTbkScPublisherInfoGetRegisterInfoDto{
        return $this->offline_info;
    }

    public function setOfflineInfo(TaobaoTbkScPublisherInfoGetRegisterInfoDto $offlineInfo){
        $this->offline_info = $offlineInfo;
    }

    public function getSpecialId() : int{
        return $this->special_id;
    }

    public function setSpecialId(int $specialId){
        $this->special_id = $specialId;
    }

    public function getPunishStatus() : string{
        return $this->punish_status;
    }

    public function setPunishStatus(string $punishStatus){
        $this->punish_status = $punishStatus;
    }

    public function getExternalId() : string{
        return $this->external_id;
    }

    public function setExternalId(string $externalId){
        $this->external_id = $externalId;
    }

    public function getExternalType() : string{
        return $this->external_type;
    }

    public function setExternalType(string $externalType){
        $this->external_type = $externalType;
    }


}

