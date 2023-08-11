@extends('layouts.default')
@section('title', 'loop Page')
@section('main-content')
    <div align='center' >
        <h3>Loop Statemnets</h3>

        @for ($i=0;$i<=4;$i++)
<p>The no is <b>{{$i}}</b>   </p>
@endfor

<p>Authors Count {{count($authors)}} </p>

@foreach ($author as $au)
<p>The Authr is <b>{{$au}}</b>   </p>
@endforeach

@foreach ($authors as $au)
<p>The Authr is <b>{{$au['name']}}</b>   </p>
@endforeach

@while ($au = array_pop($authors))
    <p>{{$au['name']}}</p>
@endwhile

@forelse ($authors as $au)
<p>{{$au['name']}}</p>
@empty
<p>No Authores</p>
@endforelse

    </div>
@endsection

