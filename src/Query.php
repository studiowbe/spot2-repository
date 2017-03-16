<?php


namespace Studiow\Spot\Repository;

use Spot\Mapper;
use Spot\Query as SpotQuery;

class Query extends SpotQuery
{

    private $transformer;

    public function __construct(Mapper $mapper, TransformerInterface $transformer)
    {
        parent::__construct($mapper);
        $this->transformer = $transformer;
    }

    public function execute()
    {
        return new QueryCollector(parent::execute(), $this->transformer);
    }
}