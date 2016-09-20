<!DOCTYPE html>
<html>
    <head>
        <title>octimine</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>

    <style type="text/css">
        .page-title { font-size: 18px; height: 40px; line-height: 40px; border-bottom: 1px solid #ccc  }
        .page-title-list { height: 60px; line-height: 40px }

    </style>

    <body>

        <div class="container" style="width:600px; padding: 25px 0 0 0;">
        	@yield('content')
        </div>

    </body>
</html>