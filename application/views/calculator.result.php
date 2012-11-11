<? echo $calculator_form; ?>
<div class="row-fluid b-grey-light-box">
    <div class="row-fluid">
         <section class="span6 page-header calculator-header ">
                <h1 class="c-model"><?= $brand; ?> <?= $model; ?> <?= $year; ?> <span>(E53)</span></h1>
                <h2 class="c-range">Пробег: <?= $millage_val; ?> км</h2>
                <h3 class="c-nearest">Ближайшее ТО - при пробеге <?= $millage_val; ?> км (ТО №<?= $to_number; ?>)</h3>
         </section>
         <section class="span3 page-header calculator-header price-block ">
                <h2 class="c-price">Средняя цена</h2>
                <h3 id="price_value" class="c-price-value"> </h3>
                <p class="c-span-text">цену уточняйте<br>у представителей сервиса</p>
                <a href="#" class="btn btn-primary"><i class="icon-wrench" style="f"></i>&ensp;Перейти в каталог</a>
        </section>

        <section class="span3 c-preview">
                <img src="<?= $series['img'] ?>">
        </section>
    </div>
    <div class="row-fluid tabbable">
        <ul id="modificationTab" class="nav nav-tabs">
            
            <? foreach($modification as $mod) : ?>
                    <li>
                    <a data-toggle="tab" href="#tab<?= $mod['id']; ?>" class="modification" data-modification="<?= $mod['id']; ?>" data-tonumber = "<?=$to_number; ?>">
                    <? if (($mod['year'] || $mod['trtype'] || $mod['name_wt']) == '') : ?>
                        Для всех модификаций
                    <? elseif($mod['year'] != ''): ?>
                        Для всех модификаций <?= $mod['year']; ?>
                    <? else: ?>
                    <?= $mod['trtype']; ?>
                    <?= $mod['name_wt']; ?>
                    <?//= $mod['id_series']; ?>
                    <?//= $mod['id']; ?>
                    <? endif; ?>
                    </a>
                    </li>
            <? endforeach; ?>
        </ul>
        <div id="labors" class="tab-content service-work">
              <? foreach($labors as $key=>$i) : ?>
                        <div id="tab<?= $key; ?>" class="tab-pane">
                            <div class="row-fluid">
                                <ol class="unstyled">
                                <? foreach($i as $lab) : ?>
                                    
                                        <li><?= $lab['name']; ?></li>
                   
                                <? endforeach; ?>
                                </ol>
                            </div>    
                        </div>
                        
                        
              <? endforeach; ?>
        </div
        
        
    </div>
</div>