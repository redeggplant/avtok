var map, geoResult, url = 'avtology.com'; 
ymaps.ready(init,geoCode);

/* Создание экземпляра карты и его привязка 
   к контейнеру с id="YMapsID" */
function init() {
           var myMap = new ymaps.Map("YMapsID", {center: [55.765432, 37.644321],zoom:11, behaviors: ["scrollZoom","drag",'multiTouch'], type: "yandex#map"  });           
           //Добавляем элементы управления	
			 myMap.controls
                // Кнопка изменения масштаба
                .add('zoomControl')
                // Список типов карты
                .add('typeSelector')
                 // Стандартный набор кнопок
                .add('mapTools')	
				//Линейка масштаба
				 .add(new ymaps.control.ScaleLine())
				 //Обзорная карта, с заданным типом
				 .add(new ymaps.control.MiniMap({
                    type: 'yandex#publicMap'
                }));
           
           var address = $("input[name=address]").val();
           
           var myCollection = new ymaps.GeoObjectCollection();
           //myGeoObjects = [];
           
           var myPoint = new ymaps.GeoObjectCollection();
           
           var brand = $("select[name=brand]").val();           
           
           var radius = $("#radiusSelect option:selected").val();
           
           var recPerPage = 5,startRec = 0,endRec = 5;
           
           if (address == ''){
                    address = 'Москва';
                    $("input[name=address]").val(address);
          }
             
 
        showAddress (myMap,address,myCollection,myPoint,radius, startRec, endRec, brand);
          

          //$("#serchCatalogRow").spin(false); 
          
          $('#tenPlus a').live('click',function(e){
                 e.preventDefault();   
                 var radius = $("#radiusSelect option:selected").val();
                 var brand = $("select[name=brand]").val();  
                 var address = $("input[name=address]").val();
                 var startRec = $(this).data('start')+5;
                 var endRec = 5;
                 myCollection.removeAll();
                 myPoint.remove(point);
                 showAddress (myMap,address,myCollection,myPoint, radius, startRec, endRec, brand);
           
          });
          
                      
           $('form[name=catalogForm]').submit( function(){
              //var address = 'Мытищи';
               var radius = $("#radiusSelect option:selected").val();
               var address = $("input[name=address]").val();
               var brand = $("select[name=brand]").val();  
               if (address == ''){
                    address = 'Москва';
                    $("input[name=address]").val(address);
               }
                myCollection.removeAll();
                myPoint.remove(point);
                showAddress (myMap,address,myCollection,myPoint, radius, startRec, endRec, brand);
                return false;
               
        
            });
       
}


function showAddress (myMap,address,myCollection,myPoint,radius, startRec, endRec,brand) {
    var myGeocoder = ymaps.geocode(address, {boundedBy: myMap.getBounds(),strictBounds: false, results: 1});
    var zoom = $("#radiusSelect option:selected").data('zoom');    
     
    // Результат поиска передается в callback-функцию
        myGeocoder.then(
            function (res) {
                
                if (res.geoObjects.getLength()) {
                    // point - первый элемент коллекции найденных объектов
                  
                  //$("#mainCatalogList").spin();  
                  point = res.geoObjects.get(0);
              
                  myPoint.add(point);
                  center = point.geometry.getCoordinates();
                  myMap.geoObjects.add(myPoint);
                  myMap.panTo(center);
                  palceMarkers(myMap,center,radius,address,myCollection, startRec, endRec,brand); 
                                    
                }
            },
           
           // Обработка ошибки
            function (error) {
                alert("Возникла ошибка: " + error.message);
            }
        )
        
}
function palceMarkers(myMap,center,radius,address,myCollection, startRec, endRec,brand){
       

        
 $.ajax({
                        url:'/ajax/catalog',
                        type: "POST",
                        dataType: "json",
                        beforeSend: function(){//$("#mainCatalogList").spin();
                        },
                        data: {center:center,radius:radius, startRec:startRec , endRec:endRec,brand:brand},
                        success: function(data) {
                        
                         if(data.status == 666){
                            $('#mainCatalogList').html('<div class="alert"><button class="close" data-dismiss="alert">×</button> <strong>Warning!</strong> к сожалению по вашему запросу ничего найти не удалось... Попробуйте увеличить радиус поиска</div>'); 
                            //alert('nothing');
                         }else{
                                
                                var markers = data.markers;
                                var lengh = data.length;
                                var start = data.startRec;
                                var stop = lengh - start;
                                var ostatok =  stop-5;       
                                var catHead = '<header data-lengh="'+ lengh +'" class = "page-header"><h1>Cервисов <span class="info">'+ lengh +'</span>  в радиусе <span class="info">'+radius+'</span> км от <span class="info">'+address+'</span> </h1></header>';         
                                var tenPlus = "";
                                if (stop > 5){
                                var tenPlus = '<div id="tenPlus" class="next-more"><a class="btn btn-primary" href="#" data-start="'+start+'">показать еще...</a></div>';
                                }
                                catItems =  markersList(markers, myCollection,myMap,radius,address);
                                
                                $('#mainCatalogList').html(catHead+catItems+tenPlus);
                               
                                            }//end else       
                            
                                        }//end success                            
                            
        });
        

}

function markersList(markers,myCollection,myMap,radius,address){
             //console.log(startRec,endRec);
             var catItems = "";
            
              /*$.each(markers.brands, function(j, brand){
                
              }*/
                  
             
              $.each(markers, function(i,marker){
                    
                    
                    var myMarkers = new ymaps.Placemark([marker.lng, marker.lat],{iconContent: marker.num,balloonContent: marker.name});   
                    
                    myCollection.add(myMarkers);
                    
                    myMap.geoObjects.add(myCollection);
                    var catItemBrands = ''; 
                    
                    /*myGeoObjects.push(myMarkers);
                    clusterer = new ymaps.Clusterer();
                    clusterer.add(myGeoObjects);
                    myMap.geoObjects.add(clusterer);*/
                    if(!marker.brands){
                        catItemBrands = '';      
                    }else{
                    catItemBrands = '<div class="span3">';
                    catItemBrandsText = '<ul class="unstyled info-block brand-list-text">';
                    catItemBrandsImg = '<ul class="unstyled info-block brand-list-img">';
                        $.each(marker.brands, function(j, brand){
                                catItemBrandsImg = catItemBrandsImg + '<li><a href="'+url+'/'+brand.brand+'/"><img src="'+url+'/pics/brand_logos/'+brand.logo+'" height="60" width="60"></a></li>';
                                catItemBrandsText = catItemBrandsText+'<li><a href="'+url+'/'+brand.brand+'/">'+brand.name+'</a></li>'; 
                            });
                    catItemBrandsImg = catItemBrandsImg + '</ul>';         
                    catItemBrandsText = catItemBrandsText + '</ul>';        
                    catItemBrands = catItemBrands+catItemBrandsImg+catItemBrandsText+'</div>';    
                        
                        
                    }
                 
                    
                      openHours = '<div class="span12 info-block"><span class="title">Режим работы:</span><table><tr><td>Пн-Пт: &nbsp;</td><td>10.00 - 21.00</td></tr><tr><td>Сб:&nbsp;</td><td>11.00 - 18.00</td></tr><tr><td>Вс:&nbsp;</td><td>выходной</td></tr></table></div>';
                      contcts = '<ul class="span12 info-block"><li>'+marker.phones+'</li></ul><ul class="span12 unstyled info-block"><li>'+marker.sites+'</li><li>'+marker.email+'</li></ul>';
                    
                     catItems = catItems+ '<li><span class="badge badge-info pull-left">'+marker.num+'</span><div class="span8"><header><h2><a href="'+url+'/catalog/id'+marker.id+'/?adr='+marker.aid+'">'+marker.business_name+'</a></h2></header><address>'+marker.city+'<br>'+marker.street+' <br>Расстояние &cong;'+marker.distance+' км </address><button class="btn btn-mini btn-primary next-address">Еще адреса</button>'+openHours+''+contcts+'</div>'+catItemBrands+'</li>';
              
              });
               
            catItems = '<ol class="unstyled b-service-list row-fluid">'+catItems+'</ol>';
           
        return catItems; 
}




/*---+++ My location Test ++++---*/
function showLocation(position) {
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;
  
  //alert("Latitude : " + latitude + " Longitude: " + longitude);
  geoCode (latitude,longitude);
}
 
function errorHandler(err) {
  if(err.code == 1) {
    alert("Error: Access is denied!");
  }else if( err.code == 2) {
    alert("Error: Position is unavailable!");
  }
}
function getLocation(){
 
   if(navigator.geolocation){
      // timeout at 60000 milliseconds (60 seconds)
      var options = {timeout:60000};
      navigator.geolocation.getCurrentPosition(showLocation, 
                                               errorHandler,
                                               options);
   }else{
      alert("К сожалению ваш браузер не поддерживает геолокацию:(");
   }
}

function geoCode (latitude,longitude) {
            var coords = [latitude, longitude];
            ymaps.geocode(coords).then(function (res) {
                    var names = [];
                    res.geoObjects.each(function (obj) {
                        names.push(obj.properties.get('text'));
                    });
                    $('input[name=address]').val(names[0]);
                   
            
            });
          
        }

$(document).ready(function(){
              //$("#serchCatalogRow").spin(); 
              $('#myCoords').click(function(e){
                        e.preventDefault();
                    //  alert('sss');      
                    getLocation();
              
              });
              
              $("input[name=address]").focus(function(){
                        
                        var adr = $(this).val();
                        if(adr == ''){
                            $(this).val($(this).data('adr'));
                        }
              
              });
             
              /*$('a[rel=tooltip]').tooltip();  */
              
              $('#l1,#l2,#myCoords').tooltip({'placement':'bottom'});  
              
});