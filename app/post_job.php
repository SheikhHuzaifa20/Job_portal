<?php

namespace App;

use FontLib\Table\Type\post;
use Illuminate\Database\Eloquent\Model;

class post_job extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'post_job';

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
    protected $fillable = ['job_title', 'location','employment','company_name', 'salary' , 'image'];


    public function attributes()
    {
        return $this->hasMany('App\ProductAttribute', 'post_job_id', 'id');
    }
}
