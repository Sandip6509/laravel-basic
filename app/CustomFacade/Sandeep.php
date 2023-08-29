<?php

namespace App\CustomFacade;

use Illuminate\Support\Facades\Facade;

class Sandeep extends Facade{
    protected static function getFacadeAccessor() { return 'Sandeep'; }
    public static function productImagePath($image_name)
    {
        return public_path('images/products/'.$image_name);
    }
    public static function changeDateFormate($date,$date_format){
		return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)
					->format($date_format);
	}
}