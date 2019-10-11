<?php require 'header.inc.php'; ?>

<link rel="stylesheet" href="css/style.css" />


    <section class="log">
    <form action="verification_log.php" method="POST">
                <h1 class="log_h1">Connexion</h1>
                
                <label><b>Username</b></label>
                <input type="text" placeholder="Please enter your username" name="username" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Please enter your password" name="password" required>

                <div class="log_send">
                <input type="submit" id='submit' value='LOGIN' >
                <label for="modallog" style="position: relative;cursor: pointer;left: 10%;" class="log_newh">NEW HERE ?</label>
                
                </div>
            </form>
    </section>

<input type="checkbox" id="modallog" />

<div id="overlaylog">

    <div class="popup_block"> 

      <section class="log">
    <label for="modallog" style="position: absolute;right: 0;left:auto;" class="headerr_ex"><img alt="Fermer" title="Fermer la fenêtre" class="my_btn_close" src="./img/close.png">

          
    </label><form action="verification_log.php" method="POST">
                <h1 class="log_h1">Inscription</h1>
                
                <label><b>Username</b></label>
                <input type="text" placeholder="Please enter your username" name="username" required="">

                <label><b>Password</b></label>
                <input type="password" placeholder="Please enter your password" name="password" required="">
                <label><b>Password</b></label>
                <input type="password" placeholder="Please enter again your password" name="password2" required="">

                <div class="log_send">
                <input type="submit" id="submit" value="SIGN IN">
                
                </div>
            </form>
    </section></div>
  </div>
</label> 

<?php require 'footer.inc.php'; ?>
