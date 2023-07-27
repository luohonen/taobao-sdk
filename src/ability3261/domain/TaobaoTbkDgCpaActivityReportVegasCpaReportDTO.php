<?php
namespace Luohonen\TaobaoSdk\Ability3261\Domain;

class TaobaoTbkDgCpaActivityReportVegasCpaReportDTO {

    /**
        符合奖励要求的累计用户数；按入参是预估/结算，区分用户数为预估or可结算结果；
     **/
    public $union_30d_lx_uv;

    /**
        奖励金额；按入参是预估/结算，区分获得金额为预估or可结算结果；
     **/
    public $reward_amount;

    /**
        rid，当查询数据为rid维度时返回该字段
     **/
    public $relation_id;

    /**
        统计日期（统计活动期内，截止 统计日期 的数据）
     **/
    public $biz_date;

    /**
        媒体三段式id，当查询数据为pid维度时返回该字段
     **/
    public $pid;

    /**
        数据类型:1预估 2结算
     **/
    public $query_type;

    /**
        活动相关数据信息
     **/
    public $ext_info;


    public function getUnion30dLxUv() : int{
        return $this->union_30d_lx_uv;
    }

    public function setUnion30dLxUv(int $union30dLxUv){
        $this->union_30d_lx_uv = $union30dLxUv;
    }

    public function getRewardAmount() : string{
        return $this->reward_amount;
    }

    public function setRewardAmount(string $rewardAmount){
        $this->reward_amount = $rewardAmount;
    }

    public function getRelationId() : int{
        return $this->relation_id;
    }

    public function setRelationId(int $relationId){
        $this->relation_id = $relationId;
    }

    public function getBizDate() : string{
        return $this->biz_date;
    }

    public function setBizDate(string $bizDate){
        $this->biz_date = $bizDate;
    }

    public function getPid() : string{
        return $this->pid;
    }

    public function setPid(string $pid){
        $this->pid = $pid;
    }

    public function getQueryType() : int{
        return $this->query_type;
    }

    public function setQueryType(int $queryType){
        $this->query_type = $queryType;
    }

    public function getExtInfo() : string{
        return $this->ext_info;
    }

    public function setExtInfo(string $extInfo){
        $this->ext_info = $extInfo;
    }


}

