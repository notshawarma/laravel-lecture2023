<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thank you for order ! {{  $order_id }} is being processed </h1>
    <img src="{{ $message->embed(Storage::path('images\test.png')) }}" style="padding:0px; margin:0px" />
    
</body>

</html>