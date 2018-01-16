<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AR</title>

        <!-- Bootstrap Stuff -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row option-row">
                <div class="col-xs-6 col-md-4">
                    <div class="card text-center" style="width: 20rem;">
                        <div class="card-block">
                            <h4 class="card-title">Dinner for 1</h4>
                            <p class="card-text">Check out this quick and easy demo with a single plate and drink for when you really just need to eat.</p>
                            <a href="{{url('/forone')}}" class="btn btn-primary">Check it out</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-6 col-md-4">
                    <div class="card text-center" style="width: 20rem;">
                        <div class="card-block">
                            <h4 class="card-title">Dinner for 2</h4>
                            <p class="card-text">What would date night look like? Click the link below to see what dinner looks like after that awesome movie.</p>
                            <a href="{{url('/fortwo')}}" class="btn btn-primary">Check it out</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="card text-center" style="width: 20rem;">
                        <div class="card-block">
                            <h4 class="card-title">Dinner for 4</h4>
                            <p class="card-text">Family time? Double date? Doesn't matter. Picture yourself and your favorite three people here.</p>
                            <a href="{{url('/forfour')}}" class="btn btn-primary">Check it out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
