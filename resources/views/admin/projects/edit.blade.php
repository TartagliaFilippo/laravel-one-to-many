@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna alla lista Progetti</a>
        <h1>Crea un Progetto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <h4>Correggi i seguenti errori per proseguire:</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="mt-5">
            @method('PUT')
            @csrf

            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') ?? $project->title }}" />
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="url" class="form-label">Url Progetto</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url"
                value="{{ old('url') ?? $project->url }}" />
            @error('url')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="content" class="form-label">Descrizione</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="4">{{ old('content') ?? $project->content }}"</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-success mt-5">Salva</button>
        </form>
    </div>
@endsection
