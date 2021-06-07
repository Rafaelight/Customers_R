<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: top;
            }
            .content-dark{
                color: #262520;
                font-size: 20px;
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .center-items{
                align:center;
                width:20%;
                margin: 5%
            }
        </style>
</head>
<body>
@include('flash::message')
    <div class="center-items">
        <a href="/"><--Home</a>    
        <h4>Registro de Customers</h4>
        <form action="/register/reg" method="POST">
                    @csrf
                    <label for="dni">DNI: <input type="text" name="dni" id="dni" value="{{old('dni')}}"></label> <br>
                    <label for="name">Name: <input type="text" name="name" value="{{old('name')}}"></label> <br>
                    <label for="last_name">Last Name: <input type="text" name="last_name" value="{{old('last_name')}}"></label> <br>
                    <label for="address">Adress: <input type="text" name="address" value="{{old('address')}}"></label> 
                    <label for="email">Email: <input type="text" name="email" value="{{old('email')}}"></label> <br>
                    <label for="communes">Communes: <br>
                        <select name="communes" id="communes">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </label> <br>
                    <label for="regions">Regiones: <br>
                        <select name="regions" id="regions">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </label> <br>
                    <button type="submit" style="margin-left:50px">Guardar</button>
        </form>
    </div>
    
</body>
</html>