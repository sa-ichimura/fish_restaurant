@extends('layouts.common')
@section('content')
    @foreach ($componentGraphDatas as $componentGraphData)
        <piechart-component :graph-data="@json($componentGraphData['graphData'])"></piechart-component>
        <p>{{ $componentGraphData['food']->price }}</p>
        <p>{{ $componentGraphData['food']->name }}</p>
        <p>{{ $componentGraphData['food']->volume }}</p>
        <p>{{ $componentGraphData['food']->size }}</p>
        <p>{{ $componentGraphData['food']->material }}</p>
        <p>{{ $componentGraphData['food']->material }}</p>
        <p>{{ $componentGraphData['food']->feature }}</p>
        <p>{{ $componentGraphData['food']->target }}</p>
    @endforeach

@endsection