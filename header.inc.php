

<header>

			<div id="headerr">
				
				<div>
					<a id="top" class="headerr_home_bouton" ><img src="img/aa.png" class="headerr_home"></a>
				</div>
				
				<div><a href="index.php?page=main" class="headerr_choice" style="text-decoration: none;"> HOME </a></div>

				<div class="headerr_choice">

   					<label for="modalCheck6" style="cursor: pointer;">SEARCH</label><input type="checkbox" id="modalCheck6" />

    					<div id="overlay6">

        					<div class="popup_block"> 

            					<label for="modalCheck6" class="headerr_ex"><img alt="Fermer" title="Fermer la fenêtre" class="my_btn_close" src="./img/close.png" /></label> 

            					<form action = "index.php?page=search" method="get">
  									<div>
    									<input type="search" id="maRecherche" name="q" placeholder="Search on the website…" class="headerr_search">
    									<input class="headerr_bouton" type="submit">
  									</div>
								</form>
        					</div>
    					</div>
				</div>
				

				<div id="headerr_choice_2">

				<div class="headerr_choice">
				<?php if(isset($user)){ ?>
					<a href="index.php?page=logout" class="headerr_choice" style="text-decoration: none;"> SIGN OUT </a>
				<?php }else{ ?>
					<a href="index.php?page=login" class="headerr_choice" style="text-decoration: none;"> LOG IN </a>
				<?php } ?>
				</div>
				<div><a href="index.php?page=panier" class="headerr_choice" style="text-decoration: none;"> MY CART</a></div>

				</div>

			</div>

		</header>

</head>

