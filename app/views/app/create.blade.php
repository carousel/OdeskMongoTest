

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel = "stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <style>
            body{
                background-color:#ccc;
                margin:auto;
            }
            .nav.navbar-nav.navbar-right>li>a{
                color:orange;
            }
            .nav.navbar-nav.navbar-right>li>a:hover{
                color:white;
            }
            .col-md-8{
            }
            .form-button{
                margin-top:10px;
                float:right;
            }
            .name{
                color:blue;
                font-weight:bolder;
                margin-bottom:5px;
            }
            .form-name{
                font-weight:bolder;
                font-size:20px;
                color:red;
                
            }
            .main-name{
                font-weight:bolder;
                font-size:16px;
                color:green;
            }
        </style>
    </head>
    <body>
        <div class="container"> 
                    <nav class="navbar navbar-default navbar-inverse" role="navigation">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">OdeskMongoTest</a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>{{HTML::link("/","Home")}}</li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                    </nav>

                        <div class="col-md-8">
                                {{Form::open(["url"=>"/edit","method"=>"POST"])}}
                                    <span class="form-name">Create New Dataset </span><hr>
                                    {{Form::label("uid")}}
                                    {{Form::text("uid","",["class"=>"form-control","placeholder"=>"Enter uid"])}}
                                    <hr>
                                    <span class="main-name">Networks</span><hr>
                                    <span class="name">Home</span></br>
                                    {{Form::label("home network id")}}
                                    {{Form::text("home network id","",["class"=>"form-control","placeholder"=>"Enter network id"])}}
                                    {{Form::label("home network name")}}
                                    {{Form::text("home network name","",["class"=>"form-control","placeholder"=>"Enter network name"])}}
                                    {{Form::label("home network ip address")}}
                                    {{Form::text("home network ip address","",["class"=>"form-control","placeholder"=>"Enter network ip"])}}
                                    {{Form::label("home network status")}}
                                    {{Form::text("home network status","",["class"=>"form-control","placeholder"=>"Enter network status"])}}

                                    <hr>
                                    <span class="name">Work</span></br>
                                    {{Form::label("work network id")}}
                                    {{Form::text("work network id","",["class"=>"form-control","placeholder"=>"Enter network id"])}}
                                    {{Form::label("work network name")}}
                                    {{Form::text("work network name","",["class"=>"form-control","placeholder"=>"Enter network name"])}}
                                    {{Form::label("work network ip address")}}
                                    {{Form::text("work network ip address","",["class"=>"form-control","placeholder"=>"Enter network ip"])}}
                                    {{Form::label("work  network status")}}
                                    {{Form::text("work network status","",["class"=>"form-control","placeholder"=>"Enter network status"])}}
                                    <hr>
                                    <span class="main-name">Hostnames</span><hr>
                                    {{Form::label("hostname1")}}
                                    {{Form::text("hostname1","",["class"=>"form-control","placeholder"=>"Enter hostname"])}}
                                    {{Form::label("block1")}}
                                    {{Form::text("block1","",["class"=>"form-control","placeholder"=>"Enter block"])}}
                                    <hr>
                                    {{Form::label("hostname2")}}
                                    {{Form::text("hostname2","",["class"=>"form-control","placeholder"=>"Enter hostname"])}}
                                    {{Form::label("block2")}}
                                    {{Form::text("block2","",["class"=>"form-control","placeholder"=>"Enter block"])}}
                                    <hr>
                                    {{Form::label("hostname3")}}
                                    {{Form::text("hostname3","",["class"=>"form-control","placeholder"=>"Enter hostname"])}}
                                    {{Form::label("block3")}}
                                    {{Form::text("block3","",["class"=>"form-control","placeholder"=>"Enter block"])}}
                                    {{Form::submit("Save",["class"=>"btn btn-success form-button"])}}
                                {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
