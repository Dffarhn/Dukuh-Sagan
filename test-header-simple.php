<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Header Simple - Dusun Dagan</title>
    <style>
        /* Reset dan basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        
        /* Header styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            background: transparent;
            transition: all 0.3s ease;
            padding: 1rem 0;
        }
        
        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: #10b981;
        }
        
        .btn-contact {
            background: transparent;
            color: white;
            border: 2px solid white;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .btn-contact:hover {
            background: white;
            color: #1e293b;
        }
        
        /* Header scrolled state */
        .header-scrolled {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .header-scrolled .logo {
            color: #1e293b !important;
        }
        
        .header-scrolled .nav-links a {
            color: #1e293b !important;
        }
        
        .header-scrolled .nav-links a:hover {
            color: #10b981 !important;
        }
        
        .header-scrolled .btn-contact {
            background: #10b981;
            color: white;
            border-color: #10b981;
        }
        
        .header-scrolled .btn-contact:hover {
            background: #059669;
            border-color: #059669;
        }
        
        /* Content untuk testing scroll */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            font-weight: bold;
        }
        
        .content {
            padding: 4rem 2rem;
            background: #f8fafc;
        }
        
        .section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            background: white;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .section h2 {
            color: #1e293b;
            margin-bottom: 1rem;
        }
        
        .section p {
            color: #64748b;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <nav>
            <div class="nav-container">
                <a href="#" class="logo">Dusun Dagan</a>
                <ul class="nav-links">
                    <li><a href="#budaya">Budaya</a></li>
                    <li><a href="#sejarah">Sejarah</a></li>
                    <li><a href="#umkm">UMKM</a></li>
                    <li><a href="#tokoh">Tokoh</a></li>
                    <li><a href="#kontak" class="btn-contact">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <!-- Hero Section -->
    <div class="hero">
        <h1>Scroll untuk test header effect</h1>
    </div>
    
    <!-- Content -->
    <div class="content">
        <div class="section">
            <h2>Section 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        
        <div class="section">
            <h2>Section 2</h2>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        
        <div class="section">
            <h2>Section 3</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        
        <div class="section">
            <h2>Section 4</h2>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
        </div>
        
        <div class="section">
            <h2>Section 5</h2>
            <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
        </div>
    </div>
    
    <script>
        // Header scroll effect
        const header = document.getElementById('header');
        
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 50) {
                header.classList.add('header-scrolled');
                console.log('Header scrolled - class added');
            } else {
                header.classList.remove('header-scrolled');
                console.log('Header not scrolled - class removed');
            }
        });
        
        // Log untuk debugging
        console.log('Script loaded');
        console.log('Header element:', header);
    </script>
</body>
</html>
