<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Graphs Animation</title>

        <script src="js/jquery-3.5.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-grid.min.css" rel="stylesheet">
        <link href="css/bootstrap4-toggle.min.css" rel="stylesheet">  
        <script src="js/bootstrap4-toggle.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/graphInc.png">
    </head>
    <body>
        <div class="container" id="titulo">
            <h1>Graph Searchs</h1>
        </div>
        <div class="container" id="matriz">
            <div class="btn-toolbar" style="padding-bottom: 20px;">
                <div class="btn-group mr-2 grid-center" role="group" >
                    <div class="btn-menu">
                      <label class="check-inicio" for="initButtom">Início</label><br>
                      <input id="initButton" type="checkbox" data-toggle="toggle" data-onstyle="success">
                    </div>
                    <div class="btn-menu"> 
                      <label class="check-fim" for="endButtom">Fim</label><br>
                      <input id="endButton" type="checkbox" data-toggle="toggle" data-onstyle="danger">
                    </div>
                    <div class="btn-menu"> 
                      <label class="check-barreira" for="boundButtom">Barreira</label><br>
                      <input id="boundButton" type="checkbox" data-toggle="toggle" data-onstyle="primary">
                    </div>
                </div>
                <div class="btn-group mr-2 grid-center" role="group" >
                  <div>
                  <label for="algorithm">Algoritmo</label><br>
                  <select id="algorithm" class="form-control">
                      <option value="bfs" selected>Busca em largura</option>
                      <option value="dfs">Busca em profundidade</option>
                      <option value="ast">A*</option>
                  </select>
                  </div>
                </div>
                <div class="btn-group mr-2 grid-center" role="group" >
                  <div>
                    <br>
                    <button onclick="reset();" id="start" type="button" class="btn btn-warning">Reset</button>
                  </div>
                </div>
                <div class="btn-group mr-2 grid-center" role="group" >
                  <div>
                    <br>
                    <button onclick="start();" id="start" type="button" class="btn btn-info">Start</button>
                  </div>
                </div>
            </div>
            <div class="btn-toolbar" >
                <div class="btn-group mr-2 grid-center" role="group" >
                  <button onclick="setButtonValue(0,0)" id="0_0" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,1)" id="0_1" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,2)" id="0_2" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,3)" id="0_3" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,4)" id="0_4" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,5)" id="0_5" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,6)" id="0_6" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,7)" id="0_7" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,8)" id="0_8" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,9)" id="0_9" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,10)" id="0_10" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,11)" id="0_11" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,12)" id="0_12" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,13)" id="0_13" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,14)" id="0_14" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,15)" id="0_15" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,16)" id="0_16" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,17)" id="0_17" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,18)" id="0_18" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(0,19)" id="0_19" type="button" class="btn btn-outline-dark grid-item"></button>
                </div>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group mr-2 grid-center" role="group" >
                  <button onclick="setButtonValue(1,0)" id="1_0" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,1)" id="1_1" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,2)" id="1_2" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,3)" id="1_3" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,4)" id="1_4" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,5)" id="1_5" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,6)" id="1_6" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,7)" id="1_7" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,8)" id="1_8" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,9)" id="1_9" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,10)" id="1_10" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,11)" id="1_11" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,12)" id="1_12" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,13)" id="1_13" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,14)" id="1_14" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,15)" id="1_15" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,16)" id="1_16" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,17)" id="1_17" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,18)" id="1_18" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(1,19)" id="1_19" type="button" class="btn btn-outline-dark grid-item"></button>
                </div>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group mr-2 grid-center" role="group" >
                  <button onclick="setButtonValue(2,0)" id="2_0" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,1)" id="2_1" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,2)" id="2_2" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,3)" id="2_3" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,4)" id="2_4" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,5)" id="2_5" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,6)" id="2_6" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,7)" id="2_7" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,8)" id="2_8" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,9)" id="2_9" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,10)" id="2_10" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,11)" id="2_11" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,12)" id="2_12" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,13)" id="2_13" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,14)" id="2_14" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,15)" id="2_15" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,16)" id="2_16" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,17)" id="2_17" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,18)" id="2_18" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(2,19)" id="2_19" type="button" class="btn btn-outline-dark grid-item"></button>
                </div>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group mr-2 grid-center" role="group" >
                  <button onclick="setButtonValue(3,0)" id="3_0" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,1)" id="3_1" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,2)" id="3_2" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,3)" id="3_3" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,4)" id="3_4" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,5)" id="3_5" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,6)" id="3_6" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,7)" id="3_7" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,8)" id="3_8" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,9)" id="3_9" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,10)" id="3_10" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,11)" id="3_11" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,12)" id="3_12" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,13)" id="3_13" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,14)" id="3_14" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,15)" id="3_15" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,16)" id="3_16" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,17)" id="3_17" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,18)" id="3_18" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(3,19)" id="3_19" type="button" class="btn btn-outline-dark grid-item"></button>
                </div>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group mr-2 grid-center" role="group" >
                  <button onclick="setButtonValue(4,0)" id="4_0" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,1)" id="4_1" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,2)" id="4_2" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,3)" id="4_3" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,4)" id="4_4" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,5)" id="4_5" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,6)" id="4_6" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,7)" id="4_7" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,8)" id="4_8" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,9)" id="4_9" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,10)" id="4_10" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,11)" id="4_11" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,12)" id="4_12" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,13)" id="4_13" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,14)" id="4_14" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,15)" id="4_15" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,16)" id="4_16" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,17)" id="4_17" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,18)" id="4_18" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(4,19)" id="4_19" type="button" class="btn btn-outline-dark grid-item"></button>
                </div>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group mr-2 grid-center" role="group" >
                  <button onclick="setButtonValue(5,0)" id="5_0" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,1)" id="5_1" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,2)" id="5_2" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,3)" id="5_3" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,4)" id="5_4" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,5)" id="5_5" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,6)" id="5_6" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,7)" id="5_7" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,8)" id="5_8" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,9)" id="5_9" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,10)" id="5_10" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,11)" id="5_11" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,12)" id="5_12" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,13)" id="5_13" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,14)" id="5_14" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,15)" id="5_15" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,16)" id="5_16" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,17)" id="5_17" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,18)" id="5_18" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(5,19)" id="5_19" type="button" class="btn btn-outline-dark grid-item"></button>
                </div>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group mr-2 grid-center" role="group" >
                  <button onclick="setButtonValue(6,0)" id="6_0" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,1)" id="6_1" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,2)" id="6_2" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,3)" id="6_3" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,4)" id="6_4" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,5)" id="6_5" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,6)" id="6_6" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,7)" id="6_7" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,8)" id="6_8" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,9)" id="6_9" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,10)" id="6_10" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,11)" id="6_11" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,12)" id="6_12" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,13)" id="6_13" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,14)" id="6_14" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,15)" id="6_15" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,16)" id="6_16" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,17)" id="6_17" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,18)" id="6_18" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(6,19)" id="6_19" type="button" class="btn btn-outline-dark grid-item"></button>
                </div>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group mr-2 grid-center" role="group" >
                  <button onclick="setButtonValue(7,0)" id="7_0" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,1)" id="7_1" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,2)" id="7_2" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,3)" id="7_3" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,4)" id="7_4" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,5)" id="7_5" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,6)" id="7_6" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,7)" id="7_7" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,8)" id="7_8" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,9)" id="7_9" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,10)" id="7_10" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,11)" id="7_11" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,12)" id="7_12" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,13)" id="7_13" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,14)" id="7_14" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,15)" id="7_15" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,16)" id="7_16" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,17)" id="7_17" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,18)" id="7_18" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(7,19)" id="7_19" type="button" class="btn btn-outline-dark grid-item"></button>
                </div>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group mr-2 grid-center" role="group" >
                  <button onclick="setButtonValue(8,0)" id="8_0" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,1)" id="8_1" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,2)" id="8_2" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,3)" id="8_3" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,4)" id="8_4" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,5)" id="8_5" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,6)" id="8_6" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,7)" id="8_7" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,8)" id="8_8" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,9)" id="8_9" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,10)" id="8_10" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,11)" id="8_11" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,12)" id="8_12" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,13)" id="8_13" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,14)" id="8_14" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,15)" id="8_15" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,16)" id="8_16" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,17)" id="8_17" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,18)" id="8_18" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(8,19)" id="8_19" type="button" class="btn btn-outline-dark grid-item"></button>
                </div>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group mr-2 grid-center" role="group" >
                  <button onclick="setButtonValue(9,0)" id="9_0" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,1)" id="9_1" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,2)" id="9_2" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,3)" id="9_3" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,4)" id="9_4" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,5)" id="9_5" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,6)" id="9_6" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,7)" id="9_7" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,8)" id="9_8" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,9)" id="9_9" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,10)" id="9_10" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,11)" id="9_11" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,12)" id="9_12" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,13)" id="9_13" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,14)" id="9_14" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,15)" id="9_15" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,16)" id="9_16" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,17)" id="9_17" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,18)" id="9_18" type="button" class="btn btn-outline-dark grid-item"></button>
                  <button onclick="setButtonValue(9,19)" id="9_19" type="button" class="btn btn-outline-dark grid-item"></button>
                </div>
            </div>
            <div class="btn-toolbar" >
              <div class="btn-group mr-2 grid-center" role="group" >
                <button onclick="setButtonValue(10,0)" id="10_0" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,1)" id="10_1" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,2)" id="10_2" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,3)" id="10_3" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,4)" id="10_4" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,5)" id="10_5" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,6)" id="10_6" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,7)" id="10_7" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,8)" id="10_8" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,9)" id="10_9" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,10)" id="10_10" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,11)" id="10_11" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,12)" id="10_12" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,13)" id="10_13" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,14)" id="10_14" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,15)" id="10_15" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,16)" id="10_16" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,17)" id="10_17" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,18)" id="10_18" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(10,19)" id="10_19" type="button" class="btn btn-outline-dark grid-item"></button>
              </div>
          </div>
          <div class="btn-toolbar">
              <div class="btn-group mr-2 grid-center" role="group" >
                <button onclick="setButtonValue(11,0)" id="11_0" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,1)" id="11_1" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,2)" id="11_2" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,3)" id="11_3" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,4)" id="11_4" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,5)" id="11_5" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,6)" id="11_6" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,7)" id="11_7" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,8)" id="11_8" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,9)" id="11_9" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,10)" id="11_10" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,11)" id="11_11" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,12)" id="11_12" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,13)" id="11_13" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,14)" id="11_14" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,15)" id="11_15" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,16)" id="11_16" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,17)" id="11_17" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,18)" id="11_18" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(11,19)" id="11_19" type="button" class="btn btn-outline-dark grid-item"></button>
              </div>
          </div>
          <div class="btn-toolbar">
              <div class="btn-group mr-2 grid-center" role="group" >
                <button onclick="setButtonValue(12,0)" id="12_0" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,1)" id="12_1" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,2)" id="12_2" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,3)" id="12_3" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,4)" id="12_4" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,5)" id="12_5" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,6)" id="12_6" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,7)" id="12_7" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,8)" id="12_8" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,9)" id="12_9" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,10)" id="12_10" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,11)" id="12_11" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,12)" id="12_12" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,13)" id="12_13" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,14)" id="12_14" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,15)" id="12_15" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,16)" id="12_16" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,17)" id="12_17" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,18)" id="12_18" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(12,19)" id="12_19" type="button" class="btn btn-outline-dark grid-item"></button>
              </div>
          </div>
          <div class="btn-toolbar">
              <div class="btn-group mr-2 grid-center" role="group" >
                <button onclick="setButtonValue(13,0)" id="13_0" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,1)" id="13_1" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,2)" id="13_2" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,3)" id="13_3" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,4)" id="13_4" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,5)" id="13_5" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,6)" id="13_6" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,7)" id="13_7" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,8)" id="13_8" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,9)" id="13_9" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,10)" id="13_10" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,11)" id="13_11" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,12)" id="13_12" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,13)" id="13_13" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,14)" id="13_14" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,15)" id="13_15" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,16)" id="13_16" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,17)" id="13_17" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,18)" id="13_18" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(13,19)" id="13_19" type="button" class="btn btn-outline-dark grid-item"></button>
              </div>
          </div>
          <div class="btn-toolbar">
              <div class="btn-group mr-2 grid-center" role="group" >
                <button onclick="setButtonValue(14,0)" id="14_0" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,1)" id="14_1" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,2)" id="14_2" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,3)" id="14_3" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,4)" id="14_4" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,5)" id="14_5" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,6)" id="14_6" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,7)" id="14_7" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,8)" id="14_8" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,9)" id="14_9" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,10)" id="14_10" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,11)" id="14_11" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,12)" id="14_12" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,13)" id="14_13" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,14)" id="14_14" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,15)" id="14_15" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,16)" id="14_16" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,17)" id="14_17" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,18)" id="14_18" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(14,19)" id="14_19" type="button" class="btn btn-outline-dark grid-item"></button>
              </div>
          </div>
          <div class="btn-toolbar">
              <div class="btn-group mr-2 grid-center" role="group" >
                <button onclick="setButtonValue(15,0)" id="15_0" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,1)" id="15_1" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,2)" id="15_2" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,3)" id="15_3" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,4)" id="15_4" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,5)" id="15_5" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,6)" id="15_6" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,7)" id="15_7" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,8)" id="15_8" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,9)" id="15_9" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,10)" id="15_10" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,11)" id="15_11" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,12)" id="15_12" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,13)" id="15_13" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,14)" id="15_14" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,15)" id="15_15" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,16)" id="15_16" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,17)" id="15_17" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,18)" id="15_18" type="button" class="btn btn-outline-dark grid-item"></button>
                <button onclick="setButtonValue(15,19)" id="15_19" type="button" class="btn btn-outline-dark grid-item"></button>
              </div>
          </div>
        </div>
          <div class="container" style="padding: 20px 0 0 0;">
            <p style="text-align:center;"><strong>Instruções:</strong> Aperte em um dos botões "Inicio", "Fim" ou "Barreira" e depois selecione a área em que você deseja colocar cada componente.</p>
            <p style="text-align:center;"><strong>Obs:</strong> A primeira busca pode ser um pouco lenta pois a api no heroku pode estar sendo levantada.</p>
          </div>
          <hr style="margin: 0;">
        <footer class="container" style="padding:10px 0; text-align:center;">
          <p><strong>Developed By: Mei Marcel - <a href="https://github.com/meimarcel" target="_blank">@GitHub</a></strong></p>
        </footer>
        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
