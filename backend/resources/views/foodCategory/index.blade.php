@extends('layouts.common')
@section('content')
<div class="list-group">


    @foreach($foods as $food) 
        <a href="{{route('component.index',['food_id'=>$food->id])}}" class="list-group-item list-group-item-action">{{$food->name}}</a>
    @endforeach
</div>




@endsection