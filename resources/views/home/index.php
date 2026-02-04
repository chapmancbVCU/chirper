<?php $this->start('head'); ?>
<script src="<?=env('APP_DOMAIN', '/')?>node_modules/jquery/dist/jquery.min.js"></script>
<?= $this->setSiteTitle("Welcome - Chirper") ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<div class="container">
  <div class="welcome w-75 mx-auto bg-white">
    <h1 class="ms-3 my-3"><strong>Welcome to Chirper!</strong></h1>
    <p class="ms-3 my-3">This is your brand new Chappy.php application.  Time to make it sing (or chirp)!</p>
  </div>
</div>

<?php $this->end(); ?>