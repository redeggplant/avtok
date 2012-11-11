<div class="row-fluid b-grey-light-box" id="serchCatalogRow">
    <div id="summary-wrapper">
		<div id="summary" class="page-header">
			<div class="car-name"><h2><?= $brand; ?> <?= $model; ?></h2><h4> 2003-2005 (E53)</h4></div>
			<div id="price"><h1>301 373 р <span style="color:#808080">&#x2015;</span></h1></div>
			<div id="descr">
				<div class="text">Стоимость владения автомобилем за 1 год. Складывается из следующих сумм</div>
				<div class="button-place">
				<button class="btn btn-primary pull-right">Посмотреть цены на Pingola.ru</button>
				</div>
			</div>
		</div>
		<div id="photo">
			<img src="img/auto.png" />
		</div>
    </div>
    <pre>
    <? //print_r($dues); ?>
    </pre>
    
    <div id="model-teb-set" class="tabbable">
					<ul > 
                      <? foreach($series as  $year) : ?>      
                        <li class=""><a  href="#tab<?= $year->id; ?>" data-toggle="tab" ><?= $brand; ?> <?= $model; ?> <?= $year->year_start; ?>-<?= $year->year_finish; ?></a></li> 
                      <? endforeach; ?>  
					</ul>  
					<div id="tab-content" class="tab-content">
                        <? foreach($dues as  $k=>$dueis) : ?> 
                        
                        <div class="tab-pane" id="tab<?= $k; ?>">
                        
                            <table cellspacing="0" class="calculation-table">
                                <tr class="header">
                                    <th class="text">Расход</th>
                                    <th class="numbers">Рублей в год</th>
                                </tr>
								<? foreach($dueis as $due):?>
									<tr class="first-row">
                                    <td><?= $due['name']; ?><img src="img/warn.png" /></td>
                                    <td class="numbers"><?= $due['due_value']; ?></td>
									</tr>
									
								<? endforeach; ?>
                                
                               
                            </table>
                        </div>
                        <? endforeach; ?> 
						<div id="show-more-square">
							<p>Всего работ для</p>
							<p class="model">BMW X5</p>
							<p>2003 - 2005 (E53)</p>
							<p class="big-number">41</p>
							<div id="tenPlus" class="next-more">
								<a class="btn btn-primary" href="#">Показать работы</a>
							</div>
						</div>
					</div>
				</div>
	</div>
    


</div>