@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div clas="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nam" class="form-control">
            </div>
            <div clas="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>  
    </form>
@endsection