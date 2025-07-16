<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'itemname',
        'itemQty',
    ];  

    /**
     * Register a new user
     *
     * @param array $data
     * @return User
     */
    public function store(array $data)
    {
        return self::create([
            'itemname' => $data['itemname'],
            'itemQty' => $data['itemQty'],
        ]);
    } 
}





