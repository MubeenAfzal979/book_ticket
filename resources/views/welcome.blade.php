@extends('main')

@section('comingsoon')
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
<section class="buy-ticket">

    <div class="anim-icons full-width">

        <span class="icon icon-circle-blue wow fadeIn"></span>

        <span class="icon icon-circle-1 wow zoomIn"></span>

    </div>

    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12 order-2">

                <div class="inner-column">

                    <div class="ticket-form">

                        <form method="post" action="#">
                            <div class="form-group" style="margin-left: 30%;">
                                {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(250)->backgroundColor(255,255,255)->generate('0x09F2C321ccC79644d72dC7F7d679d459F453da4d') !!}
                            </div>
                            <div class="form-group"  style="margin-left: 22%;">
                                <span id="address">0x09F2C321ccC79644d72dC7F7d679d459F453da4d </span><i class="fa fa-copy" onclick="myFunction()"></i>
                            </div>
                            <div class="form-group">

                                <input type="text" name="username" placeholder="Your Full Name" required="">

                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Phone" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="from" placeholder="From Address" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="hash" placeholder="Transaction Hash" required="">
                            </div>
{{--                                <div class="form-group">--}}
{{--                                    <input type="checkbox" name="terms" id="term" required="">--}}
{{--                                    <label for="term">I accept the <span>Terms &amp; Conditions</span></label>--}}
{{--                                </div>--}}
                            <div class="form-group">

                                <button class="theme-btn btn-style-three" type="submit" name="Submit"><span class="btn-title">Confirm Your Purchase</span></button>

                            </div>

                        </form>

                    </div>


                    <!-- Follow Us -->

                </div>


            </div>



            <!-- Form Column -->

            <div class="form-column col-lg-4 col-md-12 col-sm-12">

                <div class="inner-column">

                    <h2>Buy Now <span>$NRK</span></h2>

                    <div class="instructions">
                    <p>
                    Here the Steps to Follow.
                    <ol>
                        <li>
                            Scan the QR Code.
                        </li>
                        <li>
                            Send $NRK to the account and copy the transaction hash.
                        </li>
                        <li>
                            Fill the form.
                        </li>
                        <li>
                            Paste the address you used to transfer $NRK.
                        </li>
                        <li>
                            Paste the transaction hash as a proof.
                        </li>
                        <li>
                            Lastly, Hit the "Confirm Your Purchase" Button..
                        </li>
                        Wait for the confirmation and get your E-Ticket.
                    </ol>
                        </p>
                    </div>


                </div>

            </div>

        </div>

    </div>

</section>


@endsection
<script>
    function myFunction() {
        // Get the text field
        var copyText = document.getElementById("address");
        console.log(copyText.select());
        // Select the text field
        copyText.select();
        document.execCommand("copy");// For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied the text: " + copyText.value);
    }
</script>
