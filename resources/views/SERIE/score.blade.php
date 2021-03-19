@extends('layout')
@section('content')
    <table>
        <thead>
            <tr>
                <th>順位</th>
                <th>選手名</th>
                <th>チーム名</th>
                <th>得点</th>
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