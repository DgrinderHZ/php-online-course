<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TD</title>
    <link rel="stylesheet" href="prism.css" />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>

    <div class="exo-container">
      <h3>Exercice 1:</h3>
      <p>
        Déclarer une variable $genre qui contient une chaîne de caractères.
        Créer une condition qui affiche un message différent en fonction de la valeur de la variable.
      </p>
      <details>
        <summary>La solution</summary>
        <p class="box">
            <pre>
                <code class="language-php line-numbers">
                    &lt;?php
                    $genre = 'H';
                    if($genre == 'H'){
                        echo "Vous êtes un homme";
                    }else{
                        echo "Vous êtes une femme";
                    }
                    ?&gt;
                </code>
            </pre>
            <div>
              <h4>Le résultats:</h4>
                <?php
                  $genre = 'H';
                    if($genre == 'H'){
                        echo "Vous êtes un homme";
                    }else{
                        echo "Vous êtes une femme";
                    }
                ?>
            </div>
        </p>
      </details>
      
    </div>
    <div class="exo-container">
      <h3>Exercice 2:</h3>
      <p>
        <ol>
            <li>Déclarer une variable $budget qui contient la somme de 1000 DH.</li>
            <li>Déclarer une variable $achats qui contient la somme de 1050 DH.</li>
        </ol>
        
        Afficher si le budget permet de payer les achats.
        <pre>
            <code class="language-php line-numbers">
                &lt;?php
                    $budget = 1000;
                    $achats = 1050;
                    if($achats <= $budget){
                        echo "Félicitations! votre budget est suffisante!";
                    }else{
                        echo "Ooooops! votre budget n'est pas suffisante!";
                    }
                ?&gt;
            </code>
            <details>
              <summary>La solution</summary>
              <p class="box">
                  <?php
                    $budget = 1000;
                    $achats = 1050;
                    if($achats <= $budget){
                        echo "Félicitations! votre budget est suffisante!";
                    }else{
                        echo "Ooooops! votre budget n'est pas suffisante!";
                    }
                  ?>
              </p>
            </details>
        </pre>
      </p>
      
    </div>
    <div class="exo-container">
      <h3>Exercice 3:</h3>
      <p>
        Déclarer une variable $age qui contient la valeur de type entier de votre choix. Réaliser une
condition pour afficher si la personne est mineure ou majeure 
      </p>
      <pre>
            <code class="language-php line-numbers">
                &lt;?php
                    $age = 25;
                    if($age <= 17){
                        echo "Vous êtes un mineur!";
                    }else{
                        echo "Vous êtes un majeur!";
                    }
                ?&gt;
            </code>
            <details>
              <summary>La solution</summary>
              <p class="box">
                  <?php
                    $age = 25;
                    if($age <= 17){
                        echo "Vous êtes un mineur!";
                    }else{
                        echo "Vous êtes un majeur!";
                    }
                  ?>
              </p>
            </details>
        </pre>
    </div>
    <div class="exo-container">
      <h3>Exercice 4:</h3>
      <p>
        Déclarer une variable $heure qui contient la valeur de type entier de votre choix comprise entre
0 et 24.
Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.
        <pre>
            <code class="language-php line-numbers">
                &lt;?php
                    $heure = 12;
                    if($heure < 0){
                        echo "Heure Invalide!";
                    }elseif($heure < 12){
                        echo "C'est le matin!";
                    }
                    elseif($heure < 18){
                        echo "C'est l'après-midi!";
                    }
                    elseif($heure <= 23 or $heure == 0){
                        echo "C'est la nuit!";
                    }else{
                        echo "Heure Invalide!";
                    }
                ?&gt;
            </code>
        </pre>
      </p>
      <details>
        <summary>La solution</summary>
        <p class="box">
             <?php
            	$heure = 12;
                if($heure < 0){
                    echo "Heure Invalide!";
                }elseif($heure < 12){
                    echo "C'est le matin!";
                }
                elseif($heure < 18){
                    echo "C'est l'après-midi!";
                }
                elseif($heure <= 23 or $heure == 0){
                    echo "C'est la nuit!";
                }else{
                    echo "Heure Invalide!";
                }
            ?> 
        </p>
      </details>
    </div>

    <div class="exo-container">
      <h3>Exercice 5:</h3>
      <p> 
        <ol>
          <li>Écrivez une expression conditionnelle utilisant une variable $note et affiche un grade à un
            intervalle de note : grade A pour une note entre [18-20], B [14-18[, C [10-14[, et D [0-0[.</li>
        </ol>
      </p>
      <details>
        <summary>La solution</summary>
        <ul>
            <li>1. Écrire un script PHP permettant de calculer le périmètre d'un cercle.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $rayon = 5;
                      $perimetre = 2 * pi() * $rayon;
                      echo "Le perimetre d'un cercle de rayon $rayon est $perimetre.";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                    $rayon = 5;
                    $perimetre = 2 * pi() * $rayon;
                    echo "Le perimetre d'un cercle de rayon $rayon est $perimetre.";
                  ?>
              </div>
              </p>
            </li>
            <li>2. Écrire un script PHP qui calcule et affiche le carré de ce nombre.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $number = 7;
                      $carre = $number * $number;
                      echo "Le carré de $number est $carre.";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $number = 7;
                      $carre = $number * $number;
                      echo "Le carré de $number est $carre.";
                  ?>
              </div>
              </p>
            </li>
            <li>3. Écrire un script PHP qui calcule l'image d'un nombre x par une fonction du type f(x) =
          ax2 + bx + c (a, b et c des variables à donner)
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $a = 5;
                      $b = 1;
                      $c = 3;
                      $x = 1;
                      $fx = $a*$x*$x + $b*$x + $c;
                      echo "l'image f($x) par la fonction f($x) = {$a}x^2 + {$b}x{$x} + $c est : $fx";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $a = 5;
                      $b = 1;
                      $c = 3;
                      $x = 1;
                      $fx = $a*$x*$x + $b*$x + $c;
                      echo "l'image f($x) par la fonction f(x) = {$a}x^2 + {$b}x + $c est : $fx";
                  ?>
              </div>
              </p>
            </li>
        </ul>
        
      </details>
    </div>
    <div class="exo-container">
      <h3>Exercice 5:</h3>
      <p> 
        <ul>
          <li>2. Rédigez une expression conditionnelle qui teste si un nombre est à la fois multiple de 3 et de
            7.</li>
        </ul>
      </p>
      <details>
        <summary>La solution</summary>
        <ul>
            <li>1. Écrire un script PHP permettant de calculer le périmètre d'un cercle.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $rayon = 5;
                      $perimetre = 2 * pi() * $rayon;
                      echo "Le perimetre d'un cercle de rayon $rayon est $perimetre.";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                    $rayon = 5;
                    $perimetre = 2 * pi() * $rayon;
                    echo "Le perimetre d'un cercle de rayon $rayon est $perimetre.";
                  ?>
              </div>
              </p>
            </li>
        </ul>
        
      </details>
    </div>
    <div class="exo-container">
      <h3>Exercice 5:</h3>
      <p> 
        <ol>
          <li>Écrivez une expression conditionnelle utilisant une variable $note et affiche un grade à un
            intervalle de note : grade A pour une note entre [18-20], B [14-18[, C [10-14[, et D [0-0[.</li>
          <li>Rédigez une expression conditionnelle qui teste si un nombre est à la fois multiple de 3 et de
            7.</li>
          <li>Utilisez les variables $nombre1 $nombre2 et $operation pour réaliser un script effectuant
                une opération parmi les quatre opérations arithmétiques élémentaires suivant la valeur de la
                variable $operation (utiliser l'instruction switch).</li>
          <li>Refaire la question 3 avec l'instruction match.</li>
        </ol>
      </p>
      <details>
        <summary>La solution</summary>
        <ul>
            <li>1. Écrire un script PHP permettant de calculer le périmètre d'un cercle.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $rayon = 5;
                      $perimetre = 2 * pi() * $rayon;
                      echo "Le perimetre d'un cercle de rayon $rayon est $perimetre.";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                    $rayon = 5;
                    $perimetre = 2 * pi() * $rayon;
                    echo "Le perimetre d'un cercle de rayon $rayon est $perimetre.";
                  ?>
              </div>
              </p>
            </li>
            <li>2. Écrire un script PHP qui calcule et affiche le carré de ce nombre.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $number = 7;
                      $carre = $number * $number;
                      echo "Le carré de $number est $carre.";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $number = 7;
                      $carre = $number * $number;
                      echo "Le carré de $number est $carre.";
                  ?>
              </div>
              </p>
            </li>
            <li>3. Écrire un script PHP qui calcule l'image d'un nombre x par une fonction du type f(x) =
          ax2 + bx + c (a, b et c des variables à donner)
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $a = 5;
                      $b = 1;
                      $c = 3;
                      $x = 1;
                      $fx = $a*$x*$x + $b*$x + $c;
                      echo "l'image f($x) par la fonction f($x) = {$a}x^2 + {$b}x{$x} + $c est : $fx";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $a = 5;
                      $b = 1;
                      $c = 3;
                      $x = 1;
                      $fx = $a*$x*$x + $b*$x + $c;
                      echo "l'image f($x) par la fonction f(x) = {$a}x^2 + {$b}x + $c est : $fx";
                  ?>
              </div>
              </p>
            </li>
        </ul>
        
      </details>
    </div>
    <div class="exo-container">
      <h3>Exercice 5:</h3>
      <p> 
        <ol>
          <li>Écrivez une expression conditionnelle utilisant une variable $note et affiche un grade à un
            intervalle de note : grade A pour une note entre [18-20], B [14-18[, C [10-14[, et D [0-0[.</li>
          <li>Rédigez une expression conditionnelle qui teste si un nombre est à la fois multiple de 3 et de
            7.</li>
          <li>Utilisez les variables $nombre1 $nombre2 et $operation pour réaliser un script effectuant
                une opération parmi les quatre opérations arithmétiques élémentaires suivant la valeur de la
                variable $operation (utiliser l'instruction switch).</li>
          <li>Refaire la question 3 avec l'instruction match.</li>
        </ol>
      </p>
      <details>
        <summary>La solution</summary>
        <ul>
            <li>1. Écrire un script PHP permettant de calculer le périmètre d'un cercle.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $rayon = 5;
                      $perimetre = 2 * pi() * $rayon;
                      echo "Le perimetre d'un cercle de rayon $rayon est $perimetre.";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                    $rayon = 5;
                    $perimetre = 2 * pi() * $rayon;
                    echo "Le perimetre d'un cercle de rayon $rayon est $perimetre.";
                  ?>
              </div>
              </p>
            </li>
            <li>2. Écrire un script PHP qui calcule et affiche le carré de ce nombre.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $number = 7;
                      $carre = $number * $number;
                      echo "Le carré de $number est $carre.";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $number = 7;
                      $carre = $number * $number;
                      echo "Le carré de $number est $carre.";
                  ?>
              </div>
              </p>
            </li>
            <li>3. Écrire un script PHP qui calcule l'image d'un nombre x par une fonction du type f(x) =
          ax2 + bx + c (a, b et c des variables à donner)
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $a = 5;
                      $b = 1;
                      $c = 3;
                      $x = 1;
                      $fx = $a*$x*$x + $b*$x + $c;
                      echo "l'image f($x) par la fonction f($x) = {$a}x^2 + {$b}x{$x} + $c est : $fx";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $a = 5;
                      $b = 1;
                      $c = 3;
                      $x = 1;
                      $fx = $a*$x*$x + $b*$x + $c;
                      echo "l'image f($x) par la fonction f(x) = {$a}x^2 + {$b}x + $c est : $fx";
                  ?>
              </div>
              </p>
            </li>
        </ul>
        
      </details>
    </div>
    <div class="exo-container">
      <h3>Exercice 6:</h3>
      <p>
        <ul>
          <li>1. Écrire un script PHP avec 4 variables entières qui calcule et affiche leur moyenne et leur
          somme.</li>
          <li>2. Écrire un script PHP avec 5 entiers et qui affiche leur somme et leur moyenne. Le programme
          ne devra utiliser que 2 variables.</li>
          <li>3. Écrire un script PHP permettant de calculer la moyenne d'un élève sur 5 matières.</li>
        </ul>
      </p>
      <details>
        <summary>La solution</summary>
        <ul>
            <li>1. Écrire un script PHP avec 4 variables entières qui calcule et affiche leur moyenne et leur
          somme.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $a = 5;
                      $b = 1;
                      $c = 3;
                      $d = 1;
                      $somme = $a + $b + $c + $d;
                      $moyenne = $somme / 4;
                      echo "La somme est $somme <br> La moyenne est $moyenne.";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $a = 5;
                      $b = 1;
                      $c = 3;
                      $d = 1;
                      $somme = $a + $b + $c + $d;
                      $moyenne = $somme / 4;
                      echo "La somme est $somme <br> La moyenne est $moyenne.";
                  ?>
              </div>
              </p>
            </li>
            <li>2. Écrire un script PHP avec 5 entiers et qui affiche leur somme et leur moyenne. Le programme
          ne devra utiliser que 2 variables.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                        $somme = 0;
                        $a = 5;
                        $somme += $a;
                        $a = 3;
                        $somme += $a;
                        $a = 1;
                        $somme += $a;
                        $a = 5;
                        $somme += $a;
                        echo "La somme est $somme <br> La moyenne est ". $somme / 4;
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $somme = 0;
                      $a = 5;
                      $somme += $a;
                      $a = 3;
                      $somme += $a;
                      $a = 1;
                      $somme += $a;
                      $a = 5;
                      $somme += $a;
                      echo "La somme est $somme <br> La moyenne est ". $somme / 4;
                  ?>
              </div>
              </p>
            </li>
            <li>3. Écrire un script PHP permettant de calculer la moyenne d'un élève sur 5 matières.
              (Même que la question précidente)
            </li>
        </ul>
        
      </details>
    </div>
    <div class="exo-container">
      <h3>Exercice 7:</h3>
      <p>
        <ul>
          <li>1. Écrire un programme permettant d'échanger les valeurs de deux variables A et B, et ce quel
          que soit leur contenu préalable.</li>
          <li>2. Même question avec le programme ne devra utiliser que 2 variables.</li>
        </ul>
      </p>
      <details>
        <summary>La solution</summary>
        <ul>
            <li>1. Écrire un programme permettant d'échanger les valeurs de deux variables A et B, et ce quel
          que soit leur contenu préalable.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $A = 5;
                      $B = 1;
                      echo "Avant échange A= $A, B= $B</br>";
                      $temp = $A;
                      $A = $B;
                      $B = $temp;
                      echo "Après échange A= $A, B= $B";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $A = 5;
                      $B = 1;
                      echo "Avant échange A= $A, B= $B</br>";
                      $temp = $A;
                      $A = $B;
                      $B = $temp;
                      echo "Après échange A= $A, B= $B";
                  ?>
              </div>
              </p>
            </li>
            <li>2. Même question avec le programme ne devra utiliser que 2 variables.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                        $A = 5;
                        $B = 1;
                        echo "Avant échange A= $A, B= $B</br>";
                        $A = $A + $B;
                        $B = $A - $B;
                        $A = $A - $B;
                        echo "Après échange A= $A, B= $B";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                        $A = 5;
                        $B = 1;
                        echo "Avant échange A= $A, B= $B</br>";
                        $A = $A + $B;
                        $B = $A - $B;
                        $A = $A - $B;
                        echo "Après échange A= $A, B= $B";
                  ?>
              </div>
              </p>
            </li>
        </ul>
        
      </details>
    </div>
    
    <script src="prism.js"></script>
  </body>
</html>
