<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>สวัสดี{{$username}}</h1>
<table border=1>
<tr>
    <th>ชื่อสินค้า</th>
    <th>ประเภทสินค้า(TH)</th>
    <th>ประเภทสินค้า(EN)</th>
    <th>จำนวน</th>
    <th>พนักงานที่เพิ่มสินค้า</th>
</tr>
    @foreach($products as $p)
        <tr>
        <td>{{$p->product_name}}</td>
        <td>{{$p->productth}}</td>
        <td>{{$p->product_type}}</td>
        <td>{{$p->product_amount}}</td>
        <td>{{$p->user->name}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>