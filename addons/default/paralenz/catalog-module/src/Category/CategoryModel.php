<?php namespace Paralenz\CatalogModule\Category;

use Paralenz\CatalogModule\Category\Contract\CategoryInterface;
use Anomaly\Streams\Platform\Model\Catalog\CatalogCategoriesEntryModel;

use Paralenz\CatalogModule\Product\ProductModel;

class CategoryModel extends CatalogCategoriesEntryModel implements CategoryInterface {

	public function products() {
		return $this->belongsToMany(ProductModel::class);
	}


	public function getProductCountAttribute() {
		return $this->products()->count();
	}
}
