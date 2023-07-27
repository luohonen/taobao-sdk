<?php
namespace Luohonen\TaobaoSdk\Defaultability;

use Luohonen\TaobaoSdk\TopApiClient;
use Luohonen\TaobaoSdk\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Luohonen\TaobaoSdk\Defaultability\Request\TaobaoTbkDgTpwdRiskReportRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-推广者-淘口令预警及拦截查询
    **/
    public function taobaoTbkDgTpwdRiskReport(TaobaoTbkDgTpwdRiskReportRequest $request) {
        return $this->client->execute("taobao.tbk.dg.tpwd.risk.report", $request->toMap(), $request->toFileParamMap());
    }
}