<?php
namespace Luohonen\TaobaoSdk\Ability370\Request;
use Luohonen\TaobaoSdk\TopUtil;

class TaobaoTbkShopGetRequest {

    /**
        累计推广商品上限
     **/
    private $endAuctionCount;

    /**
        淘客佣金比率上限，1~10000
     **/
    private $endCommissionRate;

    /**
        信用等级上限，1~20
     **/
    private $endCredit;

    /**
        店铺商品总数上限
     **/
    private $endTotalAction;

    /**
        需返回的字段列表
     **/
    private $fields;

    /**
        是否商城的店铺，设置为true表示该是属于淘宝商城的店铺，设置为false或不设置表示不判断这个属性
     **/
    private $isTmall;

    /**
        第几页，默认1，1~100
     **/
    private $pageNo;

    /**
        页大小，默认20，1~100
     **/
    private $pageSize;

    /**
        链接形式：1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
        查询词
     **/
    private $q;

    /**
        排序_des（降序），排序_asc（升序），佣金比率（commission_rate）， 商品数量（auction_count），销售总数量（total_auction）
     **/
    private $sort;

    /**
        累计推广商品下限
     **/
    private $startAuctionCount;

    /**
        淘客佣金比率下限，1~10000
     **/
    private $startCommissionRate;

    /**
        信用等级下限，1~20
     **/
    private $startCredit;

    /**
        店铺商品总数下限
     **/
    private $startTotalAction;


    public function getEndAuctionCount() : int{
        return $this->endAuctionCount;
    }

    public function setEndAuctionCount(int $endAuctionCount){
        $this->endAuctionCount = $endAuctionCount;
    }

    public function getEndCommissionRate() : int{
        return $this->endCommissionRate;
    }

    public function setEndCommissionRate(int $endCommissionRate){
        $this->endCommissionRate = $endCommissionRate;
    }

    public function getEndCredit() : int{
        return $this->endCredit;
    }

    public function setEndCredit(int $endCredit){
        $this->endCredit = $endCredit;
    }

    public function getEndTotalAction() : int{
        return $this->endTotalAction;
    }

    public function setEndTotalAction(int $endTotalAction){
        $this->endTotalAction = $endTotalAction;
    }

    public function getFields() : string{
        return $this->fields;
    }

    public function setFields(string $fields){
        $this->fields = $fields;
    }

    public function getIsTmall() : bool{
        return $this->isTmall;
    }

    public function setIsTmall(bool $isTmall){
        $this->isTmall = $isTmall;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPlatform() : int{
        return $this->platform;
    }

    public function setPlatform(int $platform){
        $this->platform = $platform;
    }

    public function getQ() : string{
        return $this->q;
    }

    public function setQ(string $q){
        $this->q = $q;
    }

    public function getSort() : string{
        return $this->sort;
    }

    public function setSort(string $sort){
        $this->sort = $sort;
    }

    public function getStartAuctionCount() : int{
        return $this->startAuctionCount;
    }

    public function setStartAuctionCount(int $startAuctionCount){
        $this->startAuctionCount = $startAuctionCount;
    }

    public function getStartCommissionRate() : int{
        return $this->startCommissionRate;
    }

    public function setStartCommissionRate(int $startCommissionRate){
        $this->startCommissionRate = $startCommissionRate;
    }

    public function getStartCredit() : int{
        return $this->startCredit;
    }

    public function setStartCredit(int $startCredit){
        $this->startCredit = $startCredit;
    }

    public function getStartTotalAction() : int{
        return $this->startTotalAction;
    }

    public function setStartTotalAction(int $startTotalAction){
        $this->startTotalAction = $startTotalAction;
    }


    public function getApiName() : string {
        return "taobao.tbk.shop.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->endAuctionCount)) {
            $requestParam["end_auction_count"] = TopUtil::convertBasic($this->endAuctionCount);
        }

        if (!TopUtil::checkEmpty($this->endCommissionRate)) {
            $requestParam["end_commission_rate"] = TopUtil::convertBasic($this->endCommissionRate);
        }

        if (!TopUtil::checkEmpty($this->endCredit)) {
            $requestParam["end_credit"] = TopUtil::convertBasic($this->endCredit);
        }

        if (!TopUtil::checkEmpty($this->endTotalAction)) {
            $requestParam["end_total_action"] = TopUtil::convertBasic($this->endTotalAction);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasic($this->fields);
        }

        if (!TopUtil::checkEmpty($this->isTmall)) {
            $requestParam["is_tmall"] = TopUtil::convertBasic($this->isTmall);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->platform)) {
            $requestParam["platform"] = TopUtil::convertBasic($this->platform);
        }

        if (!TopUtil::checkEmpty($this->q)) {
            $requestParam["q"] = TopUtil::convertBasic($this->q);
        }

        if (!TopUtil::checkEmpty($this->sort)) {
            $requestParam["sort"] = TopUtil::convertBasic($this->sort);
        }

        if (!TopUtil::checkEmpty($this->startAuctionCount)) {
            $requestParam["start_auction_count"] = TopUtil::convertBasic($this->startAuctionCount);
        }

        if (!TopUtil::checkEmpty($this->startCommissionRate)) {
            $requestParam["start_commission_rate"] = TopUtil::convertBasic($this->startCommissionRate);
        }

        if (!TopUtil::checkEmpty($this->startCredit)) {
            $requestParam["start_credit"] = TopUtil::convertBasic($this->startCredit);
        }

        if (!TopUtil::checkEmpty($this->startTotalAction)) {
            $requestParam["start_total_action"] = TopUtil::convertBasic($this->startTotalAction);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

