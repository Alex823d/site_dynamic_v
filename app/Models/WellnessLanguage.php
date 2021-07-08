<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WellnessLanguage extends Model
{
    use HasFactory, softDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wellness_languages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wellness_id',
        'language_id',
        'name',
        'content'
    ];
}
