var options = {
  series: [
    {
      name: 'Visitors',
      type: 'area',
      data: [70, 80, 90, 80, 90, 80, 90, 80, 90, 80, 90, 80]
    },
    {
      name: 'Conversions',
      type: 'line',
      data: [60, 70, 80, 70, 80, 70, 80, 70, 80, 70, 80, 70]
    },
    {
      name: 'Revenue',
      type: 'bar',
      data: [50, 60, 70, 60, 70, 60, 70, 60, 70, 60, 70, 60]
    }
  ],
  chart: {
    height: 380,
    type: 'line',
    toolbar: { show: false },
    fontFamily: 'Inter, Arial, sans-serif',
    foreColor: '#333'
  },
  colors: ["#2563eb", "#10b981", "#f59e42"],
  stroke: {
    width: [3, 3, 0],
    curve: 'smooth'
  },
  plotOptions: {
    bar: {
      columnWidth: '40%',
      borderRadius: 8
    }
  },
  fill: {
    type: ['gradient', 'solid', 'solid'],
    gradient: {
      shade: 'light',
      type: "vertical",
      shadeIntensity: 0.2,
      gradientToColors: ["#60a5fa", "#34d399", "#fbbf24"],
      opacityFrom: 0.5,
      opacityTo: 0.1,
      stops: [0, 90, 100]
    }
  },
  dataLabels: { enabled: false },
  legend: {
    show: true,
    position: 'top',
    horizontalAlign: 'right',
    fontSize: '14px',
    fontWeight: 500,
    markers: { radius: 12 }
  },
  xaxis: {
    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    labels: {
      style: { fontSize: '13px', fontWeight: 500 }
    },
    axisBorder: { show: false },
    axisTicks: { show: false }
  },
  yaxis: {
    labels: {
      style: { fontSize: '13px', fontWeight: 500 }
    },
    axisBorder: { show: false },
    axisTicks: { show: false }
  },
  grid: {
    borderColor: '#f1f5f9',
    strokeDashArray: 4,
    yaxis: { lines: { show: true } },
    xaxis: { lines: { show: false } }
  },
  tooltip: {
    theme: 'light',
    y: {
      formatter: function (val) {
        return val;
      }
    }
  }
};

var chart = new ApexCharts(document.querySelector("#visits-conversions"), options);
chart.render();