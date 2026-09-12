var options = {
  chart: {
    height: 315,
    type: "bar",
    toolbar: { show: false },
    fontFamily: 'Inter, sans-serif',
    animations: { enabled: true, easing: 'easeinout', speed: 700 }
  },
  dataLabels: { enabled: false },
  stroke: {
    show: true,
    width: 4,
    colors: ['transparent']
  },
  plotOptions: {
    bar: {
      columnWidth: "38%",
      borderRadius: 8,
      borderRadiusApplication: 'end',
      distributed: false,
    },
  },
  series: [
    {
      name: "Income",
      data: [12, 28, 35, 60, 80, 65, 90],
    },
    {
      name: "Expenses",
      data: [8, 18, 28, 40, 55, 50, 60],
    },
  ],
  grid: {
    borderColor: "#e9ecef",
    xaxis: { lines: { show: false } },
    yaxis: { lines: { show: true } },
    padding: { top: 10, right: 10, bottom: 10, left: 10 },
  },
  xaxis: {
    categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
    axisBorder: { show: false },
    axisTicks: { show: false },
    labels: {
      style: { colors: "#6c757d", fontSize: "13px", fontWeight: 500 }
    }
  },
  yaxis: {
    labels: {
      show: true,
      style: { colors: "#adb5bd", fontSize: "12px" }
    },
    min: 0,
    max: 100,
    tickAmount: 5
  },
  colors: ["#2563eb", "#f59e42"],
  markers: {
    size: 0,
    opacity: 0.5,
    colors: ["#2563eb", "#f59e42"],
    strokeColor: "#fff",
    strokeWidth: 2,
    hover: { size: 7 },
  },
  legend: {
    show: true,
    position: 'top',
    horizontalAlign: 'right',
    fontSize: '14px',
    fontWeight: 600,
    labels: { colors: "#495057" }
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return '$' + val + 'k';
      },
    },
    theme: 'dark',
    style: { fontSize: '14px', fontFamily: 'Inter, sans-serif' }
  },
};

var chart = new ApexCharts(document.querySelector("#income"), options);
chart.render();