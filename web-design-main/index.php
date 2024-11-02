<html>
    <head>
        <title>Web Design By Gifari</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" href="image/logo.png" class="logo-tab">
        
        <!-- FILE CSS $ BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css"/>
        <!-- JS CHART DARI ANYCHART -->
        <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-core.min.js"></script>
        <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-pie.min.js"></script>
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
        <!-- LINK ICON DARI FLATICON -->
        <!-- https://www.flaticon.com/icon-fonts-most-downloaded -->
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
        <style>
            .displayicon{
                display: none;
                transition: ease-in-out 10.5s;
            }
        </style>
    </head>
    <body>
        <div class="main-container">
        <nav class="sidebar">
            <!-- LOGO MENU -->
            <div class="logo-container">
                <div class="logo-image">
                    <img src="image/logo.png" alt="logo">
                </div>
                <div class="logo-text-container">
                    <span class="logo-text">mgfamlh_</span>
                    <span class="logo-text-skill">Web Developer</span>
                </div>
            </div>

            <!-- LIST MENU -->
            <div class="menu-container">
                <div class="menu-list">
                    <div class="list-item active" onclick="displaymenu1()" id="menu1">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="text-menu">Dashborard</span>
                    </div>
                    <div class="list-item" onclick="displaymenu2()" id="menu2">
                        <i class="fi fi-rs-users-alt customer-icon"></i>
                        <span class="text-menu">Customer</span>
                    </div>
                    <div class="list-item" onclick="displaymenu3()" id="menu3">
                        <i class="fi fi-rr-apps stats-icon"></i>
                        <span class="text-menu">Menu</span>
                    </div>
                    <div class="list-item" onclick="displaymenu4()" id="menu4">
                        <i class="fi fi-rr-chart-histogram stats-icon"></i>
                        <span class="text-menu">Analiytics</span>
                    </div>
                    <div class="list-item" onclick="displaymenu5()" id="menu5">
                        <span class="material-symbols-outlined">settings</span>
                        <span class="text-menu">Setting</span>
                    </div>
                </div>

                <div class="menu-bottom">
                    <div class="list-item-toggle">
                        <span class="material-symbols-outlined" id="iconid-dark" style="font-weight: bold;">bedtime</span>
                        <span class="material-symbols-outlined displayicon" id="iconid-light" style="font-weight: bold;">light_mode</span>
                        <span class="text-menu-toggle">Dark Mode</span>
                        <div class="toggle-switch item">
                            <span class="switch"></span>
                        </div>
                    </div>
                    <div class="list-item">
                        <i class="fi fi-rs-sign-out-alt stats-icon" style="transform: rotateY(180deg); font-weight: bold;"></i>
                        <span class="text-menu">Logout</span>
                    </div>
                </div>
            </div>
        </nav>

        <section class="body-content">
            <div class="header">
                <div class="name-app">
                    <i class="fi fi-br-menu-burger burger-icon"></i>
                    <span>Web Application</span>
                </div>
                <div class="user-label">
                    <span class="material-symbols-outlined notif-icon">notifications</span>
                    <img src="image/cat.jpeg" class="user-icon"></i>
                    <span class="username-text">-Uhuy5010-</span>
                    <!-- fi fi-rs-circle-user #5e58ff -->
                </div>
            </div>
            <div class="content-container-body">
                <div class="container-card">
                    <div class="card-item">
                        <div class="card-item-in">
                            <div class="card-item-icon" style="background-color: #fd9359;">
                                <i class="fi fi-rr-file-invoice"></i>
                            </div>
                            <div class="card-item-container-text">
                                <span class="card-item-title">1,120</span>
                                <span class="card-item-sub">Orders Today</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-item-in">
                            <div class="card-item-icon" style="background-color: #e86287;">
                                <i class="fi fi-rs-users"></i>
                            </div>
                            <div class="card-item-container-text">
                                <span class="card-item-title">334</span>
                                <span class="card-item-sub">Avg. Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-item-in">
                            <div class="card-item-icon" style="background-color: #59bef2;">
                                <i class="fi fi-rr-arrow-trend-up"></i>
                            </div>
                            <div class="card-item-container-text">
                                <span class="card-item-title">$14,589</span>
                                <span class="card-item-sub">Avg. Revenue</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card-item">
                        <div class="card-item-in">
                            <div class="card-item-icon" style="background-color: #59bef2;">
                            <i class="fi fi-rr-arrow-trend-up"></i>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="content-container">
                    <div class="stats-card">
                        <div class="label-stats-container">
                            <span class="label-stats">Revenue</span>
                            <span class="label-year" style="font-weight: 500;">Year &nbsp;<span style="font-weight: 600;">2023</span></span>
                        </div>
                        <span class="custom-hr"></span>
                        <canvas id="myLineChart"></canvas>
                    </div>
                    <div class="account-card">
                        <span class="label-account">Customers Info</span>
                        <span class="custom-hr"></span>
                        <div class="dough-container">
                            <div id="container"></div>
                            <div style="height:250px; width:250px; display:flex; align-items: center; justify-content: center;"><canvas id="myDoughnutChart"></canvas></div>
                        </div>
                    </div>
                </div>

                <div class="content-container">
                    <div class="staff-card">
                        <span class="label-staff">Restaurant Staff</span>
                        <div class="txt-staff">
                            <div>
                                <i class="fi fi-bs-user icon-staff" style="color: #0D6EFD;"></i>
                                <span>Manager</span>
                            </div>
                            <span>1</span>
                        </div>
                        <div class="txt-staff">
                            <div>
                                <i class="fi fi-br-hat-chef icon-staff" style="color: #0D6EFD;"></i>
                                <span>Chef</span>
                            </div>
                            <span>4</span>
                        </div>
                        <div class="txt-staff">
                            <div>
                                <i class="fi fi-br-restaurant icon-staff" style="color: #0D6EFD;"></i>
                                <span>Cooks</span>
                            </div>
                            <span>6</span>
                        </div>
                        <div class="txt-staff">
                            <div>
                                <i class="fi fi-br-room-service icon-staff" style="color: #0D6EFD;"></i>
                                <span>Waiter</span>
                            </div>
                            <span>10</span>
                        </div>
                    </div>

                    <div class="trending-card">
                        <span class="label-trending">Trending Orders</span>
                        <div class="trending-container">
                            <div class="trending-image">
                                <img src="https://i.pinimg.com/564x/43/65/55/4365550c6283cda2152ba3495b8e2023.jpg" alt="logo">
                            </div>
                            <div class="trending-container-txt">
                                <span>Cashew Chicken</span>
                                <div>
                                    <span class="order-txt">Orders</span>
                                    <span class="jml-order">204</span>
                                </div>
                            </div>
                        </div>

                        <div class="trending-container">
                            <div class="trending-image">
                                <img src="https://i.pinimg.com/564x/c7/80/9e/c7809ec4938f628733537193445f3736.jpg" alt="logo">
                            </div>
                            <div class="trending-container-txt">
                                <span>Garlic Pepper Beef</span>
                                <div>
                                    <span class="order-txt">Orders</span>
                                    <span class="jml-order">187</span>
                                </div>
                            </div>
                        </div>

                        <div class="trending-container">
                            <div class="trending-image">
                                <img src="https://i.pinimg.com/564x/1c/10/00/1c1000b4223b45334a4774d5833cfb1d.jpg" alt="logo">
                            </div>
                            <div class="trending-container-txt">
                                <span>Miso Butter</span>
                                <div>
                                    <span class="order-txt">Orders</span>
                                    <span class="jml-order">132</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="account-card-fix">
                        <div class="user-account">
                            <img src="image/cat.jpeg" alt="account">
                            <span class="user-account-label">-Uhuy5010-</span>
                            <span class="user-account-sub">Manager</span>
                        </div>
                        <div class="container-account-txt">
                            <span class="user-account-txt-phone">
                                <span style="display: flex; align-items: center; width: 110px;">
                                    <i class="fi fi-br-phone-flip phone-icon"></i>
                                    <span style="color: var(--text-color2);">Phone</span>
                                    <span style="margin-left: 20px; font-family: 'Montserrat', sans-serif;">:</span>
                                </span>
                                <span style="margin-left: 10px; width: 150px;">086542776532</span>
                                <!-- <span>
                                    <span>086542776532</span>
                                </span> -->
                            </span>
                            <span class="user-account-txt-mail">
                                <span style="display: flex; align-items: center; width: 110px;">
                                    <i class="fi fi-br-envelope mail-icon"></i>
                                    <span style="color: var(--text-color2);">Email</span>
                                    <span style="margin-left: 20px; font-family: 'Montserrat', sans-serif;">:</span>
                                </span>
                                <span style="margin-left: 10px; width: 150px;">uhuy@gmail.com</span>
                                <!-- <span>
                                    <span>uhuy@gmail.com</span>
                                </span> -->
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // var testing = document.querySelector(".list-item");
            // testing.classList.remove('active');
            // console.log(testing);
            function displaymenu1() {
                 var remove = document.querySelector(".active");
                 remove.classList.remove('active');
                 var menu1 = document.getElementById("menu1");
                 menu1.classList.add('active');
            }
            function displaymenu2() {
                 var remove = document.querySelector(".active");
                 remove.classList.remove('active');
                 var menu2 = document.getElementById("menu2");
                 menu2.classList.add('active');
            }
            function displaymenu3() {
                 var remove = document.querySelector(".active");
                 remove.classList.remove('active');
                 var menu3 = document.getElementById("menu3");
                 menu3.classList.add('active');
            }
            function displaymenu4() {
                 var remove = document.querySelector(".active");
                 remove.classList.remove('active');
                 var menu4 = document.getElementById("menu4");
                 menu4.classList.add('active');
            }
            function displaymenu5() {
                 var remove = document.querySelector(".active");
                 remove.classList.remove('active');
                 var menu5 = document.getElementById("menu5");
                 menu5.classList.add('active');
            }
        </script>
        <script>
            //JQUERY UNTUK TOGGLE
            var icon_light = document.getElementById('iconid-light');
            var icon_dark = document.getElementById('iconid-dark');
            const body = document.querySelector('body'),
            modeSwitch = body.querySelector(".toggle-switch"),
            toggletxt  = body.querySelector(".text-menu-toggle");
            // icon_dark = document.getElementById('iconid-dark');
            // line  = body.getElementById('myLineChart');
            // console.log(line);
            // line = $("#myLineChart");
            modeSwitch.addEventListener("click" , () =>{
                body.classList.toggle("darkuhuy");
                if(body.classList.contains("darkuhuy")){
                    toggletxt.innerText = "Light mode";
                    icon_light.classList.remove('displayicon');
                    icon_dark.classList.add('displayicon');
                    localStorage.setItem('darkuhuy', 'enabled');
                    // line.prop("id", "newId");
                }else{
                    toggletxt.innerText = "Dark mode";
                    icon_dark.classList.remove('displayicon');
                    icon_light.classList.add('displayicon');
                    localStorage.setItem('darkuhuy', 'disabled');
                }
            });
            // Set mode dark mode saat halaman dimuat
            window.onload = function() {
                var darkMode = localStorage.getItem('darkuhuy');
                if (darkMode === 'enabled') {
                    document.body.classList.add('darkuhuy');
                }
            }
        </script>
        <script>
            // Ambil referensi ke elemen canvas (LINE CHART)
            var ctx = document.getElementById('myLineChart').getContext('2d');
            // Buat gradasi latar belakang
            var gradient = ctx.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, '#5647fc46'); // Warna awal
            gradient.addColorStop(1, '#ffffff00');   // Warna akhir

            // Data untuk chart (contoh data)
            var data = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
                datasets: [{
                    // label: 'Monthly Sales',
                    data: [12, 19, 7, 10, 4, 7, 14, 10, 12, 8, 16, 17],
                    borderColor: '#5c58d9',
                    backgroundColor: gradient,
                    // backgroundColor: 'rgba(0, 0, 255, 0.2)',
                    fill: true,
                    cubicInterpolationMode: 'monotone'
                }]
            };

            //Konfigurasi chart
            var config = {
                type: 'line',
                data: data,
                options: {
                    scales: {
                        x: {
                            ticks: {
                                color: '#707070' // Warna label sumbu x
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#707070',
                                stepSize: 5, // Nilai antar setiap label
                                maxTicksLimit: 5, // Jumlah maksimal label
                                callback: function(value, index, values) {
                                    return '$'+value + 'K'; //label kiri
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false // Menghilangkan kotak label
                        }
                    }
                }
            };
            var myChart = new Chart(ctx, config);
            // AKHIR DARI LINE CHART
            
            // Buat chart baru (DOUGHNUT CHART)

            // Data untuk doughnut chart
            var data = {
                labels: ['Male', 'Female'],
                datasets: [{
                label: 'Jumlah ',
                data: [300, 200],
                backgroundColor: ['#5d58fd', '#e86287',],
                hoverBackgroundColor: ['#5d58fd', '#e86287',],
                }]
            };

            // Opsi untuk doughnut chart
            var options = {
                // responsive: true,
                // maintainAspectRatio: false,
                cutoutPercentage: 0, // Mengatur persentase bagian tengah yang kosong (doughnut hole)
            };

            // Inisialisasi doughnut chart
            var ctx = document.getElementById('myDoughnutChart').getContext('2d');
            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: options
            });
            // AKHIR DARI DOUGHNUT CHART


            anychart.onDocumentReady(function () {
  
  // add data
  var data = anychart.data.set([
    ['Spotify', 34],
    ['Apple Music', 21],
    ['Amazon Music', 15],
    ['Tencent apps', 11],
    ['YouTube Music', 6],
    ['Others', 13]
  ]);
  
  // create a pie chart with the data
  var chart = anychart.pie(data);
  
  // set the chart radius making a donut chart
  chart.innerRadius('55%')

  // create a color palette
  var palette = anychart.palettes.distinctColors();
 
  // set the colors according to the brands
  palette.items([
    { color: '#1dd05d' },
    { color: '#000000' },
    { color: '#00a3da' },
    { color: '#156ef2' },
    { color: '#f60000' },
    { color: '#96a6a6' }
  ]);

  // apply the donut chart color palette
  chart.palette(palette);
  
  // set the position of labels
  chart.labels().format('{%x} — {%y}%').fontSize(16);
  
  // disable the legend
  chart.legend(false);
  
  // format the donut chart tooltip
  chart.tooltip().format('Market share: {%PercentValue}%');

  // create a standalone label
  var label = anychart.standalones.label();

  // configure the label settings
  label
    .useHtml(true)
    .text(
      '<span style = "color: #313136; font-size:20px;">Global Market Share of <br/> Music Streaming Apps</span>' +
      '<br/><br/></br><span style="color:#444857; font-size: 14px;"><i>Spotify and Apple Music have more <br/>than 50% of the total market share</i></span>'
    )
    .position('center')
    .anchor('center')
    .hAlign('center')
    .vAlign('middle');
  
  // set the label as the center content
  chart.center().content(label);
  
  // set container id for the chart
  chart.container('#container');
  
  // initiate chart drawing
  chart.draw();

});

        
            // bar chart
            // const ctx = document.getElementById('myChart');
            // new Chart(ctx, {
            //     type: 'bar',
            //     data: {
            //     labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            //     datasets: [{
            //         label: '# of Votes',
            //         data: [12, 19, 3, 5, 2, 3],
            //         borderWidth: 1
            //     }]
            //     },
            //     options: {
            //     scales: {
            //         y: {
            //         beginAtZero: true
            //         }
            //     }
            //     }
            // });
        </script>
    </body>
</html>