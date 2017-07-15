@extends('layouts.app')

@section('content')

  @if (Auth::check() && count($tasks) > 0)
    <h1>タスク一覧</h1>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>タスクID</th>
            <th>ユーザー名</th>
            <th>ステータス</th>
            <th>タスク</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                <td>{{ $task->user->name }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->content }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
{!! $tasks->render() !!}
          {!! link_to_route('tasks.create' , '新規作成', null, ['class' => 'btn btn-primary']) !!}

  @else
    <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
  @endif

@endsection