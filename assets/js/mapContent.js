
var ph = "";
var tdx = " ";
function initMap() {
    
          var pos = { lat: 33.747241, lng: 73.137321 };
          var pos1 = { lat: 33.747090, lng: 73.135444 };
          var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 19,
              center: pos
          });
   var computerscience=
              '<div id="content" style="background-color:#132F51; color:white;">' +
                  '<div id="bodyContent">' +
                    '<div style=" text-align:center;border:2px solid #eee; box-shadow:0px 3px 3px #ccc; color:#132F51;background-color:#2CA8FF; padding:2px;">' +
                    '<h2 id="firstHeading" class="firstHeading">Department Of Computer Science </h2>' +
                    '<h3>Water Quality Status</h3> ' +
                    '</div>'+
                    '<h4>Water PH: </h4> '+
                    '<h4>Turbidity : NTU</h4> '+
                    '<h4>Total Dissloved Solids(TDS) :  mg/liter</h4> '+
                    '<h4>Water Temperature :     &#8451</h4> '+
                    '<h4><Strong>______________________________________________________________</Strong></h4>' +
                    '<h4><Strong>Status :Getting Data......</Strong></h4> ' +
                  '</div>'+     
             '</div>'
             

 var infowindowCs = new google.maps.InfoWindow({
              content: computerscience
          });
     
          var CSmarker= new google.maps.Marker({
              position: pos,
              map: map,
              title: 'Water Quality Status (WQM)'
          });

         CSmarker.addListener('click', function () {
              infowindowCs.open(map, CSmarker);

 var refreshId = setInterval(function()
{
    $.ajax({

      'url': "mapData.php",
      'method': 'POST',
      'cache': false,
      'contentType': false,
      'processData': false,
      'dataType': 'json',

      success: function (data) {
        //console.log(data);
       $.each(data, function(k, v) {
        ph=data['ph'];
        turbidity=data['trb'];
        tds=data['tds'];
        temperature=data['temp'];
       if ((ph >=6.5 || ph<=8.5) && turbidity<=2 && tds<400) {
      
     infowindowCs.setContent(
                            '<div id="content" style="background-color:#132F51; color:white;">' +
                              '<div id="bodyContent">' +
                                '<div style=" text-align:center;border:2px solid #eee; box-shadow:0px 3px 3px #ccc; color:#132F51;background-color:#2CA8FF; padding:2px;">' +
                                  '<h2 id="firstHeading" class="firstHeading">Department Of Computer Science </h2>' +
                                  '<h3>Water Quality Status</h3> ' +
                                  '</div>'+  
                                  '<h4>Water PH: ' +ph+'</h4> '+
                                  '<h4>Turbidity : '+turbidity+' NTU'+'</h4> '+
                                  '<h4>Total Dissloved Solids(TDS) : '+tds+' mg/liter'+'</h4> '+ 
                                  '<h4>Water Temperature : '+temperature+' &#8451</h4> '+
                                  '<h4><Strong>______________________________________________________________</Strong></h4>' +
                                  '<h4><Strong>Status : Water is Safe to Drink</Strong></h4> ' +
                              '</div>'+     
                            '</div>'
     	);
     }
     else  {
     
     infowindowCs.setContent(
                  '<div id="content">' +
                              '<div id="siteNotice">' +
                              '</div>'+
                                ' <h1 id="firstHeading" class="firstHeading">Department Of Computer Science </h1>' +
                                  '<div id="bodyContent">' +
                                  '<h3><b>Water Quality Status</h3> ' +
                                  '---------------------------------------------------------------'+
                                 '<h4>Water PH: ' +ph+  '</h4> '+
                                 '<h4>Turbidity : ' +turbidity+' NTU'+'</h4> '+
                                 '<h4>Total Dissloved Solids(TDS) : '+tds+'mg/liter'+'</h4> '+ 
                                 '<h4>--------------------------------------------------------------</h4>' +
                                 '<h4>Status : Water is not Drinkable</h4> ' +
                            '</div>'+     
                      '</div>' +
                    '</div>'
      			);
    	     }
          }); 
        }
    });
    return false;

}, 5000);
          });



    //        var IT =
    //           '<div id="content">' +
    //           '<div id="siteNotice">' +
    //           '</div>' +
    //             ' <h1 id="firstHeading" class="firstHeading">Department Of Information Tecnology </h1>' +
    //               '<div id="bodyContent">' +
    //               '<h3><b>Water Quality Status</h3> ' +
    //               '---------------------------------------------------------------' +
    //              '<h4>Water PH:      8</h4> ' +
    //              '<h4>Turbidity :   1  NTU </h4> ' +
    //              '<h4>Total Dissloved Solids(TDS) :  350 mg/liter </h4> ' +
    //              '---------------------------------------------------------------' +
    //              '<h4>Status : Safe to Drink</h4> ' +
    //         '</div>' +
    //   '</div>' +
    // '</div>';

         
  // var infowindowIT = new google.maps.InfoWindow({
          //     content: IT
          // });
          // var ITmarker = new google.maps.Marker({
          //     position: pos1,
          //     map: map,
          //     title: 'Water Quality Status (WQM)'
          // });
          // ITmarker.addListener('click', function () {
          //     infowindowIT.open(map, ITmarker);
          // });

          
      }
