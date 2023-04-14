<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = [
        'name',
        'description',
        'location',
        'company',
        'salary',
        'tel',
        'email',
        'job_category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Job_category::class);
    }
}
