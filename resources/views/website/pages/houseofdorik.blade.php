@extends('website.layout.websitemain')
@section('title', 'House Of Dorik Marketing Plan | ' . config('app.name'))
@section('content')
<style>
    .header {
        background: linear-gradient(135deg, #8B4513 0%, #D2691E 50%, #CD853F 100%);
        color: white;
        padding: 40px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>') repeat;
        opacity: 0.3;
    }

    .header h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 10px;
        position: relative;
        z-index: 1;
    }

    .header .subtitle {
        font-size: 1.2rem;
        opacity: 0.9;
        position: relative;
        z-index: 1;
    }

    .content {
        padding: 40px;
    }

    .section {
        margin-bottom: 40px;
    }

    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.8rem;
        color: #8B4513;
        margin-bottom: 20px;
        border-bottom: 3px solid #D2691E;
        padding-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .card {
        background: linear-gradient(135deg, #fdf7f0 0%, #f8f4f0 100%);
        border-radius: 15px;
        padding: 25px;
        border-left: 5px solid #D2691E;
        box-shadow: 0 5px 20px rgba(139, 69, 19, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.3rem;
        color: #8B4513;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .card-content {
        font-size: 0.95rem;
        line-height: 1.6;
    }

    .highlight-box {
        background: linear-gradient(135deg, #8B4513 0%, #D2691E 100%);
        color: white;
        padding: 25px;
        border-radius: 15px;
        margin: 20px 0;
        box-shadow: 0 10px 30px rgba(139, 69, 19, 0.3);
    }

    .highlight-box h3 {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .two-column {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .list-item {
        background: white;
        padding: 15px;
        margin: 10px 0;
        border-radius: 10px;
        border-left: 4px solid #D2691E;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .list-item strong {
        color: #8B4513;
        font-weight: 600;
    }

    .strategy-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin: 20px 0;
    }

    .strategy-card {
        background: white;
        padding: 20px;
        border-radius: 12px;
        border: 2px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .strategy-card:hover {
        border-color: #D2691E;
        box-shadow: 0 8px 25px rgba(139, 69, 19, 0.15);
    }

    .strategy-card h4 {
        color: #8B4513;
        font-family: 'Playfair Display', serif;
        margin-bottom: 10px;
        font-size: 1.1rem;
    }

    .emoji {
        font-size: 1.5rem;
        margin-right: 10px;
    }

    .footer {
        background: linear-gradient(135deg, #2c2c2c 0%, #4a4a4a 100%);
        color: white;
        padding: 30px;
        text-align: center;
        margin-top: 40px;
    }

    .pricing-highlight {
        background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
        color: white;
        padding: 20px;
        border-radius: 12px;
        text-align: center;
        margin: 20px 0;
        font-weight: 600;
        box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
    }

    @media (max-width: 768px) {
        .header h1 {
            font-size: 2rem;
        }

        .two-column {
            grid-template-columns: 1fr;
        }

        .content {
            padding: 20px;
        }
    }

</style>
<canvas id="gradient-canvas"></canvas>
<div class="container pt-4 position-relative">
    <div class="header">
        <h1>House Of Dorik</h1>
        <div class="subtitle">Luxury Ethnic Fashion Marketing Strategy</div>
    </div>

    <div class="content">
        <!-- Core Objectives -->
        <div class="section">
            <h2 class="section-title">
                <span class="emoji">🎯</span>
                Core Objectives
            </h2>
            <div class="highlight-box">
                <div class="list-item">
                    <strong>Drive Quality Traffic</strong> to Instagram and Website
                </div>
                <div class="list-item">
                    <strong>Increase Premium Conversions</strong> (Sales)
                </div>
                <div class="list-item">
                    <strong>Build Luxury Ethnic Fashion Brand Presence</strong>
                </div>
            </div>
        </div>

        <!-- Target Audience -->
        <div class="section">
            <h2 class="section-title">
                <span class="emoji">💠</span>
                Target Audience
            </h2>
            <div class="grid">
                <div class="card">
                    <div class="card-title">Demographics</div>
                    <div class="card-content">
                        <div class="list-item">
                            <strong>Age Group:</strong> 22–45 years
                        </div>
                        <div class="list-item">
                            <strong>Gender:</strong> Female (Primary), Male (Secondary - Gifting/Brides)
                        </div>
                        <div class="list-item">
                            <strong>Location:</strong> India (Tier-1), NRI Markets (USA, UK, UAE, Canada, Australia)
                        </div>
                        <div class="list-item">
                            <strong>Income Level:</strong> ₹25L+/Annum (India) or Equivalent in USD
                        </div>
                        <div class="list-item">
                            <strong>Marital Status:</strong> Brides-To-Be, Newlyweds, Fashion Influencers, Affluent Families
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-title">Interest-Based Targeting</div>
                    <div class="card-content">
                        <div class="list-item">
                            <strong>Bridal Shopping & Luxury Fashion</strong>
                        </div>
                        <div class="list-item">
                            <strong>Designer Preferences:</strong> Sabyasachi, Manish Malhotra, Falguni Shane Peacock, Anita Dongre
                        </div>
                        <div class="list-item">
                            <strong>Wedding Platforms:</strong> Wedding Wire, WedMeGood, ShaadiSaga
                        </div>
                        <div class="list-item">
                            <strong>Fashion Events:</strong> Indian Couture Week, Fashion Bloggers & Pages
                        </div>
                        <div class="list-item">
                            <strong>Multi-designer Stores:</strong> Ogaan, Aza, Pernia's Pop-Up Shop
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Strategy -->
        <div class="section">
            <h2 class="section-title">
                <span class="emoji">📱</span>
                Instagram Strategy
            </h2>
            <div class="two-column">
                <div>
                    <h3 style="color: #8B4513; margin-bottom: 15px;">Content Pillars</h3>
                    <div class="strategy-card">
                        <h4>Bridal Showcase</h4>
                        <p>Reels of fittings, behind the scenes content</p>
                    </div>
                    <div class="strategy-card">
                        <h4>Real Bride Testimonials</h4>
                        <p>Before-After and Wedding Day Looks</p>
                    </div>
                    <div class="strategy-card">
                        <h4>Designer Talk</h4>
                        <p>Founder speaks on luxury fashion, trending styles</p>
                    </div>
                    <div class="strategy-card">
                        <h4>Festive Styling</h4>
                        <p>For Diwali, Karwachauth, Mehendi, etc.</p>
                    </div>
                    <div class="strategy-card">
                        <h4>Collaborations</h4>
                        <p>Style with influencers and stylists</p>
                    </div>
                </div>

                <div>
                    <h3 style="color: #8B4513; margin-bottom: 15px;">Posting Schedule</h3>
                    <div class="highlight-box">
                        <div class="list-item">
                            <strong>4 Reels/week</strong> (mix of BTS, model walk, bride stories)
                        </div>
                        <div class="list-item">
                            <strong>3 Carousels/week</strong> (detailed product + styling tips)
                        </div>
                        <div class="list-item">
                            <strong>Daily Stories</strong> (polls, Q&A, reminders, countdowns)
                        </div>
                        <div class="list-item">
                            <strong>Instagram Shopping</strong> setup with website sync
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paid Ad Strategy -->
        <div class="section">
            <h2 class="section-title">
                <span class="emoji">📈</span>
                Paid Advertising Strategy
            </h2>
            <div class="two-column">
                <div>
                    <h3 style="color: #8B4513; margin-bottom: 15px;">🧿 Facebook & Instagram Ads</h3>
                    <div class="strategy-card">
                        <h4>Brand Awareness</h4>
                        <p>Target elite bridal market with luxury ad creatives</p>
                    </div>
                    <div class="strategy-card">
                        <h4>Conversion Campaigns</h4>
                        <p>Retarget site visitors, IG engagers, cart abandoners</p>
                    </div>
                    <div class="strategy-card">
                        <h4>Engagement Campaigns</h4>
                        <p>Direct WhatsApp message and enquiry generation</p>
                    </div>
                </div>

                <div>
                    <h3 style="color: #8B4513; margin-bottom: 15px;">Google Ads</h3>
                    <div class="strategy-card">
                        <h4>Search Ad Campaign</h4>
                        <p>Target "Buy Designer Lehenga Online", "Luxury Bridal Lehenga", "Wedding Lehenga for NRI Brides"</p>
                    </div>
                    <div class="strategy-card">
                        <h4>Shopping Ad Campaign</h4>
                        <p>For those already searching similar items on Google</p>
                    </div>
                    <div class="strategy-card">
                        <h4>Display Ad Campaign</h4>
                        <p>For IG engagers, site visitors, cart abandoners</p>
                    </div>
                </div>
            </div>

            <div class="highlight-box">
                <h3>Geographic Targeting</h3>
                <div class="two-column">
                    <div>
                        <strong>India - Tier 1 Cities:</strong><br>
                        Mumbai, Delhi NCR, Bangalore, Hyderabad, Pune and more
                    </div>
                    <div>
                        <strong>NRI Markets (High Conversion):</strong><br>
                        New Jersey, California, Texas, London, Birmingham, Toronto, Vancouver
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO Strategy -->
        <div class="section">
            <h2 class="section-title">
                <span class="emoji">🔍</span>
                SEO Strategy
            </h2>
            <div class="strategy-grid">
                <div class="card">
                    <div class="card-title">On-Page SEO Keywords</div>
                    <div class="card-content">
                        <div class="list-item">Luxury Bridal Lehenga</div>
                        <div class="list-item">Designer Wedding Lehenga Online</div>
                        <div class="list-item">Custom Made Lehengas for Bride</div>
                        <div class="list-item">High-End Indian Couture</div>
                        <div class="list-item">Bridal Lehenga for Destination Wedding</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-title">Off-Page SEO</div>
                    <div class="card-content">
                        <div class="list-item">WedMeGood Link Building</div>
                        <div class="list-item">Weddingz Link Building</div>
                        <div class="list-item">ShaadiWish Link Building</div>
                        <div class="list-item">Fashion blogs (India Today Luxe, Vogue India)</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-title">Blog Content Ideas</div>
                    <div class="card-content">
                        <div class="list-item">Top Bridal Lehenga Trends in 2025</div>
                        <div class="list-item">What Makes a Lehenga Truly Designer?</div>
                        <div class="list-item">How to Pick Your Lehenga Based on Your Wedding Destination</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Influencer Marketing -->
        <div class="section">
            <h2 class="section-title">
                <span class="emoji">🤝</span>
                Influencer Marketing Plan
            </h2>
            <div class="two-column">
                <div class="card">
                    <div class="card-title">Tier A Influencers (1M+)</div>
                    <div class="card-content">
                        <div class="list-item">
                            <strong>Target:</strong> Luxury Fashion & Wedding Niche
                        </div>
                        <div class="list-item">
                            <strong>Examples:</strong> Masoom Minawala, House of Misu
                        </div>
                        <div class="list-item">
                            <strong>Frequency:</strong> 1 Collaboration every 2 months with bridal-themed content
                        </div>
                        <div class="list-item">
                            <strong>Deliverables:</strong> 1 IG Reel + 1 Story set + Instagram Collab
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-title">Tier B (100K – 500K)</div>
                    <div class="card-content">
                        <div class="list-item">
                            <strong>Target:</strong> Fashion bloggers from Delhi, Mumbai, Chandigarh
                        </div>
                        <div class="list-item">
                            <strong>Frequency:</strong> Work with 5–7 influencers monthly
                        </div>
                        <div class="list-item">
                            <strong>Focus:</strong> Real bride micro-influencers for more trust
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offers & Retargeting -->
        <div class="section">
            <h2 class="section-title">
                <span class="emoji">🎁</span>
                Offers + Retargeting Funnels
            </h2>
            <div class="pricing-highlight">
                Flat ₹1999 Off on First Order
            </div>
            <div class="grid">
                <div class="list-item">
                    <strong>WhatsApp Integration:</strong> Convert leads instantly through business WhatsApp
                </div>
                <div class="list-item">
                    <strong>Free Consultation:</strong> Complimentary Lehenga Styling Consultation
                </div>
                <div class="list-item">
                    <strong>Retargeting:</strong> Facebook + Instagram + Google Retargeting Ads
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
