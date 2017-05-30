<?php

    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => ['localeSessionRedirect', 'localizationRedirect']
        ],
        function () {


            //Route::auth();

            //Route::get('/home', 'HomeController@index');


            Route::get( '/login',	  [ 'as' => 'frontend.login.get', 	 'uses' => 'Auth\AuthController@getLogin']);
            Route::post( '/login',	  [ 'as' => 'frontend.login.post',  'uses' => 'Auth\AuthController@postLogin']);
            Route::get( '/logout',	  [ 'as' => 'frontend.logout.get',  'uses' => 'Auth\AuthController@getLogout']);


            Route::get( '/'        , [ 'as' => 'frontend.home.get'    , 'uses' => 'PageController@getHome'    ]);
            Route::get( '/about/{slug}'   , [ 'as' => 'frontend.about.get'   , 'uses' => 'PageController@getAbout'   ]);
            
            Route::get( '/gallery/{slug}' , [ 'as' => 'frontend.gallery.get' , 'uses' => 'PageController@getGallery' ]);
            Route::get( '/gallery/inner/{id}' , [ 'as' => 'frontend.gallery.inner.get' , 'uses' => 'PageController@getGalleryInner' ]);
            
            Route::get( '/awards' , [ 'as' => 'frontend.awards.get' , 'uses' => 'PageController@getAwards' ]);

            Route::get( '/properties' , [ 'as' => 'frontend.properties.get' , 'uses' => 'PropertiesController@getProperties' ]);
            Route::get( '/properties/{cat}' , [ 'as' => 'frontend.properties.cat.get' , 'uses' => 'PropertiesController@getSingleProperties' ]);
            Route::get( '/properties/{cat}/{slug}' , [ 'as' => 'frontend.properties.single.get' , 'uses' => 'PropertiesController@getInnerProperties' ]);

            Route::get( '/contact' , [ 'as' => 'frontend.contact.get' , 'uses' => 'ContactController@getContact' ]);
            Route::post( '/contact' , [ 'as' => 'frontend.contact.post' , 'uses' => 'ContactController@postContact' ]);

            Route::get( '/blog'    , [ 'as' => 'frontend.blog.get' , 'uses' => 'BlogController@getBlog' ]);
            Route::get( '/blog/{id}'    , [ 'as' => 'frontend.blog.single.get' , 'uses' => 'BlogController@getSingleBlog' ]);
            
        });
