<?php
namespace Luohonen\TaobaoSdk\Ability373\Domain;

class TaobaoJuItemsSearchItems {

    /**
        卖点描述
     **/
    public $usp_desc_list;

    /**
        淘宝类目id
     **/
    public $tb_first_cat_id;

    /**
        原价
     **/
    public $orig_price;

    /**
        itemId
     **/
    public $item_id;

    /**
        展示结束时间
     **/
    public $show_end_time;

    /**
        pc链接
     **/
    public $pc_url;

    /**
        频道id
     **/
    public $platform_id;

    /**
        聚划算id
     **/
    public $ju_id;

    /**
        无线主图
     **/
    public $pic_url_for_w_l;

    /**
        开团时间
     **/
    public $online_start_time;

    /**
        类目名称
     **/
    public $category_name;

    /**
        聚划算价格，单位分
     **/
    public $act_price;

    /**
        商品标题
     **/
    public $title;

    /**
        无线链接
     **/
    public $wap_url;

    /**
        商品卖点
     **/
    public $item_usp_list;

    /**
        开始展示时间
     **/
    public $show_start_time;

    /**
        开团结束时间
     **/
    public $online_end_time;

    /**
        pc主图
     **/
    public $pic_url_for_p_c;

    /**
        价格卖点
     **/
    public $price_usp_list;

    /**
        是否包邮
     **/
    public $pay_postage;


    public function getUspDescList() : array{
        return $this->usp_desc_list;
    }

    public function setUspDescList(array $uspDescList){
        $this->usp_desc_list = $uspDescList;
    }

    public function getTbFirstCatId() : int{
        return $this->tb_first_cat_id;
    }

    public function setTbFirstCatId(int $tbFirstCatId){
        $this->tb_first_cat_id = $tbFirstCatId;
    }

    public function getOrigPrice() : string{
        return $this->orig_price;
    }

    public function setOrigPrice(string $origPrice){
        $this->orig_price = $origPrice;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getShowEndTime() : int{
        return $this->show_end_time;
    }

    public function setShowEndTime(int $showEndTime){
        $this->show_end_time = $showEndTime;
    }

    public function getPcUrl() : string{
        return $this->pc_url;
    }

    public function setPcUrl(string $pcUrl){
        $this->pc_url = $pcUrl;
    }

    public function getPlatformId() : int{
        return $this->platform_id;
    }

    public function setPlatformId(int $platformId){
        $this->platform_id = $platformId;
    }

    public function getJuId() : int{
        return $this->ju_id;
    }

    public function setJuId(int $juId){
        $this->ju_id = $juId;
    }

    public function getPicUrlForWL() : string{
        return $this->pic_url_for_w_l;
    }

    public function setPicUrlForWL(string $picUrlForWL){
        $this->pic_url_for_w_l = $picUrlForWL;
    }

    public function getOnlineStartTime() : int{
        return $this->online_start_time;
    }

    public function setOnlineStartTime(int $onlineStartTime){
        $this->online_start_time = $onlineStartTime;
    }

    public function getCategoryName() : string{
        return $this->category_name;
    }

    public function setCategoryName(string $categoryName){
        $this->category_name = $categoryName;
    }

    public function getActPrice() : string{
        return $this->act_price;
    }

    public function setActPrice(string $actPrice){
        $this->act_price = $actPrice;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getWapUrl() : string{
        return $this->wap_url;
    }

    public function setWapUrl(string $wapUrl){
        $this->wap_url = $wapUrl;
    }

    public function getItemUspList() : array{
        return $this->item_usp_list;
    }

    public function setItemUspList(array $itemUspList){
        $this->item_usp_list = $itemUspList;
    }

    public function getShowStartTime() : int{
        return $this->show_start_time;
    }

    public function setShowStartTime(int $showStartTime){
        $this->show_start_time = $showStartTime;
    }

    public function getOnlineEndTime() : int{
        return $this->online_end_time;
    }

    public function setOnlineEndTime(int $onlineEndTime){
        $this->online_end_time = $onlineEndTime;
    }

    public function getPicUrlForPC() : string{
        return $this->pic_url_for_p_c;
    }

    public function setPicUrlForPC(string $picUrlForPC){
        $this->pic_url_for_p_c = $picUrlForPC;
    }

    public function getPriceUspList() : array{
        return $this->price_usp_list;
    }

    public function setPriceUspList(array $priceUspList){
        $this->price_usp_list = $priceUspList;
    }

    public function getPayPostage() : bool{
        return $this->pay_postage;
    }

    public function setPayPostage(bool $payPostage){
        $this->pay_postage = $payPostage;
    }


}

