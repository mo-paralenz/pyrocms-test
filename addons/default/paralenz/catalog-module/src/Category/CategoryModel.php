<?php namespace Paralenz\CatalogModule\Category;

use Paralenz\CatalogModule\Category\Contract\CategoryInterface;
use Anomaly\Streams\Platform\Model\Catalog\CatalogCategoriesEntryModel;

use Paralenz\CatalogModule\Product\ProductModel;

class CategoryModel extends CatalogCategoriesEntryModel implements CategoryInterface {

	protected $appends = [
		// 'it',
		// 'product_count'
	];

	public function products() {
		return $this->belongsToMany(ProductModel::class, 'catalog_products_categories', 'entry_id', 'related_id');
		// return $this->getFieldType('products')->getRelation();
	}


	public function getProductCountAttribute() {
		return $this->products()->count();
	}

	public function getItAttribute() {
		return 'iogt';
	}
}
