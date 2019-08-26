<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProducesPartakkus</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('/css/style.css') }}">
</head>
<body>

    <div class="ui grid">
        <!--Meno-->
        <div class="ui four wide column menuStyle" id="" >

            <div class="ui  small image" style="margin-left:25%;">
                <img src="{{asset('img/LogoProducespartakkus.png')}}">
            </div>

            <br>

            <div class="ui vertical fluid tabular menu">
              <a class="item active ">
                HOME
              </a>
              <a class="item " style="color:white;">
                  INFORMACION DE EVENTO
              </a>
              <a class="item " style="color:white;"> 
                INSCRÌBETE       
                
              <a class="item " style="color:white;">
                  CONTÀCTANOS 
              </a>

              
            </div>

            
               
            
        </div>

        <!---->
        <div class="twelve wide stretched column">
            <!--Primer segmento home-->
            <!--
            <div class="ui segment">
              This is an stretched grid column. This segment will always match the tab height
            </div>
            -->

            <!--segundo segmento Informacion de evento -->
            <div class="ui segment">

                <!--Encabezado INFORMACION DE EVENTO-->
                <h2 class="ui center aligned icon header animated fadeInRight " id="InfoEvento">
                    <i class="circular clipboard outline icon"></i>
                    INFORMACION DE EVENTO
                </h2>
              <div class="ui container">
                <div class="eight wide column">
                  
                </div>

                <div class="six wide column  animated fadeInRight delay-1s">
                    <table class="ui definition table">
                        <tbody>
                            <tr>
                                <td class="one wide column">Lugar</td>
                                <td>Por definir </td>
                            </tr>
                            <tr>
                                <td>Fecha</td>
                                <td>31 Diciembre 2019 </td>
                            </tr>
                            <tr>
                                <td>Distancias</td>
                                <td>4k-10k-21k </td>
                            </tr>
                            <tr>
                                <td>Entrega de kit</td>
                                <td>La entrega de kit será los dias 3, 4 y 5 de Octubre, 2019 entre las 11:00 am y las 20:00 Horas en el lugar Boulevard Marina Arauco (14 nte / 2 oriente).</td>
                            </tr>
                        </tbody>
                    </table>
        
                </div>
            
        
              
               
            </div>

            <!--tercer segmento Inscrìbete-->
            <div class="ui segment">

                <!--Encabezado INFORMACION DE EVENTO-->
                <h2 class="ui center aligned icon header animated fadeInRight delay-2s">
                    <i class="circular id card outline icon"></i>
                    REGISTRATE
                </h2>
              <div class="ui four steps animated fadeInRight delay-3s" style="margin-top:0%;" >
                <div class="step">
                    <div class="content">
                        <div class="title">Paso 1</div>
                        <div class="description">
                        </div>
                    </div>
                </div>
                <div class="active step">
                    <div class="content">
                        <div class="title">Paso 2</div>
                        <div class="description"></div>
                    </div>
                </div>
                <div class="step">
                    <div class="content">
                        <div class="title">Paso 3</div>
                        <div class="description"></div>
                    </div>
                </div>

             </div>
             <!------------------------------Contenedor de formulario datos de participante-->
             <div class="container-datos-participantes sixteen wide column" id="container-datos-participantes" >
              <form class="ui form">
                <h4 class="ui dividing header">Datos Personales </h4>
                <!--------------Primera fila------------->
                <div class="field"> 
                  <div class="two fields">
                    <div class="field">  
                      <label>Rut</label>
                      <input type="text" name="shipping[rut]" placeholder="Ingrese Rut ">
                    </div>
                    <div class="field">
                        <label>Genero</label>
                        <select class="ui fluid search dropdown" name="card[genero]">
                            <option value="1">Seleccionar</option>
                            <option value="">Masculino</option>
                            <option value="">Femenino</option>
                          </select>
                    </div>
                  </div>
                </div>
                <!--------------segunda fila------------->
                <div class="field"> 
                    <div class="two fields">
                      <div class="field">  
                        <label>Primer Nombre</label>
                        <input type="text" name="shipping[primer-nombre]" placeholder="Primer Nombre">
                      </div>
                      <div class="field">
                          <label>Segundo nombre</label>
                          <input type="text" name="shipping[segunda-nombre]" placeholder="Segundo Nombre">
                      </div>
                    </div>
                  </div>
                <!--------------tercera fila------------->
                <div class="field"> 
                    <div class="two fields">
                      <div class="field">  
                        <label>Primer Apellido</label>
                        <input type="text" name="shipping[primer-nombre]" placeholder="Primer Apellido">
                      </div>
                      <div class="field">
                          <label>Segundo Apellido</label>
                          <input type="text" name="shipping[segundo-nombre]" placeholder="Segundo Apellido">
                      </div>
                    </div>
                  </div>


                <!------------cuarta fila------------->
                <div class="field">
                  <label>Correo Electronico</label>
                  <div class="fields">
                    <div class="twelve wide field">
                      <input type="text" name="shipping[correo]" placeholder="ejemplo@gmail.com">
                    </div>
                    <div class="four wide field" style="margin-top:-2%;">
                      <label>telefono</label>
                      <input type="text" name="shipping[telefono]" placeholder="">
                    </div>
                  </div>
                </div>
                <!------------quinta fila--------------------->
                <div class="field">
                    <label>Confirmar Correo Electronico</label>
                    <div class="fields">
                      <div class="twelve wide field">
                        <input type="text" name="shipping[confirmar-correo]" placeholder="ejemplo@gmail.com">
                      </div>
                      <div class="four wide field" style="margin-top:-2%;">
                        <label>telefono Celular</label>
                        <input type="text" name="shipping[celular]" placeholder="">
                      </div>
                    </div>
                  </div>
                <div class="ui segment">
                  <div class="field">
                    <div class="ui toggle checkbox">
                      <input type="checkbox" name="gift" tabindex="0" class="hidden">
                      <label>Acepto terminos y condiciones</label>
                    </div>
                  </div>
                </div>
                <div class="ui button" tabindex="0">Enviar</div>
              </form>

             </div>

             <div class="container-datos-contacto sixteen wide column" id="container-datos-contacto">
                <form class="ui form">

                </form>
             </div>

            </div>

             <!--tercer segmento contàctanos-->
             <div class="ui segment">
                <!--Encabezado contactanos-->
                <h2 class="ui center aligned icon header">
                    <i class="circular envelope outline icon"></i>
                     Contactanos
                </h2>

              <!--formulario de contacto -->
              <form class="ui form" style="margin-left:20%;margin-right:20%;">
                <div class="field">
                  <label>Nombre</label>
                  <input type="text" name="first-name" placeholder="First Name">
                </div>
                <div class="field">
                  <label>correo</label>
                  <input type="text" name="last-name" placeholder="Last Name">
                </div>
                <div class="field">
                  <label>Asunto</label>
                  <input type="text" name="last-name" placeholder="Last Name">
                </div>
                <div class="field">
                  <label>Mensaje</label>
                  <textarea></textarea>
                </div>

                <div class="ui animated button" tabindex="0" style="margin-left:40%;">
                    <div class="visible content"><button  style="he" class="ui button" type="submit">Enviar</button></div>
                    <div class="hidden content">
                      <i class="right arrow icon"></i>
                    </div>
                  </div>
               
              </form>


            </div>





        </div>
          
      </div>






    <script href="{{asset('/js/MiPrimer_js_sitio.js') }}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</body>

</html>