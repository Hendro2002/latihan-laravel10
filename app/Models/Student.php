<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    public function class(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function extracurriculars(): BelongsToMany
    {
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id', 'extracurricular_id');
    }

    protected $fillable = [
        'name',
        'gender',
        'nis',
        'class_id'
    ];
    // protected $table = 'student';
    // protected $primaryKey = 'id';
    // protected $keyType = 'integer';
    // public $incrementing = true;
    // public $timestamps = true;
}
