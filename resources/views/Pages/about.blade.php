@extends('layout.master_layout')
@section('title')
    About
@endsection
@section('content')
    <h1>About page</h1>
    <a href="{{ route('dashboard') }}">dashboard"></a>
@endsection

{{-- use js script --}}
{{-- @push('script')
    <script>
        alert("hello")
    </script>
@endpush --}}

{{-- use css style  --}}

{{-- @prepend('style')
<style>
    body {
        background-color: red;
    }
</style>
    
@endprepend --}}
