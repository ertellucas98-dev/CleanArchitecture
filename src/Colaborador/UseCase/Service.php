<?php

namespace Colaborador\UseCase;

use Colaborador\Entity\Colaborador;
use Colaborador\Adapter\RepositoryInterface;

class Service implements UseCaseInterface
{
    private $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    // search element
    public function search(string $query)
    {
        return $this->repository->search($query);
    }

    //search all elements
    public function findAll()
    {
        return $this->repository->findAll();
    }

    // create new element
    public function store(Colaborador $colaborador): int
    {
        return $this->repository->store($colaborador);
    }

    // delete element by id
    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }
}