@extends('main')
@section('comingsoon')
<!-- Coming Soon -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="{{url('/vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<script src="{{url('/vendor/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
	<script src="{{url('/js/plugins-init/sweetalert.init.js')}}" type="text/javascript"></script>
<style>


    .ticket {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 700px;
        margin: 20px auto;

    .stub, .check {
        box-sizing: border-box;
    }
    }

    .stub {
        background: #ef5658;
        height: 250px;
        width: 250px;
        color: white;
        padding: 20px;
        position: relative;

    &:before {
         content: '';
         position: absolute;
         top: 0; right: 0;
         border-top: 20px solid #dd3f3e;
         border-left: 20px solid #ef5658;
         width: 0;
     }
    &:after {
         content: '';
         position: absolute;
         bottom: 0; right: 0;
         border-bottom: 20px solid #dd3f3e;
         border-left: 20px solid #ef5658;
         width: 0;
     }

    .top {
        display: flex;
        align-items: center;
        height: 40px;
        text-transform: uppercase;

    .line {
        display: block;
        background: #fff;
        height: 40px;
        width: 3px;
        margin: 0 20px;
    }
    .num {
        font-size: 10px;
    span {
        color: #000;
    }
    }
    }
    .number {
        position: absolute;
        left: 40px;
        font-size: 150px;
    }
    .invite {
        position: absolute;
        left: 150px;
        bottom: 45px;
        color: #000;
        width: 20%;

    &:before {
         content: '';
         background: #fff;
         display: block;
         width: 40px;
         height: 3px;
         margin-bottom: 5px;
     }
    }
    }

    .check {
        background: #fff;
        height: 250px;
        width: 450px;
        padding: 40px;
        position: relative;

    &:before {
         content: '';
         position: absolute;
         top: 0; left: 0;
         border-top: 20px solid #dd3f3e;
         border-right: 20px solid #fff;
         width: 0;
     }
    &:after {
         content: '';
         position: absolute;
         bottom: 0; left: 0;
         border-bottom: 20px solid #dd3f3e;
         border-right: 20px solid #fff;
         width: 0;
     }

    .big {
        font-size: 80px;
        font-weight: 900;
        line-height: .8em;
    }
    .number {
        position: absolute;
        top: 50px;
        right: 50px;
        color: #ef5658;
        font-size: 40px;
    }
    .info {
        display: flex;
        justify-content: flex-start;

        font-size: 12px;
        margin-top: 20px;
        width: 100%;

    section {
        margin-right: 50px;
    &:before {
         content: '';
         background: #ef5658;
         display: block;
         width: 40px;
         height: 3px;
         margin-bottom: 5px;
     }
    .title {
        font-size: 10px;
        text-transform: uppercase;
    }
    }
    }
    }

</style>
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

    <span>{{$ticket->full_name }}</span>
  </span>
                        </div>

                        <div class="invite">
                            Invite for you
                        </div>
                    </div>
                    <div class="check">
                        <div class="big">
                            You're <br> Invited
                        </div>
                        <div class="number">{{!!'00'.$ticket->id }}</div>
                        <div class="info">
                            <section>
                                <div class="title">Date</div>
                                <div>{{date('d/m/Y',strtotime($ticket->created_at))}}</div>
                            </section>
                            <section>
                                <div class="title">Issued By</div>
                                <div>N1</div>
                            </section>
                            <section>
                                <div class="title">Invite Number</div>
                                <div>{{!!'000'.$ticket->id }}</div>
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
