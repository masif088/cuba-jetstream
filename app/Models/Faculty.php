<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $college_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property College $college
 * @property StudyProgram[] $studyPrograms
 */
class Faculty extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['college_id', 'name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function college()
    {
        return $this->belongsTo('App\Models\College');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studyPrograms()
    {
        return $this->hasMany('App\Models\StudyProgram');
    }
}
