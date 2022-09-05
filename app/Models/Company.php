<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded=[
        'id'
    ];

    protected $fillable = [
        'company_name',
        'head_name',
        'tel',
        'email',
        'status_id',
        'user_id'
    ];

    public function status(){
        return $this->belongsTo('App\Models\Status');
    }
}
