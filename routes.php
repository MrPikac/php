<?php

$router->register([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about.culture.php',
    'contact' => 'controllers/contact.php',
    'api/tasks' => 'controllers/api.tasks.php',
    'contact-submit' => 'controllers/contact.submit.php'

]);

$routes = [
    'GET' => ['' => 'controllers/index.php',
        'about' => 'controllers/about.php',
        'about/culture' => 'controllers/about.culture.php',
        'contact' => 'controllers/contact.php',
        'api/tasks' => 'controllers/api.tasks.php',
    ],
    'POST' => [
        'contact-submit' => 'controllers/contact.submit.php'
    ]
];

$router->get('login', 'AuthController@login_form');
$router->post('login', 'AuthController@login');
$router->get('register', 'AuthController@register_form');
$router->post('register', 'AuthController@register');
$router->get('logout', 'AuthController@logout');

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

//POSTS
$router->get('posts', 'PostsController@index');
$router->get('posts/create', 'PostsController@create');
$router->post('posts', 'PostsController@store');
$router->get('posts/show', 'PostsController@show');
$router->get('posts/edit', 'PostsController@edit');
$router->post('posts/edit', 'PostsController@update');
$router->get('posts/destroy', 'PostsController@destroy');


//API POSTS
$router->get('api/posts', 'ApiPostsController@index');
$router->post('api/posts', 'ApiPostsController@store');
$router->get('api/posts/show', 'ApiPostsController@show');
$router->post('api/posts/edit', 'ApiPostsController@update');
$router->get('api/posts/destroy', 'ApiPostsController@destroy');


//USERS
$router->get('users', 'UsersController@index');
$router->get('users/create', 'UsersController@create');
$router->post('users', 'UsersController@store');
$router->get('users/show', 'UsersController@show');
$router->get('users/edit', 'UsersController@edit');
$router->post('users/edit', 'UsersController@update');
$router->get('users/destroy', 'UsersController@destroy');



//$router->get('api/tasks', 'controllers/api.tasks.php');
$router->post('contact-submit', 'PagesController@contactFormSubmit');