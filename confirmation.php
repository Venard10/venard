    <?php
    session_start();

    $user = $_SESSION['userData'] ?? null;

    if (!$user) {
    echo "No data submitted.";
    exit();
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Summary</title>
    <style>
        body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background-color: #3bb349ff;
        color: white;
        padding: 40px 20px;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
        overflow-y: auto;
        }

        .summary-container {
        background-color: #2e2e2e;
        padding: 30px;
        border-radius: 10px;
        max-width: 500px;
        width: 100%;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        .summary-container h2 {
        text-align: center;
        font-size: 1.8em;
        margin-bottom: 20px;
        color: #60b582ff;
        }

        .summary-container ul {
        list-style: none;
        padding: 0;
        }

        .summary-container li {
        background-color: #3a3a3a;
        margin-bottom: 10px;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 1em;
        color: #fff;
        word-wrap: break-word;
        }

        .done-btn {
        background-color: #41a5d3ff;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1em;
        cursor: pointer;
        display: block;
        margin: 30px auto 0;
        text-align: center;
        }
    </style>
    </head>
    <body>
    <div class="summary-container">
        <h2>Registration Summary</h2>
        <ul>
        <li>Firstname: <?= htmlspecialchars($user['first-name']) ?></li>
        <li>Middlename: <?= htmlspecialchars($user['middle-name']) ?></li>
        <li>Lastname: <?= htmlspecialchars($user['last-name']) ?></li>
        <li>Email: <?= htmlspecialchars($user['email']) ?></li>
        <li>Date of Birth: <?= htmlspecialchars($user['dob']) ?></li>
        <li>ID Number: <?= htmlspecialchars($user['school-id']) ?></li>
        <li>Batch: <?= htmlspecialchars($user['batch']) ?></li>
        <li>Technology: <?= htmlspecialchars($user['technology']) ?></li>

        </ul>

        <button onclick="goBack()" class="done-btn">Done</button>
    </div>

    <script>
        function goBack() {
        fetch('clear-session.php').then(() => {
            window.location.href = 'index.html'; 
        });
        }
    </script>
    </body>
    </html>