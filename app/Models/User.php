<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version February 12, 2020, 6:07 am UTC
 *
 * @property string name
 * @property string email
 * @property string description
 * @property integer referred_by
 * @property integer no_of_refs
 * @property integer ref_level_id
 * @property integer role_id
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'description',
        'referred_by',
        'no_of_refs',
        'ref_level_id',
        'role_id',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'description' => 'string',
        'referred_by' => 'integer',
        'no_of_refs' => 'integer',
        'ref_level_id' => 'integer',
        'role_id' => 'integer',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'description' => 'required',
        'password' => 'required'
    ];

    
}
