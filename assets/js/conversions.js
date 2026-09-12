var options = {
  chart: {
    width: 300,
    type: "pie",
    animations: {
      enabled: true,
      easing: "easeinout",
      speed: 800,
    }
  },
  labels: ["Google", "Twitter", "Instagram", "YouTube", "Facebook"],
  series: [20, 34, 56, 25, 53],
  legend: {
    position: "bottom",
    fontSize: "13px",
    markers: {
      width: 12,
      height: 12
    }
  },
  dataLabels: {
    enabled: true,
    style: {
      fontSize: '13px'
    },
    formatter: function (val) {
      return val.toFixed(1) + "%";
    }
  },
  stroke: {
    width: 0
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return val + " visits";
      }
    }
  },
  fill: {
    type: 'gradient',
  },
  colors: ["#338dd7", "#42a1e9", "#52b5fb", "#63c9ff", "#7bdcff"],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 260
      },
      legend: {
        fontSize: "12px"
      }
    }
  }]
};

var chart = new ApexCharts(document.querySelector("#conversions"), options);
chart.render();