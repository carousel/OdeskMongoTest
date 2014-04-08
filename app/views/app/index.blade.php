<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel = "stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <style>
            .nav.navbar-nav.navbar-right>li>a{
                color:orange;
            }
            .nav.navbar-nav.navbar-right>li>a:hover{
                color:white;
            }
            li{
                list-style-type:none;
            }
            .main-name{
                font-weight:bolder;
                color:green;
            }
            .network{
                margin-left:15px;
            }
            .hostnames{
                margin-left:15px;
            }
            .btn-group{
                margin-top:6%;
                margin-left:20%;
            }
            .content{
                margin-left:35%;
            }
        </style>
    </head>
    <body>
    <div class="row-fluid">
        <div class="container"> 
            <div class="span12">
                    <nav class="navbar navbar-default navbar-inverse" role="navigation">
                        <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">OdeskMongoTest</a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>{{HTML::link("/create-form","Create New Dataset")}}</li>
                                </ul>
                            </div><!-- /.navbar-collapse -->

                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
      </div>
      <div class="content">
            @foreach($networks as $network )
                <ul>
                    <li>Id:{{$network->_id}}</li>
                    <li>Uid:{{$network->uid}}</li>
                    </br>
                    <span class="main-name">Networks</span>

                    <div class="network">
                        <span class="name">{{$network[0]["n_name"]}}</span>
                        <li>Nid:{{$network->networks[0]["nid"]}}</li>
                        <li>Name:{{$network->networks[0]["n_name"]}}</li>
                        <li>Ip:{{$network->networks[0]["n_ip"]}}</li>
                        <li>Status:{{$network->networks[0]["n_status"]}}</li>
                        </br>
                        <span class="name">{{$network[1]["n_name"]}}</span>
                        <li>Nid:{{$network->networks[1]["nid"]}}</li>
                        <li>Name:{{$network->networks[1]["n_name"]}}</li>
                        <li>Ip:{{$network->networks[1]["n_ip"]}}</li>
                        <li>Status:{{$network->networks[1]["n_status"]}}</li>
                    </div>
                        </br>

                    <span class="main-name">Hostnames</span>
                    <div class="hostnames">
                        <li>Name:{{$network->hostnames[0]["hostname1"]}}</li>
                        <li>Name:{{$network->hostnames[0]["block1"]}}</li>
                        <li>Name:{{$network->hostnames[1]["hostname2"]}}</li>
                        </br>
                        <li>Name:{{$network->hostnames[1]["block2"]}}</li>
                        <li>Name:{{$network->hostnames[2]["hostname3"]}}</li>
                        <li>Name:{{$network->hostnames[2]["block3"]}}</li>
                    </div>
                </ul>
                <span class="btn-group">
                    {{Form::open(["url"=>"/delete"])}}
                        {{Form::submit("Delete",["class"=>"btn btn-danger"])}}
                        {{Form::hidden("_id",$network->_id)}}
                        {{HTML::link("/edit-form","edit",["class"=>"btn btn-success"])}}
                    {{Form::close()}}
                </span>
            @endforeach      
      </div>
    </body>
</html>
