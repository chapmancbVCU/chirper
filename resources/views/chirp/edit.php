'<?php $this->setSiteTitle("Edit Chirp - Chirper"); ?>

<!-- Head content between these two function calls.  Remove if not needed. -->
<?php $this->start('head'); ?>

<?php $this->end(); ?>


<!-- Body content between these two function calls. -->
<?php $this->start('body'); ?>
<div class="container">
  <h1 class=" my-3 pt-3 text-center"><strong>Edit Chirp</strong></h1>
  <div class="welcome bg-light shadow-lg w-75 mx-auto my-3">
    <form class="form" action="" method="POST">
    <?= csrf() ?>
    <?= errorBag($this->displayErrors) ?>

    <?= textarea(
        "",
        'message',  
        $this->chirp->message, 
        ['class' => 'form-control input-sm chirp-textarea', 'placeholder' => 'What\'s on your mind?'],
        ['class' => 'form-group mb-3 mx-3']
        ) ?>

        <div class="col-md-12 text-end pb-3">
            <a href="<?=route('chirp.index')?>" class="btn btn-default">Cancel</a>
            <?= submit('Update', ['class' => 'btn btn-primary me-3'])  ?>
        </div>
    </form>
  </div>
</div>
<?php $this->end(); ?>