<?php namespace App\Http\Controllers;

class HomeController extends BaseController {

	protected $layout = 'page';

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	$router->get('/', 'HomeController@index');
	|
	*/

	/**
	 * @Get("/", as="home")
	 */
	public function index()
	{
		$content = '<h1>Hello, world!</h1>';
		$content .= '<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>';
		$content .= '<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>';

		return $this->setPageContent($content);
	}

}
