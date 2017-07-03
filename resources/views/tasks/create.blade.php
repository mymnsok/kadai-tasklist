@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    @include('commons.error_messages')
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content' , 'メッセージ:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status' , 'ステータス:') !!}
        {!! Form::select('status', ['Done' =>'Done', 'Not yet' => 'Not yet'], 'Not yet') !!}
        
        {!! Form::submit('投稿') !!}
    
    {!! Form::close() !!}


@endsection