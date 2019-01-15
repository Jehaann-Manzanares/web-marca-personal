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
           color: '#4ebaf9'
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
      
      data: [80, 75, 60, 80, 89, 60],
      pointPlacement: 'on'
    }]
  
  });