<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'listings';

    /**
     * The primary key associated with the table.
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = [
        'name', 'type', 'rooms', 'price', 'status', 'image'
    ];


    /**
     * Accessor for name
     * Gets name with upper case first letter
     *
     * @param $name
     * @return string
     */
    public function getNameAttribute($name)
    {
        return ucfirst($name);
    }

    /**
     * Accessor for type
     * Gets type with upper case first letter
     *
     * @param $type
     * @return string
     */
    public function getTypeAttribute($type)
    {
        return ucfirst($type);
    }

    /**
     * Accessor for status
     * Gets type with upper case first letter
     *
     * @param $status
     * @return string
     */
    public function getStatusAttribute($status)
    {
        return ucfirst($status);
    }

    /**
     * Accessor for Pprice
     * Gets type with upper case first letter
     *
     * @param $price
     * @return string
     */
    public function getPriceAttribute($price)
    {
        return number_format($price, 2, ',', '.');
    }
}
