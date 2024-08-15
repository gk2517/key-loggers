<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Qwerty/Numeric Virtual Keyboard Demo</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Roboto Condensed', arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        text-align: center;
        background-color: #fafafa;
    }

    h1 {
        margin-top: 150px;
        text-align: center;
    }

    input {
        margin-top: 30px;
        padding: 20px;
        width: 400px;
        font-size: 30px;
        text-align: center;
    }
    </style>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="jquery.onscreenKeyboard.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/caret/1.0.0/jquery.caret.min.js"></script>
    <script src="jquery.onscreenKeyboard.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.onscreenKeyboard').onscreenKeyboard({
            caps: false
        });
    });
    </script>
</head>

<body>
    <div id="jquery-script-menu">
        <div class="jquery-script-center">

            <div class="jquery-script-ads">
                <script type="text/javascript">
                </script>
             
                </script>
            </div>
        
        </div>
    </div>
    <h1></h1>
    <div class="row">
    <div class="col-md-4">
        <form id="login_form" method="post">
        <input type="text" class="form-control onscreenKeyboardTarget" id="username"
            aria-describedby="emailHelp" placeholder="Enter Username" autofocus="true">
        <input type="text" class="form-control onscreenKeyboardTarget" id="password"
            aria-describedby="emailHelp" placeholder="Enter Password" autofocus="true">
        <input type="submit">
    </form>
        </div>
        <div class="col-md-4"></div>

        <div class="col-md-4"> <div class="onscreenKeyboard"></div></div>
    </div>




    <script type="text/javascript">
    $(document).ready(function() {

    
        $("#login_form").submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'validation.php',
                type: 'POST',
                data: {
                    username: $("#username").val(),
                    password: $("#password").val()
                },
                success: function(resp) {
                    if (resp == "invalid") {
                   console.log('invaild');
                    } else {
                        window.location.href = resp;
                    }
                }
            });
        });
    });
    </script>
</body>

</html>