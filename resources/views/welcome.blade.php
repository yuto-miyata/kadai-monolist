@extends('layouts.app')

@section('cover')
    <div class="cover">
        <dev class="cover-inner">
            <div class="cover-contents">
                <hi>素敵なモノと出会う場所</hi>
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">モノリストを始める</a>
                @endif
            </div>
        </dev>
    </div>
@endsection

@section('content')
    テスト
@endsection
