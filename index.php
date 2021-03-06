<!DOCTYPE html>
<html lang="pl">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75, maximum-scale=1, user-scalable=no">
    <style>
        .carousel-inner img {
            width: 130%;
            height: 130%;
        }
    </style>
    <link rel="icon" href="./icon.jpg">
    <title>Krakowska Awangarda</title>
</head>

<body>
    <img src="./img/Krakow/bg.jpg" class="img-fluid" id="bgi">
    <div id="bg"></div>
    <div id="main">
        <h1 class="h1" id="hdd"><span>
            <img class="sicon" src=./icon.jpg>
        </span>Krakowska Awangarda</h1>
        <h2 class="h2" id="hd">Wynajem mieszkania <span class="badge badge-secondary">Kraków</span></h2>
        <div class="container">
            <div class="row" id="c1">
                <div class="b1 col-md-6" id="title">
                    <p class="h1">ul. Łokietka 12A</p>
                    <p class="lead" id="ttl">Krakowska Krowodrza</p>
                    <p class="lead tc1 tcm" id="ttl">Mieszkanie przeznaczone dla 2 osób</p>
                </div>
                <div class="b1 col-md-6" id="title">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <ul class="carousel-indicators sizeb">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ul>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/Krakow/krakow1.jpg">
                            </div>

                            <div class="carousel-item">
                                <img src="./img/Krakow/krakow2.jpg">
                            </div>

                            <div class="carousel-item">
                                <img src="./img/Krakow/krakow3.jpg">
                            </div>

                            <div class="carousel-item">
                                <img src="./img/Krakow/krakow4.jpg">
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>

                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="embed-responsive embed-responsive-16by9 b1 col-md-6" id="title">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.4457207434148!2d19.92688011571793!3d50.07794127942569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165bab3e799257%3A0x5fe8c837175edeed!2zV8WCYWR5c8WCYXdhIMWBb2tpZXRrYSAxMkEvNWEsIDMwLTAxMCBLcmFrw7N3!5e0!3m2!1spl!2spl!4v1652282465479!5m2!1spl!2spl"
                        width="470" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="b1 col-md-6">
                    <p class="lead tc1" id="ttr">Mieszkanie znajduje się przy ul. Łokietka na Krakowskiej Krowodrzy.</p>
                    <p class="lead tc2" id="ttr">5 minut pieszo od przystanków tramwajowych i autobusowych. 25 minut pieszo do rynku spacerkiem i 2 przystanki tramwajem od rynku. Przy samej kamienicy sklep żabka i biedronka. Parking miejski pod kamienica platny wg taryfy miejskiej
                        strefy C.</p>
                </div>
            </div>
        </div>


        <form class="form-group" id="contact-form" name="contact-form" action="mail.php" method="POST">
            <div id="inf">
            <p class="h1" id="contact-size">Skontaktuj się z nami!</p>
            <label for="in" class="tc1">Imię i Nazwisko:</label>
            <input type="text" class="form-control" name="in"><br>

            <label for="email" class="tc1">E-Mail: </label>
            <input type="text" class="form-control" name="email"><br>

            <label for="nr" class="tc1">Nr. telefonu:</label>
            <input type="text" class="form-control" name="nr"><br>

            <label for="comment" class="tc1">Uwagi:</label>
            <textarea class="form-control" rows="5" name="comment"></textarea><br>
            <p class="lead tc1">Od kiedy do kiedy chciałbyś wynająć?</p>
            <label for="start" class="lead tc1">Od: </label>
        <input type="date" id="start" name="start"
       value="2022-04-02"
       min="2022-01-01" max="2023-12-31"></br>
       <label for="end" class="lead tc1">Do: </label>
        <input type="date" id="end" name="end"
       value="2022-04-03"
       min="2022-01-01" max="2023-12-31"></br>    
        </div>
        </form>
        <button id="inf" type="submit" value="Wyślij" class="btn btn-dark" onclick="document.getElementById('contact-form').submit();" name="submit_btn">Wyślij</button>
        
        <Br><Br><br><br>
    </div>


    </div>
    <footer class="bg-dark text-center" id="footer">
        <div class="text-center p-1" style="background-color: rgb(43, 42, 42);">
            <h6 class="text-light">Kontakt | Telefon: 668 470 189 lub 531 181 765 | E-Mail: lokietka12a.5a@gmail.com</h6>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp
    4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>