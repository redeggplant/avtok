<div class="row-fluid b-grey-box">
    <header>
            <hgroup class="page-header">
                <h1>Калькулятор</h1>
            </hgroup>
    </header>
    
    <form id="catalogForm" action="/calculator/result" name="calculator" class="form-horizontal b-box-form" method="post" >
        <fieldset class="span5">
            <select name="brand" id="brand" class="span12"></select>
        </fieldset>    
        <fieldset class="span5">
            <select name="model" id="model" class="span12"></select>
        </fieldset>  
        <fieldset class="span2">
            <select name="series" id="year" class="span12"></select>
        </fieldset> 
        <div class="row-fluid mileage-box">
        
            
        </div>
    <input type="hidden" name="id_brand" value="<?= isset($id_brand) ? $id_brand :  0;  ?>" />
    <input type="hidden" name="id_model" value="<?= isset($id_model) ? $id_model :  0; ?>" />
    <input type="hidden" name="id_series" value="<?= isset($id_series) ? $id_series :  0; ?>" />
    <input type="hidden" name="year" value="<?= isset($year) ? $year :  0; ?>" />
    <input type="hidden" name="mileage" value="<?= isset($millage_val) ? $millage_val :  0; ?>" />
    <input type="hidden" name="to_number" value="" />
    </form>
</div>