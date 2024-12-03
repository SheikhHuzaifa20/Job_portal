<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class approval extends Model
{
         /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = '_approval';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','address','phone','image'];


    public function attributes()
    {
        return $this->hasMany('App\ProductAttribute', '_approval_id', 'id');
    }
}
