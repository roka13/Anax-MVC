
<?php if (isset($title)) : ?>
<?=$title?>
<?php endif; ?>
<?php if(isset($link)) : ?>
 <?=$link;?>
<?php endif; ?>
<?php if(isset($question)) : ?>
 <?=$question;?>
<?php endif; ?>

<?php if(isset($fail)) : ?>
 <?=$fail;?>
<?php endif; ?>
<?php if(isset($form)) : ?>
<div class= 'forms'>

  <?= $form;?>
  </div>
<?php endif; ?>