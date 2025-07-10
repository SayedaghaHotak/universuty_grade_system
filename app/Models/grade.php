<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;

class Grade extends Model
{
    protected $fillable = ['student_id', 'course_id', 'grade'];

   public function student() {
    return $this->belongsTo(User::class, 'student_id');
}

public function course() {
    return $this->belongsTo(Course::class);
}

public function professor() {
    return $this->belongsTo(User::class, 'professor_id');
}



}

