@extends('master')

@section('header')
  <h1>$carrier->id is {{($carrier->id)}}</h1>
  <h1>a href="{{('carriers/'.$carrier->id.'')}}"</h1>
  <a href="{{('carriers/'.$carrier->id.'')}}">&larr; Cancel </a>
  <a href="/carriers">&larr; Cancel </a>
  <h2>
      @if($method == 'post') 
        Add a new carrier
      @elseif($method == 'delete') 
        Delete {{$carrier->name}}?
      @else 
        Edit {{$carrier->name}}
      @endif
  </h2>
@stop

@section('content')
  {{Form::model($carrier, array('method' => $method, 'url'=>'carriers/'.$carrier->id))}}
  @unless($method == 'delete')
    <div class="form-group">
      {{Form::label('Name')}} 
      {{Form::text('name')}}
    </div>
    <div class="form-group">
      {{Form::label('service')}}
      {{Form::text('service')}}
    </div>
    <div class="form-group">
      {{Form::label('pennant')}}
      {{Form::text('pennant')}}
    </div>
    <div class="form-group">
      {{Form::label('class')}}
      {{Form::text('class')}}
    </div>
    <div class="form-group">
      {{Form::label('type')}}
      {{Form::text('type')}}
    </div>
    <div class="form-group">
      {{Form::label('servicePeriod')}}
      {{Form::text('servicePeriod')}}
    </div>
    <div class="form-group">
      {{Form::label('notes')}}
      {{Form::text('notes')}}
    </div>
    {{Form::submit("Save", array("class"=>"btn btn-default"))}}
  @else
    {{Form::submit("Delete", array("class"=>"btn btn-default"))}}
  @endif
  
  {{Form::close()}}
@stop
