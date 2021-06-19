<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\App\Catalogue;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $pro=Catalogue::where('name','PROVINCIA')->first('id')->id;
        $can=Catalogue::where('name','CANTON')->first('id')->id;
        $ciu=Catalogue::where('name','PARISH')->first('id')->id;
        Db::connection('pgsql-app')->table('locations')->insert([
            'type_id'=>$pro,
            'code'=>'pro',
            'name'=>'pichincha'
         ]);   

        Db::connection('pgsql-app')->table('locations')->insert([
            'type_id'=>$can,
            'parent_id'=>1,
            'code'=>'can',
            'name'=>'quito'
         ]);
        Db::connection('pgsql-app')->table('locations')->insert([
            'type_id'=>$ciu,
            'parent_id'=>2,
            'code'=>'ciu',
            'name'=>'quito'
         ]);

        DB::connection('pgsql-community')->table('beneficiary_institutions')->insert([    
           
            'ruc'=>'1234567891',
            'name'=>"FUNDACION VISTA PARA TODOS",
            'address'=>"en mi casa", //fk propia
            // //
            // 'legal_representative_name'=>"RODRIGO",
            // 'legal_representative_lastname'=>"nogales",
            // 'legal_representative_identification'=>1725485277,
            'function'=>"esatada",//CARGO
            //
            ]);
        
            DB::connection('pgsql-community')->table('projects')->insert([  
            'beneficiary_institution_id'=>1,                 
            'career_id'=>1,
          //  'assigned_line_id'=>4,//pendiente//lineas de investigacion
            'code'=>'yavirac1223',
            'title'=>'Systema ayuda a los pobres',
            'status_id'=>1,//catalogo propio una fk 
           
            'field'=>"campo",//campo de area de vinculacion
            'direct_beneficiaries'=> 'VISTA PARA TODOS',
            'indirect_beneficiaries'=> 'bio',
            //'aim'=>'objeto',//objeto
            'frequency_activities_id'=>4,//frecuencia de actividades
            'cycle'=>"121",//ciclo
            //'location_id'=>1,
            'lead_time'=>3,//plazo de ejecucion
            /* 'delivery_date'=>01/05/2020,// tiempo
            'start_date'=>11/05/2020,// tiempo
            'end_date'=>11/07/2020, */
            'description'=>'ofdasdsafsda',//DESCRIPCION GENERAL  DEL PROYECTO.
            // 'coordinator_name'=>'OLIVER',
            // 'coordinator_lastname'=>'NESTLES',
            // 'coordinator_postition'=>'POSITION',
            // 'coordinator_funtion'=>'coordinator',
            'introduction'=>'AFDSFDSDDSAFASSD',
            'situational_analysis'=>'AASDSDDSAAFDSSAF',//ANALISIS SITUACIONAL (DIAGNOSTICO)
            'foundamentation'=>'SADADASD',
            'justification'=>"ADSSDFDSF",
            'create_by_id'=>1,
            'bibliografia'=>"SE PONE LA BIBLIOGRAFIA"
            ]);
           /*  //Objetivo general
            $ob=Catalogue::where('code','aims_types_1')->first();
            DB::connection('pgsql-community')->table('objectives')->insert([  
                'project_id'=>1,
                'indicator'=>"Número de estudiantes capacidades en el área de informática ",
                'means_verification'=>json_encode(['Listado de asistencia']),
                'description'=>'Brindar una capacitación en ofimática básica a niños de 8 a 12 años mediante talleres y trabajos dirigidas para su desarrollo educativo',//linea base
                'type_id'=>$ob->id//crear tipo de catologos
              //  'parent_id'=>null,//tabla recusiva               
            ]);
            //Objetivo especifico
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Número de máquinas por realizar mantenimiento ",
                'means_verification'=>json_encode(['Informe de estado de maquinas ']),
                'description'=>'Analizar el estado general  de las maquinas mediante una revisión preliminar para verificar el estado y las condiciones de los equipos informáticos',//linea base
                'type_id'=>Catalogue::where('code','aims_types_2')->first('id')->id,//crear tipo de catologos
                'parent_id'=>1,//tabla recusiva               
            ]);
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Número de máquinas formateadas",
                'means_verification'=>json_encode(['Informe de finalización de mantenimiento']),
                'description'=>'Realizar el mantenimiento del centro de cómputo de CENIT para tener un mejor funcionamiento de los equipos.',//linea base
                'type_id'=>Catalogue::where('code','aims_types_2')->first('id')->id,//crear tipo de catologos
                'parent_id'=>1,//tabla recusiva               
            ]);
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Listado de temas a tratar ",
                'means_verification'=>json_encode(['Cronograma de actividades']),
                'description'=>'Iniciar las capacitación en ofimática básica para el desarrollo estudiantil de los niños que acuden al centro cenit',//linea base
                'type_id'=>Catalogue::where('code','aims_types_2')->first('id')->id,//crear tipo de catologos
                'parent_id'=>1,//tabla recusiva               
            ]);
            //Resultados
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Documentación técnica",
                'means_verification'=>json_encode(['Informe técnico']),
                'description'=>'Conocer el número de máquinas que tienen inconvenientes para su funcionamiento ',//linea base
                'type_id'=>Catalogue::where('code','aims_types_4')->first('id')->id,//crear tipo de catologos
                'parent_id'=>2,//tabla recusiva               
            ]);
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Documentación técnica",
                'means_verification'=>json_encode(['Informe técnico']),
                'description'=>'Realización de mantenimiento preventivo y correctivo a las maquinas del centro',//linea base
                'type_id'=>Catalogue::where('code','aims_types_4')->first('id')->id,//crear tipo de catologos
                'parent_id'=>3,//tabla recusiva               
            ]);
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Número de estudiantes aprobados",
                'means_verification'=>json_encode(['Calificaciones']),
                'description'=>'Estudiantes capacitados',//linea base
                'type_id'=>Catalogue::where('code','aims_types_4')->first('id')->id,//crear tipo de catologos
                'parent_id'=>4,//tabla recusiva               
            ]);
            //Actividades
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Documentación técnica",
                'means_verification'=>json_encode(['Informe técnico']),
                'description'=>'1.1.1 Reconocimiento del área de trabajo',//linea base
                'type_id'=>Catalogue::where('code','aims_types_3')->first('id')->id,//crear tipo de catologos
                'parent_id'=>2,//tabla recusiva               
            ]);
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Documentación técnica",
                'means_verification'=>json_encode(['Informe técnico']),
                'description'=>'1.1.2 Revisión preliminar de las maquinas',//linea base
                'type_id'=>Catalogue::where('code','aims_types_3')->first('id')->id,//crear tipo de catologos
                'parent_id'=>2,//tabla recusiva               
            ]);
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Documentación técnica",
                'means_verification'=>json_encode(['Informe técnico']),
                'description'=>'1.1.3 Entrega de informe de estado de las maquinas',//linea base
                'type_id'=>Catalogue::where('code','aims_types_3')->first('id')->id,//crear tipo de catologos
                'parent_id'=>2,//tabla recusiva               
            ]);
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Documentación técnica",
                'means_verification'=>json_encode(['Informe técnico']),
                'description'=>'2.1.1 Tareas dirigidas a los niños',//linea base
                'type_id'=>Catalogue::where('code','aims_types_3')->first('id')->id,//crear tipo de catologos
                'parent_id'=>3,//tabla recusiva               
            ]);
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Documentación técnica",
                'means_verification'=>json_encode(['Informe técnico']),
                'description'=>'Avance del mantenimiento de las maquinas',//linea base
                'type_id'=>Catalogue::where('code','aims_types_3')->first('id')->id,//crear tipo de catologos
                'parent_id'=>3,//tabla recusiva               
            ]);
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Número de estudiantes aprobados",
                'means_verification'=>json_encode(['Lista de estudiantes']),
                'description'=>'3.1.1 Clases básicas de ofimática ',//linea base
                'type_id'=>Catalogue::where('code','aims_types_3')->first('id')->id,//crear tipo de catologos
                'parent_id'=>4,//tabla recusiva               
            ]);
            DB::connection('pgsql-community')->table('objectives')->insert([  
               
                'project_id'=>1,
                'indicator'=>"Número de estudiantes",
                'means_verification'=>json_encode(['Lista de estudiantes']),
                'description'=>'3.1.1 Número de estudiantes capacitados y aprobados',//linea base
                'type_id'=>Catalogue::where('code','aims_types_3')->first('id')->id,//crear tipo de catologos
                'parent_id'=>4,//tabla recusiva               
            ]);

            DB::connection('pgsql-community')->table('activities')->insert([
               
                'project_id'=>1,
                'type_id'=>Catalogue::where('code','assigned_line_1')->first('id')->id,//un catalogo unico de la tabla
                'description'=>"esto es una prueba"    
            ]);
*/            DB::connection('pgsql-community')->table('stake_holders')->insert([
                'name'=>'pepito de los palotes',
                'identification'=>'1212321323',
                'position'=>'conserje',
                'type_id'=>Catalogue::where('code','CARGO_5')->first('id')->id,//
                //'function'=>1,
                'project_id'=>1
            ]);

            DB::connection('pgsql-community')->table('participants')->insert([
               
                'user_id'=>1,
                'project_id'=>1,
                'type_id'=>Catalogue::where('code','CARGO_7')->first('id')->id,//para si es profesor estudiante
                'position'=>'noce para esto',
                'working_hours'=>1000,//horas de trabajo
                'function_id'=>Catalogue::where('code','FUNTION_2')->first('id')->id//rol asignado catalogo las funcipon dentro
            ]); 
 
    /* 
    {
    	"user_id":1,
        "beneficiary_institution": {
            "logo": null,
            "ruc": "1234567891",
            "name": "FUNDACION VISTA PARA TODOS",
            "address": {
                "location": {
                    "id": 1
                },
                "main_street": "string",
                "secondary_street": "string"
            },
            "function": "fgvbhj",
            "files": null
        },
        "school_period": {
        	"id":1 	
        },
        "code": "yavirac1223",
        "title": "Systema ayuda a los pobres",
        "field": "campo",
        "frequency_activities": {
            "id": 4
        },
        "cycle": [
            "hola",
            "hola"
        ],
        "lead_time": 3,
        "delivery_date": "10-09-2020",
        "start_date": "10-09-2020",
        "end_date": "10-09-2020",
        "description": "ofdasdsafsda",
        "indirect_beneficiaries": [
            "bio",
            "bio"
            ],
        "direct_beneficiaries": [
            "VISTA PARA TODOS",
            "bio",
            "bio"
            ],
        "introduction": "AFDSFDSDDSAFASSD",
        "situational_analysis": "AASDSDDSAAFDSSAF",
        "foundamentation": "SADADASD",
        "justification": "ADSSDFDSF",
        "observations": [
            "qasad",
            "hola"
            ],
        "bibliografia": ["SE PONE LA BIBLIOGRAFIA" ],
        "status": {
            "id": 1
        },
        "career": {
            "id": 1
        },
        "location": {
            "id": 1
        },
        "participant": [
            {
                "type": {
                    "id": 1
                },
                "working_hours": 1000,
                "function": {
                    "id": 74
                },
                "user": {
                    "id": 1
                }
            },
            {
                "type": {
                    "id": 1
                },
                "working_hours": null,
                "function": {
                    "id": 74
                },
                "user": {
                    "id": 1
                }
            }
        ],
        "activities": [
            {
                "description": "esto es una prueba",
                "type": {
                    "id": 16
                }
            },
            {
                "description": "esto es una prueba",
                "type": {
                    "id": 16
                }
            },
            {
                "description": "esto es una prueba",
                "type": {
                    "id": 16
                }
            }
        ],
        "stake_holder": [
            {
                "name": "pepito de los palotes",
                "lastname": null,
                "identification": "1212321323",
                "position": "conserje",
                "type": {
                    "id": 72
                }
            }
        ],
        "objetive": [
            {
                "indicator": "Número de estudiantes capacidades en el área de informática ",
                "means_verification": [
                    "Listado de asistencia"
                ],
                "description": "Brindar una capacitación en ofimática básica a niños de 8 a 12 años mediante talleres y trabajos dirigidas para su desarrollo educativo",
                "type": {
                    "id": 25
                },
                "children": 
                    {
                        "description":null
                    }
            
            },
          
            {
                "indicator": "Número de estudiantes capacidades en el área de informática ",
                "means_verification": [
                    "Listado de asistencia"
                ],
                "description": "Brindars una capacitación en ofimática básica a niños de 8 a 12 años mediante talleres y trabajos dirigidas para su desarrollo educativo",
                "type": {
                    "id": 25
                },
                "children": 
                    {
                        "description":  "Brindar una capacitación en ofimática básica a niños de 8 a 12 años mediante talleres y trabajos dirigidas para su desarrollo educativo"
                    }
                
            }
        ]
    }
*/
    }
}
