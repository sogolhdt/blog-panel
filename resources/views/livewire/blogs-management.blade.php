@extends('components.layouts.app')
@section('content')
    <!doctype html>
    <html lang="en" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">number</th>
                    <th scope="col">author</th>
                    <th scope="col">title</th>
                    <th scope="col">operation</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $count++ }}
                        <td>{{ $blog->user_id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td><button type="button" class="btn btn-primary">open</button>
                            <button type="button" class="btn btn-warning">edit</button>
                            <button type="button" class="btn btn-danger">delete</button>
                        </td>
                        <!-- Add more columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>

    </body>

    </html>
@endsection
