@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">
                    {{ __('主選單') }}
                    <a href="/course/create">新增</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table class="table">
                        @foreach (App\Models\course::all() as $course)
                        <thead>
                            <tr>
                                <th>課程名稱</th>
                                <th>課程內容</th>
                                <th>功能</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $course->coname }}</td>
                                <td>{{ $course->content }}</td>
                                <td>
                                    <a href="">編輯</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection