<?php
namespace Luohonen\TaobaoSdk\Ability376\Domain;

class TaobaoTbkSpreadGetTbkSpreadRequest {

    /**
        原始url, 只支持uland.taobao.com，s.click.taobao.com， ai.taobao.com，temai.taobao.com的域名转换，否则判错
     **/
    public $url;


    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


}

