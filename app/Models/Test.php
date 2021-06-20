<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $module_id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property Module $module
 * @property Question[] $questions
 * @property UserAnswer[] $userAnswers
 */
class Test extends Model
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
    protected $fillable = ['module_id', 'title', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function module()
    {
        return $this->belongsTo('App\Models\Module');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userAnswers()
    {
        return $this->hasMany('App\Models\UserAnswer');
    }
}
