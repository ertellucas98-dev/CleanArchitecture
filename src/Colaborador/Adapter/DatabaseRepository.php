<?php


namespace Colaborador\Adapter;  

use Colaborador\Entity\Colaborador;


class DatabaseRepository implements RepositoryInterface

{
    public function find(int $id) : Colaborador
    {
        // Implement the logic to find a Colaborador by ID in the database
    }

    public function search(string $query)
    {
        // implementação
    }

    public function findAll()
    {
        //implementação
    }

    public function store(Colaborador $colaborador) : int
    {
         // implmentação
    }

    public function delete(int $id) : bool
    {
        // implementação
    }

}