// This is for able to see chart. We are using Apex Chart. U can check the documentation of Apex Charts too..
var options = {
  series: [
    {
      name: "Net Profit",
      data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
    },
    {
      name: "Revenue",
      data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
    },
    {
      name: "Free Cash Flow",
      data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
    },
  ],
  chart: {
    type: "bar",
    height: 250, // make this 250
    sparkline: {
      enabled: true, // make this true
    },
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "55%",
      endingShape: "rounded",
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"],
  },
  
  yaxis: {
    title: {
      text: "$ (thousands)",
    },
  },
  fill: {
    opacity: 1,
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return "$ " + val + " thousands";
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#apex1"), options);
chart.render();

// Sidebar Toggle Codes;

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");
var sidebarCloseIcon = document.getElementById("sidebarIcon");

function toggleSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add("sidebar_responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove("sidebar_responsive");
    sidebarOpen = false;
  }
}

//let buttonCheck = 1;
//buttonCheck = document.getElementById('buttonCheck');
//buttonCheck.addEventListener('click', event =>
//  buttonCheck = 0
//)
//

//console.log$('event');

$(document).ready(function(){
  console.log("jquery ok ?")
  
});

console.log('ca marche js ?');

//decalaration de variable pour l'activité des permissions et des boutons pour event
permButton = document.getElementsByClassName("checkbox");
permission
//selection de l'activite dans la base de données de l'activité des permissions
//si la valeur de l'activité des permissions est 0 (bool) et si on clique sur valider le formulaire
//alors la valeur passe a 1 dans la base de données et dans l'affichage
//sinon elle reste à 0 alors bouchon gris desactivé



