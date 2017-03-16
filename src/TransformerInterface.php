<?php


namespace Studiow\Spot\Repository;


use Spot\EntityInterface;

interface TransformerInterface
{
    public function itemToEntity($input);

    public function itemFromEntity(EntityInterface $entity);
}