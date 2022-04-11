
@extends('layouts.helloapp')

@section('title')
    @parent
    Index
@endsection

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです~</p>
    <p>必要なだけ記述しなさいね</p>


    <p>Controller value<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'view_message'={{$view_message}}</p>
    {{-- foreachディレクティブの例 --}}
    {{-- <ul>
        @each('components.item',$data,'item')
    </ul> --}}

    {{-- @include('components.message',['msg_title'=>'OK','msg_content'=>'サブビューですやん']) --}}
    {{-- 表示の仕方　上の書き方が楽そう, 下でも似たようなことができる --}}
    {{-- @component('components.message')
        @slot('msg_title')
        OK
        @endslot

        @slot('msg_content')
        サブビューですん
        @endslot
    @endcomponent --}}

@endsection



@section('footer')
copyright 2021 んご
@endsection