<?php


namespace App\View\Composers;

use Illuminate\View\View;
use Harimayco\Menu\Facades\Menu;

class BlogComposer
{
	public function compose(View $view){
		$view->with('menu_page', $this->menuPage());
	}
	
	private function menuPage(){
        return Menu::getByName('MenuUtama'); 	
	}

}