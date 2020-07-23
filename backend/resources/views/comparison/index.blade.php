@extends('layouts.common')
@section('content')
<div class="row">
    @if ($foodComponentsCount > 0)
    @foreach ($componentGraphDatas as $componentGraphData)
    <div class="col-lg-4 col-sm-6 comparison-{{$componentGraphData['comparison']->id}}">
<delete-component 
    :user = "{{ ($componentGraphData['comparison']->user_id) }}"
    :food = "{{ ($componentGraphData['comparison']->food_id) }}"
    :comparison = "{{$componentGraphData['comparison']->id}}"
    ></delete-component>

            <piechart-component :graph-data="@json($componentGraphData['graphData'])"></piechart-component>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">対象</th>
                        <td><p>{{ $componentGraphData['food']->target }}</p></td>
                    </tr>
                    <tr>
                        <th scope="row">価格</th>
                        <td><p>{{ $componentGraphData['food']->price }}</p></td>
                    </tr>
                    <tr>
                        <th>商品名</th>
                        <td><p>{{ $componentGraphData['food']->name }}</p></td>
                    </tr>
                    <tr>
                        <th scope="row">内容量</th>
                        <td><p>{{ $componentGraphData['food']->volume }}</p></td>
                    </tr>
                    <tr>
                        <th scope="row">サイズ</th>
                        <td><p>{{ $componentGraphData['food']->size }}</p></td>
                    </tr>
                    <tr>
                        <th scope="row">原材料</th>
                        <td><p>{{ $componentGraphData['food']->material }}</p></td>
                    </tr>
                    <tr>
                        <th scope="row">特徴</th>
                        <td><p>{{ $componentGraphData['food']->feature }}</p></td>
                    </tr>
                </tbody>
            </table>
        </div>

  
    @endforeach
    @else
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">比較するデータがありません</h4>
        商品ページの【比較】ボタンを押してください
      </div>
    @endif
</div>

@endsection