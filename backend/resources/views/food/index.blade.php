@extends('layouts.common')
@section('content')

    
        
        @foreach($fishCategories as $fishCategory)
            <h3>{{$fishCategory->name}}</h3>
            <div class="row">
                @foreach($foodCategories[$fishCategory->id] as $foodCategory)
                <div class="col-md-3">
                    <a href="{{ route('category.index',['id'=>$foodCategory->id])}}">
                        <div class="fish-category-name">{{$foodCategory->name}}</div>
                    </a>
                </div>  
                @endforeach
            </div>  
        @endforeach

    </div>
@endsection