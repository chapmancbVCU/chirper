<?php
namespace App\Models;
use Core\Model;
use Core\Traits\PasswordPolicy;

/**
 * Implements features of the Chirp class.
 */
class Chirp extends Model {
    use PasswordPolicy;
    // Fields you don\'t want saved on form submit
    // public const blackList = [];

    // Set to name of database table.
    protected static $_table = 'chirps';

    // Soft delete
    // protected static $_softDelete = true;
    
    // Fields from your database
    public $id;
    public $user_id;
    public $created_at;
    public $updated_at;
    public $message;

    public function afterDelete(): void {
        // Implement your function
    }

    public function afterSave(): void {
        // Implement your function
    }

    public function beforeDelete(): void {
        // Implement your function
    }

    public function beforeSave(): void {
        $this->timeStamps();
    }

    /**
     * Performs validation for the Chirp model.
     *
     * @return void
     */
    public function validator(): void {
        // Implement your function
    }
}