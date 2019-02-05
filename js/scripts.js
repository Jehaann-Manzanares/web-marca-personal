Highcharts.chart('container', {

    chart: {
      polar: true,
      type: 'line'
    },
  
    title: {
      text: '',
      x: 80
    },
  
    pane: {
      size: '80%'
    },
  
    xAxis: {
      categories: ['HTML5', 'CSS3', 'JS', 'UI',
        'BD', 'PHP'],
      tickmarkPlacement: 'on',
      lineWidth: 0,
      labels: {
        style: {
           color: '#fff'
        }
     },
     
    },
  
    yAxis: {
      gridLineInterpolation: 'polygon',
      lineWidth: 0,
      min: 0,
      labels: {
        style: {
           color: '#4ebaf9'
        }
     },
    },
  
    tooltip: {
      
      pointFormat: '<b>{point.y:,.0f} %</b>'
    },
  
    legend: {
      align: 'right',
      y: 80,
      layout: 'vertical',
      
    },
  
    series: [{
      
      data: [80, 75, 65, 80, 80, 70],
      pointPlacement: 'on'
    }]
  
  });