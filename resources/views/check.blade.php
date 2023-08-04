@extends('main')

@section('comingsoon')
<!-- Coming Soon -->
<?php
die('here');
?>
<section class="coming-soon-section">

    <div class="auto-container">

        <div class="outer-box">

            <h1 style="color: white; font-size: large">{{$message}}</h1>

        </div>

    </div>

</section>
@endsection
<!-- End Coming Soon -->

@section('content')
<section class="">

    <div class="anim-icons full-width">

        <span class="icon icon-circle-blue wow fadeIn"></span>

        <span class="icon icon-circle-1 wow zoomIn"></span>

    </div>

    <div class="auto-container">

        <div class="row">

            <!-- Content Column -->

            <span style="padding: 20px">
            <h5>{{$message}}</h5>

</span>

            <!-- Form Column -->



        </div>

    </div>

</section>
<!-- Main Footer -->
@endsection
