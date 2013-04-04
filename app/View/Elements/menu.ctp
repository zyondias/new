<div id='menu'>
                    <ul>
                        <div id="item"> <li><?php echo $this->Html->link('Home', array('controller'=>'pages','action'=>'display', 'news'));?>
                            </li></div>
                        <div id="item"> <li><?php  echo $this->Html->link('Local', array('controller'=>'pages', 'action'=>'display','local'));?>
                            </li></div>
                        <div id="item"> <li><?php  echo $this->Html->link('Inscrição', array('controller'=>'inscricao', 'action'=>'inscrever','inscricao'));?>
                            </li></div>
                    </ul>
                </div>