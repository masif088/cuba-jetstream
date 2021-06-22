<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $team_id
 * @property string $title
 * @property string $slug
 * @property string $privilege
 * @property string $thumbnail_path
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property Team $team
 * @property Module[] $modules
 * @property UserOnLearningPath[] $userOnLearningPaths
 */
class LearningPath extends Model
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
    protected $fillable = ['team_id', 'title', 'slug', 'privilege', 'thumbnail_path', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modules()
    {
        return $this->hasMany('App\Models\Module');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userOnLearningPaths()
    {
        return $this->hasMany('App\Models\UserOnLearningPath');
    }
}
