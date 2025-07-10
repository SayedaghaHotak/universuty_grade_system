<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Course extends Model
{
    protected $fillable = ['name', 'professor_id' , 'credits'];

    public function professor()
    {
        return $this->belongsTo(User::class, 'professor_id');
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
