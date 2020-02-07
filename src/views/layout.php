<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./public/img/favicon.ico">

    <title>Reverse LookUp Directory</title>

    <!-- Bootstrap core CSS -->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./public/css/template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Reverse LookUp Directory</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="?controller=pages&action=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href='?controller=form&action=addUser'>Add a new user</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <?php require_once(__DIR__ . '/../router.php'); ?>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./public/js/jquery-3.2.1.min.js" </script>
<
script > window.jQuery || document.write('<script src="./public/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="./public/js/popper.min.js"></script>
<script src="./public/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="./public/js/ie10-viewport-bug-workaround.js"></script>
<script src="./public/js/send.js"></script>
</body>
</html>
