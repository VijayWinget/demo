@extends('layouts.default')
@section('title', 'Home Page')
@section('main-content')
    {{-- <div>
        <h2>This is the home page</h2>
    </div> --}}
    <div align='center' >
        <h5>Conditional Statements</h5>
        {{-- <p>{{$heading}}</p> --}}
        <p>{!!$heading!!}</p>
        {{-- <p> <?=$heading?> </p> --}}
        {{-- <p> <?=htmlentities($heading)?> </p> --}}

              @if ($noOfUser==0)
             <p>NO Users</p>
              @elseif ($noOfUser==1)
              <p>Have the one user</p>
              @else
              <p>Many Users</p>
              @endif

              @unless ($isOnline)
                <p>Isoffline</p>
              @endunless

              @isset($settings)
                  <p>settings Paased</p>
              @endisset
    </div>
@endsection

