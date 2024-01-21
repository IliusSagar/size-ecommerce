<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @php 
        $data = DB::table('products')->get();
    @endphp

    <table>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->size}}</td>
            <td>
                <a href="{{ url('prouct/single/'.$item->id)}}">Single</a>
            </td>
        </tr>
            
        @endforeach
    </table>
    
</body>
</html>