<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'crm', 'telefone', 'activity_id'];
    protected $dates = ['deleted_at'];

     /**
     * Get the activity record associated with the user.
     */
    public function activity()
    {
        return $this->belongsTo('App\Activities');
        //return $this->hasOne(Activities::class, 'activity_id');
    }

    /**
     * @todo implement this function or find a way to return all relation in laravel
     *
    public static function allWithAssociation(){
        $doctors = self::allWithAssociation();
        $ar_doctors = [];
        foreach($doctors as $doctor){
            $doctor['activity'] = $doctor->activity;
            $ar_doctors[] = $doctor;
        }

        return $ar_doctors;
    }*/   
}
