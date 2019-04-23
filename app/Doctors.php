<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'crm', 'telefone', 'activity_id'];
    protected $dates = ['deleted_at'];
}
