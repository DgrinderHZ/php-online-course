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
    <h1>TD3 : Les boucles</h1>
    
    <div class="exo-container">
      <h3>Exercice 1:</h3>
      <p>
        <ol>
            <li>Écrivez un script PHP pour afficher les nombres, de 4 à 12 en utilisant une boucle PHP.</li>
            <li>Écrivez un script qui utilise une boucle do-while pour afficher une variable qui augmente de
            2 à chaque itération, jusqu'à ce qu'elle atteigne 10.</li>
            <li>Écrivez un script PHP pour afficher des nombres de 10 à 1 en utilisant une boucle PHP.</li>
            <li>En utilisant la boucle for, afficher la table de multiplication du chiffre 5.</li>
            <li>En utilisant deux boucles for, écrire un script qui produit le résultat ci-dessous.</li>
            <pre>
                1
                22
                333
                4444
                55555
            </pre>
        </ol>
        
        <details>
        <summary>La solution</summary>
        <ol>
            <li>Écrivez un script PHP pour afficher les nombres, de 4 à 12 en utilisant une boucle PHP.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      for ($i=4; $i <= 12; $i++) { 
                        echo "$i , ";
                      }
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                    for ($i=4; $i <= 12; $i++) { 
                      echo "$i , ";
                    }
                  ?>
              </div>
              </p>
            </li>
            <li>Écrivez un script qui utilise une boucle do-while pour afficher une variable qui augmente de
            2 à chaque itération, jusqu'à ce qu'elle atteigne 10.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $i=1;
                      do{ 
                        echo "$i , ";
                        $i += 2;
                      }while($i <= 10);
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $i=1;
                      do{ 
                        echo "$i , ";
                        $i += 2;
                      }while($i <= 10);
                  ?>
              </div>
              </p>
            </li>
            <li>Écrivez un script PHP pour afficher des nombres de 10 à 1 en utilisant une boucle PHP.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      for ($i=10; $i >= 1; $i--) { 
                        echo "$i , ";
                      }
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      for ($i=10; $i >= 1; $i--) { 
                        echo "$i , ";
                      }
                  ?>
              </div>
              </p>
            </li>
            <li>En utilisant la boucle for, afficher la table de multiplication du chiffre 5.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      for ($i=1; $i <= 10; $i++) { 
                        echo "5 x $i = ". 5 * $i . "<br>";
                      }
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      for ($i=1; $i <= 10; $i++) { 
                        echo "5 x $i = ". 5 * $i . "<br>";
                      }
                  ?>
              </div>
              </p>
            </li>
            <li>En utilisant deux boucles for, écrire un script qui produit le résultat ci-dessous.
              <pre>
                1
                22
                333
                4444
                55555
              </pre>
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $n = 5;
                      for ($i=1; $i <= $n; $i++) { 
                        for ($j=1; $j <= $i; $j++) { 
                            echo $i;
                        }
                        echo "<br>";
                      }
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $n = 5;
                      for ($i=1; $i <= $n; $i++) { 
                        for ($j=1; $j <= $i; $j++) { 
                            echo $i;
                        }
                        echo "<br>";
                      }
                  ?>
              </div>
              </p>
            </li>
        </ol>
        
      </details>
        
      </p>
      
    </div>
    <div class="exo-container">
      <h3>Exercice 2:</h3>
      <p>
       Déclarer une variable avec la valeur 0. Tant que cette variable n'atteint pas 20, il faut : <br>
        • L'afficher;<br>
        • Incrémenter sa valeur de 2;<br>
        Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.
      </p>
      <details>
        <summary>La solution</summary>
        <p class="box">
            <pre>
                <code class="language-php line-numbers">
                    &lt;?php
                    $i = 0;
                    while ($i <= 20) {
                        if ($i === 10) {
                          echo "<b> $i </b> , ";
                        } else {
                          echo "$i , ";
                        }
                        $i+=2;
                    }
                    ?&gt;
                </code>
            </pre>
            <div>
              <h4>Le résultats:</h4>
                <?php
                   $i = 0;
                   while ($i <= 20) {
                      if ($i === 10) {
                        echo "<b> $i </b> , ";
                      } else {
                        echo "$i , ";
                      }
                      $i+=2;
                   }
                ?>
            </div>
        </p>
      </details>
      
    </div>
    
<div class="exo-container">   
      <h3>Exercice 3:</h3>
      <p>
        <img src="images/exo3.jpg" alt="image">
        <details>
        <summary>La solution</summary>
        <ol>
            <li>Écrivez un script qui utilise une boucle while pour afficher tous les nombres pairs de 1 à 50.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $i=1;
                      while($i <= 50) { 
                        if ($i % 2 === 0) {
                          echo "$i, ";
                        }
                        $i++;
                      }
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                    $i=1;
                    while($i <= 50) { 
                      if ($i % 2 === 0) {
                        echo "$i, ";
                      }
                      $i++;
                    }
                  ?>
              </div>
              </p>
            </li>
            <li>Écrivez un script qui utilise une boucle do-while pour générer et afficher une suite de 5 nombres aléatoires entre 1 et 100.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $i=1;
                      do{ 
                        $n = rand(1, 100);
                        echo "$n , ";
                        $i++;
                      }while($i <= 5);
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $i=1;
                      do{ 
                        $n = rand(1, 100);
                        echo "$n , ";
                        $i++;
                      }while($i <= 5);
                  ?>
              </div>
              </p>
            </li>
            <li>Écrivez un script qui utilise une boucle for pour calculer et afficher la factorielle d'un nombre donné.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $n = 6;
                      $fact = 1; // Les produits s'initialise toujours par 1 
                      for ($i=1; $i <= $n; $i++) { 
                        $fact = $fact * $i;
                      }
                      echo "La factorielle de $n est $n! = $fact.";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $n = 6;
                      $fact = 1; // Les produits s'initialise toujours par 1 
                      for ($i=1; $i <= $n; $i++) { 
                        $fact = $fact * $i;
                      }
                      echo "La factorielle de $n est $n! = $fact.";
                  ?>
              </div>
              </p>
            </li>
            <li>Écrivez un script qui utilise une boucle while pour trouver et afficher la somme des carrés des nombres de 1 à 10.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $n = 10;
                      $somme = 0; // Les sommes s'initialise toujours par 0 
                      for ($i=1; $i <= $n; $i++) { 
                        $somme = $somme + ($i**2);
                      }
                      echo "La somme des carrés de 1 à $n est 1&lt;sup&gt;2&lt;/sup&gt;+2&lt;sup&gt;2&lt;/sup&gt;+3&lt;sup&gt;2&lt;/sup&gt;+...+10&lt;sup&gt;2&/lt;sup&gt; = $somme.";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $n = 10;
                      $somme = 0; // Les sommes s'initialise toujours par 0 
                      for ($i=1; $i <= $n; $i++) { 
                        $somme = $somme + ($i**2);
                      }
                      echo "La somme des carrés de 1 à $n est 1<sup>2</sup>+2<sup>2</sup>+3<sup>2</sup>+...+10<sup>2</sup> = $somme.";
                  ?>
              </div>
              </p>
            </li>
        </ol>
        
      </details>
        
      </p>
      
</div>
<div class="exo-container">   
      <h3>Exercice 4:</h3>
      <p>
        <img src="images/exo4.jpg" alt="image">
        <details>
        <summary>La solution</summary>
        <ol>
            <li>Écrivez un script qui utilise une boucle for pour générer la suite de Fibonacci jusqu'à un
certain nombre donné.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $n = 10;
                      $fn1 = 0; // f0
                      $fn2 = 1; // f1
                      echo "$fn1, $fn2, ";
                      for ($i=0; $i < $n; $i++) { 
                        // calculer le suivant
                        $fn = $fn1 + $fn2;
                        echo "$fn, ";
                        // mets à jours les deux valeurs precidentes
                        $fn1 = $fn2;
                        $fn2 = $fn;
                      }
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $n = 10;
                      $fn1 = 0; // f0
                      $fn2 = 1; // f1
                      echo "$fn1, $fn2, ";
                      for ($i=0; $i < $n; $i++) { 
                        // calculer le suivant
                        $fn = $fn1 + $fn2;
                        echo "$fn, ";
                        // mets à jours les deux valeurs precidentes
                        $fn1 = $fn2;
                        $fn2 = $fn;
                      }
                  ?>
              </div>
              </p>
            </li>
            <li>Écrivez un script qui utilise une boucle while pour rechercher et afficher tous les nombres
premiers inférieurs à 100.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $n = 1;
                      while($n <= 100){ 
                        // calculer le nombre des diviseurs
                        $nbrDiv = 0; // c'est un somme
                        for ($i=1; $i <= $n; $i++) { 
                            if ($n % $i === 0) { // teste de divisibilité
                              $nbrDiv++;
                            }
                        }

                        // si nbrDiv == 2 alors n est premier
                        if($nbrDiv === 2){
                          echo "$n, ";
                        }

                        $n++;
                      }
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $n = 1;
                      while($n <= 100){ 
                        // calculer le nombre des diviseurs
                        $nbrDiv = 0; // c'est un somme
                        for ($i=1; $i <= $n; $i++) { 
                            if ($n % $i === 0) { // teste de divisibilité
                              $nbrDiv++;
                            }
                        }

                        // si nbrDiv == 2 alors n est premier
                        if($nbrDiv === 2){
                          echo "$n, ";
                        }

                        $n++;
                      }
                  ?>
              </div>
              </p>
            </li>
        </ol>
        
      </details>
        
      </p>
      
</div>
      <div class="exo-container">
      <h3>Exercice 5:</h3>
      <p>
       Écrivez un script qui utilise une boucle for pour afficher un motif pyramidal de caractères, par exemple :
		<pre>
			   *
			  ***
			 *****
			*******
   </pre>
      </p>
      <details>
        <summary>La solution</summary>
        <p class="box">
            <pre>
                <code class="language-php line-numbers">
                    &lt;?php
                     $n= 5;
                   for ($i=1; $i <= $n; $i++) { 
                    for ($j=1; $j <= $n-$i; $j++) { // nbr espace = n-i
                      echo "_"; // espace pour l'affichage sur console
                    }
                    for ($j=1; $j <= ($i-1)*2+1; $j++) { // nbr etoile = (i-1)*2+1
                      echo "*";
                    }
                    echo "<br>";
                   }
                    ?&gt;
                </code>
            </pre>
            <div>
              <h4>Le résultats:</h4>
                <?php
                   $n= 5;
                   for ($i=1; $i <= $n; $i++) { 
                    for ($j=1; $j <= $n-$i; $j++) { // nbr espace = n-i
                      echo "_"; // espace pour l'affichage sur console
                    }
                    for ($j=1; $j <= ($i-1)*2+1; $j++) { // nbr etoile = (i-1)*2+1
                      echo "*";
                    }
                    echo "<br>";
                   }
                ?>
            </div>
        </p>
      </details>
      
    </div>
    
    <script src="prism.js"></script>
  </body>
</html>
