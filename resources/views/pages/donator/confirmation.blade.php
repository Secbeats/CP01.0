@extends('layouts.app')
<br/>
<br/>
<br/>
<br/>
@section('content')
    @if(isset($errors))
        @foreach($errors as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    @endsection