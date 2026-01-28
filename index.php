<?php
// Set timezone
date_default_timezone_set("Asia/Manila");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Onboarding Profile Card</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f2f4f7;
            font-family: Arial, sans-serif;
        }

        .card {
            background: #ffffff;
            width: 420px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            text-align: center;
        }

        h1 {
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .bio {
            font-style: italic;
            color: #555;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin: 8px 0;
        }

        button {
            margin: 15px 0;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            background: #3498db;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .system-info {
            background: #eef2f5;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: left;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="card">
    <!-- Step 1: Structure (HTML) -->
    <h1>Junior Software Engineer</h1>
    <p><strong>Name:</strong> Rosalio Oclo Jr.</p>

    <p class="bio">"Ready to learn PHP and MySQL this semester!"</p>

    <h3>Technical Skills</h3>
    <ul>
        <li>HTML5 & CSS3</li>
        <li>JavaScript (Basics)</li>
        <li>XAMPP Environment</li>
    </ul>

    <!-- Step 3: Interaction (JavaScript) -->
    <button id="initBtn">Initialize System</button>

    <!-- Step 4: Server Integration (PHP) -->
    <div class="system-info">
        <h3>Server Status: Online</h3>
        <p><strong>Date & Time:</strong> <?php echo date('F j, Y, g:i a'); ?></p>
        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
    </div>
</div>

<script>
    // JavaScript using getElementById and addEventListener
    document.getElementById("initBtn").addEventListener("click", function () {
        alert("✅ Welcome to the Team!\nSystem Initialized Successfully.");
    });
</script>

</body>
</html>
Sent 2m ago
Write to
