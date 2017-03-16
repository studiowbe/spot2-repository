<?php


namespace Studiow\Spot\Repository;


use Spot\MapperInterface;

interface RepositoryInterface
{
    public function getMapper():MapperInterface;

    public function getTransformer():TransformerInterface;
}