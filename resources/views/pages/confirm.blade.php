@extends('layouts.app')
@section('content')
    @if(isset($errors))
        @foreach($errors as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    @endsection