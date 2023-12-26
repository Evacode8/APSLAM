
<?php
require_once("yaml/yaml.php");
$data =yaml_parse_file('../yaml/données.yaml');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../assets/css/portfolio.css">
  <!-- <font-family> -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <!-- boxicons  -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- animate.style  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- bootstrap -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <!-- tailwindcss -->
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Portfolio HTML</title>
</head>




<header>
  <nav class="menu--left" role="navigation">
    <div class="menuToggle">
      <input type="checkbox"/>
      <span></span>
      <span></span>
      <span></span>
      <ul class="menuItem">
		<?php


		foreach($data['menu'] as $lien){
    		echo '<li><a href="#'.$lien['id'].'">'.$lien['label'].'</a></li>';
		}
		?>
      </ul>
    </div>
  </nav>
</header>


<section id="Accueil">
  <iframe src='https://my.spline.design/macbookprocopy-3c1433f7990ef1135dba000f83ec51d0/' frameborder='0' width='100%' height='100%'></iframe>
</section> 



  
  <!-- <h1>A propos</h1> -->
  <section id="Apropos">
    <section>
      <div class="max-w-screen-2xl px-2 py-16 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
          <div class="relative z-0 lg:py-16">
            <div class="relative h-64 ">
              <img
                alt="photo"
                src="../assets/images/pp.jpg"
                class="absolute inset-0 h-full w-full object-cover"
              />
            </div>
          </div>
    
          <div class="relative mt-4">
            <div class="p-4 sm:py-3 lg:p-10">
              <h2 class="text-2xl font-bold sm:text-3xl text-gray-200">
                <?php
                echo $data['apropos']['titre'];
                echo '<p class="mt-4 text-gray-200">';
                foreach ( $data['apropos']['liens'] as $lien){
                  echo '<i class="'.$lien['logo'].'"></i>';
                        echo '<a href="'.$lien['url'].'">'.$lien['texte'].'</a>';
                }
                echo '</p>';
				      ?>
              </h2>
              <a
                href="#Competences"
                class="mt-8 inline-block rounded border border-blue-100 bg-slate-100 px-12 py-3 text-sm font-medium text-slate-800 hover:bg-cyan-400 hover:text-stone-700 focus:outline-none focus:ring"
              >
               Voir les compétences:
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>


  <!-- <h1> Mes compétences en dev</h1> -->
  <section id="Competences">
    <div class="cards">
      <h1> Langages de programmation</h1>
		<?php

      if (isset($data['competences'])) {
        $competences = $data['competences'];

        // Générer le code HTML pour les compétences
        foreach ($competences as $competence) {
            echo '<i class="bx ' . $competence['icone'] . '"></i>';
            echo '<p>' . $competence['label'] . '</p>';
            echo '<div class="container">';
            echo '<div class="skills" style="width:'.$competence['niveau'].'">' . $competence['niveau'] . '</div>';
            echo '</div><br>';
        }
      }
    ?> 
    </div>
    <br>
  </section>

  <section id="Competences">
    <div class="cards">
      <h1> Langues</h1>
		<?php

      if (isset($data['langues'])) {
        $langues = $data['langues'];

        // Générer le code HTML pour les compétences
        foreach ($langues as $competence) {
            echo '<i class="bx ' . $competence['icone'] . '"></i>';
            echo '<p>' . $competence['label'] . '</p>';
            echo '<div class="container">';
            echo '<div class="skills" style="width:'.$competence['niveau'].'">' . $competence['niveau'] . '</div>';
            echo '</div><br>';
        }
      }
    ?> 
    </div>
    
    <a
          href="#Experiences"
          class="mt-8 inline-block rounded border border-blue-100 bg-slate-100 px-12 py-3 text-sm font-medium text-slate-800 hover:bg-cyan-300 hover:text-stone-700 focus:outline-none focus:ring"
        >
          Mes expériences:
        </a>
    <br>
  </section>


   <br>

  <section id="Experiences">
    <!-- <section class="text-white"> -->
      <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
        <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
  <?php

    if (isset($data['experiences'])) {
      foreach ($data['experiences'] as $experience) { 
          if (isset($experience['lien']))
          {
            echo '<a class="block rounded-xl p-8" href="' . $experience['lien'] . '">';
          }
          echo '<h2 class="mt-4 text-xl font-bold text-white">' . $experience['titre'] . '</h2>';
          echo '<p class="mt-6 font-bold leading-5 text-gray-200">' . $experience['date'] . ' - ' . $experience['lieu'] . '</p>';
          echo '<p class="mt-10 text-sm leading-5 text-gray-200">' . $experience['description'] . '</p>';
          echo '</a>';
      }
  }
?>
          <a
          href="#Formation"
          class="mt-8 inline-block rounded border border-blue-100 bg-slate-100 px-12 py-3 text-sm font-medium text-slate-800 hover:bg-cyan-300 hover:text-stone-700 focus:outline-none focus:ring"
        >
          Ma formation:
        </a>
        </div>
   
      </div>
    </section>
    
    <br>
    <br>
    <br>
    
    
    <section id="Formation">
      <section class=" text-white">
        <div class="mx-auto max-w-2xl sm:text-center  max-w-screen-xl   sm:py-12 lg:px-8 lg:py-16 text-center">
        <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
          
        
          <?php

          // Vérification des données avant de les utiliser
          if ($data && isset($data['Formation'])) {
          foreach ($data['Formation'] as $formation) {
          // Affichage des informations de chaque formation
          echo '<a class="block rounded-xl p-8" href="' . $formation['lien'] . '">';
          echo '<h2 class="mt-4 text-xl font-bold text-white">' . $formation['titre'] . '</h2>';
          if (isset($formation['sous_titre'])) {
              echo '<h2 class="mt-4 text-xl font-bold text-white">' . $formation['sous_titre'] . '</h2>';
          }
          echo '<p class="mt-1 text-sm text-gray-300">' . $formation['date'] . '</p>';
          echo '<br>';
          echo '<p class="mt-1 text-base text-gray-300">' . $formation['description'] . '</p>';
          echo '</a>';
          }
        }
      ?>
     
            <a
            href="../assets/images/CV.pdf"
            class="mt-8 inline-block rounded border border-blue-100 bg-slate-100 px-12 py-3 text-sm font-medium text-slate-800 hover:bg-cyan-300 hover:text-stone-700 focus:outline-none focus:ring"
          >
           Mon CV
          </a>
          
          <a
          href="#projet"
          class="mt-8 inline-block rounded border border-blue-100 bg-slate-100 px-12 py-3 text-sm font-medium text-slate-800 hover:bg-cyan-300 hover:text-stone-700 focus:outline-none focus:ring"
        >
         Mes projets
        </a>
          </a>
        </div>
     
    </section>


  
  </section>
  <br>
  <br>

  <section id="projet">
    <i class='bx bxs-mouse-alt'> Clic & turn me</i>
    <br>
    <p>BlueFoxSounds, site de réservation de cours de guitare. Création d'une base de donnée, d'un table MySql. 
    </p>
    <iframe src='https://my.spline.design/untitled-ff1024c69933e5a3039b4b1da333bd46/' frameborder='0' width='100%' height='100%'></iframe>
    <br>
    <a
            href="https://evacode8.github.io/pages/Accueil.html"
            class="mt-8 inline-block rounded border border-blue-100 bg-slate-100 px-12 py-3 text-sm font-medium text-slate-800 hover:bg-cyan-300 hover:text-stone-700 focus:outline-none focus:ring"
          >
           Voir le site
          </a>
  </section>

<br>
<br>
  <section id="Contact">

    <section class="">
      <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
          <div class="lg:col-span-2 lg:py-12">
            <div class="mt-8">
              <a href="" class="text-2xl font-bold text-blue-200"> Formulaire de Contact</a>
            </div>
          </div>

          <div class="rounded-lg p-8 shadow-lg lg:col-span-3 lg:p-12">
            <form action="contact.php" class="space-y-4" method="post">
              <div>
                <label class="sr-only" for="name">Name</label>
                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Name" type="text" id="name" name="name" required/>
              </div>

              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                  <label class="sr-only" for="email">Email</label>
                  <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Email address" type="email" name="email"
                    id="email" required />
                </div>

                <div>
                  <label class="sr-only" for="phone">Phone</label>
                  <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Phone Number" type="tel"
                    id="phone" name="phone" required />
                </div>
              </div>
              <label class="sr-only" for="message">Objet du message</label>

              <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Objet du message" rows="1"
                id="message" name="subject"></textarea>
 

              <label class="sr-only" for="message">Message</label>

              <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder=" Votre Message" rows="8"
                id="message" name="message"></textarea>
          </div>

          <div class="mt-4">
            <button type="submit"
              class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto">
              Envoyer
            </button>
          </div>

          <a class="text-gray-200 text-center" href="#" id="openModal">Politique de Confidentialité</a>

          <div id="myModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <!-- Votre contenu de la politique de confidentialité ici -->
              <p>Nous accordons une grande importance à la protection de votre vie privée. Conformément aux dispositions du RGPD, nous tenons à souligner que les données que vous fournissez via ce formulaire ne seront pas conservées sur nos serveurs après leur traitement.
                Nous nous engageons à utiliser les informations que vous partagez uniquement dans le but spécifique pour lequel ce formulaire est destiné. Une fois que vos données auront été traitées et que leur utilité initiale aura pris fin, elles seront effacées de nos systèmes.
                En choisissant de soumettre ce formulaire, vous consentez à ce que vos données soient utilisées dans le cadre précis de votre demande. Vous pouvez à tout moment exercer vos droits relatifs à la protection des données en nous contactant à l'adresse suivante : eva@graboczwebfolio.com</p>
            </div>
          </div>
          </form>
          <script>
            // Action lorsque l'utilisateur clique sur le lien pour ouvrir la fenêtre modale
            document.getElementById('openModal').addEventListener('click', function(event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien
            document.getElementById('myModal').style.display = 'block';
            });
            document.getElementById('openModal').addEventListener('click', function() {
              document.getElementById('myModal').style.display = 'block';
            });
            // Action lorsque l'utilisateur clique sur la croix pour fermer la fenêtre modale
            document.getElementsByClassName('close')[0].addEventListener('click', function() {
              document.getElementById('myModal').style.display = 'none';
            });

            // Fermer la fenêtre modale lorsqu'on clique en dehors de la fenêtre
            window.addEventListener('click', function(event) {
              if (event.target == document.getElementById('myModal')) {
                document.getElementById('myModal').style.display = 'none';
              }
            });
          </script>
        </div>
      </div>
      </div>
    </section>
  </section>

</body>


</html>