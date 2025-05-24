@extends('website.layout.websitemain')
@section('title', 'Terms of Service | ' . config('app.name'))
@section('content')
<section class="py-3 py-md-3" style="background-color: #e4f0ff;">
    <div class="container py-3 py-md-4">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="globaltxtcolor">
                    Terms of Service
                </div>
                <div class="mt-4">
                    <h5 class="fw-bold">1. Introduction</h5>
                    <p>Welcome to {{ config('app.name') }}. By accessing our website or using our services, you agree to be bound by the following terms and conditions. Please read them carefully before using the site.</p>

                    <h5 class="fw-bold mt-4">2. Use of the Website</h5>
                    <p>You agree to use our website only for lawful purposes and in a way that does not infringe the rights of others or restrict their use and enjoyment of the website.</p>

                    <h5 class="fw-bold mt-4">3. Intellectual Property</h5>
                    <p>All content on this website, including text, graphics, logos, and images, is the property of {{ config('app.name') }} or its content suppliers and is protected by copyright laws. Unauthorized use of this content is prohibited.</p>

                    <h5 class="fw-bold mt-4">4. User-Generated Content</h5>
                    <p>If you post content on our site, you grant {{ config('app.name') }} a non-exclusive, royalty-free license to use, reproduce, and distribute your content. You are solely responsible for your submissions.</p>

                    <h5 class="fw-bold mt-4">5. Limitation of Liability</h5>
                    <p>{{ config('app.name') }} is not liable for any damages arising from your use of our site. This includes, but is not limited to, direct, indirect, incidental, or consequential damages.</p>

                    <h5 class="fw-bold mt-4">6. Third-Party Links</h5>
                    <p>Our website may contain links to third-party websites. We are not responsible for the content or privacy practices of these sites.</p>

                    <h5 class="fw-bold mt-4">7. Termination</h5>
                    <p>We reserve the right to terminate or suspend your access to our services at our sole discretion, without prior notice, for conduct that we believe violates these Terms.</p>

                    <h5 class="fw-bold mt-4">8. Changes to the Terms</h5>
                    <p>We may update these Terms from time to time. Your continued use of the website after changes are posted constitutes your acceptance of the new Terms.</p>

                    <h5 class="fw-bold mt-4">9. Governing Law</h5>
                    <p>These Terms are governed by and construed in accordance with the laws of India. Any disputes shall be resolved in the courts of Ajmer, Rajasthan.</p>

                    <h5 class="fw-bold mt-4">10. Contact Us</h5>
                    <p>If you have any questions regarding these Terms, please contact us at <a href="mailto:support@yuvmedia.com">support@yuvmedia.com</a>.</p>
                </div>
            </div>
        </div>
    </div>    
</section>
@endsection
