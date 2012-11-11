    var
    alert_b = '<div class="alert alert-info">',
    alert_e = '</div>',
    alert_s1 = alert_b+'<h5>Шаг 1. Выберите бренд</h5>'+alert_e,
    alert_s2 = alert_b+'<h5>Шаг 2. Выберите модель</h5>'+alert_e,
    alert_s3 = alert_b+'<h5>Шаг 3. Выберите год</h5>'+alert_e;
    
    function id_check(name)
    {
        var id = $('input[name="'+name+'"]').val();    
        if(id)    
        {
            return id;
        }
    }
    
    function selectBrand(id){
               
                
                $.ajax({
                   type:"POST",
                   data: {id:id},
                   url: "/ajax/brand",
                   dataType: "json",
                   success: function(data)
                   {
                      var dropdown = '<option value="0">Выберите бренд</option>',select = '';
                     
                      $.each(data, function(i,item)
                      {
                        if(id == item.id)
                        {
                                select = 'selected="selected"';
                        }
                        else
                        {
                                select = '';
                        }
                        dropdown = dropdown + '<option '+select+' value="'+item.id+'">'+item.name+'</option>';
                      });
                      $('select[name=brand]').html(dropdown);
                      
                   }
                });
              
    }//function select model

    function selectModel(id,id_model){
    
           
           
           
            $.ajax({
               type:"POST",
               data: {id:id},
               url: "/ajax/model",
               dataType: "json",
               success: function(data)
               {
                  var dropdown = '<option value="0">Выберите модель</option>';
                  if(data == 666)
                  {
                    $('select[name=model]').attr('disabled','disabled');
                  }
                  else
                  {  
                      $.each(data, function(i,item)
                      {
                        if(id_model == item.id)
                            {
                                    select = 'selected="selected"';
                            }
                            else
                            {
                                    select = '';
                            }
                        dropdown = dropdown + '<option '+select+' value="'+item.id+'">'+item.name+'</option>';
                      });
                      $('select[name=model]').html(dropdown).removeAttr('disabled');
                  }
               }
            });
         
            
    }//function select model
 
    function selectSeries(id,year){
        
            $.ajax({
               type:"POST",
               data: {id:id},
               url: "/ajax/series",
               dataType: "json",
               success: function(data)
               {
                  var dropdown = '<option value="0">Выберите год</option>';
                    if(data == 666)
                    {
                        $('select[name=series]').attr('disabled','disabled');
                    }                    
                    else
                    {    
                      $.each(data, function(i,item)
                      {
                        for(i = item.year_start; i <= item.year_finish; i++)
                        {
                            if(year == i)
                            {
                                    select = 'selected="selected"';
                            }
                            else
                            {
                                    select = '';
                            }
                            dropdown = dropdown + '<option '+select+' data-year="'+i+'" value="'+item.id+'">'+i+'</option>';
                        }
                      
                      });
                      $('select[name=series]').html(dropdown).removeAttr('disabled');
                    }  
               }
            });
               
    }//function select model
    
    
    function selectMileage(id,millage)
	{
        
        if(id != 0)
        {
            var millage_val = '';
            
            $.ajax({
               type:"POST",
               data: {id:id},
               url: "/ajax/milage",
               dataType: "json",
               success: function(data)
               {
                  if(millage && millage != 0)
                  {
                    millage_val = millage;
                  }
                  else
                  {
                    millage_val = '24000';
                  }
                  $.each(data, function(i,item)
                  {
					step = item.step;
					max = item.max*step;
					min = item.min*step;
					scale = [];
                    for(i = item.min; i<=item.max; i++ )
					{
						scale.push(i);
					}
					
                  });
				  $('.mileage-box').html('<div id="jslider" class="span10" ><input id="slider" type="slider"  name="millage_val" value="'+millage_val+'" /></div><div class="span2"><input type="submit" class="btn btn-primary btn-large submit span12" value="Расчитать" /></div>');
				  jslider(min,max,scale,step);
					
                }
            });
        }
        else
        {
        $('.mileage-box').html(alert_s1);
        }     
    }//function select model
    
	function jslider(min,max,scale,step)
	{
	$('#slider').slider({
               from: min,
               to: max,
               step: 500,
               round: 1,
               scale: scale,
               dimension: '&nbsp;км',
               onstatechange: function( value )
               {
               var to_number = Math.ceil( value / step );
                //return to_number;
                $('input[name=to_number]').val(to_number);
               
               }
            });
	}
    
    /*function getLabors(mod_id,to_number)
    {
        $.ajax(
        {
        type:"POST",
        data: {mod_id:mod_id,to_number:to_number},
        url: "/ajax/labors",
        dataType: "json",
        success: function(data)
           {
            var name, labors = '';
            $.each(data, function(i,item)
                {
                name = item.name;
                labors = labors + '<li>'+name+'</li>'
                        
                });
                    $('#labors').html('<ol class="unstyled">'+labors+'</ol>');
                    
           }
        });   
    }*/
    
    
    function getPrice(mod_id,to_number)
    {
        $.ajax(
        {
        type:"POST",
        data: {mod_id:mod_id,to_number:to_number},
        url: "/ajax/price",
        dataType: "json",
        success: function(data)
           {
                //var price = '-.';
                if(data != 666)
                {
                        $.each(data, function(i,item)
                        {
                        price = item.price_value+'-.';
                        });        
                }
                else
                {
                    price = '-.';
                }
            $('#price_value').html(price);
            
           }
        });   
    }
    
    
    
    
    
    $(document).ready(function(){
        
        var id_brand = $('input[name="id_brand"]').val(),
            id_model = $('input[name="id_model"]').val(),
            id_series = $('input[name="id_series"]').val(),
            year = $('input[name="year"]').val(),
            millage = $('input[name="mileage"]').val(),
            mod_id = $('#modificationTab a:first').data('modification'), 
            to_number = $('#modificationTab .active a').data('tonumber');
        
        
        $('.tabbable a:first').tab('show');
        
        
        selectBrand(id_brand);
        selectModel(id_brand,id_model);
        selectSeries(id_model,year);
        selectMileage(id_series,millage);
        getPrice(mod_id,to_number);
       
        
        $('select[name=brand]').change(function()
        {
            id = $(this).val();
            //alert(id);
            selectModel(id);
            $('select[name=series]').html('').attr('disabled','disabled');
            $('input[name="id_brand"]').val(id);
            $('.mileage-box').html(alert_s2);
        });
        
        $('select[name=model]').change(function()
        {
            id = $(this).val();
            if(id == 0)
            {
                $('.mileage-box').html(alert_s2);
                $('select[name=series]').html('').attr('disabled','disabled');
            }
            else
            {
            selectSeries(id);
            $('input[name="id_model"]').val(id);
            $('.mileage-box').html(alert_s3);
            }
        });
        
        $('select[name=series]').change(function()
        {
            id = $(this).val();
            if(id == 0)
            {
               $('.mileage-box').html(alert_s3); 
            }
            else
            {
                year = $(this).find("option:selected").text();
                $('#jslider').html('');
                $('input[name="id_series"]').val(id);
                $('input[name="year"]').val(year);
                selectMileage(id);
            }
        });
        
        $('a[data-toggle="tab"]').on('shown', function (e) 
        {
            e.preventDefault();
            var mod_id = $(this).data('modification'), to_number = $(this).data('tonumber');
            getPrice(mod_id,to_number);
        });
        
        
		
		
        
    });