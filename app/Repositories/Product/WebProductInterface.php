<?php


namespace App\Repositories\Product;


interface WebProductInterface
{
    function getAllWithPaginate();

    function getProductById($id);
}
