<?php

namespace ehsan\User\models;

use App\Notifications\VerifyEmail;
use ehsan\Business\models\Business;
use ehsan\Media\models\Media;
use ehsan\Permission\Services\Traits\HasPermission;
use ehsan\User\Notifications\VerifyMail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasPermissions as TraitsHasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable , HasRoles;


    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const STATUS_BLOCK = 'block';

    public static $statuses =
    [
        self::STATUS_ACTIVE,
        self::STATUS_INACTIVE,
        self::STATUS_BLOCK

    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'mobile' , 'media_id' , 'bio'
    ];

    // protected $attributes = [

    //     'media_id' => 0


    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyMail());
    }


    public function image()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }


    public function businesses()
    {
        return $this->hasMany(Business::class);
    }
}
