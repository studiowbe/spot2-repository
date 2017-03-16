<?php


namespace Studiow\Spot\Repository;


use Spot\Locator;
use Spot\MapperInterface;

abstract class AbstractRepository implements RepositoryInterface
{
    /**
     * @var MapperInterface
     */
    protected $mapper;

    /**
     * @var TransformerInterface
     */
    protected $transformer;

    public function __construct(Locator $locator, string $entityName, TransformerInterface $transformer)
    {
        $this->mapper = new Mapper(
            $locator, $entityName, $transformer
        );

        $this->transformer = $transformer;
    }

    public function getMapper(): MapperInterface
    {
        return $this->mapper;
    }

    public function getTransformer(): TransformerInterface
    {
        return $this->transformer;
    }

}