<?php
namespace Luohonen\TaobaoSdk\Ability3261;

use Luohonen\TaobaoSdk\TopApiClient;
use Luohonen\TaobaoSdk\Ability3261\Request\TaobaoTbkDgCpaActivityDetailRequest;
use Luohonen\TaobaoSdk\Ability3261\Request\TaobaoTbkDgCpaActivityReportRequest;

class Ability3261 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-CPA活动执行明细
    **/
    public function taobaoTbkDgCpaActivityDetail(TaobaoTbkDgCpaActivityDetailRequest $request) {
        return $this->client->execute("taobao.tbk.dg.cpa.activity.detail", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-任务奖励效果报表
    **/
    public function taobaoTbkDgCpaActivityReport(TaobaoTbkDgCpaActivityReportRequest $request) {
        return $this->client->execute("taobao.tbk.dg.cpa.activity.report", $request->toMap(), $request->toFileParamMap());
    }
}