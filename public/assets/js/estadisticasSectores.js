$(document).ready(function(){

  // Set new default font family and font color to mimic Bootstrap's default styling
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor  = '#858796';

  // Pie Chart Example
  var ctx = document.getElementById('myPieChart');

  if(ctx){

    $('#sectores').waitMe({
      effect   : 'bounce',
      text     : 'Cargando',
      maxSize  : '',
      color    : '#ad14c2',
      waitTime : -1,
      textPos  : 'vertical',
      fontSize : '',
      source   : '',
      onClose  : function(){}
  });

    $.ajax({
      type    : 'GET',
      url     : 'dashboard/productosMasVendidos',
      dataType: 'json',
    }).done(function(datos){ 

      $('#sectores').waitMe('hide');

      let productos  = [];
      let frecuencia = [];

      for (let i in datos){
        productos.push(datos[i].producto);
        frecuencia.push(datos[i].frecuencia);
      }

      var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels  : productos,
          datasets: [{
            data           : frecuencia,
            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#6610f2', '#fd7e14', '#858796', '#e74a3b'],
            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
            hoverBorderColor    : 'rgba(234, 236, 244, 1)',
          }],
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            backgroundColor: 'rgb(255,255,255)',
            bodyFontColor  : '#858796',
            borderColor    : '#dddfeb',
            borderWidth    : 1,
            xPadding       : 15,
            yPadding       : 15,
            displayColors  : false,
            caretPadding   : 10,
          },
          legend : {
            display : false
          },
          cutoutPercentage : 80,
        },
      });
    });
    
  }
  
});