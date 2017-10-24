@extends('layouts.app')
@section('content')
    <h3> Home <small> Administrção </small></h3>
    <a href="{{route('pages.create')}}"
       class="btn btn-xs btn-default">novo</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th class="text-right">acoes</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pages as $page)
    <tr>
        <td>{{ $page->id }}</td>
        <td>{{ $page->title }}</td>
        <td class="text-right">
            <a href="{{ route('pages.show', $page->id) }}" class="btn btn-default btn-xs"><span>info</span></a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>

    {{$pages->links()}}
@endsection