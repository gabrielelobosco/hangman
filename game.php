<html>
    <head>
        <title>THG - The Game</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
        <script>var t_r = 6; // Tentativi Rimasti</script>
        <meta name="viewport" content="width=device-width, user-scalable=no, inital-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    </head>
<body>

<div id="announcer">
    <p id="result"></p>
    <br>
    <p id="word"></p>
    <br>
    <p id="tentativi"></p>
    <button id="r_button" onclick="location.reload();">CONTINUA!</button>
    <button id="r_button" onclick="location.href='/index.php'">TORNA AL MENU'</button>
</div>

<div id="punteggio">
    <p id="show"></p>
</div>

<div class="container">
    <div class="costruzione">
        <div id="base"></div>
        <div id="palo"></div>
        <div id="base_u"></div>
        <div id="palo_p"></div>
    </div>
    <div class="omino">
        <div id="testa"></div>
        <div id="corpo"></div>
        <div id="braccia1"></div>
        <div id="braccia2"></div>
        <div id="gamba1"></div>
        <div id="gamba2"></div>
    </div>
</div>
<?

$URL = $_SERVER['REQUEST_URI'];

if ($URL == "/game.php?difficulty=easy")
    $parole = file('easy.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
else if ($URL == "/game.php?difficulty=normal")
    $parole = file('normal.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
else
    $parole = file('hard.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$count = count($parole);
$rand = rand(0,$count-1);

$parola = strtoupper($parole[$rand]);
$lettere = array();

$lenght = strlen($parola);

for($i = 0; $i < $lenght; $i++) {
    $lettere[$i] = substr($parola, $i, 1);
}

?><div class="underline-container"><?php

for($i = 0; $i < $lenght; $i++) {
    ?> 
    <div id="underline"></div>
    <?php
}
?>
</div>

<form class="tastiera" id="input_form" method="post">
    <button type="submit" name="tasto" id="tasto" class="neutral" value="A">A</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="B">B</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="C">C</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="D">D</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="E">E</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="F">F</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="G">G</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="H">H</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="I">I</button>
    <div class="break"></div>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="J">J</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="K">K</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="L">L</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="M">M</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="N">N</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="O">O</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="P">P</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="Q">Q</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="R">R</button>
    <div class="break"></div>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="S">S</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="T">T</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="U">U</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="V">V</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="W">W</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="X">X</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="Y">Y</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="Z">Z</button>
</form>

<script type="text/javascript">

window.addEventListener("keydown", function(e) {
		var key = `${e.key}`.toUpperCase();
        
        event.preventDefault(); // EVITA IL REFRESH
        var value = key; // Lettera cliccata da utente

        var element = document.querySelectorAll("button[value="+key+"]");

        if (element[0].classList.contains('neutral') == true) {

        $(element).addClass('error'); // Modifica onclick
        $(element).removeClass('neutral'); // Modifica onclick

        var parola = "<?echo $parola?>"; // Parola da trovare
        var lunghezza = "<?echo $lenght?>"; // Lunghezza parola
        const lettere = Array.from(parola); // Array di lettere
        let posizioni = []; // Array posizioni lettere corrette
        w = 0; // contatore lettere inserite correttamente
    
        if(parola.indexOf(value) > -1) {
            c = 0; // Indice generale
            for (i=0;i<lettere.length;i++){
                if(lettere[i] == value) {
                    posizioni[c] = i;
                    c++;
                }
            }
        posizioni.forEach(function(i){
        elems = document.querySelectorAll("[id='underline']");
        elems[i].setAttribute('data-before', value);
        });

        for(i=0;i<lunghezza;i++) {
            var result = getComputedStyle(elems[i], ":before").content;
            if (result!='""')
                w++;
            if (w==lunghezza) {
                document.getElementById("announcer").style.display = "initial";
                document.getElementById("result").innerHTML = "HAI VINTO!";
                document.getElementById("result").classList.add("won");
                document.getElementById("word").innerHTML = "La parola era <span style='color:#2dbe0f'>"+parola+"</span>";
                document.getElementById("tentativi").innerHTML = "Hai commesso <span style='color:orange'>"+(6-t_r)+"</span> errori!"
                u_biscotto();
            }
        }
    } else {
         t_r--;
        if (t_r==5)
            document.getElementById("testa").style.display = "initial";
        if (t_r==4)
            document.getElementById("corpo").style.display = "initial";
        if (t_r==3)
            document.getElementById("braccia1").style.display = "initial";
        if (t_r==2)
            document.getElementById("braccia2").style.display = "initial";
        if (t_r==1)
            document.getElementById("gamba1").style.display = "initial";
        if (t_r==0) {
            document.getElementById("gamba2").style.display = "initial";
            document.getElementById("announcer").style.display = "initial";
            document.getElementById("result").innerHTML = "HAI PERSO!";
            document.getElementById("result").classList.add("lost");
            document.getElementById("word").innerHTML = "La parola era <span style='color:#df0505'>"+parola+"</span>";
            document.getElementById("tentativi").innerHTML = "Hai commesso <span style='color:#df0505'>6</span> errori!"
            d_biscotto();
        }
    }}


	});

</script>

<script type="text/javascript">
$('button').on('click', function(){
    event.preventDefault(); // EVITA IL REFRESH
    var value = $(this).val(); // Lettera cliccata da utente
    $(this).addClass('error'); // Modifica onclick
    $(this).removeClass('neutral'); // Modifica onclick
    var parola = "<?echo $parola?>"; // Parola da trovare
    var lunghezza = "<?echo $lenght?>"; // Lunghezza parola
    const lettere = Array.from(parola); // Array di lettere
    let posizioni = []; // Array posizioni lettere corrette
    w = 0; // contatore lettere inserite correttamente
    
    if(parola.indexOf(value) > -1) {
        c = 0; // Indice generale
        for (i=0;i<lettere.length;i++){
            if(lettere[i] == value) {
                posizioni[c] = i;
                c++;
            }
        }
        posizioni.forEach(function(i){
        elems = document.querySelectorAll("[id='underline']");
        elems[i].setAttribute('data-before', value);
        });

        for(i=0;i<lunghezza;i++) {
            var result = getComputedStyle(elems[i], ":before").content;
            if (result!='""')
                w++;
            if (w==lunghezza) {
                document.getElementById("announcer").style.display = "initial";
                document.getElementById("result").innerHTML = "HAI VINTO!";
                document.getElementById("result").classList.add("won");
                document.getElementById("word").innerHTML = "La parola era <span style='color:#2dbe0f'>"+parola+"</span>";
                document.getElementById("tentativi").innerHTML = "Hai commesso <span style='color:orange'>"+(6-t_r)+"</span> errori!"
                u_biscotto();
            }
        }
    } else {
         t_r--;
        if (t_r==5)
            document.getElementById("testa").style.display = "initial";
        if (t_r==4)
            document.getElementById("corpo").style.display = "initial";
        if (t_r==3)
            document.getElementById("braccia1").style.display = "initial";
        if (t_r==2)
            document.getElementById("braccia2").style.display = "initial";
        if (t_r==1)
            document.getElementById("gamba1").style.display = "initial";
        if (t_r==0) {
            document.getElementById("gamba2").style.display = "initial";
            document.getElementById("announcer").style.display = "initial";
            document.getElementById("result").innerHTML = "HAI PERSO!";
            document.getElementById("result").classList.add("lost");
            document.getElementById("word").innerHTML = "La parola era <span style='color:#df0505'>"+parola+"</span>";
            document.getElementById("tentativi").innerHTML = "Hai commesso <span style='color:#df0505'>6</span> errori!"
            d_biscotto();
        }
    }
})
</script>
<!-- QUI PER NUOVO CODICE HTML -->

</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap');

html {
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.underline-container {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    margin-top: 3rem;
}
#underline {
    width: 3rem;
    height: 4rem;
    border-bottom: 4px solid black;
    margin: 5px;
    font-size: 3rem;
    color: black;
    text-align: center;
}
#underline::before {
    content: attr(data-before);
    font-family: 'Patrick Hand', cursive;
}
.tastiera {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-content: center;
    margin-top: 3rem;
}
#tasto {
    margin-left: 0.5rem;
    margin-top: 0.3rem;
    width: 2.5rem;
    height: 3rem;
    border-radius: 0.3rem;
    font-family: 'Patrick Hand', cursive;
    font-size: 1.5rem;
}

@media screen and (max-width: 768px) {
    #tasto {
        width: 2rem;
        height: 2.5rem;
        font-size: 1.2rem;
    }
}

.neutral {
    background-color: rgb(15 15 15 / 5%);
}
.error {
    background-color: rgb(15 15 15 / 15%);
    pointer-events: none;
}
.break {
    flex-basis: 100%;
    height: 0;
}
.neutral:hover {
    animation-name: h-tasto;
    animation-duration: 1.5s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    animation-direction: alternate;
    cursor: pointer;
}
.container {
    width:20rem;
    height:20rem;
    margin: 3rem auto;
    position: relative;
}

#base {
    width: 6.5rem;
    height: 0.25rem;
    background-color: #a5a5a5;
    position: absolute;
    bottom: 0.25rem;
    left: 4rem;
}
#palo {
    width: 0.25rem;
    height: 17rem;
    background-color: #a5a5a5;
    position: absolute;
    bottom: 0.25rem;
    left: 7rem;
}
#base_u {
    width: 6rem;
    height: 0.25rem;
    background-color: #a5a5a5;
    position: absolute;
    left: 7rem;
    top: 2.5rem;
}
#palo_p {
    width: 0.25rem;
    height: 3rem;
    background-color: #a5a5a5;
    position: absolute;
    top: 2.5rem;
    left: 13rem;
}

#testa {
    width: 2rem;
    height: 2rem;
    border: 0.25rem solid black;
    border-radius: 100%;
    position: absolute;
    left: 11.85rem;
    top: 5.5rem;
    display: none;
}
#corpo {
    width: 0.25rem;
    height: 6.5rem;
    background-color: black;
    top: 8rem;
    position: absolute;
    left: 13rem;
    display: none;
}
#braccia1 {
    width: 0.25rem;
    height: 3.5rem;
    background-color: black;
    position: absolute;
    top: 7rem;
    left: 11.73rem;
    transform: rotate(315deg);
    display: none;
}
#braccia2 {
    width: 0.25rem;
    height: 3.5rem;
    background-color: black;
    position: absolute;
    top: 7rem;
    left: 14.25rem;
    transform: rotate(45deg);
    display: none;
}
#gamba1 {
    width: 0.25rem;
    height: 3.5rem;
    background-color: black;
    position: absolute;
    top: 13.9rem;
    left: 11.73rem;
    transform: rotate(225deg);
    display: none;
}
#gamba2 {
    width: 0.25rem;
    height: 3.5rem;
    background-color: black;
    position: absolute;
    top: 13.9rem;
    left: 14.25rem;
    transform: rotate(135deg);
    display: none;
}

#announcer {
    width: 60%;
    height: 80%;
    position: absolute;
    background-color: rgb(228 228 228);
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    margin-top: 2rem;
    z-index: 1;
    box-shadow: 0px 0px 40px 5px;
    border-radius: 15px;
    display: none;
    text-align: center;
    border: 4px solid rgb(200,200,200);

    animation-name: fade-in;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-timing-function: linear;
}

#punteggio {
    width: 4rem;
    height: 2.5rem;
    position: absolute;
    border: 2px solid black;
    border-radius: 0 0 20px 20px;
    border-top: none;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    margin-top: -3rem;
    text-align: center;
    font-family: 'Patrick Hand', cursive;
    font-size: 1.5rem;
    background-color: rgb(0 0 0 / 11%);
}

#show {
    margin-top: auto;
}

#result {
    margin-top: 4rem;
    font-size: 2.5rem;
    font-family: 'Patrick Hand', cursive;
}

.won {
    color: #2dbe0f;
}

.lost {
    color: #df0505;
}

#word {
    margin-top: -1rem;
    font-size: 2rem;
    font-family: 'Patrick Hand', cursive;
}

#tentativi {
    margin-top: -1rem;
    font-size: 2rem;
    font-family: 'Patrick Hand', cursive;
}

#r_button {
    font-family: 'Patrick Hand', cursive;
    font-weight: bold;
    background-color: transparent;
    border: 3px solid black;
    border-radius: 0.3rem;
    font-size: 1.5rem;
    margin: 1rem;
    margin-top: 5rem;
}

#r_button:hover {
    cursor: pointer;

    animation-name: button_move;
    animation-duration: 0.75s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
}

@media screen and (max-width: 768px) {
    #announcer {
        width: 80%;
        height: 60%;
        margin-top: 4rem;
    }
    #result {
        font-size: 2.5rem;
    }
    #word {
        font-size: 1.5rem;
    }
    #tentativi {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }
    #r_button {
        margin-top: 0rem;
    }
}
@keyframes h-tasto {
    from {}
    to {background-color:black; color:white;}
}

@keyframes fade-in {
    from {background-color: rgba(228,228,228,0); transform: translateY(-2rem);}
    to {background-color: rgba(228,228,228,100);}
}

@keyframes button_move {
    from {}
    to {transform: translateY(-5px)}
}
</style>

<script>
r_biscotto();

document.getElementById("show").innerHTML = p/2;

function c_biscotto() {
    document.cookie = "points="+p+"; expires=Thu, 01-Jan-2030 00:00:01 GMT;";
}
function r_biscotto() {
    let x = getCookie("points");
    if(x !== "") {
        console.log(x);
        p = parseInt(x);
    } else {
        let p = 0;
        c_biscotto();
    }
}
function u_biscotto() {
    p = p + 1;
    c_biscotto();
}
function d_biscotto() {
    p = 0;
    c_biscotto();
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
</script>