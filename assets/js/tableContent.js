

  $(document).ready(function(){

   $('#phTable').DataTable({
      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
          'url':'phtableData.php'
      },
      'columns': [
         { data: 'id' },
         { data: 'phvalue' },
         { data: 'tempvalue' },
         { data: 'reading_time' }
       
      ]
   });


});



  $(document).ready(function(){

   $('#trbtdsTable').DataTable({
      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
          'url':'trbtdsData.php'
      },
      'columns': [
         { data: 'id' },
         { data: 'turbidityvalue' },
         { data: 'tdsvalue' },
         { data: 'reading_time' }
       
      ]
   });


});

