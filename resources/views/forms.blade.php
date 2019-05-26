<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form With Validation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- matrial kit --}}
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/material-kit.css">
    <link rel="stylesheet" href="css/material-kit.css.map">
    <script src="js/jquery.min.js"></script>

    {{-- end matrial kit --}}

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="css/tab.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    {{--awesome--}}
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
    <![endif]-->

    <script src="js/bootstrap-datepicker.js"></script>
    <script>
        $('.datepicker').datepicker({
            weekStart:1
        });
    </script>

    <script>
        $(function(){
            $('a[title]').tooltip();
        });
    </script>

</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="board">
                        <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                                <div class="liner"></div>
                                <li class="active">
                                    <a href="#Individual" data-toggle="tab" title="Individual">
                                        <span class="round-tabs one">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#Security" data-toggle="tab" title="Security">
                                        <span class="round-tabs two">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#Success" data-toggle="tab" title="Success">
                                        <span class="round-tabs three">
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane animated bounceIn active" id="Individual">
                                {{--names--}}
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                {{--date--}}
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-static">
                                                <label class="control-label">Date</label>
                                                <input class="datepicker form-control" type="text" value="03/12/2016"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--Gender--}}
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Gender</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios">
                                                Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                {{--Country--}}
                                <div class="form-group">
                                    <label for="select111" class="col-md-2 control-label">Country</label>

                                    <div class="col-md-10">
                                        <select id="select111" class="form-control">
                                            <option>Iran</option>
                                            <option>India</option>
                                            <option>Korean</option>
                                            <option>China</option>
                                            <option>Turkey</option>
                                        </select>
                                    </div>
                                </div>

                                {{--textarea--}}
                                <label for="textArea" class="col-md-2 control-label">About Me</label>

                                <div class="col-md-10">
                                    <textarea class="form-control" placeholder="Write Your Text" rows="5"></textarea>
                                </div>

                                <button class="btn btn-primary btn-fab btn-fab-mini btn-round pull-right">
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </div>

                            <div class="tab-pane animated bounceIn" id="Security">
                                {{--password--}}
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>

                                {{--confirm password--}}
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Confirm Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>

                                {{--email--}}
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email.example@.com</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>

                                {{--phone--}}
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone</label>
                                        <input type="tel" class="form-control">
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-fab btn-fab-mini btn-round pull-left">
                                    <i class="fa fa-angle-left"></i>
                                </button>
                                <button class="btn btn-primary btn-fab btn-fab-mini btn-round pull-right">
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </div>

                            <div class="tab-pane animated bounceIn text-center" id="Success">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes">
                                        I Agree Conditions
                                    </label>
                                </div>

                                <button class="btn btn-success btn-round">Success ! Submit Your Registration <span class="fa fa-check-circle"></span></button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="js/bootstrap.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/material-kit.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/npm.js"></script>
<script src="js/tab.js"></script>
</body>
</html>

