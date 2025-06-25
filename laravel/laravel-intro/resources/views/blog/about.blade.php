@extends('blog.main')
@section('content')
    <h1>Welcome to the About Page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, ipsa. Voluptate aspernatur quia obcaecati sed
        minus, temporibus quam. Quod harum exercitationem, facilis omnis itaque dicta eligendi fuga quae dolore maxime!</p>
@endsection
@push('scripts')
    <script>
        alert('Welcome to the About Page!');
    </script>
@endpush
