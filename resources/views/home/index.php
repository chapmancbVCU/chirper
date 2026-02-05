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

  <?php foreach($this->chirps as $chirp): ?>
    <div class="welcome w-75 mx-auto bg-white shadow-lg">
      <h1 class="ms-3 my-3 pt-3"><strong><?= $chirp['author'] ?></strong></h1>
      <p class="ms-3 my-3 pb-3"><?= $chirp['message'] ?></p>
      <p class="ms-3 my-3 pb-3"><?= $chirp['time'] ?></p>
    </div>
  <?php endforeach; ?>
</div>

<?php $this->end(); ?>