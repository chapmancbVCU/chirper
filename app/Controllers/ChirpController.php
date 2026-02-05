<?php
namespace App\Controllers;
use Core\Controller;

/**
 * Undocumented class
 */
class ChirpController extends Controller {
    public function indexAction(): void {
        $chirps = [
            [
                'author' => 'Jane Doe',
                'message' => 'Just deployed my first Chappy app!',
                'time' => '5 minutes ago'
            ],
            [
                'author' => 'John Smith',
                'message' => 'Chappy also makes web development fun',
                'time' => '1 hour ago'
            ],
            [
                'author' => 'Abcde Johnson',
                'message' => 'Working on something cool with Chirper...',
                'time' => '3 hours ago'
            ],
        ];
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