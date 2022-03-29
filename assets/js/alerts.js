function getData(idvalue, title){
	var refreshId = setInterval(function()
	{
	
    $.ajax({
        type: 'POST',
        url: 'notificationData.php',
        data: { id: idvalue},
      success: function (data) {
        if (data['value'] >= 3) {

          $.alert({
              type: 'red',
              title: title +' Increased',
              content: 'ALERT: Value is '+ data['value']+' Alert Message sent to Admin',
              autoClose: 'Close|5000',
              buttons: {
                Close: {
                    action: function () {}
              }    
            }
          });

        }
          else if (data['value'] < '0') {

          $.alert({
              type: 'red',
              title: title +' Decreased',
              content: 'ALERT: Value is '+ data['value'],
              autoClose: 'Close|5000',
            buttons: {
                Close: {
                    
                    action: function () {
                        
                    }
                }
                
            }
          });

        }
        
      }
    });
    return false;

}, 10000);

}
//getData("phvalue","Ph Value");

getData("turbidityvalue", " Turbidity Level");