@extends('layouts.app')
    @section('content')

    <form action="{{route('pages.store')}}"
          class="form-horizontal" method="post">
    @include('admin.pages.form')
    </form>

    <a href="{{route('pages.index')}}"
       class="btn btn-xs btn-default">voltar</a>

@endsection