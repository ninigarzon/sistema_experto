<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
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
        'service_type_id',
    ];

    protected $casts = [
        'name' => 'string' ,
        'description'  => 'string',
        'service_type_id'  => 'string'
    ];
}
