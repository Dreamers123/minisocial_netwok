<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Article extends Model
{
    //protected $table='name_of_the_table if you manually specified'
    use SoftDeletes;

    protected $fillable = [
         'user_id','content','live', 'post_on'
    ];

    protected $dates=['post_on','deleted_at'];

    public function setLiveAttribute($value)
    {
       
        $this->attributes['live']=(boolean)($value);
    }
    public function getShortContentAttribute()
    {
    	return substr($this->content, 0, random_int(60,150)) .'.... ';
    }
    public function setPostOnAttribute($value)
    {
    	$this->attributes['post_on']=Carbon::parse($value);
    }
    public function isComplete()
    {
        return false;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
