<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $products = [];
    public static function allProducts ()
    {
        self::$products = [
          0=> [
              'id' => 1,
              'name' => 'FootBall',
              'Price' => '5600 Tk',
              'image' => '1.jpg',
              'description'=>'',
          ],
        1=>[],
        2=>[],
        3=>[],
        4=>[],
        ];
    }
}
