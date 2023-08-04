<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ticket</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
  <script src="{{url('/js/plugins-init/sweetalert.init.js')}}" type="text/javascript"></script>
  {{-- <link href="{{asset('theme/css/ticket_style.css')}}" rel="stylesheet"> --}}
  <style>
    body {
	background: #dd3f3e;
	font-family: 'Montserrat', sans-serif;
	margin: 0;
	padding: 0;
  }
  .ticket {
	display: flex;
	position: relative;
	justify-content: center;
	align-items: center;
	width: 700px;
	margin: 20px auto;
  }
  .ticket .stub,
  .ticket .check {
	box-sizing: border-box;
  }
  .stub {
	background: #ef5658;
	height: 250px;
	width: 250px;
	color: white;
	padding: 20px;
	position: relative;
  }
  .stub:before {
	content: '';
	position: absolute;
	top: 0;
	right: 0;
	border-top: 20px solid #dd3f3e;
	border-left: 20px solid #ef5658;
	width: 0;
  }
  .stub:after {
	content: '';
	position: absolute;
	bottom: 0;
	right: 0;
	border-bottom: 20px solid #dd3f3e;
	border-left: 20px solid #ef5658;
	width: 0;
  }
  .stub .top {
	display: flex;
	align-items: center;
	height: 40px;
	text-transform: uppercase;
  }
  .stub .top .line {
	display: block;
	background: #fff;
	height: 40px;
	width: 3px;
	margin: 0 20px;
  }
  .stub .top .num {
	font-size: 10px;
  }
  .stub .top .num span {
	color: #000;
  }
  .stub .number {
	position: absolute;
	left: 10px;
	top:80px;
	font-size: 70px;
  }
  .stub .invite {
	position: absolute;
	left: 150px;
	bottom: 45px;
	color: #000;
	width: 20%;
  }
  .stub .invite:before {
	content: '';
	background: #fff;
	display: block;
	width: 40px;
	height: 3px;
	margin-bottom: 5px;
  }
  .check {
	background: #fff;
	height: 250px;
	width: 450px;
	padding: 40px;
	position: relative;
  }
  .check:before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	border-top: 20px solid #dd3f3e;
	border-right: 20px solid #fff;
	width: 0;
  }
  .check:after {
	content: '';
	position: absolute;
	bottom: 0;
	left: 0;
	border-bottom: 20px solid #dd3f3e;
	border-right: 20px solid #fff;
	width: 0;
  }
  .check .big {
	font-size: 80px;
	font-weight: 900;
	line-height: 0.8em;
  }
  .img-banner{
	width:380px;
	height:150px
  }
  .check .number {
	position: absolute;
	top: 50px;
	right: 50px;
	color: #ef5658;
	font-size: 40px;
  }
  .check .date {
	position: absolute;
	top: 50px;
	right: 50px;
	color: rgb(159, 5, 5);
	font-size: 24px;
  }
  .check .info {
	display: flex;
	justify-content: flex-start;
	font-size: 12px;
	margin-top: 20px;
	width: 100%;
  }
  .check .info section {
	margin-right: 50px;
	margin-top: 100px;
  }
  .check .info section:before {
	content: '';
	background: #ef5658;
	display: block;
	width: 40px;
	height: 3px;
	margin-bottom: 5px;
  }
  .check .info section .title {
	font-size: 10px;
	text-transform: uppercase;
  }
    </style>
</head>
<body>
<div class="ticket">
  <div class="stub">
    <div class="top">
      {{-- <span class="admit">Admi t</span> --}}
      {{-- <span class="line"></span> --}}
      <span class="num">
        <span>Ticket No:</span>
      </span>
    </div>
    <div class="number">#{{ $ticket['ticket_no'] }}</div>
  </div>
  {{-- <div class="check" styel="background-image:url({{url('images/php_mysql.jpg')}})"> --}}
  <div class="check" style = "background-image:url('https://img.freepik.com/premium-vector/golden-confetti-falls-beautiful-background-falling-streamers-stage_257584-1068.jpg')">
    <div class="date">{{ $ticket['event'] }}</div>
    <div class="info">
      <section>
        <div class="title">Date</div>
        <div>{{ $ticket['date'] }}</div>
      </section>
      <section>
        <div class="title">Issued To</div>
        <div>{{ $ticket['issued_to'] }}</div>
      </section>
      <section>
        <div class="title">Issued By</div>
        <div>{{ $ticket['issued_by'] }}</div>
      </section>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
