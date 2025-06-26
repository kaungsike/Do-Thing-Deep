<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="background-color:rgb(153, 153, 153)">
    {{-- <h5>My name is {{$name}}.</h5>
    <p>I'm {{$age}} years old.</p>
    <p>My career is {{$career}}.</p> --}}

    {{-- <p>My name is {{$data['name']}}</p>
    <p>I'm {{$data['age']}} years old.</p>
    <p>My career is {{$data['career']}}.</p> --}}

    {{-- {!! $htmlString !!} --}}

    {{-- <h3>Name Lists</h3>
    <ul>
        @foreach ($nameLists as $name)
            <li>{{$name}}</li>
        @endforeach
    </ul> --}}


    {{-- @php
        $count = 0;
    @endphp

    <ul>
        @while ($count <= 5)
            <li>
                {{$count}}
            </li>
            @php
                $count++;
            @endphp
        @endwhile
    </ul> --}}

    @php
        $fruit = 'apple';
    @endphp

    @switch($fruit)
        @case('mango')
            <p>this is mango</p>
        @break

        @case('orange')
            <p>this is orange</p>
        @break

        @case('apple')
            <p>this is apple</p>
        @break

        @default
            <p>this is not fruit</p>
    @endswitch

</body>

</html>
