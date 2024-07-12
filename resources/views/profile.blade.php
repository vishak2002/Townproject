<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .menu-bar {
            background-color: #333;
            overflow: hidden;
        }

        .menu-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .menu-item {
            margin: 0;
        }

        .menu-item a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .menu-item a:hover {
            background-color: #575757;
        }

        @media (max-width: 768px) {
            .menu-list {
                flex-direction: column;
            }

            .menu-item a {
                padding: 10px;
            }
           
        
        }
    </style>
</head>
<body>
    <nav class="menu-bar">
        <ul class="menu-list">
        <li class="menu-item"><a href="Register">Register</a></li>
        <li class="menu-item"><a href="itemshow">Show Details</a></li>
        </ul>
    </nav>

    <main>
    <center>    
        <section class="about-section">
            <h1>WELCOME</h1>
            <p>Welcome to MyTask!</p>
            <p>My Name Is Vishak.</p>
            <p>Thank you for visiting  MyTask page.!</p>
        </section>
    </main>
    </center>
</body>
</html>
