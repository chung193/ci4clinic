<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('frontend\Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// auth
$routes->group('auth', ['filter' => 'noauth'], function ($routes) {
    $routes->get('login', 'auth/Login::index', ['as' => 'login']);
    $routes->post('auth', 'auth/Login::auth');
    $routes->get('register', 'auth/Register::index');
    $routes->post('register/save', 'auth/Register::save');
    $routes->get('forgot', 'auth/Forgot::index');
    $routes->post('sendresetlink', 'auth/Forgot::sendresetlink');
    $routes->get('redirect/(:num)/(:any)', 'auth\Forgot::loadresetpage/$1/$2'); // 1st param is id, 2nd is token
    $routes->post('resetpassword', 'auth/Forgot::updatepassword');
});

//logout dont have any filter
$routes->get('auth/logout', 'auth/Login::logout');

// backend
$routes->group('manage', ['filter' => 'auth'], function ($routes) {
    // dashboard
    $routes->get('dashboard', 'manage/Dashboard::index');


    $routes->get('crawl/post', 'manage/Crawl::post');
    $routes->post('crawl/post', 'manage/Crawl::post');

    // location
    $routes->get('location', 'manage\Location::index');

    // pagecat
    $routes->get('pagecat', 'manage\PageCat::index');

    // customer
    $routes->get('customer', 'manage\Customer::index');

    // banner
     $routes->get('banner', 'manage\Banner::index');

    // category
    $routes->get('category', 'manage\Category::index');

    // info
    $routes->get('info', 'manage\Info::index');

    // ui
    $routes->get('ui', 'manage\Ui::index');

    //-slider
    $routes->get('slider', 'manage\Slider::index');


    // post
    $routes->get('post', 'manage\Post::index');
    $routes->get('post/edit/(:num)', 'manage\Post::edit/$1');
    $routes->get('post/add', 'manage\Post::add');
    $routes->post('post/save', 'manage\Post::save');
    $routes->post('post/update', 'manage\Post::update');
    $routes->get('post/delete/(:num)', 'manage\Post::delete/$1');
    $routes->get('post/restore/(:num)', 'manage\Post::restore/$1');
    $routes->get('post/delete-from-trash/(:num)', 'manage\Post::delete_from_trash/$1');
    
    // page
    $routes->get('page', 'manage\Page::index');

    // profile
    $routes->get('profile', 'manage\Profile::index');
    $routes->post('profile/update', 'manage\Profile::update');
});

$routes->group('manage', ['filter' => 'role'], function ($routes) {

    // location
    $routes->add('pagecat/edit/(:num)', 'manage\PageCat::edit/$1');
    $routes->get('pagecat/add', 'manage\PageCat::add');
    $routes->post('pagecat/save', 'manage\PageCat::save');
    $routes->post('pagecat/update', 'manage\PageCat::update');
    $routes->get('pagecat/delete/(:num)', 'manage\PageCat::delete/$1');

    // location
    $routes->add('location/edit/(:num)', 'manage\Location::edit/$1');
    $routes->get('location/add', 'manage\Location::add');
    $routes->post('location/save', 'manage\Location::save');
    $routes->post('location/update', 'manage\Location::update');
    $routes->get('location/delete/(:num)', 'manage\Location::delete/$1');

     // banner
     $routes->add('banner/edit/(:num)', 'manage\Banner::edit/$1');
     $routes->get('banner/add', 'manage\Banner::add');
     $routes->post('banner/save', 'manage\Banner::save');
     $routes->post('banner/update', 'manage\Banner::update');
     $routes->get('banner/delete/(:num)', 'manage\Banner::delete/$1');

    


    // category
    $routes->add('category/edit/(:num)', 'manage\Category::edit/$1');
    $routes->get('category/add', 'manage\Category::add');
    $routes->post('category/save', 'manage\Category::save');
    $routes->post('category/update', 'manage\Category::update');
    $routes->get('category/delete/(:num)', 'manage\Category::delete/$1');

    // 
    $routes->add('info/edit/(:num)', 'manage\Info::edit/$1');
    $routes->get('info/add', 'manage\Info::add');
    $routes->post('info/save', 'manage\Info::save');
    $routes->post('info/update', 'manage\Info::update');
    $routes->get('info/delete/(:num)', 'manage\Info::delete/$1');

    // shop_slider
    $routes->add('slider/edit/(:num)', 'manage\Slider::edit/$1');
    $routes->get('slider/add', 'manage\Slider::add');
    $routes->post('slider/save', 'manage\Slider::save');
    $routes->post('slider/update', 'manage\Slider::update');
    $routes->get('slider/delete/(:num)', 'manage\Slider::delete/$1');

    // shop_ui
    $routes->add('ui/edit/(:num)', 'manage\Ui::edit/$1');
    $routes->get('ui/add', 'manage\Ui::add');
    $routes->post('ui/save', 'manage\Ui::save');
    $routes->post('ui/update', 'manage\Ui::update');
    $routes->get('ui/delete/(:num)', 'manage\Ui::delete/$1');

    // page
    $routes->get('page/add', 'manage\Page::add');
    $routes->get('page/edit/(:num)', 'manage\Page::edit/$1');
    $routes->post('page/save', 'manage\Page::save');
    $routes->post('page/update', 'manage\Page::update');
    $routes->get('page/delete/(:num)', 'manage\Page::delete/$1');

    // option
    $routes->get('options', 'manage/Site::index');
    $routes->post('options/save', 'manage/Site::save');

    // user
    $routes->get('user', 'manage\User::index');
    $routes->get('user/add', 'manage\User::add');
    $routes->get('user/edit/(:num)', 'manage\User::edit/$1');
    $routes->post('user/save', 'manage\User::save');
    $routes->post('user/update', 'manage\User::update');
    $routes->get('user/delete/(:num)', 'manage\User::delete/$1');
});

// frontend
$routes->get('/', 'frontend/Home::index');
// Bài viết và trang

// Đăng ký nhận email
$routes->post('/sub', 'frontend/Sub::save');

// Đăng ký lịch khám
$routes->post('/book', 'frontend/Book::save');

// chuyen muc
$routes->get('/danh-muc/(:any)', 'frontend\Category::index/$1');
// bai viet
$routes->get('/bai-viet/(:any)', 'frontend\Post::index/$1');

// khuyến mại
$routes->get('/khuyen-mai/', 'frontend\Discount::index');
$routes->get('/khuyen-mai/(:segment)', 'frontend\Discount::index/$1');

// tìm kiếm
$routes->get('/search/', 'frontend\Home::search');

// trang
$routes->get('/(:segment)', 'frontend\Page::index/$1');

$routes->get('/livesearch/(:any)', 'frontend\Home::livesearch/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
