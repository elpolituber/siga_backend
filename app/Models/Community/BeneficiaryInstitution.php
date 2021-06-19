<?php

namespace App\Models\Community;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\App\Location; 
use App\Traits\StatusActiveTrait;
use App\Traits\StatusDeletedTrait;
class BeneficiaryInstitution extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use StatusActiveTrait;
    use StatusDeletedTrait;
    protected $connection = 'pgsql-community';
    protected $table='community.beneficiary_institutions';
    
     //utilizacion para el tipo json 
    
    
    public function project(){
        return $this->hasMany(Career::class,'project_id');
    }
    public function location(){
        return $this->belongsTo(Location::class,'location_id');
    }
    // public function files()
    // {
    //     return $this->morphMany(Image::class, 'fileable');
    // }

}
