<?php
namespace App\Models;
use Core\Model;
use Core\Traits\HasTimestamps;
use Core\Validators\MaxValidator;
use Core\Validators\RequiredValidator;

/**
 * Implements features of the Chirp class.
 */
class Chirp extends Model {
    use HasTimestamps;

    // Fields you don't want saved on form submit
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

    public static function findByIdAndUserId($chirp_id, $user_id, $params = []) {
        $conditions = [
            'conditions' => 'id = ? AND user_id = ?',
            'bind' => [$chirp_id, $user_id]
        ];
        $conditions = array_merge($conditions, $params);
        return self::findFirst($conditions);
    }

    /**
     * Performs validation for the Chirp model.
     *
     * @return void
     */
    public function validator(): void {
        $this->runValidation(new MaxValidator($this, ['field' => 'message', 'rule' => 255, 'message' => 'Chirp must be 255 characters or less.']));
        $this->runValidation(new RequiredValidator($this, ['field' => 'message', 'message' => 'Please write something to chirp!']));
    }
}