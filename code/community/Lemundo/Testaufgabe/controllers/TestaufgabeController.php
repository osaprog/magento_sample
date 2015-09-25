<?php
/**
 * Created by PhpStorm.
 * User: osama
 * Date: 24.09.15
 * Time: 20:10
 */

class Lemundo_Testaufgabe_TestaufgabeController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}