var home = 0;
var java = [
  'Conceito de Algoritmo',
  'Introdução à Linguagem Java',
  'Operadores',
  'Conceito de Algoritmo',
  'Criando um Programa',
  'Exemplo 01',
  'Exemplo 01',
];
var matematica = [
  'Mat. aplicada a computação' ,
  'Operação com fração' ,
  'Tabela Verdade' ,
  'Preposições simples' ,
  'Preposições compostas' ,
  'Operações lógicas sobre as proposições' ,
  'Binários' ,
  'Lógica Booleana',
];

var turma = [
  'Gerencia de Projetos' ,
  'O que é Gestão de Porjetos' ,
  'A Influência de Ger. de Projetos' ,
  'O que é PMBOK' ,
  'PMI' ,
];

var html = [
  'Introdução a Hipertexto',
  'A Linguagem HTML',
  'Ferramenta de edição HTML' ,
  'Conceitos básicos de Web-Designer' ,
  'introção ao CSS' ,
  'Cores e unidades' ,
  'Propriedades CSS' ,
];
conteudo = java;
materia = '_layouts/java.php';
var n [
  'home';
  'java.length';
  'matematica.length';
  'turma.length';
  'html.length';
];
// ======================================================
// LISTA DINAMICA DOS CONTEUDOS
var materia;
// n [0] = home;
// n [1] = java.length;
// n [2] = matematica.length;
// n [3] = turma.length;
// n [4] = html.length;
function temas(materia, n){
  for (var i = 0; i < n; i++) {
    document.write('<li><a href="../_layouts'+ materia + '#tema-' + i + '">'+ 'conteudo[i]' + '</a></li>') ;
  }
}
// ======================================================
