@extends('layouts.app')
    @section('content')

    <form action="{{route('pages.update', $page->id), $page->id}}"
          class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
    @include('admin.pages.form')
    </form>

    <a href="{{route('pages.show', $page->id)}}"
       class="btn btn-xs btn-default">voltar</a>

@endsection