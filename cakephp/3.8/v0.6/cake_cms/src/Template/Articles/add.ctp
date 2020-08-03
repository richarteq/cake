<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */

 $myTemplates = [
    'inputContainer' => '{{content}}',
];

$this->Form->setTemplates($myTemplates);
?>

<script>
$( document ).ready(function() {
  $( "#title" ).focus();
});

$('.form-group').each(function () {
  if ( $(this).find("text-danger").length ) {
    console.log('FOUND');
  }
});
</script>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index'],['class'=>'nav-link']) ?>
  </li>
  <li class="nav-item">
    <?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add'],['class'=>'nav-link active']) ?>
  </li>
  <li class="nav-item itemLinkTabUnnecessary">
    <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'nav-link']) ?>
  </li>
  <li class="nav-item itemLinkTabUnnecessaryReally">
    <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'nav-link']) ?>
  </li>
  <li class="nav-item itemLinkTabUnnecessary">
    <?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index'],['class'=>'nav-link']) ?>
  </li>
  <li class="nav-item itemLinkTabUnnecessaryReally">
    <?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add'],['class'=>'nav-link']) ?>
  </li>
</ul>



<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">

      <!-- Nested Row within Card Body -->
      <div class="row">
          
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><?= __('New Article') ?></h1>
              </div>

    <?= $this->Form->create($article) ?>
    
        
        <div class="form-group row">
            <?= $this->Form->label('user_id', __('User'), ['class' => 'col-sm-2 col-form-label']); ?>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <?=  $this->Form->control('user_id', ['label'=>false, 'options' => $users, 'class'=>'form-control', 'empty'=>'- Choose element -', 'required']); ?>
                <small id="userIdHelp" class="form-text text-muted">Select the user author of this article.</small>
            </div>
        </div>

        <div class="form-group row">
            <?= $this->Form->label('title', __('Title'), ['class' => 'col-sm-2 col-form-label']); ?>
            <div class="col-sm-10">
            <?= $this->Form->control('title', ['label'=>false, 'class'=>'form-control', 'autocomplete'=>'off']); ?>
            <small id="articleTitleHelp" class="form-text text-muted">Input the title of this article.</small>
            </div>
        </div>

        <div class="form-group row">
            <?= $this->Form->label('body', __('Body'), ['class' => 'col-sm-2 col-form-label']); ?>
            <div class="col-sm-10">
            <?= $this->Form->control('body', ['label'=>false, 'class'=>'form-control']); ?>
            <small id="articleBodyHelp" class="form-text text-muted">Input the body of this article.</small>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"><?= __('Published'); ?></div>
            <div class="col-sm-10">
                <div class="form-check">
                <?= $this->Form->control('published', ['label'=>false, 'class'=>'form-check-input', 'disabled' => 'disabled']); ?>
                <?= $this->Form->label('published', '<s>'.__('Published').'</s>', ['class' => 'form-check-label', 'escape'=>false]); ?>
                <small id="articlePublishedHelp" class="form-text text-muted">Activate this article after creating it. In action edit.</small>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <?= $this->Form->label('tags._ids', __('Tags'), ['class' => 'col-sm-2 col-form-label']); ?>
            <div class="col-sm-10">
            <?= $this->Form->control('tags._ids', ['label'=>false, 'options' => $tags, 'class'=>'form-control']); ?>
            <small id="articleTagsHelp" class="form-text text-muted">Select the tags of this article.</small>
            </div>
        </div>

    <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
            <?= $this->Form->button(__('Add Article'),['class'=>'btn btn-primary btn-block']) ?>
            </div>
        </div>
        
    <?= $this->Form->end() ?>

    
              
            </div>
          </div>
        </div>

</div>
</div>
