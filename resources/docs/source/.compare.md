---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://api-movie-theater.herokuapp.com/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_4c52f24a898e0dae16a0a53f79728f08 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "https://api-movie-theater.herokuapp.com/api/movies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/movies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "rating": "8.50",
            "release_date": "2019-04-20",
            "duration": "03 hours 00 minutes",
            "director": "Anthony Russo",
            "synopsis": "In the opening, Clint Barton is teaching his daughter archery on his secluded farm while his wife prepares a picnic lunch for them. Suddenly, Clint's daughter vanishes and the rest of Clint's family disintegrates, along with half of all life across the universe, the result of Thanos' snapping his fingers after acquiring all six Infinity Stones. Nebula and Tony Stark are stranded in space following their defeat by Thanos on Titan, but are returned to Earth by Carol Danvers and reunited with Natasha Romanoff, Bruce Banner, Steve Rogers, Rocket, Thor, and James Rhodes. The team formulates a plan to steal the Infinity Stones back from Thanos and use them to reverse his actions, but learn upon finding him that he had used the stones a second time to destroy them, preventing their further use. He tells the remaining Avengers that he did so to avoid using the Stones for further nefarious purposes. Enraged, Thor cuts off Thanos' head, saying it's what he should have done in Wakanda",
            "casts": [
                {
                    "id": 1,
                    "name": "Robert Downey Jr."
                },
                {
                    "id": 2,
                    "name": "Chris Evans"
                },
                {
                    "id": 3,
                    "name": "Mark Ruffalo"
                }
            ]
        },
        {
            "id": 2,
            "rating": "9.30",
            "release_date": "1994-10-14",
            "duration": "02 hours 02 minutes",
            "director": "Frank Darabont",
            "synopsis": "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
            "casts": [
                {
                    "id": 4,
                    "name": "Tim Robbins"
                },
                {
                    "id": 5,
                    "name": "Morgan Freeman"
                },
                {
                    "id": 6,
                    "name": "Bob Gunton"
                }
            ]
        },
        {
            "id": 3,
            "rating": "9.00",
            "release_date": "2008-07-18",
            "duration": "02 hours 12 minutes",
            "director": "Christopher Nolan",
            "synopsis": "When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.",
            "casts": [
                {
                    "id": 7,
                    "name": "Christian Bale"
                },
                {
                    "id": 8,
                    "name": "Heath Ledger"
                },
                {
                    "id": 9,
                    "name": "Aaron Eckhart"
                }
            ]
        },
        {
            "id": 4,
            "rating": "8.60",
            "release_date": "2019-11-08",
            "duration": "02 hours 12 minutes",
            "director": "Bong Joon Ho",
            "synopsis": "All unemployed, Ki-taek and his family take peculiar interest in the wealthy and glamorous Parks, as they ingratiate themselves into their lives and get entangled in an unexpected incident.",
            "casts": [
                {
                    "id": 10,
                    "name": "Kang-ho Song"
                },
                {
                    "id": 11,
                    "name": "Sun-kyun Lee"
                },
                {
                    "id": 12,
                    "name": "Yeo-jeong Jo"
                }
            ]
        },
        {
            "id": 5,
            "rating": "8.60",
            "release_date": "2019-10-04",
            "duration": "02 hours 00 minutes",
            "director": "Todd Philips",
            "synopsis": "In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.",
            "casts": [
                {
                    "id": 13,
                    "name": "Joaquin Phoenix"
                },
                {
                    "id": 14,
                    "name": "Robert De Niro"
                },
                {
                    "id": 15,
                    "name": "Zazie Beetz"
                }
            ]
        },
        {
            "id": 6,
            "rating": "6.00",
            "release_date": "1973-03-10",
            "duration": "03 hours 31 minutes",
            "director": "Broderick Reinger",
            "synopsis": "Non perspiciatis dolor commodi. Ex non natus est. Vel qui voluptas qui.",
            "casts": [
                {
                    "id": 16,
                    "name": "Davion Treutel"
                },
                {
                    "id": 17,
                    "name": "Quinten Gutkowski"
                },
                {
                    "id": 18,
                    "name": "Mr. Rolando Watsica I"
                },
                {
                    "id": 19,
                    "name": "Marina Nitzsche"
                },
                {
                    "id": 20,
                    "name": "Mr. Ian Rutherford V"
                }
            ]
        },
        {
            "id": 7,
            "rating": "7.00",
            "release_date": "1981-07-25",
            "duration": "05 hours 23 minutes",
            "director": "Alfonzo Mante II",
            "synopsis": "Voluptas est nesciunt distinctio voluptatibus. Placeat vel dolor sint facere maiores. Corporis atque quia repudiandae voluptas cum placeat id autem.",
            "casts": [
                {
                    "id": 21,
                    "name": "Shane Hudson"
                },
                {
                    "id": 22,
                    "name": "Regan VonRueden"
                },
                {
                    "id": 23,
                    "name": "Amaya Prosacco DVM"
                },
                {
                    "id": 24,
                    "name": "Mrs. Shyann Murphy IV"
                },
                {
                    "id": 25,
                    "name": "Dr. Izaiah Daugherty"
                }
            ]
        },
        {
            "id": 8,
            "rating": "8.00",
            "release_date": "2016-08-06",
            "duration": "03 hours 27 minutes",
            "director": "Audreanne Cartwright",
            "synopsis": "Et ratione sint incidunt cupiditate ut labore. Est sequi necessitatibus perferendis aliquam quos. Ipsam culpa qui assumenda quia eum omnis aut et.",
            "casts": [
                {
                    "id": 26,
                    "name": "Lonny Schumm"
                },
                {
                    "id": 27,
                    "name": "Billie Wisozk"
                },
                {
                    "id": 28,
                    "name": "Antonina O'Connell"
                },
                {
                    "id": 29,
                    "name": "Sharon Senger"
                },
                {
                    "id": 30,
                    "name": "Geo Cormier"
                }
            ]
        },
        {
            "id": 9,
            "rating": "6.00",
            "release_date": "2016-07-25",
            "duration": "04 hours 45 minutes",
            "director": "Barbara Macejkovic Sr.",
            "synopsis": "Maiores consequatur veritatis et sit. Ut non commodi reprehenderit nulla et molestiae. Labore vitae architecto minus assumenda optio labore. Consequatur dolor quod velit quisquam vitae.",
            "casts": [
                {
                    "id": 31,
                    "name": "Mr. Charlie Mills V"
                },
                {
                    "id": 32,
                    "name": "Emery Johnson"
                },
                {
                    "id": 33,
                    "name": "Virgil O'Connell IV"
                },
                {
                    "id": 34,
                    "name": "Forrest Stoltenberg"
                },
                {
                    "id": 35,
                    "name": "Dr. Xzavier Lemke I"
                }
            ]
        },
        {
            "id": 10,
            "rating": "6.00",
            "release_date": "1977-04-28",
            "duration": "04 hours 25 minutes",
            "director": "Nicklaus Nitzsche",
            "synopsis": "Odit molestiae minus unde earum dolorem deleniti. Eligendi libero nesciunt sapiente adipisci corrupti repellendus. Sed ad esse dolores amet totam voluptatibus reprehenderit. Odit est placeat est incidunt veniam eveniet.",
            "casts": [
                {
                    "id": 36,
                    "name": "Chesley Kub"
                },
                {
                    "id": 37,
                    "name": "Nash Hegmann"
                },
                {
                    "id": 38,
                    "name": "Erica Reynolds I"
                },
                {
                    "id": 39,
                    "name": "Prof. Angie Ferry"
                },
                {
                    "id": 40,
                    "name": "Libbie McCullough"
                }
            ]
        },
        {
            "id": 11,
            "rating": "7.00",
            "release_date": "1974-06-18",
            "duration": "04 hours 18 minutes",
            "director": "Lewis Rogahn",
            "synopsis": "Commodi architecto odit nihil. Omnis aspernatur ea qui accusamus eum vel. Consectetur quisquam quos quis culpa quae pariatur. Quia qui ut non corporis fugiat.",
            "casts": [
                {
                    "id": 41,
                    "name": "Sterling Thompson"
                },
                {
                    "id": 42,
                    "name": "Joseph Fay"
                },
                {
                    "id": 43,
                    "name": "Afton Herzog"
                },
                {
                    "id": 44,
                    "name": "Mrs. Hassie Predovic IV"
                },
                {
                    "id": 45,
                    "name": "Arch Sipes PhD"
                }
            ]
        },
        {
            "id": 12,
            "rating": "7.00",
            "release_date": "2017-03-29",
            "duration": "05 hours 51 minutes",
            "director": "Allan Turner",
            "synopsis": "Adipisci minus facilis id velit accusantium saepe. Hic non tempora distinctio qui sequi vero. Beatae praesentium a eum at tenetur omnis ipsa ab.",
            "casts": [
                {
                    "id": 46,
                    "name": "Mrs. Maud Grant"
                },
                {
                    "id": 47,
                    "name": "Iliana McLaughlin II"
                },
                {
                    "id": 48,
                    "name": "Dante O'Connell"
                },
                {
                    "id": 49,
                    "name": "Diego Jenkins"
                },
                {
                    "id": 50,
                    "name": "Patience Hessel"
                }
            ]
        },
        {
            "id": 13,
            "rating": "8.00",
            "release_date": "1979-01-17",
            "duration": "03 hours 39 minutes",
            "director": "Josiah Hartmann",
            "synopsis": "Nihil voluptatem modi blanditiis quaerat itaque quod quae. Nobis voluptas eum rem aut consequatur atque commodi. Autem excepturi tenetur numquam sequi a ipsum ab. Dolor sapiente enim sit occaecati ipsa magni.",
            "casts": [
                {
                    "id": 51,
                    "name": "Tanner Fay DDS"
                },
                {
                    "id": 52,
                    "name": "Lenny Ebert"
                },
                {
                    "id": 53,
                    "name": "Prof. Neal Kessler IV"
                },
                {
                    "id": 54,
                    "name": "Robyn Miller I"
                },
                {
                    "id": 55,
                    "name": "Kailee Leuschke I"
                }
            ]
        },
        {
            "id": 14,
            "rating": "8.00",
            "release_date": "2019-12-24",
            "duration": "05 hours 20 minutes",
            "director": "Della Ziemann III",
            "synopsis": "Distinctio impedit rem eos officiis alias. Consequatur placeat sed porro suscipit ipsam voluptas. Laboriosam laudantium architecto nesciunt ratione. Minus suscipit aut sapiente fugiat cumque.",
            "casts": [
                {
                    "id": 56,
                    "name": "Julius Dietrich IV"
                },
                {
                    "id": 57,
                    "name": "Cordell Sauer"
                },
                {
                    "id": 58,
                    "name": "Lizeth Homenick"
                },
                {
                    "id": 59,
                    "name": "Stevie Waters"
                },
                {
                    "id": 60,
                    "name": "Pete Murray"
                }
            ]
        },
        {
            "id": 15,
            "rating": "8.00",
            "release_date": "1971-07-03",
            "duration": "02 hours 28 minutes",
            "director": "Jonathan Simonis",
            "synopsis": "Delectus consectetur et incidunt. Deserunt deleniti suscipit sint ab nisi inventore nulla. Ducimus expedita quisquam quia modi. Quae adipisci optio rem quia rem.",
            "casts": [
                {
                    "id": 61,
                    "name": "Dr. Vance Ernser"
                },
                {
                    "id": 62,
                    "name": "Elsie Ebert"
                },
                {
                    "id": 63,
                    "name": "Adam Johnson"
                },
                {
                    "id": 64,
                    "name": "Turner Blick"
                },
                {
                    "id": 65,
                    "name": "Cedrick Farrell"
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/movies?page=1",
        "last": "http:\/\/localhost\/api\/movies?page=4",
        "prev": null,
        "next": "http:\/\/localhost\/api\/movies?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 4,
        "path": "http:\/\/localhost\/api\/movies",
        "per_page": 15,
        "to": 15,
        "total": 55
    }
}
```

### HTTP Request
`GET api/movies`


<!-- END_4c52f24a898e0dae16a0a53f79728f08 -->

<!-- START_d9ef03b9df8b3fb5245d8b7a313232ff -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "https://api-movie-theater.herokuapp.com/api/movies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/movies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/movies`


<!-- END_d9ef03b9df8b3fb5245d8b7a313232ff -->

<!-- START_76a0c7e7642f4171d9bf317e12e0e21d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "https://api-movie-theater.herokuapp.com/api/movies/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/movies/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "rating": "8.50",
        "release_date": "2019-04-20",
        "duration": "03 hours 00 minutes",
        "director": "Anthony Russo",
        "synopsis": "In the opening, Clint Barton is teaching his daughter archery on his secluded farm while his wife prepares a picnic lunch for them. Suddenly, Clint's daughter vanishes and the rest of Clint's family disintegrates, along with half of all life across the universe, the result of Thanos' snapping his fingers after acquiring all six Infinity Stones. Nebula and Tony Stark are stranded in space following their defeat by Thanos on Titan, but are returned to Earth by Carol Danvers and reunited with Natasha Romanoff, Bruce Banner, Steve Rogers, Rocket, Thor, and James Rhodes. The team formulates a plan to steal the Infinity Stones back from Thanos and use them to reverse his actions, but learn upon finding him that he had used the stones a second time to destroy them, preventing their further use. He tells the remaining Avengers that he did so to avoid using the Stones for further nefarious purposes. Enraged, Thor cuts off Thanos' head, saying it's what he should have done in Wakanda",
        "casts": [
            {
                "id": 1,
                "name": "Robert Downey Jr."
            },
            {
                "id": 2,
                "name": "Chris Evans"
            },
            {
                "id": 3,
                "name": "Mark Ruffalo"
            }
        ]
    }
}
```

### HTTP Request
`GET api/movies/{movie}`


<!-- END_76a0c7e7642f4171d9bf317e12e0e21d -->

<!-- START_803c20902ae0b56e8b65d3dc3275df12 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "https://api-movie-theater.herokuapp.com/api/movies/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/movies/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/movies/{movie}`

`PATCH api/movies/{movie}`


<!-- END_803c20902ae0b56e8b65d3dc3275df12 -->

<!-- START_bd572be367779aac73c7aa3be67b9e80 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "https://api-movie-theater.herokuapp.com/api/movies/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/movies/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/movies/{movie}`


<!-- END_bd572be367779aac73c7aa3be67b9e80 -->

<!-- START_1ba7ac0f595208f33afc748baefa3a75 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "https://api-movie-theater.herokuapp.com/api/casts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/casts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Robert Downey Jr."
        },
        {
            "id": 2,
            "name": "Chris Evans"
        },
        {
            "id": 3,
            "name": "Mark Ruffalo"
        },
        {
            "id": 4,
            "name": "Tim Robbins"
        },
        {
            "id": 5,
            "name": "Morgan Freeman"
        },
        {
            "id": 6,
            "name": "Bob Gunton"
        },
        {
            "id": 7,
            "name": "Christian Bale"
        },
        {
            "id": 8,
            "name": "Heath Ledger"
        },
        {
            "id": 9,
            "name": "Aaron Eckhart"
        },
        {
            "id": 10,
            "name": "Kang-ho Song"
        },
        {
            "id": 11,
            "name": "Sun-kyun Lee"
        },
        {
            "id": 12,
            "name": "Yeo-jeong Jo"
        },
        {
            "id": 13,
            "name": "Joaquin Phoenix"
        },
        {
            "id": 14,
            "name": "Robert De Niro"
        },
        {
            "id": 15,
            "name": "Zazie Beetz"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/casts?page=1",
        "last": "http:\/\/localhost\/api\/casts?page=18",
        "prev": null,
        "next": "http:\/\/localhost\/api\/casts?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 18,
        "path": "http:\/\/localhost\/api\/casts",
        "per_page": 15,
        "to": 15,
        "total": 265
    }
}
```

### HTTP Request
`GET api/casts`


<!-- END_1ba7ac0f595208f33afc748baefa3a75 -->

<!-- START_e4ab3aff18a2985731b3eff30fdadf66 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "https://api-movie-theater.herokuapp.com/api/casts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/casts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/casts`


<!-- END_e4ab3aff18a2985731b3eff30fdadf66 -->

<!-- START_7cf5181cf648093b2ce42590b0bb4205 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "https://api-movie-theater.herokuapp.com/api/casts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/casts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Robert Downey Jr."
    }
}
```

### HTTP Request
`GET api/casts/{cast}`


<!-- END_7cf5181cf648093b2ce42590b0bb4205 -->

<!-- START_56dda687c5cbfdf954ac13a976ba9fe3 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "https://api-movie-theater.herokuapp.com/api/casts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/casts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/casts/{cast}`

`PATCH api/casts/{cast}`


<!-- END_56dda687c5cbfdf954ac13a976ba9fe3 -->

<!-- START_da1bf01393e46b2f42721185fe3fbe0f -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "https://api-movie-theater.herokuapp.com/api/casts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/casts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/casts/{cast}`


<!-- END_da1bf01393e46b2f42721185fe3fbe0f -->

<!-- START_09878f904e798ce160dd1c9e97779740 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "https://api-movie-theater.herokuapp.com/api/theaters" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/theaters"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/theaters`


<!-- END_09878f904e798ce160dd1c9e97779740 -->

<!-- START_cf92f14ba6a67691c06608ee93fa6477 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "https://api-movie-theater.herokuapp.com/api/theaters" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/theaters"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/theaters`


<!-- END_cf92f14ba6a67691c06608ee93fa6477 -->

<!-- START_13d570bb3c01a16dd2fb6505881e3107 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "https://api-movie-theater.herokuapp.com/api/theaters/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/theaters/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/theaters/{theater}`


<!-- END_13d570bb3c01a16dd2fb6505881e3107 -->

<!-- START_ed888b8366962192839fbafe85d98bb0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "https://api-movie-theater.herokuapp.com/api/theaters/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/theaters/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/theaters/{theater}`

`PATCH api/theaters/{theater}`


<!-- END_ed888b8366962192839fbafe85d98bb0 -->

<!-- START_34b4c17872e7c4fd2f5a46a0be7f2adf -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "https://api-movie-theater.herokuapp.com/api/theaters/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/theaters/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/theaters/{theater}`


<!-- END_34b4c17872e7c4fd2f5a46a0be7f2adf -->

<!-- START_60552fcc5aaceb4c615df8e8941a7fa7 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "https://api-movie-theater.herokuapp.com/api/show-times" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/show-times"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/show-times`


<!-- END_60552fcc5aaceb4c615df8e8941a7fa7 -->

<!-- START_24235c3637eec41def6d1e8415e61821 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "https://api-movie-theater.herokuapp.com/api/show-times" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/show-times"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/show-times`


<!-- END_24235c3637eec41def6d1e8415e61821 -->

<!-- START_1341a53ff7fbd8d18f81253e6a39f444 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "https://api-movie-theater.herokuapp.com/api/show-times/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/show-times/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/show-times/{show_time}`


<!-- END_1341a53ff7fbd8d18f81253e6a39f444 -->

<!-- START_fdcadfad9dfb2deb3484f9b560708181 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "https://api-movie-theater.herokuapp.com/api/show-times/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/show-times/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/show-times/{show_time}`

`PATCH api/show-times/{show_time}`


<!-- END_fdcadfad9dfb2deb3484f9b560708181 -->

<!-- START_56340f1bf94cb79ff25e939b235c2638 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "https://api-movie-theater.herokuapp.com/api/show-times/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-movie-theater.herokuapp.com/api/show-times/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/show-times/{show_time}`


<!-- END_56340f1bf94cb79ff25e939b235c2638 -->


