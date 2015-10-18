<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models\ContactTheme;
use Illuminate\Http\Request;
use Response;

class ContactThemeController extends Controller {
	public function getThemes() {

		$themes = ContactTheme::all();
		return view('admin.contact.contactThemes', compact('themes'))->render();
	}

	public function postThemes(Request $request) {
		$layout_id = $request->get('layout_id');

		//makeAllUnSelected

		ContactTheme::where('selected',1)->update(['selected' => 0]);


		if($layout = ContactTheme::find($layout_id)) {
			if ($layout->update(['selected' => 1])) {
				return Response::json(['requestState' => true]);
			} else {
				return Response::json(['requestState' => false]);
			}
		}else{
			return Response::json(['requestState' => false]);
		}

	}
}
