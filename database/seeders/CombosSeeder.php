<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\App\Catalogue;
use Illuminate\Support\Facades\DB;

class CombosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //status
            Catalogue::factory()->create([
                'code' => 'status_1',
                'name' => 'en proceso',
                'type' => 'status_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'status_2',
                'name' => 'pendiente',
                'type' => 'status_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'status_3',
                'name' => 'ractificar',
                'type' => 'status_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'status_4',
                'name' => 'corregido',
                'type' => 'status_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'status_5',
                'name' => 'aprobado',
                'type' => 'status_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'status_6',
                'name' => 'culminado',
                'type' => 'status_vinculacion',
                
            ]);
            //funcion teacher
            Catalogue::factory()->create([
                'code' => 'funtion_1',
                'name' => 'tutor',
                'type' => 'funtion_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'funtion_2',
                'name' => 'cordinador',
                'type' => 'funtion_vinculacion',
                
            ]);
            //FraquencyOfActivity Frecuencia de actividades
            Catalogue::factory()->create([
                'code' => 'fraquency_activity_1',
                'name' => 'Diaria',
                'type' => 'fraquency_activity_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'fraquency_activity_2',
                'name' => 'Semanal',
                'type' => 'fraquency_activity_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'fraquency_activity_3',
                'name' => 'Quincenal',
                'type' => 'fraquency_activity_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'fraquency_activity_4',
                'name' => 'Mensual',
                'type' => 'fraquency_activity_vinculacion',
                
            ]);
            //AssignedLine 
            Catalogue::factory()->create([
                'code' => 'assigned_line_1',
                'name' => 'Gestion de Integracion del Proyecto',//Linea Asignada
                'type' => 'assigned_line_vinculacion',
                
            ]);
    
            Catalogue::factory()->create([
                'code' => 'assigned_line_2',
                'name' => 'Gestion del Alcance del Proyecto',
                'type' => 'assigned_line_vinculacion',
                
            ]);
    
            Catalogue::factory()->create([
                'code' => 'assigned_line_3',
                'name' => 'Gestion de Tiempo del Proyecto',
                'type' => 'assigned_line_vinculacion',
                
            ]);
    
            Catalogue::factory()->create([
                'code' => 'assigned_line_4',
                'name' => 'Gestion de Costo del Proyecto',
                'type' => 'assigned_line_vinculacion',
                
            ]);
    
            Catalogue::factory()->create([
                'code' => 'assigned_line_5',
                'name' => 'Gestion de la Calidad del Proyecto',
                'type' => 'assigned_line_vinculacion',
                
            ]);
    
            Catalogue::factory()->create([
                'code' => 'assigned_line_6',
                'name' => 'Gestion RRHH del Proyecto',
                'type' => 'assigned_line_vinculacion',
                
            ]);
    
            Catalogue::factory()->create([
                'code' => 'assigned_line_7',
                'name' => 'Gestion de Comunicaciones del Proyecto',
                'type' => 'assigned_line_vinculacion',
                
            ]);
    
            Catalogue::factory()->create([
                'code' => 'assigned_line_8',
                'name' => 'Gestion de Riesgos del Proyecto',
                'type' => 'assigned_line_vinculacion',
                
            ]);
    
            Catalogue::factory()->create([
                'code' => 'assigned_line_9',
                'name' => 'Gestion de Adquisiones del Proyecto',
                'type' => 'assigned_line_vinculacion',
                
            ]);
            //aims_types
            Catalogue::factory()->create([
                'code' => 'aims_types_1',
                'name' => 'Objetivo GENERAL',
                'type' => 'aims_types_vinculacion',
                
            ]);    
            Catalogue::factory()->create([
                'code' => 'aims_types_2',
                'name' => 'Objetivo especifico',
                'type' => 'aims_types_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'aims_types_3',
                'name' => 'Actividad',
                'type' => 'aims_types_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'aims_types_4',
                'name' => 'Resultados',
                'type' => 'aims_types_vinculacion',
                
            ]);
            
    
            //LinkageAxes/ejes de vinculacion
            Catalogue::factory()->create([
                'code' => 'linkage_axes_1',
                'name'=>'Ambiental',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'linkage_axes_2',
                'name'=>'Interculturalidad/genero ',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'linkage_axes_3',
                'name'=>'Investigativo Acad??mico',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'linkage_axes_4',
                'name'=>'Desarrollo social,comunitario',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'linkage_axes_5',
                'name'=>'Desarrollo local',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'linkage_axes_6',
                'name'=>'Econom??a popular y solidaria',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'linkage_axes_7',
                'name'=>'Desarrollo t??cnico y tecnol??gico',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'linkage_axes_8',
                'name'=>'Innovaci??n',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'linkage_axes_9',
                'name'=>'Responsabilidad social universitaria',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'linkage_axes_10',
                'name'=>'Matriz productiva',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'linkage_axes_11',
                'name'=>'Otros',
                'type' => 'linkage_axes_vinculacion',
                
            ]);
            
            //BondingActivities/Actividad de vinculaci??n
            Catalogue::factory()->create([
                'code' => 'bonding_activities_1',
                'name'=>'Investigaci??n',
                'type' => 'bonding_activities_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'bonding_activities_2',
                'name'=>'Acuerdo',
                'type' => 'bonding_activities_vinculacion',
                
            ]);   
            Catalogue::factory()->create([
                'code' => 'bonding_activities_3',
                'name'=>'Proyecto de vinculaci??n propio IST JME',
                'type' => 'bonding_activitiess_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'bonding_activities_4',
                'name'=>'Programa de capacitaci??n a la comunidad',
                'type' => 'bonding_activities_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'bonding_activities_5',
                'name'=>'Practicas Vinculaci??n con la comunidad',
                'type' => 'bonding_activities_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'bonding_activities_6',
                'name'=>'Practicas Vinculaci??n con la comunidad',
                'type' => 'bonding_activities_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'bonding_activities_7',
                'name'=>'Convenios institucionales',
                'type' => 'bonding_activities_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'bonding_activities_8',
                'name'=>'Otros',
                'type' => 'bonding_activities_vinculacion',
                
            ]);
            
            //research_areas/area de investigacion
            Catalogue::factory()->create([
                'code' => 'research_areas_1',
                'name'=>'Educacion',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_2',
                'name'=>'Salud',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_3',
                'name'=>'Saneamiento Ambiental',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_4',
                'name'=>'Desarrollo Social',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_5',
                'name'=>'Apoyo Productivo',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_6',
                'name'=>'Agricultura, Ganader??a y Pesca',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_7',
                'name'=>'Vivienda',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_8',
                'name'=>'Protecci??n del medio ambiente y desastres naturales',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_9',
                'name'=>'Recursos naturales y energ??a',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_10',
                'name'=>'Transporte, comunicaci??n y viabilidad',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_11',
                'name'=>'Desarrollo Urbano',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_12',
                'name'=>'Turismo',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_13',
                'name'=>'Cultura',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_14',
                'name'=>'Desarrollo de investigaci??n cient??fica',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_15',
                'name'=>'Deportes',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_16',
                'name'=>'Justicia y Seguridad',
                'type' => 'research_areas_vinculacion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'research_areas_17',
                'name'=>'Otros',
                'type' => 'research_areas_vinculacion',
                
            ]);
            // career modality
            Catalogue::factory()->create([
                'code' => '1',
                'name' => 'PRESENCIAL',
                'type' => 'career_modality',
                
             ]);

             Catalogue::factory()->create([
                'code' => '2',
                'name' => 'SEMI-PRESENCIAL',
                'type' => 'career_modality',
                
            ]);
            Catalogue::factory()->create([
                'code' => '3',
                'name' => 'DISTANCIA',
                'type' => 'career_modality',
                
            ]);
            Catalogue::factory()->create([
                'code' => '4',
                'name' => 'DUAL',
                'type' => 'career_modality',
                
            ]);
            //Cargos vinculacion
            Catalogue::factory()->create([
                'code' => 'cargo_1',
                'name' => 'rector',
                'type' => 'cargo_vincualcion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'cargo_2',
                'name' => 'vicerector',
                'type' => 'cargo_vincualcion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'cargo_3',
                'name' => 'coordinador de vinculacion',
                'type' => 'cargo_vincualcion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'cargo_4',
                'name' => 'coordinador de carrera',
                'type' => 'cargo_vincualcion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'cargo_5',
                'name' => 'coordinador de vincualcion(empresa)',
                'type' => 'cargo_vincualcion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'cargo_6',
                'name' => 'estudiante',
                'type' => 'cargo_vincualcion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'cargo_7',
                'name' => 'profesor',
                'type' => 'cargo_vincualcion',
                
            ]);
            Catalogue::factory()->create([
                'code' => 'cargo_8',
                'name' => 'Representante legal',
                'type' => 'cargo_vincualcion',
            ]);
            Catalogue::factory()->create([
                'code' => 'cargo_9',
                'name' => 'Represntante de los estudiantes',
                'type' => 'cargo_vincualcion',
            ]);    

    
    /*
    drop schema if exists authentication cascade;
                drop schema if exists attendance cascade;
                drop schema if exists ignug cascade;
                drop schema if exists job_board cascade;
                drop schema if exists web cascade;
                drop schema if exists vinculacion cascade;
                drop schema if exists evaluacion cascade;
                create schema authentication;
                create schema attendance;
                create schema ignug;
                create schema job_board;
                create schema web;
                create schema vinculacion;
                create schema evaluacion;
    */        
    }
}
