@extends('Templates.Layout.base-home')

@section('custom-stylesheet')
<style>
    div .bg-test{
        background-color: #563d7c;
        height: 50px;
        border: 1px solid #ffffff;
    }
</style>
@endsection

@section('custom-javascript')

@endsection

@section('content')
<h1>Olá, mundo!</h1>

<div class="container">
    <div class="row">
        <div class="col bg-test">
            
        </div>
    </div>
</div>
@endsection

