use App\Http\Controllers;
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1{text-align:center}
        .card{direction:rtl:}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>مختصر الروابط ^-^</title>
</head>
<body>
    <div class="container">
        <h1>الروابط المختصرة </h1>
        <div class="card">
            <div class="card-header">
                <form action=""  method ="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="ادخل الرابط الذي تريد اختصاره" >
                            <button class="btn btn-success" >توليد رابط مختصر </button>
                        </div>
                    </form>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
        
                    <tr>
                    <th > الرابط الاصلي </th>
                    <th >الرابط المختصر </th>
                    <th>عدد الزيارات </th>
                    </tr>
        
                </thead>
                <tbody>
                @foreach ($shortLinks as $row)
            
                    <tr>
                        <td>{{ $row->link }}</td>
                        <td ><a href="{{route ('show.shorten.link' ,$row->code)}}">{{url('').'/'.$row->code}}</a></td>
                        <td>{{$row->visits_count}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                
        </div>
            

        </div>


    </div>
</body>
</html>