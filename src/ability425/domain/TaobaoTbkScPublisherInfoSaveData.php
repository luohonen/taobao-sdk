<?php
namespace Luohonen\TaobaoSdk\Ability425\Domain;

class TaobaoTbkScPublisherInfoSaveData {

    /**
        渠道关系ID
     **/
    public $relation_id;

    /**
        渠道昵称
     **/
    public $account_name;

    /**
        会员运营ID
     **/
    public $special_id;

    /**
        如果重复绑定会提示：”重复绑定渠道“或”重复绑定粉丝“
     **/
    public $desc;


    public function getRelationId() : int{
        return $this->relation_id;
    }

    public function setRelationId(int $relationId){
        $this->relation_id = $relationId;
    }

    public function getAccountName() : string{
        return $this->account_name;
    }

    public function setAccountName(string $accountName){
        $this->account_name = $accountName;
    }

    public function getSpecialId() : int{
        return $this->special_id;
    }

    public function setSpecialId(int $specialId){
        $this->special_id = $specialId;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }


}

