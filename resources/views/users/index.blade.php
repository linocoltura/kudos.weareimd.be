<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img{
            width:60px;
            border-radius: 100%;
        }
        ul{
            list-style: none;
        }
        li{
            margin-top:20px;
        }
        input[type=text] {
            width: 80px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        /* When the input field gets focus, change its width to 100% */
        input[type=text]:focus {
            width: 150px;
        }
    </style>
</head>
<body>
<h1>Users</h1>

<input type="text" name="search" placeholder="Search..">

<ul>
    <li><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" alt=""><a href="/users/1">Spencer</a></li>
    <li><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" alt=""><a href="/users/1">Daryl</a></li>
    <li><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" alt=""><a href="/users/1">Mark</a></li>
</ul>
</body>
</html>