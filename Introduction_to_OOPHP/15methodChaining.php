<?php


class SearchRequest
{
    protected $query;
    protected $limit;

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    public function setLimit($limit = 100)
    {
        $this->limit = $limit;

        return $this;
    }

    public function getQuery($query)
    {
        return $this->query;
    }

    public function getLimit($limit = 100)
    {
        return $this->limit;
    }
}

class SearchService
{
    public function search(SearchRequest $request)
    {
        var_dump($request);
    }

}

$service = new SearchService();
$request = new SearchRequest;

$request->setQuery("oop");
$request->setLimit(50);

$service->search($request);

$request
    ->setQuery("Emanuel")
    ->setLimit("40");

$service->search($request);
