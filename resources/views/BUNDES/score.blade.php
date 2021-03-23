@extends('layout')
@section('content')
    <h3 class="mx-3">
        【ブンデスリーガ 個人成績】
    </h3>
    <table class="table mx-3 border border-secondary">
        <thead>
            <tr>
                <th scope="col">順位</th>
                <th scope="col">選手名</th>
                <th scope="col">チーム名</th>
                <th scope="col">得点</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $data[$i]["player"]["name"] }}</td>
                    <td>{{ $data[$i]["team"]["name"] }}</td>
                    <td>{{ $data[$i]["numberOfGoals"] }}</td>
                </tr>
            @endfor
        </tbody>
    </table>

@endsection('content')