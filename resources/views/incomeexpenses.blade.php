<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

<button type="button">
    <a href="{{ url('/create') }}" >เพิ่ม</a>
</button>


<table class="table">
    <thead>
      <tr>
        <th scope="col">ชื่อ</th>
        <th scope="col">จำนวนเงิน</th>
        <th scope="col">ประเภท</th>
        <th scope="col">เวลาทีใช้จ่าย</th>
      </tr>
    </thead>
    <tbody>
        @foreach($getData as $key => $value)

      <tr>
        <td>{{$value->name}}</td>
        <td>{{number_format($value->amount , 2)}}</td>
        <td>{{$value->type}}</td>
        <td>{{$value->datetime}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
    
</body>
</html>

