<?php
namespace CjsProtocol;

//sql分页标准
class PageStandard
{
    protected $page = 1; //页码
    protected $page_size = 10; //每页记录数

    //非单例
    public static function getInstance() {
        return new static();
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    public function getPageSize()
    {
        return $this->page_size;
    }

    public function setPageSize($page_size)
    {
        $this->page_size = $page_size;
        return $this;
    }

    public function getLimit() {
        $page = $this->page;
        if($page<1) {
            $page = 1;
        }
        $pageSize = $this->page_size;
        if($pageSize<=0) {
            $pageSize = 10;
        }
        $offset = ($page-1)*$pageSize;
        return [$offset, $pageSize];
    }

    public function getOffset() {
        $page = $this->page;
        if($page<1) {
            $page = 1;
        }
        $pageSize = $this->page_size;
        if($pageSize<=0) {
            $pageSize = 10;
        }
        $offset = ($page-1)*$pageSize;
        return $offset;
    }

}