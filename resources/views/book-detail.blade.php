@extends('layout')
@section('content')
    <div class="row">
        <div class="col-4">
            <img src="{{ asset($book->photo) }}" alt="" width="100%">
        </div>
        <div class="col-8">
            <h4>{{ $book->name }}</h4>
            <table class="table">
                <tr>
                    <th>Description</th>
                    <td>{{ $book->description }}</td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td>{{ $book->genre->name }}</td>
                </tr>
                <tr>
                    <th>Publish Date</th>
                    <td>{{ $book->publish_date }}</td>
                </tr>
            </table>
            @include('author')
        </div>
    </div>
@endsection