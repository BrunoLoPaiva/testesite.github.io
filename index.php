<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body {
            background-color: aquamarine;
        }

        .box {

            height: max-content;
            width: max-content;

            display: table;
        }

        .livros {
            margin: 25px;
            height: 200px;
            width: 140px;
            background-color: gray;
            float: left;
            position: relative;
            display: table-cell;
            text-align: center;
            vertical-align: middle;


        }

        .livros:hover {
            height: 250px;
            margin: 0px;
            margin-right: 18px;
            margin-left: 18px;
            width: 175px;
        }

        .capa {
            height: 200px;
            width: 140px;
        }

        .capa:hover {
            height: 250px;
            width: 175px;
        }
    </style>
</head>

<body>


    <br />
    <br />
    <br />


    <center>
        <div class="box">
            <div class="livros"><a href=""><img src="1.jpg" class="capa"></a></div>
            <div class="livros"><a href=""><img src="1.jpg" class="capa"></a></div>
            <div class="livros"><a href=""><img src="1.jpg" class="capa"></a></div>
            <div class="livros"><a href=""><img src="1.jpg" class="capa"></a></div>
            <div class="livros"><a href=""><img src="1.jpg" class="capa"></a></div>
            <div class="livros"><a href=""><img src="1.jpg" class="capa"></a></div>
            <div class="livros"><a href=""><img src="1.jpg" class="capa"></a></div>
        </div>
    </center>

</body>

</html>