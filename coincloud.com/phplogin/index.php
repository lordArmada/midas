<?php
# Initialize the session
session_start();
require_once "./config.php";

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
    echo "<script>" . "window.location.href='./login.php';" . "</script>";
    exit;
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coincloud-</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <link href="/midas home page/css/8014c396.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/custom.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500&family=Maven+Pro:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css">

    <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">

    <style>
        .pb-120 {
            padding-bottom: clamp(40px, 4vw, 40px);
        }

        .pt-120 {
            padding-top: clamp(40px, 4vw, 40px);
        }

        .container {
            max-width: 1140px;
        }
    </style>

</head>

<body>

    <div class="d-flex flex-wrap">

        <div class="dashboard-sidebar" id="dashboard-sidebar">
            <button class="btn-close dash-sidebar-close d-xl-none"></button>
            <a class="navbar-brand" href="http://127.0.0.1:5500/">
                <i class="fa-solid fa-coins" style="color: #000000;"></i>
                <span class="text">
                    <span class="line wow fadeInRight" data-wow-duration=".6s"
                        data-wow-delay=".6s">Coincloud</span><span class="logo-slogan">Wallet</span>
                </span>
            </a>
            <div class="bg--lights">
                <div class="profile-info">
                    <p class="fs--13px mb-3 fw-bold">ACCOUNT BALANCE</p>
                    <h4 class="usd-balance text--base mb-2 fs--30"><?php echo number_format($balance, 2); ?></h4> <sub class="top-0 fs--13px">USD <small>(Deposit
                                Wallet)</small> </sub></h4>
                    <p class="btc-balance fw-medium fs--18px">0.00 <sub class="top-0 fs--13px">USD <small>(Interest
                                Wallet)</small></sub></p>
                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <a href="./deposit.php" class="btn btn--base btn--smd">Deposit</a>
                        <a href="https://featureassuredcoin.com/login/user/withdraw"
                            class="btn btn--secondary btn--smd">Withdraw</a>
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li><a href="https://featureassuredcoin.com/login/user/dashboard" class="active"><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/dashboard.png"
                            alt="icon"> Dashboard</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/invest/statistics" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/investment.png"
                            alt="icon"> Investments</a></li>

                <li><a href="https://featureassuredcoin.com/login/user/deposit" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/wallet.png"
                            alt="icon"> Deposit</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/withdraw" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/withdraw.png"
                            alt="icon"> Withdraw</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/transfer-balance" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/balance-transfer.png"
                            alt="icon"> Transfer Balance</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/transactions" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/transaction.png"
                            alt="icon"> Transactions</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/invest/ranking" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/ranking.png"
                            alt="icon"> Ranking</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/referrals" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/referral.png"
                            alt="icon"> Referrals</a></li>

                <li><a href="https://featureassuredcoin.com/login/ticket" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/ticket.png"
                            alt="icon"> Support Ticket</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/twofactor" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/2fa.png"
                            alt="icon"> 2FA</a></li>

                <li><a href="https://featureassuredcoin.com/login/user/change-password" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/password.png"
                            alt="icon"> Change Password</a></li>
                <li><a href="./logout.php" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/logout.png"
                            alt="icon"> Logout</a></li>
            </ul>
        </div>

        <div class="dashboard-wrapper">

            <div class="dashboard-nav d-flex flex-wrap align-items-center justify-content-between">
                <div class="nav-left d-flex gap-4 align-items-center">
                    <div class="dash-sidebar-toggler d-xl-none" id="dash-sidebar-toggler">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
                <div class="nav-right d-flex flex-wrap align-items-center gap-3">
                    <select name="langSel" class="langSel form--control h-auto px-2 py-1 border-0">
                        <option value="en" selected>English</option>
                    </select>
                    <ul class="nav-header-link d-flex flex-wrap gap-2">
                        <li>
                            <a class="link" href="javascript:void(0)"><i class="fa-solid fa-user"
                                    style="color: #ffffff;"></i></a>
                            <div class="dropdown-wrapper">
                                <div class="dropdown-header">
                                    <h6 class="name text--base">WELCOME </h6>
                                    <p class="fs--14px"><?php echo htmlspecialchars($_SESSION['username']); ?></p>
                                </div>
                                <ul class="links">
                                    <li><a href="https://featureassuredcoin.com/login/user/profile-setting"><i
                                                class="las la-user"></i> Profile</a></li>
                                    <li><a href="https://featureassuredcoin.com/login/user/change-password"><i
                                                class="las la-key"></i> Change Password</a></li>
                                    <li><a href="./logout.php"><i class="las la-sign-out-alt"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class=" dashboard-container ">


                <div class="dashboard-inner">





                    <div class="alert border border--warning" role="alert">
                        <div class="alert__icon d-flex align-items-center text--warning"><i
                                class="fas fa-user-lock"></i></div>
                        <p class="alert__message">
                            <span class="fw-bold">2FA Authentication</span><br>
                            <small><i>To keep safe your account, Please enable <a
                                        href="https://featureassuredcoin.com/login/user/twofactor"
                                        class="link-color">2FA</a> security.</i> It will make secure your account and
                                balance.</small>
                        </p>
                    </div>


                    <div class="alert border border--info" role="alert">
                        <div class="alert__icon d-flex align-items-center text--info"><i
                                class="fas fa-file-signature"></i></div>
                        <p class="alert__message">
                            <span class="fw-bold">KYC Verification Required</span><br>
                            <small><i>Please submit the required KYC information to verify yourself. Otherwise, you
                                    couldn't make any withdrawal requests to the system. <a
                                        href="https://featureassuredcoin.com/login/user/kyc-form"
                                        class="link-color">Click here</a> to submit KYC information.</i></small>
                        </p>
                    </div>

                    <div class="row g-3 mt-4">
                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Successful Deposits</h5>
                                </div>
                                <h3 class="text--secondary my-4">0.00 USD</h3>
                                <div class="widget-lists">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="fw-bold">Submitted</p>
                                            <span>$0.00</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Pending</p>
                                            <span>$0.00</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Rejected</p>
                                            <span>$0.00</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p><small><i>You've requested to deposit $100.00. Where $100.00 is just initiated
                                                but not submitted.</i></small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Successful Withdrawals</h5>
                                </div>
                                <h3 class="text--secondary my-4">0.00 USD</h3>
                                <div class="widget-lists">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="fw-bold">Submitted</p>
                                            <span>$0.00</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Pending</p>
                                            <span>$0.00</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Rejected</p>
                                            <span>$0.00</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p><small><i>You've requested to withdraw $0.00. Where $0.00 is just initiated but
                                                not submitted.</i></small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Total Investments</h5>
                                </div>
                                <h3 class="text--secondary my-4">0.00 USD</h3>
                                <div class="widget-lists">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="fw-bold">Completed</p>
                                            <span>$0.00</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Running</p>
                                            <span>$0.00</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Interests</p>
                                            <span>$0.00</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p><small><i>You've invested $0.00 from the deposit wallet and $0.00 from the
                                                interest wallet</i></small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                            <div class="mb-2">
                                <h5 class="title">Latest ROI Statistics</h5>
                                <p> <small><i>Here is last 30 days statistics of your ROI (Return on
                                            Investment)</i></small></p>
                            </div>
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <script src="https://featureassuredcoin.com/login/assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="https://featureassuredcoin.com/login/assets/global/js/bootstrap.bundle.min.js"></script>

    <!-- Pluglin Link -->
    <script src="https://featureassuredcoin.com/login/assets/templates/invester/js/lib/slick.min.js"></script>
    <script src="https://featureassuredcoin.com/login/assets/templates/invester/js/lib/magnific-popup.min.js"></script>
    <script src="https://featureassuredcoin.com/login/assets/templates/invester/js/lib/apexcharts.min.js"></script>


    <!-- Main js -->
    <script src="https://featureassuredcoin.com/login/assets/templates/invester/js/main.js"></script>

    <script src="https://featureassuredcoin.com/login/assets/templates/invester//js/lib/apexcharts.min.js"></script>

    <script>

        // apex-line chart
        var options = {
            chart: {
                height: 350,
                type: "area",
                toolbar: {
                    show: false
                },
                dropShadow: {
                    enabled: true,
                    enabledSeries: [0],
                    top: -2,
                    left: 0,
                    blur: 10,
                    opacity: 0.08,
                },
                animations: {
                    enabled: true,
                    easing: 'linear',
                    dynamicAnimation: {
                        speed: 1000
                    }
                },
            },
            dataLabels: {
                enabled: false
            },
            series: [
                {
                    name: "Price",
                    data: [

                    ]
                }
            ],
            fill: {
                type: "gradient",
                colors: ['#4c7de6', '#4c7de6', '#4c7de6'],
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.6,
                    opacityTo: 0.9,
                    stops: [0, 90, 100]
                }
            },
            xaxis: {
                title: "Value",
                categories: [
                ]
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5
                },
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();


        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

    </script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>


    <link rel="stylesheet" href="https://featureassuredcoin.com/login/assets/global/css/iziToast.min.css">
    <script src="https://featureassuredcoin.com/login/assets/global/js/iziToast.min.js"></script>


    <script>
        "use strict";
        function notify(status, message) {
            if (typeof message == 'string') {
                iziToast[status]({
                    message: message,
                    position: "topRight"
                });
            } else {
                $.each(message, function (i, val) {
                    iziToast[status]({
                        message: val,
                        position: "topRight"
                    });
                });
            }
        }
    </script>

    <script>
        $(".langSel").on("change", function () {
            window.location.href = "https://featureassuredcoin.com/login/change/" + $(this).val();
        });

        Array.from(document.querySelectorAll('table')).forEach(table => {
            let heading = table.querySelectorAll('thead tr th');
            Array.from(table.querySelectorAll('tbody tr')).forEach((row) => {
                Array.from(row.querySelectorAll('td')).forEach((colum, i) => {
                    colum.setAttribute('data-label', heading[i].innerText)
                });
            });
        });

        $.each($('input, select, textarea'), function (i, element) {
            var elementType = $(element);
            if (elementType.attr('type') != 'checkbox') {
                if (element.hasAttribute('required')) {
                    $(element).closest('.form-group').find('label').addClass('required');
                }
            }
        });

        var inputElements = $('[type=text],[type=password],[type=email],[type=number],select,textarea');
        $.each(inputElements, function (index, element) {
            element = $(element);
            element.closest('.form-group').find('label').attr('for', element.attr('name'));
            element.attr('id', element.attr('name'))
        });

        $('.policy').on('click', function () {
            $.get('https://featureassuredcoin.com/login/cookie/accept', function (response) {
                $('.cookies-card').addClass('d-none');
            });
        });


        setTimeout(function () {
            $('.cookies-card').removeClass('hide')
        }, 2000);
    </script>
</body>

</html>