<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>TrainTracker - <?php echo $pageTitle ?? 'Welcome'; ?></title>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="homepage.php">
                    <h1>TrainTracker</h1>
                </a>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="journeypage.php">Journeys</a></li>
                    <li><a href="ticketpage.php">Tickets</a></li>
                    <li><a href="facilitiespage.php">Facilities</a></li>
                    <li><a href="aboutuspage.php">About Us</a></li>
                    <li><a href="customersupportpage.php">Support</a></li>
                    <li><a href="feedbackpage.php">Feedback</a></li>
                </ul>
            </nav>
            <div class="account-nav">
                <a href="accountpage.php" class="account-btn">My Account</a>
            </div>
        </div>
    </header>
    <main></main>