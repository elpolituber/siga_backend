<?php

namespace App\Models\Community;

use Illuminate\Database\Eloquent\Model;
use App\Models\App\Catalogue;
use App\Models\App\school_period;
use App\Models\Community\StakeHolder;
use App\Models\Authentication\User;
use App\Models\App\Career;
use App\Models\Community\BeneficiaryInstitution;
use App\Models\App\Location; 
use App\Traits\StatusActiveTrait;

use OwenIt\Auditing\Contracts\Auditable;

class Project extends Model implements Auditable
{
    use StatusActiveTrait;
    use \OwenIt\Auditing\Auditable;
    protected $connection = 'pgsql-community';
    protected $table="community.projects";
    
    //utilizacion para el tipo json 
    protected $casts=[
        
    ];
    //
    public function BeneficiaryInstitution(){
        return $this->belongsTo(BeneficiaryInstitution::class,'beneficiary_institution_id');
    }
    public function career(){
        return $this->belongsTo(Career::class,'career_id');
    }
    public function status(){
        return $this->belongsTo(Catalogue::class,'status_id');
    }

    
    public function school_period(){
        return $this->belongsTo(school_period::class,'school_period_id');
    }
    //revisar
    public function location(){
        return $this->belongsTo(Location::class,'location_id');
    }
    public function frequency_activities(){
        return $this->belongsTo(Catalogue::class,'frequency_activities_id');
    }
   
    public function participant(){
        return $this->hasMany(Participant::class);
    }
    public function stake_holder(){
        return $this->hasMany(StakeHolder::class);
    }
    public function activities(){
        return $this->hasMany(Activities::class);
    }
    public function objetive(){
        return $this->hasMany(Objetive::class);
    }
    public function create_by(){
        return $this->belongsTo(User::class,'create_by_id');
    }
}
