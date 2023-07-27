<?php
namespace Luohonen\TaobaoSdk\Ability373\Request;
use Luohonen\TaobaoSdk\TopUtil;
use Luohonen\TaobaoSdk\Ability373\Domain\TaobaoJuItemsSearchTopItemQuery;

class TaobaoJuItemsSearchRequest {

    /**
        query
     **/
    private $paramTopItemQuery;


    public function getParamTopItemQuery() : TaobaoJuItemsSearchTopItemQuery{
        return $this->paramTopItemQuery;
    }

    public function setParamTopItemQuery(TaobaoJuItemsSearchTopItemQuery $paramTopItemQuery){
        $this->paramTopItemQuery = $paramTopItemQuery;
    }


    public function getApiName() : string {
        return "taobao.ju.items.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramTopItemQuery)) {
            $requestParam["param_top_item_query"] = TopUtil::convertStruct($this->paramTopItemQuery);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

