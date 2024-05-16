<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'main_menu_id',
        'answer',
        'redirect',
    ];

    protected $casts = [
        'name' => 'string' ,
        'description'  => 'string',
        'main_menu_id'  => 'string',
        'answer'  => 'string',
        'redirect'  => 'string'
    ];

}
