<?php namespace Paralenz\CatalogModule\Category\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class CategoryTableBuilder extends TableBuilder {

	/**
	 * The table views.
	 *
	 * @var array|string
	 */
	protected $views = [];

	/**
	 * The table filters.
	 *
	 * @var array|string
	 */
	protected $filters = [
		'name',
		'search' => [
			'fields' => [
				'name',
			],
		],
	];

	/**
	 * The table columns.
	 *
	 * @var array|string
	 */
	protected $columns = [
		'name',
		'slug',
		'product_count',
		'it'
	];

	/**
	 * The table buttons.
	 *
	 * @var array|string
	 */
	protected $buttons = [
			'edit'
	];

	/**
	 * The table actions.
	 *
	 * @var array|string
	 */
	protected $actions = [
			'delete'
	];

	/**
	 * The table options.
	 *
	 * @var array
	 */
	protected $options = [
		'sortable' => true
	];

	/**
	 * The table assets.
	 *
	 * @var array
	 */
	protected $assets = [];

}
