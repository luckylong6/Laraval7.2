@extends('app')

@section('title', 'Page Title')

@section('sidebar')
@parent
<p>
    @if(count($data) > 1)
    <ul>
        @foreach($data as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
    @else
    <p>
        only one recode
    </p>
    
    @endif
    I am Supermen @{{ $name1 }}
</p>
@verbatim
<div class="container">
    Hello, {{ $name }} 
</div>
@endverbatim
@endsection

@section('content')
<p>
    handsome
</p>
@endsection