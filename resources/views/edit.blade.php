@extends('layout')

@section('content')
    <div class='container my-4'>
        <div class='border p-4'>
            <h5 class='mb-4'>
                投稿の編集
            </h5>

            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class='alert-danger'>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('update', ['league'=>$league ,'datum_id'=> $datum->id]) }}" method='PUT'>
                <div class="form-group mb-3 mx-4">
                    <label for="name" class="form-label">Your name</label>
                    <input type="text" class="form-control" id="name" name='name' value='{{ old("name", $datum->name) }}' placeholder="Who are you">
                </div>
                <div class="form-group mx-4">
                    <label for="text" class="form-label">text</label>
                    <textarea class="form-control" id="text" name='text' rows="3">{{ old("name", $datum->text) }}</textarea>
                </div>   
                {{ csrf_field() }}
                <div class='mx-4 my-1'>
                    <input class="btn btn-outline-dark" type="submit" value="更新">
                    <a class='btn btn-secondary' href="{{route('Fut.'.$league)}}">
                        キャンセル
                    </a>
                </div>
                
            </form>
        </div>
    </div>
@endsection('content')