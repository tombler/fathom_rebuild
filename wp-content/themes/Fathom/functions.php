<?php
function my_scripts() {

    wp_register_script(
        'angularjs',
        get_stylesheet_directory_uri() . '/lib/bower_components/angular/angular.min.js'
    );
    wp_register_script(
        'angularjs-route',
        get_stylesheet_directory_uri() . '/lib/bower_components/angular-route/angular-route.min.js'
    );
    wp_register_script(
        'angular-animate',
        get_stylesheet_directory_uri() . '/lib/bower_components/angular-animate/angular-animate.min.js'
    );
    wp_register_script(
        'angularui-bootstrap',
        get_stylesheet_directory_uri() . '/lib/bower_components/angular-bootstrap/ui-bootstrap.min.js'
    );
    wp_register_script(
        'angularui-tpls',
        get_stylesheet_directory_uri() . '/lib/bower_components/angular-bootstrap/ui-bootstrap-tpls.js'
    );
    wp_enqueue_script(
        'app',
        get_stylesheet_directory_uri() . '/app/app.js',
        array( 'angularjs', 'angularjs-route', 'angular-animate','angularui-bootstrap', 'angularui-tpls' )
    );
    wp_enqueue_script(
        'factories',
        get_stylesheet_directory_uri() . '/app/factories/projects.js',
        array( 'app' )
    );


    wp_localize_script(
        'app',
        'myLocalized',
        array(
            'views' => trailingslashit( get_template_directory_uri() ) . 'views/'
            )
    );
    

    //ANGULAR CONTROLLERS
    wp_enqueue_script( 'home',  get_stylesheet_directory_uri().'/app/controllers/HomeCtrl.js', array('factories'));
    wp_enqueue_script( 'signup',  get_stylesheet_directory_uri().'/app/controllers/SignupCtrl.js', array('factories'));
    wp_enqueue_script( 'project',  get_stylesheet_directory_uri().'/app/controllers/ProjectCtrl.js', array('factories'));
    wp_enqueue_script( 'terms',  get_stylesheet_directory_uri().'/app/controllers/TermsCtrl.js', array('factories'));


    wp_register_style(
        'main',
        get_stylesheet_directory_uri() . '/styles/main.css'
    );

    wp_enqueue_style('main');


}
add_action( 'wp_enqueue_scripts', 'my_scripts' );