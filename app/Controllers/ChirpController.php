<?php
namespace App\Controllers;
use Core\Controller;

/**
 * Undocumented class
 */
class ChirpController extends Controller {
    public function indexAction(): void {
        $this->view->render('home.index');
    }

    /**
     * Runs when the object is constructed.
     *
     * @return void
     */
    public function onConstruct(): void {
        $this->view->setLayout('default');
    }
}