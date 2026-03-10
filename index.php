
<!-- <?php
echo "<h1>PHP App Deployed with GitHub Actions + AWS!! Tested Successfully</h1>";
echo "<h2>Hello World</h2>"
?> -->
 
 <?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP App</title>
    <style>
        /* Simple responsive layout and styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
        }

        header {
            padding: 2rem;
            text-align: center;
            background-color: rgba(0,0,0,0.2);
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        header p {
            font-size: 1.2rem;
            margin-top: 0.5rem;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            margin: 1rem;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: rgba(0,0,0,0.2);
            margin-top: 2rem;
        }

        a {
            color: #ffd700;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 2rem;
            }

            .card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My PHP App!</h1>
        <p>Dynamic PHP, Static Design — fully CI/CD ready.</p>
    </header>

    <main>
        <div class="card">
            <h2>About This App</h2>
            <p>This is a simple PHP application deployed via GitHub Actions CI/CD pipeline to AWS EC2 using Docker & ECR.</p>
        </div>

        <div class="card">
            <h2>Features</h2>
            <ul>
                <li>Automatic builds on push to main branch</li>
                <li>Dockerized application deployment</li>
                <li>Pulls latest image on EC2 automatically</li>
                <li>Responsive static design</li>
            </ul>
        </div>

        <div class="card">
            <h2>Links</h2>
            <p>
                <a href="#">GitHub Repository</a> | 
                <a href="#">AWS ECR</a>
            </p>
        </div>
    </main>

    <footer>
        &copy; <?php echo date('Y'); ?> My PHP App. All rights reserved.
    </footer>
</body>
</html>
