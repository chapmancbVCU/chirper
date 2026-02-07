<?php $this->start('head'); ?>
<script src="<?=env('APP_DOMAIN', '/')?>node_modules/jquery/dist/jquery.min.js"></script>
<?= $this->setSiteTitle("Home Feed - Chirper") ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<div class="container">
  <div class="card bg-light shadow-lg w-75 mx-auto my-3">
    <h1 class="ms-3 my-3 pt-3"><strong>Welcome to Chirper!</strong></h1>
    <p class="ms-3 my-3 pb-3">This is your brand new Chappy.php application.  Time to make it sing (or chirp)!</p>
  </div>

  <?php if($this->chirps): ?>
    <?php foreach($this->chirps as $chirp): ?>
      <?php $this->chirp = $chirp ?>
      <?= $this->component('chirp') ?>
    <?php endforeach; ?>
  <?php else: ?>
    <div class="card bg-light shadow-lg w-75 mx-auto my-3">
        <h1 class="ms-3 my-3 pt-3">No chirps yet.  Be the first to chirp!</h1>
      </div>
  <?php endif; ?>
</div>

<?php $this->end(); ?>