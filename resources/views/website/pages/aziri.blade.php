@extends('website.layout.websitemain')
@section('title', 'AZIRI - 3 Month Marketing Plan | ' . config('app.name'))
@section('content')
<style>
    .section {
        margin-bottom: 30px;
    }

    .section h2 {
        color: #007bff;
        font-size: 22px;
        margin-bottom: 15px;
        border-left: 4px solid #007bff;
        padding-left: 15px;
    }

    .section h3 {
        color: #333;
        font-size: 18px;
        margin-bottom: 10px;
        margin-top: 20px;
    }

    .metric-box {
        background: linear-gradient(135deg, #007bff, #0056b3);
        color: white;
        padding: 20px;
        border-radius: 10px;
        margin: 20px 0;
        text-align: center;
    }

    .metric-box h4 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .metric-box p {
        font-size: 24px;
        font-weight: bold;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin: 20px 0;
    }

    .card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 20px;
    }

    .card h4 {
        color: #007bff;
        margin-bottom: 10px;
    }

    .timeline {
        position: relative;
        padding-left: 30px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 10px;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #007bff;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 20px;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 8px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -25px;
        top: 20px;
        width: 12px;
        height: 12px;
        background: #007bff;
        border-radius: 50%;
    }

    .timeline-item h4 {
        color: #007bff;
        margin-bottom: 5px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background: #007bff;
        color: white;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background: #f8f9fa;
    }

    .highlight {
        background: #fff3cd;
        border: 1px solid #ffeaa7;
        padding: 15px;
        border-radius: 8px;
        margin: 15px 0;
    }

    .highlight strong {
        color: #856404;
    }

    .platform-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 15px;
        margin: 20px 0;
    }

    .platform-card {
        background: linear-gradient(135deg, #28a745, #20c997);
        color: white;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
    }

    .platform-card h4 {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .budget-table {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 20px;
        margin: 20px 0;
    }

    @media print {
        .container {
            box-shadow: none;
        }

        .page {
            page-break-after: always;
        }
    }

</style>
<canvas id="gradient-canvas"></canvas>
<div class="container pt-4 position-relative">
    <!-- Page 1: Executive Summary -->
    <div class="page">
        <div class="header">
            <h1>AZIRI SNEAKERS</h1>
            <p>3-Month Meta Ads Scaling & Multi-Platform Marketing Strategy</p>
            <p style="margin-top: 10px; font-size: 14px;">Prepared for: Premium First Copy Branded Shoes Business</p>
        </div>

        <div class="section">
            <h2>Executive Summary</h2>
            <p>This comprehensive marketing plan outlines a strategic approach to scale AZIRI's advertising efforts from the current ₹20,000/day spend generating 200 orders to achieving ₹50,000/day spend with 500+ daily orders within 3 months.</p>

            <div class="metric-box">
                <h4>Current Performance Metrics</h4>
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; text-align: center;">
                    <div>
                        <p>₹20,000</p>
                        <small>Daily Ad Spend</small>
                    </div>
                    <div>
                        <p>200</p>
                        <small>Daily Orders</small>
                    </div>
                    <div>
                        <p>₹100</p>
                        <small>Cost Per Order</small>
                    </div>
                </div>
            </div>

            <div class="highlight">
                <strong>Key Objectives:</strong> Scale daily ad spend to ₹50,000 while maintaining profitable ROAS, expand to 4 additional advertising platforms, and implement advanced targeting strategies to reach 500+ daily orders.
            </div>
        </div>

        <div class="section">
            <h2>Current Situation Analysis</h2>
            <div class="grid">
                <div class="card">
                    <h4>Strengths</h4>
                    <ul>
                        <li>Strong conversion rate (₹100 CPO)</li>
                        <li>Diverse product range (Jordan, Travis Scott, Adidas)</li>
                        <li>Competitive pricing (50% off strategy)</li>
                        <li>Free shipping on prepaid orders</li>
                        <li>3-day easy replacement policy</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>Opportunities</h4>
                    <ul>
                        <li>Scale Meta campaigns with advanced targeting</li>
                        <li>Expand to Google Ads and other platforms</li>
                        <li>Implement retargeting campaigns</li>
                        <li>Seasonal and trend-based campaigns</li>
                        <li>Influencer partnerships</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>3-Month Growth Targets</h2>
            <div class="table-responsive">
                <table>
                    <tr>
                        <th>Metric</th>
                        <th>Current</th>
                        <th>Month 1</th>
                        <th>Month 2</th>
                        <th>Month 3</th>
                    </tr>
                    <tr>
                        <td>Daily Ad Spend (₹)</td>
                        <td>20,000</td>
                        <td>30,000</td>
                        <td>40,000</td>
                        <td>50,000</td>
                    </tr>
                    <tr>
                        <td>Daily Orders</td>
                        <td>200</td>
                        <td>300</td>
                        <td>400</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>Cost Per Order (₹)</td>
                        <td>100</td>
                        <td>100</td>
                        <td>100</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Monthly Revenue (₹)</td>
                        <td>8,40,000</td>
                        <td>12,60,000</td>
                        <td>16,80,000</td>
                        <td>21,00,000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- Page 2: Meta Ads Scaling Strategy -->
    <div class="page">
        <div class="header">
            <h1>META ADS SCALING STRATEGY</h1>
            <p>Detailed Month-by-Month Implementation Plan</p>
        </div>

        <div class="section">
            <h2>Month 1: Foundation & Expansion (₹20K → ₹30K Daily)</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <h4>Week 1-2: Campaign Structure Optimization</h4>
                    <ul>
                        <li>Create separate campaigns for each product category (Jordan, Travis Scott, Adidas)</li>
                        <li>Implement Conversion Optimization (CBO) with ₹5K budget increase</li>
                        <li>Set up detailed audience segments based on sneaker interests</li>
                        <li>Launch Lookalike audiences (1%, 2%, 5% of website visitors)</li>
                    </ul>
                </div>

                <div class="timeline-item">
                    <h4>Week 3-4: Creative Diversification</h4>
                    <ul>
                        <li>Develop 20+ new ad creatives (videos, carousels, single images)</li>
                        <li>A/B test different value propositions (quality, price, variety)</li>
                        <li>Implement user-generated content campaigns</li>
                        <li>Create urgency-based ads (limited stock, flash sales)</li>
                    </ul>
                </div>
            </div>

            <div class="budget-table">
                <h3>Month 1 Budget Allocation (₹30,000/day)</h3>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th>Campaign Type</th>
                            <th>Budget (₹)</th>
                            <th>Expected Orders</th>
                            <th>Objective</th>
                        </tr>
                        <tr>
                            <td>Prospecting Campaigns</td>
                            <td>18,000</td>
                            <td>180</td>
                            <td>New customer acquisition</td>
                        </tr>
                        <tr>
                            <td>Retargeting Campaigns</td>
                            <td>9,000</td>
                            <td>90</td>
                            <td>Convert website visitors</td>
                        </tr>
                        <tr>
                            <td>Lookalike Campaigns</td>
                            <td>3,000</td>
                            <td>30</td>
                            <td>Scale to similar audiences</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Month 2: Advanced Targeting & Scaling (₹30K → ₹40K Daily)</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <h4>Week 5-6: Audience Expansion</h4>
                    <ul>
                        <li>Launch interest-based targeting (sneakerheads, streetwear, basketball)</li>
                        <li>Implement behavioral targeting (online shoppers, fashion enthusiasts)</li>
                        <li>Create custom audiences from Instagram followers</li>
                        <li>Test broad audience targeting with AI optimization</li>
                    </ul>
                </div>

                <div class="timeline-item">
                    <h4>Week 7-8: Campaign Optimization</h4>
                    <ul>
                        <li>Implement advantage+ shopping campaigns</li>
                        <li>Launch dynamic product ads (DPA) for catalog promotion</li>
                        <li>Set up automated bidding strategies</li>
                        <li>Optimize for different conversion events (Add to Cart, Purchase)</li>
                    </ul>
                </div>
            </div>

            <div class="highlight">
                <strong>Key Focus Areas:</strong> Increase daily spend by ₹10,000 while maintaining CPO at ₹100. Achieve 400 daily orders through improved targeting and creative optimization.
            </div>
        </div>

        <div class="section">
            <h2>Month 3: Premium Scaling & Optimization (₹40K → ₹50K Daily)</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <h4>Week 9-10: Advanced Strategies</h4>
                    <ul>
                        <li>Launch video-first campaigns with product demonstrations</li>
                        <li>Implement sequential messaging campaigns</li>
                        <li>Create exclusive collections for different audience segments</li>
                        <li>Launch Instagram Shopping and Facebook Shop integration</li>
                    </ul>
                </div>

                <div class="timeline-item">
                    <h4>Week 11-12: Performance Optimization</h4>
                    <ul>
                        <li>Implement advanced attribution modeling</li>
                        <li>Launch cross-device targeting campaigns</li>
                        <li>Optimize for lifetime value (LTV) over single purchases</li>
                        <li>Create VIP customer retention campaigns</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Page 3: Additional Advertising Platforms -->
    <div class="page">
        <div class="header">
            <h1>MULTI-PLATFORM ADVERTISING STRATEGY</h1>
            <p>Expanding Beyond Meta for Maximum Reach</p>
        </div>

        <div class="section">
            <h2>Recommended Additional Platforms</h2>

            <div class="platform-grid">
                <div class="platform-card">
                    <h4>Google Ads</h4>
                    <p>₹15,000/day</p>
                    <small>Search + Shopping + YouTube</small>
                </div>
                <div class="platform-card">
                    <h4>Instagram Reels</h4>
                    <p>₹8,000/day</p>
                    <small>Organic + Paid Content</small>
                </div>
                <div class="platform-card">
                    <h4>YouTube Ads</h4>
                    <p>₹7,000/day</p>
                    <small>Video + Shorts</small>
                </div>
                <div class="platform-card">
                    <h4>Snapchat Ads</h4>
                    <p>₹5,000/day</p>
                    <small>Young Demographic</small>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Platform-Specific Strategies</h2>

            <div class="card">
                <h4>1. Google Ads Strategy (₹15,000/day budget)</h4>
                <h3>Search Campaigns (₹8,000/day)</h3>
                <ul>
                    <li><strong>Keywords:</strong> "first copy shoes", "branded sneakers online", "jordan shoes India", "travis scott shoes"</li>
                    <li><strong>Ad Extensions:</strong> Sitelinks, callouts, structured snippets</li>
                    <li><strong>Landing Pages:</strong> Product-specific pages with high conversion rate</li>
                    <li><strong>Expected Orders:</strong> 60-80 daily orders</li>
                </ul>

                <h3>Shopping Campaigns (₹5,000/day)</h3>
                <ul>
                    <li>Product feed optimization with high-quality images</li>
                    <li>Competitive pricing strategy</li>
                    <li>Seasonal promotions and offers</li>
                    <li>Expected Orders: 40-50 daily orders</li>
                </ul>

                <h3>YouTube Ads (₹2,000/day)</h3>
                <ul>
                    <li>Product showcase videos</li>
                    <li>Unboxing and review content</li>
                    <li>Targeting sneaker enthusiasts</li>
                    <li>Expected Orders: 15-20 daily orders</li>
                </ul>
            </div>

            <div class="card">
                <h4>2. Instagram Reels Strategy (₹8,000/day budget)</h4>
                <ul>
                    <li><strong>Content Types:</strong> Unboxing videos, styling tips, product comparisons</li>
                    <li><strong>Hashtag Strategy:</strong> #sneakerhead #firstcopy #shoesofinstagram #streetwear</li>
                    <li><strong>Collaboration:</strong> Micro-influencers and fashion bloggers</li>
                    <li><strong>User-Generated Content:</strong> Customer styling videos and reviews</li>
                    <li><strong>Expected Orders:</strong> 50-70 daily orders</li>
                </ul>
            </div>

            <div class="card">
                <h4>3. YouTube Advertising (₹7,000/day budget)</h4>
                <ul>
                    <li><strong>TrueView Ads:</strong> 30-60 second product showcase videos</li>
                    <li><strong>YouTube Shorts:</strong> Quick styling and unboxing content</li>
                    <li><strong>Targeting:</strong> Fashion channels, sneaker review channels, lifestyle content</li>
                    <li><strong>Retargeting:</strong> Website visitors and video viewers</li>
                    <li><strong>Expected Orders:</strong> 40-50 daily orders</li>
                </ul>
            </div>

            <div class="card">
                <h4>4. Snapchat Ads (₹5,000/day budget)</h4>
                <ul>
                    <li><strong>Target Audience:</strong> 18-25 age group, fashion-conscious users</li>
                    <li><strong>Ad Formats:</strong> Snap Ads, Collection Ads, AR Lenses</li>
                    <li><strong>Creative Strategy:</strong> Behind-the-scenes content, exclusive previews</li>
                    <li><strong>Expected Orders:</strong> 25-35 daily orders</li>
                </ul>
            </div>
        </div>

        <div class="section">
            <h2>Additional Growth Channels</h2>
            <div class="grid">
                <div class="card">
                    <h4>Influencer Marketing</h4>
                    <ul>
                        <li>Partner with 50+ micro-influencers (10K-100K followers)</li>
                        <li>Focus on fashion, lifestyle, and sneaker enthusiasts</li>
                        <li>Provide free products for authentic reviews</li>
                        <li>Expected: 30-50 additional daily orders</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>Email Marketing</h4>
                    <ul>
                        <li>Abandoned cart recovery campaigns</li>
                        <li>Post-purchase upsell sequences</li>
                        <li>Exclusive member discounts</li>
                        <li>New arrival announcements</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>WhatsApp Marketing</h4>
                    <ul>
                        <li>Customer support and order updates</li>
                        <li>Exclusive deals for WhatsApp subscribers</li>
                        <li>Product catalogs and recommendations</li>
                        <li>Personalized shopping assistance</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>Affiliate Marketing</h4>
                    <ul>
                        <li>Commission-based referral program</li>
                        <li>Fashion bloggers and content creators</li>
                        <li>Cashback and coupon platforms</li>
                        <li>Performance-based partnerships</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Page 4: Implementation Timeline & Budget -->
    <div class="page">
        <div class="header">
            <h1>IMPLEMENTATION TIMELINE & BUDGET</h1>
            <p>Detailed Roadmap with Investment Breakdown</p>
        </div>

        <div class="section">
            <h2>Complete Budget Breakdown</h2>
            <div class="table-responsive">
                <table>
                    <tr>
                        <th>Platform</th>
                        <th>Month 1 (₹)</th>
                        <th>Month 2 (₹)</th>
                        <th>Month 3 (₹)</th>
                        <th>Expected Daily Orders</th>
                    </tr>
                    <tr>
                        <td>Meta Ads</td>
                        <td>9,30,000</td>
                        <td>12,40,000</td>
                        <td>15,50,000</td>
                        <td>300-500</td>
                    </tr>
                    <tr>
                        <td>Google Ads</td>
                        <td>2,25,000</td>
                        <td>3,75,000</td>
                        <td>4,65,000</td>
                        <td>115-150</td>
                    </tr>
                    <tr>
                        <td>Instagram Reels</td>
                        <td>1,20,000</td>
                        <td>2,00,000</td>
                        <td>2,48,000</td>
                        <td>50-70</td>
                    </tr>
                    <tr>
                        <td>YouTube Ads</td>
                        <td>1,05,000</td>
                        <td>1,75,000</td>
                        <td>2,17,000</td>
                        <td>40-50</td>
                    </tr>
                    <tr>
                        <td>Snapchat Ads</td>
                        <td>75,000</td>
                        <td>1,25,000</td>
                        <td>1,55,000</td>
                        <td>25-35</td>
                    </tr>
                    <tr style="background: #007bff; color: white;">
                        <td><strong>Total Monthly Spend</strong></td>
                        <td><strong>14,55,000</strong></td>
                        <td><strong>21,15,000</strong></td>
                        <td><strong>26,35,000</strong></td>
                        <td><strong>530-705</strong></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="section">
            <h2>Key Performance Indicators (KPIs)</h2>
            <div class="grid">
                <div class="metric-box">
                    <h4>Cost Per Order Target</h4>
                    <p>₹90-110</p>
                </div>
                <div class="metric-box">
                    <h4>Return on Ad Spend (ROAS)</h4>
                    <p>3.5-4.5x</p>
                </div>
                <div class="metric-box">
                    <h4>Conversion Rate Target</h4>
                    <p>2-3%</p>
                </div>
                <div class="metric-box">
                    <h4>Average Order Value</h4>
                    <p>₹1,400-1,600</p>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Risk Management & Contingency Plans</h2>
            <div class="card">
                <h4>Potential Challenges & Solutions</h4>
                <ul>
                    <li><strong>Ad Fatigue:</strong> Rotate creatives every 7-10 days, maintain 20+ active ad variations</li>
                    <li><strong>Increased Competition:</strong> Focus on unique value propositions, exclusive collections</li>
                    <li><strong>Seasonal Fluctuations:</strong> Adjust budgets based on demand patterns, create seasonal campaigns</li>
                    <li><strong>Platform Policy Changes:</strong> Diversify across multiple platforms, maintain compliant practices</li>
                    <li><strong>Supply Chain Issues:</strong> Maintain inventory buffers, communicate transparently with customers</li>
                </ul>
            </div>
        </div>

        <div class="section">
            <h2>Success Metrics & Reporting</h2>
            <div class="highlight">
                <strong>Weekly Reporting:</strong> Track ROAS, CPO, conversion rates, and audience insights across all platforms. Monthly reviews will assess overall performance and budget reallocation needs.
            </div>
            <div class="table-responsive">
                <table>
                    <tr>
                        <th>Metric</th>
                        <th>Current</th>
                        <th>Target (Month 3)</th>
                        <th>Tracking Method</th>
                    </tr>
                    <tr>
                        <td>Daily Orders</td>
                        <td>200</td>
                        <td>700+</td>
                        <td>Analytics Dashboard</td>
                    </tr>
                    <tr>
                        <td>Monthly Revenue</td>
                        <td>₹84,00,000</td>
                        <td>₹2,80,00,000</td>
                        <td>Sales Reports</td>
                    </tr>
                    <tr>
                        <td>Customer Acquisition Cost</td>
                        <td>₹100</td>
                        <td>₹95-105</td>
                        <td>Campaign Analytics</td>
                    </tr>
                    <tr>
                        <td>Brand Awareness</td>
                        <td>Baseline</td>
                        <td>300% Increase</td>
                        <td>Social Mentions</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="section">
            <h2>Next Steps & Recommendations</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <h4>Immediate Actions (Week 1)</h4>
                    <ul>
                        <li>Set up Google Ads account and initial campaigns</li>
                        <li>Increase Meta ads budget by ₹5,000/day</li>
                        <li>Create 15 new ad creatives for testing</li>
                        <li>Implement conversion tracking across all platforms</li>
                    </ul>
                </div>

                <div class="timeline-item">
                    <h4>Short-term Goals (Month 1)</h4>
                    <ul>
                        <li>Achieve 300+ daily orders</li>
                        <li>Launch on 2 additional platforms</li>
                        <li>Establish influencer partnerships</li>
                        <li>Optimize conversion funnel</li>
                    </ul>
                </div>

                <div class="timeline-item">
                    <h4>Long-term Vision (Month 3)</h4>
                    <ul>
                        <li>Become the leading first-copy sneaker brand in India</li>
                        <li>Achieve 700+ daily orders across all channels</li>
                        <li>Establish brand loyalty and repeat customer base</li>
                        <li>Expand product categories and exclusive collections</li>
                    </ul>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px; padding: 20px; background: #f8f9fa; border-radius: 8px;">
            <h3 style="color: #007bff; margin-bottom: 10px;">Ready to Scale Your Business?</h3>
            <p>This comprehensive plan will help AZIRI achieve 3.5x growth in daily orders within 3 months while maintaining profitable operations across multiple advertising platforms.</p>
        </div>
    </div>
</div>
@endsection
