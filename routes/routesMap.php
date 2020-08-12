<?php

namespace Router;

class routesMap{

	public static function all_routes(){	

			// 
			Router::get('','MainController@index');
			Router::get('mainpage','MainController@mainpage')->middleware(["auth"]);
			// 


			Router::get('articles', 'ArticleController@index')->middleware(["auth","admin"]);
			Router::get('articles/([0-9]+)','ArticleController@show');
			Router::get("articles/create","ArticleController@create");
			Router::get("articles/delete/([0-9]+)","ArticleController@delete");
			Router::get("api/articles","ArticleController@api_show");


			//

			Router::get('users','UserController@index');
			Router::get('register','UserController@create_form');
			Router::get('register/create','UserController@create');
			Router::get('login','UserController@create_login_form')->middleware(["noauth"]);
			Router::get('login/check','UserController@login_check');
			Router::get("user/cabinet","UserController@user_cabinet");
			Router::get("user/logout","UserController@user_logout");
			//
			


			//

			Router::get("categories","CategoryController@index");
			Router::get("api/all_cats","CategoryController@api_show");
			Router::get("category/delete/([0-9]+)","CategoryController@delete");



			// for test
				Router::get("test","TestController@index");
				Router::get("test/create/([a-zA-Z\s]+)","TestController@create_task");
				Router::get("api/test_show","TestController@test_show");
				Router::get("test/delete/([0-9]+)","TestController@test_delete");
			// 

			Router::get_all();
		}

}
