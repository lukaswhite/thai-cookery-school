<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>Thai Cookery School</title>

    <style>
        header {
            padding: 20px;
        }
        ul.instances {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        ul.instances li {
            margin-bottom: 1em;
            padding-bottom: 1em;
            border-bottom: solid 1px #f7f7f7;
        }
        ul.instances li h5 .badge {
            font-weight: normal;
        }
        footer {
            margin-top: 3em;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <header class="container">
        <h1>
            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="64" viewBox="0 0 640 480">
                <g fill-rule="evenodd">
                    <path fill="#fff" d="M0 0h640v480H0z"/>
                    <path fill="#001b9a" d="M0 162.544h640v160.003H0z"/>
                    <path fill="#e70000" d="M0 .042h640v82.5H0zM0 400.003h640v80H0z"/>
                </g>
            </svg>
            Thai Cookery School
        </h1>
    </header>

    <main class="container">
    @yield( 'content' )
    </main>

    <footer class="container">
        <p><em>Note: this site is just an example; it's not a real cookery school.</em></p>
    </footer>

</body>
</html>