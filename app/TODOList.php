<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $formFields)
 * @method static latest()
 * @method static where(string $column, string $value)
 * @method static find(integer $id)
 *
 * @property integer $id
 * @property string $content
 */
class TODOList extends Model
{
    use HasFactory;

    protected $fillable = ['content'];
}
