<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */

$iconEye="<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-eye' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z'/>
  <path fill-rule='evenodd' d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
</svg>";
$iconPencilSquare="<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-pencil-square' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg>";
$iconTrash="<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
</svg>";
$iconCheckSquare = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-check-square' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' d='M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
<path fill-rule='evenodd' d='M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z'/>
</svg>";
$iconCheck2Square = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-check2-square' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' d='M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z'/>
<path fill-rule='evenodd' d='M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z'/>
</svg>";
$iconSquare = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-square' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' d='M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
</svg>";
$iconArrowBarUp="<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-arrow-bar-up' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M11.354 5.854a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L8 3.207l2.646 2.647a.5.5 0 0 0 .708 0z'/>
  <path fill-rule='evenodd' d='M8 10a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-1 0v6.5a.5.5 0 0 0 .5.5zm-4.8 1.6c0-.22.18-.4.4-.4h8.8a.4.4 0 0 1 0 .8H3.6a.4.4 0 0 1-.4-.4z'/>
</svg>";


?>

<script>
  $(document).ready(function() {
    
    $('#dataTable').DataTable( {
    destroy: true,
    searching: true,
    paging:false,
    info:false,
    ordering: true,

    "oLanguage": {
      "sSearch": "<?= __('Search').':' ?>"
    },

} );

  } );
</script>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index'],['class'=>'nav-link active']) ?>
  </li>
  <li class="nav-item">
    <?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add'],['class'=>'nav-link']) ?>
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

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    
      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" class="tableHeadUnnecessaryReally"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" class="tableHeadUnnecessaryReally"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col" class="tableHeadUnnecessaryReally"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col" class="tableCeldUnnecessary"><?= $this->Paginator->sort('published') ?></th>
                <th scope="col" class="tableHeadUnnecessaryReally"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="tableHeadUnnecessaryReally"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td class="tableCeldUnnecessaryReally"><?= $this->Number->format($article->id) ?></td>
                <td class="tableCeldUnnecessaryReally"><?= $article->has('user') ? $this->Html->link($article->user->email, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></td>
                <td><?= h($article->title) ?></td>
                <td class="tableCeldUnnecessaryReally"><?= h($article->slug) ?></td>
                <td class="tableCeldUnnecessary"><?= ($article->published)?$iconCheckSquare:$iconSquare ?></td>
                <td class="tableCeldUnnecessaryReally"><?= h($article->created) ?></td>
                <td class="tableCeldUnnecessaryReally"><?= h($article->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<span class="labelButton">'.__('View').' </span>'.$iconEye, ['action' => 'view', $article->id], ['class'=>'btn btn-info', 'escape'=>false]) ?>
                    <?= $this->Html->link('<span class="labelButton">'.__('Edit').' </span>'.$iconPencilSquare, ['action' => 'edit', $article->id], ['class'=>'btn btn-warning', 'escape'=>false]) ?>
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?= '#deleteModalArticle_'.$article->id ?>">
                      <?= '<span class="labelButton">'.__('Delete').' </span>'.$iconTrash ?>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="<?= 'deleteModalArticle_'.$article->id ?>" tabindex="-1" role="dialog" aria-labelledby="<?= 'deleteModalArticle_'.$article->id.'Label' ?>" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="<?= 'deleteModalArticle_'.$article->id.'Label' ?>"><?= __('Delete') ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <?= __('Are you sure you want to delete # ').$article->id.'?'; ?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= '<span class="labelButton">'.__('Cancel').' </span>'.' ' . $iconArrowBarUp ?></button></button>
                            <?= $this->Form->postLink('<span class="labelButton">'.__('Delete').' </span>'.$iconTrash, ['action' => 'delete', $article->id], ['class'=>'btn btn-danger', 'escape'=>false]) ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
      </table>
      

      
      

      
      
   </div>
  </div>


</div> 


  <div class="card shadow mb-4">  
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">

                <?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>

              </div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
            
                <ul class="pagination">                    
                  <?= $this->Paginator->first(__('First')) ?>              
                  <?= $this->Paginator->prev(__('Previous')) ?>
                  <?= $this->Paginator->numbers() ?>
                  <?= $this->Paginator->next(__('Next')) ?>
                  <?= $this->Paginator->last(__('Last')) ?>
                </ul>
              
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


