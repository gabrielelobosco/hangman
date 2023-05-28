<html>
    <head>

        <!-- Title&Meta -->

        <title>THG - The Game</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, inital-scale=1">
        
        <!-- JQuery and Resolve.js -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="style.css">
        
        <!-- Favicon  -->

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    </head>
<body>

    <!-- Announcer -->

    <div id="announcer">
        <p id="result"></p>
        <br>
        <p id="word"></p>
        <br>
        <p id="tentativi"></p>
        <button id="r_button" onclick="location.reload();">CONTINUA!</button>
        <button id="r_button" onclick="location.href='/index.php'">TORNA AL MENU'</button>
    </div>

    <!-- Points Div -->

    <div id="punteggio">
        <p id="show"></p>
    </div>

    <!-- HangMan drawing container -->

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

<script>
/* WORD CHOOSE AND CONTAINER GENERATION */

var t_r = 6;

var url = new URL(window.location.href);
var difficulty = url.searchParams.get("difficulty");

var parole, count, rand, parola, lettere, lunghezza;

if (difficulty === "easy")
  parole = loadFile('easy.txt');
else if (difficulty === "normal")
  parole = loadFile('normal.txt');
else
  parole = loadFile('hard.txt');

count = parole.length;
rand = getRandomInt(0, count - 1);

parola = parole[rand].toUpperCase();
lettere = [];

lunghezza = parola.length;

for (var i = 0; i < lunghezza; i++) {
  lettere[i] = parola.substr(i, 1);
}

var underlineContainer = document.createElement('div');
underlineContainer.className = 'underline-container';

for (var i = 0; i < lunghezza; i++) {
  var underline = document.createElement('div');
  underline.id = 'underline';
  underlineContainer.appendChild(underline);
}

document.body.appendChild(underlineContainer);

function loadFile(filename) {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', filename, false);
  xhr.send();

  if (xhr.status === 200) {
    return xhr.responseText.split('\n').filter(Boolean);
  } else {
    throw new Error('Failed to load file: ' + filename);
  }
}

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
</script>

<!-- Keyboard -->

<form class="tastiera" id="input_form" method="post">
    <button type="submit" name="tasto" id="tasto" class="neutral" value="Q">Q</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="W">W</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="E">E</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="R">R</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="T">T</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="Y">Y</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="U">U</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="I">I</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="O">O</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="P">P</button>
    <div class="break"></div>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="A">A</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="S">S</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="D">D</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="F">F</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="G">G</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="H">H</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="J">J</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="K">K</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="L">L</button>
    <div class="break"></div>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="Z">Z</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="X">X</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="C">C</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="V">V</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="B">B</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="N">N</button>
    <button type="submit" name="tasto" id="tasto" class="neutral" value="M">M</button>
</form>

</body>
</html>

<script>

/* PHYSICAL KEYBOARD */

window.addEventListener("keydown", function(e) { // When a key (on keyboard) is pressed
		var key = `${e.key}`.toUpperCase();
        
        e.preventDefault(); // Prevent refresh
        var value = key; // Letter clicked

        var element = document.querySelectorAll("button[value="+key+"]"); // Select on-screen button of that value

        if (element[0].classList.contains('neutral') == true) { // If it wasn't clicked yet

        $(element).addClass('error');
        $(element).removeClass('neutral'); 

        const lettere = Array.from(parola); // Letters array
        let posizioni = []; // Correct positions array
        w = 0; // Counter for correct letters guessed

        /* If letter appears in the word... */
    
        if(parola.indexOf(value) > -1) {
            c = 0; // General purpose index
            for (i=0;i<lettere.length;i++){
                if(lettere[i] == value) {
                    posizioni[c] = i;
                    c++;
                }
            }
        posizioni.forEach(function(i){
        elems = document.querySelectorAll("[id='underline']"); // Select all underlines objs
        elems[i].setAttribute('data-before', value); // Set "content" to the choosen letter
        });

        /* Check if all letters were guessed */

        for(i=0;i<lunghezza;i++) {
            var result = getComputedStyle(elems[i], ":before").content;
            if (result!='""')
                w++; // Letter guessed
            if (w==lunghezza) { // If letter guessed equals to word.length
                document.getElementById("announcer").style.display = "initial"; // Show the announcer
                document.getElementById("result").innerHTML = "HAI VINTO!"; // Output "You win"
                document.getElementById("result").classList.add("won"); // Some colors
                document.getElementById("word").innerHTML = "La parola era <span style='color:#2dbe0f'>"+parola+"</span>"; // Show word
                document.getElementById("tentativi").innerHTML = "Hai commesso <span style='color:orange'>"+(6-t_r)+"</span> errori!" // Show errors
                u_biscotto(); // WIN -> +1 Point
            }
        }
    } else { // If user didn't guess the letter
         t_r--; // Decrement remained attempts counter
        if (t_r==5)
            document.getElementById("testa").style.display = "initial"; // Show "head"
        if (t_r==4)
            document.getElementById("corpo").style.display = "initial"; // Show "body"
        if (t_r==3)
            document.getElementById("braccia1").style.display = "initial"; // Show first arm
        if (t_r==2)
            document.getElementById("braccia2").style.display = "initial"; // Show second arm
        if (t_r==1)
            document.getElementById("gamba1").style.display = "initial"; // Show first leg
        if (t_r==0) {
            document.getElementById("gamba2").style.display = "initial"; // Show second leg
            document.getElementById("announcer").style.display = "initial"; // Show the announcer
            document.getElementById("result").innerHTML = "HAI PERSO!"; // Output "You loose" on announcer
            document.getElementById("result").classList.add("lost"); // Some colors
            document.getElementById("word").innerHTML = "La parola era <span style='color:#df0505'>"+parola+"</span>"; // Show word
            document.getElementById("tentativi").innerHTML = "Hai commesso <span style='color:#df0505'>6</span> errori!" // Show errors
            d_biscotto(); // User loose so points are now "0"
        }
    }
    }
});

/* ON-SCREEN KEYBOARD */

$('button').on('click', function(){
    event.preventDefault(); // Prevent refresh
    var value = $(this).val(); // Letter clicked

    $(this).addClass('error'); 
    $(this).removeClass('neutral');

    const lettere = Array.from(parola); // Letters array
    let posizioni = []; // Correct positions array
    w = 0; // Guessed letters counter
    
    /* If letter is in the word */

    if(parola.indexOf(value) > -1) {
        c = 0; // General purpose counter
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
});

/* POINTS/STREAKS MANAGEMENT */

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
