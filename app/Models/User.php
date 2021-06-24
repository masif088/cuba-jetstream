<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property integer $id
 * @property integer $study_program_id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $two_factor_secret
 * @property string $two_factor_recovery_codes
 * @property string $remember_token
 * @property integer $current_team_id
 * @property string $profile_photo_path
 * @property int $nim
 * @property int $role
 * @property string $created_at
 * @property string $updated_at
 * @property StudyProgram $studyProgram
 * @property College[] $colleges
 * @property Faculty[] $faculties
 * @property ReadModule[] $readModules
 * @property RedeemModule[] $redeemModules
 * @property Theory[] $theories
 * @property UserAnswer[] $userAnswers
 * @property UserOnLearningPath[] $userOnLearningPaths
 */
class User extends Authenticatable
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
    protected $fillable = ['study_program_id', 'name', 'email', 'email_verified_at', 'password', 'two_factor_secret', 'two_factor_recovery_codes', 'remember_token', 'current_team_id', 'profile_photo_path', 'nim', 'role', 'created_at', 'updated_at'];
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function studyProgram()
    {
        return $this->belongsTo('App\Models\StudyProgram');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function college()
    {
        return $this->hasOne('App\Models\College','user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function faculty()
    {
        return $this->hasOne('App\Models\Faculty','user_id');
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
    public function theories()
    {
        return $this->hasMany('App\Models\Theory');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userAnswers()
    {
        return $this->hasMany('App\Models\UserAnswer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userOnLearningPaths()
    {
        return $this->hasMany('App\Models\UserOnLearningPath');
    }
}
