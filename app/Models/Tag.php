<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $table = "cyb_job_tags";
    protected $guarded = ['id'];
    public $incrementing = true;

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }
}
