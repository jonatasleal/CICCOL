<?php /* Smarty version 2.6.26, created on 2010-06-04 21:10:35
         compiled from menu_princ_fluxograma.tpl */ ?>
<html>
    <head>
        <title>Fluxograma</title>

<script language="javascript" type="text/javascript">
//Função que não deixa o frame ficar fora e cria as barras de rolagem
function iFrameHeight() {
      var h = 0;
      if ( !document.all ) {
          h = document.getElementById('blockrandom').contentDocument.height;
          document.getElementById('blockrandom').style.height = h + 450 + 'px';
      } else if( document.all ) {
          h = document.frames('blockrandom').document.body.scrollHeight;
          document.all.blockrandom.style.height = h + 200 + 'px';
      }
}
</script>

    </head>
    <body>
        <p class="heading">Fluxograma</p>

<p>Para baixar o fluxograma clique aqui</p>

        <iframe
          onload="iFrameHeight()"
             id="blockrandom"
             name="iframe"
             src="libs/lib_menu_princ_fluxograma.php"
             width="700"
             height="400"
             scrolling="auto"
             align="top"
             frameborder="0"
             class="wrapper" >
        </iframe>
        
    </body>
</html>
