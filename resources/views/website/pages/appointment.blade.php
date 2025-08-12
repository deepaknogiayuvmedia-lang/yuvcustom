<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Book a free Business Growth Strategy Session with YUVMEDIA to explore marketing audits and growth plans.">
    <title>Book a Business Growth Strategy Session | YUVMEDIA</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .iframe-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100vh;
            padding-top: 56.25%;
        }

        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .loading-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (max-width: 640px) {
            .iframe-container {
                padding-top: 75%;
            }
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">


    <main class="">
        <section class=" fade-in">
            {{-- <h2 class="text-2xl sm:text-3xl font-semibold text-gray-900 mb-4 text-center">
                Schedule Your Free Consultation with YUVMEDIA
            </h2>
            <p class="text-gray-600 text-center mb-6">
                Book a session with our Business Consultant for a free marketing audit and personalized growth plans.
                Don’t miss this opportunity—appointments are not rescheduled.
            </p> --}}
            <div class="iframe-container bg-gray-200 relative">
                <div id="loading-spinner" class="loading-spinner hidden">
                    <svg class="animate-spin h-12 w-12 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8h8a8 8 0 01-8 8v-8H4z">
                        </path>
                    </svg>
                </div>
                <iframe
                    src="https://yuvmedia-india.odoo.com/appointment/15?invite_token=1538ca08911b4db3a436f461f2f71c6d&filter_appointment_type_ids=%5B15%5D"
                    title="YUVMEDIA Appointment Booking" sandbox="allow-same-origin allow-scripts allow-forms"
                    allowfullscreen loading="lazy" class="fade-in"
                    onload="document.getElementById('loading-spinner').classList.add('hidden')"
                    onerror="document.getElementById('loading-spinner').classList.add('hidden'); document.getElementById('iframe-error').classList.remove('hidden')"></iframe>
            </div>
            {{-- <div id="iframe-error" class="hidden text-center mt-4 text-red-600">
                <p class="font-medium">Unable to load the booking form. Please try again later or use the link below.
                </p>
            </div>
            <div class="text-center mt-4">
                <p class="text-gray-600 mb-2">Your browser does not support iframes?</p>
                <a href="https://yuvmedia-india.odoo.com/appointment/15?invite_token=1538ca08911b4db3a436f461f2f71c6d&filter_appointment_type_ids=%5B15%5D"
                    target="_blank"
                    class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors"
                    aria-label="Book your appointment directly">
                    Book Appointment Directly
                </a>
            </div> --}}
        </section>
    </main>


    <script>
        document.getElementById('loading-spinner').classList.remove('hidden');
    </script>
</body>

</html>
