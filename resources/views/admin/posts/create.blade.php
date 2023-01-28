@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Creazione di un nuovo form</h1>

        <form class="border rounded p-2" action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="mb-2" for="title">Titolo:</label>
                <input class="form-control" type="text" placeholder="Inserire il titolo del post" id="title"
                    name="title">
            </div>

            <div class="form-group">
                <label class="mb-2" for="content">Contenuto:</label>
                <textarea class="form-control" name="content" id="content" rows="10"
                    placeholder="Inserisci il contenuto del post"></textarea>
            </div>

            <button class="btn btn-warning mt-5" type="submit">
                Crea il post!
            </button>
        </form>
    </div>
@endsection
