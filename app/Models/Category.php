<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;

    protected $table='categories';
    protected $filleable=[
    'name',
    'gender',
    'email',
    'phone_number',
    'date',
    'UserName',
    'Password',
    'Address',
    'image'
];
}
class User1 extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $Category = [ 'name',
    'gender',
    'email',
    'phone_number',
    'date',
    'UserName',
    'Password',
    'Address',
    'image'
];
}




