<div style="height: calc(60% - 100px)"></div>
<p id="demo" align="center" style="height: calc(40% - 100px); font-size: 30px"></p>

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