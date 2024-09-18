<?php
# Initialize the session
session_start();


# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
    echo "<script>" . "window.location.href='./login.php';" . "</script>";
    exit;
}


?>





<script src="//code.tidio.co/obzs4yi2wxjh2pku7qczlsaaotly6ohc.js" async></script>
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Feature Assured Coin - Deposit Methods</title>
    <meta name="title" Content="Feature Assured Coin - Deposit Methods">

    <meta name="description" content="Feature Assured Coin">
    <meta name="keywords" content="bitcoin,investment,cryptocurrency">
    <link rel="shortcut icon" href="https://featureassuredcoin.com/login/assets/images/logoIcon/favicon.png"
        type="image/x-icon">


    <link rel="apple-touch-icon" href="https://featureassuredcoin.com/login/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Feature Assured Coin - Deposit Methods">

    <meta itemprop="name" content="Feature Assured Coin - Deposit Methods">
    <meta itemprop="description" content="Feature Assured Coin">
    <meta itemprop="image" content="https://featureassuredcoin.com/login/assets/images/default.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Feature Assured Coin - Complete Investment System">
    <meta property="og:description"
        content="Feature Assured Coin - Complete Investment System—most Advanced Investment System Script.">
    <meta property="og:image" content="https://featureassuredcoin.com/login/assets/images/default.png" />
    <meta property="og:image:type" content="png" />
    <meta property="og:image:width" content="1180" />
    <meta property="og:image:height" content="600" />
    <meta property="og:url" content="https://featureassuredcoin.com/login/user/deposit">

    <meta name="twitter:card" content="summary_large_image">
    <!-- font  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link href="/midas home page/css/8014c396.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/custom.css">
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500&family=Maven+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css">

  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
  
    <script src="https://kit.fontawesome.com/259157ee87.js" crossorigin="anonymous"></script>

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
            <a class="navbar-brand" href="http://172.20.10.3:5500/admin.php">
                <i class="fa-solid fa-coins" style="color: #000000;"></i>
                <span class="text">
                    <span class="line wow fadeInRight" data-wow-duration=".6s"
                        data-wow-delay=".6s">Coincloud</span><span class="logo-slogan">Wallet</span>
                </span>
            </a>
            <div class="bg--lights">
                <div class="profile-info">
                    <p class="fs--13px mb-3 fw-bold">ACCOUNT BALANCE</p>
                    <h4 class="usd-balance text--base mb-2 fs--30">5.00 <sub class="top-0 fs--13px">USD <small>(Deposit
                                Wallet)</small> </sub></h4>
                    <p class="btc-balance fw-medium fs--18px">0.00 <sub class="top-0 fs--13px">USD <small>(Interest
                                Wallet)</small></sub></p>
                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <a href="https://featureassuredcoin.com/login/user/deposit"
                            class="btn btn--base btn--smd">Deposit</a>
                        <a href="https://featureassuredcoin.com/login/user/withdraw"
                            class="btn btn--secondary btn--smd">Withdraw</a>
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li><a href="https://featureassuredcoin.com/login/user/dashboard" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/dashboard.png"
                            alt="icon"> Dashboard</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/invest/statistics" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/investment.png"
                            alt="icon"> Investments</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/invest/schedule" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/schedule.png"
                            alt="icon"> Schedule Investment</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/deposit" class="active"><img
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
                <li><a href="https://featureassuredcoin.com/login/user/profile-setting" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/profile.png"
                            alt="icon"> Profile</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/change-password" class=""><img
                            src="https://featureassuredcoin.com/login/assets/templates/invester//images/icon/password.png"
                            alt="icon"> Change Password</a></li>
                <li><a href="https://featureassuredcoin.com/login/user/logout" class=""><img
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
                                    <li><a href="https://featureassuredcoin.com/login/user/logout"><i
                                                class="las la-sign-out-alt"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class=" dashboard-container ">

                <div class="dashboard-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3 class="mb-2">Deposit Funds</h3>
                                <p>Add funds using our system's gateway. The deposited amount will be credited to the
                                    deposit wallet. You'll just make investments from this wallet.</p>
                            </div>
                            <div class="text-end mb-3">
                                <a href="https://featureassuredcoin.com/login/user/deposit/history"
                                    class="btn btn--secondary btn--smd"><i class="las la-long-arrow-alt-left"></i>
                                    Deposit History</a>
                            </div>
                            <form action="https://featureassuredcoin.com/login/user/deposit/insert" method="post">
                                <input type="hidden" name="_token" value="f9mPCgX4w1ZPT9OGKc1s5ilVS1HAtf8W87hEzUcE">
                                <input type="hidden" name="currency">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Select Gateway</label>
                                                    <select class="form-select form-control form--control"
                                                        name="gateway" required>
                                                        <option value="">Select One</option>
                                                        <option value="1000"
                                                            data-gateway="{&quot;id&quot;:1,&quot;name&quot;:&quot;BTC&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;&quot;,&quot;method_code&quot;:1000,&quot;gateway_alias&quot;:&quot;btc&quot;,&quot;min_amount&quot;:&quot;100.00000000&quot;,&quot;max_amount&quot;:&quot;1000000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;2.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2023-12-03T07:37:18.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-29T22:31:56.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:59,&quot;form_id&quot;:1,&quot;code&quot;:&quot;1000&quot;,&quot;name&quot;:&quot;BTC&quot;,&quot;alias&quot;:&quot;btc&quot;,&quot;status&quot;:true,&quot;supported_currencies&quot;:[],&quot;crypto&quot;:0,&quot;description&quot;:&quot;&lt;style&gt;\r\n        #btcAddress21 {\r\n            font-family: monospace;\r\n            padding: 10px;\r\n            margin: 20px 0;\r\n            border: 1px solid #ccc;\r\n        }\r\n\r\n        #copyButton21 {\r\n            cursor: pointer;\r\n            padding: 5px 10px;\r\n            background-color: #4CAF50;\r\n            color: white;\r\n            border: none;\r\n            border-radius: 4px;\r\n        }\r\n    &lt;\/style&gt;\r\n\r\n\r\n    &lt;h1&gt;Bitcoin Payment Gateway&lt;\/h1&gt;\r\n\r\n    &lt;span&gt;Bitcoin Address:&lt;\/span&gt;&lt;div id=\&quot;btcAddress21\&quot;&gt; 14LfC4TdyJBWjBgi6DZCkGNX78U3RTPy2d &lt;\/div&gt;\r\n    \r\n    &lt;button id=\&quot;copyButton21\&quot; onclick=\&quot;copyBitcoinAddress21()\&quot;&gt;Copy Address&lt;\/button&gt;\r\n\r\n    &lt;script&gt;\r\n        function copyBitcoinAddress21() {\r\n            var btcAddress = document.getElementById(&#039;btcAddress21&#039;);\r\n            var textArea = document.createElement(&#039;textarea&#039;);\r\n            textArea.value = btcAddress.innerText;\r\n            document.body.appendChild(textArea);\r\n            textArea.select();\r\n            document.execCommand(&#039;copy&#039;);\r\n            document.body.removeChild(textArea);\r\n\r\n            alert(&#039;Bitcoin address copied to clipboard!&#039;);\r\n        }\r\n    &lt;\/script&gt;&quot;,&quot;created_at&quot;:&quot;2023-12-03T07:37:18.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-29T22:31:56.000000Z&quot;}}">
                                                            BTC</option>
                                                        <option value="1002"
                                                            data-gateway="{&quot;id&quot;:3,&quot;name&quot;:&quot;Coinsph&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;&quot;,&quot;method_code&quot;:1002,&quot;gateway_alias&quot;:&quot;coinsph&quot;,&quot;min_amount&quot;:&quot;100.00000000&quot;,&quot;max_amount&quot;:&quot;1000000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2023-12-19T06:15:00.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-12-19T06:15:00.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:61,&quot;form_id&quot;:4,&quot;code&quot;:&quot;1002&quot;,&quot;name&quot;:&quot;Coinsph&quot;,&quot;alias&quot;:&quot;coinsph&quot;,&quot;status&quot;:true,&quot;supported_currencies&quot;:[],&quot;crypto&quot;:0,&quot;description&quot;:&quot;&lt;div style=\&quot;text-align: center;\&quot;&gt;&lt;u style=\&quot;font-family: &amp;quot;comic sans ms&amp;quot;; color: var(--bs-body-color); font-size: 1rem; text-align: var(--bs-body-text-align);\&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;\/b&gt;&lt;\/u&gt;&lt;\/div&gt;&lt;div style=\&quot;text-align: center;\&quot;&gt;&lt;u style=\&quot;font-family: &amp;quot;comic sans ms&amp;quot;; color: var(--bs-body-color); font-size: 1rem; text-align: var(--bs-body-text-align);\&quot;&gt;&lt;b&gt;NOT AVAILABLE&lt;\/b&gt;&lt;\/u&gt;&lt;\/div&gt;&quot;,&quot;created_at&quot;:&quot;2023-12-19T06:15:00.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-12-19T11:51:59.000000Z&quot;}}">
                                                            Coinsph</option>
                                                        <option value="1001"
                                                            data-gateway="{&quot;id&quot;:2,&quot;name&quot;:&quot;Gcash&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;&quot;,&quot;method_code&quot;:1001,&quot;gateway_alias&quot;:&quot;gcash&quot;,&quot;min_amount&quot;:&quot;100.00000000&quot;,&quot;max_amount&quot;:&quot;1000000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2023-12-19T06:12:48.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-12-19T06:12:48.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:60,&quot;form_id&quot;:3,&quot;code&quot;:&quot;1001&quot;,&quot;name&quot;:&quot;Gcash&quot;,&quot;alias&quot;:&quot;gcash&quot;,&quot;status&quot;:true,&quot;supported_currencies&quot;:[],&quot;crypto&quot;:0,&quot;description&quot;:&quot;&lt;div style=\&quot;text-align: center;\&quot;&gt;&lt;b style=\&quot;color: var(--bs-body-color); font-size: 1rem; text-align: var(--bs-body-text-align);\&quot;&gt;&lt;u&gt;&lt;font face=\&quot;comic sans ms\&quot;&gt;&lt;br&gt;&lt;\/font&gt;&lt;\/u&gt;&lt;\/b&gt;&lt;\/div&gt;&lt;div style=\&quot;text-align: center;\&quot;&gt;&lt;b style=\&quot;color: var(--bs-body-color); font-size: 1rem; text-align: var(--bs-body-text-align);\&quot;&gt;&lt;u&gt;&lt;font face=\&quot;comic sans ms\&quot;&gt;NOT AVAILABLE&lt;\/font&gt;&lt;\/u&gt;&lt;\/b&gt;&lt;\/div&gt;&quot;,&quot;created_at&quot;:&quot;2023-12-19T06:12:48.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-12-19T11:51:53.000000Z&quot;}}">
                                                            Gcash</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Amount</label>
                                                    <div class="input-group">
                                                        <input type="number" step="any" name="amount"
                                                            class="form-control form--control" value=""
                                                            autocomplete="off" required>
                                                        <span class="input-group-text">USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 preview-details d-none">
                                            <ul class="list-group">
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span>Limit</span>
                                                    <span><span class="min fw-bold">0</span> USD - <span
                                                            class="max fw-bold">0</span> USD</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span>Charge</span>
                                                    <span><span class="charge fw-bold">0</span> USD</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span>Payable</span> <span><span class="payable fw-bold"> 0</span>
                                                        USD</span>
                                                </li>
                                                <li class="list-group-item justify-content-between d-none rate-element">

                                                </li>
                                                <li class="list-group-item justify-content-between d-none in-site-cur">
                                                    <span>In <span class="method_currency"></span></span>
                                                    <span class="final_amo fw-bold">0</span>
                                                </li>
                                                <li
                                                    class="list-group-item justify-content-center crypto_currency d-none">
                                                    <span>Conversion with <span class="method_currency"></span> and
                                                        final value will Show on next step</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <button type="submit" class="btn btn--base w-100 mt-3">Submit</button>
                                    </div>
                                </div>
                            </form>
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

    <script>
        (function ($) {
            "use strict";
            $('select[name=gateway]').change(function () {
                if (!$('select[name=gateway]').val()) {
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                var resource = $('select[name=gateway] option:selected').data('gateway');
                var fixed_charge = parseFloat(resource.fixed_charge);
                var percent_charge = parseFloat(resource.percent_charge);
                var rate = parseFloat(resource.rate)
                if (resource.method.crypto == 1) {
                    var toFixedDigit = 8;
                    $('.crypto_currency').removeClass('d-none');
                } else {
                    var toFixedDigit = 2;
                    $('.crypto_currency').addClass('d-none');
                }
                $('.min').text(parseFloat(resource.min_amount).toFixed(2));
                $('.max').text(parseFloat(resource.max_amount).toFixed(2));
                var amount = parseFloat($('input[name=amount]').val());
                if (!amount) {
                    amount = 0;
                }
                if (amount <= 0) {
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                $('.preview-details').removeClass('d-none');
                var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                $('.charge').text(charge);
                var payable = parseFloat((parseFloat(amount) + parseFloat(charge))).toFixed(2);
                $('.payable').text(payable);
                var final_amo = (parseFloat((parseFloat(amount) + parseFloat(charge))) * rate).toFixed(toFixedDigit);
                $('.final_amo').text(final_amo);
                if (resource.currency != 'USD') {
                    var rateElement = `<span class="fw-bold">Conversion Rate</span> <span><span  class="fw-bold">1 USD = <span class="rate">${rate}</span>  <span class="method_currency">${resource.currency}</span></span></span>`;
                    $('.rate-element').html(rateElement)
                    $('.rate-element').removeClass('d-none');
                    $('.in-site-cur').removeClass('d-none');
                    $('.rate-element').addClass('d-flex');
                    $('.in-site-cur').addClass('d-flex');
                } else {
                    $('.rate-element').html('')
                    $('.rate-element').addClass('d-none');
                    $('.in-site-cur').addClass('d-none');
                    $('.rate-element').removeClass('d-flex');
                    $('.in-site-cur').removeClass('d-flex');
                }
                $('.method_currency').text(resource.currency);
                $('input[name=currency]').val(resource.currency);
                $('input[name=amount]').on('input');
            });
            $('input[name=amount]').on('input', function () {
                $('select[name=gateway]').change();
                $('.amount').text(parseFloat($(this).val()).toFixed(2));
            });
        })(jQuery);
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
            window.location.href = "./" + $(this).val();
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