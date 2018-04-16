<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AJAX 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/css/styles.css">    
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-0 col-lg-1 col-md-1 col-sm-0 col-xl-1 bg-success pt-5 sidebar"></div>
                <div class="col-12 col-lg-10 col-md-10 col-sm-10 col-xl-10 bg-warning pt-5">
                    <h2>AJAX 1</h2>
                    <hr>
                    <div id="output">MyOutput</div>
                    <hr>
                    <!--button class="btn btn-outline-dark">getData</button-->
                    <button class="btn btn-outline-dark" value="Berlin">Berlin/Germany</button>
                    <button class="btn btn-outline-dark" value="Phuket">Phuket/Thailand</button>
                    <button class="btn btn-outline-dark" value="Palma">Palma/Mallorca</button>
                    <button class="btn btn-outline-dark" value="Santorini">Santorini/Greece</button>
                </div>
                <div class="col-0 col-lg-1 col-md-1 col-sm-0 col-xl-1 bg-success pt-5 sidebar"></div>
            </div>
        </div>
        <script>
          (function () {
              var btns = [];
              btns = document.querySelectorAll('button');
              var output = document.querySelector('#output');
              for (var i = 0; i < btns.length; i++){
              //var btn[i] = document.querySelector('button'); //ermöglicht die Verwendung von CSS-Selektoren wie # und .
              
              btns[i].addEventListener('click', ajaxGet);
              }
              function ajaxGet() {
                  var xhr = new XMLHttpRequest(); //neues Verbindungs-AJAX-Objekt  
                  var city = this.value;
                  xhr.open('get', 'data.php?city=' + city, true); //Parameter sind: Art der Fetch-Methode/Dateiquelle/asynchron oder synchron                  
                  xhr.onreadystatechange = function () {//Eventhandler wartet ob sich der Readystate ändert
                      if (xhr.readyState === 4 && xhr.status === 200) {
                          output.innerHTML = xhr.responseText;
                          //synonym zu document.getElementById('output').innerHTML=xhr.responseText;//responseText gibt den Inhalt der PHP-Datei zurück;
                      }
                  }
                  xhr.send(null); //sendet die Dateien
              }
          })();
        </script>
    </body>
</html>
