<?php

namespace App\Models\TeacherEval;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\App\Catalogue;
use App\Models\App\SchoolPeriod;
use App\Models\App\Teacher;
use OwenIt\Auditing\Contracts\Auditable;
use App\Traits\StatusActiveTrait;


class Evaluation extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use StatusActiveTrait;

    use HasFactory;

    protected $connection = 'pgsql-teacher-eval';
    protected $table = 'teacher_eval.evaluations';

    protected $fillable=[
        'result',
        'percentage'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function evaluationType()
    {
        return $this->belongsTo(EvaluationType::class);
    }
    public function pairResult()
    {
        return $this->hasMany(PairResult::class);
    }
    public function detailEvaluations()
    {
        return $this->hasMany(DetailEvaluation::class);
    }
    public function status()
    {
        return $this->belongsTo(Catalogue::class, "status_id");
    }
    public function schoolPeriod()
    {
        return $this->belongsTo(SchoolPeriod::class);
    }

}
