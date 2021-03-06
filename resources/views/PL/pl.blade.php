@extends('layout')
@section('content')
    @isset($data)
        <div class='mx-2'>
        @foreach($data as $datum)
            <div class='mx-4'>
                <p class='mb-1'><strong>{{ $datum->name }}</strong></p>
                <p class='mb-0'>{{ $datum->text }}</p>
                <small>{{ $datum->created_at }}</small>
                <a class='btn btn-outline-primary btn-sm' href="{{ route('edit', ['datum_id'=>$datum->id, 'league'=>'PL'] )}}">編集</a>
                <a class='btn btn-outline-danger btn-sm' href="{{ route('delete', ['datum_id'=>$datum->id, 'league'=>'PL'])}}">削除</a>
                <hr>
            </div>
        @endforeach
        </div>
    @endisset

    <form action="/PL/create" method='POST'>
        <div class="form-group mb-3 mx-4">
            <label for="name" class="form-label">Your name</label>
            <input type="text" class="form-control" id="name" name='name' placeholder="Who are you">
        </div>
        <div class="form-group mx-4">
            <label for="text" class="form-label">text</label>
            <textarea class="form-control" id="text" name='text' rows="3"></textarea>
        </div>   
        {{ csrf_field() }}
        <div class='mx-4 my-1'>
            <input class="btn btn-outline-dark" type="submit" value="投稿">
        </div>
    </form>
@endsection('content')