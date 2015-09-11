<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

class AjaxContentController extends Controller
{
    function getPage(Request $request){
        $pageName = $request->get('pageName');

        switch ($pageName) {
            case 'index':
                 return $this->getindex();
        break;
            case 'contact':
                 return $this->getContact();
        break;
            default:
        break;
        }


    }


     function getIndex(){
        return view('admin.index')->render();
    }

     function getContact(){
        return view('admin.contact.contact')->render();
    }
}
