<?php
class CommonController extends Zend_Controller_Action
{
    public function init()
    {
    }

    public function displayAction()
    {
        $page = $this->getRequest()->getParam('page');
        $file = $this->view->getScriptPath(null) . "/" . $this->getRequest()->getControllerName() . "/$page." . $this->viewSuffix;
        if (file_exists($file)) {
            $this->render($page);
        } else {
            throw new Zend_Controller_Action_Exception('Page not found', 404);
        }
    }
}