<!DOCTYPE html>
<html>
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projecto Vincualcion</title>
    <style>
        .page-break {
            page-break-after: always;
        }
        table, tr, td,th {
            border: 1px solid black;
            border-collapse: collapse;
          }
        .position{
            position: relative;
            top:-4px;
        }
          .firmaBloque{
            {{--  background: rgba(210, 141, 30, 0.431);  --}}
            width: 735px;
            height: 180px;
        }
        .firma{
            width: 220px;
            height: 110px;
            {{--  background: rgba(210, 105, 30, 0.431);  --}}
            
        }
        .cooVinculacion{
            position: relative;
            top:-110px;
            bottom:  ;
            left:260px ;
            right: ; 
        }
        .cooCarrera{
            position: relative;
            top:-220px;
            bottom:  ;
            left:500px ;
            right: ; 
        }
        .representanteL{
            position: relative;
            top:-110px;
            bottom:  ;
            left:260px ;
            right: ; 
        }
        .estudiante{
            position: relative;
            top:-220px;
            bottom:  ;
            left:500px ;
            right: ; 
        }
        .resalte{
            text-align: center;
            font-weight: bold;
        }
      
    </style>
</head>
<body>
    <article class="page-break">
        <h1>INSTITUTO TECNOLÓGICO SUPERIOR</h1>
        <div class="logo"></div><img src="" alt="logo del intituto">logo</div>
        <h3>DEPARTAMENTO DE VINCULACIÓN CON LA SOCIEDAD</h3>
        <h3>CARRERA:</h3>
        <h3>NOMBRE DEL PROYECTO:</h3>
        <h3>AUTORES:</h3>
        <h3>INSTITUCIÓN  BENEFICIARIA: <br></h3>
        <h3>COORDINADOR(ES) INSTITUCIÓN BENEFICIARIA: </h3>
        <h3>CODIGO DEL PROYECTO: </h3>
        <h4>xxx-Ecuador</h4>   
        <h4>Mes-202--</h4> 
    </article>
    <article >
        <table style="width:100%;" class="position">
            <tr >
              <td colspan="6">1.PROYECTO/ACTIVIDAD</td>  
            </tr>
          
                
            <tr>
                <td colspan="3">TITULO: {{$project->title}}</td>
                <td colspan="3">CODIGO: {{$project->code}}</td>
            </tr>
            <tr>
                <td colspan="6">CARRERA:{{$project->career->name}}</td>
                
            </tr>
            <tr>
               <td colspan="2">Ciclo:@if ($project->cycle <> null)
                   @foreach ($project->cycle as $cycle)
                    {{$cycle}}
                @endforeach
                @endif
                </td>
               <td colspan="1">Presencia</td>
               <td colspan="1">
                    @if ($project->career->modality->name =='PRESENCIAL')
                        <center> x </center>  
                    @endif
               <td colspan="1">Dual</td>
               <td colspan="1">
                @if ($project->career->modality->name =='DUAL')
                    <center> x </center>  
                @endif
               </td> 
            </tr>
            <tr>
                <td colspan="2">COBERTURA Y LOCALIZACIÓN</td>
                <td colspan="4">aa</td>
            </tr>
            <tr>
                <td colspan="3">PLAZO DE EJECUCION</td>
                <td colspan="3">{{$project->Lead_time}}</td>
            </tr>
            <tr>
                <td>FECHA DE PRESENTACIÓN</td>
                <td><span style="font-size: 12px; text-align: center">{{$project->delivery_date}}</span></td>
                <td>FECHA INICIO</td>
                <td><span style="font-size: 12px; text-align: center">{{$project->start_date}}</span></td>
                <td>FECHA FINAL</td>
                <td><span style="font-size: 12px; text-align: center">{{$project->end_date}}</span></td>
            </tr>
            
        </table>    
        <table style="width:100%;" class="position">    
            <tr>
                <td colspan="4">FRECUENCIA DE LAS ACTIVIDADES</td>
            </tr>
            <tr>
                <td>DIARIA</td>
                <td>SEMANAL</td>
                <td>QUINCENAL</td>
                <td>MENSUAL</td>
            </tr>
            <tr>
                <td>@if ($project->frequency_activities->code =="fraquency_activity_1")
                    x
                @endif</td>
                <td>@if ($project->frequency_activities->code =="fraquency_activity_2")
                    x
                @endif</td>
                <td>@if ($project->frequency_activities->code =="fraquency_activity_3")
                    x
                @endif</td>
                <td>@if ($project->frequency_activities->code =="fraquency_activity_4")
                    x
                @endif</td>

                {{--  <td>{{$project->frequency_activities}}</td>  --}}
            </tr>
        </table>
        <table style="width:100%;" class="position">
            <tr>
                
                <td colspan="2" class="resalte">Actividad de vinculación</td>
                <td colspan="2" class="resalte">Sectores de intervención </td>
                <td colspan="2" class="resalte">Ejes estratégicos de vinculación con la colectividad</td>
            </tr>
            {{--  $project->activities   --}}
                
            
            <tr>                 
                <td>Convenios institucionales</td>
                <td></td>
                <td>Educación</td>
                <td></td>
                <td>Ambiental</td>
                <td id="linkage_axes_1"></td>
            </tr>
            <tr>          
                <td>Acuerdo</td>
                <td></td>
                <td>Salud</td>
                <td></td>
                <td>Interculturalidad/género</td>
                <td id="linkage_axes_2"> </td>
            </tr>
            <tr>                 
                <td>Proyecto de vinculación propio IST JME</td>
                <td></td>
                <td>Saneamiento Ambiental</td>
                <td></td>
                <td>Investigativo Académico</td>
                <td id="linkage_axes_3"></td>
            </tr>
            <tr>
                <td>Programa de capacitación a la comunidad</td>
                <td></td>
                <td>Desarrollo Social</td>
                <td></td>
                <td>Desarrollo social, comunitario</td>
                <td id="linkage_axes_4"> </td>
            </tr>
            <tr>                 
                <td>Practicas Vinculación con la comunidad</td>
                <td></td>
                <td>Apoyo Productivo</td>
                <td></td>
                <td>Desarrollo local</td>
                <td id="linkage_axes_5"></td>
            </tr>
            <tr>    
                <td>Investigación</td>
                <td></td>
                <td>Agricultura, Ganadería y Pesca</td>
                <td></td>
                <td>Economía popular y solidaria</td>
                <td id="linkage_axes_6"> </td>
            </tr>
            <tr>         
                <td></td>
                <td></td>
                <td>Vivienda</td>
                <td></td>
                <td>Desarrollo técnico y tecnológico</td>
                <td id="linkage_axes_7"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>                 
                <td>Protección del medio ambiente y desastres naturales</td>
                <td></td>
                <td>Innovación</td>
                <td id="linkage_axes_8"> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>                 
                <td>Recursos naturales y energía</td>
                <td></td>
                <td>Responsabilidad social universitaria</td>
                <td id="linkage_axes_9"> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>                 
                <td>Transporte, comunicación y viabilidad</td>
                <td></td>
                <td>Matriz productiva.</td>
                <td id="linkage_axes_10"></td>
            </tr>
            <tr>
                 <td></td>
                 <td></td>
                 <td>Desarrollo Urbano</td>
                 <td></td>
                 <td></td>
                 <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Turismo</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Cultura</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Desarrollo de investigación científica</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Deportes</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td>Otros</td>
            <td></td>
            <td>Justicia y Seguridad</td>
            <td></td>
            <td>Otros</td>
            <td id="linkage_axes_11"></td>
            </tr>
            
        </table>
        <table style="width:100%;" class="position">
            <tr>
                <td>2.DESCRIPCION GENERAL  DEL PROYECTO</td>
            </tr>
            <tr>
                <td>{{$project->description}}</td>
            </tr>
            <tr>
                <td>3.ANALISIS SITUACIONAL</td>
            </tr>
            <tr>
                <td>{{$project->situational_analysis}}</td>
            </tr>
            <tr>
                <td>4.JUSTIFICACIÓN </td>
            </tr>
            <tr>
                <td>{{$project->justification}}</td>
            </tr>
            <tr>
                <td>5.PARTICIPANTES</td>
            </tr>
        </table>
        
        <table style="width:100%;" class="position">
            <tr>
                <td>Docentes</td>
                <td>Nombre y título profesional </td>
                <td>Horario de trabajo para el proyecto.</td>
                <td>Funciones asignadas</td>
            </tr>
           @foreach ($project->participant as $participants)
                 @if ($participants->function->code=="cargo_7")
                    <tr>     
                        <td>{{$participants->position}}</td>
                        <td>{{$participants->user->first_name}} {{$participants->user->first_lastname}}</td>
                        <td>{{$participants->working_hours}}</td>
                        <td>{{$participants->function->name}}</td>
                    </tr>
                @endif     
            @endforeach 
            {{--  pendiante  --}}
        </table>
        <table style="width: 100%;">
            <tr>
                <td colspan="4">6.ORGANIZACIÓN/ INSTITUCIÓN BENEFICIARIA</td>
            </tr>
            <tr>
                <td>
                    Nombre completo organización/institución beneficiaria
                </td>
                <td>
                    Provincia
                </td>
                <td>
                    Cantón
                </td>
                <td>
                    Parroquia
                </td>
            </tr>
            
            <tr>
                <td>{{$project->beneficiaryInstitution->name}}.</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td >Lugar de ubicación</td>
                <td>Beneficiarios Directos</td>
                <td colspan="2">Beneficiarios Indirectos</td>
            </tr>
            <tr>
                <td></td>
                <td>@foreach ($project->direct_beneficiaries as $direc)
                    {{$direc}}<br>
                @endforeach</td>
                <td colspan="2">@foreach ($project->indirect_beneficiaries as $indirec)
                    {{$indirec}}<br>
                @endforeach</td>
            </tr>
            <tr>
                <th style="font-size: x-small">NOMBRES Y APELLIDOS DE COORDINADOR(ES) DE INSTITUCIÓN BENEFICIARIA:</th>
                <th style="font-size: x-small">CARGO O FUNCIÓN EN LA INSTITUCIÓN BENEFICIARIA.</th>
                <th style="font-size: x-small"colspan="2">FUNCIÓN QUE CUMPLE EN EL PROYECTO DE VINCULACIÓN CON LA COMUNIDAD.</th>
            </tr>
            <tr>
                @foreach ($project->stake_holder as $stake_holder)
                    <td>
                        {{$stake_holder->name}}{{$stake_holder->lastname}}
                    </td>
                    <td>{{$stake_holder->position}} </td>
                    <td colspan="2">{{$stake_holder->type->name}}</td>
                @endforeach
            </tr>
            {{--  pendiente  --}}
        </table>
        <table style="width: 100%;">   
            <tr>
                <td colspan="3">7.MATRIZ DE MARCO LÓGICO (PLAN DE TRABAJO)</td>
            </tr>
            <tr>
                <td>RESUMEN NARRATIVO DE OBJETIVOS</td>
                <td>INDICADORES VERIFICABLES</td>
                <td>MEDIOS DE VERIFICACIÓN.</td>
            </tr>
            
                <tr>
                    <td>PROPÓSITO: (Objetivo General)</td>
                    <td></td>
                    <td></td>
                </tr>
                @foreach ($project->objetive as $objetive)    
                @if ($objetive->type->code=="aims_types_1")
                <tr >
                   <td class="objetiveGeneral">
                    {{$objetive->description}} 
                </td>
                <td class="objetiveGeneral">{{$objetive->indicator}}</td>
                <td class="objetiveGeneral">{{$objetive->means_verification}}</td>
              
                </tr>
                @else
                <style type="text/php">
                    .objetiveGeneral{
                        display:none;
                    }
                </style>
            @endif
            @endforeach
                {{--  <tr>
                    <td>COMPONENTES: (Objetivos Específicos)<br>
                        @if ($objetive->type->code=="aims_types_2")
                            {{$objetive->description}} 
                        </td>
                        <td>{{$objetive->indicator}}</td>
                        <td>{{$objetive->means_verification}}</td>
                        @endif
                </tr>
                <tr>
                    <td>ACTIVIDADES:<br>
                        @if ($objetive->type->code=="aims_types_3")
                            {{$objetive->description}} 
                        </td>
                        <td>{{$objetive->indicator}}</td>
                        <td>{{$objetive->means_verification}}</td>
                        @endif
                    </tr>  --}}
            
        </table>
        {{--  cronograma  pendiente--}}
    </article>
        <div>9.Estrategia de Seguimiento y Evaluación </div>
        <div>10.Bibliografía:
            @if ($project->bibliografia <> null)
                @foreach ($project->bibliografia as $bibliografia)
                    {{$bibliografia}}            
                @endforeach
            @endif
        </div><br>
        <div>11.Responsables:</div><br>
        
            <div class="firmaBloque">
                <div class="firma">
                    <center>
                        ------------------------------------ <br>
                    <strong>Rector</strong> <br>
                    </center>
                    <div>Nombre y apellido</div>
                    <strong>C.I:</strong>
                </div >
                <div class="firma cooVinculacion">
                    <center>
                        ------------------------------------ <br>
                    <strong>COORDINADOR DE VINCULACIÓN</strong> <br>
                    </center>
                    <div>Nombre y apellido</div>
                    <strong>C.I:</strong>
                </div>
                <div class="firma cooCarrera">
                    <center>
                        ------------------------------------ <br>
                        <strong>COORDINADOR DE CARRERA</strong> <br>
                    </center>
                    <div>Nombre y apellido</div>
                    <strong>C.I:</strong>
                </div>
            </div>
            
            <div>
                <div class="firma">
                    <center>
                        ------------------------------------<br>
                        <strong>DOCENTE SUPERVISOR</strong> <br>
                        </center>
                        <div>Nombre y apellido</div>
                        <strong>C.I:</strong>
                </div>
                <div class="firma representanteL">
                    <center>
                        ------------------------------------ <br>
                        <strong>REPRESENTANTE LEGAL INSTITUCIONAL</strong> <br>
                        </center>
                        <div>Nombre y apellido</div>
                        <strong>C.I:</strong>
                </div>
                <div class="firma estudiante">
                    <center>
                        ------------------------------------ <br>
                        <strong>ESTUDIANTE</strong> <br>
                        </center>
                        <div>Nombre y apellido</div>
                        <strong>C.I:</strong>
                </div>
            </div>    
        
       
        

    <article>

    </article>
    <footer>
    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(560, 800, "$PAGE_NUM", $font, 13);
            ');
            
        }
        </script>
    </footer>
</body>
</html>