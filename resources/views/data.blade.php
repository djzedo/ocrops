@extends('layouts.master')

@section('title')
    Data
@stop
    
    {!! Html::style('css/gauges.css') !!}

@section('content')
    <figure>
<div class="gauge">
  <div class="meter"></div>
</div>
<figcaption>Plain</figcaption>
</figure>


<figure>
<div class="gauge overload">
  <div class="meter"></div>
</div>
<figcaption>Overload</figcaption>
</figure>


<figure>
<div class="gauge percentage">
  <div class="meter"></div>
  <div class="percentage-container">
    <div class="percentage-indicator">0%
5%
10%
15%
20%
25%
30%
35%
40%
45%
50%
55%
60%
65%
70%
75%
80%
85%
90%
95%
100%</div>
  </div>
</div>
  <figcaption>w/ Percentage</figcaption>
</figure>



@stop

