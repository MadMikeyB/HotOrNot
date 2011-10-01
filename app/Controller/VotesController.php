<?php
class VotesController extends AppController {
    
    function vote($id, $md5userip) {
        
        $this->request->data['Vote']['item_id'] = $id;
        $this->request->data['Vote']['ip'] = $md5userip;
        //debug($this->request->data);
        $this->Vote->save($this->request->data);
        //$this->Session->setFlash('Vote Added');
        $this->redirect($this->referer());
	}
 
}