<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css\bootstrap.css" rel="stylesheet">
    <link href="css\bootstrap-grid.css" rel="stylesheet">
    <link href="css\bootstrap-grid.css.map" rel="stylesheet">
    <link href="css\bootstrap-grid.min.css" rel="stylesheet">
    <link href="css\bootstrap-grid.min.css.map" rel="stylesheet">
    <link href="css\bootstrap-reboot.css" rel="stylesheet">
    <link href="css\bootstrap-reboot.css.map" rel="stylesheet">
    <link href="css\bootstrap-reboot.min.css" rel="stylesheet">
    <link href="css\bootstrap-reboot.min.css.map" rel="stylesheet">
    <link href="css\bootstrap.css.map" rel="stylesheet">
    <link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="css\bootstrap.min.css.map" rel="stylesheet">
</head>

<body>
<script src="bootstrap-4.0.0-dist\js\bootstrap.js"></script>
<script src="bootstrap-4.0.0-dist\js\bootstrap.bundle.js"></script>
<script src="bootstrap-4.0.0-dist\js\bootstrap.bundle.js.map"></script>
<script src="bootstrap-4.0.0-dist\js\bootstrap.bundle.min.js"></script>
<script src="bootstrap-4.0.0-dist\js\bootstrap.bundle.min.js.map"></script>
<script src="bootstrap-4.0.0-dist\js\bootstrap.js.map"></script>
<script src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
<script src="bootstrap-4.0.0-dist\js\bootstrap.min.js.map"></script>

    <div class="container-fluid">

       <div class="container mt-4">
            <div class="row"
                <div class="col-4">@yield("title1")</div>
                <div class="col">@yield("title2")</div>
                <div class="col">@yield("title3")</div>
                <div class="col">@yield("title4")</div>
                <div class="col">@yield("title5")</div>
                <div class="col">@yield("title6")</div>
                <div class="col">@yield("title7")</div>
            </div>
       </div>

       <div class="container mt-4">
            @yield("content")
        </div>

    </div>

</bodyhtml>