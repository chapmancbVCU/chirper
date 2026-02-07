<?php use Core\Lib\Utilities\DateTime; ?>
<?php use App\Models\Users; ?>

<?php $user = Users::findById($this->chirp->user_id); ?>
<div class="card bg-light shadow-lg w-75 mx-auto my-3">
  <div class="card-body">
    <div class="d-flex flex-row">
      <?php if($user): ?>
        <img src="https://avatars.laravel.cloud/<?=$user->email?>" class="rounded-circle"
         alt="User Avatar" style="width: 50px; height: 50px; object-fit: cover;"/>
         <h1 class="ms-3"><strong><?= Users::findById($this->chirp->user_id)->fname?></strong></h1>
      <?php else: ?>
        <img src="https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth" class="rounded-circle"
         alt="Anonymous user" style="width: 50px; height: 50px; object-fit: cover;"/>
         <h1 class="ms-3"><strong>Anonymous user</strong></h1>
      <?php  endif; ?>
    </div>
    <p class="my-3"><?= $this->chirp->message ?></p>
    <p class="mb-0"><?= DateTime::timeAgo($this->chirp->created_at) ?></p>
  </div>
  
  
  
  
</div>


