@extends('layouts.layout')

@section('content')

    @foreach(auth()->user()->readNotifications as $notification)
        قام العضو
        {{ $notification->data['user']['name'] }}
        بالتعليق علي المنشور
        {{ $notification->data['post']['title'] }}
    @endforeach

    @endsection