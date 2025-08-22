<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Header Final - Dusun Dagan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <!-- Hero Section untuk testing -->
    <section class="relative overflow-hidden min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
        <div class="relative z-10 container mx-auto px-6 lg:px-8 flex items-center justify-center min-h-screen">
            <div class="max-w-6xl mx-auto text-center">
                <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-8">
                    Scroll untuk test header effect
                </h1>
                <p class="text-xl text-gray-300 mb-8">
                    Header akan berubah dari transparan ke putih saat di-scroll
                </p>
            </div>
        </div>
    </section>
    
    <!-- Content untuk testing scroll -->
    <div class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto space-y-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Section 1</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Section 2</h2>
                    <p class="text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Section 3</h2>
                    <p class="text-gray-600">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Section 4</h2>
                    <p class="text-gray-600">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Section 5</h2>
                    <p class="text-gray-600">Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="assets/js/main.js"></script>
    
    <script>
    // Additional debugging
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Page loaded');
        
        // Check if header exists
        const header = document.getElementById('header');
        if (header) {
            console.log('Header found:', header);
            console.log('Header classes:', header.className);
        } else {
            console.log('Header not found');
        }
        
        // Test scroll effect
        setTimeout(() => {
            if (header) {
                header.classList.add('header-scrolled');
                console.log('Test: Added header-scrolled class');
                
                setTimeout(() => {
                    header.classList.remove('header-scrolled');
                    console.log('Test: Removed header-scrolled class');
                }, 2000);
            }
        }, 1000);
    });
    </script>
</body>
</html>
