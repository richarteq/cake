<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */

$iconArrowBarUp = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-arrow-bar-up' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M11.354 5.854a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L8 3.207l2.646 2.647a.5.5 0 0 0 .708 0z'/>
  <path fill-rule='evenodd' d='M8 10a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-1 0v6.5a.5.5 0 0 0 .5.5zm-4.8 1.6c0-.22.18-.4.4-.4h8.8a.4.4 0 0 1 0 .8H3.6a.4.4 0 0 1-.4-.4z'/>
</svg>";
$iconFileEarmarkPlus = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-file-earmark-plus' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
<path d='M9 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h5v-1H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v2h1V6L9 1z'/>
<path fill-rule='evenodd' d='M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z'/>
<path fill-rule='evenodd' d='M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z'/>
</svg>";
$iconPlus = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-plus' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' d='M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z'/>
<path fill-rule='evenodd' d='M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z'/>
</svg>";

use Cake\Routing\Router;

 $myTemplates = [
    'inputContainer' => '{{content}}',
];

$this->Form->setTemplates($myTemplates);
?>

<script>
/** */
$( document ).ready(function() {
  $( "#title" ).focus();

  /** */
  $("#btnAddTag").click(function () {
    //console.log("CLICK...");
    /** */
    var title = $('#tagTitle').val();
    var targeturl = '<?= Router::url(["controller"=>"Tags","action"=>"asynchronousAdd"]) . '/' ?>'+title;
		  $.ajax({
        type:'get',
        url: targeturl,
			  success:function(result){
          //console.log(result);
          var d = JSON.parse(result);
          //console.log(d.message.type);         
          if ( $( "#modalBodyAddTag div.alert-info" ).length ) { 
            $("#modalBodyAddTag div.alert-info").removeClass("alert-info").addClass("alert-"+d.message.type);
          }
          if ( $( "#modalBodyAddTag div.alert-danger" ).length ) { 
            $("#modalBodyAddTag div.alert-danger").removeClass("alert-danger").addClass("alert-"+d.message.type);
          }
          if ( $( "#modalBodyAddTag div.alert-success" ).length ) { 
            $("#modalBodyAddTag div.alert-success").removeClass("alert-success").addClass("alert-"+d.message.type);
          }
          /** */
          $("#modalBodyAddTag div.alert-"+d.message.type).html(d.message.text);
          /** */
          var options='';
          var lengthTags=0;
          $.each(d.tags, function(i, item) {
            //console.log(i+' - '+item);
            options += '<option value="'+i+'">'+item+'</option>';
            lengthTags += 1;
          });
          $("#tags-ids").html(options);
          $("#countTags").html(lengthTags);
			  }
		  });	
    /** */
  });
  /** */

  /** */
  if ( $( ".error-message" ).length ) { 
    console.log("ERROR FOUND");
    $( ".error-message" ).prev( "input,select,textarea" ).focus();
  }
  /** */

  /** */
  $('#modalAddTag').on('shown.bs.modal', function() {
    if ( $( "#modalBodyAddTag div.alert-danger" ).length ) { 
      $("#modalBodyAddTag div.alert-danger").removeClass("alert-danger").addClass("alert-info");
      $("#modalBodyAddTag div.alert-info").html("<?= __('Input the title for tag.') ?>");
    }
    if ( $( "#modalBodyAddTag div.alert-success" ).length ) { 
      $("#modalBodyAddTag div.alert-success").removeClass("alert-success").addClass("alert-info");
      $("#modalBodyAddTag div.alert-info").html("<?= __('Input the title for tag.') ?>");
    }
    /** */    
    $('#tagTitle').trigger('focus');
    $('#tagTitle').val('');
    /** */
  });
  /** */

});
/** */
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
            <?= $this->Form->label('tags._ids', '<button type="button" class="btn btn-info">'.__('Tags').' <span class="badge badge-light" id="countTags">'.count($tags->toList()).'</span></button>', ['class' => 'col-sm-2 col-form-label', 'escape'=>false]); ?>
            <div class="col-sm-10">
            <?= $this->Form->control('tags._ids', ['label'=>false, 'options' => $tags, 'class'=>'form-control']); ?>
            <small id="articleTagsHelp" class="form-text text-muted">Select the tags of this article. 
            <button style="border: none;" type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#modalAddTag" data-whatever="@mdo"><?= $iconPlus . strtolower(__('New Tag')) ?></button>
            
            <div class="modal fade" id="modalAddTag" tabindex="-1" role="dialog" aria-labelledby="modalAddTagLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalAddTaglLabel"><?= __('New Tag') ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" id="modalBodyAddTag">

                    <div class="alert alert-info" role="alert"><?= __('Input the title for tag.') ?></div>

                    <div class="form-group">
                      <label for="tagTitle" class="col-form-label"><?= __('Title') ?></label>
                      <input type="text" class="form-control" id="tagTitle">
                    </div>
                    
                  </div>
                  <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= '<span class="labelButton">'.__('Cancel').' </span>'. $iconArrowBarUp ?></button>
                    <button type="button" class="btn btn-primary" id="btnAddTag"><?= '<span class="labelButton">'.__('Add Tag').' </span>'.$iconFileEarmarkPlus ?></button>
                  </div>
                </div>
              </div>
            </div>

            </small>
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
