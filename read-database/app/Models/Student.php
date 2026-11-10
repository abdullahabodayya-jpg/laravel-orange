<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    protected $fillable = [
        'student_name',
        'student_email',
        'age',
    ];

    public function courses(): BelongsToMany{
        return $this->belongsToMany(Course::class);
    }

    public function department():BelongsTo {
        return $this->belongsTo(Department::class);
    }

    public function profile():HasOne {
    return $this->hasOne(Profile::class);
    }

}
