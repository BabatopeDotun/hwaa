
@extends('layouts.app')

@section('content')



    </div>
    <!-- /Menu -->
  </div>
</header>
<h1>{{$title}}</h1>
<div id="wrapper">
  <!-- Site Content -->
  <div class="site-content">
    <!-- Header -->
<!-- Wrapper THERE SHOULD BE A HOME HEADER HERE-->

    <!-- /Header -->
    <!-- Side Info -->

  @if(count($services) > 0)
    <ul class="list-group"> 
      @foreach ($services as $service)
        <li class="list-group-item"> {{$service}} </li>
          
      @endforeach  
    </ul>
  @endif