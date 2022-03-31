<?php

$dischi = [
    [
      'poster' => 'https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg',
      'title' => 'New Jersey',
      'author' => 'Bon Jovi',
      'genre' => 'Rock',
      'year' => '1988'
    ],
  [
      'poster' => 'https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg',
      'title' => 'Live at Wembley 86',
      'author' => 'Queen',
      'genre' => 'Pop',
      'year' => '1992'
    ],
  [
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg',
      'title' => 'Ten\'s Summoner\'s Tales',
      'author' => 'Sting',
      'genre' => 'Pop',
      'year' => '1993'
    ],
  [
      'poster' => 'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg',
      'title' => 'Steve Gadd Band',
      'author' => 'Steve Gadd Band',
      'genre' => 'Jazz',
      'year' => '2018'
    ],
  [
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg',
      'title' => 'Brave new World',
      'author' => 'Iron Maiden',
      'genre' => 'Metal',
      'year' => '2000'
    ],
  [
      'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg',
      'title' => 'One more car, one more raider',
      'author' => 'Eric Clapton',
      'genre' => 'Rock',
      'year' => '2002'
    ],
  [
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg',
      'title' => 'Made in Japan',
      'author' => 'Deep Purple',
      'genre' => 'Rock',
      'year' => '1972'
    ],
  [
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
      'title' => 'And Justice for All',
      'author' => 'Metallica',
      'genre' => 'Metal',
      'year' => '1988'
    ],
  [
      'poster' => 'https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg',
      'title' => 'Hard Wired',
      'author' => 'Dave Weckl',
      'genre' => 'Jazz',
      'year' => '1994'
    ],
  [
      'poster' => 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg',
      'title' => 'Bad',
      'author' => 'Michael Jacjson',
      'genre' => 'Pop',
      'year' => '1987'
    ]
  ];




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style >
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.header{
    width: 100%;
    height: 10vh;
    background-color: rgba(0, 0, 0, 0.589);
    display: flex;
    align-items: center;
}
.logo{
    width: 50px;
    height: 50px;
    background-color: green;
    margin-left: 30px;
   border-radius: 40px;
   border: 1px solid green;
}
.main{
    width: 100%;
    min-height: 90vh;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.781);
}
.dentromain{
    max-width: 85%;
    height: 80%;
    margin: 0 auto;
}
.carta > li {
    width: 18%;
    height: 50%;
}
.album {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
.informazioni{
    width: 100%;
    text-align: center;
}
.dentrocarta{
    margin: 20px;
    height: 200px;
}
.carta  {
    width: 13%;
    min-height: 40%;
    margin: 40px;
    background-color: rgba(71, 70, 70, 0.589);
    border-radius: 10px;
   & > *{
       max-width: 100%;
       
   }
}
.immagine{
    width: 100%;
    
}

</style>
</head>
<body>






    <div >
        <div class="header">

            <div class="logo">
                
            </div>
        </div>
        <div class="main">
            <div class="dentromain">
                <div class="album">  

                <?php
                foreach($dischi as $key => $value){

                
                ?>
                <div class="carta">
                    <div class="dentrocarta">
                        <figure >
                            <img class="immagine" src="<?php
                                                            echo $value['poster'];
                                                        ?> 
                                " alt="">
                        </figure>

                        <div class="informazioni">
                            <h4>
                                <?php
                                    echo $value['title'];
                                ?> 
                            </h4>
                            <p> 
                                <?php
                                    echo $value['author'];
                                ?>     
                            </p>
                            <p> 
                                <?php
                                    echo $value['year'];
                                ?>   
                            </p>
                        </div>

                    </div>
                </div>

                <?php
                }
                ?>

            
        
    
                </div>
            
            </div>

    

        </div>


    </div>

    /* foreach(){
                <?php
                echo $value['title'];
                ?>

            };
 */
    
</body>
</html>