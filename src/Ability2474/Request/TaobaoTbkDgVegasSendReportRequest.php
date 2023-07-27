<?php
namespace Luohonen\TaobaoSdk\Ability2474\Request;
use Luohonen\TaobaoSdk\TopUtil;

class TaobaoTbkDgVegasSendReportRequest {

    /**
        统计日期
     **/
    private $bizDate;

    /**
        渠道关系id
     **/
    private $relationId;

    /**
        已下线，后续不需要填写
     **/
    private $activityId;

    /**
        页码
     **/
    private $pageNo;

    /**
        每页大小
     **/
    private $pageSize;

    /**
        媒体推广pid
     **/
    private $pid;

    /**
        查询维度，不填写默认是pid维度
     **/
    private $rptDim;

    /**
        1:超级红包，2：日常采量福利购
     **/
    private $activityCategory;


    public function getBizDate() : string{
        return $this->bizDate;
    }

    public function setBizDate(string $bizDate){
        $this->bizDate = $bizDate;
    }

    public function getRelationId() : int{
        return $this->relationId;
    }

    public function setRelationId(int $relationId){
        $this->relationId = $relationId;
    }

    public function getActivityId() : int{
        return $this->activityId;
    }

    public function setActivityId(int $activityId){
        $this->activityId = $activityId;
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

    public function getPid() : string{
        return $this->pid;
    }

    public function setPid(string $pid){
        $this->pid = $pid;
    }

    public function getRptDim() : string{
        return $this->rptDim;
    }

    public function setRptDim(string $rptDim){
        $this->rptDim = $rptDim;
    }

    public function getActivityCategory() : int{
        return $this->activityCategory;
    }

    public function setActivityCategory(int $activityCategory){
        $this->activityCategory = $activityCategory;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.vegas.send.report";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bizDate)) {
            $requestParam["biz_date"] = TopUtil::convertBasic($this->bizDate);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->activityId)) {
            $requestParam["activity_id"] = TopUtil::convertBasic($this->activityId);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pid)) {
            $requestParam["pid"] = TopUtil::convertBasic($this->pid);
        }

        if (!TopUtil::checkEmpty($this->rptDim)) {
            $requestParam["rpt_dim"] = TopUtil::convertBasic($this->rptDim);
        }

        if (!TopUtil::checkEmpty($this->activityCategory)) {
            $requestParam["activity_category"] = TopUtil::convertBasic($this->activityCategory);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

