var painted = false;
var canReset = true;

var initialSelected = false;
var endSelected = false;
var boundSelected = false;
var inicio = null;
var inicioXY = null;
var fim = null;
var fimXY = null;
var grid = [[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]];

function setInitial() {
    "use strict";
    if($('#initButton').prop('checked')) {
        $('#initButton').bootstrapToggle('on');
        $('#endButton').bootstrapToggle('off');
        $('#boundButton').bootstrapToggle('off');
        initialSelected = true;
        endSelected = false;
        boundSelected = false;
    } else {
        initialSelected = false;
    }
};

function setEnd() {
    "use strict";
    if($('#endButton').prop('checked')) {
        $('#initButton').bootstrapToggle('off');
        $('#endButton').bootstrapToggle('on');
        $('#boundButton').bootstrapToggle('off');
        endSelected = true;
        initialSelected = false;
        boundSelected = false;
    } else {
        endSelected = false;
    }
};

function setBound() {
    "use strict";
    if($('#boundButton').prop('checked')) {
        $('#initButton').bootstrapToggle('off');
        $('#endButton').bootstrapToggle('off');
        $('#boundButton').bootstrapToggle('on');
        boundSelected = true;
        initialSelected = false;
        endSelected = false;
        
    } else {
        boundSelected = false;
    }
};

function teste() {
    "use strict";
    console.log("i: "+initialSelected);
    console.log("e: "+endSelected);
    console.log("b: "+boundSelected);
    console.log("inicio: "+inicio);
    console.log("inicioXY: "+inicioXY);
    console.log("fim: "+fim);
    console.log("fimXY: "+fimXY);
    console.log(grid);
}

function setButtonValue(x,y) {
    "use strict";
    if(initialSelected) {
        event.target.classList.remove("checked-fim");
        event.target.classList.remove("checked-barreira");
        event.target.classList.remove("checked-caminhando");
        event.target.classList.remove("checked-melhor");
        if(inicio != null) {
            inicio.classList.remove("checked-inicio");
            grid[inicioXY["x"]][inicioXY["y"]] = 0;
        }
        if(inicioXY != null && inicioXY['x'] == x && inicioXY['y'] == y) {
            inicio = null;
            inicioXY = null;
        } else {
            inicio = event.target;
            inicioXY = {"x":x,"y":y};
            event.target.classList.add("checked-inicio");
            grid[x][y] = 0;
        }
        if(fimXY != null && fimXY['x'] == x && fimXY['y'] == y) {
            fimXY = null;
            fim = null;
        }
        $('#initButton').bootstrapToggle('off');
        initialSelected = false;
    }
    if(endSelected) {
        event.target.classList.remove("checked-inicio");
        event.target.classList.remove("checked-barreira");
        event.target.classList.remove("checked-caminhando");
        event.target.classList.remove("checked-melhor");
        if(fim != null) {
            fim.classList.remove("checked-fim");
            grid[fimXY["x"]][fimXY["y"]] = 0;
        }
        if(fimXY != null && fimXY['x'] == x && fimXY['y'] == y) {
            fimXY = null;
            fim = null;
        } else {
            fim = event.target;
            fimXY = {"x":x,"y":y};
            event.target.classList.add("checked-fim");
            grid[x][y] = 0;
        }
        if(inicioXY!= null && inicioXY['x'] == x && inicioXY['y'] == y) {
            inicioXY = null;
            inicio = null;
        }
        $('#endButton').bootstrapToggle('off');
        endSelected = false;
    }
    if(boundSelected) {
        event.target.classList.remove("checked-inicio");
        event.target.classList.remove("checked-fim");
        event.target.classList.remove("checked-caminhando");
        event.target.classList.remove("checked-melhor");
        if(inicioXY != null && inicioXY['x'] == x && inicioXY['y'] == y) {
            inicioXY = null;
            inicio = null;
        }
        if(fimXY != null && fimXY['x'] == x && fimXY['y'] == y) {
            fimXY = null;
            fim = null;
        }
        if(grid[x][y] == 0) {
            event.target.classList.add("checked-barreira");
            grid[x][y] = 1;
        } else {
            event.target.classList.remove("checked-barreira");
            grid[x][y] = 0;
        }
    }
}

function reset() {
    if(canReset) {
        for(let i = 0; i < 16; i++) {
            for(let j = 0; j < 20; j++) {
                grid[i][j] = 0;
                $('#'+String(i).concat("_"+String(j))).removeClass("checked-caminhando");
                $('#'+String(i).concat("_"+String(j))).removeClass("checked-inicio");
                $('#'+String(i).concat("_"+String(j))).removeClass("checked-fim");
                $('#'+String(i).concat("_"+String(j))).removeClass("checked-barreira");
                $('#'+String(i).concat("_"+String(j))).removeClass("checked-melhor");
                $('#initButton').bootstrapToggle('off');
                $('#endButton').bootstrapToggle('off');
                $('#boundButton').bootstrapToggle('off');
                $('#'+String(i).concat("_"+String(j))).html('');
                initialSelected = false;
                endSelected = false;
                boundSelected = false;
                inicio = null;
                inicioXY = null;
                fim = null;
                fimXY = null;
            }
        }
        painted = false;
    }   
}

$(document).on('click',function(){
    "use strict";
    if(!painted) {
        if(event.target.getAttribute('for') == "initButton"){
            setInitial();
        }
        if(event.target.getAttribute('for') == "endButton"){
            setEnd();
        }
        if(event.target.getAttribute('for') == "boundButton"){
            setBound();
        }
    } else {
        initialSelected = false;
        endSelected = false;
        boundSelected = false;
        $('#initButton').bootstrapToggle('off');
        $('#endButton').bootstrapToggle('off');
        $('#boundButton').bootstrapToggle('off');
        if(canReset) {
            alert("Resete para poder executar novamente");
        }
    }
    /*if(event.target.getAttribute('for') == null) {
        $('#initButton').bootstrapToggle('off');
        $('#endButton').bootstrapToggle('off');
        initialSelected = false;
        
    }*/
});


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function start() {
    "use strict";
    event.preventDefault();
    if(painted) {
        return;
    }
    if(inicioXY == null || fimXY == null) {
        return alert("Defina um início e fim");
    }
    let _url = "https://graphsearchapi.herokuapp.com/search/"+$('#algorithm').val();
    $.ajax({
        url : _url,
        type : 'POST',
        contentType: "application/json",
        data: JSON.stringify({
            "grid": grid,
            "initialX":inicioXY.x,
            "initialY":inicioXY.y,
            "endX":fimXY.x,
            "endY":fimXY.y
        }),
        dataType: "json",
        success: async function(data) {
            painted = true;
            initialSelected = false;
            endSelected = false;
            boundSelected = false;
            canReset = false;
            $('#initButton').bootstrapToggle('off');
            $('#endButton').bootstrapToggle('off');
            $('#boundButton').bootstrapToggle('off');
            let end = data.nodes.length;
            for (let i = 0; i < end; i++) {
                if(i !== 0 && i !== end -1) {
                    $('#'+String(data['nodes'][i].x).concat("_"+String(data['nodes'][i].y))).addClass("checked-caminhando");
                }
                if(data.path.length === 0 && i === end - 1) {
                    $('#'+String(data['nodes'][i].x).concat("_"+String(data['nodes'][i].y))).addClass("checked-caminhando");
                }
                $('#'+String(data['nodes'][i].x).concat("_"+String(data['nodes'][i].y))).html("Lv."+data['nodes'][i].level);
                await sleep(100);
            }
            if(data.path.length > 0) {
                end = data.path.length-1;
                for (let i = 1; i < end; i++) {
                    $('#'+String(data['path'][i].x).concat("_"+String(data['path'][i].y))).addClass("checked-melhor");
                    await sleep(100);
                }
            }   
            canReset = true;
        },
        fail: function(jqXHR, textStatus, msg){
            canReset = true;
            painted = true;
            alert(msg);
        }
   }); 
};
