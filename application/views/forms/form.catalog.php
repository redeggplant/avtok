<div class="row-fluid b-grey-box">
        <header>
            <hgroup class="page-header">
                <h1>Каталог сервисов</h1>
            </hgroup>
        </header>
        
        <form id="catalogForm" name="catalogForm" class="form-horizontal b-box-form" action="#">
            <fieldset class="span3">
                <select id="brand" name="brand" class="span12">
                    <option value="0">Все бренды</option>
                    <? foreach($brands as $brand) : ?>
                            
                            <option value="<?= $brand['id']; ?>"><?= $brand['name']; ?></option>
                            
                    <? endforeach; ?>
                </select>
                <label for="brand" rel="tooltip" title="Выберите бренд" id="l1">Бренд</label>
            </fieldset>
            <fieldset class="span6">
                <input id="address" class="span12" type="text" placeholder="Координаты. Пример: Москва, Ленинский проспект" name="address">
                <label for="address" rel="tooltip" title="Уважите координаты +37.00, -45.00" id="l2">Координаты <span class="info">(в формате Населенный пункт, улица.)</span></label>
            </fieldset>
            <fieldset class="span3">
                <select id="radiusSelect" name="radius" class="span12">
                    <option value="3">3 км</option>
                    <option value="5">5 км</option>
                    <option selected="selected" value="10">10 км</option>
                    <option  value="20">20 км</option>
                    <option  value="40">40 км</option>
                </select>
                <label for="radius" rel="tooltip" title="Выберите близжайший радиус" id="l3">В радиусе <span class="info">(от выбранных координат)</span></label>
            </fieldset>

            <fieldset class="form-action">
                <input id="searchInCatalogBtn" type="submit" value="Найти" class="btn btn-primary pull-right">
            </fieldset>
        </form>
       
</div>