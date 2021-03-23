@extends('layout')
@section('content')
    <h3 class="mx-3">
        【ラリ－ガ 順位表】
    </h3>
    <table class="table mx-3 border border-secondary">
        <thead>
            <tr>
                <th scope="col">順位</th>
                <th scope="col">チーム名</th>
                <th scope="col">勝点</th>
                <th scope="col">試合</th>
                <th scope="col">勝</th>
                <th scope="col">引</th>
                <th scope="col">負</th>
                <th scope="col">直近</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $datum)
                <tr>
                    <td>{{ $datum["position"] }}</td>
                    <td>{{ $datum["team"]["name"] }}</td>
                    <td>{{ $datum["points"] }}</td>
                    <td>{{ $datum["playedGames"] }}</td>
                    <td>{{ $datum["won"] }}</td>
                    <td>{{ $datum["draw"] }}</td>
                    <td>{{ $datum["lost"] }}</td>
                    <td>{{ $datum["form"] }}</td>                    
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection('content')