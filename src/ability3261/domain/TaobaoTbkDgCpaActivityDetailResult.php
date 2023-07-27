<?php
namespace Luohonen\TaobaoSdk\Ability3261\Domain;

class TaobaoTbkDgCpaActivityDetailResult {

    /**
        错误代码
     **/
    public $biz_error_feature;

    /**
        返回素材id
     **/
    public $data;

    /**
        是否成功
     **/
    public $success;

    /**
        结果码
     **/
    public $result_code;

    /**
        错误描述
     **/
    public $biz_error_desc;

    /**
        错误代码
     **/
    public $biz_error_code;

    /**
        结果信息
     **/
    public $result_msg;


    public function getBizErrorFeature() : string{
        return $this->biz_error_feature;
    }

    public function setBizErrorFeature(string $bizErrorFeature){
        $this->biz_error_feature = $bizErrorFeature;
    }

    public function getData() : TaobaoTbkDgCpaActivityDetailPageResult{
        return $this->data;
    }

    public function setData(TaobaoTbkDgCpaActivityDetailPageResult $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getResultCode() : int{
        return $this->result_code;
    }

    public function setResultCode(int $resultCode){
        $this->result_code = $resultCode;
    }

    public function getBizErrorDesc() : string{
        return $this->biz_error_desc;
    }

    public function setBizErrorDesc(string $bizErrorDesc){
        $this->biz_error_desc = $bizErrorDesc;
    }

    public function getBizErrorCode() : int{
        return $this->biz_error_code;
    }

    public function setBizErrorCode(int $bizErrorCode){
        $this->biz_error_code = $bizErrorCode;
    }

    public function getResultMsg() : string{
        return $this->result_msg;
    }

    public function setResultMsg(string $resultMsg){
        $this->result_msg = $resultMsg;
    }


}

