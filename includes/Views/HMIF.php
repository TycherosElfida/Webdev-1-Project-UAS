<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HMIF 2025 - Proker ppt</title>
    
    <!-- Reveal.js Core -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.3.1/reveal.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.3.1/theme/black.min.css">
    
    <!-- Navigation and Progress -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.3.1/plugin/highlight/monokai.min.css">
    
    <style>
        .controls {
            color: #fff !important;
        }
        .progress {
            height: 3px !important;
        }
        .slide-number {
            font-size: 24px !important;
        }
    </style>
</head>
<body>
    <div class="reveal">
        <div class="slides">
            <!-- Slides will be dynamically generated by JavaScript -->
        </div>
    </div>

    <!-- Reveal.js Dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.3.1/reveal.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.3.1/plugin/highlight/highlight.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.3.1/plugin/notes/notes.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.3.1/plugin/math/math.min.js"></script>

    <script>
        // Dynamically generate slides
        const slidesContainer = document.querySelector('.slides');
        const totalSlides = 18;

        for(let i = 1; i <= totalSlides; i++) {
            const slide = document.createElement('section');
            slide.setAttribute('data-background', `../assets/images/Home/${i}.png`);
            slide.setAttribute('data-background-size', 'contain');
            slidesContainer.appendChild(slide);
        }

        // Initialize reveal.js
        Reveal.initialize({
            // Presentation configuration
            controls: true,
            progress: true,
            center: true,
            hash: true,
            slideNumber: 'c/t',
            transition: 'slide',
            navigationMode: 'linear',

            // Learn pluin settings
            plugins: [ RevealHighlight, RevealNotes, RevealMath.KaTeX ]
        });

        // Add keyboard help overlay
        Reveal.addKeyBinding({ keyCode: 191, key: 'H', description: 'Show help' }, () => {
            const help = document.createElement('div');
            help.className = 'help-overlay';
            help.innerHTML = `
                <div style="position: fixed; top: 20px; right: 20px; background: rgba(0,0,0,0.8); color: #fff; padding: 20px; border-radius: 10px;">
                    <h3>Keyboard Shortcuts</h3>
                    <ul>
                        <li>→ or Space: Next slide</li>
                        <li>←: Previous slide</li>
                        <li>F: Fullscreen</li>
                        <li>O: Slide overview</li>
                        <li>Esc: Zoom out</li>
                    </ul>
                </div>
            `;
            document.body.appendChild(help);
            setTimeout(() => help.remove(), 3000);
        });
    </script>
</body>
</html>