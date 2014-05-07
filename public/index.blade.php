@extends('master')

@section('header')
<h2>

  <a href="{{url('Carriers/create')}}" class="btn btn-primary pull-right">
    Add a new Carrier
  </a>
</h2>
@stop
@section('content')
  @foreach($Carriers as $Carrier)
    <div class="Carrier">
      <a href="{{url('Carriers/'.$Carrier->id)}}">
        <strong> {{{$Carrier->name}}} </strong>
      </a>
    </div>
  @endforeach
@stop
