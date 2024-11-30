<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order PDF</title>
</head>
<body>
    Customer Details
    Name: <h1>Order Details</h1>
    Email: <h3>{{$order->name}}</h3>
    Phone No.: <h3>{{$order->phone}}</h3>
    Address: <h3>{{$order->email}}</h3>
    ID no.: <h3>{{$order->address}}</h3>
    Product: <h3>{{$order->user_id}}</h3>
    Quantity: <h3>{{$order->quantity}}</h3>
    Price: <h3>{{$order->price}}</h3>
   
    Product Id: <h3>{{$order->product_id}}</h3>
    Payment Status<h3>{{$order->payment_status}}</h3>
    Delivery Status<h3>{{$order->delivery_status}}</h3>
    <br><br>
    Pic:
<img src="product/{{$order->image}}" height="250" width="450" alt="">
</body>
</html>