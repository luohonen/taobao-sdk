<?php
namespace Luohonen\TaobaoSdk\Ability3261\Domain;

class TaobaoTbkDgCpaActivityDetailPageResult {

    /**
        数据结果
     **/
    public $results;

    /**
        上一页页码
     **/
    public $pre_page;

    /**
        下一页页码
     **/
    public $next_page;

    /**
        当前页码
     **/
    public $page_no;

    /**
        总共页数
     **/
    public $total_pages;

    /**
        每页条数
     **/
    public $page_size;

    /**
        是否有下一页
     **/
    public $has_next;

    /**
        总条数
     **/
    public $total_count;

    /**
        是否有下一页
     **/
    public $has_pre;

    /**
        数据批次号(时间戳)
     **/
    public $runtime;


    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }

    public function getPrePage() : int{
        return $this->pre_page;
    }

    public function setPrePage(int $prePage){
        $this->pre_page = $prePage;
    }

    public function getNextPage() : int{
        return $this->next_page;
    }

    public function setNextPage(int $nextPage){
        $this->next_page = $nextPage;
    }

    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getTotalPages() : int{
        return $this->total_pages;
    }

    public function setTotalPages(int $totalPages){
        $this->total_pages = $totalPages;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getHasNext() : bool{
        return $this->has_next;
    }

    public function setHasNext(bool $hasNext){
        $this->has_next = $hasNext;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getHasPre() : bool{
        return $this->has_pre;
    }

    public function setHasPre(bool $hasPre){
        $this->has_pre = $hasPre;
    }

    public function getRuntime() : string{
        return $this->runtime;
    }

    public function setRuntime(string $runtime){
        $this->runtime = $runtime;
    }


}

