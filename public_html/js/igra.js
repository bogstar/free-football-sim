var team = function(_att, _def, _spd, _tec, _sta, _name, _igraci) {

    this.att = _att;
    this.def = _def;
    this.spd = _spd;
    this.tec = _tec;
    this.sta = _sta;
    this.name = _name;
    this.igraci = _igraci;

}

var igrac = function(_ime, _pozicija, _brojPozicije, _brojGolova) {

    this.ime = _ime;
    this.pozicija = _pozicija;
    this.brojPozicije = _brojPozicije;
    this.brojGolova = _brojGolova;
    
}

igrac.prototype.getAtribute = function(atr) {
    switch(atr) {
        case 'ime':
            return this.ime;
            break;
        case 'pozicija':
            return this.pozicija;
            break;
        case 'brojPozicije':
            return this.brojPozicije;
            break;
        case 'brojGolova':
            return this.brojGolova;
            break;
    }
}

team.prototype.getAtribute = function(atr) {
    switch(atr) {
        case 'att':
            return this.att;
            break;
        case 'def':
            return this.def;
            break;
        case 'spd':
            return this.spd;
            break;
        case 'sta':
            return this.sta;
            break;
        case 'tec':
            return this.tec;
            break;
        case 'name':
            return this.name;
            break;
    }
}

team.prototype.setAtribute = function(_att, _def, _spd, _tec, _sta) {
    this.att = _att;
    this.def = _def;
    this.spd = _spd;
    this.tec = _tec;
    this.sta = _sta;   
}

team.prototype.getPlayerName = function(indeks) {
    return this.igraci[indeks].ime;
}

team.prototype.getPlayerPosition = function(indeks) {
    return this.igraci[indeks].pozicija;
}

team.prototype.getPlayerGoalCount = function(indeks) {
    return this.igraci[indeks].brojGolova;
}

team.prototype.addPlayerGoalCountByOne = function(indeks) {
    this.igraci[indeks].brojGolova++;
}

function stvoriIgrace() {
    
    brojGolova = 0;
        
    // Rijeka
    igraci = new Array();
    tim = 'rij';
    
    for(var i = 1; i <= 2; i++) {
        pozicija = 'att';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'mid';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'def';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    rij = new team(72, 61, 59, 85, 63, 'Rijeka', igraci);
    
    
    // Dinamo
    igraci = new Array();
    tim = 'din';
    
    for(var i = 1; i <= 2; i++) {
        pozicija = 'att';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'mid';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'def';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    din = new team(85, 59, 63, 71, 62, 'Dinamo', igraci);
    
    
    // Hajduk
    igraci = new Array();
    tim = 'haj';
    
    for(var i = 1; i <= 2; i++) {
        pozicija = 'att';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'mid';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'def';
        dodijeliPoziciju(pozicija, i, tim);
    }

    haj = new team(63, 85, 59, 61, 72, 'Hajduk', igraci);
    
    
    // Real
    igraci = new Array();
    tim = 'rmd';
    
    for(var i = 1; i <= 2; i++) {
        pozicija = 'att';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'mid';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'def';
        dodijeliPoziciju(pozicija, i, tim);
    }

    rmd = new team(100, 70, 74, 84, 72, 'Real', igraci);
    
    
    // Barcelona
    igraci = new Array();
    tim = 'bar';
    
    for(var i = 1; i <= 2; i++) {
        pozicija = 'att';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'mid';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'def';
        dodijeliPoziciju(pozicija, i, tim);
    }

    bar = new team(84, 72, 70, 100, 74, 'Barcelona', igraci);
    
    
    // PSG
    igraci = new Array();
    tim = 'psg';
    
    for(var i = 1; i <= 2; i++) {
        pozicija = 'att';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'mid';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'def';
        dodijeliPoziciju(pozicija, i, tim);
    }

    psg = new team(82, 71, 86, 74, 71, 'PSG', igraci);
    
    
    // Bayern
    igraci = new Array();
    tim = 'byr';
    
    for(var i = 1; i <= 2; i++) {
        pozicija = 'att';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'mid';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'def';
        dodijeliPoziciju(pozicija, i, tim);
    }

    byr = new team(74, 100, 70, 72, 84, 'Bayern', igraci);
    
    
    // Nas tim
    igraci = new Array();
    tim = 'mojtim';
    timName = document.getElementById("tim_name").innerHTML;
    
    for(var i = 1; i <= 2; i++) {
        pozicija = 'att';
        dodijeliPoziciju(pozicija, i, tim);
    }
    
    for(var i = 1; i <= 4; i++) {
        pozicija = 'mid';
        dodijeliPoziciju(pozicija, i, tim);
    }
    /*
    for(var i = 1; i <= 4; i++) {
        pozicija = 'def';
        dodijeliPoziciju(pozicija, i, tim);
    }*/
   
    ctm = new team(60, 60, 60, 60, 60, timName, igraci);
}

ctm = AAtt = ADef = ASpd = ATec = ASta = timName = tockica = protivnik = pobjednikPenala = null;

vrijeme = 0;

prviKrug = drugiKrug = treciKrug = pobjednikTurnira = mi = protivnikIme = pathDoSlike = null;

protivnikPrikaz = protivnikPrikazIme = miPrikaz = null;

function pozoviGameOverPovratakTadin() {
    setTimeout(function(){ document.getElementById("putactadin").style.display = "block"}, 3000);
    gameOver.playclip();
}

function pozoviVictoryPovratakTadin() {
    cookie = document.cookie;
    MVP = getCookie("ime");
    MVPBrojGolova = getCookie("broj");
    document.getElementById("mvp").innerHTML = 'Vaš najbolji strijelac: ' + MVP + ' - broj golova: ' + MVPBrojGolova;
    setTimeout(function(){ document.getElementById("putactadin").style.display = "block"}, 3000);
    victory.playclip();
}

function init() {
    
    stvoriIgrace();
    
    pathDoSlike = document.getElementById("tim_logo").innerHTML;
    
    prviKrug = [din, haj, rij, psg, byr, rmd, bar, ctm];
    
    shuffleArray(prviKrug);
    
    tezina = document.getElementById("tezina").innerHTML;
    
    switch(tezina) {
        case 'demos':
            Pools = 500;
            break;
        case 'easy':
            Pools = 400;
            break;
        case 'medium':
            Pools = 380;
            break;
        case 'hard':
            Pools = 360;
            break;
        default:
            Pools = 400;
    }
    
    refresh();
 
    document.getElementById("livefeed").innerHTML = '';
    
    for(var i = 0; i < 8; i++) {
        if(prviKrug[i].getAtribute("name") == timName) {
            if(i % 2 == 0) {
                protivnik = i + 1;
                protivnikIme = prviKrug[protivnik].getAtribute("name");
                mi = i;
            } else if(i % 2 == 1) {
                protivnik = i - 1;
                protivnikIme = prviKrug[protivnik].getAtribute("name");
                mi = i;
            }
        }
    }
    
    crtanjeLogoNaBreket();
    
    document.getElementById("protivnik").innerHTML = 'Protivnik:<br>' + protivnikIme + '<br>att: ' + prviKrug[protivnik].getAtribute("att") + '<br> def: ' + prviKrug[protivnik].getAtribute("def") + '<br> spd: ' + prviKrug[protivnik].getAtribute("spd") + '<br> tec: ' + prviKrug[protivnik].getAtribute("tec") + '<br> sta: ' + prviKrug[protivnik].getAtribute("sta") + '<br>';
}

function dohvatiProtivnika() {
        
    crtanjeLogoNaBreket();
    if(treciKrug == null && drugiKrug != null) {
        for(var i = 0; i < 4; i++) {
            if(drugiKrug[i].getAtribute("name") == timName) {
                if(i % 2 == 0) {
                    console.log(i);
                    protivnikPrikaz = i + 1;
                    protivnikPrikazIme = drugiKrug[protivnikPrikaz].getAtribute("name");
                    miPrikaz = i;
                } else if(i % 2 == 1) {
                    console.log(i);
                    protivnikPrikaz = i - 1;
                    protivnikPrikazIme = drugiKrug[protivnikPrikaz].getAtribute("name");
                    miPrikaz = i;
                }
                console.log(drugiKrug[i].getAtribute("name") == timName);
                document.getElementById("protivnik").innerHTML = 'Protivnik:<br>' + protivnikPrikazIme + '<br>att: ' + drugiKrug[protivnikPrikaz].getAtribute("att") + '<br> def: ' + drugiKrug[protivnikPrikaz].getAtribute("def") + '<br> spd: ' + drugiKrug[protivnikPrikaz].getAtribute("spd") + '<br> tec: ' + drugiKrug[protivnikPrikaz].getAtribute("tec") + '<br> sta: ' + drugiKrug[protivnikPrikaz].getAtribute("sta") + '<br>';
            }
        }
    }
    if(pobjednikTurnira == null && drugiKrug != null && treciKrug != null) {
        for(var i = 0; i < 2; i++) {
            if(treciKrug[i].getAtribute("name") == timName) {
                if(i % 2 == 0) {
                    protivnikPrikaz = i + 1;
                    protivnikPrikazIme = treciKrug[protivnikPrikaz].getAtribute("name");
                    miPrikaz = i;
                } else if(i % 2 == 1) {
                    protivnikPrikaz = i - 1;
                    protivnikPrikazIme = treciKrug[protivnikPrikaz].getAtribute("name");
                    miPrikaz = i;
                }
                document.getElementById("protivnik").innerHTML = 'Protivnik:<br>' + protivnikPrikazIme + '<br>att: ' + treciKrug[protivnikPrikaz].getAtribute("att") + '<br> def: ' + treciKrug[protivnikPrikaz].getAtribute("def") + '<br> spd: ' + treciKrug[protivnikPrikaz].getAtribute("spd") + '<br> tec: ' + treciKrug[protivnikPrikaz].getAtribute("tec") + '<br> sta: ' + treciKrug[protivnikPrikaz].getAtribute("sta") + '<br>';
            }
        }
    }
    if(pobjednikTurnira != null && drugiKrug != null && treciKrug != null) {
        document.getElementById("protivnik").innerHTML = '';
    }
    
}

function pokreniBorbu(strA, strB) {
    document.getElementById("livefeed").innerHTML = '';
    if(strA == 'bar') {
        A = bar;
    }
    if(strB == 'rmd') {
        B = rmd;
    }
    borba(A, B);
}

function penali(A, B) {
    if(tockica < 5) {
        document.getElementById("livefeed").innerHTML += ".";
        tockica++;
    } else {
        clearInterval(tajmerPenali);
        if(pobjednikPenala == 'A') {
            document.getElementById("livefeed").innerHTML += "<br>Pobjednik je " + A.getAtribute('name') + ".";
        } else {
            document.getElementById("livefeed").innerHTML += "<br>Pobjednik je " + B.getAtribute('name') + ".";
        }
    }
}

function izgubiliSmo() {
    window.location.replace("./game_over.php");
}

function pobijediliSmo() {
    MVPigraci = ctm.igraci;
    max = 0;
    for(var i = 0; i < 6; i++) {
        if(max < MVPigraci[i].brojGolova) {
            max = MVPigraci[i].brojGolova;
            indeksIgraca = i;
        }
    }
    MVPime = MVPigraci[indeksIgraca].getAtribute('ime');
    MVPgolovi = max;
    document.cookie = "ime=" + MVPime;
    document.cookie = "broj=" + MVPgolovi;
    window.location.replace("./Pobjeda.php");
}

function refreshLivefeed(A, B, goloviUMin, brojGolovaA, brojGolovaB) {
    
    document.getElementById("livefeed").scrollTop = document.getElementById("livefeed").scrollHeight;
    
    if(vrijeme == 90 && (brojGolovaA != brojGolovaB)) {
        clearInterval(tajmer);
        dohvatiProtivnika();
        document.getElementById("trening").style.display = "block";
        document.getElementById("livefeed").innerHTML += "<br>Rezultat na kraju utakmice je:<br>" + A.getAtribute('name') + " " + brojGolovaA + ":" + brojGolovaB + " " + B.getAtribute('name') + "<br><br>";
        uDrugomKrugu = uTrecemKrugu = uPobjedniku = false;
        
        if(treciKrug == null) {
            for(var i = 0; i < 4; i++) {
                if(drugiKrug[i].getAtribute("name") == timName) {
                    uDrugomKrugu = true;
                }
            }
            if(!uDrugomKrugu) {
                setTimeout(izgubiliSmo, 5000);
            } else {
                document.getElementById("dalje").disabled = false;
            }
            vrijeme = 0;
            return;
        }
        
        if(pobjednikTurnira == null) {
            for(var i = 0; i < 2; i++) {
                if(treciKrug[i].getAtribute("name") == timName) {
                    uTrecemKrugu = true;
                }
            }
            if(!uTrecemKrugu) {
                setTimeout(izgubiliSmo, 5000);
            } else {
                document.getElementById("dalje").disabled = false;
            }
            vrijeme = 0;
            return;
        }
        
        if(pobjednikTurnira.getAtribute("name") == timName) {
            uPobjedniku = true;
        }
        if(!uPobjedniku) {
            setTimeout(izgubiliSmo, 5000);
        } else {
            setTimeout(pobijediliSmo, 5000);
        }
        vrijeme = 0;
        return;
        
        
    } else if(vrijeme == 90) {
        clearInterval(tajmer);
        dohvatiProtivnika();
        document.getElementById("trening").style.display = "block";
        document.getElementById("livefeed").innerHTML += "<br>Rezultat na kraju utakmice je:<br>" + A.getAtribute('name') + " " + brojGolovaA + ":" + brojGolovaB + " " + B.getAtribute('name') + "<br>Izjednačeno!<br><br>Izvode se penali!<br>";
        tockica = 0;
        uPobjedniku = false;
                
        if(treciKrug == null && pobjednikTurnira == null && drugiKrug != null) {
            for(var i = 0; i < 4; i++) {
                if(drugiKrug[i].getAtribute('name') == timName) {
                    //document.getElementById("livefeed").innerHTML += "Mi smo dobili penale";
                    if(mi % 2 == 0) {
                        pobjednikPenala = 'A';
                    } else {
                        pobjednikPenala = 'B';
                    }
                    console.log("Mi smo pobijedili");
                    setTimeout(function(){ document.getElementById("dalje").disabled = false; }, 5000)
                    break;
                }
            }
            for(var i = 0; i < 4; i++) {
                if(drugiKrug[i].getAtribute('name') == protivnikIme) {
                    //document.getElementById("livefeed").innerHTML += "Mi smo izgubili penale";
                    if(protivnik % 2 == 0) {
                        pobjednikPenala = 'A';
                    } else {
                        pobjednikPenala = 'B';
                    }
                    console.log("Oni su pobijedili" + i);
                    setTimeout(izgubiliSmo, 5000);
                    break;
                }
            }
        }
        
        if(drugiKrug != null && treciKrug != null && pobjednikTurnira == null) {
            for(var i = 0; i < 2; i++) {
                if(treciKrug[i].getAtribute('name') == timName) {
                    //document.getElementById("livefeed").innerHTML += "Mi smo dobili penale";
                    if(mi % 2 == 0) {
                        pobjednikPenala = 'A';
                    } else {
                        pobjednikPenala = 'B';
                    }
                    setTimeout(function(){ document.getElementById("dalje").disabled = false; }, 5000)
                    break;
                } else if (treciKrug[i].getAtribute('name') == protivnikIme) {
                    //document.getElementById("livefeed").innerHTML += "Mi smo izgubili penale";
                    if(protivnik % 2 == 0) {
                        pobjednikPenala = 'A';
                    } else {
                        pobjednikPenala = 'B';
                    }
                    setTimeout(izgubiliSmo, 5000);
                }
            }
        }
        
        if(pobjednikTurnira != null && treciKrug != null && drugiKrug != null) {
            if(pobjednikTurnira.getAtribute('name') == timName) {
                uPobjedniku = true;
            }
            if(!uPobjedniku) {
                setTimeout(izgubiliSmo, 5000);
            } else {
                setTimeout(pobijediliSmo, 5000);
            }
        }
        
        tajmerPenali = setInterval(penali, 500, A, B);
        vrijeme = 0;
        return;
    }
    
    vrijeme++;
    goloviUMinA = goloviUMin[0];
    goloviUMinB = goloviUMin[1];
    
    var zabio = 0;
    
    for(var i = 1; i <= goloviUMinA.length; i++) {
        
        randomPlayer = randomInt(0, 5);
        
        if(vrijeme == goloviUMinA[i]) {
            document.getElementById("livefeed").innerHTML += vrijeme + ". min: " + A.getAtribute('name') + " zabija gol. ";
            document.getElementById("livefeed").innerHTML += "Gol je zabio: " + A.getPlayerName(randomPlayer) + "<br>";
            A.addPlayerGoalCountByOne(randomPlayer);
            zabio = 1;
        }
    }
    
    for(var i = 1; i <= goloviUMinB.length; i++) {
        
        randomPlayer = randomInt(0, 5);
        
        if(vrijeme == goloviUMinB[i]) {
            document.getElementById("livefeed").innerHTML += vrijeme + ". min: " + B.getAtribute('name') + " zabija gol. ";
            document.getElementById("livefeed").innerHTML += "Gol je zabio: " + B.getPlayerName(randomInt(0, 5)) + "<br>";
            B.addPlayerGoalCountByOne(randomPlayer);
            zabio = 1;
        }
    }
    
    if(zabio == 0) {
        document.getElementById("livefeed").innerHTML += vrijeme + ". min:<br>";
    }
}

function refresh() {
    AAtt = parseInt(document.getElementById("Aattslider").value);
    ADef = parseInt(document.getElementById("Adefslider").value);
    ASpd = parseInt(document.getElementById("Aspdslider").value);
    ASta = parseInt(document.getElementById("Astaslider").value);
    ATec = parseInt(document.getElementById("Atecslider").value);
    document.getElementById("Aattnum").innerHTML = AAtt;
    document.getElementById("Adefnum").innerHTML = ADef;
    document.getElementById("Aspdnum").innerHTML = ASpd;
    document.getElementById("Astanum").innerHTML = ASta;
    document.getElementById("Atecnum").innerHTML = ATec;
    Apool = Pools - AAtt - ADef - ASpd - ASta - ATec;
    document.getElementById("Apool").innerHTML = Apool;
    
    if(Apool < 0) {
        document.getElementById("Apool").style.color = 'red';
        document.getElementById("dalje").disabled = true;
    } else if(Apool > 0) {
        document.getElementById("Apool").style.color = 'blue';
        document.getElementById("dalje").disabled = false;
    } else {
        document.getElementById("Apool").style.color = 'green';
        document.getElementById("dalje").disabled = false;
    }
}

function defaultSliders() {
    defV =  60;
    
    document.getElementById("Aattslider").value = defV;
    document.getElementById("Adefslider").value = defV;
    document.getElementById("Aspdslider").value = defV;
    document.getElementById("Astaslider").value = defV;
    document.getElementById("Atecslider").value = defV;
    document.getElementById("Aattnum").innerHTML = defV;
    document.getElementById("Adefnum").innerHTML = defV;
    document.getElementById("Aspdnum").innerHTML = defV;
    document.getElementById("Astanum").innerHTML = defV;
    document.getElementById("Atecnum").innerHTML = defV;
    
    refresh();
}

function izracunajRezultat() {
    console.log("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
    Ateam = new team(AAtt, ADef, ASpd, ATec, ASta, 'Tim A');
    Bteam = new team(BAtt, BDef, BSpd, BTec, BSta, 'Tim B');
    borba(Ateam, Bteam);
}

function pokreniIduciKrug() {
    
    document.getElementById("livefeed").innerHTML = "";
    
    document.getElementById("dalje").disabled = true;
    
    tikovi = parseInt(document.getElementById("brojtikova").value);
    
    if(drugiKrug == null) {
        ctm.setAtribute(AAtt, ADef, ASpd, ATec, ASta);
        pokreniPrviKrug(prviKrug, tikovi);
        return;
    }
    
    if(treciKrug == null) {
        for(var i = 0; i < 4; i++) {
            if(drugiKrug[i].getAtribute("name") == timName) {
                if(i % 2 == 0) {
                    protivnik = i + 1;
                    protivnikIme = drugiKrug[protivnik].getAtribute("name");
                    mi = i;
                } else if(i % 2 == 1) {
                    protivnik = i - 1;
                    protivnikIme = drugiKrug[protivnik].getAtribute("name");
                    mi = i;
                }
            }
        }
        
        ctm.setAtribute(AAtt, ADef, ASpd, ATec, ASta);
        pokreniDrugiKrug(drugiKrug, tikovi);
        return;
    }
    
    if(pobjednikTurnira == null) {
        for(var i = 0; i < 2; i++) {
            if(treciKrug[i].getAtribute("name") == timName) {
                if(i % 2 == 0) {
                    protivnik = i + 1;
                    protivnikIme = treciKrug[protivnik].getAtribute("name");
                    mi = i;
                } else if(i % 2 == 1) {
                    protivnik = i - 1;
                    protivnikIme = treciKrug[protivnik].getAtribute("name");
                    mi = i;
                }
            }
        }
        ctm.setAtribute(AAtt, ADef, ASpd, ATec, ASta);
        pokreniTreciKrug(treciKrug, tikovi);
        return;
    }
}

function pokreniPrviKrug(timovi, tikovi) {
    
    drugiKrug = new Array();
    
    for(var i = 0; i < 8; i+=2) {
        pobjednik = borba(timovi[i], timovi[i+1], tikovi);
        drugiKrug.push(pobjednik);
    }
    
}

function pokreniDrugiKrug(timovi, tikovi) {
    
    treciKrug = new Array();
    
    for(var i = 0; i < 4; i+=2) {
        pobjednik = borba(timovi[i], timovi[i+1], tikovi);
        treciKrug.push(pobjednik);
    }
}

function pokreniTreciKrug(timovi, tikovi) {
    pobjednikTurnira = borba(timovi[0], timovi[1], tikovi);
}

function borba(A, B, tick) {
    
    penalA = false;
    penalB = false;
    
    brojGolovaA = 0;
    brojGolovaB = 0;
    
    console.log("Počinje tekma između klubova " + A.getAtribute('name') + " i " +  B.getAtribute('name') + ". Uzbudljivo!");
    console.log("");
    
    golovi = rollForGoals();
    console.log("Na utakmici će broj golova biti " + golovi + ".");
    
    points = rollCount(A, B);
    pointsA = points[0];
    pointsB = points[1];
    
    console.log("");
    
    for(var i = 0; i < golovi; i++) {
        zabio = goalsDistro(pointsA, pointsB);
        if(zabio == null) {
            console.log("Nema golova jer su bodovi od oba tima 0.");
            return;
        } else if(zabio == 'A') {
            brojGolovaA++;
        } else if(zabio == 'B') {
            brojGolovaB++;
        }
    }
    
    //brojGolovaA = brojGolovaB = 2;
    
    if(brojGolovaA == brojGolovaB) {
        console.log("Izjednačeno! Idu penali!");
        if(randomInt(0, 1)) {
            pobjednikPenala = 'A';
        } else {
            pobjednikPenala = 'B';
        }
    } else {
        pobjednikPenala = null;
    }

    goloviUMin = golMin(A, B, brojGolovaA, brojGolovaB);
    
    if(A.getAtribute('name') == timName || B.getAtribute('name') == timName) {
        tajmer = setInterval(refreshLivefeed, tick, A, B, goloviUMin, brojGolovaA, brojGolovaB);
    }
    
    if(pobjednikPenala == 'A' || pobjednikPenala == 'B') {
        console.log("");
        console.log("Rezultat: " + A.getAtribute('name') + " " + brojGolovaA + ":" + brojGolovaB + " " + B.getAtribute('name'));
        console.log("Rezultat je izjednačen. Igraju se penali.");
        if(pobjednikPenala == 'A') {
            console.log(A.getAtribute('name') +" pobjeđuje.");
            console.log("---------------------------------------------------------------\n");
            return A;
        } else {
            console.log(B.getAtribute('name') +" pobjeđuje.");
            console.log("---------------------------------------------------------------\n");
            return B;
        }
    } else {
        console.log("");
        console.log("Rezultat: " + A.getAtribute('name') + " " + brojGolovaA + ":" + brojGolovaB + " " + B.getAtribute('name'));
    }
   
    if(brojGolovaA > brojGolovaB) {
        return A;
    } else {
        return B;
    }
}

function golMin(A, B, brojGolovaA, brojGolovaB) {
    
    minutaA = [];
    minutaB = [];

    for(var i = 1; i <= brojGolovaA; i++) {
        minutaA[i] = randomInt(1, 90);
        console.log(i + ". gol zabija " + A.getAtribute('name') + " u minuti " + minutaA[i] + ".");
    }
    
    for(var i = 1; i <= brojGolovaB; i++) {
        minutaB[i] = randomInt(1, 90);
        console.log(i + ". gol zabija " + B.getAtribute('name') + " u minuti " + minutaB[i] + ".");
    }
    
    return {
        0: minutaA,
        1: minutaB
    };
    
}

function goalsDistro(pointsA, pointsB) {
    
    if(pointsA == 0 && pointsB == 0) {
        return;
    }
    
    rollA = 0;
    rollB = 0;
    
    while(rollA == rollB) {
        roll = goalDistroRandom(pointsA, pointsB);
        rollA = roll[0];
        rollB = roll[1];
    }

    if(rollA > rollB) {
        return 'A';
    }
    if(rollB > rollA) {
        return 'B';
    }
}

function goalDistroRandom(pointsA, pointsB) {
    rollA = 0;
    rollB = 0;
    
    for(var i = 0; i < pointsA; i++) {
        randomBroj = randomInt(0, 100);
        if(randomBroj > rollA) {
            rollA = randomBroj;
        }
    }
    
    for(var i = 0; i < pointsB; i++) {
        randomBroj = randomInt(0, 100);
        if(randomBroj > rollB) {
            rollB = randomBroj;
        }
    }
    
    return {
        0: rollA,
        1: rollB
    };
}

function rollCount(A, B) {
    
    // Vraća polje koliko je lijevi, a koliko desni dobio.
    pointsA = 0;
    pointsB = 0;
    attA = A.getAtribute('att');
    attB = B.getAtribute('att');
    defA = A.getAtribute('def');
    defB = B.getAtribute('def');
    spdA = A.getAtribute('spd');
    spdB = B.getAtribute('spd');
    tecA = A.getAtribute('tec');
    tecB = B.getAtribute('tec');
    staA = A.getAtribute('sta');
    staB = B.getAtribute('sta');
    nameA = A.getAtribute('name');
    nameB = B.getAtribute('name');
    
    // Attack A
    if(attA > defB) {
        pointsA++;
    }
    if(attA > staB) {
        pointsA++;
    }
    
    // Technique A
    if(tecA > spdB) {
        pointsA++;
    }
    if(tecA > attB) {
        pointsA++;
    }
    
    // Defense A
    if(defA > tecB) {
        pointsA++;
    }
    if(defA > staB) {
        pointsA++;
    }
    
    // Stamina A
    if(staA > spdB) {
        pointsA++;
    }
    if(staA > tecB) {
        pointsA++;
    }
    
    // Speed A
    if(spdA > attB) {
        pointsA++;
    }
    if(spdA > defB) {
        pointsA++;
    }
    
    // B
    // Attack B
    if(attB > defA) {
        pointsB++;
    }
    if(attB > staA) {
        pointsB++;
    }
    
    // Technique A
    if(tecB > spdA) {
        pointsB++;
    }
    if(tecB > attA) {
        pointsB++;
    }
    
    // Defense A
    if(defB > tecA) {
        pointsB++;
    }
    if(defB > staA) {
        pointsB++;
    }
    
    // Stamina A
    if(staB > spdA) {
        pointsB++;
    }
    if(staB > tecA) {
        pointsB++;
    }
    
    // Speed A
    if(spdB > attA) {
        pointsB++;
    }
    if(spdB > defA) {
        pointsB++;
    }
    
    console.log("Odnos snaga: " + nameA + ": " + pointsA + " " + nameB + ": "  + pointsB);
    
    return {
        0: pointsA,
        1: pointsB
    };
}

function rollForGoals() {
    
    goals = 0;
    
    for(i = 0; i < 6; i++) {
        if(randomInt(0, 1) == 1) {
            goals++;
        }
    }
    
    return goals;
}

function randomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function dodijeliPoziciju(pos, broj, _tim) {
        brojPozicije = broj;
        pozicija = pos;
        tim = _tim;
        
        ime = document.getElementById("team_" + tim + "_" + pozicija + "_" + brojPozicije).innerHTML;
        
        noviIgrac = new igrac(ime, pozicija, brojPozicije, brojGolova);
        igraci.push(noviIgrac);
}

function shuffleArray(o) {
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
};

function crtanjeLogoNaBreket() {
    
    var c = document.getElementById("bracket-canvas");
    var ctx = c.getContext("2d");
    var img1 = new Image();
    var img2 = new Image();
    var img3 = new Image();
    var img4 = new Image();
    var img5 = new Image();
    var img6 = new Image();
    var img7 = new Image();
    var img8 = new Image();
    var img9 = new Image();
    var img10 = new Image();
    var img11 = new Image();
    var img12 = new Image();
    var img13 = new Image();
    var img14 = new Image();
    var img15 = new Image();
    
    img1.onload = function() {
        nacrtajUPrvomredu(ctx, img1, 0)
    };
    img2.onload = function() {
        nacrtajUPrvomredu(ctx, img2, 1);
    };
    img3.onload = function() {
        nacrtajUPrvomredu(ctx, img3, 2);
    };
    img4.onload = function() {
        nacrtajUPrvomredu(ctx, img4, 3);
    };
    img5.onload = function() {
        nacrtajUPrvomredu(ctx, img5, 4);  
    };
    img6.onload = function() {
        nacrtajUPrvomredu(ctx, img6, 5);
    };
    img7.onload = function() {
        nacrtajUPrvomredu(ctx, img7, 6);
    };
    img8.onload = function() {
        nacrtajUPrvomredu(ctx, img8, 7);
    };
    
    img1.src = dohvatiSliku(prviKrug[0].getAtribute('name'));
    img2.src = dohvatiSliku(prviKrug[1].getAtribute('name'));
    img3.src = dohvatiSliku(prviKrug[2].getAtribute('name'));
    img4.src = dohvatiSliku(prviKrug[3].getAtribute('name'));
    img5.src = dohvatiSliku(prviKrug[4].getAtribute('name'));
    img6.src = dohvatiSliku(prviKrug[5].getAtribute('name'));
    img7.src = dohvatiSliku(prviKrug[6].getAtribute('name'));
    img8.src = dohvatiSliku(prviKrug[7].getAtribute('name'));
    
    if(drugiKrug != null) {
        img9.onload = function() {
            nacrtajUDrugomredu(ctx, img9, 0);
        };
        img10.onload = function() {
            nacrtajUDrugomredu(ctx, img10, 1);
        };
        img11.onload = function() {
            nacrtajUDrugomredu(ctx, img11, 2);
        };
        img12.onload = function() {
            nacrtajUDrugomredu(ctx, img12, 3);
        };
        img9.src = dohvatiSliku(drugiKrug[0].getAtribute('name'));
        img10.src = dohvatiSliku(drugiKrug[1].getAtribute('name'));
        img11.src = dohvatiSliku(drugiKrug[2].getAtribute('name'));
        img12.src = dohvatiSliku(drugiKrug[3].getAtribute('name'));
    }
    
    if(treciKrug != null) {
        img13.onload = function() {
            nacrtajUTrecemredu(ctx, img13, 0);
        };
        img14.onload = function() {
            nacrtajUTrecemredu(ctx, img14, 1);
        };
        img13.src = dohvatiSliku(treciKrug[0].getAtribute('name'));
        img14.src = dohvatiSliku(treciKrug[1].getAtribute('name'));
    }
    
    if(pobjednikTurnira != null) {
        img15.onload = function() {
            nacrtajpobjednika(ctx, img15);
        };
        img15.src = dohvatiSliku(pobjednikTurnira.getAtribute('name'));
    }
    
}

function nacrtajUPrvomredu(ctx, slika, pozicijaSlike) {
        ctx.drawImage(slika, 2, 16 + (45*pozicijaSlike), 40, 40);
}

function nacrtajUDrugomredu(ctx, slika, pozicijaSlike) {
        ctx.drawImage(slika, 225, 35 + (87*pozicijaSlike), 40, 40);
}

function nacrtajUTrecemredu(ctx, slika, pozicijaSlike) {
        ctx.drawImage(slika, 345, 80 + (172*pozicijaSlike), 40, 40);
}

function nacrtajpobjednika(ctx, slika) {
        ctx.drawImage(slika, 448, 169, 40, 40);
}

function dohvatiSliku(path, nastim) {
    
    path = "public_html/design_resources/img/teams/" + path + ".png";
    return path;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

// Mouseover/ Click sound effect- by JavaScript Kit (www.javascriptkit.com)
// Visit JavaScript Kit at http://www.javascriptkit.com/ for full source code

//** Usage: Instantiate script by calling: var uniquevar=createsoundbite("soundfile1", "fallbackfile2", "fallebacksound3", etc)
//** Call: uniquevar.playclip() to play sound

var html5_audiotypes={ //define list of audio file extensions and their associated audio types. Add to it if your specified audio file isn't on this list:
	"mp3": "audio/mpeg",
	"mp4": "audio/mp4",
	"ogg": "audio/ogg",
	"wav": "audio/wav"
}

function createsoundbite(sound){
	var html5audio=document.createElement('audio');
	if (html5audio.canPlayType){ //check support for HTML5 audio
		for (var i=0; i<arguments.length; i++){
			var sourceel=document.createElement('source')
			sourceel.setAttribute('src', arguments[i])
			if (arguments[i].match(/\.(\w+)$/i))
				sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
			html5audio.appendChild(sourceel)
		}
		html5audio.load()
		html5audio.playclip=function(){
			html5audio.pause()
			html5audio.currentTime=0
			html5audio.play()
		}
		return html5audio
	}
	else{
		return {playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}
	}
}

mouseOverSoundsMenu = {
    0: "public_html/design_resources/sound/menu/plink01.mp3",
    1: "public_html/design_resources/sound/menu/plink02.mp3",
    2: "public_html/design_resources/sound/menu/plink03.mp3",
    3: "public_html/design_resources/sound/menu/plink04.mp3"
}

mouseOverSoundsIgraj = {
    0: "public_html/design_resources/sound/menu/tadin01.mp3",
    1: "public_html/design_resources/sound/menu/tadin02.mp3"
}

igrajPravilaSound = 'public_html/design_resources/sound/menu/igra01.mp3';
igrajDodajTimSound = 'public_html/design_resources/sound/menu/igra02.mp3';
gameOverSound = 'public_html/design_resources/sound/menu/gameover.mp3';
victorySound = 'public_html/design_resources/sound/menu/victory.mp3';

var mouseOverMenu = createsoundbite(mouseOverSoundsMenu[randomInt(0, 3)]);
var mouseOverIgraj = createsoundbite(mouseOverSoundsIgraj[randomInt(0, 1)]);
var igraPravila = createsoundbite(igrajPravilaSound);
var igraDodajTim = createsoundbite(igrajDodajTimSound);
var gameOver = createsoundbite(gameOverSound);
var victory = createsoundbite(victorySound);