<?php
namespace Luohonen\TaobaoSdk\Defaultability\Domain;

class TaobaoTbkDgTpwdRiskReportDataMap {

    /**
        当入参不传pid的时候返回，表示账号关联的pid
     **/
    public $pid;

    /**
        当入参传入pid的时候返回，表示pid关联的relationId
     **/
    public $rid;

    /**
        0表示预警，1表示拦截，如果名单中同一个淘客同时有拦截和预警信息，以拦截为准
     **/
    public $status;


    public function getPid() : string{
        return $this->pid;
    }

    public function setPid(string $pid){
        $this->pid = $pid;
    }

    public function getRid() : string{
        return $this->rid;
    }

    public function setRid(string $rid){
        $this->rid = $rid;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }


}

