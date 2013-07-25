<?php

require_once __DIR__ . '/app/init.php';

// test 
/*
    $user = Model::factory('User')->create();
    $user->firstname = 'Paris';
    $user->lastname = 'Carlton';
    $user->email = 'paris.carlton@example.com';
    $user->save();
*/

$app->get( '/', function() use ($twig) {

    $user = Model::factory('User')->find_one(1);

    if( $user )
    {
        return $twig->render( 'user.html',  array( 'title' => 'Greeting', 'user' => $user ) );
    }
    else
    {
        return $twig->render( 'error.html', array('title' => __('An error occured') , 'error_message' => __('User not found') ) );
    }

} );

$app->get( '/user/{id}', function( Silex\Application $app, $id ) use ($twig) {

    $user = Model::factory('User')->find_one($id);

    if( $user )
    {
        return $twig->render( 'user.html',  array( 'title' => 'Greeting', 'user' => $user ) );
    }
    else
    {
        return $twig->render( 'error.html', array('title' => __('An error occured') , 'error_message' => sprintf(__('User not found %d'), $id ) ) );
    }

} );

$app->run();
