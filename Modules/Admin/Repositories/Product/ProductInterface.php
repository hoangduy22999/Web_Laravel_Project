<?php


namespace Modules\Admin\Repositories\Product;


interface ProductInterface
{
    function getAll();

    function create(array $data);
}
