<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not redirect to login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: ./login.php");
    exit;
}

// Include the database config file
require_once "./config.php";

// Fetch the current user's balance
$user_id = $_SESSION["id"];
$balance = $_SESSION["balance"] ?? 0;

$sql = "SELECT balance FROM users WHERE id = ?";
if ($stmt = $link->prepare($sql)) {
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($balance);
    $stmt->fetch();
    $stmt->close();
}

// Handle withdrawal form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gateway = $_POST['gateway'];
    $amount = $_POST['amount'];

    // Validate the withdrawal amount
    if ($amount > 0 && $amount <= $balance) {
        // Insert the withdrawal request into the 'withdrawals' table with status 'pending'
        $status = 'pending';
        $sql = "INSERT INTO withdrawals (user_id, gateway, amount, status) VALUES (?, ?, ?, ?)";
        if ($stmt = $link->prepare($sql)) {
            $stmt->bind_param("isds", $user_id, $gateway, $amount, $status);
            if ($stmt->execute()) {
                // Success message, no balance deduction yet
                $success_message = "Withdrawal request submitted successfully. Your balance will be deducted when the request is approved.";
            } else {
                $error_message = "Error processing withdrawal. Please try again.";
            }
            $stmt->close();
        }
    } else {
        $error_message = "Invalid withdrawal amount. Ensure it's less than or equal to your balance.";
    }
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
    <link href="/midas home page/css/8014c396.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/main.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500&family=Maven+Pro:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

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


<div class="container">
    <h2>Withdraw Funds</h2>
    <p>Current Balance: <strong><?php echo htmlspecialchars($balance); ?> USD</strong></p>

    <?php if (isset($success_message)): ?>
            <div class="alert alert-success">
                <?php echo $success_message; ?>
            </div>
    <?php elseif (isset($error_message)): ?>
            <div class="alert alert-danger">
                <?php echo $error_message; ?>
            </div>
    <?php endif; ?>

    <form action="withdraw.php" method="post">
        <div class="form-group">
            <label for="gateway">Select Gateway</label>
            <select name="gateway" id="gateway" class="form-control" required>
                <option value="">Select One</option>
                <option value="BTC">BTC</option>
                <option value="ETH">Ethereum</option>
                <option value="USDT">USDT</option>
                <option value="XRP">XRP</option>
                <option value="BNB">BNB</option>
            </select>
        </div>

        <div class="form-group">
            <label for="amount">Withdrawal Amount (USD)</label>
            <input type="number" name="amount" id="amount" class="form-control" step="0.01" required>
        </div>
<div class="mt-3"><button type="submit" class="btn btn--secondary">Submit Withdrawal</button></div>
        
    </form>
</div>

</body>
</html>
