<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $test_id
 * @property string $question
 * @property string $answer
 * @property int $point
 * @property string $created_at
 * @property string $updated_at
 * @property Test $test
 * @property ChooseQuestion[] $chooseQuestions
 * @property UserAnswer[] $userAnswers
 */
class Question extends Model
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
    protected $fillable = ['test_id', 'question', 'answer', 'point', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function test()
    {
        return $this->belongsTo('App\Models\Test');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chooseQuestions()
    {
        return $this->hasMany('App\Models\ChooseQuestion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userAnswers()
    {
        return $this->hasMany('App\Models\UserAnswer');
    }
}
