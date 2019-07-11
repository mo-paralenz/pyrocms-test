<?php

namespace Paralenz\CatalogModule\Http\Controller;

use Paralenz\CatalogModule\Product\Contract\ProductRepositoryInterface;
use Paralenz\CatalogModule\Category\Contract\CategoryRepositoryInterface;


use Anomaly\Streams\Platform\Http\Controller\PublicController;

class TestController extends PublicController {

	public function display() {

		$this->template->set('meta_title', 'TEST');

		$cat = app(CategoryRepositoryInterface::class);
		$prod = app(ProductRepositoryInterface::class);


		$data = [
			'cat' =>  $cat->find(1)->products()->count(),
			// 'prod' => $prod->find(1)->categories,
		];

		$view_data = compact(
			'data'
		);

		return $this->view->make('paralenz.module.catalog::test/view', $view_data);
	}
}