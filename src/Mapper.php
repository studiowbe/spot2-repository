<?php


namespace Studiow\Spot\Repository;

use Spot\Locator;
use Spot\Mapper as SpotMapper;

class Mapper extends SpotMapper
{
    private $transformer;

    public function __construct(Locator $locator, $entityName, TransformerInterface $transformer = null)
    {
        parent::__construct($locator, $entityName);
        $this->_queryClass = Query::class;
        $this->transformer = $transformer;
    }

    public function queryBuilder()
    {
        return new $this->_queryClass($this, $this->transformer);
    }
}