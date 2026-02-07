<?php use Core\Lib\Utilities\DateTime; ?>
<?php use App\Models\Users; ?>
<?php $this->start('head'); ?>
<script src="<?=env('APP_DOMAIN', '/')?>node_modules/jquery/dist/jquery.min.js"></script>
<?= $this->setSiteTitle("Welcome - Chirper") ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<div class="container">
  <div class="welcome w-75 mx-auto bg-white shadow-lg">
    <h1 class="ms-3 my-3 pt-3"><strong>Welcome to Chirper!</strong></h1>
    <p class="ms-3 my-3 pb-3">This is your brand new Chappy.php application.  Time to make it sing (or chirp)!</p>
  </div>

  <?php if($this->chirps): ?>
    <?php foreach($this->chirps as $chirp): ?>
      <div class="welcome w-75 mx-auto bg-white shadow-lg">
        <h1 class="ms-3 my-3 pt-3"><strong><?= Users::findById($chirp->user_id)->fname ?? 'Anonymous' ?></strong></h1>
        <p class="ms-3 my-3 pb-3"><?= $chirp->message ?></p>
        <p class="ms-3 my-3 pb-3"><?= DateTime::timeAgo($chirp->created_at) ?></p>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <div class="welcome w-75 mx-auto bg-white shadow-lg">
        <h1 class="ms-3 my-3 pt-3">No chirps yet.  Be the first to chirp!</h1>
      </div>
  <?php endif; ?>
</div>

<?php $this->end(); ?>