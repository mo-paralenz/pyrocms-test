<?php

namespace Paralenz\CatalogModule\Product;

use Paralenz\CatalogModule\Product\Contract\ProductInterface;
use Anomaly\Streams\Platform\Model\Catalog\CatalogProductsEntryModel;


use Paralenz\CatalogModule\Category\CategoryModel;

class ProductModel extends CatalogProductsEntryModel implements ProductInterface {


	// public function categories() {
	// 	return $this->belongsToMany(CategoryModel::class, 'catalog_products_categories', 'category_id', 'product_id');
	// }
}
