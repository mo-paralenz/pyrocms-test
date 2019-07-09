<?php

namespace Paralenz\CatalogModule\Http\Controller;

use Paralenz\CatalogModule\Product\Contract\ProductRepositoryInterface;


use Anomaly\Streams\Platform\Http\Controller\PublicController;

class ProductsController extends PublicController {

	public function index() {


		$this->template->set('meta_title', 'Shop');

		return $this->view->make('paralenz.module.catalog::products/index');
	}

	public function view(ProductRepositoryInterface $products, $slug) {

		if(!$product = $products->findBySlug($slug)) {
			abort(404);
		}

		$this->template->set('meta_title', $product->name);

		$view_data = compact(
			'product'
		);

		return $this->view->make('paralenz.module.catalog::products/view', $view_data);
	}
}