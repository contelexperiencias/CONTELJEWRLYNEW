@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['producto.update',$producto],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
            @if ($categoria_id >= '9' and $categoria_id <= '13' )
            <div class="form-group">
                    <label for="title">INGRESE CODIGO</label>
                    {!! Form::text('title',$producto->title,['class'=>'form-control','maxlength'=>'67']) !!}
            </div>
            <div class="form-group" style="display:none">
                    <label for="description">INGRESE description</label>
                    {!! Form::textarea('description',$producto->description,['class'=>'form-control','maxlength'=>'67','rows'=>'3']) !!}
            </div>
            <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE</label>
                    {!! Form::text('nombre',$producto->nombre,['class'=>'form-control','maxlength'=>'100']) !!}
                </div>
                <div class="form-group" style="display:none">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion',$producto->descripcion,['class'=>'form-control']) !!}
                </div>
            @elseif($categoria_id == '8')
                <div class="form-group">
                    <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',$producto->title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group" style="display:none">
                    <label for="description">INGRESE description</label>
                    {!! Form::textarea('description',$producto->description,['class'=>'form-control','maxlength'=>'67','rows'=>'3']) !!}
                </div>

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE</label>
                    {!! Form::text('nombre',$producto->nombre,['class'=>'form-control','maxlength'=>'100']) !!}
                </div>

                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion',$producto->descripcion,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="orden">Ingrese porcentaje (%) de ganancia</label>
                    {!! Form::text('porcentaje',$producto->porcentaje,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="orden">Ingrese precio ($)</label>
                    {!! Form::text('precio',$producto->precio,['class'=>'form-control']) !!}
                </div>
               
                <div class="form-group">
                    <label for="orden">Ingrese ganancia en pesos ($)</label>
                    {!! Form::text('ganancia',$producto->ganancia,['class'=>'form-control']) !!}
                </div>
                @endif

                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',$producto->orden,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="urlfoto">IMAGEN (400 x 386 px)</label> <br>
                    <img src="/img/producto/{{$producto->urlfoto}}">
                    {!! Form::file('urlfoto') !!}
                </div>
               
            </div>
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>
@endsection