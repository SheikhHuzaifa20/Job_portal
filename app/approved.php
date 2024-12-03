<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class approved extends Model
{
          /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'approved';

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
    protected $fillable = ['name','email','address','phone','image', 'approved'];


    public function attributes()
    {
        return $this->hasMany('App\ProductAttribute', 'approved_id', 'id');
    }
}
