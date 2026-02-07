<?php
namespace App\Controllers;

use App\Models\Chirp;
use Core\Controller;
use Core\Services\AuthService;

/**
 * Undocumented class
 */
class ChirpController extends Controller {
    public function indexAction(): void {
        $user = AuthService::currentUser();
        if($user) {
            $chirps = Chirp::find();
        }
        $this->view->user = $user;
        $this->view->chirps = $chirps;
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