<?php $this->start('head'); ?>
<script src="<?=env('APP_DOMAIN', '/')?>node_modules/jquery/dist/jquery.min.js"></script>
<?= $this->setSiteTitle("Home Feed - Chirper") ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<div class="container">
  <h1 class=" my-3 pt-3 text-center"><strong>Latest Chirps</strong></h1>
  <div class="welcome bg-light shadow-lg w-75 mx-auto my-3">
    <form class="form" action="" method="POST">
      <?= csrf() ?>
      <?= errorBag($this->displayErrors) ?>

      <?= textarea(
        "",
        'message',  
        $this->newChirp->message, 
        ['class' => 'form-control input-sm chirp-textarea', 'placeholder' => 'What\'s on your mind?'],
        ['class' => 'form-group mb-3 mx-3']
        ) ?>

        <div class="col-md-12 text-end">
            <?= submit('Submit', ['class' => 'btn btn-primary mb-3 me-3'])  ?>
        </div>
    </form>
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