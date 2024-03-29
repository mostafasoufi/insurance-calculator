<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .navbar {
            margin-bottom: 24px;
        }

        #main {
            display: table;
            width: 100%;
            height: 100vh;
            text-align: center;
        }

        .fof {
            display: table-cell;
            vertical-align: middle;
        }

        .fof h1 {
            font-size: 50px;
            display: inline-block;
            padding-right: 12px;
        }

        .page-header {
            border-bottom: 1px solid #d8d8d8;
            padding: 0 0 11px 0;
            margin: 0 0 49px 0;
        }

        .page-header span {
            vertical-align: bottom;
        }

        table tr th {
            font-size: 11px;
        }
    </style>

    <script type="application/javascript">
        function setUserTime() {
            document.getElementById("user-time").value = Math.floor(Date.now() /1000);
        }
    </script>
</head>
<body onload="setUserTime()">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo APP_URL; ?>">Insurance Calculator</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>/car">Car</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled">House</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled">Health</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled">House</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled">Fire</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled">Social</a>
            </li>
        </ul>
    </div>
</nav>