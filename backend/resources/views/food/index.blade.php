@extends('layouts.common')
@section('content')
<div id="wrapper">
    <div id="continer">
        
        @foreach($fishCategories as $fishCategory)
            <h3>{{$fishCategory->name}}</h3>
            <div class="row">
                @foreach($foodCategories[$fishCategory->id] as $foodCategory)
                <div class="col-md-3">
                    <a href="{{ route('foodComponent.index',['id'=>$foodCategory->id])}}">
                        <div class="fish-category-name">{{$foodCategory->name}}</div>
                    </a>
                </div>  
                @endforeach
            </div>  
        @endforeach

    </div>
</div>
@endsection