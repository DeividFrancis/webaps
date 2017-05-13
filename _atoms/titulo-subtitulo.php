<?php
$disciplina = array(
  'Home',
  'Linguagem Algoritmica',
  'Matemática',
  'Gerência de Projetos',
  'Hip e Estilos',

 );
$java = array(
  'java',
  'Conceito de Algoritmo',
  'Introdução à Linguagem Java',
  'Operadores',
  'Conceito de Algoritmo',
  'Criando um Programa',
  'Exemplo 01',

 );

 $mat = array(
   'matematica',
  'Mat. aplicada a computação' ,
  'Operação com fração' ,
  'Tabela Verdade' ,
  'Preposições simples' ,
  'Preposições compostas' ,
  'Operações lógicas sobre as proposições' ,
  'Binários' ,
  'Lógica Booleana',
  );

$turma = array(
  'turma',
  'Gerencia de Projetos' ,
  'O que é Gestão de Porjetos' ,
  'A Influência de Ger. de Projetos' ,
  'O que é PMBOK' ,
  'PMI' ,
 );
$html = array(
  'html-css',
  'Introdução a Hipertexto',
  'A Linguagem HTML',
  'Ferramenta de edição HTML' ,
  'Conceitos básicos de Web-Designer' ,
  'introção ao CSS' ,
  'Cores e unidades' ,
  'Propriedades CSS' ,
);


 function titulos($titulos){
   $qtdTitulos = count($titulos);
   for ($i=1; $i < $qtdTitulos; $i++) {
     $lista = "<li><a href='../_layouts/$titulos[0].php#tema-$i'>$titulos[$i]</a></li>";
     echo $lista;
   }
 }

 function titulo($n,$definaMateria){
   echo "<h3 class='titulo' id='tema-$n'>$definaMateria[$n]</h3>";
 }
 ?>
