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

<div id="announcer"><p id="result"></p><br><p id="word"></p><br><p id="tentativi"></p><button id="r_button" onclick="location.reload();">RICOMINCIA!</button><button id="r_button" onclick="location.href='/index.php'">TORNA AL MENU'</button></div>

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

if ($URL == "/game.php?difficulty=normal")
    $parole = ["abbandonare","abbastanza","abitare","abito","accadere","accanto","accendere","accettare","accogliere","accompagnare","accordo","accorgersi","acqua","addirittura","addosso","adesso","affare","affatto","affermare","affrontare","aggiungere","aiutare","aiuto","albergo","albero","alcuno","allontanare","allora","almeno","altro","alzare","amare","ambiente","americano","amico","ammazzare","ammettere","amore","ampio","anche","ancora","andare","angolo","anima","animale","animo","annunciare","antico","apparire","appartenere","appena","appoggiare","appunto","aprire","argomento","armare","arrestare","arrivare","articolo","ascoltare","aspettare","aspetto","assicurare","assistere","assoluto","assumere","attaccare","attendere","attento","attenzione","attesa","attimo","attore","attorno","attraversare","attuale","aumentare","automobile","autore","avanti","avanzare","avere","avvenire","avvertire","avvicinare","avvocato","azione","azzurro","baciare","badare","bagno","bambina","bambino","basso","bastare","battaglia","battere","bellezza","bello","bestia","bianco","biondo","bisognare","bisogno","bocca","bosco","braccio","bravo","breve","bruciare","brutto","buono","buttare","cadere","calcio","caldo","cambiare","camera","camminare","campagna","campo","cantare","capace","capello","capire","capitare","carattere","carne","carta","cattivo","cattolico","causa","cavallo","celebrare","centrale","centro","cercare","certamente","certo","chiamare","chiaro","chiave","chiedere","chiesa","chilometro","chiudere","ciascuno","cielo","circa","cittadino","civile","classe","collina","collo","colore","coloro","colpa","colpire","colpo","cominciare","commercio","commissione","comodo","compagnia","compagno","compiere","comporre","comprare","comprendere","comune","comunque","concedere","concetto","concludere","condizione","condurre","confessare","confronto","congresso","conoscenza","conoscere","conseguenza","consentire","conservare","considerare","consiglio","contadino","contare","contatto","contenere","contento","continuare","continuo","conto","contrario","contro","controllo","convincere","coprire","coraggio","corpo","corrente","correre","corsa","corso","cortile","coscienza","costa","costituire","costringere","costruire","costruzione","creare","credere","crescere","crisi","cristiano","croce","cucina","cultura","cuore","davanti","davvero","decidere","decisione","dedicare","denaro","dente","dentro","descrivere","desiderare","desiderio","destino","destro","determinare","dichiarare","dietro","difendere","difesa","differenza","difficile","diffondere","dimenticare","dimostrare","dinanzi","dipendere","diretto","direttore","direzione","dirigere","diritto","discorso","discutere","disporre","disposizione","distanza","distinguere","distruggere","divenire","diventare","diverso","divertire","dividere","dolce","dolore","domanda","domandare","domani","domenica","donna","dormire","dottore","dovere","dubbio","dunque","durante","durare","eccellenza","eccetera","economico","effetto","elemento","elettrico","elevare","energia","enorme","entrare","entro","epoca","eppure","errore","esame","escludere","esempio","esercito","esistere","esperienza","esporre","espressione","esprimere","essere","estate","estendere","estero","estremo","europeo","evitare","fabbrica","faccia","facile","famiglia","famoso","fantasia","fatica","fatto","favore","felice","fenomeno","ferire","fermare","fermo","ferro","festa","fianco","fiducia","figlia","figlio","figura","figurare","finalmente","finestra","finire","fiore","fissare","fiume","foglia","folla","fondare","fondo","forma","formare","fornire","forse","forte","fortuna","forza","francese","frase","fratello","freddo","fresco","fretta","fronte","frutto","fuggire","fumare","funzione","fuoco","fuori","futuro","gamba","gatto","generale","genere","gente","gesto","gettare","giallo","giardino","giocare","gioco","gioia","giornale","giornata","giorno","giovane","giovanotto","girare","giudicare","giudizio","giugno","giungere","giustizia","giusto","godere","governo","grado","grande","grave","grazia","grazie","greco","gridare","grigio","grosso","gruppo","guardare","guardia","guerra","guidare","gusto","immaginare","immagine","imparare","impedire","imporre","importante","importanza","importare","impossibile","impressione","improvviso","incontrare","indicare","indietro","industria","industriale","infatti","infine","inglese","iniziare","inizio","innamorare","inoltre","insegnare","insieme","insistere","insomma","intanto","intendere","intenzione","interessante","interessare","interesse","interno","intero","intorno","inutile","invece","inverno","invitare","isola","istante","istituto","italiano","labbro","lanciare","largo","lasciare","latino","latte","lavorare","lavoro","legare","legge","leggere","leggero","lettera","letto","levare","liberare","libero","libro","limitare","limite","linea","lingua","lontano","lotta","lungo","luogo","macchina","madre","maestro","magari","maggio","maggiore","malattia","mamma","mancare","mandare","mangiare","maniera","mantenere","marito","massa","massimo","materia","matrimonio","mattina","mattino","medesimo","medico","medio","meglio","memoria","mente","mentre","mercato","meritare","merito","messa","mestiere","metro","mettere","migliore","milione","militare","minimo","ministro","minore","minuto","misura","moderno","moglie","molto","momento","mondo","montagna","monte","morale","morire","morte","mostrare","motivo","movimento","muovere","musica","nascere","nascondere","natura","naturale","naturalmente","nazionale","nazione","neanche","necessario","nemico","nemmeno","neppure","nessuno","niente","nobile","normale","nostro","notare","notevole","notizia","notte","nulla","numero","numeroso","nuovo","occasione","occhio","occorrere","odore","offendere","offrire","oggetto","ognuno","oltre","ombra","onore","opera","operaio","operazione","opinione","opporre","oppure","oramai","ordinare","ordine","orecchio","organizzare","origine","ospedale","osservare","ottenere","padre","padrone","paese","pagare","pagina","palazzo","parecchio","parere","parete","parlare","parola","parte","partecipare","particolare","partire","partito","passare","passato","passione","passo","patria","paura","pazzo","peccato","peggio","pelle","pensare","pensiero","perdere","perfetto","perfino","pericolo","pericoloso","periodo","permettere","persona","personaggio","personale","pesare","pezzo","piacere","piangere","piano","pianta","piantare","pianura","piazza","piccolo","piede","pieno","pietra","piuttosto","poesia","poeta","politica","politico","polizia","pomeriggio","ponte","popolazione","popolo","porre","porta","portare","porto","posare","posizione","possedere","possibile","posto","potenza","potere","povero","pranzo","prato","preciso","preferire","pregare","prendere","preoccupare","preparare","presentare","presente","presenza","presidente","presso","presto","prevedere","prezzo","prima","primo","principale","principe","principio","privato","problema","procedere","processo","prodotto","produrre","produzione","professore","profondo","programma","promettere","pronto","proporre","proposito","proposta","proprio","prossimo","prova","provare","provincia","provocare","provvedere","pubblicare","pubblico","punta","punto","quadro","qualche","qualcosa","qualcuno","quale","qualsiasi","qualunque","quanto","quarto","quasi","quello","questione","questo","quindi","raccogliere","raccontare","ragazza","ragazzo","raggiungere","ragione","rapido","rapporto","reale","recare","recente","regione","regno","relazione","religioso","rendere","repubblica","resistere","restare","resto","ricchezza","ricco","ricerca","ricevere","richiedere","riconoscere","ricordare","ricordo","ridere","ridurre","riempire","rientrare","riferire","rifiutare","riguardare","rimanere","rimettere","ringraziare","ripetere","riportare","riprendere","risolvere","rispetto","rispondere","risposta","risultare","risultato","ritenere","ritornare","ritorno","ritrovare","riunire","riuscire","rivedere","rivelare","rivolgere","rivoluzione","romano","rompere","rosso","russo","sacrificio","sacro","salire","saltare","salutare","salvare","sangue","sapere","sbagliare","scala","scappare","scegliere","scena","scendere","scherzare","scienza","scomparire","scopo","scoppiare","scoprire","scorrere","scrittore","scrivere","scuola","scusare","secolo","secondo","sedere","segnare","segno","segretario","segreto","seguire","seguito","sembrare","semplice","senso","sentimento","sentire","senza","sereno","serie","serio","servire","servizio","settimana","sforzo","sguardo","sicurezza","sicuro","significare","signora","signore","signorina","silenzio","simile","sinistro","sistema","situazione","smettere","sociale","soffrire","sognare","sogno","soldato","solito","soltanto","soluzione","sonno","sopra","soprattutto","sorella","sorgere","sorprendere","sorridere","sorriso","sostenere","sottile","sotto","spalla","spazio","speciale","specie","spegnere","speranza","sperare","spesa","spesso","spettacolo","spiegare","spingere","spirito","sposare","stabilire","staccare","stagione","stamattina","stampa","stanco","stanza","stare","stasera","stato","stazione","stella","stesso","storia","storico","strada","straniero","strano","stringere","strumento","studiare","studio","stupido","subito","succedere","successo","suonare","superare","superiore","svegliare","sviluppo","svolgere","tacere","tagliare","tanto","tardi","tavola","tavolo","teatro","tecnico","tedesco","temere","tempo","tendere","tenere","tentare","termine","terreno","territorio","terzo","testa","tirare","titolo","toccare","togliere","tornare","tranquillo","trarre","trascinare","trasformare","trattare","tratto","treno","triste","troppo","trovare","tuttavia","tutto","uccidere","udire","ufficiale","ufficio","uguale","ultimo","umano","unico","unire","usare","uscire","utile","valere","valle","valore","vario","vasto","vecchio","vedere","vendere","venire","vento","veramente","verde","verso","vestire","vestito","viaggio","vicino","vincere","visita","vista","vivere","voglia","volare","volere","volgere","volta","voltare","volto","vostro","vuoto","zitto",];
else
    $parole = ["Acceleratore","Algebra","Arcobaleno","Assorbimento","Caloria","Combustione","Costante","Convezione","Correlazione","Cristallino","Decibel","Diagonale","Ecografia","Ellisse","Emissione","Equatore","Equinozio","Equazione","Equilibrio","Etere","Fertile","Fluido","Forza","Frequenza","Gradiente","estensiva","intensiva","Unificazione","Qualificato","Impulso","Instabile","Legame","Lucertola","Lunghezza","Magnete","Mantello","Mutazione","Neutrone","irrazionali","apparato","acidi","basi","pitagora","atmosfera","atomo","euclide","celsius","galassia","lattosio","nucleo","steroidi","proteina","parabola","nucleare","anticorpi","seno","teorema","cellulosa","coseno","tangente","carboidrati","equinozio","supernova","fotosintesi","glucosio","elettrone","protone","meccanica","colesterolo","pascal","enzima","saturazione","apotema","ribosio","amminoacidi","amminoacido","eterozigote","saccarosio","cinematica","melanina","procariote","cancerogeno","maltosio","ozonosfera","diabete","dolomiti","Faringe","Laringe","Eclissi","temperatura","Albinismo","Ameba","Ampere","Antimateria","Assioma","Baricentro","Confinamento","Condensazione","Detonazione","Distillazione","Elettroscopio","idroelettrica","Enzima","Fattoriale","Fissione","aerodinamica","centrifuga","Termonucleare","interstellare","quantistica","rifrazione","Interazione","Ipersonico","Irraggiamento","Macromolecole","Metabolismo","Microsecondo","Multidimensione","Nanomateriale","Omozigote","Particella","Poligonale","monocromatica","Radiazione","Australopiteco","Catalizzatore","Darwinismo","Fluorescenza","Luminescenza","Polisaccaride","carbonio"];

$count = count($parole);
$rand = rand(0,$count-1);

$parola = $parole[$rand];
$parola = strtoupper($parola);
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
    #tasto {
        width: 8%;
        height: 2.75rem;
    }
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