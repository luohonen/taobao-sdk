<?php
namespace Luohonen\TaobaoSdk\Ability3261\Request;
use Luohonen\TaobaoSdk\TopUtil;

class TaobaoTbkDgCpaActivityDetailRequest {

    /**
        明细类型，1：预估明细，2：结算明细
     **/
    private $queryType;

    /**
        每页条数
     **/
    private $pageSize;

    /**
        页码
     **/
    private $pageNo;

    /**
        CPA活动ID
     **/
    private $eventId;

    /**
        CPA活动奖励的统计口径，相关说明见文档：https://www.yuque.com/docs/share/7ecf8cf1-7f99-4633-a2ed-f9b6f8116af5?#
     **/
    private $indicatorAlias;

    /**
        下一页开始查询的记录主键id
     **/
    private $startId;

    /**
        指定数据批次号(时间戳)
     **/
    private $runtime;


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

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getEventId() : int{
        return $this->eventId;
    }

    public function setEventId(int $eventId){
        $this->eventId = $eventId;
    }

    public function getIndicatorAlias() : string{
        return $this->indicatorAlias;
    }

    public function setIndicatorAlias(string $indicatorAlias){
        $this->indicatorAlias = $indicatorAlias;
    }

    public function getStartId() : int{
        return $this->startId;
    }

    public function setStartId(int $startId){
        $this->startId = $startId;
    }

    public function getRuntime() : string{
        return $this->runtime;
    }

    public function setRuntime(string $runtime){
        $this->runtime = $runtime;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.cpa.activity.detail";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->queryType)) {
            $requestParam["query_type"] = TopUtil::convertBasic($this->queryType);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->eventId)) {
            $requestParam["event_id"] = TopUtil::convertBasic($this->eventId);
        }

        if (!TopUtil::checkEmpty($this->indicatorAlias)) {
            $requestParam["indicator_alias"] = TopUtil::convertBasic($this->indicatorAlias);
        }

        if (!TopUtil::checkEmpty($this->startId)) {
            $requestParam["start_id"] = TopUtil::convertBasic($this->startId);
        }

        if (!TopUtil::checkEmpty($this->runtime)) {
            $requestParam["runtime"] = TopUtil::convertBasic($this->runtime);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

