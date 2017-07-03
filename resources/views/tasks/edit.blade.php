@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスク編集ページ</h1>

   @include('commons.error_messages')
   
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status' , 'ステータス:') !!}
        {!! Form::select('status', ['Done' =>'Done', 'Not yet' => 'Not yet'], 'Not yet') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection