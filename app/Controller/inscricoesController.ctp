<?php
        
        class inscricoesController extends AppController
        {
            public function index(){}
            public function inscrever()
            {
                 $isPost = $this->request->isPost();
                 
                 if($isPost && !empty($this->request->data)){
                        //Tenta salvar os dados
                        $this->Inscricao->save($this->request->data);
                    }
                    else{
                        $this->Session->setFlash('ERRO');
                    }
            }
        }
        

?>