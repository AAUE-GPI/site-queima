<div style="height: calc(70% - 100px); width: 100%; " align="center">

    <img style="margin-top: 30px; height: 100%; width: 100%;" src="<?php echo base_url()?>assets/logoqueima.svg">
</div>
<p id="demo" align="center " style="padding-top: 60px; height: calc(30% - 100px); font-size: 30px"></p>

<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <h1>Como Chegar:</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1559.621815442177!2d-7.906112341843817!3d38.57423709186002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDM0JzI3LjIiTiA3wrA1NCcxOC4xIlc!5e0!3m2!1sen!2spt!4v1494452591426" width="600" height="450" frameborder="0" style="border:0; pointer-events:none;" allowfullscreen></iframe>
        <br>
        <a href="https://www.google.com/maps/place/38%C2%B034'27.3%22N+7%C2%B054'18.6%22W/@38.5742552,-7.9073557,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d38.574251!4d-7.905167?hl=en-US" target="blank"class="maparecinto"><h1><span class="glyphicon glyphicon-map-marker"></span>Mapa do Recinto</h1></a> 
    </div>
</div>

<!-- Passar isto para um ficheiro .js / Carregar o ficheiro js no footer-->
<script>

    function get_countdown()
    {
        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML =
            '<div style="display: inline-block; width: 150px" align="center"><p>' + days + '</p><p> DIAS </p></div>' +
            '<div style="display: inline-block; width: 150px" align="center"><p>' + hours + '</p><p> HORAS </p></div>' +
            '<div style="display: inline-block; width: 150px" align="center"><p>' + minutes + '</p><p> MINUTOS </p></div>' +
            '<div style="display: inline-block; width: 200px" align="center"><p>' + seconds + '</p><p> SEGUNDOS </p></div>';

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }

    // Set the date we're counting down to
    var countDownDate = new Date("May 26, 2017 22:00:00").getTime();

    get_countdown();
    
    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        get_countdown();

    }, 1000);
</script>