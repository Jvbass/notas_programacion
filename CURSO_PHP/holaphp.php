<?php
// Primero, saludamos.
echo "Hola, PHP. 🙌 ", "Saludos \n" ; // Usamos "\n"  para saltos de linea
print_r ("Un gusto PHP. \t"); // Usamos "\t" para tabulacion
print ("Espero aprender de ti. \n" . "Nos vemos mas abajo" . "\n"); //Concatenamos strings con .


//Variables 
/* PHP es un lenguaje de tipado debil, el tipo de variable cambia segun lo vamos asignando.
Se define una variable con el signo $ y el nombre en formato snake_case. */

//String
    $my_string = "Este es un string 🔡";
    echo $my_string . "\n"; 

    $my_url = "https://www.php.net/manual/es/"; 

    print_r ("La documentacion la puedes encontrar en: ". $my_url . "\n");  
    //usamos print_r para insertar una variable en el mensaje de salida

    $my_string ="Este es el mismo string modificado 😘";
    echo $my_string . "\n"; 

    echo gettype($my_string) . "\n"; // Con gettype imprimimos el tipo de dato

    $my_string = 6;
    echo $my_string . "\n"; //ya no es un string
    echo gettype($my_string) . "\n";

    $my_string = "Este es un string 🔡";

//Integer 🔢
    $my_int = 5;
    $my_int = $my_int + 4;
    echo $my_int . "\n";

    $my_suma = $my_int + 5.3; // pasa a ser un double
    echo $my_suma . "\n";
    echo gettype($my_suma) . "\n";

    $my_suma =  $my_suma + 0.7; // 14.3 + 0.7 = 15
    echo $my_suma . "\n";
    echo gettype($my_suma) . "\n"; // sigue siendo un double
    $my_suma = 1; // al asignarle un valor entero pasa a ser integer
    echo gettype($my_suma) . "\n";  
    $my_int = 5;

//Double 
    $my_double = 5.5;
    echo gettype($my_double) . "\n";
    echo $my_int + $my_double  . "\n";
    echo gettype($my_int + $my_double) . "\n";
    
//Boolean ☦️
    $my_bool = false;
    echo $my_bool . "\n" ; // devuelve " "
    $my_bool = true;
    echo $my_bool . "\n" ; // devuelve 1

    echo gettype($my_bool) . "\n";

    echo "El valor de mi string es '$my_string', el de mi integer es $my_int, el de mi double es $my_double y el de mi boolean es $my_bool que significa 'true' .\n";


// Constantes
/*Las Constantes se definen con la palabra reservada const, el nombre de la constante seguida por su valor, por convencion se usa el formato UPPER_CAMEL_CASE para el nombre de una constante */
    const MY_CONSTANT = "My constante no cambiara por nada 😊";
    echo MY_CONSTANT . "\n";
    //const MY_CONSTANT = 5;  da error de duplicidad

    define("MAX_SIZE", 100); // se puede definir una variable con la palabra reservada define()
    echo MAX_SIZE . "\n";
    define("URL_DOCUMENTACION", $my_url); //podemos pasarle a una constante una variable anteriormente definida..
    echo URL_DOCUMENTACION . "\n";
    $my_url = "google.com"; // si cambiamos el valor de la variable my_url, la constante URL_DOCUMENTACION, en este caso, no cambiara ya que toma el valor de la variable my_url cuando creamos la constante (linea 71)
    echo URL_DOCUMENTACION . " 🎇" .  "\n";

//String numericos 
/* En PHP los string que contienen numeros, se comportan como numeros al operar con ellos, pero siguen siendo un string */

    $s_num1 = "1";
    $s_num2 = "4";
    echo gettype($s_num2) . "\n" ;
    $s_total = $s_num1 + $s_num2;

    echo $s_total . "\n";;
    echo gettype($s_total) . "\n";

    if ($s_num1 > $s_num2) {
        echo "El primer número es mayor";
      } else {
        echo "El segundo número es mayor o igual";
      }

