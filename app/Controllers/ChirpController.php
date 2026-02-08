<?php
namespace App\Controllers;

use App\Models\Chirp;
use Core\Controller;
use Core\Services\AuthService;
use Core\Session;

/**
 * Undocumented class
 */
class ChirpController extends Controller {
    public function indexAction(): void {
        $user = AuthService::currentUser();
        $newChirp = new Chirp();
        $chirps = Chirp::find(['order' => 'created_at DESC']);

        if($user && $this->request->isPost()) {
            $this->request->csrfCheck();
            $newChirp->assign($this->request->get());
            $newChirp->user_id = $user->id;
            $newChirp->save();
            if($newChirp->validationPassed()) {
                flashMessage(Session::SUCCESS, "Chirp created!");
                redirect('chirp.index');
            }
        }

        $this->view->user = $user;
        $this->view->chirps = $chirps;
        $this->view->newChirp = $newChirp;
        $this->view->displayErrors = $newChirp->getErrorMessages();
        $this->view->render('home.index');
    }

    public function editAction($id): void {
        $chirp = Chirp::findByIdAndUserId($id, AuthService::currentUser()->id);

         if($this->request->isPost()) {
            $this->request->csrfCheck();
            $chirp->assign($this->request->get());
            if($chirp->save()) {
                flashMessage(Session::SUCCESS, "Chirp has been updated!");
                redirect('chirp.index');
            }
        }
        $this->view->chirp = $chirp;
        $this->view->displayErrors = $chirp->getErrorMessages();
        $this->view->render('chirp.edit');
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