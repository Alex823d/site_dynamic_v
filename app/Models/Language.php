<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Language
 * @package App\Models
 * @property integer $id
 * @property string $title
 * @property string $locale
 * @property boolean $default
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $deleted_at
 */
class Language extends Model
{
    use HasFactory, softDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'languages';

}