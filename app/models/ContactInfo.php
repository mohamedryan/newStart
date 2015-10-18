<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $table = 'contact_info';
    protected $guarded =['id'];
	

	public static function getAll() {

		$info = new \stdClass;

		ContactInfo::all()->each(function ($item) use (&$info) {
				$name = $item->key;
				$value = $item->value;
				$info->$name = $value;
			});

		return $info;
	}
}
