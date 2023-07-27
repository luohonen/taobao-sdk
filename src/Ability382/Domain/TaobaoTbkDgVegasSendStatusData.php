<?php
namespace Luohonen\TaobaoSdk\Ability382\Domain;

class TaobaoTbkDgVegasSendStatusData {

    /**
        返回结果封装对象
     **/
    public $result_list;


    public function getResultList() : array{
        return $this->result_list;
    }

    public function setResultList(array $resultList){
        $this->result_list = $resultList;
    }


}

