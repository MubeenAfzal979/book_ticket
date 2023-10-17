<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Event Entry Pass</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image: url({{asset('theme/images/main-slider/1.jpg')}});
            /*background: linear-gradient(180deg, #6F39E8, #C836DC);*/
            color: #FFFFFF;
        }
        .ticket {
            width: 300px;
            background: #2E1E40;
            margin: 20px auto;
            border: 2px solid #6F39E8;
            border-radius: 20px;
            padding: 20px;
            color: #FFFFFF;
            text-shadow: 2px 2px 4px #000000;
        }
        .header-image {
            width: 100%;
            border-radius: 15px 15px 0 0;
        }
        h1 {
            font-size: 32px;
            color: #6F39E8;
            margin: 0;
            text-transform: uppercase;
        }

        h4 {
            color: #C836DC;
        }
        .event-info {
            margin-top: 20px;
        }
        .event-info p {
            font-size: 18px;
            color: #C836DC;
            margin: 10px 0;
        }
        .ticket-info {
            margin-top: 20px;
            border-top: 2px solid #6F39E8;
            padding-top: 10px;
        }
        .ticket-info p {
            font-size: 20px;
            font-weight: bold;
            color: #6F39E8;
        }
    </style>
</head>
<body>
<div class="ticket">

    <h4>You are invited</h4>
    <h1>N1 Mega Event</h1>
    <div class="event-info">
        <p><strong>Event:</strong> Lakhnow Uttar Pardesh</p>
        <p><strong>Date:</strong> October 20, 2023</p>
    </div>
    <div class="ticket-info">
        <p><strong>Ticket ID:</strong> {{$ticket['ticket_no'] }}</p>
        <p><strong>Name:</strong> {{ $ticket['issued_to']  }}</p>
        <p><strong>Ticket Date:</strong> {{date('M d, Y',strtotime($ticket['date']))}}</p>
        <p><strong>Price:</strong> 500 NRK</p>
    </div>
</div>
</body>
</html>

