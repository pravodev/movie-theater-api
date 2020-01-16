<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie Theater API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref container" style="margin-top:10%">
            <div class="content">
                <div class="title m-b-md">
                    Movie Theater API
                </div>

                <small>
                    Made With Love ❤️ by Rifqi Khoeruman Azam (Azam) <br/> 
                    <a href="http://github.com/pravodev" style="text-decoration:none">pravodev</a> 
                </small>
                <br/>
                <a href="/apidoc" class="btn btn-primary">See Documentation</a>
                <br>
                <br>
                <input type="text" placeholder="Search..." class="form-control">
                <div style="margin:10px; text-align:initial; display:flex; flex-direction:column; justify-content:center">
                    <strong style="font-weight:bold">Now Playing <i class="fa fa-play-circle"></i></strong>
                    <br>
                    <br>
                    <div class="d-flex" style="flex-wrap:wrap" id="movieNowPlaying">
                        
                    </div>
                </div>
            </div>
            </div>
            <br>
        </div>
        <div class="container">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/bfecf810bf.js"></script>
        <script>
            jQuery(document).ready(function(){
                var nowPlayingEl = $('#movieNowPlaying')

                function renderToNowPlaying(shows){
                    let cards = shows.map(show => (`
                        <div class="card" style="width: 17rem;">
                            <img src="{{asset('/dummy-image-portrait.jpg')}}" height="200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">${show.movie_title}</h5>
                                <p class="card-text">
                                <b>Direktor</b>
                                ${show.movie.synopsis}
                                </p>
                                <a href="/show-times/${show.id}" class="btn btn-primary">See Showtimes</a>
                            </div>
                        </div>
                    `))
                    
                    nowPlayingEl.html(cards.join(''))
                }
                
                fetch('/api/shows?date=now')
                    .then(response => response.json())
                    .then(data => renderToNowPlaying(data.data))
                    .catch(error => {
                        console.log("TCL: error", error)
                        
                    })
            })
        </script>
    </body>
</html>
