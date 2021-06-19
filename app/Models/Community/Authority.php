<?php

namespace App\Models\Community;

use Illuminate\Database\Eloquent\Model;
use App\Models\App\Catalogue;
use App\Models\Authentication\User;
use App\Traits\StatusActiveTrait;

use OwenIt\Auditing\Contracts\Auditable;

class Authority extends Model
{
    protected $connection = 'pgsql-community';
    protected $table="community.authorities";
    
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function type(){
        return $this->belongsTo(Catalogue::class,'type_id');
    }

    public function status(){
        return $this->belongsTo(Catalogue::class,'status_id');
    }

}
