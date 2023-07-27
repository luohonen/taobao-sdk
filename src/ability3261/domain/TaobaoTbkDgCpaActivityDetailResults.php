<?php
namespace Luohonen\TaobaoSdk\Ability3261\Domain;

class TaobaoTbkDgCpaActivityDetailResults {

    /**
        奖励明细数据，KV结构。字段释义见文档：https://www.yuque.com/docs/share/7ecf8cf1-7f99-4633-a2ed-f9b6f8116af5?#
     **/
    public $field_detail;

    /**
        明细类型，1：预估明细，2：结算明细
     **/
    public $calc_type;

    /**
        明细记录主键id
     **/
    public $id;


    public function getFieldDetail() : array{
        return $this->field_detail;
    }

    public function setFieldDetail(array $fieldDetail){
        $this->field_detail = $fieldDetail;
    }

    public function getCalcType() : int{
        return $this->calc_type;
    }

    public function setCalcType(int $calcType){
        $this->calc_type = $calcType;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }


}

