<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tidus Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="chienstyle.css" />
    <script src="anim.js"></script>
  </head>
  <body>
    <header>
      <!-- BARRE DE NAV -->
      <nav>
        <a href="index.html">
          <img src="Images/logonav.png" alt="Logo" id="logo" />
        </a>

        <ul>
          <li id="home">
            <a href="index.html">Accueil</a></li>

          <li><a href="chien.html">
            <span>Nos supers chiens</span><img src="/Images/chiennav.png" alt="Labrador" width="25px" height="25px">
            </a></li> 

          <li id="chat"> <a href="chat.html">
           <span>Nos supers chats</span><img src="./Images/chatnav.png" alt="Labrador" width="25px" height="25px"></a></li>
          
           <li id="contact"><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <!-- TETE DE PAGE -->

        <section class="entete">
          <div class="background">
            <div class="titre">
              <h1 >VEUILLEZ RESPECTER LES CONSIGNES </h1>
            </div>
        </div>        
    </section>

       <div class="entetchien">
           <p>
        <?php foreach ($errors as $error) : ?>
            <li><?= "merci de faire attention. " . $error ?></li>
        <?php endforeach; ?>
           <br>
           <p class="p">Les animaux abandonnés n'ont pas de temps à perdre oh ! </p>
       </div>
</main>
       
       <!-- FOOTER -->
       <section class="partie4">
    <footer>
      <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
      <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Home</a></li>
          <li class="list-inline-item"><a href="#">Services</a></li>
          <li class="list-inline-item"><a href="#">About</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
      </ul>
      <p class="copyright">Tidus Home © 2023</p>
        </footer>
  </section>

<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

 </body>
</html>

