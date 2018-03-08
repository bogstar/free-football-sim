
function init() {
    
    igrajPregledIgraca.playclip();
    
    att1 = document.getElementById("att1").innerHTML;
    att2 = document.getElementById("att2").innerHTML;
    mid1 = document.getElementById("mid1").innerHTML;
    mid2 = document.getElementById("mid2").innerHTML;
    mid3 = document.getElementById("mid3").innerHTML;
    mid4 = document.getElementById("mid4").innerHTML;
    def1 = document.getElementById("def1").innerHTML;
    def2 = document.getElementById("def2").innerHTML;
    def3 = document.getElementById("def3").innerHTML;
    def4 = document.getElementById("def4").innerHTML;
    gk = document.getElementById("gk").innerHTML;
    
    var c = document.getElementById("footbal-field");
    var ctx = c.getContext("2d");
    var img = new Image();
    
    img.onload = function() {
        crtajIgraca(217, 720, 1, gk);
        crtajIgraca(130, 629, 2, def1);
        crtajIgraca(304, 629, 3, def2);
        crtajIgraca(65, 540, 4, def3);
        crtajIgraca(368, 540, 5, def4);
        crtajIgraca(130, 629 - 200, 6, mid1);
        crtajIgraca(304, 629 - 200, 7, mid2);
        crtajIgraca(65, 540 - 200, 8, mid3);
        crtajIgraca(368, 540 - 200, 9, mid4);
        crtajIgraca(130, 629 - 500, 10, att1);
        crtajIgraca(304, 629 - 500, 11, att2);
    };

    function crtajIgraca(posX, posY, offset, imeIgraca) {
        ctx.drawImage(img, (offset - 1) * 88, 0, 88, 88, posX, posY, 60, 60);
        ctx.font = "20px Alegreya Sans";
        ctx.fillStyle = "lightgray";
        ctx.textAlign = "center";
        ctx.fillText(imeIgraca, posX + 30, posY - 5);
    }
    
    img.src = "public_html/design_resources/img/pozicije.png";
}

function otvoriVratara() {
    mouseClickIgraci.playclip();
    document.getElementById("dropGK").style.display = "block";
    document.getElementById("dropdef").style.display = "none";
    document.getElementById("dropmid").style.display = "none";
    document.getElementById("dropatt").style.display = "none";
}

function otvoriBranica() {
    mouseClickIgraci.playclip();
    document.getElementById("dropGK").style.display = "none";
    document.getElementById("dropdef").style.display = "block";
    document.getElementById("dropmid").style.display = "none";
    document.getElementById("dropatt").style.display = "none";
}

function otvoriVeznog() {
    mouseClickIgraci.playclip();
    document.getElementById("dropGK").style.display = "none";
    document.getElementById("dropdef").style.display = "none";
    document.getElementById("dropmid").style.display = "block";
    document.getElementById("dropatt").style.display = "none";
}

function otvorNapad() {
    mouseClickIgraci.playclip();
    document.getElementById("dropGK").style.display = "none";
    document.getElementById("dropdef").style.display = "none";
    document.getElementById("dropmid").style.display = "none";
    document.getElementById("dropatt").style.display = "block";
}

function randomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

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

mouseOverSoundsIgraj = {
    0: "public_html/design_resources/sound/menu/tadin01.mp3",
    1: "public_html/design_resources/sound/menu/tadin02.mp3"
}

mouseClickIgraciSound = 'public_html/design_resources/sound/menu/tik01.mp3';
igrajDodajIgraceSound = 'public_html/design_resources/sound/menu/igra03.mp3';
igrajPregledIgracaSound = 'public_html/design_resources/sound/menu/igra04.mp3';

var mouseOverIgraj = createsoundbite(mouseOverSoundsIgraj[randomInt(0, 1)]);
var igraDodajIgrace = createsoundbite(igrajDodajIgraceSound);
var igrajPregledIgraca = createsoundbite(igrajPregledIgracaSound);
var mouseClickIgraci = createsoundbite(mouseClickIgraciSound);