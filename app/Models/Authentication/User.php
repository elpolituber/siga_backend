<?php

namespace App\Models\Authentication;

// Laravel
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;

// Application
use App\Traits\StatusActiveTrait;
use App\Models\App\AdministrativeStaff;

use App\Models\App\Catalogue;
use App\Models\App\Image;
use App\Models\App\Institution;
use App\Models\App\Teacher;
use App\Models\App\Status;
use App\Models\App\File;

class User extends Authenticatable implements Auditable
{
    use HasApiTokens, Notifiable, HasFactory;
    use \OwenIt\Auditing\Auditable;
    use StatusActiveTrait;


    protected $connection = 'pgsql-authentication';
    protected $table = 'authentication.users';

    const ATTEMPTS = 3;

    protected $fillable = [
        'identification',
        'first_name',
        'second_name',
        'first_lastname',
        'second_lastname',
        'personal_email',
        'birthdate',
        'avatar',
        'username',
        'email',
        'email_verified_at',
        'password',
        'change_password',
        'attempts'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function findForPassport($username)
    {
        return $this->where('username', $username)->first();
    }

    public function securityQuestions()
    {
        $this->belongsToMany(SecurityQuestion::class)->withPivot('answer')->withTimestamps();
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function ethnicOrigin()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function location()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function identificationType()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function sex()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function gender()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function bloodType()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function institutions()
    {
        return $this->morphToMany(Institution::class, 'institutionable', 'app.institutionables');
    }

    public function administrativeStaff()
    {
        return $this->hasOne(AdministrativeStaff::class);
    }
}
