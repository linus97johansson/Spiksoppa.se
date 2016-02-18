<?php
require '../Recources/HeadHTML.php';
$headHtml = new TopHtml(false);
print $headHtml->displayTopHtml();
?>
<link type="text/css" href="Create.css"  rel="stylesheet">


</head>
<body>
    <?php
    require '../Recources/TopBar.php';
    ?>
<div class='Container'>
    <!--<div id=wrapper>-->
        <div class="Form">
            <form action="GET">
            <h3>Skapa ditt eget användarkonto</h3>
         
            <h4>Så att du kan uppleva spiksoppa till dess faulla potensial</h4>
            
            <p>Förnamn:
                <input type="text" name="Fnamn"/>
            </p>
        
            <p>Efternamn:
                <input type="text" name="Enamn"/>
            </p>
        
            <p>Användarnamn:
                <input type="text" name="Anvd"/>
            </p>
        
            <p>Email:
                <input type="email" name="email"/>
            </p>
        
            <p>Val av Lösenord:
                <input type="password" name="Lös"/>
            </p>
        
            <p>Repetera Lösenord:
                <input type="password"/>
            </p>
        
            <p>Födelsedatum:
                <input type="month" name="Föd"/>
            </p>
            
            <p>
                <button type="button" name="skapa" onclick="Spik()">Skapa</button>
            </p>
        </form>
        </div>
    </div>    

        <script>
            function Spik(){
                
                
                window.location.href('https://spiksoppa-linus97johansson.c9.io/index.php');
            }
        </script>
</body>