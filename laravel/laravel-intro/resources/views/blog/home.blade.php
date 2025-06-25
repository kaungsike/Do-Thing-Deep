@extends('blog.main')
@push('styles')
    <style>
        h1 {
            color: blue;
            text-align: center;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
            margin: 20px 0;
        }
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
    </style>
@endpush
@section('content')
<h1>
    Welcome to the Home Page!
@endsection
