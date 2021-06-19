<?php

namespace App\Models\Community;

use App\Models\App\Catalogue;
use Illuminate\Database\Eloquent\Model;
use App\Traits\StatusActiveTrait;
use App\Traits\StatusDeletedTrait;
use OwenIt\Auditing\Contracts\Auditable;
class Objetive extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    use StatusActiveTrait;
    use StatusDeletedTrait;

    protected $connection = 'pgsql-community';
    protected $table='community.objectives';
    use \OwenIt\Auditing\Auditable;
    protected $casts=[
        'means_verification'=>'array',
    ];
    
   
    public function type(){
        return $this->belongsTo(Catalogue::class,'type_id');
    }
    public function parent() 
    { 
     return $this->belongsTo(Objetive::class,'parent_id')->where('parent_id',null)->with('parent'); 
    }
    public function project(){
        return $this->belongsTo(Project::class);
    }
    
   
}
