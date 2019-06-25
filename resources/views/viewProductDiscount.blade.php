<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            text-align: center;
            border: 1px solid black;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<form>
    @csrf
    <h1>View Product</h1>
    <p>Description: {{$proDesc}}</p>
    <p>Prices: {{$listPr}}</p>
    <p>Discount Percent: {{$disPer}}</p>
    <p>Discount Sum:{{$sum}}</p>
    <p>Amount: {{$amount}}</p>
</form>

</body>
</html>
