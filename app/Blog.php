<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';

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
     
    protected $fillable = ['name', 'created_at', 'short_detail', 'detail', 'image' , 'byperson' , 'price'];
    
    protected $appends = ['image_link'];
    
    public function getImageLinkAttribute()
    {
        if (!empty($this->image)) {
            return url($this->image);
        } else {
            return url('assets/imgs/noimage.png');
        }
    }

    
}
