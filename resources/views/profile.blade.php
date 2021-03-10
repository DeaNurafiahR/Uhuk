@extends('adminlte::page')

@section('title', 'Pengaturan Profile')

@section('content_header')
    <h1>Pengaturan Profile</h1>
@stop

@section('content')
<form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
@stop

@section('footer')
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
    </div>
    <strong>CopyRight $copy; {{date('Y')}}
        <a href="http://ft.unsur.ac.id/" target="_blank">Fakultas Teknik, Universitas Suryakancana</a>.</strong>All Right Reserved

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
