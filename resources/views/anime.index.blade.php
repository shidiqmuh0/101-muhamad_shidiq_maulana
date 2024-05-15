<!-- resources/views/anime/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Anime</h1>
    <a href="{{ route('anime.create') }}">Tambah Anime Baru</a>
    <ul>
        @foreach($animes as $anime)
            <li>
                <a href="{{ route('anime.show', $anime->id) }}">{{ $anime->title }}</a>
                <a href="{{ route('anime.edit', $anime->id) }}">Edit</a>
                <form action="{{ route('anime.destroy', $anime->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
