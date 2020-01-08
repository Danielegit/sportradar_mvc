<?php 
require_once 'routes/Route.php';
require_once 'controllers/Controller.php';
require_once 'controllers/Event.php';
require_once 'controllers/Team.php';
require_once 'controllers/Category.php';


if(isset($_GET['method'])){

	Route::set('newteam/save', function(){
		Team::save();
	});
	Route::set('newevent/save', function(){
		Event::save();
	});

	Route::set('show/'.$_GET['method'], function(){
		Event::showOne($_GET['method']);
		Event::CreateView('show');
	});
	
	Route::set('events/'.$_GET['method'], function(){
		Event::filter($_GET['method']);
		Category::category_show();
		Event::CreateView('events');
	});
	Route::set('event/'.$_GET['method'], function(){
		Team::showTeams($_GET['method']);
		Category::category_show();
		Category::categoryId($_GET['method']);
		Team::CreateView('create/newevent');
	});

}


Route::set('index.php', function(){ 

	Event::CreateView('home');
	
});

Route::set('events', function(){ 
	Category::category_show();
	Event::showAll();
	Event::CreateView('events');
	 
});

Route::set('team', function(){
	Category::category_show();
	Team::CreateView('create/newteam');
});

Route::set('match', function(){
	Category::category_show();
	Team::CreateView('create/select');
});

Route::set('select', function(){
	Team::CreateView('select');
});

Route::set('sport', function(){
	Category::category_show();
	Team::CreateView('create/sport');
});


if(Route::$page_matched === false){
	echo '<script>page404();</script>';
}

?>