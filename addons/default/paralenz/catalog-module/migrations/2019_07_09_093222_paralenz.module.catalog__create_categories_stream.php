<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class ParalenzModuleCatalogCreateCategoriesStream extends Migration {

	/**
	 * The stream definition.
	 *
	 * @var array
	 */
	protected $stream = [
		'slug'         => 'categories',
		'title_column' => 'name',
		'translatable' => true,
		'versionable'  => false,
		'trashable'    => false,
		'searchable'   => false,
		'sortable'     => true,
	];

	/**
	 * The stream assignments.
	 *
	 * @var array
	 */
	protected $assignments = [
		'name' => [
			'translatable' => true,
			'required' => true,
		],
		'slug' => [
			'unique' => true,
			'required' => true,
		],
	];

}
