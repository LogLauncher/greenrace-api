# GreenRace - API

You will find the website for which I'm building an API [here][0b412c79].

MangoDB to store the users enviroment.
```JSON
[
  {
    "#UID": {
      "vehicules":[1, 3],
      "steps":[
        {
          "lat":45.874569,
          "long":85.659874
        },
        {
          "lat":45.874569,
          "long":85.659874
        }
      ],
      "options":{
        "avoid-highways": false,
        "automatic-speed": true,
        "speed":null,
        "driving-style":5
      }
    } 
  }
]
```

## How it will work
1) Generate a UID
2) Set the vehicules
3) Set the steps
4) Set any options
5) Run the calculation



  [0b412c79]: http://www.jurassictest.ch/GR/ "GreenRace"
