<?php
namespace Luohonen\TaobaoSdk\Ability2138\Domain;

class TaobaoTbkDgNewuserOrderGetResults {

    /**
        data
     **/
    public $data;


    public function getData() : TaobaoTbkDgNewuserOrderGetData{
        return $this->data;
    }

    public function setData(TaobaoTbkDgNewuserOrderGetData $data){
        $this->data = $data;
    }


}

