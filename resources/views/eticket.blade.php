@extends('main')

@section('comingsoon')
<!-- Coming Soon -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="{{url('/vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<script src="{{url('/vendor/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
	<script src="{{url('/js/plugins-init/sweetalert.init.js')}}" type="text/javascript"></script>
	
<section class="coming-soon-section">

    <div class="auto-container">

        <div class="outer-box">

            <h1 style="color: white; font-size: large">Pay With $NRK</h1>

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

            <div class="content-column col-lg-12 col-md-12 col-sm-12 order-2 eticket">

                {{--eticket html--}}

                <div class="ticket">
                    <div class="stub">
                        <div class="top">
                            <span class="admit">Admit</span>
                            <span class="line"></span>
                            <span class="num">
    Invitation
    <span>31415926</span>
  </span>
                        </div>
                        <div class="number">1</div>
                        <div class="invite">
                            Invite for you
                        </div>
                    </div>
                    <div class="check">
                        <div class="big">
                            You're <br> Invited
                        </div>
                        <div class="number">#1</div>
                        <div class="info">
                            <section>
                                <div class="title">Date</div>
                                <div>4/27/2016</div>
                            </section>
                            <section>
                                <div class="title">Issued By</div>
                                <div>Ampersand</div>
                            </section>
                            <section>
                                <div class="title">Invite Number</div>
                                <div>31415926</div>
                            </section>
                        </div>
                    </div>
                </div>
                {{--eticket html--}}


            </div>



            <!-- Form Column -->



        </div>

    </div>

</section>
<!-- Main Footer -->
@endsection
