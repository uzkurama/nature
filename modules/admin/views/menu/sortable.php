<?php

use kartik\sortable\Sortable;

$js = <<< JS
sortable('ul#w0.sortable.list',  {
    itemSerializer: (serializedItem, sortableContainer) => {
        return {
            position:  serializedItem.index,
            id: serializedItem.node.id
        }
    }
});


function sort_ajax(ser){
    $.ajax({
        method: 'post',
        url: '/admin/menu/save-sort',
        data: {
            sort: ser[0]['items']
        }
    });
}
JS;

$this->registerJs($js, \yii\web\View::POS_END);

?>

<div class="row">
    <div class="col-md-12">
        <h3><?= $lang;?></h3>
        <?= Sortable::widget([
            'showHandle' => true,
            'items' => $items,
            'pluginOptions' => [
                'forcePlaceholderSize' => true,
                'itemSerializer' => 'function (serializedItem, sortableContainer) {
                    return {
                        position:  serializedItem.index,
                        id: serializedItem.node.id
                    }
                }'
            ],
            'pluginEvents' => [
                'sortupdate' => 'function(e) {
                   ser = sortable("ul#w0.sortable.list", "serialize");
                   console.log(ser);
                   sort_ajax(ser);
                }',
            ],
        ]);?>
    </div>
</div>