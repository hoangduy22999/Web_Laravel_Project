<?php


namespace Modules\Web\Repositories\Product;


use App\Entities\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Product::class;
    }

    public function getAll()
    {
        return $this->_model->with(['category'])->paginate(PER_PAGE);
    }
}
