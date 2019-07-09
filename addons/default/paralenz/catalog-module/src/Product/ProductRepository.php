<?php

namespace Paralenz\CatalogModule\Product;

use Paralenz\CatalogModule\Product\Contract\ProductRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ProductRepository extends EntryRepository implements ProductRepositoryInterface {

	/**
	 * The entry model.
	 *
	 * @var ProductModel
	 */
	protected $model;

	/**
	 * Create a new ProductRepository instance.
	 *
	 * @param ProductModel $model
	 */
	public function __construct(ProductModel $model) {
		$this->model = $model;
	}

	public function findBySlug($slug) {
		return $this->model->where('slug', $slug)->first();
	}
}
