<?php

namespace Colaborador\UseCase;

use Colaborador\Enttiy\Colaborador;
use Colaborador\Adapter\RepositoryInterface;


interface UseCaseInterface
{
    public function __constuct(RepositoryInterface $repository);

    public function search(string  $query);

    public function findAll();

    public function store(Colaborador $colaborador): int;

    public function delete(int $id) : bool;
}