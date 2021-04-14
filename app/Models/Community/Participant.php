<?php

namespace App\Models\Community;
use App\Models\App\Catalogue;
use App\Models\Authentication\User;
use Illuminate\Database\Eloquent\Model;
use App\Traits\StatusActiveTrait;
use App\Traits\StatusDeletedTrait;
use OwenIt\Auditing\Contracts\Auditable;

class Participant extends Model implements Auditable
{
    
    use \OwenIt\Auditing\Auditable;
    use StatusActiveTrait;
    use StatusDeletedTrait;

    protected $connection = 'pgsql-community';
    protected $table='community.participants';

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function type(){
        return $this->belongsTo(Catalogue::class,'type_id');
    }
    public function function(){
        return $this->belongsTo(Catalogue::class,'function_id');
    }
    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }
}
