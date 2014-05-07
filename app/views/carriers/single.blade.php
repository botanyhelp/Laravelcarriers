@extends('master')

@section('header')
  <a href="{{url('/')}}">Back to overview</a>
  <h2>
      {{{$carrier->name}}}
  </h2>
  <a href="{{url('carriers/'.$carrier->id.'/edit')}}">
    <span class="glyphicon glyphicon-edit"></span> Edit
  </a>
  <a href="{{url('carriers/'.$carrier->id.'/delete')}}">
    <span class="glyphicon glyphicon-trash"></span> Delete
  </a>
  Last edited: {{$carrier->updated_at}}
@stop

@section('content')
  <p>Name: {{$carrier->name}} </p>
  <p>service: {{$carrier->service}} </p>
  <p>pennant: {{$carrier->pennant}} </p>
  <p>class: {{$carrier->class}} </p>
  <p>type: {{$carrier->type}} </p>
  <p>servicePeriod: {{$carrier->servicePeriod}} </p>
  <p>notes: {{$carrier->notes}} </p>
@stop

