<?php
namespace Luohonen\TaobaoSdk\Ability2474\Domain;

class TaobaoTbkDgVegasSendReportRightsSendRelationRptDto {

    /**
        日期
     **/
    public $biz_date;

    /**
        渠道关系id
     **/
    public $relation_id;

    /**
        红包发放数量
     **/
    public $fund_num;

    /**
        渠道关系id关联的pid
     **/
    public $pid;

    /**
        红包使用次数
     **/
    public $use_num;


    public function getBizDate() : string{
        return $this->biz_date;
    }

    public function setBizDate(string $bizDate){
        $this->biz_date = $bizDate;
    }

    public function getRelationId() : int{
        return $this->relation_id;
    }

    public function setRelationId(int $relationId){
        $this->relation_id = $relationId;
    }

    public function getFundNum() : int{
        return $this->fund_num;
    }

    public function setFundNum(int $fundNum){
        $this->fund_num = $fundNum;
    }

    public function getPid() : string{
        return $this->pid;
    }

    public function setPid(string $pid){
        $this->pid = $pid;
    }

    public function getUseNum() : int{
        return $this->use_num;
    }

    public function setUseNum(int $useNum){
        $this->use_num = $useNum;
    }


}

