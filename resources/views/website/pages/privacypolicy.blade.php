@extends('website.layout.websitemain')
@section('title', 'Privacy Policy | ' . config('app.name'))
@section('content')

<section class="py-3 py-md-3" style="background-color: #e4f0ff;">
    <div class="container py-3 py-md-4">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="globaltxtcolor mb-4">
                    Privacy Policy
                </div>
                <div class="text-dark">
                    <p><strong>Effective Date:</strong> {{ \Carbon\Carbon::now()->format('F d, Y') }}</p>

                    <p>At <strong>Yuvmedia</strong>, accessible from <a href="https://yuvmedia.com">https://yuvmedia.com</a>, one of our main priorities is the privacy of our visitors. This Privacy Policy outlines the types of information that are collected and recorded by Yuvmedia and how we use it.</p>

                    <h5>1. Information We Collect</h5>
                    <ul>
                        <li><strong>Personal Information:</strong> Name, Email, Phone Number, Company Name, Preferences.</li>
                        <li><strong>Non-Personal Information:</strong> IP address, browser type, operating system, and usage behavior via cookies.</li>
                    </ul>

                    <h5>2. How We Use Your Information</h5>
                    <ul>
                        <li>To provide and improve our services.</li>
                        <li>To personalize user experience.</li>
                        <li>To communicate via email, WhatsApp, or phone regarding inquiries or services.</li>
                        <li>For marketing and promotional activities.</li>
                        <li>To comply with legal requirements.</li>
                    </ul>

                    <h5>3. Services Covered</h5>
                    <p>This Privacy Policy applies to all Yuvmedia services:</p>
                    <ul>
                        <li>SEO</li>
                        <li>Social Media</li>
                        <li>WhatsApp Marketing</li>
                        <li>Video Production</li>
                        <li>Web Development</li>
                        <li>Designing Services</li>
                        <li>Performance Media</li>
                        <li>Marketplace Expertise</li>
                        <li>Influencer Marketing</li>
                        <li>Google Business Profile</li>
                        <li>ERP Services</li>
                        <li>Email Marketing</li>
                    </ul>

                    <h5>4. Sharing of Information</h5>
                    <p>We do not sell your data. Information may be shared with trusted partners or to comply with laws.</p>

                    <h5>5. Cookies</h5>
                    <p>We use cookies to improve site performance and user experience. You can disable cookies in your browser settings.</p>

                    <h5>6. Data Retention</h5>
                    <p>We retain your data only for as long as necessary to fulfill the purposes outlined in this policy.</p>

                    <h5>7. Your Rights</h5>
                    <p>You have the right to access, correct, or request deletion of your data. Contact us at <a href="mailto:support@yuvmedia.com">support@yuvmedia.com</a> to exercise your rights.</p>

                    <h5>8. Data Security</h5>
                    <p>We implement technical and organizational measures to protect your data.</p>

                    <h5>9. Third-Party Links</h5>
                    <p>We are not responsible for the content or practices of third-party websites linked from our site.</p>

                    <h5>10. Changes to This Policy</h5>
                    <p>We may update this policy from time to time. The latest version will always be posted on this page.</p>

                    <h5>11. Contact Information</h5>
                    <p>For any questions, contact us at:</p>
                    <p><strong>Yuvmedia Studio</strong><br>
                    Email: <a href="mailto:support@yuvmedia.com">support@yuvmedia.com</a><br>
                    Phone: <a href="tel:+918078671648">+91-8078671648</a><br>
                    Website: <a href="https://yuvmedia.com">yuvmedia.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
