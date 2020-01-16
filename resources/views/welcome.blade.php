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
                    <div id="loading" style="text-align:center">
                        Loading <br/>
                        <i class="fa fa-spin fa-spinner" style="font-size:30px"></i>
                    </div>
                    <div class="d-flex" style="flex-wrap:wrap" id="movieNowPlaying">
                        
                    </div>
                </div>
            </div>
            </div>
            <br>
        </div>
        <div class="modal fade" id="modalShowTime" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><div id="movieTitle"></div></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <h4 id="dateDetail"></h4>
                    <div id="loadingDetail" style="text-align:center">
                        Loading <br/>
                        <i class="fa fa-spin fa-spinner" style="font-size:30px"></i>
                    </div>
                    <div class="row">
                        <div class="col-md-6" id="detailShow">
                            
                        </div>
                        <div class="col-md-6" id="detailShowTime">
                            <h4>Show TImes</h4>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/bfecf810bf.js"></script>
        <script src='https://cdn.jsdelivr.net/lodash/4.17.2/lodash.min.js'></script>
        <script>
            jQuery(document).ready(function(){
                var nowPlayingEl = $('#movieNowPlaying')

                function renderShowTimes({data}){
                    let {show_times} = data
                    let groupByTheater  = _.groupBy(show_times, (data) => data.theater_id)
                    console.log("TCL: renderShowTimes -> groupByTheater", groupByTheater)
                    const detailElement = $('#detailShow')
                    const detailShowTime = $('#detailShowTime');
                    detailShowTime.html('')
                    const html = _.map(groupByTheater, ((theater) => {
                        const timesEl = theater.map((times, index) => (`
                            <button class="btn btn-sm btn-warning btn_detail" data-index="${index}" data-theater="${times.theater_id}">${times.start_time}</button>
                        `))
                        return `
                            <div>
                                <h5>${theater[0].theater_name}</h5>
                                ${timesEl.join('')}
                            </div>
                        `
                    })).join('')
                    
                    detailElement.html(html)

                    $('.btn_detail').click(function(){
                        const id = $(this).data('index')
                        const theaterId = $(this).data('theater')
                        const data = groupByTheater[theaterId][id]
                        detailShowTime.html(`
                            <h4>${data.theater_name}</h4>
                            Start : ${data.start_time}<br/>
                            End : ${data.end_time}<br/>
                            Price: ${data.total_price}<br/>
                            <button class="btn btn-primary">Reservation</button>
                            <input class="form-control" placeholder="Person"/>
                            <button class="btn btn-warning">Booking !</button>

                        `)
                    })

                }

                function renderToNowPlaying(shows){
                    let cards = shows.map((show, index) => (`
                        <div class="card" style="width: 17rem;">
                            <img src="{{asset('/dummy-image-portrait.jpg')}}" height="200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">${show.movie_title}</h5>
                                <p class="card-text">
                                <b>Direktor</b>
                                ${show.movie.synopsis}
                                </p>
                                <button data-toggle="modal" data-target="#modalShowTime" class="btn btn-primary showModal" data-index="${index}">See Showtimes</button>
                            </div>
                        </div>
                    `))
                    
                    nowPlayingEl.html(cards.join(''))

                    $('.showModal').on('click', function(){
                        var index = $(this).data('index')
                        var data = shows[index]
                        $('#movieTitle').html(data.movie_title)
                        $('#dateDetail').html(data.date)
                        $('#detailShow').html('')
                        $('#detailShowTime').html('')
                        $('#loadingDetail').show();
                        fetch(`/api/shows/${data.id}?include=show_times`)
                            .then(response => response.json())
                            .then(data => {
                                renderShowTimes(data)
                                $('#loadingDetail').hide();
                            })
                            .catch(error => {
                                console.log('error showTimes', error)
                            })
                        // window.alert('asdasd');
                        
                    })
                }
                
                $('#loading').show()
                fetch('/api/shows?date=now')
                    .then(response => response.json())
                    .then(data => {
                        renderToNowPlaying(data.data)
                        $('#loading').hide()

                    })
                    .catch(error => {
                        console.log("TCL: error", error)
                        
                    })
            })
        </script>
    </body>
</html>
