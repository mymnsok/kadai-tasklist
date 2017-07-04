@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    @include('commons.error_messages')

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-5 col-lg-offset-3 col-sm-6">    
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
            <div class="form-group">
                {!! Form::label('status' , 'ステータス:') !!}
                {!! Form::select('status', ['Done' =>'Done', 'Not yet' => 'Not yet'], 'Not yet', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content' , 'タスク:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
       
            {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
        {!! Form::close() !!}
        </div>
    </div>

@endsection