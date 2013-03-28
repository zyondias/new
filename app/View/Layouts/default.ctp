<html>
 <head>
        <?php
        //definino o css
        echo $this->Html->css('style');
        echo $this->fetch('css');
        ?>
        <?php echo $this->Html->charset('utf-8'); ?>
        <title>
            <?php
            //colocando o titulo da pagina coforme o nome do arquivo Page que esta sendo utiliza
            echo $title_for_layout;
            ?>
        </title>
    </head>

 <body>
        <div class='corpo'>
  <?php
            //verificando qual é a pagina para colocar um css especifico para o header
          
            switch ($title_for_layout)
            {
                case 'News': 
                            echo $this->element('header', array('classeCss'=>'header2'));
                            break;
                 case 'Local':
                            echo $this->element('header', array('classeCss'=>'header'));
                            break;
                 
                 default :  
                            echo $this->element('header', array('classeCss'=>'header'));
                            break;
            }              
            //acresentando o menu
            echo $this->element('menu');
            ?> 
            <div class="contedo">
            
          
            <?php
                  //metodo para pegar a page e colcoar dentro do contexto da default
            echo $this->Session->flash(); 
            echo $this->fetch('content'); 
            ?>
                
            </div>
        </div>
     <?php 
     
            //verificando qual é a pagina para colocar um css especifico para o rodape
            switch ($title_for_layout)
            {
                case 'News':
                           echo $this->element('rodape', array( 'classeCss'=>'rodape2','textoRodape'=> $title_for_layout.' ♦ Direitos resevados para ZAZA'));
                    break;
                case 'Local':
                          echo $this->element('rodape', array('classeCss'=>'rodape','textoRodape'=>$title_for_layout. ' ♦ Vamos ver se vc consegue chegar nesse buraco'));
                    break;
                default : echo $this->element('rodape', array('classeCss'=>'rodape','textoRodape'=>' nada de legal por aqui'));
                    break;
            }
     ?>
        
    </body>
</html>