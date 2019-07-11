<?php namespace Paralenz\CatalogModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Paralenz\CatalogModule\Product\Contract\ProductRepositoryInterface;
use Paralenz\CatalogModule\Product\ProductRepository;
use Anomaly\Streams\Platform\Model\Catalog\CatalogProductsEntryModel;
use Paralenz\CatalogModule\Product\ProductModel;
use Paralenz\CatalogModule\Category\Contract\CategoryRepositoryInterface;
use Paralenz\CatalogModule\Category\CategoryRepository;
use Anomaly\Streams\Platform\Model\Catalog\CatalogCategoriesEntryModel;
use Paralenz\CatalogModule\Category\CategoryModel;
use Illuminate\Routing\Router;

class CatalogModuleServiceProvider extends AddonServiceProvider {

	/**
	 * Additional addon plugins.
	 *
	 * @type array|null
	 */
	protected $plugins = [];

	/**
	 * The addon Artisan commands.
	 *
	 * @type array|null
	 */
	protected $commands = [];

	/**
	 * The addon's scheduled commands.
	 *
	 * @type array|null
	 */
	protected $schedules = [];

	/**
	 * The addon API routes.
	 *
	 * @type array|null
	 */
	protected $api = [];

	/**
	 * The addon routes.
	 *
	 * @type array|null
	 */
	protected $routes = [
		'test'  => 'Paralenz\CatalogModule\Http\Controller\TestController@display',



		'shop'                   => 'Paralenz\CatalogModule\Http\Controller\ProductsController@index',
		'shop/product/{slug}'    => [
			'as'   => 'paralenz.module.catalog::products.view',
			'uses' => 'Paralenz\CatalogModule\Http\Controller\ProductsController@view',
		],
		'admin/catalog'           => 'Paralenz\CatalogModule\Http\Controller\Admin\ProductsController@index',
		'admin/catalog/create'    => 'Paralenz\CatalogModule\Http\Controller\Admin\ProductsController@create',
		'admin/catalog/edit/{id}' => 'Paralenz\CatalogModule\Http\Controller\Admin\ProductsController@edit',


		'admin/catalog/categories'         => 'Paralenz\CatalogModule\Http\Controller\Admin\CategoriesController@index',
		'admin/catalog/categories/create'    => 'Paralenz\CatalogModule\Http\Controller\Admin\CategoriesController@create',
		'admin/catalog/categories/edit/{id}' => 'Paralenz\CatalogModule\Http\Controller\Admin\CategoriesController@edit',
	];

	/**
	 * The addon middleware.
	 *
	 * @type array|null
	 */
	protected $middleware = [
			//Paralenz\CatalogModule\Http\Middleware\ExampleMiddleware::class
	];

	/**
	 * Addon group middleware.
	 *
	 * @var array
	 */
	protected $groupMiddleware = [
			//'web' => [
			//    Paralenz\CatalogModule\Http\Middleware\ExampleMiddleware::class,
			//],
	];

	/**
	 * Addon route middleware.
	 *
	 * @type array|null
	 */
	protected $routeMiddleware = [];

	/**
	 * The addon event listeners.
	 *
	 * @type array|null
	 */
	protected $listeners = [
			//Paralenz\CatalogModule\Event\ExampleEvent::class => [
			//    Paralenz\CatalogModule\Listener\ExampleListener::class,
			//],
	];

	/**
	 * The addon alias bindings.
	 *
	 * @type array|null
	 */
	protected $aliases = [
			//'Example' => Paralenz\CatalogModule\Example::class
	];

	/**
	 * The addon class bindings.
	 *
	 * @type array|null
	 */
	protected $bindings = [
			CatalogProductsEntryModel::class => ProductModel::class,
			CatalogCategoriesEntryModel::class => CategoryModel::class,
	];

	/**
	 * The addon singleton bindings.
	 *
	 * @type array|null
	 */
	protected $singletons = [
			ProductRepositoryInterface::class => ProductRepository::class,
			CategoryRepositoryInterface::class => CategoryRepository::class,
	];

	/**
	 * Additional service providers.
	 *
	 * @type array|null
	 */
	protected $providers = [
			//\ExamplePackage\Provider\ExampleProvider::class
	];

	/**
	 * The addon view overrides.
	 *
	 * @type array|null
	 */
	protected $overrides = [
			//'streams::errors/404' => 'module::errors/404',
			//'streams::errors/500' => 'module::errors/500',
	];

	/**
	 * The addon mobile-only view overrides.
	 *
	 * @type array|null
	 */
	protected $mobile = [
			//'streams::errors/404' => 'module::mobile/errors/404',
			//'streams::errors/500' => 'module::mobile/errors/500',
	];

	/**
	 * Register the addon.
	 */
	public function register()
	{
			// Run extra pre-boot registration logic here.
			// Use method injection or commands to bring in services.
	}

	/**
	 * Boot the addon.
	 */
	public function boot()
	{
			// Run extra post-boot registration logic here.
			// Use method injection or commands to bring in services.
	}

	/**
	 * Map additional addon routes.
	 *
	 * @param Router $router
	 */
	public function map(Router $router)
	{
			// Register dynamic routes here for example.
			// Use method injection or commands to bring in services.
	}

}
