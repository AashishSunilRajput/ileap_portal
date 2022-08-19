<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');

$routes->get('demo1', 'Demo::demo1');
$routes->get('demo2', 'Demo::demo2');
$routes->group("Admin", ["filter" => "adminFilter"] , function($routes){
	$routes->get("listall", "Admin::index");
	$routes->post("insert", "Admin::insert");
     ///Admin Roles Route///////////
	$routes->get("listallroles", "Admin::listallroles");
	$routes->post("createroles", "Admin::createroles");	
	$routes->get('deleterole/(:num)', 'Admin::deleterole/$1');
	$routes->post('updaterole/(:num)', 'Admin::updaterole/$1');
      ///Admin Band Route///////////
	$routes->get("listallband", "Admin::listallband");
	$routes->post("createband", "Admin::createband");	
	$routes->get('deleteband/(:num)', 'Admin::deleteband/$1');
	$routes->post('updateband/(:num)', 'Admin::updateband/$1');
	 ///Admin Module Route///////////
	 $routes->get("listallmodule", "Admin::listallmodule");
	 $routes->post("createmodule", "Admin::createmodule");	
	 $routes->get('deletemodule/(:num)', 'Admin::deletemodule/$1');
	 $routes->post('updatemodule/(:num)', 'Admin::updatemodule/$1');

	  ///Admin Sessions Route///////////
	  $routes->get("listallsession", "Admin::listallsession");
	  $routes->post("createsession", "Admin::createsession");	
	  $routes->get('deletesession/(:num)', 'Admin::deletesession/$1');
	  $routes->post('updatesession/(:num)', 'Admin::updatesession/$1');

});

$routes->group("Members", ["filter" => "basicauthFilter"] , function($routes){

	$routes->get("listall", "Members::index");
	$routes->post("create_new", "Members::create_new");
});


		
	

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
