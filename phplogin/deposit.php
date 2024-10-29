<?php
// Initialize the session
session_start();
require_once "./config.php"; // Add your database connection file

// Check if the database connection is established
if (!$link) {
    die("Database connection failed: " . mysqli_connect_error());
}

// If user is not logged in, redirect them to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
    header("Location: ./login.php");
    exit;
}
$balance = $_SESSION["balance"] ?? 0;
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION["id"]; // Retrieve user ID from session
    $gateway = $_POST['gateway'];
    $amount = $_POST['amount'];
    $status = 'pending'; // Set the status to 'pending';
    // Prepare and execute the query to insert the deposit data
    $stmt = $link->prepare("INSERT INTO deposits (user_id, gateway, amount, status) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("SQL Error: " . $link->error);
    }

    $stmt->bind_param("isds", $user_id, $gateway, $amount, $status);

    // Check if the query was successful
    if ($stmt->execute()) {
        echo "Deposit request submitted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $link->close();
}
?>




<script src="//code.tidio.co/obzs4yi2wxjh2pku7qczlsaaotly6ohc.js" async></script>
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Coincloud - Deposit Methods</title>
    <!-- font  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/main.css">
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
                    <p class="fs--20px  fw-bold">ACCOUNT BALANCE</p>
                    <h4 class="usd-balance text--secondary fs--25px"><?php echo htmlspecialchars($balance) ?></h4>
                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <a href="./deposit.php" class="btn btn--secondary btn--smd" id="deposit">Deposit</a>
                       <a href="./withdraw.php"
                            class="btn btn--secondary btn--smd">Withdraw</a>
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu">
     <li><a href="./index.php" class="active"><img
            src="https://featureassuredcoin.com/login/assets/templates/invester/images/icon/dashboard.png"
            alt="icon"> Dashboard</a></li>
    <li><a href="./transaction.php"><img
            src="https://featureassuredcoin.com/login/assets/templates/invester/images/icon/transaction.png"
            alt="icon"> Transactions</a></li>
    <li><a href="https://featureassuredcoin.com/login/user/referrals"><img
            src="https://featureassuredcoin.com/login/assets/templates/invester/images/icon/referral.png"
            alt="icon"> Referrals</a></li>
    <li><a href="./userinfo.php"><img
            src="https://featureassuredcoin.com/login/assets/templates/invester/images/icon/ticket.png"
            alt="icon"> profile</a></li>
    <li><a href="https://featureassuredcoin.com/login/user/profile-setting"><img
            src="https://featureassuredcoin.com/login/assets/templates/invester/images/icon/profile.png"
            alt="icon"> support</a></li>
    <li><a href="./password_change.php"><img
            src="https://featureassuredcoin.com/login/assets/templates/invester/images/icon/password.png"
            alt="icon"> Change Password</a></li>
    <li><a href="./logout.php"><img
            src="https://featureassuredcoin.com/login/assets/templates/invester/images/icon/logout.png"
            alt="icon"> Logout</a></li>
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
                            <a class="link " style="background: rgb(41, 56, 96);" href="javascript:void(0)"><i
                                    class="fa-solid fa-user fa-lg" style="color: white;"></i></a>
                            <div class="dropdown-wrapper">
                                <div class="dropdown-header">
                                    <h6 class="name text--secondary">WELCOME </h6>
                                    <p class="fs--20px"><?php echo htmlspecialchars($_SESSION['username']); ?></p>
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


           <div class="dashboard-container">
    <div class="dashboard-inner">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3 class="mb-2">Deposit Funds</h3>
                    <p>Add funds using our system's gateway. The deposited amount will be credited to the deposit wallet. You'll make investments from this wallet.</p>
                </div>
                <div class="text-end mb-3">
                    <a href="./deposit_history.php" class="btn btn--secondary btn--smd">
                        <i class="las la-long-arrow-alt-left"></i> Deposit History
                    </a>
                </div>
                <form id="depositForm" action="deposit.php" method="post">
                    <input type="hidden" name="_token" value="">
                    <input type="hidden" name="currency">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Select Gateway</label>
                                        <select class="form-select form-control form--control" id="gateway" name="gateway" required>
                                            <option value="">Select One</option>
                                            <option value="BTC">BTC</option>
                                            <option value="ICP">ICP</option>
                                            <option value="XRP">XRP</option>
                                            <option value="BNB">BNB</option>
                                            <option value="BUSD">BUSD</option>
                                            <option value="USDT">USDT</option>
                                            <option value="Litecoin">Litecoin</option>
                                            <option value="Ethereum">Ethereum</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Amount</label>
                                        <div class="input-group">
                                            <input type="number" step="any" id="amount" name="amount" class="form-control form--control" value="" autocomplete="off" required>
                                            <span class="input-group-text">USD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn--secondary w-100 mt-3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Toast for success message -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast bg--dark" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Success</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body"></div>
    </div>
</div>

<script src="https://featureassuredcoin.com/login/assets/global/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('depositForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting

        const gateway = document.getElementById('gateway').value;
        const amount = document.getElementById('amount').value;

        if (gateway && amount) {
            const toastElement = document.getElementById('liveToast');
            const toastBody = toastElement.querySelector('.toast-body');

            // Set toast message
            toastBody.textContent = `You selected ${gateway} and entered an amount of ${amount} USD. You will receive more information in your email.`;
            const toast = new bootstrap.Toast(toastElement);
            toast.show();

            // Prepare data to be sent via AJAX
            const formData = new FormData();
            formData.append('gateway', gateway);
            formData.append('amount', amount);

            // Send the data using fetch API
            fetch('./deposit.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data); // Handle the response data
                // Optionally, show another toast for success or failure here
            })
            .catch(error => {
                console.error('Error:', error);
            });
        } else {
            alert('Please select a gateway and enter an amount.');
        }
    });

</script>

</body>

</html>