<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'FrontendController@getHome');

    Route::get('san-pham/{product_id}-{product_slug}.html', 'FrontendController@getDetail')
        ->where(['product_id' => '[0-9]+']);

    Route::get('danh-muc/{category_id}-{category_slug}.html', 'FrontendController@getCategory')
        ->where(['category_id' => '[0-9]+']);

    Route::get('tim-kiem/', 'FrontendController@getSearch');

    Route::group(['prefix' => 'gio-hang'], function (){
        Route::get('/', 'CartController@getCart');

        Route::post('addcart', 'CartController@postAddCart');
        Route::get('delete/{rowId}', 'CartController@getDelCart');
        Route::post('update', 'CartController@postUpdateCart');
        Route::post('checkout', 'CartController@postCheckoutCart');
        });

    Route::group(['prefix' => 'dang-ky', 'middleware' => 'CheckUserLogin'], function (){
        Route::get('/', 'RegisterController@getRegister');
        Route::post('/', 'RegisterController@postRegister');
    });

    Route::group(['prefix' => 'dang-nhap', 'middleware' => 'CheckUserLogin'], function (){
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });

    Route::group(['prefix' => 'tai-khoan', 'middleware' => 'CheckUserLogout'], function (){
        Route::get('/', function (){
            return redirect()->intended('tai-khoan/thong-tin');
        });

        Route::get('thong-tin', 'UserController@getUser');
        Route::group(['prefix' => 'don-hang'], function (){
            Route::get('/', 'UserController@getOrder');
            Route::get('chi-tiet/{order_id}', 'UserController@getOrderDetail');
        });

    });

    Route::get('dang-xuat', 'FrontendController@getLogout');
});

Route::group(['namespace' => 'Admincp'], function (){
    Route::group(['prefix' => 'admincp'], function (){
        Route::get('/', function (){
            return redirect()->intended('admincp/dashboard');
        });

        Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function (){
            Route::get('/', 'LoginController@getLogin');
            Route::post('/', 'LoginController@postLogin');
        });

        Route::get('logout', 'DashBoardController@getLogout');

        Route::group(['prefix' => 'dashboard', 'middleware' => ['CheckLogedOut', 'CheckLevel']], function (){
            Route::get('/', 'DashBoardController@getDashBoard');

            Route::group(['prefix' => 'profile'], function (){
                Route::get('/', 'ProfileAdminController@getProfileAdmin');
                Route::post('/', 'ProfileAdminController@postProfileAdmin');

            });

            Route::group(['prefix' => 'password'], function (){
                Route::get('/', 'ProfileAdminController@getPwdAdmin');
                Route::post('/', 'ProfileAdminController@postPwdAdmin');

            });

            Route::group(['prefix' => 'manage-user'], function (){
                Route::get('/', 'UserController@getUser');

                Route::get('add', 'UserController@getAddUser');
                Route::post('add', 'UserController@postAddUser');

                Route::get('edit/{user_id}', 'UserController@getEditUser');
                Route::post('edit/{user_id}', 'UserController@postEditUser');

                Route::get('delete/{user_id}', 'UserController@getDelUser');
            });

            Route::group(['prefix' => 'category'], function (){
                Route::get('/', 'CategoryController@getCategory');
                Route::post('/', 'CategoryController@postCategory');

                Route::get('edit/{category_id}', 'CategoryController@getEditCategory');
                Route::post('edit/{category_id}', 'CategoryController@postEditCategory');

                Route::get('delete/{category_id}', 'CategoryController@getDelCategory');
            });

            Route::group(['prefix' => 'product'], function (){
                Route::get('/', 'ProductController@getProduct');

                Route::get('add', 'ProductController@getAddProduct');
                Route::post('add', 'ProductController@postAddProduct');

                Route::get('edit/{product_id}', 'ProductController@getEditProduct');
                Route::post('edit/{product_id}', 'ProductController@postEditProduct');

                Route::get('delete/{product_id}', 'ProductController@getDelProduct');
            });

            Route::group(['prefix' => 'order'], function (){
               Route::get('/', 'OrderController@getOrder');

               Route::get('edit/{order_id}', 'OrderController@getEditOrder');
               Route::post('edit/{order_id}', 'OrderController@postEditOrder');

               Route::get('delete/{order_id}', 'OrderController@getDelOrder');

            });

            Route::group(['prefix' => 'shipper'], function (){
                Route::get('/', 'ShipperController@getShipper');
                Route::post('/', 'ShipperController@postShipper');

                Route::get('edit/{shipper_id}', 'ShipperController@getEditShipper');
                Route::post('edit/{shipper_id}', 'ShipperController@postEditShipper');

                Route::get('delete/{shipper_id}', 'ShipperController@getDelShipper');
            });

            Route::group(['prefix' => 'blog'], function (){
                Route::get('/', 'BlogController@getBlog');

                Route::get('add', 'BlogController@getAddBlog');
                Route::post('add', 'BlogController@postAddBlog');

                Route::get('edit/{blog_id}', 'BlogController@getEditBlog');
                Route::post('edit/{blog_id}', 'BlogController@postEditBlog');

                Route::get('delete/{blog_id}', 'BlogController@getDelBlog');
            });

            Route::group(['prefix' => 'slide'], function (){
                Route::get('/', 'SlideController@getSlide');
                Route::post('/', 'SlideController@postSlide');

                Route::get('edit/{slide_id}', 'SlideController@getEditSlide');
                Route::post('edit/{slide_id}', 'SlideController@postEditSlide');

                Route::get('delete/{slide_id}', 'SlideController@getDelSlide');
            });

            Route::group(['prefix' => 'information'], function (){
                Route::get('/', 'InfoWebController@getInfoWeb');
                Route::post('/', 'InfoWebController@postInfoWeb');
            });
        });
    });
});
