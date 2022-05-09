<!DOCTYPE html>
<html>
    <head>
        <link rel= "stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="images/code2.jpg" href="/images/favicon.ico">
        <title>RSA</title>
    </head>

    <body class="cifra">
        <nav>
            <ul>
                <div class="animazioneNav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="chiSiamo.php">CHI SIAMO</a></li>
                    <li class="algoritmi"><a href="#">ALGORITMI</a>
                </div>
            </ul>
        </nav>
        <div class="container">
            <script src="hackerStyle.js"></script>
            <script src="copy.js"></script>

            <?php require 'decrittazione_rsa.php';require 'RSA.php';require 'elaborazione1.php';require 'SYM.php'?>          
            <form method="POST">
                <div class="testi">
                    <div>
                        <select name="decryptmode" id="decryptmode">
                            <optgroup label ="Simmetrici">
                                <option value="0">RSA creato da noi</option>
                                <option value="1">RSA librerie</option>
                            </optgroup>

                            <optgroup label ="Asimmetrici">
                                <option value="2">AES</option>
                                <option value="3">Rijndael</option>
                                <option value="4">Twofish</option>
                                <option value="5">Blowfish</option>
                                <option value="6">RS4</option>
                                <option value="7">RS2</option>
                                <option value="8">Triple DES</option>
                                <option value="9">DES</option>
                            </optgroup>
                        </select>
                        <input type="text" name="key" style='width:240px;' id="decryptkey" placeholder="inserire chiave" value="<?php if(isset($_POST['key'])){echo $_POST['key'];}?>"></input><br>

                    </div>

                    <div class="testoDaCifrare">
                        <h1>TESTO DA DECIFRARE</h1>
                        <textarea type="textarea" name="decritta" placeholder="inserire testo da decifrare qui"><?php if(isset($_POST["decritta"])){echo $ciphertext;}else{}?></textarea><br>
                    </div>      

                    <div class="switch">
                        <a href="cifra.php">
                            <script>setTimeout(7000);</script>

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                            </svg>
                        </a>
                    </div>


                    <div class="testoCifrato">
                        <h1>TESTO DECIFRATO</h1>
                        <textarea type="text" name="useless" placeholder="visualizzazione testo decifrato" style="color:white;font-size: 18px;" id="myInput"><?php 
                            if(isset($_POST["decritta"]))
                                {echo $decifrato;}else{} 
                        ?></textarea><br>
                        <button type="button" class="copy-text" onclick="myFunction()">  
                            Copia il Testo
                        </button> 
                    </div>
                </div>
        </div>

                <div class="invia">
                    <input type='submit' value='Decifra'>
                    <p><span id="demo"></span><span id="blink">|</span></p>
                </div>    
            </form>  

        <!-- <div class='spinner-wrapper'>
            <div class="spinner"></div>
        </div>
        
        <div class="main-content"></div>

        <script>
            let spinnerWrapper = document.querySelector('.spinner-wrapper');
        
            window.addEventListener('load', function () {
                spinnerWrapper.parentElement.removeChild(spinnerWrapper); 
            });
        </script>   -->
    </body>
</html>