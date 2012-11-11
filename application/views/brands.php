<?// echo $statistic_form; ?>

<? //print_r($models) ?>

<? foreach($models as $model): ?>
        <a href="<?= $model->url;?>/"><?= $model->name;?></a>
<? endforeach; ?>