@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                    <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{-- ユーザ詳細タブ --}}
                <li class="nav-item"><a href="#" class="nav-link">TimeLine</a></li>
                {{-- ユーザ一覧タブ --}}
                <li class="nav-item"><a href="#" class="nav-link">Followings</a></li>
                {{-- ユーザ詳細タブ --}}
                <li class="nav-item"><a href="#" class="nav-link">Followers</a></li>
            </ul>
        </div>
    </div>
@endsection