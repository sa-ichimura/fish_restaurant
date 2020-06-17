@extends('layouts.common')
@section('content')

@foreach($foodComponents as $foodComponent)
 <p>{{$foodComponent->protein}}</p>
@endforeach
<div id="pie-circle">
    <piechart-component component = {{$pieDate}}></piechart-component>
</div>
@endsection