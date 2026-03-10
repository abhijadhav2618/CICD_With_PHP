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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #0a0a1a;
            color: #fff;
            overflow-x: hidden;
        }

        /* Animated background */
        .bg-animated {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: -1;
            background: linear-gradient(135deg, #0a0a1a 0%, #1a0a2e 50%, #0a1a2e 100%);
            overflow: hidden;
        }

        .bg-animated::before {
            content: '';
            position: absolute;
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(101, 31, 255, 0.15) 0%, transparent 70%);
            top: -100px; left: -100px;
            animation: float1 8s ease-in-out infinite;
        }

        .bg-animated::after {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(37, 117, 252, 0.15) 0%, transparent 70%);
            bottom: -100px; right: -100px;
            animation: float2 10s ease-in-out infinite;
        }

        @keyframes float1 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(80px, 60px) scale(1.1); }
        }

        @keyframes float2 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(-60px, -80px) scale(1.1); }
        }

        /* Header */
        header {
            padding: 5rem 2rem 4rem;
            text-align: center;
            position: relative;
        }

        .badge-pill {
            display: inline-block;
            background: rgba(101, 31, 255, 0.2);
            border: 1px solid rgba(101, 31, 255, 0.5);
            color: #a78bfa;
            padding: 6px 20px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 1.5rem;
            animation: fadeDown 0.6s ease forwards;
        }

        header h1 {
            font-size: 3.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff 0%, #a78bfa 50%, #60a5fa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            animation: fadeDown 0.8s ease forwards;
        }

        header p {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.6);
            max-width: 500px;
            margin: 0 auto 2rem;
            animation: fadeDown 1s ease forwards;
        }

        .header-btns {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeDown 1.2s ease forwards;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, #651fff, #2575fc);
            color: #fff;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(101, 31, 255, 0.4);
        }

        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(101, 31, 255, 0.6);
            text-decoration: none;
            color: #fff;
        }

        .btn-outline-custom {
            background: transparent;
            color: #fff;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            border: 2px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
        }

        .btn-outline-custom:hover {
            background: rgba(255,255,255,0.1);
            border-color: rgba(255,255,255,0.6);
            transform: translateY(-3px);
            text-decoration: none;
            color: #fff;
        }

        /* Stats Bar */
        .stats-bar {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
            padding: 2rem;
            background: rgba(255,255,255,0.03);
            border-top: 1px solid rgba(255,255,255,0.05);
            border-bottom: 1px solid rgba(255,255,255,0.05);
            margin-bottom: 4rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-item h3 {
            font-size: 2rem;
            font-weight: 800;
            background: linear-gradient(135deg, #a78bfa, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-item p {
            color: rgba(255,255,255,0.5);
            font-size: 0.9rem;
        }

        /* Main */
        main {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 2rem 4rem;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2rem;
            font-weight: 800;
            color: #fff;
            margin-bottom: 0.5rem;
        }

        .section-title p {
            color: rgba(255,255,255,0.5);
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 4rem;
        }

        .card {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            padding: 2rem;
            border-radius: 20px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            right: 0; height: 2px;
            background: linear-gradient(90deg, #651fff, #2575fc);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            background: rgba(255,255,255,0.07);
            border-color: rgba(101, 31, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        .card:hover::before {
            opacity: 1;
        }

        .card-icon {
            width: 55px;
            height: 55px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 1.2rem;
        }

        .icon-purple { background: rgba(101, 31, 255, 0.2); color: #a78bfa; }
        .icon-blue   { background: rgba(37, 117, 252, 0.2); color: #60a5fa; }
        .icon-green  { background: rgba(16, 185, 129, 0.2); color: #34d399; }
        .icon-pink   { background: rgba(236, 72, 153, 0.2); color: #f472b6; }
        .icon-orange { background: rgba(249, 115, 22, 0.2); color: #fb923c; }
        .icon-teal   { background: rgba(20, 184, 166, 0.2); color: #2dd4bf; }

        .card h2 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            color: #fff;
        }

        .card p {
            color: rgba(255,255,255,0.55);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .card ul {
            list-style: none;
            padding: 0;
        }

        .card ul li {
            color: rgba(255,255,255,0.6);
            font-size: 0.95rem;
            padding: 6px 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card ul li:last-child { border-bottom: none; }

        .card ul li::before {
            content: '✓';
            color: #34d399;
            font-weight: 700;
            font-size: 0.85rem;
        }

        /* Links card */
        .links-row {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .link-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .link-btn-github {
            background: rgba(255,255,255,0.08);
            color: #fff;
            border: 1px solid rgba(255,255,255,0.15);
        }

        .link-btn-github:hover {
            background: rgba(255,255,255,0.15);
            color: #fff;
            text-decoration: none;
            transform: translateY(-2px);
        }

        .link-btn-aws {
            background: rgba(249, 115, 22, 0.15);
            color: #fb923c;
            border: 1px solid rgba(249, 115, 22, 0.3);
        }

        .link-btn-aws:hover {
            background: rgba(249, 115, 22, 0.25);
            color: #fb923c;
            text-decoration: none;
            transform: translateY(-2px);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 2rem;
            background: rgba(0,0,0,0.3);
            border-top: 1px solid rgba(255,255,255,0.05);
            color: rgba(255,255,255,0.4);
            font-size: 0.9rem;
        }

        footer span {
            color: #a78bfa;
        }

        /* Animations */
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 600px) {
            header h1 { font-size: 2.2rem; }
            .stats-bar { gap: 1.5rem; }
        }
    </style>
</head>
<body>

    <div class="bg-animated"></div>

    <!-- Header -->
    <header>
        <div class="badge-pill">🚀 CI/CD POWERED · AWS EC2 · DOCKER</div>
        <h1>Welcome to My PHP App!</h1>
        <p>Dynamic PHP, Static Design — fully CI/CD ready and cloud deployed.</p>
        <div class="header-btns">
            <a href="#" class="btn-primary-custom"><i class="fab fa-github"></i> &nbsp;View Repository</a>
            <a href="#" class="btn-outline-custom"><i class="fab fa-aws"></i> &nbsp;AWS ECR</a>
        </div>
    </header>

    <!-- Stats Bar -->
    <div class="stats-bar">
        <div class="stat-item">
            <h3>100%</h3>
            <p>Automated Deploys</p>
        </div>
        <div class="stat-item">
            <h3>Docker</h3>
            <p>Containerized</p>
        </div>
        <div class="stat-item">
            <h3>AWS</h3>
            <p>Cloud Hosted</p>
        </div>
        <div class="stat-item">
            <h3>CI/CD</h3>
            <p>GitHub Actions</p>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <div class="section-title">
            <h2>Everything You Need</h2>
            <p>Built with modern DevOps practices and cloud infrastructure</p>
        </div>

        <div class="cards-grid">

            <!-- About -->
            <div class="card">
                <div class="card-icon icon-purple"><i class="fas fa-info-circle"></i></div>
                <h2>About This App</h2>
                <p>A simple PHP application deployed via GitHub Actions CI/CD pipeline to AWS EC2 using Docker & ECR for seamless cloud delivery.</p>
            </div>

            <!-- Features -->
            <div class="card">
                <div class="card-icon icon-blue"><i class="fas fa-bolt"></i></div>
                <h2>Features</h2>
                <ul>
                    <li>Auto builds on push to main</li>
                    <li>Dockerized deployment</li>
                    <li>Latest image pulled on EC2</li>
                    <li>Responsive design</li>
                </ul>
            </div>

            <!-- Tech Stack -->
            <div class="card">
                <div class="card-icon icon-green"><i class="fas fa-layer-group"></i></div>
                <h2>Tech Stack</h2>
                <ul>
                    <li>PHP 8.x Backend</li>
                    <li>Docker & AWS ECR</li>
                    <li>GitHub Actions CI/CD</li>
                    <li>AWS EC2 Hosting</li>
                </ul>
            </div>

            <!-- Pipeline -->
            <div class="card">
                <div class="card-icon icon-pink"><i class="fas fa-code-branch"></i></div>
                <h2>CI/CD Pipeline</h2>
                <p>Push to main → GitHub Actions triggers → Docker image built → Pushed to ECR → EC2 pulls & runs latest image automatically.</p>
            </div>

            <!-- Security -->
            <div class="card">
                <div class="card-icon icon-orange"><i class="fas fa-shield-alt"></i></div>
                <h2>Security</h2>
                <ul>
                    <li>Secrets via GitHub Secrets</li>
                    <li>IAM Role based access</li>
                    <li>Secure ECR registry</li>
                    <li>Isolated containers</li>
                </ul>
            </div>

            <!-- Links -->
            <div class="card">
                <div class="card-icon icon-teal"><i class="fas fa-link"></i></div>
                <h2>Quick Links</h2>
                <p>Access project resources and cloud infrastructure below.</p>
                <div class="links-row">
                    <a href="#" class="link-btn link-btn-github"><i class="fab fa-github"></i> GitHub</a>
                    <a href="#" class="link-btn link-btn-aws"><i class="fab fa-aws"></i> AWS ECR</a>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer>
        &copy; <?php echo date('Y'); ?> My PHP App. Built with <span>♥</span> using PHP, Docker & AWS.
    </footer>

</body>
</html>
