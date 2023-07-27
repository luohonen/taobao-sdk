<?php
namespace Luohonen\TaobaoSdk\Defaultability\Request;
use Luohonen\TaobaoSdk\TopUtil;

class TaobaoTbkDgTpwdRiskReportRequest {

    /**
        如有pid，则查询pid下的relationid名单；如没有pid，则查询appkey关联userid下的pid名单
     **/
    private $pid;

    /**
        分页参数
     **/
    private $offset;

    /**
        分页参数，一次最多不能超过1000
     **/
    private $limit;


    public function getPid() : string{
        return $this->pid;
    }

    public function setPid(string $pid){
        $this->pid = $pid;
    }

    public function getOffset() : int{
        return $this->offset;
    }

    public function setOffset(int $offset){
        $this->offset = $offset;
    }

    public function getLimit() : int{
        return $this->limit;
    }

    public function setLimit(int $limit){
        $this->limit = $limit;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.tpwd.risk.report";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pid)) {
            $requestParam["pid"] = TopUtil::convertBasic($this->pid);
        }

        if (!TopUtil::checkEmpty($this->offset)) {
            $requestParam["offset"] = TopUtil::convertBasic($this->offset);
        }

        if (!TopUtil::checkEmpty($this->limit)) {
            $requestParam["limit"] = TopUtil::convertBasic($this->limit);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

