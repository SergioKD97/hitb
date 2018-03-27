<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        
        <style>
            .rojo a{background: red !important; background-image: none !important;}
        </style>
    </head>
    <body>
       
        <div class="row">
            <div class="col-md-3" id="calendario"></div>
            <div class="col-md-6">divs para abrir los programas de entremaniento, dieta etc</div>
            <div class="col-md-3">ranking usuarios</div>
        </div>
        

        <script>
            var disabledDays = ['2017-10-21',
                                '2017-10-22'];
            var diasOcupados =  ['2017-10-12',
                                '2017-10-15'];
            
            
            $("#calendario").datepicker();
         
                
        </script>
    </body>

</html>