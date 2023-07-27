<?php
namespace Luohonen\TaobaoSdk\Ability374\Domain;

class TaobaoTbkActivityInfoGetData {

    /**
        【本地化】微信推广二维码地址
     **/
    public $wx_qrcode_url;

    /**
        淘客推广长链
     **/
    public $click_url;

    /**
        淘客推广短链
     **/
    public $short_click_url;

    /**
        投放平台, 1-PC 2-无线
     **/
    public $terminal_type;

    /**
        物料素材下载地址
     **/
    public $material_oss_url;

    /**
        会场名称
     **/
    public $page_name;

    /**
        活动开始时间
     **/
    public $page_start_time;

    /**
        活动结束时间
     **/
    public $page_end_time;

    /**
        【本地化】微信小程序路径
     **/
    public $wx_miniprogram_path;


    public function getWxQrcodeUrl() : string{
        return $this->wx_qrcode_url;
    }

    public function setWxQrcodeUrl(string $wxQrcodeUrl){
        $this->wx_qrcode_url = $wxQrcodeUrl;
    }

    public function getClickUrl() : string{
        return $this->click_url;
    }

    public function setClickUrl(string $clickUrl){
        $this->click_url = $clickUrl;
    }

    public function getShortClickUrl() : string{
        return $this->short_click_url;
    }

    public function setShortClickUrl(string $shortClickUrl){
        $this->short_click_url = $shortClickUrl;
    }

    public function getTerminalType() : string{
        return $this->terminal_type;
    }

    public function setTerminalType(string $terminalType){
        $this->terminal_type = $terminalType;
    }

    public function getMaterialOssUrl() : string{
        return $this->material_oss_url;
    }

    public function setMaterialOssUrl(string $materialOssUrl){
        $this->material_oss_url = $materialOssUrl;
    }

    public function getPageName() : string{
        return $this->page_name;
    }

    public function setPageName(string $pageName){
        $this->page_name = $pageName;
    }

    public function getPageStartTime() : string{
        return $this->page_start_time;
    }

    public function setPageStartTime(string $pageStartTime){
        $this->page_start_time = $pageStartTime;
    }

    public function getPageEndTime() : string{
        return $this->page_end_time;
    }

    public function setPageEndTime(string $pageEndTime){
        $this->page_end_time = $pageEndTime;
    }

    public function getWxMiniprogramPath() : string{
        return $this->wx_miniprogram_path;
    }

    public function setWxMiniprogramPath(string $wxMiniprogramPath){
        $this->wx_miniprogram_path = $wxMiniprogramPath;
    }


}

