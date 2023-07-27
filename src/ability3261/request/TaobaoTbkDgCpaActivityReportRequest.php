<?php
namespace Luohonen\TaobaoSdk\Ability3261\Request;
use Luohonen\TaobaoSdk\TopUtil;

class TaobaoTbkDgCpaActivityReportRequest {

    /**
        CPA活动ID，详见https://www.yuque.com/docs/share/16905f3f-3a22-4e7c-b8c3-4d23791d42f7?#
     **/
    private $eventId;

    /**
        日期(yyyyMMdd)
     **/
    private $bizDate;

    /**
        分页页数，从1开始
     **/
    private $pageNo;

    /**
        数据类型：数据类型:1预估 2结算 （选择1可查询含当天实时预估统计的累计数据，选择2可查询最晚截止昨天结算的累计数据，具体逻辑以活动规则描述为准；）
     **/
    private $queryType;

    /**
        分页大小
     **/
    private $pageSize;

    /**
        媒体三段式id（如果传入pid则返回pid汇总数据，不传则返回member维度统计数据，pid和relationid不可同时传入）
     **/
    private $pid;

    /**
        代理id（如果传入rid则返回rid统计数据，不传则返回member维度统计数据）
     **/
    private $relationId;


    public function getEventId() : int{
        return $this->eventId;
    }

    public function setEventId(int $eventId){
        $this->eventId = $eventId;
    }

    public function getBizDate() : string{
        return $this->bizDate;
    }

    public function setBizDate(string $bizDate){
        $this->bizDate = $bizDate;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getQueryType() : int{
        return $this->queryType;
    }

    public function setQueryType(int $queryType){
        $this->queryType = $queryType;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPid() : string{
        return $this->pid;
    }

    public function setPid(string $pid){
        $this->pid = $pid;
    }

    public function getRelationId() : int{
        return $this->relationId;
    }

    public function setRelationId(int $relationId){
        $this->relationId = $relationId;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.cpa.activity.report";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->eventId)) {
            $requestParam["event_id"] = TopUtil::convertBasic($this->eventId);
        }

        if (!TopUtil::checkEmpty($this->bizDate)) {
            $requestParam["biz_date"] = TopUtil::convertBasic($this->bizDate);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->queryType)) {
            $requestParam["query_type"] = TopUtil::convertBasic($this->queryType);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pid)) {
            $requestParam["pid"] = TopUtil::convertBasic($this->pid);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

