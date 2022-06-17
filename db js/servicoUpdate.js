
// criar area para update de personagem

levelUp = 0; // para o level up colocaria o nivel do XP e quanto de vida extra ele ganha

//atributos novos inceridos deverão alterar bonus como dano/defesa/valor/Armadura/valorArma/hitpoint


var inputValorConverter
    if (moeda = "tifac") {
    var valorConvertidoEmKalogs = inputValorConverter/2
    }
    else{ valorConvertidoEmKalogs= inputValorConverter*2}
// logica para conversao de Kallogs onde 2 Cidars valem 1 Kalogs e  2 kalogs valem 1 Tifac


personagem.modificadores.hitpoint = personagem.vitalidade + personagem.dados.especie + personagem.levelp

function calculaLevelPorXp (){

    var xpF = personagem.dados.xp;
    var levelF = personagem.dados.level;
//logica entre os pontos de XP e o level do personagem.
switch (xpF) {
    case xpF <1000 : levelF = 2; alert("LEVEL UP!!");
        break;
    case xpF < 3000 : levelF = 3; alert("LEVEL UP!!");
        break;
    case xpF < 6000 : levelF = 4; alert("LEVEL UP!!");
        break;
    case xpF < 10000 : levelF = 5; alert("LEVEL UP!!");
        break;
    case xpF < 15000 : levelF = 6; alert("LEVEL UP!!");
        break;
    case xpF < 21000 : levelF = 7; alert("LEVEL UP!!");
        break;
    case xpF < 28000 : levelF = 8; alert("LEVEL UP!!");
        break;
    case xpF < 36000 : levelF = 9; alert("LEVEL UP!!");
        break;
    case xpF < 45000 : levelF = 10; alert("LEVEL UP!!");
        break;
    case xpF < 66000 : levelF = 11; alert("LEVEL UP!!");
        break;
    case xpF < 70000 : levelF = 12; alert("LEVEL UP!!");
        break;
    case xpF < 91000 : levelF = 13; alert("LEVEL UP!!");
        break;
    case xpF < 105000 : levelF = 14; alert("LEVEL UP!!");
        break;
    case xpF < 120000 : levelF = 15; alert("LEVEL UP!!");
        break;
    case xpF < 136000 : levelF = 16; alert("LEVEL UP!!");
        break;
    case xpF < 153000 : levelF = 17; alert("LEVEL UP!!");
        break;
    case xpF < 171000 : levelF = 18; alert("LEVEL UP!!");
        break;
    case xpF < 190000 : levelF = 19; alert("LEVEL UP!!");
        break;
    case xpF > 190000 : levelF = 20; alert("LEVEL MASTER!!");
        break;
default: 1;
}}
   
console.log ("XP: " + personagem.dados.xp, "LEVEL: " + personagem.dados.level)


function buscarDadosPersonagem(){
    getComputedStyle;
}

function enviarDadosPersonagem(){
    getComputedStyle;
}