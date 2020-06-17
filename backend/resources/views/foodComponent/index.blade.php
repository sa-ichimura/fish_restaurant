@extends('layouts.common')
@section('content')


<div class="container">

    <div class="row">
            <div class="col-sm">
                <h2>{{$food->name}}</h2>    
            </div>
        <div class="col-sm">
            <form action="">
                <input type="hidden" name='food' value = '{{$food->id}}'>
                @foreach($foodComponents as $component)
                <input type="hidden" name='compnent' value = '{{$component->id}}'>
                @endforeach
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-primary">Primary</button>
            </form>
        </div>
    </div>



    <div class="row">
      <div class="col-sm" id="pie-circle" >
            <piechart-component component = {{$pieDate}}></piechart-component>
        </div>
      <div class="col-sm">
        <h3>材料</h3>
        <ul>
            {{$food->material}}
        </ul>
        <h3>餌のサイズ</h3>
        <p>{{$food->size}}</p>
        <h3>対象の魚</h3>
        <p>{{$food->target}}</p>
        <h3>参考値段</h3>
        <p>¥{{$food->price}}</p>
       
    </div>

    </div>
  
  <h3>特徴</h3>
  <ul>
      {!!$food->feature!!}
  </ul>
</div>


  
@endsection