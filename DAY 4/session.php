<html>
    <body>
        <?php
          //Sessions

          session_start();
          $_SESSION["username"] = "John";
          $_SESSION["role"] = "hacker";
           echo "Session has been created ! <br>";

           //Accessing Session Variable
           if(isset($_SESSION["username"])){
            echo "WELCOME ".$_SESSION["username"];
           }
           else{
            echo "<br> No active Session found ! ";
        
           }
         //Destroying/Killing/Terminating the Session
         session_unset();
         session_destroy();
         echo "<br> Session has been terminated ! <br> ";
         if(isset($_SESSION["username"])){
            echo "WELCOME ".$_SESSION["username"];
           }
           else{
            echo "<br> No active Session found ! ";
        
           }


          ?>
         </body>
         </html>
