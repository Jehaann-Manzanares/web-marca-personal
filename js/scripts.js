Highcharts.chart('container', {

    chart: {
      polar: true,
      type: 'line'
    },
  
    title: {
      text: '',
      x: -80
    },
  
    pane: {
      size: '80%'
    },
  
    xAxis: {
      categories: ['HTML5', 'CSS3', 'JS', 'UI',
        'UX', 'React.js'],
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
           color: '#fff'
        }
     },
    },
  
    tooltip: {
      
      pointFormat: '<b>{point.y:,.0f} %</b>'
    },
  
    legend: {
      align: 'right',
      y: 70,
      layout: 'vertical',
      
    },
  
    series: [{
      
      data: [60, 70, 80, 85, 79, 100],
      pointPlacement: 'on'
    }]
  
  });