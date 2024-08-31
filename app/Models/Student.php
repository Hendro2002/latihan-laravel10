<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function class(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class); 
    }

    // protected $fillable = [
    //     'name', 'gender', 'nis', 'class_id'
    // ];
    // protected $table = 'student';
    // protected $primaryKey = 'id';
    // protected $keyType = 'integer';
    // public $incrementing = true;
    // public $timestamps = true;
}
