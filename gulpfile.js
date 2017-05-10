/*VARIAVEIS SERAO CHAMADA POR
<VAR>  VARIAVEIS
<apelido do plugin> AQUI TU CRIA UMA CHAMADA PARA EXECULTAR NO TERMINALS
<require> ESTA CAHAMANDO O PLUGINS INSTALADO VIA
<('PLUGINS')> $npm install --save -dev <('nome-do-plugin')
*/
var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');


//MODO DEFAUT
gulp.task('default', function() {
  console.log('ComeçandoGulp');
});

 //gulp.task('default',['watch'],['sass'] );
//MODO SASS AUTO COMPILIN
/*
<gulp.task('apelido', function(){TAREFA}); CHAMA O APELIDO PARA EXECULTAR,
 NO CASO UMA FUNÇAO <function(){}> DETERMINADA.
 return sass('NOME DA PASTA /*. <-- CHAMA TODOS OS ARQUIVOS DA ESTENÇAO
  E COMPILA').pipe(gulp.dest('PASTA ONDE SERA GERADO UM UNICO CSS'))
*/
gulp.task('sass', function() {
  return gulp.src('sass/**/*.sass')
  .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
  // .pipe(sass())
  .pipe(gulp.dest('css')); // O MODO (PASTA</**/*.>TIPO DE ARQUIVO) E PARA PEGAR TODAS AS PASTA E SUB-PASTAS
});

//MODO DE AUTO ATUALIZAR  OS SASS PARA CSS

gulp.task('watch', function() {
   gulp.watch ('sass/**/*.sass', ['sass']);
});
