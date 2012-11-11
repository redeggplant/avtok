<div class="row-fluid b-grey-box">
				<h3>Статистика</h3>
				<!--<form id="catalogForm" class="form-horizontal b-box-form">
					<fieldset class="span5">
						<select id="brand" class="span12">
						  <option value="">BMW</option>
						  <option value="">Saab</option>
						  <option value="">Mercedes</option>
						  <option value="">Audi</option>
						</select>
					</fieldset>
					<fieldset class="span5">
						<select id="brand" class="span12">
						  <option value="">X5</option>
						  <option value="">X6</option>
						</select>
					</fieldset>
					<fieldset class="span2">
						<select id="brand" class="span12">
						  <option value="">2012</option>
						  <option value="">2011</option>
						  <option value="">2002</option>
						  <option value="">2000</option>
						</select>
					</fieldset>

					<div id="logos">
                        
						<img src="img/180px-Renault_logo.svg.png" />
						<img src="img/225px-Lexus_division_emblem.svg.png" />
						<img src="img/audi2.png" />
						<img src="img/bmw3.png" />
						<img src="img/cadillac.png" />
						<img src="img/ford2.png" />
						<img src="img/honda.png" />
						<img src="img/hyundai.png" />
						<img src="img/kia.png" />
						<img src="img/mitsubishi.png" />
						<img src="img/peugeot.png" />
						<img src="img/suzuki.png" />
						<img src="img/toyota.png" />
						<img src="img/volkswagen.png" />
						<img src="img/volvo.png" />
						<img src="img/toyota.png" />
						<img src="img/volkswagen.png" />
						<img src="img/volvo.png" />
					</div>
					<fieldset class="form-action">
						<input  id="searchInCatalogBtn" type="submit" value="Показать" class="btn btn-primary pull-right">
					</fieldset>
				</form>-->
                <div id="logos">
                    <? foreach($brands as $brand): ?>
                        <a href="/<?= $brand->url; ?>/"><?= $brand->name; ?></a>
                    <? endforeach; ?>
                </div>
			</div>