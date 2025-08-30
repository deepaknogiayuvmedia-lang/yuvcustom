<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce CGI Product Packages - CGI Reel Features</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,0 1000,200 1000,1000 0,800"/><circle fill="%23ffffff05" cx="200" cy="200" r="100"/><circle fill="%23ffffff05" cx="800" cy="600" r="150"/></svg>');
            animation: float 15s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(2deg);
            }
        }

        .hero-content {
            text-align: center;
            z-index: 2;
            max-width: 900px;
            padding: 0 2rem;
        }

        .hero h1 {
            font-size: 4.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1rem;
            opacity: 0;
            animation: slideUp 1s ease-out 0.5s forwards;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero .subtitle {
            font-size: 1.8rem;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 1rem;
            opacity: 0;
            animation: slideUp 1s ease-out 1s forwards;
        }

        .hero .tagline {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 3rem;
            opacity: 0;
            animation: slideUp 1s ease-out 1.3s forwards;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            opacity: 0;
            animation: slideUp 1s ease-out 1.8s forwards;
        }

        .cta-button {
            display: inline-block;
            padding: 18px 45px;
            background: linear-gradient(45deg, #ff6b6b, #ee5a52);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.2rem;
            transition: all 0.4s ease;
            box-shadow: 0 15px 35px rgba(255, 107, 107, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cta-button.secondary {
            background: linear-gradient(45deg, #4ecdc4, #44a08d);
            box-shadow: 0 15px 35px rgba(78, 205, 196, 0.4);
        }

        .cta-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 20px 50px rgba(255, 107, 107, 0.5);
        }

        .cta-button.secondary:hover {
            box-shadow: 0 20px 50px rgba(78, 205, 196, 0.5);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Section Titles */
        .section-title {
            text-align: center;
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: #333;
            position: relative;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 4rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .section-title::after {
            content: '';
            width: 120px;
            height: 5px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            display: block;
            margin: 25px auto;
            border-radius: 3px;
        }

        /* E-commerce Packages */
        .ecommerce-packages {
            padding: 120px 0;
            background: linear-gradient(135deg, #f8f9ff 0%, #e8f2ff 100%);
        }

        .packages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 3rem;
            margin-top: 5rem;
        }

        .package-card {
            background: white;
            border-radius: 25px;
            padding: 3rem;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.12);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
        }

        .package-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 14px;
            background: linear-gradient(45deg, #667eea, #764ba2);
        }

        .package-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 35px 100px rgba(0, 0, 0, 0.2);
            border-color: #667eea;
        }

        .package-card.popular {
            border: 3px solid #ff6b6b;
            transform: scale(1.05);
            box-shadow: 0 30px 90px rgba(255, 107, 107, 0.2);
        }

        .package-card.popular::before {
            background: linear-gradient(45deg, #ff6b6b, #ee5a52);
        }

        .popular-badge {
            position: absolute;
            top: 0px;
            right: 20px;
            background: linear-gradient(45deg, #ff6b6b, #ee5a52);
            color: white;
            padding: 8px 25px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        .package-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .package-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .package-description {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 1.5rem;
        }

        .package-price {
            font-size: 3.5rem;
            font-weight: 900;
            color: #667eea;
            margin-bottom: 0.5rem;
        }

        .price-duration {
            font-size: 1rem;
            color: #888;
            font-weight: 500;
        }

        .package-features {
            list-style: none;
            margin-bottom: 3rem;
        }

        .package-features li {
            padding: 1rem 0;
            border-bottom: 1px solid #f5f5f5;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.05rem;
        }

        .package-features li:last-child {
            border-bottom: none;
        }

        .feature-name {
            font-weight: 600;
            color: #333;
        }

        .feature-value {
            color: #667eea;
            font-weight: 700;
            text-align: right;
        }

        .feature-value.included {
            color: #4caf50;
            font-size: 1.2rem;
        }

        .feature-value.premium {
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 800;
        }

        .package-button {
            width: 100%;
            padding: 18px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.4s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }

        .package-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
            background: linear-gradient(45deg, #5a6fd8, #6a4c93);
        }

        /* Product Categories */
        .product-categories {
            padding: 120px 0;
            background: white;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        .category-card {
            background: linear-gradient(135deg, #f8f9ff 0%, #e8f2ff 100%);
            padding: 2.5rem;
            border-radius: 20px;
            border: 2px solid #e0e8ff;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.05), rgba(118, 75, 162, 0.05));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .category-card:hover::before {
            opacity: 1;
        }

        .category-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.15);
            border-color: #667eea;
        }

        .category-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .category-title {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #333;
        }

        .category-products {
            list-style: none;
        }

        .category-products li {
            padding: 0.4rem 0;
            color: #555;
            position: relative;
            padding-left: 25px;
            font-size: 1.05rem;
        }

        .category-products li::before {
            content: '🛍️';
            position: absolute;
            left: 0;
            font-size: 0.9rem;
        }

        /* Features Section */
        .features {
            padding: 120px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 3rem;
            margin-top: 5rem;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.12);
            padding: 3rem 2rem;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
            transition: all 0.6s ease;
            opacity: 0;
        }

        .feature-card:hover::before {
            animation: shimmer 1.5s ease-in-out;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(45deg);
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: translateX(100%) translateY(100%) rotate(45deg);
                opacity: 0;
            }
        }

        .feature-card:hover {
            background: rgba(255, 255, 255, 0.18);
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }

        .feature-icon {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .feature-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .feature-description {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9ff 0%, #e8f2ff 100%);
            text-align: center;
        }

        .cta-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: #333;
        }

        .cta-description {
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 3rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 3rem;
            }

            .hero .subtitle {
                font-size: 1.4rem;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .packages-grid {
                grid-template-columns: 1fr;
            }

            .package-card.popular {
                transform: none;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>E-Commerce CGI</h1>
            <p class="subtitle">Professional Product Animation Packages</p>
            <p class="tagline">Boost Your Sales with Stunning 3D Product Visualizations</p>
            <div class="cta-buttons">
                <a href="#packages" class="cta-button">View Packages</a>
                <a href="#products" class="cta-button secondary">Product Types</a>
            </div>
        </div>
    </section>

    <!-- E-commerce Packages -->
    <section class="ecommerce-packages" id="packages">
        <div class="container">
            <h2 class="section-title fade-in">E-Commerce Packages</h2>
            <p class="section-subtitle fade-in">Specifically designed for online retail success with conversion-focused
                features</p>

            <div class="packages-grid">
                <!-- Product Showcase Package -->
                <div class="package-card fade-in">
                    <div class="package-header">
                        <h3 class="package-title">Booster Package</h3>
                        <p class="package-description">Perfect for single product demonstrations and basic e-commerce
                            listings</p>
                        <div class="package-price">₹12,000/-</div>
                        <div class="price-duration">Per product</div>
                    </div>
                    <ul class="package-features">
                        <li><span class="feature-name">360° Product View</span> <span
                                class="feature-value included">✔️</span></li>
                        <li><span class="feature-name">Multiple Angles</span> <span class="feature-value">4-6
                                Views</span></li>
                        <li><span class="feature-name">Resolution</span> <span class="feature-value">1-2K UHD</span>
                        </li>
                        <li><span class="feature-name">Background Options</span> <span class="feature-value">3
                                Variants</span></li>
                        <li><span class="feature-name">Zoom Details</span> <span
                                class="feature-value included">✔️</span></li>
                        <li><span class="feature-name">Creative Images</span> <span class="feature-value">5</span></li>
                        <li><span class="feature-name">Animation Duration</span> <span class="feature-value">15-20
                                sec</span></li>
                        <li><span class="feature-name">Delivery Format</span> <span class="feature-value">MP4</span>
                        </li>
                        <li><span class="feature-name">Revisions</span> <span class="feature-value">1</span></li>
                        <li><span class="feature-name">Aspect Ratio</span> <span class="feature-value">1</span></li>
                        <li><span class="feature-name">Background Music</span> <span class="feature-value">✔️</span>
                        </li>
                        <li><span class="feature-name">Simulation</span> <span class="feature-value">Basic</span></li>
                    </ul>
                    <button class="package-button">Select Package</button>
                </div>

                <!-- Product Collection Package -->
                <div class="package-card popular fade-in">
                    <div class="popular-badge">Most Popular</div>
                    <div class="package-header">
                        <h3 class="package-title">Growth Package</h3>
                        <p class="package-description">Ideal for product catalogs and comprehensive e-commerce campaigns
                        </p>
                        <div class="package-price">₹28,000/-</div>
                        <div class="price-duration">Per product</div>
                    </div>
                    <ul class="package-features">
                        <li><span class="feature-name">360° Product View</span> <span
                                class="feature-value included">✔️</span></li>
                        <li><span class="feature-name">Multiple Angles</span> <span class="feature-value">6-8
                                Views</span></li>
                        <li><span class="feature-name">Resolution</span> <span class="feature-value">3K UHD</span></li>
                        <li><span class="feature-name">Lifestyle Scenes</span> <span
                                class="feature-value premium">Premium</span></li>
                        <li><span class="feature-name">Animation Duration</span> <span class="feature-value">25-35
                                sec</span></li>
                        <li><span class="feature-name">Revisions</span> <span class="feature-value">2</span></li>
                        <li><span class="feature-name">Aspect Ratio</span> <span class="feature-value">1</span></li>
                        <li><span class="feature-name">Sound Design</span> <span class="feature-value">✔️</span></li>
                        <li><span class="feature-name">Voice Over</span> <span class="feature-value">✔️</span></li>
                        <li><span class="feature-name">Images</span> <span class="feature-value">3 Creative + 3
                                Infographic</span></li>
                        <li><span class="feature-name">Simulation</span> <span class="feature-value">Advance</span></li>
                    </ul>
                    <button class="package-button">Select Package</button>
                </div>

                <!-- Premium Lifestyle Package -->
                <div class="package-card fade-in">
                    <div class="package-header">
                        <h3 class="package-title">Dominator Package</h3>
                        <p class="package-description">High-end brand campaigns with cinematic quality and lifestyle
                            integration</p>
                        <div class="package-price">₹45,000/-</div>
                        <div class="price-duration">Per product</div>
                    </div>
                    <ul class="package-features">
                        <li><span class="feature-name">Cinematic Animation</span> <span
                                class="feature-value included">✔️</span></li>
                        <li><span class="feature-name">Custom Environments</span> <span
                                class="feature-value premium">Multiple</span></li>
                        <li><span class="feature-name">Resolution</span> <span class="feature-value">4K UHD</span></li>
                        <li><span class="feature-name">Character Integration</span> <span
                                class="feature-value included">✔️</span></li>
                        <li><span class="feature-name">Advanced Lighting</span> <span
                                class="feature-value premium">Studio Quality</span></li>
                        <li><span class="feature-name">Sound Design</span> <span
                                class="feature-value included">✔️</span></li>
                        <li><span class="feature-name">Animation Duration</span> <span class="feature-value">45-60
                                sec</span></li>
                        <li><span class="feature-name">Aspect Ratio</span> <span class="feature-value premium">2</span>
                        </li>
                        <li><span class="feature-name">Revisions</span> <span class="feature-value">3</span></li>
                        <li><span class="feature-name">Custom Environment</span> <span
                                class="feature-value">multiple</span></li>
                        <li><span class="feature-name">Simulation </span> <span
                                class="feature-value">Premium</span></li>
                        <li><span class="feature-name">Images</span> <span class="feature-value">5 White BG, 5 Creative,
                                5 Infographic</span></li>
                        <li><span class="feature-name">Voice Over</span> <span class="feature-value">✔️</span></li>
                    </ul>
                    <button class="package-button">Select Package</button>
                </div>
            </div>


        </div>
        <div class="container" style="margin-top: 50px;">
            <h4 class="section-title fade-in">Add-On & Pricing</h4>
            <div class="features-grid">
                <div class="feature-card fade-in">
                    <span class="feature-icon">🔄</span>
                    <h3 class="feature-title">Duration Increase (per 5 sec)</h3>
                    <p class="feature-description">Rs. 2000 /-</p>
                </div>

                <div class="feature-card fade-in">
                    <span class="feature-icon">📱</span>
                    <h3 class="feature-title">Voice Over (per minute)</h3>
                    <p class="feature-description">Rs. 1000 /-</p>
                </div>

                <div class="feature-card fade-in">
                    <span class="feature-icon">🎨</span>
                    <h3 class="feature-title">Extra Revision (per revision)</h3>
                    <p class="feature-description">2000 /-</p>
                </div>

                <div class="feature-card fade-in">
                    <span class="feature-icon">📈</span>
                    <h3 class="feature-title">Sound Design (per track)</h3>
                    <p class="feature-description">Rs. 3000 /-</p>
                </div>

                <div class="feature-card fade-in">
                    <span class="feature-icon">⚡</span>
                    <h3 class="feature-title">Aspect Ratio (each type)</h3>
                    <p class="feature-description">Rs. 1000 /-</p>
                </div>

            </div>
        </div>

    </section>

    <!-- Product Categories -->
    <section class="product-categories" id="products">
        <div class="container">
            <h2 class="section-title fade-in">Perfect For These Products</h2>
            <p class="section-subtitle fade-in">Our e-commerce packages work brilliantly with these product categories
            </p>

            <div class="categories-grid">
                <div class="category-card fade-in">
                    <span class="category-icon">👗</span>
                    <h3 class="category-title">Fashion & Apparel</h3>
                    <ul class="category-products">
                        <li>Clothing & Accessories</li>
                        <li>Shoes & Footwear</li>
                        <li>Jewelry & Watches</li>
                        <li>Bags & Handbags</li>
                        <li>Sunglasses & Eyewear</li>
                    </ul>
                </div>

                <div class="category-card fade-in">
                    <span class="category-icon">📱</span>
                    <h3 class="category-title">Electronics & Tech</h3>
                    <ul class="category-products">
                        <li>Smartphones & Tablets</li>
                        <li>Laptops & Computers</li>
                        <li>Headphones & Audio</li>
                        <li>Smart Home Devices</li>
                        <li>Gaming Accessories</li>
                    </ul>
                </div>

                <div class="category-card fade-in">
                    <span class="category-icon">🏠</span>
                    <h3 class="category-title">Home & Living</h3>
                    <ul class="category-products">
                        <li>Furniture & Decor</li>
                        <li>Kitchen Appliances</li>
                        <li>Lighting Solutions</li>
                        <li>Bedding & Textiles</li>
                        <li>Garden & Outdoor</li>
                    </ul>
                </div>

                <div class="category-card fade-in">
                    <span class="category-icon">💄</span>
                    <h3 class="category-title">Beauty & Cosmetics</h3>
                    <ul class="category-products">
                        <li>Skincare Products</li>
                        <li>Makeup & Cosmetics</li>
                        <li>Fragrances & Perfumes</li>
                        <li>Hair Care Products</li>
                        <li>Beauty Tools & Devices</li>
                    </ul>
                </div>

                <div class="category-card fade-in">
                    <span class="category-icon">⚽</span>
                    <h3 class="category-title">Sports & Fitness</h3>
                    <ul class="category-products">
                        <li>Exercise Equipment</li>
                        <li>Sports Gear</li>
                        <li>Athletic Wear</li>
                        <li>Outdoor Equipment</li>
                        <li>Fitness Accessories</li>
                    </ul>
                </div>

                <div class="category-card fade-in">
                    <span class="category-icon">🚗</span>
                    <h3 class="category-title">Automotive</h3>
                    <ul class="category-products">
                        <li>Car Accessories</li>
                        <li>Auto Parts</li>
                        <li>Vehicle Tools</li>
                        <li>Car Electronics</li>
                        <li>Motorcycle Gear</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title fade-in" style="color: white;">Why Choose Our E-Commerce CGI?</h2>
            <p class="section-subtitle fade-in" style="color: rgba(255,255,255,0.8);">Features specifically designed to
                boost your online sales and customer engagement</p>

            <div class="features-grid">
                <div class="feature-card fade-in">
                    <span class="feature-icon">🔄</span>
                    <h3 class="feature-title">360° Interactive Views</h3>
                    <p class="feature-description">Allow customers to explore your products from every angle, increasing
                        confidence and reducing returns</p>
                </div>

                <div class="feature-card fade-in">
                    <span class="feature-icon">📱</span>
                    <h3 class="feature-title">Mobile Optimized</h3>
                    <p class="feature-description">Perfect performance on all devices with fast loading times and
                        responsive design</p>
                </div>

                <div class="feature-card fade-in">
                    <span class="feature-icon">🎨</span>
                    <h3 class="feature-title">Color Variants</h3>
                    <p class="feature-description">Showcase unlimited color options without additional product
                        photography costs</p>
                </div>

                <div class="feature-card fade-in">
                    <span class="feature-icon">📈</span>
                    <h3 class="feature-title">Conversion Focused</h3>
                    <p class="feature-description">Designed to increase click-through rates and conversion rates for
                        better ROI</p>
                </div>

                <div class="feature-card fade-in">
                    <span class="feature-icon">⚡</span>
                    <h3 class="feature-title">Fast Delivery</h3>
                    <p class="feature-description">Quick turnaround times to meet your product launch deadlines and
                        market demands</p>
                </div>

                <div class="feature-card fade-in">
                    <span class="feature-icon">🌐</span>
                    <h3 class="feature-title">Platform Ready</h3>
                    <p class="feature-description">Optimized for all major e-commerce platforms - Shopify, WooCommerce,
                        Magento, Amazon</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content fade-in">
                <h2 class="cta-title">Ready to Boost Your Sales?</h2>
                <p class="cta-description">Transform your product listings with professional CGI animations that convert
                    browsers into buyers</p>
                <div class="cta-buttons">
                    <a href="https://yuvmedia.com/video-production" class="cta-button secondary">View Portfolio</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Smooth scroll animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Package button interactions
        document.querySelectorAll('.package-button').forEach(button => {
            button.addEventListener('click', function () {
                const packageName = this.closest('.package-card').querySelector('.package-title').textContent;
                const packagePrice = this.closest('.package-card').querySelector('.package-price').textContent;
                alert(`You selected the ${packageName} package at ${packagePrice}!\n\nThis package includes:\n• Professional CGI animation\n• E-commerce optimized formats\n• Mobile-ready delivery\n• Multiple revisions\n\nContact us to get started with your project!`);
            });
        });

        // Smooth scrolling for navigation buttons
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add dynamic pricing calculator (optional enhancement)
        function calculateCustomPrice() {
            // This could be expanded to include custom pricing based on selections
            console.log('Custom pricing calculator would go here');
        }

        // Enhanced hover effects for cards
        document.querySelectorAll('.category-card, .feature-card').forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-12px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add loading animation for buttons
        document.querySelectorAll('.cta-button, .package-button').forEach(button => {
            button.addEventListener('click', function () {
                const originalText = this.textContent;
                this.textContent = 'Processing...';
                this.style.opacity = '0.7';

                setTimeout(() => {
                    this.textContent = originalText;
                    this.style.opacity = '1';
                }, 2000);
            });
        });

        // Parallax effect for hero section
        // window.addEventListener('scroll', function() {
        //     const scrolled = window.pageYOffset;
        //     const hero = document.querySelector('.hero');
        //     if (hero) {
        //         hero.style.transform = `translateY(${scrolled * 0.5}px)`;
        //     }
        // });

        // Add floating animation to feature icons
        document.querySelectorAll('.feature-icon, .category-icon').forEach((icon, index) => {
            icon.style.animation = `float 3s ease-in-out ${index * 0.5}s infinite`;
        });
    </script>
</body>

</html>