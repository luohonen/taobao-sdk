<?php
namespace Luohonen\TaobaoSdk\Ability425\Domain;

class TaobaoTbkScPublisherInfoGetData {

    /**
        共享字段 - 总记录数
     **/
    public $total_count;

    /**
        共享字段 - 渠道或会员列表
     **/
    public $inviter_list;

    /**
        渠道专属pidList
     **/
    public $root_pid_channel_list;


    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getInviterList() : array{
        return $this->inviter_list;
    }

    public function setInviterList(array $inviterList){
        $this->inviter_list = $inviterList;
    }

    public function getRootPidChannelList() : array{
        return $this->root_pid_channel_list;
    }

    public function setRootPidChannelList(array $rootPidChannelList){
        $this->root_pid_channel_list = $rootPidChannelList;
    }


}

