@extends('main')
@section('content')
    <div class="container">
        <h1>dashboard {{ auth()->user()->username }}</h1>
        @if(auth()->user()->role === 1)
            <h1>dokter</h1>
        @endif
    </div>
@endsection