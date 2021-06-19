<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Convenio de vincualcion pdf</title>

{{--  logo 
    //dominio =http://siga.yavirac.edu.ec/public
    /storage/{{project->career->institution->logo}}
    locatilzaciones de de pais provicia canton parroquia typo
    location{
        code
        nombre
        type=>pais provincia canton
        parent_id
    }
    ignug
   modelo public function children()
    {
        return $this->hasMany(Location::class, 'parent_id');
    }
--}}
<body>
    <style>
        .pagenum:before {
            content: counter(page);
        }
        @page {
            margin: 0cm 0cm;
            font-family: 'Times New Roman';
            text-align: justify;
        }
        
        body {
            margin: 2.3cm 2cm 2.7cm;
            background-color: #fcfdfcec;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2.5cm;
            background-color: #f7f1f1ec;
            color: white;
            /* text-align: center; */
            
        }
        main{
            margin-bottom: 1cm;
            background-color: #f6f7f1ec;
            line-height : 20px;
        }
        .trheader,.tdheader{
            padding: 20px;
            text-align:center;
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
            height: 2.1cm;
            background-color:rgb(246, 244, 244);
            color: rgba(255, 255, 255, 0.911);
            
            text-align: center;
         
        }
        .pieIzquierda{
            position: relative;
            text-align: right;
            padding: 30px;
             
        }
        
        /* fomato de letras */
        .kursiva{
            font-style: italic;
        }
        th,td{
            padding: 50px;
        }
        th{
            text-align: left,justify;
        }
        .logo{
            width:90px;
            height:90px;
            margin: auto;
            display: block;
            opacity: 0.5;
           }
    </style>
    <header class="header">       
        <!-- /institutions/1.png -->
        <div class="cabezaIzquierda ">
            <img class="logo" 
            src="{{asset('storage').'/'.$data->career->institution->logo}}" 
            alt="izquierda" class="linea"/>
        </div>
        <div class="cabezaDerecha">
            <img class="logo"
             src="{{asset('/').$data->beneficiaryInstitution->logo}}" alt="derecha" class="linea"/>
        </div>
    </header>

    <h3 style="text-align: center">{{$data->code}}<br>
        CONVENIO DE VINCULACIÓN CON LA SOCIEDAD  
        {{$data->career->institution->name}} Y {{$data->beneficiaryInstitution->name}}              
    </h3>
    <main>
        <article class="parrafo1">

            <p>Comparecen a la celebración del presente Convenio, por una parte el INSTITUTO TECNOLÓGICO SUPERIOR {{$data->career->institution->name}}, legalmente representado por el @foreach ($data->autorities as $item)
                @if($item->type->code == "CARGO_1")
                {{$data->autorities->user->first_name}}{{$data->autorities->user->second_name}}{{$data->autorities->user->first_lastname}}{{$data->autorities->user->second_lastname}} @else a  @endif @endforeach
                , en su calidad de Rector, de conformidad con lo establecido en la Resolución No. XXXXX y Acción de Personal No. Xxx de xx de xxx de xxx; delegado del Secretario de Educación Superior, Ciencia, Tecnología e Innovación, para suscribir el presente instrumento conforme al Acuerdo No. 2020-048 de 15 de mayo de 2020, , a quien en adelante para los efectos del presente instrumento se denominará “INSTITUTO”; y, por otra parte la empresa {{$data->beneficiaryInstitution->name}} con RUC No. {{$data->beneficiaryInstitution->ruc}}, representada legalmente por 
                @foreach ($data->stake_holder as $stake_holder)
                @if ($stake_holder->type->code=="CARGO_8" )
                <div>
                    {{$stake_holder->name}} {{$stake_holder->lastname}}
                </div>
                @endif 
                @endforeach en calidad de Gerente General a quien en adelante y para los efectos del presente instrumento se denominará “ENTIDAD RECEPTORA”.
                Las partes libre y voluntariamente, acuerdan celebrar el presente convenio al tenor de las siguientes cláusulas:
            </p>
        </article >
        <article class="clausulas">
            <h4>CLÁUSULA PRIMERA.- ANTECEDENTES:</h4>
                <p>
                    1. El artículo 26 de la Constitución de la República del Ecuador determina:<span class="kursiva"> “La educación es un derecho de las personas a lo largo de la vida y un deber ineludible e inexcusable del Estado. Constituye un área prioritaria de la política pública y de la inversión estatal, garantía de la igualdad e inclusión social y condición indispensable para el buen vivir; las personas, la familia y la sociedad tienen el derecho y la responsabilidad de participar en el proceso educativo”</span>;
                </p>
                <p>2. El artículo 28 de la Carta Suprema establece:<span class="kursiva"> “La educación responderá al interés público y no estará al servicio de intereses individuales y corporativos. Se garantizará el acceso universal, permanencia, movilidad y egreso sin discriminación alguna y la obligatoriedad en el nivel inicial, básico y bachillerato o su equivalente. Es derecho de toda persona y comunidad interactuar entre culturas y participar en una sociedad que aprende. El Estado promoverá el diálogo intercultural en sus múltiples dimensiones. El aprendizaje se desarrollará de forma escolarizada y no escolarizada. La educación pública será universal y laica en todos sus niveles, y gratuita hasta el tercer nivel de educación superior inclusive”</span>;
                </p>
                <p>3. El artículo 350 de la Constitución establece que:<span class="kursiva"> “El sistema de educación superior tiene como finalidad la formación académica y profesional con visión científica y humanista; la investigación científica y tecnológica; la innovación, promoción, desarrollo y difusión de los saberes y las culturas; la construcción de soluciones para los problemas del país, en relación con los objetivos del régimen de desarrollo”</span>;
                </p>
                <p>4. El artículo 352 de la Carta Suprema dispone que:<span class="kursiva">“El sistema de educación superior estará integrado por universidades y escuelas politécnicas; institutos superiores técnicos, tecnológicos y pedagógicos; y, conservatorios de música y artes, debidamente acreditados y evaluados. / Estas instituciones, sean públicas o particulares, no tendrán fines de lucro”;</span>
                </p>    
                <p>5.  El artículo 13 de la Ley Orgánica de Educación Superior determina como una de las funciones del Sistema de Educación Superior es:<span class="kursiva"> “a) Garantizar el derecho a la educación superior mediante la docencia, la investigación y su vinculación con la sociedad, y asegurar crecientes niveles de calidad, excelencia académica y pertinencia”</span>;
                </p> 
                <p> 6.  El artículo 125 de la Ley Orgánica de Educación Superior establece que:<span class="kursiva"> “Las instituciones del Sistema de Educación Superior realizarán programas y cursos de vinculación  con las sociedad guiados por el personal académico (…)”</span>;
                </p>   
                <p>  7.  El artículo 182 de la Ley Orgánica de Educación Superior dispone que:<span class="kursiva"> “La Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, es el órgano que tiene por objeto ejercer la rectoría de la política pública de educación superior y coordinar acciones entre la Función Ejecutiva y las instituciones del Sistema de Educación Superior. Estará dirigida por el Secretario Nacional de Educación Superior, Ciencia, Tecnología e Innovación de Educación Superior, designado por el Presidente de la República. Esta Secretaría Nacional contará con el personal necesario para su funcionamiento”</span>;
                </p>    
                <p>  8. El primer inciso artículo 50 de la reforma del Reglamento de Régimen Académico emitido mediante resolución RPC-SO-08-No.111-2019, el 27 de febrero del 2019 manifiesta que: <span class="kursiva"> “La vinculación con la sociedad hace referencia a la planificación, ejecución y difusión de actividades que garantizan la participación efectiva en la sociedad y responsabilidad social de las instituciones del Sistema de Educación Superior con el fin de contribuir a la solución de las necesidades y problemáticas del entorno desde el ámbito académico e investigativo. La vinculación con la sociedad deberá articularse al resto de funciones sustantivas, oferta académica, dominios académicos, investigación, formación y extensión de las IES en cumplimiento del principio de pertinencia. En el marco del desarrollo de investigación científica de las IES, se considerará como vinculación con la sociedad a las actividades de divulgación científica, aportes a la mejora y actualización de los planes de desarrollo local, regional y nacional, y la transferencia de conocimiento y tecnología. La divulgación científica consiste en transmitir resultados, avances, ideas, hipótesis, teorías, conceptos, y en general cualquier actividad científica o tecnológica a la sociedad; utilizando los canales, recursos y lenguajes adecuados para que ésta los pueda comprender y asimilar la sociedad”</span>.</p>
                <p>
                9. El artículo 51 del mencionado Reglamento respecto a la pertinencia de la vinculación determina:<span class="kursiva"> “La vinculación con la sociedad promueve la transformación social, difusión y devolución de conocimientos académicos, científicos y artísticos, desde un enfoque de derechos, equidad y responsabilidad social. Las IES, a través de su planificación estratégica-operativa y oferta académica, evidenciarán la articulación de las actividades de vinculación con la sociedad con las potencialidades y necesidades del  contexto local, regional, nacional e internacional, los desafíos de las nuevas tendencias de la ciencia, la tecnología, la innovación, la profesión, el desarrollo sustentable, el arte y la cultura”</span>.   
                </p>
                <p>
                10. El artículo 52 del Reglamento de Régimen Académico establece en lo referente a la “Planificación de la vinculación con la sociedad.- <span class="kursiva">“La planificación de la función de vinculación con la sociedad, podrá estar determinada en las siguientes líneas operativas: a) Educación continua. b) Prácticas preprofesionales; c) Proyectos y servicios especializados; d) Investigación; e) Divulgación y resultados de aplicación de conocimientos científicos; f) Ejecución de proyectos de innovación; y, g) Ejecución de proyectos de servicios comunitarios o sociales. Las IES podrán crear instancias institucionales específicas, incorporar personal académico y establecer alianzas estratégicas de cooperación interinstitucional para gestionar  la vinculación con la sociedad”</span>. 
                </p>
                <p>
                    11. A través de Acuerdo No. 2012-065, publicado en el Registro Oficial No. 834, de 20 de noviembre de 2012, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, declaró a: <span class="kursiva">“(…) los institutos superiores técnicos, tecnológicos, pedagógicos, de artes y conservatorios superiores de música públicos, como entidades operativas desconcentradas de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación (…)”</span>; entre los cuales consta el Instituto Tecnológico Superior {{$data->career->institution->name}}.
                </p>
                <p>
                    12. A través de Acuerdo No. 2016-118, de 25 de julio de 2016, con su posterior reforma, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, determinó a favor de los rectores y rectoras de los Institutos Superiores Técnicos, Tecnológicos, Pedagógicos, de Artes y los Conservatorios Superiores Públicos; entre otras atribuciones y obligaciones las siguientes:<span class="kursiva"> “Artículo 1.- (…)  la suscripción, modificación y extinción de los convenios que tengan por objeto la realización de programas de pasantías y/o prácticas pre profesionales; implementación de carreras de modalidad dual que garanticen la gestión del aprendizaje práctico con tutorías profesionales y académicas integrales in situ; uso gratuito de instalaciones para beneficio de institutos públicos; y la implementación de proyectos de vinculación con la sociedad, y/o convenios de cooperación a celebrarse entre los mencionados institutos y las diferentes personas naturales y jurídicas nacionales, con la finalidad fortalecer  la educación técnica y tecnológica pública del Ecuador. (…) Artículo 6.- Los rectores y rectoras de los institutos superiores técnicos, tecnológicos, pedagógicos, de artes y conservatorios superiores públicos, usarán obligatoriamente las plantillas de convenios autorizadas por la Coordinación General de Asesoría Jurídica de esta Cartera de Estado para la suscripción de los actos jurídicos mencionados en el artículo 1 del presente Acuerdo”</span>; 
                </p>
                <p>
                    
                      13. El Instituto Tecnológico Superior {{$data->career->institution->name}}, ubicado en la provincia de {{--{{$data->location->name}} --}}es una Institución de Educación Superior Pública con licencia de funcionamiento otorgada mediante Acuerdo No. XXX de fecha xx de xx de xx, conferido por xxxxxxxxxxxxx, que se dedica a la formación de profesionales de nivel tecnológico;  
                </p>
                <p>
                    14. Mediante acción de personal No. XXXXXXXX, de fecha XX de XXXX, la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, otorgó el nombramiento al XXXXXXXXXXXXX, portador de la cédula de ciudadanía No. XXXXXXXXXXX en calidad de Rector del Instituto Tecnológico Superior XXXXXXXXXXXX posesionado en sus funciones mediante acto administrativo por el periodo comprendido entre el 20XX y el 20XX
                </p>
                <p>
                    15.El {{$data->career->institution->name}}, ubicado en la ciudad de  {{$data->location->name}}, provincia de {{$data->location->parent->parent->name}}, es una Institución de Educación Superior Pública, con licencia de funcionamiento otorgada mediante Acuerdo Nro. Xxx y registro institucional Nro. Xxxxx conferido por el Consejo de Educación Superior CONESUP, que se dedica a la formación de profesionales de nivel tecnológico.;
                </p>
                <p>
                    16. Mediante Informe Técnico Académico de Viabilidad para la firma de Convenio No. Xxxxxx de fecha xx de xxxxxxxx de 202x, se concluye que: “Conclusiones y Recomendaciones:”.
                </p>
                <p>
                    17. Mediante memorando No. SENESCYT-xx-2020-xxxxx-M del fecha xx de xxxxxxxxx del 202x8, el xxxxxxxxxx, Coordinador/a Zonal (zonas 1,2,4,5,6,7,8)/  Subsecretario de Formación Técnica y Tecnológica (en el caso de zona 3 y 9), aprueba el Informe Técnico Nro. XXXXXXXXXXXXXX de xx de xxxxxxxxx  de 202x, para la suscripción del Convenio entre el {{$data->beneficiaryInstitution->name}} y el Instituto Tecnológico Superior {{$data->career->institution->name}}.
                </p>
                <p>
                    18. Con los antecedentes expuestos, el Instituto Tecnológico Superior {{$data->career->institution->name}} y el  {{$data->beneficiaryInstitution->name}}, acuerdan suscribir el presente convenio referente a la implementación de un programa de vinculación con la colectividad que versará sobre el proyecto que tiene como objetivo: <br>
                    @foreach ($data->objetive as $objetive) 
                    @if ($objetive->type->code=="AIMS_TYPES_1" || $objetive->type->code=="AIMS_TYPES_2")
                        ”{{$objetive['description']}}”<br>    
                    @endif   
                    @endforeach, por parte de las carreras  de {{$data->career->name}}.
                </p>
            </article>
                
        
        <article class="clausula2">
            <h4>CLÁUSULA SEGUNDA.- OBJETO:</h4>
            <p>
                Por medio del presente convenio, las partes, en el ámbito de sus competencias, se comprometen a realizar la implementación del proyecto de vinculación con la colectividad propuesto por el INSTITUTO, referente a {{$data->title}}. 
            </p>
        </article>
        <article class="clausula3">
            <h4>CLÁUSULA TERCERA.- OBLIGACIONES DE LAS PARTES:</h4>
            <h4>3.1 DEL INSTITUTO:</h4>
            <p>
                Son obligaciones del INSTITUTO:
            </p>
            <p>
            a) Designar a los Estudiantes del Instituto Tecnológico Superior {{$data->career->institution->name}}  a fin de que accedan a las actividades de vinculación del {{$data->career->institution->name}} (entidad receptora), remitiendo para el efecto la base de datos con la información que acuerden las partes.
            </p>
            <p>
                b)Asegurar que la unidad de vinculación puedan desarrollar los distintos programas y actividades en las instalaciones existentes del {{$data->career->institution->name}} (entidad receptora),
            </p>
            <p>
                c)Cumplir a cabalidad las horas establecidas para el proyecto.    
            </p>
            <p>
                d)xxxxxx    
            </p>    
            <h4>3.2  DE LA ENTIDAD RECEPTORA:</h4>
            <p>
                Son obligaciones de la ENTIDAD RECEPTORA  las siguientes:
            </p>
            <p>
                a)Permitir que los estudiantes del Instituto Tecnológico Superior {{$data->career->institution->name}} efectúen actividades de vinculación en las instalaciones de acuerdo a los lineamientos pedagógicos establecidos.
            </p>
            <p>
                b)Vincular a los estudiantes a las áreas relacionadas con la carrera que se encuentran cursando la correspondiente actividad de vinculación en sus instalaciones, de acuerdo a las necesidades de la (nombre de la entidad receptora), y de conformidad a la normativa vigente.
            </p>
            <p>
                c)Otorgar el apoyo necesario para el desarrollo de los estudiantes y sus actividades, además de evaluar el desarrollo de las actividades que se asignen a los estudiantes dentro de las actividades de vinculación a realizarse en (nombre de la entidad receptora).
            </p>
            <p>
                d)xxxxx
            </p>
        </article>
        <article class="clausula4">
            <h4>CLÁUSULA CUARTA.- PLAZO:</h4>
            <p>
                El plazo total para la ejecución del presente Convenio es de xxxxx (x) años contados a partir de la fecha de suscripción, mismo que podrá ser renovado previo consentimiento de las partes de manera escrita con un mínimo de quince (15) días de anticipación a la fecha de terminación, para lo cual las partes deberán suscribir el instrumento pertinente prorrogando el mismo y estableciendo, de existir, las nuevas condiciones.
            </p>
        </article>
        <article>
            <h4>CLÁUSULA QUINTA.- RÉGIMEN FINANCIERO:</h4>
            <p>
                Debido a la naturaleza del Convenio, el presente convenio no generará obligaciones financieras recíprocas, erogación alguna ni transferencias de recursos económicos entre las partes; las erogaciones generadas por las acciones ejecutadas por el cumplimiento de las obligaciones contraídas en el presente instrumento serán asumidas con cargo a la Institución que las ejecute.
            </p>    
        </article>
        <article>
            <h4>CLÁUSULA SEXTA.- MODIFICACIONES:</h4> 
            <p>
                Los términos de este convenio podrán ser modificados, ampliados o reformados de mutuo acuerdo durante su vigencia, siempre que dichas modificaciones no alteren la naturaleza ni el objeto del convenio y sean justificadas técnica, legal o académicamente; para cuyo efecto, las PARTES suscribirán el instrumento jurídico pertinente.
                Ninguna modificación podrá ir en detrimento de los derechos de los estudiantes que se encuentren vinculados en la ENTIDAD RECEPTORA.                 
            </p>   
        </article>    
        <article>
            <h4>CLÁUSULA SÉPTIMA.- ADMINISTRADOR DEL CONVENIO:
            </h4>
            <p>
                Para realizar la coordinación, ejecución y seguimiento del presente convenio, las partes designan a los funcionarios que a continuación se detallan para que actúen en calidad de administradores, quienes velarán por la cabal y oportuna ejecución de todas y cada una de las obligaciones derivadas del mismo, así como de su seguimiento y coordinación, debiendo informar por escrito a la máxima autoridad del INSTITUTO y al/la representante de la ENTIDAD RECEPTORA, mediante informes semestrales por cada ciclo académico respecto del cumplimiento del objeto del presente instrumento:
            </p>
            <p>
                Por el <strong> INSTITUTO </strong>se designa a xxxxxxxxxxxxxxxxxx (de preferencia designar al cargo y no a la persona)<br>
    Por la <strong>ENTIDAD RECEPTORA </strong> se designa a xxxxxxxxxxxxxxxxxx (de preferencia designar al cargo y no a la persona)

            </p>
            <p>
                Los Administradores del Convenio a la conclusión del plazo, presentarán un informe consolidado sobre la  ejecución del Convenio.
    En caso de presentarse cambios del personal asignado para la administración, serán designados con la debida antelación, notificando a la parte contraria de manera inmediata y sin que sea necesaria la modificación del texto convencional, a fin de no interrumpir la ejecución y el plazo del convenio; para lo cual el o los administradores salientes deberán presentar un informe de su gestión y la entrega recepción de actividades.

            </p>
        </article>
        <article>
            <h4>CLÁUSULA OCTAVA.- TERMINACIÓN DEL CONVENIO:</h4>
            <p>El presente Convenio terminará por una de las siguientes causas:
            </p>
            <p>
            1. Por vencimiento del plazo;
            </p>
            <p>
                2. Por mutuo acuerdo de las partes, siempre que se evidencie que no pueda continuarse su ejecución por motivos técnicos, económicos, legales, sociales o físicos para lo cual celebrarán una acta de terminación por mutuo acuerdo. La parte que por los motivos antes expuestos no pudiere continuar con la ejecución del presente Convenio, deberá poner en conocimiento de su contraparte su intención de dar por terminado el convenio por mutuo con al menos treinta (30) días de antelación a la fecha de terminación del convenio;
            </p>
            <p>
                3. Por terminación unilateral por incumplimiento de una de las partes, lo cual deberá ser técnicamente y legalmente justificado por quien lo alegaré; y,
            </p>
            <p>
                4. Por fuerza mayor o caso fortuito debidamente justificado por la parte que lo alegare, y notificado dentro del plazo de cuarenta y ocho (48) horas de ocurrido el hecho. En estos casos, se suscribirá la respectiva acta de terminación en el que se determinarán las causas descritas como causales de terminación del Convenio. Se considerarán causas de fuerza mayor o caso fortuito las establecidas en el artículo 30 del Código Civil.
            </p>
            <p>
                La terminación del presente convenio, por cualquiera de las causales antes señaladas, generará la obligación de las partes a suscribir un acta de finiquito; sin embargo, no afectará la conclusión del objeto y las obligaciones que las partes hubieren adquirido y que se encuentren ejecutando en ese momento, salvo que éstas lo acuerden de otra forma. No obstante, la terminación del presente convenio no implicará el pago de indemnización alguna ni entre las partes ni entre éstas y los estudiantes o terceros.
            </p>
        </article>
        <article>
            <h4>CLÁUSULA NOVENA. -INEXISTENCIA DE RELACIÓN LABORAL:</h4>
            <p>
                Por la naturaleza del presente Convenio, se entiende que ninguna de las partes comparecientes, adquieren relación laboral ni de dependencia respecto del personal de la otra institución que trabaje en el cumplimiento de este instrumento.
            </p>
            <p>    
                De igual manera, la ENTIDAD RECEPTORA no tendrá relación laboral ni obligaciones laborales  con los estudiantes que se vinculen a ella, ni éstos tendrán subordinación ni dependencia laboral para con la ENTIDAD RECEPTORA, se aclara que la relación estudiante-entidad receptora es  únicamente de formación académica.

            </p>
        </article>
        <article>
            <h4>CLÁUSULA DÉCIMA.- CONTROVERSIAS:</h4>
            <p>Basándose en la buena fe como fundamental para la ejecución de este convenio para el caso de controversias derivadas de su interpretación, aplicación, ejecución o terminación, las partes aceptan solucionarlas de manera amistosa a través de las máximas autoridades de las instituciones comparecientes; de no ser posible una solución amistosa, las controversias producto del presente Convenio se ventilarán ante el Centro de Mediación de la Procuraduría General del Estado, con sede en la ciudad de xxxxxx., provincia de xxxxxxx; y, a la falta de acuerdo se ventilarán las controversias de conformidad con lo establecido en el Código Orgánico General de Procesos (COGEP); siendo competente para conocer dichas controversias el/la Tribunal de lo Contencioso Administrativo o la Unidad Judicial de lo Contencioso Administrativo.
            </p>
        </article>
        <article>
            <h4>CLÁUSULA DÉCIMA PRIMERA.- DOCUMENTOS HABILITANTES:</h4>
            <p>Forman parte integrante del convenio los siguientes documentos:
            <ol style="list-style-type:lower-alpha">
                <li>Los que acreditan la calidad y capacidad de los comparecientes; y,</li>
                <li>Los documentos a que se hace referencia en la cláusula de antecedentes.</li>
            </ol>
        </p>
        </article>
        <article>
            <h4>CLÁUSULA DÉCIMA SEGUNDA.- COMUNICACIONES Y NOTIFICACIONES:
            </h4>
            <p>Todas las comunicaciones y notificaciones entre las partes, se realizarán por escrito y serán entregadas a las siguientes direcciones:</p>
            <h4>INSTITUTO TECNOLÓGICO SUPERIOR “{{$data->career->institution->name}}”</h4>
            <p>Dirección:                xxxxxx. <br>
                Ciudad-Provincia:   {{$data->location->name}}-{{$data->location->parent->parent->name}} <br>  
                Teléfono:                  XXXXXXXX <br>
                Mail:                          XXXXXXXXXXXXXXXXXXXX</p>
            <h4>CLÁUSULA DÉCIMA SEGUNDA.- COMUNICACIONES Y NOTIFICACIONES:
            </h4>
            <p>Todas las comunicaciones y notificaciones entre las partes, se realizarán por escrito y serán entregadas a las siguientes direcciones:</p>
            <h4>{{$data->beneficiaryInstitution->name}}:</h4>
            <p>Dirección:{{$data->beneficiaryInstitution->address}}   . <br>
                Ciudad-Provincia:{{$data->beneficiaryInstitution->location->name}}-{{$data->beneficiaryInstitution->location->parent->parent->name}}       <br>
                Teléfono:       XXXXXXXX <br>
                Mail:         XXXXXXXXXXXXXXXXXXXX
            </p>
        </article>
        <article>
            <h4>CLÁUSULA DECIMA TERCERA.- ACEPTACIÓN:</h4>
            <p>Libre y voluntariamente, previo el cumplimiento de los requisitos de Ley, los comparecientes expresan su aceptación a todo lo convenido en el presente instrumento, a cuyas estipulaciones se someten, por convenir a sus legítimos intereses institucionales, en fe de lo cual proceden a suscribirlo en cuatro (4) ejemplares de igual tenor y valor jurídico.

                Dado, en la ciudad de xxxxxxxx a los XXX días del mes de XXX de 202X.  
                </p>
        </article>
        <table>
            <tr>
                <th colspan="4">“Por delegación del Secretario de
                    Educación Superior, Ciencia, Tecnología
                    en Innovación”:</th>
            
                <th colspan="4">
                    Por la Entidad Receptora:
                </th>
            
            </tr>
            <tr>     
                <td colspan="4">
                    Mgs. @foreach ($data->autorities as $item)
                            @if($item->type->code == "CARGO_1")
                             {{$data->autorities->user->first_name}}{{$data->autorities->user->second_name}}{{$data->autorities->user->first_lastname}}{{$data->autorities->user->second_lastname}} 
                             @else  
                         @endif 
                         @endforeach. <br>
                    RECTOR <br>
                    {{$data->career->institution->name}}
                </td>
            
                <td colspan="4">
                    Sr.
                    @foreach ($data->stake_holder as $stake_holder)
                    @if ($stake_holder->type->code=="CARGO_8" )
                    <div>
                        {{$stake_holder->name}} {{$stake_holder->lastname}}
                    </div>
                    @endif 
                    @endforeach.
                    <br>
                    RUC: {{$data->beneficiaryInstitution->ruc}}    <br>
                    {{$data->beneficiaryInstitution->name}}   <br>
                </td>
            
            </tr>
        </table>    
    
    </main>
    {{-- <footer>
        <div class="pieIzquierda">
            <img src="http://asistencia.yavirac.edu.ec/public/storage/senescyt/footer1_logo.png" alt="logo de lenin" />
        </div>
    </footer>    --}}
    <footer>
        <script type="text/php">
            if ( isset($pdf) ) {
                $pdf->page_script('
                    $font = $fontMetrics->get_font("Arial", "normal");
                    $pdf->text(560, 800, "$PAGE_NUM", $font, 12);
                ');
            }
            </script>
    </footer>
</body>

</html>