<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <table class="table">
        <thead>
        <tr>
            <th style="font-weight: bold; width: 100px;" >  Client        </th>
            <th style="font-weight: bold; width: 150px;">  Login At      </th>
            <th style="font-weight: bold; width: 150px;">  Logout At     </th>
            <th style="font-weight: bold; width: 100px;">  Total Minutes </th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $key => $car)
            <tr>
                <td>
                    Client - {{++$key}}
                </td>

                <td>
                    {{$car->login_at->format('d-M-Y H:i')}}
                </td>

                <td>
                    {{$car->logout_at->format('d-M-Y H:i')}}
                </td>

                <td>
                    {{$car->total}}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>







