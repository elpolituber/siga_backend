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
        CONVENIO DE VINCULACI??N CON LA SOCIEDAD  
        {{$data->career->institution->name}} Y {{$data->beneficiaryInstitution->name}}              
    </h3>
    <main>
        <article class="parrafo1">

            <p>Comparecen a la celebraci??n del presente Convenio, por una parte el INSTITUTO TECNOL??GICO SUPERIOR {{$data->career->institution->name}}, legalmente representado por el @foreach ($data->autorities as $item)
                @if($item->type->code == "CARGO_1")
                {{$data->autorities->user->first_name}}{{$data->autorities->user->second_name}}{{$data->autorities->user->first_lastname}}{{$data->autorities->user->second_lastname}} @else a  @endif @endforeach
                , en su calidad de Rector, de conformidad con lo establecido en la Resoluci??n No. XXXXX y Acci??n de Personal No. Xxx de xx de xxx de xxx; delegado del Secretario de Educaci??n Superior, Ciencia, Tecnolog??a e Innovaci??n, para suscribir el presente instrumento conforme al Acuerdo No. 2020-048 de 15 de mayo de 2020, , a quien en adelante para los efectos del presente instrumento se denominar?? ???INSTITUTO???; y, por otra parte la empresa {{$data->beneficiaryInstitution->name}} con RUC No. {{$data->beneficiaryInstitution->ruc}}, representada legalmente por 
                @foreach ($data->stake_holder as $stake_holder)
                @if ($stake_holder->type->code=="CARGO_8" )
                <div>
                    {{$stake_holder->name}} {{$stake_holder->lastname}}
                </div>
                @endif 
                @endforeach en calidad de Gerente General a quien en adelante y para los efectos del presente instrumento se denominar?? ???ENTIDAD RECEPTORA???.
                Las partes libre y voluntariamente, acuerdan celebrar el presente convenio al tenor de las siguientes cl??usulas:
            </p>
        </article >
        <article class="clausulas">
            <h4>CL??USULA PRIMERA.- ANTECEDENTES:</h4>
                <p>
                    1. El art??culo 26 de la Constituci??n de la Rep??blica del Ecuador determina:<span class="kursiva"> ???La educaci??n es un derecho de las personas a lo largo de la vida y un deber ineludible e inexcusable del Estado. Constituye un ??rea prioritaria de la pol??tica p??blica y de la inversi??n estatal, garant??a de la igualdad e inclusi??n social y condici??n indispensable para el buen vivir; las personas, la familia y la sociedad tienen el derecho y la responsabilidad de participar en el proceso educativo???</span>;
                </p>
                <p>2. El art??culo 28 de la Carta Suprema establece:<span class="kursiva"> ???La educaci??n responder?? al inter??s p??blico y no estar?? al servicio de intereses individuales y corporativos. Se garantizar?? el acceso universal, permanencia, movilidad y egreso sin discriminaci??n alguna y la obligatoriedad en el nivel inicial, b??sico y bachillerato o su equivalente. Es derecho de toda persona y comunidad interactuar entre culturas y participar en una sociedad que aprende. El Estado promover?? el di??logo intercultural en sus m??ltiples dimensiones. El aprendizaje se desarrollar?? de forma escolarizada y no escolarizada. La educaci??n p??blica ser?? universal y laica en todos sus niveles, y gratuita hasta el tercer nivel de educaci??n superior inclusive???</span>;
                </p>
                <p>3. El art??culo 350 de la Constituci??n establece que:<span class="kursiva"> ???El sistema de educaci??n superior tiene como finalidad la formaci??n acad??mica y profesional con visi??n cient??fica y humanista; la investigaci??n cient??fica y tecnol??gica; la innovaci??n, promoci??n, desarrollo y difusi??n de los saberes y las culturas; la construcci??n de soluciones para los problemas del pa??s, en relaci??n con los objetivos del r??gimen de desarrollo???</span>;
                </p>
                <p>4. El art??culo 352 de la Carta Suprema dispone que:<span class="kursiva">???El sistema de educaci??n superior estar?? integrado por universidades y escuelas polit??cnicas; institutos superiores t??cnicos, tecnol??gicos y pedag??gicos; y, conservatorios de m??sica y artes, debidamente acreditados y evaluados. / Estas instituciones, sean p??blicas o particulares, no tendr??n fines de lucro???;</span>
                </p>    
                <p>5.  El art??culo 13 de la Ley Org??nica de Educaci??n Superior determina como una de las funciones del Sistema de Educaci??n Superior es:<span class="kursiva"> ???a) Garantizar el derecho a la educaci??n superior mediante la docencia, la investigaci??n y su vinculaci??n con la sociedad, y asegurar crecientes niveles de calidad, excelencia acad??mica y pertinencia???</span>;
                </p> 
                <p> 6.  El art??culo 125 de la Ley Org??nica de Educaci??n Superior establece que:<span class="kursiva"> ???Las instituciones del Sistema de Educaci??n Superior realizar??n programas y cursos de vinculaci??n  con las sociedad guiados por el personal acad??mico (???)???</span>;
                </p>   
                <p>  7.  El art??culo 182 de la Ley Org??nica de Educaci??n Superior dispone que:<span class="kursiva"> ???La Secretar??a de Educaci??n Superior, Ciencia, Tecnolog??a e Innovaci??n, es el ??rgano que tiene por objeto ejercer la rector??a de la pol??tica p??blica de educaci??n superior y coordinar acciones entre la Funci??n Ejecutiva y las instituciones del Sistema de Educaci??n Superior. Estar?? dirigida por el Secretario Nacional de Educaci??n Superior, Ciencia, Tecnolog??a e Innovaci??n de Educaci??n Superior, designado por el Presidente de la Rep??blica. Esta Secretar??a Nacional contar?? con el personal necesario para su funcionamiento???</span>;
                </p>    
                <p>  8. El primer inciso art??culo 50 de la reforma del Reglamento de R??gimen Acad??mico emitido mediante resoluci??n RPC-SO-08-No.111-2019, el 27 de febrero del 2019 manifiesta que: <span class="kursiva"> ???La vinculaci??n con la sociedad hace referencia a la planificaci??n, ejecuci??n y difusi??n de actividades que garantizan la participaci??n efectiva en la sociedad y responsabilidad social de las instituciones del Sistema de Educaci??n Superior con el fin de contribuir a la soluci??n de las necesidades y problem??ticas del entorno desde el ??mbito acad??mico e investigativo. La vinculaci??n con la sociedad deber?? articularse al resto de funciones sustantivas, oferta acad??mica, dominios acad??micos, investigaci??n, formaci??n y extensi??n de las IES en cumplimiento del principio de pertinencia. En el marco del desarrollo de investigaci??n cient??fica de las IES, se considerar?? como vinculaci??n con la sociedad a las actividades de divulgaci??n cient??fica, aportes a la mejora y actualizaci??n de los planes de desarrollo local, regional y nacional, y la transferencia de conocimiento y tecnolog??a. La divulgaci??n cient??fica consiste en transmitir resultados, avances, ideas, hip??tesis, teor??as, conceptos, y en general cualquier actividad cient??fica o tecnol??gica a la sociedad; utilizando los canales, recursos y lenguajes adecuados para que ??sta los pueda comprender y asimilar la sociedad???</span>.</p>
                <p>
                9. El art??culo 51 del mencionado Reglamento respecto a la pertinencia de la vinculaci??n determina:<span class="kursiva"> ???La vinculaci??n con la sociedad promueve la transformaci??n social, difusi??n y devoluci??n de conocimientos acad??micos, cient??ficos y art??sticos, desde un enfoque de derechos, equidad y responsabilidad social. Las IES, a trav??s de su planificaci??n estrat??gica-operativa y oferta acad??mica, evidenciar??n la articulaci??n de las actividades de vinculaci??n con la sociedad con las potencialidades y necesidades del  contexto local, regional, nacional e internacional, los desaf??os de las nuevas tendencias de la ciencia, la tecnolog??a, la innovaci??n, la profesi??n, el desarrollo sustentable, el arte y la cultura???</span>.   
                </p>
                <p>
                10. El art??culo 52 del Reglamento de R??gimen Acad??mico establece en lo referente a la ???Planificaci??n de la vinculaci??n con la sociedad.- <span class="kursiva">???La planificaci??n de la funci??n de vinculaci??n con la sociedad, podr?? estar determinada en las siguientes l??neas operativas: a) Educaci??n continua. b) Pr??cticas preprofesionales; c) Proyectos y servicios especializados; d) Investigaci??n; e) Divulgaci??n y resultados de aplicaci??n de conocimientos cient??ficos; f) Ejecuci??n de proyectos de innovaci??n; y, g) Ejecuci??n de proyectos de servicios comunitarios o sociales. Las IES podr??n crear instancias institucionales espec??ficas, incorporar personal acad??mico y establecer alianzas estrat??gicas de cooperaci??n interinstitucional para gestionar  la vinculaci??n con la sociedad???</span>. 
                </p>
                <p>
                    11. A trav??s de Acuerdo No. 2012-065, publicado en el Registro Oficial No. 834, de 20 de noviembre de 2012, el Secretario de Educaci??n Superior, Ciencia, Tecnolog??a e Innovaci??n, declar?? a: <span class="kursiva">???(???) los institutos superiores t??cnicos, tecnol??gicos, pedag??gicos, de artes y conservatorios superiores de m??sica p??blicos, como entidades operativas desconcentradas de la Secretar??a de Educaci??n Superior, Ciencia, Tecnolog??a e Innovaci??n (???)???</span>; entre los cuales consta el Instituto Tecnol??gico Superior {{$data->career->institution->name}}.
                </p>
                <p>
                    12. A trav??s de Acuerdo No. 2016-118, de 25 de julio de 2016, con su posterior reforma, el Secretario de Educaci??n Superior, Ciencia, Tecnolog??a e Innovaci??n, determin?? a favor de los rectores y rectoras de los Institutos Superiores T??cnicos, Tecnol??gicos, Pedag??gicos, de Artes y los Conservatorios Superiores P??blicos; entre otras atribuciones y obligaciones las siguientes:<span class="kursiva"> ???Art??culo 1.- (???)  la suscripci??n, modificaci??n y extinci??n de los convenios que tengan por objeto la realizaci??n de programas de pasant??as y/o pr??cticas pre profesionales; implementaci??n de carreras de modalidad dual que garanticen la gesti??n del aprendizaje pr??ctico con tutor??as profesionales y acad??micas integrales in situ; uso gratuito de instalaciones para beneficio de institutos p??blicos; y la implementaci??n de proyectos de vinculaci??n con la sociedad, y/o convenios de cooperaci??n a celebrarse entre los mencionados institutos y las diferentes personas naturales y jur??dicas nacionales, con la finalidad fortalecer  la educaci??n t??cnica y tecnol??gica p??blica del Ecuador. (???) Art??culo 6.- Los rectores y rectoras de los institutos superiores t??cnicos, tecnol??gicos, pedag??gicos, de artes y conservatorios superiores p??blicos, usar??n obligatoriamente las plantillas de convenios autorizadas por la Coordinaci??n General de Asesor??a Jur??dica de esta Cartera de Estado para la suscripci??n de los actos jur??dicos mencionados en el art??culo 1 del presente Acuerdo???</span>; 
                </p>
                <p>
                    
                      13. El Instituto Tecnol??gico Superior {{$data->career->institution->name}}, ubicado en la provincia de {{--{{$data->location->name}} --}}es una Instituci??n de Educaci??n Superior P??blica con licencia de funcionamiento otorgada mediante Acuerdo No. XXX de fecha xx de xx de xx, conferido por xxxxxxxxxxxxx, que se dedica a la formaci??n de profesionales de nivel tecnol??gico;  
                </p>
                <p>
                    14. Mediante acci??n de personal No. XXXXXXXX, de fecha XX de XXXX, la Secretar??a de Educaci??n Superior, Ciencia, Tecnolog??a e Innovaci??n, otorg?? el nombramiento al XXXXXXXXXXXXX, portador de la c??dula de ciudadan??a No. XXXXXXXXXXX en calidad de Rector del Instituto Tecnol??gico Superior XXXXXXXXXXXX posesionado en sus funciones mediante acto administrativo por el periodo comprendido entre el 20XX y el 20XX
                </p>
                <p>
                    15.El {{$data->career->institution->name}}, ubicado en la ciudad de  {{$data->location->name}}, provincia de {{$data->location->parent->parent->name}}, es una Instituci??n de Educaci??n Superior P??blica, con licencia de funcionamiento otorgada mediante Acuerdo Nro. Xxx y registro institucional Nro. Xxxxx conferido por el Consejo de Educaci??n Superior CONESUP, que se dedica a la formaci??n de profesionales de nivel tecnol??gico.;
                </p>
                <p>
                    16. Mediante Informe T??cnico Acad??mico de Viabilidad para la firma de Convenio No. Xxxxxx de fecha xx de xxxxxxxx de 202x, se concluye que: ???Conclusiones y Recomendaciones:???.
                </p>
                <p>
                    17. Mediante memorando No. SENESCYT-xx-2020-xxxxx-M del fecha xx de xxxxxxxxx del 202x8, el xxxxxxxxxx, Coordinador/a Zonal (zonas 1,2,4,5,6,7,8)/  Subsecretario de Formaci??n T??cnica y Tecnol??gica (en el caso de zona 3 y 9), aprueba el Informe T??cnico Nro. XXXXXXXXXXXXXX de xx de xxxxxxxxx  de 202x, para la suscripci??n del Convenio entre el {{$data->beneficiaryInstitution->name}} y el Instituto Tecnol??gico Superior {{$data->career->institution->name}}.
                </p>
                <p>
                    18. Con los antecedentes expuestos, el Instituto Tecnol??gico Superior {{$data->career->institution->name}} y el  {{$data->beneficiaryInstitution->name}}, acuerdan suscribir el presente convenio referente a la implementaci??n de un programa de vinculaci??n con la colectividad que versar?? sobre el proyecto que tiene como objetivo: <br>
                    @foreach ($data->objetive as $objetive) 
                    @if ($objetive->type->code=="AIMS_TYPES_1" || $objetive->type->code=="AIMS_TYPES_2")
                        ???{{$objetive['description']}}???<br>    
                    @endif   
                    @endforeach, por parte de las carreras  de {{$data->career->name}}.
                </p>
            </article>
                
        
        <article class="clausula2">
            <h4>CL??USULA SEGUNDA.- OBJETO:</h4>
            <p>
                Por medio del presente convenio, las partes, en el ??mbito de sus competencias, se comprometen a realizar la implementaci??n del proyecto de vinculaci??n con la colectividad propuesto por el INSTITUTO, referente a {{$data->title}}. 
            </p>
        </article>
        <article class="clausula3">
            <h4>CL??USULA TERCERA.- OBLIGACIONES DE LAS PARTES:</h4>
            <h4>3.1 DEL INSTITUTO:</h4>
            <p>
                Son obligaciones del INSTITUTO:
            </p>
            <p>
            a) Designar a los Estudiantes del Instituto Tecnol??gico Superior {{$data->career->institution->name}}  a fin de que accedan a las actividades de vinculaci??n del {{$data->career->institution->name}} (entidad receptora), remitiendo para el efecto la base de datos con la informaci??n que acuerden las partes.
            </p>
            <p>
                b)Asegurar que la unidad de vinculaci??n puedan desarrollar los distintos programas y actividades en las instalaciones existentes del {{$data->career->institution->name}} (entidad receptora),
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
                a)Permitir que los estudiantes del Instituto Tecnol??gico Superior {{$data->career->institution->name}} efect??en actividades de vinculaci??n en las instalaciones de acuerdo a los lineamientos pedag??gicos establecidos.
            </p>
            <p>
                b)Vincular a los estudiantes a las ??reas relacionadas con la carrera que se encuentran cursando la correspondiente actividad de vinculaci??n en sus instalaciones, de acuerdo a las necesidades de la (nombre de la entidad receptora), y de conformidad a la normativa vigente.
            </p>
            <p>
                c)Otorgar el apoyo necesario para el desarrollo de los estudiantes y sus actividades, adem??s de evaluar el desarrollo de las actividades que se asignen a los estudiantes dentro de las actividades de vinculaci??n a realizarse en (nombre de la entidad receptora).
            </p>
            <p>
                d)xxxxx
            </p>
        </article>
        <article class="clausula4">
            <h4>CL??USULA CUARTA.- PLAZO:</h4>
            <p>
                El plazo total para la ejecuci??n del presente Convenio es de xxxxx (x) a??os contados a partir de la fecha de suscripci??n, mismo que podr?? ser renovado previo consentimiento de las partes de manera escrita con un m??nimo de quince (15) d??as de anticipaci??n a la fecha de terminaci??n, para lo cual las partes deber??n suscribir el instrumento pertinente prorrogando el mismo y estableciendo, de existir, las nuevas condiciones.
            </p>
        </article>
        <article>
            <h4>CL??USULA QUINTA.- R??GIMEN FINANCIERO:</h4>
            <p>
                Debido a la naturaleza del Convenio, el presente convenio no generar?? obligaciones financieras rec??procas, erogaci??n alguna ni transferencias de recursos econ??micos entre las partes; las erogaciones generadas por las acciones ejecutadas por el cumplimiento de las obligaciones contra??das en el presente instrumento ser??n asumidas con cargo a la Instituci??n que las ejecute.
            </p>    
        </article>
        <article>
            <h4>CL??USULA SEXTA.- MODIFICACIONES:</h4> 
            <p>
                Los t??rminos de este convenio podr??n ser modificados, ampliados o reformados de mutuo acuerdo durante su vigencia, siempre que dichas modificaciones no alteren la naturaleza ni el objeto del convenio y sean justificadas t??cnica, legal o acad??micamente; para cuyo efecto, las PARTES suscribir??n el instrumento jur??dico pertinente.
                Ninguna modificaci??n podr?? ir en detrimento de los derechos de los estudiantes que se encuentren vinculados en la ENTIDAD RECEPTORA.                 
            </p>   
        </article>    
        <article>
            <h4>CL??USULA S??PTIMA.- ADMINISTRADOR DEL CONVENIO:
            </h4>
            <p>
                Para realizar la coordinaci??n, ejecuci??n y seguimiento del presente convenio, las partes designan a los funcionarios que a continuaci??n se detallan para que act??en en calidad de administradores, quienes velar??n por la cabal y oportuna ejecuci??n de todas y cada una de las obligaciones derivadas del mismo, as?? como de su seguimiento y coordinaci??n, debiendo informar por escrito a la m??xima autoridad del INSTITUTO y al/la representante de la ENTIDAD RECEPTORA, mediante informes semestrales por cada ciclo acad??mico respecto del cumplimiento del objeto del presente instrumento:
            </p>
            <p>
                Por el <strong> INSTITUTO </strong>se designa a xxxxxxxxxxxxxxxxxx (de preferencia designar al cargo y no a la persona)<br>
    Por la <strong>ENTIDAD RECEPTORA </strong> se designa a xxxxxxxxxxxxxxxxxx (de preferencia designar al cargo y no a la persona)

            </p>
            <p>
                Los Administradores del Convenio a la conclusi??n del plazo, presentar??n un informe consolidado sobre la  ejecuci??n del Convenio.
    En caso de presentarse cambios del personal asignado para la administraci??n, ser??n designados con la debida antelaci??n, notificando a la parte contraria de manera inmediata y sin que sea necesaria la modificaci??n del texto convencional, a fin de no interrumpir la ejecuci??n y el plazo del convenio; para lo cual el o los administradores salientes deber??n presentar un informe de su gesti??n y la entrega recepci??n de actividades.

            </p>
        </article>
        <article>
            <h4>CL??USULA OCTAVA.- TERMINACI??N DEL CONVENIO:</h4>
            <p>El presente Convenio terminar?? por una de las siguientes causas:
            </p>
            <p>
            1. Por vencimiento del plazo;
            </p>
            <p>
                2. Por mutuo acuerdo de las partes, siempre que se evidencie que no pueda continuarse su ejecuci??n por motivos t??cnicos, econ??micos, legales, sociales o f??sicos para lo cual celebrar??n una acta de terminaci??n por mutuo acuerdo. La parte que por los motivos antes expuestos no pudiere continuar con la ejecuci??n del presente Convenio, deber?? poner en conocimiento de su contraparte su intenci??n de dar por terminado el convenio por mutuo con al menos treinta (30) d??as de antelaci??n a la fecha de terminaci??n del convenio;
            </p>
            <p>
                3. Por terminaci??n unilateral por incumplimiento de una de las partes, lo cual deber?? ser t??cnicamente y legalmente justificado por quien lo alegar??; y,
            </p>
            <p>
                4. Por fuerza mayor o caso fortuito debidamente justificado por la parte que lo alegare, y notificado dentro del plazo de cuarenta y ocho (48) horas de ocurrido el hecho. En estos casos, se suscribir?? la respectiva acta de terminaci??n en el que se determinar??n las causas descritas como causales de terminaci??n del Convenio. Se considerar??n causas de fuerza mayor o caso fortuito las establecidas en el art??culo 30 del C??digo Civil.
            </p>
            <p>
                La terminaci??n del presente convenio, por cualquiera de las causales antes se??aladas, generar?? la obligaci??n de las partes a suscribir un acta de finiquito; sin embargo, no afectar?? la conclusi??n del objeto y las obligaciones que las partes hubieren adquirido y que se encuentren ejecutando en ese momento, salvo que ??stas lo acuerden de otra forma. No obstante, la terminaci??n del presente convenio no implicar?? el pago de indemnizaci??n alguna ni entre las partes ni entre ??stas y los estudiantes o terceros.
            </p>
        </article>
        <article>
            <h4>CL??USULA NOVENA. -INEXISTENCIA DE RELACI??N LABORAL:</h4>
            <p>
                Por la naturaleza del presente Convenio, se entiende que ninguna de las partes comparecientes, adquieren relaci??n laboral ni de dependencia respecto del personal de la otra instituci??n que trabaje en el cumplimiento de este instrumento.
            </p>
            <p>    
                De igual manera, la ENTIDAD RECEPTORA no tendr?? relaci??n laboral ni obligaciones laborales  con los estudiantes que se vinculen a ella, ni ??stos tendr??n subordinaci??n ni dependencia laboral para con la ENTIDAD RECEPTORA, se aclara que la relaci??n estudiante-entidad receptora es  ??nicamente de formaci??n acad??mica.

            </p>
        </article>
        <article>
            <h4>CL??USULA D??CIMA.- CONTROVERSIAS:</h4>
            <p>Bas??ndose en la buena fe como fundamental para la ejecuci??n de este convenio para el caso de controversias derivadas de su interpretaci??n, aplicaci??n, ejecuci??n o terminaci??n, las partes aceptan solucionarlas de manera amistosa a trav??s de las m??ximas autoridades de las instituciones comparecientes; de no ser posible una soluci??n amistosa, las controversias producto del presente Convenio se ventilar??n ante el Centro de Mediaci??n de la Procuradur??a General del Estado, con sede en la ciudad de xxxxxx., provincia de xxxxxxx; y, a la falta de acuerdo se ventilar??n las controversias de conformidad con lo establecido en el C??digo Org??nico General de Procesos (COGEP); siendo competente para conocer dichas controversias el/la Tribunal de lo Contencioso Administrativo o la Unidad Judicial de lo Contencioso Administrativo.
            </p>
        </article>
        <article>
            <h4>CL??USULA D??CIMA PRIMERA.- DOCUMENTOS HABILITANTES:</h4>
            <p>Forman parte integrante del convenio los siguientes documentos:
            <ol style="list-style-type:lower-alpha">
                <li>Los que acreditan la calidad y capacidad de los comparecientes; y,</li>
                <li>Los documentos a que se hace referencia en la cl??usula de antecedentes.</li>
            </ol>
        </p>
        </article>
        <article>
            <h4>CL??USULA D??CIMA SEGUNDA.- COMUNICACIONES Y NOTIFICACIONES:
            </h4>
            <p>Todas las comunicaciones y notificaciones entre las partes, se realizar??n por escrito y ser??n entregadas a las siguientes direcciones:</p>
            <h4>INSTITUTO TECNOL??GICO SUPERIOR ???{{$data->career->institution->name}}???</h4>
            <p>Direcci??n:                xxxxxx. <br>
                Ciudad-Provincia:   {{$data->location->name}}-{{$data->location->parent->parent->name}} <br>  
                Tel??fono:                  XXXXXXXX <br>
                Mail:                          XXXXXXXXXXXXXXXXXXXX</p>
            <h4>CL??USULA D??CIMA SEGUNDA.- COMUNICACIONES Y NOTIFICACIONES:
            </h4>
            <p>Todas las comunicaciones y notificaciones entre las partes, se realizar??n por escrito y ser??n entregadas a las siguientes direcciones:</p>
            <h4>{{$data->beneficiaryInstitution->name}}:</h4>
            <p>Direcci??n:{{$data->beneficiaryInstitution->address}}   . <br>
                Ciudad-Provincia:{{$data->beneficiaryInstitution->location->name}}-{{$data->beneficiaryInstitution->location->parent->parent->name}}       <br>
                Tel??fono:       XXXXXXXX <br>
                Mail:         XXXXXXXXXXXXXXXXXXXX
            </p>
        </article>
        <article>
            <h4>CL??USULA DECIMA TERCERA.- ACEPTACI??N:</h4>
            <p>Libre y voluntariamente, previo el cumplimiento de los requisitos de Ley, los comparecientes expresan su aceptaci??n a todo lo convenido en el presente instrumento, a cuyas estipulaciones se someten, por convenir a sus leg??timos intereses institucionales, en fe de lo cual proceden a suscribirlo en cuatro (4) ejemplares de igual tenor y valor jur??dico.

                Dado, en la ciudad de xxxxxxxx a los XXX d??as del mes de XXX de 202X.  
                </p>
        </article>
        <table>
            <tr>
                <th colspan="4">???Por delegaci??n del Secretario de
                    Educaci??n Superior, Ciencia, Tecnolog??a
                    en Innovaci??n???:</th>
            
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