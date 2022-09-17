@include('includepage')
<h1> Test Page</h1>

@php
    $message = 'some messages here';

    $array = ['array 1', 'array 2' , 'array 3' , 'array 4'];
    $arrayWithKey = ['key_1' => 'Mohamed1' , 'key_2' => 'Mohamed 2' , 'key_3' => 'Mohamed 3' , 'key_4' => 'array_4' , 'key_5' => 'array_5'];

@endphp

{{--<h3> {{$message}}</h3>--}}

@foreach($array as $arr)

    <h2>
        <li> {{$arr}} </li>
    </h2>

@endforeach

@foreach($arrayWithKey as $key => $arrayKey)

    <h2>
        <li> {{$key , $arrayKey }} </li>
    </h2>

@endforeach

@if(count($arrayWithKey) > count($array))
    <h3>the array 1 is less than the array 2</h3>
@elseif(count($arrayWithKey) < count($array))
    <h3>the array 1 is greater than the array 2</h3>
@else
    <h3>the array 1 is equal to the array 2</h3>
@endif

{{  ( count($arrayWithKey) > count($array) )  ? 'the array 1 is less than the array 2' : ( (count($arrayWithKey) < count($array)) ? 'the array 1 is greater than the array 2' :  'the array 1 is equal to the array 2' ) }}

