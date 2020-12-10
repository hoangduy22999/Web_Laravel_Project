<?php


namespace App\Repositories\Product;


interface AdminProductInterface
{
    function getAll();

    function create(array $data);
}
