@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Posts</h1>

        {{-- last post published --}}
        <div class="ms_last-post border-bottom">
            <h2>Primo post:</h2>

            <div class="row bg-secondary text-light">
                <div class="col-8">
                    <h3>{{ $posts->first()->title }}</h3>
                </div>

                <div class="col-4">
                    <h3>{{ $posts->first()->updated_at }}</h3>
                </div>
            </div>

            <p class="mt-3 p-2 border">
                {{ $posts->first()->content }}
            </p>
        </div>
        {{-- /last post published --}}

        {{-- posts list --}}
        <div class="ms_posts-list mt-3">
            <h2>Posts list</h2>
            <table class="table table-striped table-dark">
                <thead>
                    <th>#</th>
                    <th class="w-50">Title</th>
                    <th>Creation</th>
                    <th>Update</th>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                {{ $post->id }}
                            </td>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                {{ $post->created_at }}
                            </td>
                            <td>
                                {{ $post->updated_at }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- /posts-list --}}
    </div>
@endsection
