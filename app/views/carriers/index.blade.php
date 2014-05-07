@extends('master')

@section('header')
<h2>

  <a href="{{url('carriers/create')}}" class="btn btn-primary pull-right">
    Add a new Carrier
  </a>
</h2>
@stop
@section('content')
  @foreach($carriers as $carrier)
    <div class="carrier">
      <a href="{{url('carriers/'.$carrier->id)}}">
        <strong> {{{$carrier->name}}} </strong>
      </a>
    </div>
  @endforeach
@stop
