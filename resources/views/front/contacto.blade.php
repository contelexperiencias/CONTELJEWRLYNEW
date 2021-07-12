@extends('layouts.appfront')

@section('content')
<div class="container  pb-5">
    <div class="row">
        <div class="col-sm-12">
        <div class="col-sm-5">
            <h2 class=" linea text-dark text-right" style="font-family:LemonMilk;"><span>Contacto</span></h2>
        </div>
        </div>

        <div class="col-sm-8 bg-white p-5">
            <!-- <h2>DATOS DE CONTACTO</h2>
                <ul>
                    <li>Razón Social: {{$config->razonsocial}}</li>
                    <li>Dirección: {{$config->direccion}}</li>
                    <li>Celular: {{$config->celular}}</li>
                    <li>email: {{$config->email}}</li>
                </ul>


            <h2 class="mt-5">FORMULARIO</h2> -->
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{\Session::get('success')}}</li>
                </ul>
            </div>
            @endif


          
            {!! Form::open(['route'=>['Email.store'],'method'=>'POST','files'=>true]) !!}
            <div class="form-group col-sm-12" style="display: inline-flex;">
                        <div class="col-sm-4">
                        <label for="nombre">*Nombre: </label>
                        </div>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" style="background:#C4C4C4;  ">
                        </div>
                        </div>
              
                    <div class="form-group col-sm-12" style="display: inline-flex;">
                    <div class="col-sm-4">
                      <label for="email">*Email: </label>
                      </div>
                      <div class="col-sm-8">
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" style="background:#C4C4C4;">
                      </div>
                    </div>
      
                    <div class="form-group col-sm-12" style="display: inline-flex;">
                    <div class="col-sm-4">
                        <label for="nombre">*Telefono: </label>
                        </div>
                        <div class="col-sm-8" style="display: inline-flex;">
                        <input class="form-control" list="ladas" placeholder="Lada" name="lada" id="lada" maxlength="3" style="background:#C4C4C4; width: 30%;" >
                            <datalist id="ladas">
                            <option value="744">
                            <option value="449">
                            <option value="241">
                            <option value="244">
                            <option value="981">
                            <option value="998">
                            <option value="461">
                            <option value="625">
                            <option value="55">
                            <option value="938">
                            <option value="639">
                            <option value="341">
                            <option value="656">
                            <option value="753">
                            <option value="831">
                            <option value="644">
                            <option value="481">
                            <option value="834">
                            <option value="921">
                            <option value="312">
                            <option value="271">
                            <option value="735">
                            <option value="777">
                            <option value="667">
                            <option value="983">
                            <option value="614">
                            <option value="747">
                            <option value="922">
                            <option value="618">
                            <option value="646">
                            <option value="493">
                            <option value="33">
                            <option value="473">
                            <option value="622">
                            <option value="662">
                            <option value="462">
                            <option value="971">
                            <option value="228">
                            <option value="878">
                            <option value="612">
                            <option value="352">
                            <option value="474">
                            <option value="477">
                            <option value="728">
                            <option value="668">
                            <option value="314">
                            <option value="868">
                            <option value="733">
                            <option value="669">
                            <option value="999"> 
                            <option value="686">
                            <option value="866">
                            <option value="81">
                            <option value="443">
                            <option value="445">
                            <option value="642">
                            <option value="631">
                            <option value="867">
                            <option value="951">
                            <option value="392">
                            <option value="272">
                            <option value="771">
                            <option value="627">
                            <option value="427">
                            <option value="782">
                            <option value="222">
                            <option value="322">
                            <option value="442">
                            <option value="899">
                            <option value="861">
                            <option value="353">
                            <option value="464">
                            <option value="844">
                            <option value="624">
                            <option value="444">
                            <option value="653">
                            <option value="594">
                            <option value="248">
                            <option value="415">
                            <option value="775">
                            <option value="833">
                            <option value="962">
                            <option value="238">
                            <option value="378">
                            <option value="773">
                            <option value="311">
                            <option value="595">
                            <option value="664">
                            <option value="246">
                            <option value="722">
                            <option value="871">
                            <option value="783">
                            <option value="961">
                            <option value="452">
                            <option value="229">
                            <option value="993">
                            <option value="492">
                            <option value="734">
                            <option value="351">
                            <option value="755">
  
                            </datalist>
                       
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="numero" maxlength="7" style="background:#C4C4C4;"> 
                        </div>
                        </div>
                    
                    <div class="form-group" >
                      <label for="mensaje">*Mensaje</label>
                      <textarea class="form-control" name="mensaje" id="mensaje" rows="3" style="background:#C4C4C4;"></textarea>
                    </div>
            {!! Form::submit('ENVIAR',['class'=>'btn btn-primary suscripcion','style'=>'background-color: #EDC01890; color:black; border-radius: 100px; font-size: 0.7rem;']) !!}


        </div>
        <!-- <div class="col-sm-4 bg-light">
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1018442939003!2d-86.8360678855906!3d21.148344889062205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2bbfff99a2c1%3A0xbb13ea1e52a69879!2sContel%20y%20Ferraez!5e0!3m2!1ses-419!2smx!4v1618253376736!5m2!1ses-419!2smx" width="100%" class="vh-100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div> -->
        

    </div>
</div>
@endsection