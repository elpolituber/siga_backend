<!DOCTYPE html>
<html>
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="<center>x</center>-UA-Compatible" content="ie=edge">
    <title>Projecto Vincualcion</title>
    @php
        $years=date("Y",strtotime($project->created_at));
        $premonth=date("m",strtotime($project->created_at));
        $month="mes";
        switch ($premonth) {
            case "1":
            $month="Enero";  
            break;
            case "2":
            $month="Febrero";  
            break;
            case "3":
            $month="Marzo";  
            break;
            case "4":
            $month="Abril";  
            break;
            case "5":
            $month="Mayo";  
            break;
            case "6":
            $month="Junio";  
            break;
            case "7":
            $month="Julio";  
            break;
            case "8":
            $month="Agosto";  
            break;
            case "9":
            $month="Septiempre";  
            break;
            case "10":
            $month="Octubre";  
            break;
            case "11":
            $month="Noviembre";  
            break;
            case "12":
            $month="Diciembre";  
            break;
        }
    @endphp
    <style>
        .page-break {
            page-break-after: always;
            border: none;
            margin: 0;
            padding: 0;
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
             background: rgb(250, 249, 247);  
            width: 735px;
            height: 180px;
            position: relative;
            top:100px;
            bottom: 0px ;
            left:-50px ;
            right: ; 
        }
        .firmaBloque2{
            position: relative;
            top:130px;
            bottom: 0px;
            left:-50px ;
            right: ;
        }

        .firma{
            width: 220px;
            height: 110px;
            background: rgb(253, 253, 253);
            
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
        
        @page {
            margin: 0cm 0cm;
            font-family: 'Times New Roman';
            text-align: justify;
        }
        
        body {
            margin: 2.2cm 2.7cm 2.9cm;
            background-color: #fafcfad2;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2.5cm;
            background-color: #f7f6f278;
            color: white;
            /* text-align: center; */
            
        }
        main{
            position: relative;
            top: 1cm;
            left: 0cm;
            right: 0cm;
            margin-bottom: -0.7cm;
            background-color: #fcfdf9ec;
        
        }
        .realto{
            background-color: #b4b9e7ec;   
        }
        .cabezaIzquierda{
            position: relative;
            top: 0.2cm;
            left: 1.7cm;
            right: 0px;
            bottom: 0px;
            background-color:rgb(253, 253, 253);
        }
        .cabezaDerecha{
            position: relative;
            top: 0.2cm;
            left: 17cm;
            right: 0px;
            bottom: 0px;
            background-color:rgb(248, 248, 251);
        }
        footer {
         position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2.2cm;
            background-color:rgb(253, 251, 251);
            color: rgba(255, 255, 255, 0.911);
            
            text-align: center;
         
        }
        .pieIzquierda{
            position: relative;
            text-align: right;
            padding: 30px;
             
        }
        .pieIzquierda{
            position: relative;
            text-align: left;
            padding: 30px;
             
        }

        /* fomato de letras */
        .kursiva{
            font-style: italic;
        }
        

        .logo{
            width:90px;
            height:90px;
            margin: auto;
            display: block;
            opacity: 0.5;
           }
        .logo2{
            position:relative;
            width:150px;
            height:150px;
            margin: auto;
        }
        .let span {
            text-transform: lowercase;
        }
        
        .let span:first-letter {
            text-transform: uppercase;
        }
        .separacion {
            /*padding: 5px;*/
            /* Alto de las celdas */
            height: 60px;
        }
    </style>

</head>
<body>  
     <!-- Nota especia siempre debe llenarse la freqcuenci a de actividades -->
     <header class="header">       
        <div class="cabezaIzquierda ">
            <img class="logo" 
            src="{{asset('storage').'/'.$project->career->institution->logo}}" 
            alt="izquierda" class="linea"/>
        </div>
        <div class="cabezaDerecha">
            <img class="logo"
             src="{{asset('/').$project->beneficiaryInstitution->logo}}" alt="derecha" class="linea"/>
        </div>
    </header>
    <article class="page-break">
        <center>
            <h1>INSTITUTO TECNOLÓGICO SUPERIOR</h1>
            <div class="logo2">
                <img  class="logo2"
                src="{{asset('storage').'/'.$project->career->institution->logo}}">
            </div>
            <br>
            <h3> DEPARTAMENTO DE VINCULACIÓN CON LA SOCIEDAD</h3>
        </center>
        
        <h3>CARRERA:{{$project->career->name}}</h3>
        
        <h3>NOMBRE DEL PROYECTO:{{$project->title}} </h3>
        
        <h3>AUTOR:
            @if($project->create_by <> null)
            {{$project->create_by->first_name}} {{$project->create_by->first_lastname}}
            @endif
        </h3>
        <center>
        
        <h3>INSTITUCIÓN  BENEFICIARIA:{{$project->beneficiaryInstitution->name}}<br></h3>
        <h3>COORDINADOR(ES) INSTITUCIÓN BENEFICIARIA: 
            @foreach ($project->participant as $participants)
                @if ($participants->function <> null)
                 @if ($participants->function->code=="FUNTION_2")
                 {{$participants->user->first_name}} {{$participants->user->first_lastname}} <br>
                 @endif
                 @endif
            @endforeach
            
        </h3>
        <h4>CODIGO DEL PROYECTO: {{$project->code}}</h4>
        <h4>Quito-Ecuador</h4>   
            <h4>{{$month}} - {{$years}}</h4>
        </center> 
    </article>
    <main>
    <article>
        <table style="width:100%;" class="position">
            <tr >
              <td colspan="6" class="realto"> <strong> 1.PROYECTO/ACTIVIDAD </strong></td>  
            </tr>         
                
            <tr>
                <td colspan="3"><strong>TITULO:</strong> {{$project->title}}</td>
                <td colspan="3"><strong>CODIGO:</strong> {{$project->code}}</td>
            </tr>
            <tr>
                <td colspan="6"><strong>CARRERA:</strong>{{$project->career->name}}</td>    
            </tr>
            <tr>
               <td colspan="2"><strong>Ciclo:</strong>
                    {{$project->cycle}}
                   
                </td>
               <td colspan="1"><strong>Presencia</strong></td>
               <td colspan="1">
                    @if ($project->career->modality->name =='PRESENCIAL')
                        <center> <center>x</center> </center>  
                    @endif
               </td>   
               <td colspan="1"><strong>Dual</strong></td>
               <td colspan="1">
                @if ($project->career->modality->name =='DUAL' ||
                    $project->career->modality->name =='DISTANCIA')
                    <center> <center>x</center> </center>  
                @endif
               </td> 
            </tr>
            <tr>
                <td colspan="2"><strong>COBERTURA Y LOCALIZACIÓN</strong></td>
                <td colspan="4">
                    Provincia:{{$project->location->parent->parent->name}}/Cantón 
                    {{$project->location->parent->name}}/Ciudad 
                    {{$project->location->name}} </td>
            </tr>
            <tr>
                <td colspan="3"><strong>PLAZO DE EJECUCION</strong></td>
                <td colspan="3"><center><strong>{{$project->lead_time}}</strong></center></td>
            </tr>
            <tr>
                <td><strong>FECHA DE PRESENTACIÓN</strong></td>
                <td><span style="font-size: 12px; text-align: center">{{$project->delivery_date}}</span></td>
                <td><strong>FECHA INICIO</strong></td>
                <td><span style="font-size: 12px; text-align: center">{{$project->start_date}}</span></td>
                <td><strong>FECHA FINAL</strong></td>
                <td><span style="font-size: 12px; text-align: center">{{$project->end_date}}</span></td>
            </tr>
            
        </table>   
        <table style="width:100%;" class="position">    
            <tr>
                <td colspan="4" class="realto"><strong>FRECUENCIA DE LAS ACTIVIDADES</strong></td>
            </tr>
            <tr>
                <td><strong>DIARIA</strong></td>
                <td><strong>SEMANAL</strong></td>
                <td><strong>QUINCENAL</strong></td>
                <td><strong>MENSUAL</strong></td>
            </tr>
            @if($project->frequency_activities_id <> null)
            <tr>
                <td>@if ($project->frequency_activities->code =="FRAQUENCY_ACTIVITY_1")
                    <center>x</center>
                @endif</td>
                <td>@if ($project->frequency_activities->code =="FRAQUENCY_ACTIVITY_2")
                    <center>x</center>
                @endif</td>
                <td>@if ($project->frequency_activities->code =="FRAQUENCY_ACTIVITY_3")
                    <center>x</center>
                @endif</td>
                <td>@if ($project->frequency_activities->code =="FRAQUENCY_ACTIVITY_4")
                    <center>x</center>
                @endif</td>
            </tr>
            @endif
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
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "BONDING_ACTIVITIES_7")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Educación</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_1")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Ambiental</td>
                <td id="LINKAGE_AXES_1">
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_1")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>    
                
                
            </tr>
            <tr>          
                <td>Acuerdo</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "BONDING_ACTIVITIES_2")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Salud</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_2")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Interculturalidad/género</td>
                <td id="LINKAGE_AXES_2">
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_2")
                    <center>x</center>
                    @endif    
                    @endforeach    
                </td>
            </tr>
            <tr>                 
                <td>Proyecto de vinculación propio IST JME</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "BONDING_ACTIVITIES_3")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Saneamiento Ambiental</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_3")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Investigativo Académico</td>
                <td id="LINKAGE_AXES_3">
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_3")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Programa de capacitación a la comunidad</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "BONDING_ACTIVITIES_4")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Desarrollo Social</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_4")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Desarrollo social, comunitario</td>
                <td id="LINKAGE_AXES_4"> 
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_4")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
            </tr>
            <tr>                 
                <td>Practicas Vinculación con la comunidad</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "BONDING_ACTIVITIES_5")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Apoyo Productivo</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_5")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Desarrollo local</td>
                <td id="LINKAGE_AXES_5">
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_5")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
            </tr>
            <tr>    
                <td>Investigación</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "BONDING_ACTIVITIES_1")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Agricultura, Ganadería y Pesca</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_6")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Economía popular y solidaria</td>
                <td id="LINKAGE_AXES_6">
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_6")
                    <center>x</center>
                    @endif    
                    @endforeach    
                </td>
            </tr>
            <tr>         
                <td></td>
                <td></td>
                <td>Vivienda</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_7")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Desarrollo técnico y tecnológico</td>
                <td id="LINKAGE_AXES_7">
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_7")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>                 
                <td>Protección del medio ambiente y desastres naturales</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_8")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Innovación</td>
                <td id="LINKAGE_AXES_8"> 
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_8")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>                 
                <td>Recursos naturales y energía</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_9")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Responsabilidad social universitaria</td>
                <td id="LINKAGE_AXES_9"> 
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_9")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>                 
                <td>Transporte, comunicación y viabilidad</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_10")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td>Matriz productiva.</td>
                <td id="LINKAGE_AXES_10">
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_10")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
            </tr>
            <tr>
                 <td></td>
                 <td></td>
                 <td>Desarrollo Urbano</td>
                 <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_11")
                    <center>x</center>
                    @endif    
                    @endforeach
                 </td>
                 <td></td>
                 <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Turismo</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_12")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Cultura</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_13")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Desarrollo de investigación científica</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_14")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Deportes</td>
                <td>
                    @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_15")
                    <center>x</center>
                    @endif    
                    @endforeach
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td>Otros</td>
            <td>
                @foreach ($project->activities as $item)
                    @if ($item->type->code== "BONDING_ACTIVITIES_8")
                    <center>x</center>
                    @endif    
                    @endforeach
            </td>
            <td>Justicia y Seguridad</td>
            <td>
                @foreach ($project->activities as $item)
                    @if ($item->type->code== "RESEARCH_AREAS_16")
                    <center>x</center>
                    @endif    
                    @endforeach
            </td>
            <td>Otros</td>
            <td id="LINKAGE_AXES_11">
                @foreach ($project->activities as $item)
                    @if ($item->type->code== "LINKAGE_AXES_11")
                    <center>x</center>
                    @endif    
                    @endforeach
            </td>
            </tr>
            
        </table>
        <table style="width:100%;" class="position">
            <tr>
                <td class="realto"><strong>2.DESCRIPCION GENERAL  DEL PROYECTO</strong></td>
            </tr>
            <tr >
                <td class="separacion">{{$project->description}}</td>
            </tr>
            <tr>
                <td class="realto"><strong>3.ANALISIS SITUACIONAL</strong></td>
            </tr>
            <tr>
                <td class="separacion">{{$project->situational_analysis}}</td>
            </tr>
            <tr>
                <td class="realto"><strong>4.JUSTIFICACIÓN</strong></td>
            </tr>
            <tr>
                <td class="separacion">{{$project->justification}}</td>
            </tr>
            <tr>
                <td class="realto"><strong>5.PARTICIPANTES</strong></td>
            </tr>
        </table>
        
        <table style="width:100%;" class="position">
            <tr>
                <th>Docentes</th>
                <th>Nombre </th>
                <th>Horario de trabajo para el proyecto.</th>
                <th>Funciones asignadas</th>
            </tr>
           @foreach ($project->participant as $participants)
                 @if ($participants->type->code=="CARGO_7")
                    <tr>     
                        <!-- <td >{{$participants->position}}</td> -->
                        <td colspan="2">
                            <center>{{$participants->position}}. {{$participants->user->first_name}}    {{$participants->user->first_lastname}}</center>
                        </td>
                        <td>
                            <center>
                                {{$participants->working_hours}}
                            </center> 
                        </td>
                        <td><span class="let"><p>{{$participants->function->name}}</p></span></td>
                    </tr>
                @endif     
            @endforeach 
            {{--  pendiante  --}}
        </table>
        <table style="width:100%;" class="position">
            <tr>
                <td colspan="4"><strong>Estudiantes:</strong></td>

            </tr>
            <tr>
                <th>Nombre apellido</th>
                <th>CI </th>
                <th>Especialidad</th>
                <th>Funciones asignadas/Con horas de trabajo</th>
            </tr>
           @foreach ($project->participant as $participants)
                 @if ($participants->type->code=="CARGO_6")
                    <tr>     
                        <td>{{$participants->user->first_name}} {{$participants->user->first_lastname}}</td>
                        <td>{{$participants->user->identification}}</td>
                        <td>{{$project->career->name}}</td>
                        <td><span class="let"><p>{{$participants->position}} / {{$participants->working_hours}}<p></span></td>
                    </tr>
                @endif     
            @endforeach 
            {{--  pendiante  --}}
        </table>
        <table style="width: 100%;">
            <tr>
                <td class="realto" colspan="4"><strong>6.ORGANIZACIÓN/ INSTITUCIÓN BENEFICIARIA</strong></td>
            </tr>
            <tr>
                <td>
                    <strong>Nombre completo organización/institución beneficiaria</strong>
                </td>
                <td>
                    <strong>Provincia</strong>
                </td>
                <td>
                    <strong>Cantón</strong>
                </td>
                <td>
                    <strong>Parroquia</strong>
                </td>
            </tr>
            
            <tr>
                <td>{{$project->beneficiaryInstitution->name}}.</td>
                <td>
                     {{$project->beneficiaryInstitution->location->parent->parent->name}}  
                </td>
                <td>
                    
                     {{$project->beneficiaryInstitution->location->parent->name}}  
                </td>
                <td>
                    
                     {{$project->beneficiaryInstitution->parroquia}}  
                </td>

            </tr>
            <tr>
                <td ><strong>Lugar de ubicación</strong></td>
                <td><strong>Beneficiarios Directos</strong></td>
                <td colspan="2"><strong>Beneficiarios Indirectos</strong></td>
            </tr>
            <tr>
                <td>{{$project->beneficiaryInstitution->address}}</td>
                <td>
                    {{$project->direct_beneficiaries}}<br>
                </td>
                <td colspan="2">
                    {{$project->indirect_beneficiaries}}<br>
                </td>
            </tr>{{-- este cuadro hay que tener ojo en caso de actualizacion--}}
        </table >
        
            <table style="width: 100%;">
            <tr>
                <th style="font-size: x-small">NOMBRES Y APELLIDOS DE COORDINADOR(ES) DE INSTITUCIÓN BENEFICIARIA:</th>
                <th style="font-size: x-small">CARGO O FUNCIÓN EN LA INSTITUCIÓN BENEFICIARIA.</th>
                <th style="font-size: x-small">FUNCIÓN QUE CUMPLE EN EL PROYECTO DE VINCULACIÓN CON LA COMUNIDAD.</th>
            </tr>
            @foreach ($project->stake_holder as $stake_holder)
            <tr>
                <td>
                    {{$stake_holder->name}} {{$stake_holder->lastname}}
                </td>
                <td>{{$stake_holder->position}} </td>
                <td>{{$stake_holder->type->name}}</td>
            {{--  $project->stake_holder  --}}
            </tr>
            @endforeach
            {{--  pendiente  --}}
        </table>
        <table style="width: 100%;">   
            <tr>
                <th class="realto" colspan="3"><strong>7.MATRIZ DE MARCO LÓGICO (PLAN DE TRABAJO)</strong></th>
            </tr>
            <tr>
                <th>RESUMEN NARRATIVO DE OBJETIVOS</th>
                <th>INDICADORES VERIFICABLES</th>
                <th>MEDIOS DE VERIFICACIÓN.</th>
            </tr>
            
                <tr>
                    <th>PROPÓSITO: (Objetivo General)</th>
                    <td></td>
                    <td></td>
                </tr>
                @foreach ($project->objetive as $objetive)    
                @if ($objetive->type->code=="AIMS_TYPES_1")
                    <tr>
                    <td class="objetiveGeneral">
                        {{$objetive->description}} 
                    </td>
                    <td class="objetiveGeneral">{{$objetive->indicator}}</td>
                    <td class="objetiveGeneral">{{$objetive->means_verification}}</td>
                
                    </tr>
                 @endif
            @endforeach
            <tr>
                <th>COMPONENTES: (Objetivos Específicos)</th>
                    <td></td>
                    <td></td>
            </tr>
            @foreach ($project->objetive as $objetive)          
                @if ($objetive->type->code=="AIMS_TYPES_2")  
                <tr>
                    <td>
                        {{$objetive->description}} 
                    </td>
                    <td>
                        {{$objetive->indicator}}
                    </td>
                    <td>
                        {{$objetive->means_verification}}
                    </td>    
                </tr>
             @endif            
            @endforeach
            <tr>
                <th>ACTIVIDADES:</th>
                    <td></td>
                    <td></td>
            </tr>
            @foreach ($project->objetive as $objetive)    
                @if ($objetive->type->code=="AIMS_TYPES_3")
                    <tr>
                        <td>
                        
                                {{$objetive->description}} 
                        </td>
                        <td>{{$objetive->indicator}}</td>
                        <td>{{$objetive->means_verification}}</td>
                    
                    </tr>
                @endif
            @endforeach
            <tr>
                <th>RESULTADOS:</th>
                    <td></td>
                    <td></td>
            </tr>
            @foreach ($project->objetive as $objetive)    
                @if ($objetive->type->code=="AIMS_TYPES_4")
                    <tr>
                        <td>
                            {{$objetive->description}} 
                        </td>
                        <td>{{$objetive->indicator}}</td>
                        <td>{{$objetive->means_verification}}</td>
                    
                    </tr>
                @endif
            @endforeach
        </table>
        {{--  cronograma  pendiente en mi legado--}}
    </article>
    <br>
</main>
{{--<main>
     <article >
        <div><strong>9.Estrategia de Seguimiento y Evaluación</strong> </div>
        @if ($project->bibliografia <> null)
        <div>10.Bibliografía:
                    {{$project->bibliografia}}                      
        </div>
        @endif<br>
        <div><strong>11.Responsables:</strong></div><br>      
            <div class="firmaBloque">
                <div class="firma">
                    <center>
                        ------------------------------------ <br>
                    <strong>Rector</strong> <br>
                    @foreach ($project->autorities as $autorities)
                    @if ($autorities->type->code=="CARGO_1" )
                    <div>
                        {{$project->autorities->user->first_name}} {{$project->autorities->user->lastname}}                            
                    </div>
                    <strong>C.I:{{$project->autorities->user->identification}}</strong>
                    @endif
                    @endforeach
                    </center>
                </div >
                <div class="firma cooVinculacion">
                    <center>
                        ------------------------------------ <br>
                    <strong>COORDINADOR DE VINCULACIÓN</strong> <br>
                    @foreach ($project->autorities as $autorities)
                    @if ($autorities->type->code=="CARGO_3" )
                    <div>
                        {{$project->autorities->user->first_name}} {{$project->autorities->user->lastname}}                            
                    </div>
                    <strong>C.I:{{$project->autorities->user->identification}}</strong>
                    @endif
                    @endforeach
                    </center>
                </div>
                <div class="firma cooCarrera">
                    <center>
                        ------------------------------------ <br>
                        <strong>COORDINADOR DE CARRERA</strong> <br>
                    
                    @foreach ($project->autorities as $autorities)
                    @if ($autorities->type->code=="CARGO_4" )
                    <div>
                        {{$project->autorities->user->first_name}} {{$project->autorities->user->lastname}}                            
                    </div>
                    <strong>C.I:{{$project->autorities->user->identification}}</strong>
                    @endif
                    @endforeach
                    </center>   
                </div>
            </div>         
            <div class="firmaBloque2">
                <div class="firma">
                    <center>
                        ------------------------------------<br>
                        <strong>DOCENTE SUPERVISOR</strong> <br>
                        
                        <div>{{$project->create_by->first_name}} {{$project->create_by->first_lastname}}</div>
                        <strong>C.I: {{$project->create_by->identification}} </strong>
                    </center>
                </div>
                <div class="firma representanteL">
                    <center>
                        ------------------------------------ <br>
                        <strong>REPRESENTANTE LEGAL INSTITUCIONAL</strong> <br>
                       
                        @foreach ($project->stake_holder as $stake_holder)
                        @if ($stake_holder->type->code=="CARGO_8" )
                        <div>
                            {{$stake_holder->name}} {{$stake_holder->lastname}}
                        </div>
                        <strong>C.I:{{$stake_holder->identidication}}</strong>
                        @endif
                        @endforeach
                    </center>    
                </div>
                <div class="firma estudiante">
                    <center>
                        ------------------------------------ <br>
                        <strong>ESTUDIANTE</strong> <br>
                        
                        @foreach ($project->participant as $participants)
                        {{-- @if ($participants->funtion=="CARGO_9" )
                        <div>
                            {{$participants->user->first_name}} {{$participants->user->lastname}}
                        </div>
                        <strong>C.I:{{$participants->user->identification}}</strong>
                        @endif 
                        @endforeach
                    </center>
                </div>
            </div>    
    </article>
</main>--}}
    <footer>
        <script type="text/php">
            if ( isset($pdf) ) {
                $pdf->page_script('
                    $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                    $pdf->text(560, 800, "$PAGE_NUM", $font, 12);
                ');
            }
        </script>
    </footer>
    {{--   //$pdf->text(270, 930, "Pagina $PAGE_NUM de $PAGE_COUNT", $font, 10);
                     --}}
</body>
</html>