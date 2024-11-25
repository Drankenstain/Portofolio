<div class="row">
    <div class="col-4">
        <img src="{{ asset($book->author->photo) }}" alt="" width="75%">
    </div>
    <div class="col-8">
        <table class="table">
            <tr>
                <th>name</th>
                <td>{{ $book->author->name }}</td>
            </tr>
            <tr>
                <th>birth_date</th>
                <td>{{ $book->author->birth_date }}</td>
            </tr>
        </table>
        <a class="btn btn-md btn-outline-dark" href="{{ route('book.index') }}">back</a>
    </div>
</div>
