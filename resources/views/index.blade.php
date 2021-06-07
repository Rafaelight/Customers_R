<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


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

            .width-center{
                width: 80px;
                font-size: 15px;
                margin-left:-20px
            }
            .m-r{
                float: right;
                position:absolute;
                margin-top:-30px;
                margin-right:120px
            }
        </style>
    </head>
    <body>
    @include('flash::message')
    <a href="/register/reg">Registrar</a>
        <div class="flex-center ">
            

            <div class="content">
                <div class="title md">
                    Customers
                </div>
                    <div class="search">
                        <form action="/{$list->dni}" method="POST">
                            @method('GET')
                            <label for="dni">Buscar <input type="text" name="dni" id="dni"></label>
                            <select name="option" id="option">
                                <option>Email</option>
                                <option selected>DNI</option>
                            </select>
                            <button>Buscar</button>
                        </form>
                    </div>
                        <div class="content-dark">
                        </br>
                            <!-- <div class="flex-center width-center">
                            ID
                            Name 
                            </div> -->
                            
                            @foreach ($lista as $list)
                              <form action="{$lista->dni}" method="POST">  
                                @csrf
                                @method('PUT')
                                {{$list->dni}} 
                                {{$list->name}} {{$list->last_name}}
                                <div class="m-r ">
                                
                                @if($list->status == 'A'  || $list->status == 'I')
                                <button class="width-center" onClick="return confirm('¿Desea eliminar el customer?')" name="del" value="{{$list->dni}}">Eliminar</button>
                                @else
                                <button class="width-center" onClick="alert('Registro no existe')">Eliminar</button>
                                @endif
                                </div><br>
                                </form>

                            @endforeach
                            
                           
                            
                           
                        </div>
                
            </div>
        </div>
    </body>
</html>
