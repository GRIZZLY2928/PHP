<html>
    <body>
        <?php
          //Cookies

          //set a Cookies
          $cookieName = 'langPrefernce';
          $cookieValue = 'French';
          $cookieExpire = time() + (180);

          setcookie($cookieName, $cookieValue, $cookieExpire,"/");

          echo "Cookiee has been sent !";

          //Accessing the cookie
          if(isset($_COOKIE[$cookieName])){
            echo "<br> Your language preference is : ".$_COOKIE[$cookieName];
          }
          else{
            echo " <br> Cookie is not set !";
          }

          //Deleting cookie or block the cookie
          setcookie($cookieName, $cookieValue, time()- (30) ,"/");
          echo "<br> Cookie has been deleted ! "; 
        ?>
        </body>
    </html>
