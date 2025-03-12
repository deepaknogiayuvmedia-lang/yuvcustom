@extends('website.layout.websitemain')
@section('title', 'Privacy policy | ' . config('app.name'))
@section('content')
<style>
    :root { font-size: 16px; }
    @media (max-width: 500px) { :root { font-size: 14px; } }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    ::selection {
      background: #87cd33;
      color: white;
    }

    body {
      overflow: hidden;
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji;
    }

    h1 { font-size: 5rem; }
    h2 { font-size: 2rem; }

    img {
      width: 100%;
      height: auto;
      background: #f0f0f0;
    }

    ul {
      padding-left: 1rem;
      list-style: none;
    }

    li {
      flex-shrink: 0;
      width: clamp(500px, 60vw, 800px);
      padding-right: 1rem;
    }

    header { height: 100vh; }
    footer { height: 50vh; }

    :any-link { color: #4e9815; }

    .df { display: flex; }
    .aic { align-items: center; }
    .jcc { justify-content: center; }

    .loader {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: black;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .demo-wrapper {
      overflow-x: hidden;
    }

    .wrapper {
      display: flex;
    }

    .demo-gallery:not(.last) {
      padding-bottom: 1rem;
    }

    .demo-text .text {
      font-size: clamp(8rem, 15vw, 16rem);
      line-height: 1;
      font-weight: 900;
    }
  </style>

<div class="loader df aic jcc">
    <h1>Loading</h1>
    <h2 class="loader--text">0%</h2>
  </div>

  <div class="demo-wrapper">
    <header class="df aic jcc">
      <div>
        <h1>ScrollTrigger</h1>
        <h2>demo</h2>
      </div>
    </header>

    <section class="demo-text">
      <div class="wrapper text">
     AAAAAAAAAAAAAAAAAAAAAAAAAAA
      </div>
    </section>

    <!-- Dynamic sections with random images -->
    <section class="demo-gallery">
      <ul class="wrapper">
        <li>
          <img src="https://www.processmaker.com/wp-content/uploads/2020/05/1026-scaled.jpg" width="1240" height="874" alt="Random Image">
        </li>
        <li>
          <img src="https://www.processmaker.com/wp-content/uploads/2020/05/1026-scaled.jpg" width="1240" height="874" alt="Random Image">
        </li>
        <li>
          <img src="https://www.processmaker.com/wp-content/uploads/2020/05/1026-scaled.jpg" width="1240" height="874" alt="Random Image">
        </li>
        <li>
          <img src="https://www.processmaker.com/wp-content/uploads/2020/05/1026-scaled.jpg" width="1240" height="874" alt="Random Image">
        </li>
        <li>
          <img src="https://www.processmaker.com/wp-content/uploads/2020/05/1026-scaled.jpg" width="1240" height="874" alt="Random Image">
        </li>
      </ul>
    </section>
    <section class="demo-gallery">
      <ul class="wrapper">
        <li>
          <img src="https://www.acconcept.ru/wp-content/uploads/2021/06/uslugi-po-programmnomu-obespecheniju-vedenija-informacionnogo-resursa-tehnologicheskih-processov-i-instrukcij-na-rabochie-mesta-acconcept.webp" width="1240" height="874" alt="Random Image">
        </li>
        <li>
          <img src="https://www.acconcept.ru/wp-content/uploads/2021/06/uslugi-po-programmnomu-obespecheniju-vedenija-informacionnogo-resursa-tehnologicheskih-processov-i-instrukcij-na-rabochie-mesta-acconcept.webp" width="1240" height="874" alt="Random Image">
        </li>
        <li>
          <img src="https://www.acconcept.ru/wp-content/uploads/2021/06/uslugi-po-programmnomu-obespecheniju-vedenija-informacionnogo-resursa-tehnologicheskih-processov-i-instrukcij-na-rabochie-mesta-acconcept.webp" width="1240" height="874" alt="Random Image">
        </li>
        <li>
          <img src="https://www.acconcept.ru/wp-content/uploads/2021/06/uslugi-po-programmnomu-obespecheniju-vedenija-informacionnogo-resursa-tehnologicheskih-processov-i-instrukcij-na-rabochie-mesta-acconcept.webp" width="1240" height="874" alt="Random Image">
        </li>
        <li>
          <img src="https://www.acconcept.ru/wp-content/uploads/2021/06/uslugi-po-programmnomu-obespecheniju-vedenija-informacionnogo-resursa-tehnologicheskih-processov-i-instrukcij-na-rabochie-mesta-acconcept.webp" width="1240" height="874" alt="Random Image">
        </li>
      </ul>
    </section>

    <section class="demo-text">
      <div class="wrapper text">
        AAAAAAAAAAAAAAAAAAAAAAAAAAA
      </div>
    </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    const initGalleryScroll = () => {
        // Loop through each gallery
        gsap.utils.toArray('.demo-gallery').forEach((gallery) => {
            const wrapper = gallery.querySelector('.wrapper'); // Target the inner wrapper
            const xEnd = -1 * (wrapper.scrollWidth - gallery.offsetWidth); // Calculate scroll distance

            // Create horizontal scroll animation
            gsap.fromTo(
                wrapper,
                { x: 0 }, // Start at position 0
                {
                    x: xEnd, // Scroll to the calculated end position
                    ease: 'none',
                    scrollTrigger: {
                        trigger: gallery, // Trigger the gallery section
                        start: 'top center', // Animation starts when top of section reaches center
                        end: 'bottom top', // Animation ends when bottom of section leaves viewport
                        scrub: 1, // Smooth scrubbing
                    },
                }
            );
        });
    };

    // Ensure all images are loaded before initializing animations
    imagesLoaded('.gsapimgs', { background: true }).on('always', () => {
        initGalleryScroll();
    });
</script>
@endsection
