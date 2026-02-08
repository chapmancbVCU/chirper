<?php use Core\Lib\Utilities\DateTime; ?>
<?php use App\Models\Users;
use Core\Services\AuthService;

 ?>

<?php $user = Users::findById((int)$this->chirp->user_id); ?>
<div class="card bg-light shadow-lg w-75 mx-auto my-3">
  <div class="card-body">
    <div class="d-flex flex-row">
      <?php if($user): ?>
        <img src="https://avatars.laravel.cloud/<?=$user->email?>" class="rounded-circle"
        alt="User Avatar" style="width: 50px; height: 50px; object-fit: cover;"/>
        <div class="d-flex flex-column">
          <h1 class="ms-3"><strong><?= Users::findById($this->chirp->user_id)->fname?></strong></h1>
          <?php if(AuthService::currentUser() == $this->chirp->user_id): ?>
          <div class="ms-3">
            <span><a href="<?= route('chirp.edit', [$this->chirp->id]) ?>" class="btn btn-sm btn-primary py-0">Edit</a></span>
            <span>
              <form method="POST" 
                  action="<?=route('chirp.destroy', [$this->chirp->id])?>" 
                  class="d-inline-block" 
                  onsubmit="if(!confirm('Are you sure you want to delete this chirp?')){return false;}">
                  <?= hidden('id', $this->chirp->id) ?>
                  <?= $csrfToken = csrf() ?>
                  <button type="submit" class="btn btn-danger btn-sm py-0"> Delete
                  </button>
              </form>
            </span>
          </div>
          <?php endif; ?>
        </div>
      <?php else: ?>
        <img src="https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth" class="rounded-circle"
         alt="Anonymous user" style="width: 50px; height: 50px; object-fit: cover;"/>
         <h1 class="ms-3"><strong>Anonymous user</strong></h1>
      <?php endif; ?>
    </div>
    <p class="my-3"><?= $this->chirp->message ?></p>
    <p class="mb-0">
      <?= DateTime::timeAgo($this->chirp->created_at) ?>
    </p>
  </div>
  
  
  
  
</div>


