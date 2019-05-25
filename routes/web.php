<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('website');
});

$router->get('/index', function () use ($router) {
    return view('index');
});

$router->get('/admin', function () use ($router) {
    return view('admin');
});

$router->get('/account', function () use ($router) {
    return view('account');
});



$router->get('/intro/introduction', function () use ($router) {
    return view('intro/introduction');
});

$router->get('/intro/this-way', function () use ($router) {
    return view('intro/this-way');
});

$router->get('/intro/animatic01', function () use ($router) {
    return view('/intro/animatic01');
});

$router->get('/intro/animatic02', function () use ($router) {
    return view('/intro/animatic02');
});

$router->get('/intro/animatic03', function () use ($router) {
    return view('/intro/animatic03');
});

$router->get('/intro/animatic04', function () use ($router) {
    return view('/intro/animatic04');
});

$router->get('/intro/animatic05', function () use ($router) {
    return view('/intro/animatic05');
});

$router->get('/intro/animatic06', function () use ($router) {
    return view('/intro/animatic06');
});

$router->get('/intro/animatic07', function () use ($router) {
    return view('/intro/animatic07');
});

$router->get('/intro/animatic08', function () use ($router) {
    return view('/intro/animatic08');
});


$router->get('/intro/home-screen', function () use ($router) {
    return view('intro/home-screen');
});


$router->get('/maps/north', function () use ($router) {
    return view('maps/north');
});

$router->get('/maps/south', function () use ($router) {
    return view('maps/south');
});

$router->get('/maps/west', function () use ($router) {
    return view('maps/west');
});

$router->get('/maps/east', function () use ($router) {
    return view('maps/east');
});







$router->get('/artemis-and-the-animals/01', function () use ($router) {
    return view('artemis-and-the-animals/01');
});

$router->get('/artemis-and-the-animals/02', function () use ($router) {
    return view('artemis-and-the-animals/02');
});

$router->get('/artemis-and-the-animals/03', function () use ($router) {
    return view('artemis-and-the-animals/03');
});

$router->get('/artemis-and-the-animals/04', function () use ($router) {
    return view('artemis-and-the-animals/04');
});

$router->get('/artemis-and-the-animals/05', function () use ($router) {
    return view('artemis-and-the-animals/05');
});

$router->get('/artemis-and-the-animals/06', function () use ($router) {
    return view('artemis-and-the-animals/06');
});

$router->get('/artemis-and-the-animals/07', function () use ($router) {
    return view('artemis-and-the-animals/07');
});

$router->get('/artemis-and-the-animals/08', function () use ($router) {
    return view('artemis-and-the-animals/08');
});

$router->get('/artemis-and-the-animals/09', function () use ($router) {
    return view('artemis-and-the-animals/09');
});

$router->get('/artemis-and-the-animals/10', function () use ($router) {
    return view('artemis-and-the-animals/10');
});

$router->get('/artemis-and-the-animals/11', function () use ($router) {
    return view('artemis-and-the-animals/11');
});


$router->get('/my-family/01', function () use ($router) {
    return view('my-family/01');
});

$router->get('/my-family/02', function () use ($router) {
    return view('my-family/02');
});

$router->get('/my-family/03', function () use ($router) {
    return view('my-family/03');
});

$router->get('/my-family/04', function () use ($router) {
    return view('my-family/04');
});

$router->get('/my-family/05', function () use ($router) {
    return view('my-family/05');
});

$router->get('/my-family/06', function () use ($router) {
    return view('my-family/06');
});

$router->get('/my-family/07', function () use ($router) {
    return view('my-family/07');
});



$router->get('/message-in-a-bottle/01', function () use ($router) {
    return view('message-in-a-bottle/01');
});

$router->get('/message-in-a-bottle/02', function () use ($router) {
    return view('message-in-a-bottle/02');
});

$router->get('/message-in-a-bottle/03', function () use ($router) {
    return view('message-in-a-bottle/03');
});

$router->get('/message-in-a-bottle/04', function () use ($router) {
    return view('message-in-a-bottle/04');
});

$router->get('/message-in-a-bottle/05', function () use ($router) {
    return view('message-in-a-bottle/05');
});

$router->get('/message-in-a-bottle/06', function () use ($router) {
    return view('message-in-a-bottle/06');
});

$router->get('/message-in-a-bottle/07', function () use ($router) {
    return view('message-in-a-bottle/07');
});

$router->get('/message-in-a-bottle/08', function () use ($router) {
    return view('message-in-a-bottle/08');
});

$router->get('/message-in-a-bottle/09', function () use ($router) {
    return view('message-in-a-bottle/09');
});

$router->get('/message-in-a-bottle/10', function () use ($router) {
    return view('message-in-a-bottle/10');
});

$router->get('/message-in-a-bottle/11', function () use ($router) {
    return view('message-in-a-bottle/11');
});

$router->get('/message-in-a-bottle/12', function () use ($router) {
    return view('message-in-a-bottle/12');
});

$router->get('/message-in-a-bottle/13', function () use ($router) {
    return view('message-in-a-bottle/13');
});

$router->get('/message-in-a-bottle/14', function () use ($router) {
    return view('message-in-a-bottle/14');
});

$router->get('/message-in-a-bottle/15', function () use ($router) {
    return view('message-in-a-bottle/15');
});

$router->get('/message-in-a-bottle/16', function () use ($router) {
    return view('message-in-a-bottle/16');
});



$router->get('/a-trip-to-victorian-england/01', function () use ($router) {
    return view('a-trip-to-victorian-england/01');
});

$router->get('/a-trip-to-victorian-england/02', function () use ($router) {
    return view('a-trip-to-victorian-england/02');
});

$router->get('/a-trip-to-victorian-england/03', function () use ($router) {
    return view('a-trip-to-victorian-england/03');
});

$router->get('/a-trip-to-victorian-england/04', function () use ($router) {
    return view('a-trip-to-victorian-england/04');
});

$router->get('/a-trip-to-victorian-england/05', function () use ($router) {
    return view('a-trip-to-victorian-england/05');
});

$router->get('/a-trip-to-victorian-england/06', function () use ($router) {
    return view('a-trip-to-victorian-england/06');
});

$router->get('/a-trip-to-victorian-england/07', function () use ($router) {
    return view('a-trip-to-victorian-england/07');
});

$router->get('/a-trip-to-victorian-england/08', function () use ($router) {
    return view('a-trip-to-victorian-england/08');
});

$router->get('/a-trip-to-victorian-england/09', function () use ($router) {
    return view('a-trip-to-victorian-england/09');
});

$router->get('/a-trip-to-victorian-england/10', function () use ($router) {
    return view('a-trip-to-victorian-england/10');
});

$router->get('/a-trip-to-victorian-england/11', function () use ($router) {
    return view('a-trip-to-victorian-england/11');
});

$router->get('/a-trip-to-victorian-england/12', function () use ($router) {
    return view('a-trip-to-victorian-england/12');
});


$router->get('/a-trip-to-victorian-england/13', function () use ($router) {
    return view('a-trip-to-victorian-england/13');
});


$router->get('/a-trip-to-victorian-england/14', function () use ($router) {
    return view('a-trip-to-victorian-england/14');
});


$router->get('/spa-test/01', function () use ($router) {
    return view('/spa-test/01');
});

$router->get('/spa-test/02', function () use ($router) {
    return view('/spa-test/02');
});


$router->get('/learning-about-colour/01', function () use ($router) {
    return view('/learning-about-colour/01');
});

$router->get('/learning-about-colour/02', function () use ($router) {
    return view('/learning-about-colour/02');
});

$router->get('/learning-about-colour/03', function () use ($router) {
    return view('/learning-about-colour/03');
});

$router->get('/learning-about-colour/04', function () use ($router) {
    return view('/learning-about-colour/04');
});

$router->get('/learning-about-colour/05', function () use ($router) {
    return view('/learning-about-colour/05');
});

$router->get('/learning-about-colour/06', function () use ($router) {
    return view('/learning-about-colour/06');
});

$router->get('/learning-about-colour/07', function () use ($router) {
    return view('/learning-about-colour/07');
});

$router->get('/learning-about-colour/08', function () use ($router) {
    return view('/learning-about-colour/08');
});

$router->get('/learning-about-colour/09', function () use ($router) {
    return view('/learning-about-colour/09');
});

$router->get('/learning-about-colour/10', function () use ($router) {
    return view('/learning-about-colour/10');
});

$router->get('/learning-about-colour/11', function () use ($router) {
    return view('/learning-about-colour/11');
});

$router->get('/learning-about-colour/12', function () use ($router) {
    return view('/learning-about-colour/12');
});

$router->get('/learning-about-colour/13', function () use ($router) {
    return view('/learning-about-colour/13');
});

$router->get('/learning-about-colour/14', function () use ($router) {
    return view('/learning-about-colour/14');
});