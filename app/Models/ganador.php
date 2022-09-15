<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ganador extends Model
{
    use SoftDeletes;
    use HasFactory;
    public $table = 'ganadores';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'concursantes_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'concursantes_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function concursantes()
    {
        return $this->belongsTo(\App\Models\concursantes::class, 'concursantes_id', 'id');
    }
}
