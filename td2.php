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
       
            <details>
              <summary>La solution</summary>
               <pre><code class="language-php line-numbers">
                &lt;?php
                    $budget = 1000;
                    $achats = 1050;
                    if($achats <= $budget){
                        echo "Félicitations! votre budget est suffisante!";
                    }else{
                        echo "Ooooops! votre budget n'est pas suffisante!";
                    }
                ?&gt;
            </code></pre>
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
        
      </p>
      
    </div>
    <div class="exo-container">
      <h3>Exercice 3:</h3>
      <p>
        Déclarer une variable $age qui contient la valeur de type entier de votre choix. Réaliser une
condition pour afficher si la personne est mineure ou majeure 
      </p>
       <details>
              <summary>La solution</summary> 
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
                </pre>
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
        
    </div>
    <div class="exo-container">
      <h3>Exercice 4:</h3>
      <p>
        Déclarer une variable $heure qui contient la valeur de type entier de votre choix comprise entre
0 et 24.
Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.
        
      </p>
      <details>
        <summary>La solution</summary>
        <pre>
            <code class="language-php line-numbers">
                &lt;?php
                    $heure = 12;
                    if($heure < 0){
                        echo "Heure Invalide!";
                    }if($heure == 0){
                        echo "C'est la nuit (minuit)!";
                    }elseif($heure < 12){
                        echo "C'est le matin!";
                    }
                    elseif($heure < 18){
                        echo "C'est l'après-midi!";
                    }
                    elseif($heure <= 23){
                        echo "C'est la nuit!";
                    }else{
                        echo "Heure Invalide!";
                    }
                ?&gt;
            </code>
        </pre>
        <p class="box">
             <?php
            	    $heure = 12;
                    if($heure < 0){
                        echo "Heure Invalide!";
                    }if($heure == 0){
                        echo "C'est la nuit (minuit)!";
                    }elseif($heure < 12){
                        echo "C'est le matin!";
                    }
                    elseif($heure < 18){
                        echo "C'est l'après-midi!";
                    }
                    elseif($heure <= 23){
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
            intervalle de note : grade A pour une note entre [18-20], B pour [14-18[, C pour [10-14[, et D pour [0-0[.</li>
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
        <ol>
            <li>Écrivez une expression conditionnelle utilisant une variable $note et affiche un grade à un
            intervalle de note : grade A pour une note entre [18-20], B pour [14-18[, C pour [10-14[, et D pour [0-10[.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $note = 15;
                      if($note < 0){
                        echo "Note invalide! note < 0 !";
                      }elseif($note < 10){
                        echo "Grade D";
                      }elseif($note < 14){
                        echo "Grade C";
                      }elseif($note < 18){
                        echo "Grade B";
                      }elseif($note <= 20){
                        echo "Grade A";
                      }else{
                        echo "Note invalide! note > 20 !";
                      }
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                    $note = 15;
                      if($note < 0){
                        echo "Note invalide! note < 0 !";
                      }elseif($note < 10){
                        echo "Grade D";
                      }elseif($note < 14){
                        echo "Grade C";
                      }elseif($note < 18){
                        echo "Grade B";
                      }elseif($note <= 20){
                        echo "Grade A";
                      }else{
                        echo "Note invalide! note > 20 !";
                      }
                  ?>
              </div>
              </p>
            </li>
            <li>Rédigez une expression conditionnelle qui teste si un nombre est à la fois multiple de 3 et de
            7.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $nombre = 15;
                      if($nombre % 3 == 0 && $nombre % 7 == 0){
                        echo "$nombre est un multiple de 3 et 7.";
                      }else{
                        echo "$nombre n'est pas un multiple de 3 et 7.";
                      }
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $nombre = 15;
                      if($nombre % 3 == 0 && $nombre % 7 == 0){
                        echo "$nombre est un multiple de 3 et 7.";
                      }else{
                        echo "$nombre n'est pas un multiple de 3 et 7.";
                      }
                  ?>
              </div>
              </p>
            </li>
            <li>Utilisez les variables $nombre1, $nombre2 et $operation pour réaliser un script effectuant
                une opération parmi les quatre opérations arithmétiques élémentaires suivant la valeur de la
                variable $operation (utiliser l'instruction switch).
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $nombre1 = 5;
                      $nombre2 = 1;
                      $operation = "*";
                      $resultat = 0;
                      switch($operation){
                        case '+':
                            $resultat = $nombre1 + $nombre2;
                            break;
                        case '-':
                            $resultat = $nombre1 - $nombre2;
                            break;
                        case '*':
                            $resultat = $nombre1 * $nombre2;
                            break;
                        case '/':
                            if($nombre2 != 0){
                                $resultat = $nombre1 / $nombre2;
                            }else{
                                $resultat = "Error, division par 0!";
                            }
                            break;
                      }
                      echo "$nombre1 $operation $nombre2 = $resultat";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $nombre1 = 5;
                      $nombre2 = 1;
                      $operation = "*";
                      $resultat = 0;
                      switch($operation){
                        case '+':
                            $resultat = $nombre1 + $nombre2;
                            break;
                        case '-':
                            $resultat = $nombre1 - $nombre2;
                            break;
                        case '*':
                            $resultat = $nombre1 * $nombre2;
                            break;
                        case '/':
                            if($nombre2 != 0){
                                $resultat = $nombre1 / $nombre2;
                            }else{
                                $resultat = "Error, division par 0!";
                            }
                            break;
                        default:
                            $resultat = "Operation Invalide";
                      }
                      echo "$nombre1 $operation $nombre2 = $resultat";
                  ?>
              </div>
              </p>
            </li>
            <li>Refaire la question 3 avec l'instruction match.
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $nombre1 = 5;
                      $nombre2 = 1;
                      $operation = "*";
                      $resultat = match ($operation) {
                        '+' => $nombre1 + $nombre2,
                        '-' => $nombre1 - $nombre2,
                        '*' => $nombre1 * $nombre2,
                        '/' => match ($nombre2) {
                                    1 => $nombre1 / $nombre2,
                                    0 => "Error, division par 0!"
                                },
                        default => "Operation Invalide"
                      };
                      echo "$nombre1 $operation $nombre2 = $resultat";
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $nombre1 = 5;
                      $nombre2 = 1;
                      $operation = "*";
                      $resultat = match ($operation) {
                        '+' => $nombre1 + $nombre2,
                        '-' => $nombre1 - $nombre2,
                        '*' => $nombre1 * $nombre2,
                        '/' => match ($nombre2) {
                                    1 => $nombre1 / $nombre2,
                                    0 => "Error, division par 0!"
                                },
                        default => "Operation Invalide"
                      };
                      echo "$nombre1 $operation $nombre2 = $resultat";
                  ?>
              </div>
              </p>
            </li>
        </ol>
        
      </details>
    </div>
    
    <div class="exo-container">
      <h3>Exercice 6:</h3>
      <p>
        <ol>
          <li>Écrivez un script PHP pour vérifier si un caractère est une voyelle ou une consonne à l'aide
            de l'instruction switch</li>
          <li>Écrivez un script PHP pour vérifier si le nombre est pair ou impair à l'aide de l'instruction
            match</li>
        </ol>
      </p>
      <details>
        <summary>La solution</summary>
        <ol>
            <li>Écrivez un script PHP pour vérifier si un caractère est une voyelle ou une consonne à l'aide
            de l'instruction switch
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                      $char = 't';
                      switch($char){
                        case 'a':
                        case 'e':
                        case 'u':
                        case 'i':
                        case 'o':
                        case 'y':
                            echo "Le caractère $char est une voyelle";
                        default:
                            echo "Le caractère $char est une consonne";
                      }
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                      $char = 't';
                      switch($char){
                        case 'a':
                        case 'e':
                        case 'u':
                        case 'i':
                        case 'o':
                        case 'y':
                            echo "Le caractère $char est une voyelle";
                        default:
                            echo "Le caractère $char est une consonne";
                      }
                  ?>
              </div>
              </p>
            </li>
            <li>Écrivez un script PHP pour vérifier si le nombre est pair ou impair à l'aide de l'instruction
            match
              <p class="box">
              <pre>
                  <code class="language-php line-numbers">
                      &lt;?php
                        $char = 't';
                        $message = match($char){
                             'a',
                             'e',
                             'u',
                             'i',
                             'o',
                             'y'=>
                                "Le caractère $char est une voyelle",
                            default =>
                                 "Le caractère $char est une consonne"
                        };
                        echo $message;
                      ?&gt;
                  </code>
              </pre>
              <div>
                <h4>Le résultats:</h4>
                  <?php
                       $char = 't';
                        $message = match($char){
                             'a', 'e', 'u', 'i', 'o', 'y'=>
                                "Le caractère $char est une voyelle",
                            default =>
                                 "Le caractère $char est une consonne"
                        };
                        echo $message;
                  ?>
              </div>
              </p>
            </li>
        </ol>
        
      </details>
    </div>
    
    <script src="prism.js"></script>
  </body>
</html>
