<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NISREEN - เมนูทั้งหมด</title>
    <style>
        :root {
            --primary-dark: #3b2313;
            --bg-color: #f8f6f0;
            --green-accent: #4a6741;
            --text-dark: #4a3b32;
            --light-gray: #e9e6df;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Kanit', sans-serif, Tahoma;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-dark);
        }

        /* Navbar */
        .navbar {
            background-color: var(--primary-dark);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
        }
        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 14px;
        }
        .nav-icons span {
            margin-left: 20px;
            cursor: pointer;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        /* Header & Search */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .page-header h1 {
            color: var(--primary-dark);
            font-size: 32px;
        }
        .search-bar input {
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 20px;
            width: 250px;
            background-color: transparent;
        }

        /* Category Pills */
        .category-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
        }
        .pill {
            padding: 8px 20px;
            background-color: var(--light-gray);
            border-radius: 20px;
            font-size: 14px;
            cursor: pointer;
            color: var(--text-dark);
        }
        .pill.active {
            background-color: var(--green-accent);
            color: white;
        }

        /* Main Content Layout */
        .main-content {
            display: flex;
            gap: 30px;
        }

        /* Sidebar */
        .sidebar {
            width: 200px;
            flex-shrink: 0;
        }
        .sidebar-item {
            padding: 12px 15px;
            margin-bottom: 5px;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 15px;
        }
        .sidebar-item.active {
            background-color: #eeebe1;
            font-weight: bold;
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            width: 100%;
        }
        .product-card {
            background: white;
            border-radius: 15px;
            padding: 15px;
            position: relative;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            border: 1px solid #f0f0f0;
        }
        .product-img {
            width: 100%;
            height: 180px;
            background-color: var(--bg-color);
            border-radius: 10px;
            margin-bottom: 15px;
            object-fit: cover;
        }
        .badge {
            position: absolute;
            top: -10px;
            right: 10px;
            background-color: var(--green-accent);
            color: white;
            font-size: 12px;
            padding: 3px 10px;
            border-radius: 10px;
        }
        .badge.red { background-color: #c94b3a; }
        .badge.brown { background-color: #8b5a2b; }
        
        .product-info h3 {
            font-size: 16px;
            margin-bottom: 5px;
            font-weight: 500;
        }
        .product-price {
            font-size: 16px;
            color: #666;
        }
        .add-btn {
            position: absolute;
            bottom: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            background-color: var(--green-accent);
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
            gap: 10px;
        }
        .page-num {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            cursor: pointer;
            color: #666;
        }
        .page-num.active {
            background-color: var(--primary-dark);
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">NISREEN</div>
        <nav class="nav-links">
            <a href="#">หน้าแรก</a>
            <a href="#">เมนู</a>
            <a href="#">โปรโมชั่น</a>
            <a href="#">เกี่ยวกับเรา</a>
            <a href="#">ติดต่อเรา</a>
        </nav>
        <div class="nav-icons">
            <span>🔍</span>
            <span>👤</span>
            <span>🛒</span>
        </div>
    </header>

    <div class="container">
        <!-- Header & Search -->
        <div class="page-header">
            <h1>เมนูทั้งหมด</h1>
            <div class="search-bar">
                <input type="text" placeholder="🔍 ค้นหาเมนู...">
            </div>
        </div>

        <!-- Category Pills -->
        <div class="category-pills">
            <div class="pill active">ทั้งหมด</div>
            <div class="pill">ชา</div>
            <div class="pill">กาแฟ</div>
            <div class="pill">มัทฉะ</div>
            <div class="pill">ผลไม้ปั่น</div>
            <div class="pill">อิตาเลียนโซดา</div>
            <div class="pill">นมสด</div>
            <div class="pill">ชาผลไม้</div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="sidebar-item active">🍵 ทั้งหมด</div>
                <div class="sidebar-item">🫖 ชา</div>
                <div class="sidebar-item">☕ กาแฟ</div>
                <div class="sidebar-item">🌿 มัทฉะ</div>
                <div class="sidebar-item">🍓 ผลไม้ปั่น</div>
                <div class="sidebar-item">🍹 อิตาเลียนโซดา</div>
                <div class="sidebar-item">🥛 นมสด</div>
            </aside>

            <!-- Product Grid -->
            <main class="product-grid">
                <!-- Item 1 -->
                <div class="product-card">
                    <span class="badge">ขายดี</span>
                    <img src="https://via.placeholder.com/200x180/e9e6df/ffffff?text=Thai+Tea" alt="ชาไทย" class="product-img">
                    <div class="product-info">
                        <h3>ชาไทย</h3>
                        <p class="product-price">25.-</p>
                    </div>
                    <button class="add-btn">+</button>
                </div>

                <!-- Item 2 -->
                <div class="product-card">
                    <img src="https://via.placeholder.com/200x180/e9e6df/ffffff?text=Black+Tea" alt="ชาดำเย็น" class="product-img">
                    <div class="product-info">
                        <h3>ชาดำเย็น</h3>
                        <p class="product-price">20.-</p>
                    </div>
                    <button class="add-btn">+</button>
                </div>

                <!-- Item 3 -->
                <div class="product-card">
                    <img src="https://via.placeholder.com/200x180/e9e6df/ffffff?text=Lemon+Tea" alt="ชามะนาว" class="product-img">
                    <div class="product-info">
                        <h3>ชามะนาว</h3>
                        <p class="product-price">30.-</p>
                    </div>
                    <button class="add-btn">+</button>
                </div>

                <!-- Item 4 -->
                <div class="product-card">
                    <img src="https://via.placeholder.com/200x180/e9e6df/ffffff?text=Green+Tea" alt="ชาเขียว" class="product-img">
                    <div class="product-info">
                        <h3>ชาเขียว</h3>
                        <p class="product-price">25.-</p>
                    </div>
                    <button class="add-btn">+</button>
                </div>
            </main>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <span class="page-num">&lt;</span>
            <span class="page-num active">1</span>
            <span class="page-num">2</span>
            <span class="page-num">3</span>
            <span>...</span>
            <span class="page-num">&gt;</span>
        </div>
    </div>

</body>
</html>