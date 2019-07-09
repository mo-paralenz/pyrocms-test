<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

use Paralenz\CatalogModule\Category\CategoryModel;

class ParalenzModuleCatalogCreateProductsFields extends Migration {

	/**
	 * The addon fields.
	 *
	 * @var array
	 */
	protected $fields = [
		'name' => 'anomaly.field_type.text',
		'description' => 'anomaly.field_type.textarea',
		'sku' => 'anomaly.field_type.text',
		'enabled' => [
			'type' => 'anomaly.field_type.boolean',
			'config' => [
				'default_value' => true,
			],
		],
		'slug' => [
			'type' => 'anomaly.field_type.slug',
			'config' => [
				'slugify' => 'name',
				'type' => '_'
			],
		],

		// Relationships
		'categories' => [
			'type' => 'anomaly.field_type.multiple',
			'config' => [
				'title_name' => 'name',
				'related'    => CategoryModel::class,
			]
		]
	];

}
