<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $learning_path_id
 * @property string $title
 * @property int $level
 * @property string $created_at
 * @property string $updated_at
 * @property LearningPath $learningPath
 * @property ReadModule[] $readModules
 * @property RedeemModule[] $redeemModules
 * @property TagModule[] $tagModules
 * @property Test[] $tests
 * @property Theory[] $theories
 */
class Module extends Model
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
    protected $fillable = ['learning_path_id', 'title', 'level', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function learningPath()
    {
        return $this->belongsTo('App\Models\LearningPath');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function readModules()
    {
        return $this->hasMany('App\Models\ReadModule');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function redeemModules()
    {
        return $this->hasMany('App\Models\RedeemModule');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tagModules()
    {
        return $this->hasMany('App\Models\TagModule');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tests()
    {
        return $this->hasMany('App\Models\Test');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function theories()
    {
        return $this->hasMany('App\Models\Theory');
    }
}
