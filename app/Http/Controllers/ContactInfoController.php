<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ContactInfo;
use App\Http\Requests\EditContactInfoRequest;

class ContactInfoController extends Controller {

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit() {
		$info = ContactInfo::getAll();
		return view('admin.contact.contact',compact('info'))->render();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditContactInfoRequest $request) {

		foreach ($request->except(['_token','_method']) as $key => $value) {

            $updateInfo = ContactInfo::where('key','=',$key)->update(['value' => $value]);

            if(!$updateInfo) break;

		}

		if ($updateInfo) {
			 return response()->json(['requestState' => true]);
        }else{
            return response()->json(['requestState' => false]);
        }
	}

}
