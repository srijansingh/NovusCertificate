<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>{{$student->name}}</title>
    <style>
        body{
            font-family:cursive;
            font-size:20px;
            dont-weight:bold;

        }
    </style>
</head>
<body>
<div class="container">
    <img src="image/certificate.jpg" style="position:absolute;left:0px;top:0px;width:100%;height:90%;background-position:center">
</div>
<div class="certno" style="position:absolute;top:4px;left:575px;font-size:12px;font-weight:bold">NOV{{$student->id}}0819</div>
<div class="name" style="position:absolute;top:46%;left:300px;">{{$student->name}}</div>
<div class="fname" style="position:absolute;top:52%;left:155px;">{{$student->fname}}</div>
<div class="college" style="position:absolute;top:53%;left:430px;font-size:17px;">Lovely Professional University</div>
<div class="regno" style="position:absolute;top:58%;left:160px;">{{$student->regno}}</div>
<div class="schname" style="position:absolute;top:60%;left:405px;font-size:12px;">{{$student->schname}}</div>
<div class="regno" style="position:absolute;top:65%;left:120px;">An Active Participants</div>
<div class="dept" style="position:absolute;top:65%;left:500px;">Technical </div>
<div class="deptname" style="position:absolute;top:71%;left:50px;">Department</div>
<div class="deptnames" style="position:absolute;top:71%;left:420px;">his/her team</div>
<div class="date" style="position:absolute;top:78%;left:120px;font-size:18px">25/08/19</div>
<div class="org" style="position:absolute;top:78%;left:420px;">NOVUS</div>

</body>
</html>
