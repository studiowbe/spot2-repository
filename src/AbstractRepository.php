<?php


namespace Studiow\Spot\Repository;


use Spot\MapperInterface;

class AbstractRepository implements RepositoryInterface
{
    /**
     * @var MapperInterface
     */
    protected $mapper;

    /**
     * @var TransformerInterface
     */
    protected $convertor;

    public function __construct(MapperInterface $mapper, TransformerInterface $convertor)
    {
        $this->mapper = $mapper;
        $this->convertor = $convertor;
    }

    public function getMapper(): MapperInterface
    {
        return $this->mapper;
    }

    public function getConvertor(): TransformerInterface
    {
        return $this->convertor;
    }

}