<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\ContactTheme;
use App\models\ContactComponent;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller {

	public function contact() {
		$theme = ContactTheme::where('selected',1)->get()->first();
		$componentOrder = explode(',',$theme->component_order);
		$widthOrder = explode(',',$theme->width_order);
		$contactComponent = ContactComponent::whereIn('id',$componentOrder)->get();
		$orderedComponent = [];
		$count = 0;

		foreach($componentOrder as $order){
			$component = $contactComponent->filter(function($item) use($order) {
				return $item->id == $order;
			})->first();

			$orderedComponent[] = [$component->component,$widthOrder[$count]];

			$count ++;
		}



		return view('site.contact.contact',compact('orderedComponent'));
	}
}
