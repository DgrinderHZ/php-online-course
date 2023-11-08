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
        1. Parmi les variables suivantes, lesquelles ont un nom valide : $a, $_a, $a_a, $AAA, $a!, $1a et
        $a1 ?
      </p>
      <details>
        <summary>La solution</summary>
        <p>
          <ul>
            <li>Si la variable "ne contient pas des symboles autre que _" et "ne commence pas par un chiffre" alors c'est valide : $a, $_a, $a_a, $AAA et $a1</li>
            <li>Sinon c'est invalide: $a! et $1a</li>
          </ul>
        </p>
      </details>
      <p>
        2. Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(),
        faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42
      </p>
      <details>
        <summary>La solution</summary>
        <p class="box">
            <pre>
                <code class="language-php line-numbers">
                    &lt;?php
                    $test = '42';
                    var_dump($test);
                    ?&gt;
                </code>
            </pre>
            <div>
              <h4>Le résultats:</h4>
                <?php
                  $test = '42';
                  var_dump($test);
                ?>
            </div>
        </p>
      </details>
    </div>
    <div class="exo-container">
      <h3>Exercice 2:</h3>
      <p>
        Donner les valeurs des variables $a, $b, $c, $d à la fin des scripts suivants:
        <pre>
            <code class="language-php line-numbers">
                &lt;?php
                $a = "Les ";
                $b = "7 merveilles du monde"
                $c = $a . $b;
                $d = $b + 13;
                $b = $c;
                echo "a= ", $a, "b= ", $b, "c= ", $c, "d= ", $d;
                ?&gt;
            </code>
            <details>
              <summary>La solution</summary>
              <p class="box">
                  <?php
                    $a = "Les ";
                    $b = "7 merveilles du monde";
                    $c = $a . $b;
                    $d = $b + 13;
                    $b = $c;
                      echo "a= ", $a, "b= ", $b, "c= ", $c, "d= ", $d;
                  ?>
              </p>
            </details>
            <hr>
            <code class="language-php line-numbers">
                &lt;?php
                $a = "Les ";
                $b = "7 merveilles du monde"
                $c = $a . $b;
                $d = $b + 13;
                $b = $c;
                echo "a= ", $a, "b= ", $b, "c= ", $c, "d= ", $d;
                ?&gt;
            </code>
            <details>
              <summary>La solution</summary>
              <p class="box">
                  <?php
                    $a = "Les ";
                    $b = "7 merveilles du monde";
                    $c = $a . $b;
                    $d = $b + 13;
                    $b = $c;
                      echo "a= ", $a, "b= ", $b, "c= ", $c, "d= ", $d;
                    unset($a);  
                    unset($b);  
                  ?>
              </p>
            </details>
        </pre>
      </p>
      
    </div>
    <div class="exo-container">
      <h3>Exercice 3:</h3>
      <p>
        Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?
            <pre>
                <code class="language-php line-numbers">
                    &lt;?php
                    $A = 1;
                    $B = $A + 3;
                    $A = $a . $b;
                    echo "A = {$A}, B = {$B}";
                    ?&gt;
                </code>
            </pre>
      </p>
      <details>
        <summary>La solution</summary>
        <p class="box">
            <?php
            	$A = 1;
            	$B = $A + 3;
            	$A = $a . $b;
            	echo "A = {$A}, B = {$B}";
            ?> 
        </p>
      </details>
    </div>
    <div class="exo-container">
      <h3>Exercice 4:</h3>
      <p>
        Quelles seront les valeurs des variables A, B et C après exécution des instructions suivantes?
        <pre>
            <code class="language-php line-numbers">
                &lt;?php
                $A = 3;
                $B = 10;
                $C = $A + $B;
                $B = $A + $B;
                $A = $C;
                $A = $C / $B;
                $A = $C % $A;
                echo "A= ", $A, ", B= ", $B, ", C= ", $C;
                ?&gt;
            </code>
        </pre>
      </p>
      <details>
        <summary>La solution</summary>
        <p class="box">
             <?php
            	$A = 3;
                $B = 10;
                $C = $A + $B;
                $B = $A + $B;
                $A = $C;
                $A = $C / $B;
                $A = $C % $A;
                echo "A= ", $A, ", B= ", $B, ", C= ", $C;
            ?> 
        </p>
      </details>
    </div>

    <div class="exo-container">
      <h3>Exercice 5:</h3>
      <p>
        <ul>
          <li>1. Écrire un script PHP permettant de calculer le périmètre d'un cercle.</li>
          <li>2. Écrire un script PHP qui calcule et affiche le carré d'un nombre.</li>
          <li>3. Écrire un script PHP qui calcule l'image d'un nombre x par une fonction du type f(x) =
          ax2 + bx + c (a, b et c des variables à donner)</li>
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
    
    <script src="prism.js"></script>
  </body>
</html>
