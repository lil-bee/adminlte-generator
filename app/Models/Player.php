<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Player
 * @package App\Models
 * @version October 28, 2021, 3:53 pm UTC
 *
 * @property string $Name
 * @property string $Position
 * @property string $Shirt_Number
 * @property string $Nationality
 */
class Player extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'players';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Position',
        'Shirt_Number',
        'Nationality'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'Position' => 'string',
        'Shirt_Number' => 'string',
        'Nationality' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required',
        'Position' => 'required',
        'Shirt_Number' => 'required',
        'Nationality' => 'required'
    ];

    
}
