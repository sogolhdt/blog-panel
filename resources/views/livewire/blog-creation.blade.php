@extends('components.layouts.app')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a New Blog</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('blog.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="6" required>{{ old('content') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="expire_date">Expire Date</label>
                                <input type="date" class="form-control" id="expire_date" name="expire_date"
                                    value="{{ old('expire_date') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Create Blog</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
