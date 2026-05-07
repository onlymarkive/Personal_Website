@extends('layouts.app')

@section('content')
    <!-- Home Section -->
    <section class="home" id="home">
        <div class="home-text">
            <h3>Hello World! I am</h3>
            <h1>RECTIN, Marielle J.,</h1>
            <h5>navigating the complexities of Computer Science as a first-year student<span> at Batangas State University - The National Engineering University - Alangilan Campus</span></h5>
            <p>Join me on this coding adventure as we unravel the bits and bytes of my journey — get to know the person behind the screen! </p>
            <div class="social">
                <a href="https://www.facebook.com/mariellerectin"><i class='bx bxl-facebook'></i></a>
                <a href="https://m.me/mariellerectin"><i class='bx bxl-messenger'></i></a>
                <a href="https://www.instagram.com/onlymarkive/"><i class='bx bxl-instagram' ></i></a>
                <a href="https://t.me/onlymarkive"><i class='bx bxl-telegram' ></i></a>
            </div>
            <a href="#sub-service" class="btn">   ⋆｡ﾟ☁︎｡⋆｡ KNOW ME ﾟ☾ ﾟ｡⋆   </a>
        </div>

        <div class="home-img" id="home-img">
            <img src="{{ asset('assets/main5.png') }}" alt="Profile Picture">
        </div>
    </section>

    <!-- Sub Service Section -->
    <section class="sub-service" id="sub-service">
        <div class="music-section">
            <div class="vinyl-player">
                <img src="{{ asset('assets/gramophone.png') }}" alt="Gramophone">
            </div>
            <div class="audio-controls">
                <audio controls>
                    <source src="{{ asset('assets/mikrokosmos.mp3') }}" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="items">
            <div class="sub-box">
                <div class="sub-img">
                    <img src="{{ asset('assets/middle.svg') }}" alt="Middle Child">
                </div>
                <h3>Middle Child</h3>
                <p>Amidst siblings, the middle child's story unfolds—a tale of resilience, humor, and the art of being beautifully in-between.</p>
            </div>

            <div class="sub-box">
                <div class="sub-img">
                    <img src="{{ asset('assets/music.svg') }}" alt="Music">
                </div>
                <h3>Music</h3>
                <p>Notes on a page, but echoes in the heart—music, the silent storyteller that paints emotions in vibrant hues across the canvas of our existence.</p>
            </div>

            <div class="sub-box">
                <div class="sub-img">
                    <img src="{{ asset('assets/yellow.svg') }}" alt="Yellow">
                </div>
                <h3>Yellow</h3>
                <p>Amid the grand tapestry of life, this radiant hue, like a golden melody, brightens the symphony of each day, turning the mundane into a masterpiece of happiness.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="{{ asset('assets/about1.png') }}" alt="About Picture">
        </div>

        <div class="about-text">
            <h3>Middle child alert – </h3>
            <h2>MARIELLE on the mix</h2>
            <p>Yellow is not just a color I adore; it's my daily dose of sunshine. When I'm not exploring the vibrant world of being in the middle, you'll find me immersed in the enchanting symphony of music, where every note becomes a cherished moment.</p>
            <a href="#cta" class="btn">   wanna know a ckret? ≽^•⩊•^≼   </a>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <div class="gallery-content">
            <div class="heading">
                <h3>Gallery</h3>
                <h2>2023 PHOTO DUMP</h2>
                <p>Chapters Unfold: Recent Life Events Unraveled</p>
            </div>

            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <div class="carousel">
                    <img src="{{ asset('assets/gallery1.jpeg') }}" alt="Gallery Image 1" draggable="false">
                    <img src="{{ asset('assets/gallery2.jpeg') }}" alt="Gallery Image 2" draggable="false">
                    <img src="{{ asset('assets/gallery17.jpeg') }}" alt="Gallery Image 3" draggable="false">
                    <img src="{{ asset('assets/gallery3.jpeg') }}" alt="Gallery Image 4" draggable="false">
                    <img src="{{ asset('assets/gallery18.jpeg') }}" alt="Gallery Image 5" draggable="false">
                    <img src="{{ asset('assets/gallery5.jpeg') }}" alt="Gallery Image 6" draggable="false">
                    <img src="{{ asset('assets/gallery6.jpeg') }}" alt="Gallery Image 7" draggable="false">
                    <img src="{{ asset('assets/gallery7.jpeg') }}" alt="Gallery Image 8" draggable="false">
                    <img src="{{ asset('assets/gallery8.jpeg') }}" alt="Gallery Image 9" draggable="false">
                    <img src="{{ asset('assets/gallery9.jpeg') }}" alt="Gallery Image 10" draggable="false">
                    <img src="{{ asset('assets/gallery10.jpeg') }}" alt="Gallery Image 11" draggable="false">
                    <img src="{{ asset('assets/gallery11.jpeg') }}" alt="Gallery Image 12" draggable="false">
                    <img src="{{ asset('assets/gallery12.jpeg') }}" alt="Gallery Image 13" draggable="false">
                    <img src="{{ asset('assets/gallery13.jpeg') }}" alt="Gallery Image 14" draggable="false">
                    <img src="{{ asset('assets/gallery14.jpeg') }}" alt="Gallery Image 15" draggable="false">
                    <img src="{{ asset('assets/gallery15.jpeg') }}" alt="Gallery Image 16" draggable="false">
                </div>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </div>
    </section>

    <!-- Interests Section -->
    <section class="portfolio" id="portfolio">
        <div class="heading">
            <h3>Interests</h3>
            <h2>What I Do</h2>
            <p>Beyond Boundaries: The Odyssey of Self-Interest in Personal Triumph</p>
        </div>

        <div class="portfolio-content">
            <div class="row">
                <div class="p p-one">
                    <img src="{{ asset('assets/psycho.png') }}" alt="Psychological Movies">
                </div>
                <h3>Mindframes Unveiled</h3>
                <h5>Cinematic Mind Puzzlers <span>๋࣭ ⭑</span></h5>
                <p>As a cinephile drawn to the intricate layers of the human psyche, psychological movies are my cinematic playground, unraveling the complexities of the mind frame by frame.</p>
            </div>

            <div class="row">
                <div class="p p-one">
                    <img src="{{ asset('assets/coffee.png') }}" alt="Coffee">
                </div>
                <h3>Brewed Bliss</h3>
                <h5>Sipping Liquid Comfort <span>๋࣭ ⭑</span></h5>
                <p>A passionate coffee enthusiast, I savor each cup as a ritual, embracing the rich flavors that accompany moments of tranquility.</p>
            </div>

            <div class="row">
                <div class="p p-one">
                    <img src="{{ asset('assets/tech.png') }}" alt="Technology">
                </div>
                <h3>Digital Odyssey</h3>
                <h5>Digital Playtime <span>๋࣭ ⭑</span></h5>
                <p>In the digital realm, I navigate the frontiers of technology and gaming, where every click and keystroke opens a portal to uncharted worlds and thrilling adventures.</p>
            </div>

            <div class="row">
                <div class="p p-one">
                    <img src="{{ asset('assets/photo.png') }}" alt="Photography">
                </div>
                <h3>Captured Essence</h3>
                <h5>Capturing Moments <span>๋࣭ ⭑</span></h5>
                <p>Through the lens of my camera, I capture the poetry of life, freezing moments in time with each click, transforming ordinary scenes into visual stories.</p>
            </div>

            <div class="row">
                <div class="p p-one">
                    <img src="{{ asset('assets/kpop.png') }}" alt="K-pop">
                </div>
                <h3>Melodic Frenzy</h3>
                <h5>Immersing in K-pop Beats <span>๋࣭ ⭑</span></h5>
                <p>Immersed in the infectious energy of K-pop, attending concerts is not just about the music—it's a vibrant celebration of culture, fandom, and the sheer magic of live performances.</p>
            </div>

            <div class="row">
                <div class="p p-one">
                    <img src="{{ asset('assets/badmin.png') }}" alt="Badminton">
                </div>
                <h3>Court Choreography</h3>
                <h5>Racket Sport Fun <span>๋࣭ ⭑</span></h5>
                <p>On the badminton court, I find my rhythm, where each rally becomes a symphony of skill, strategy, and the sheer joy of the game.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta" id="cta">
        <div class="heading">
            <h2>Unusual Revelation:</h2>
            <h4>Sharing a personal curiosity that adds a unique touch to who I am...</h4>
        </div>

        <div class="cta-box">
            <div class="wrap one" id="one">
                <h3>10%</h3>
                <p>belonging to the minority<br>of left-handed individuals</p>
            </div>

            <div class="wrap two" id="two">
                <h3>3</h3>
                <p>capable of navigating<br>three languages</p>
            </div>

            <div class="wrap three" id="three">
                <h3>₱0</h3>
                <p>financially strapped<br>with an empty wallet</p>
            </div>

            <div class="wrap four" id="four">
                <h3>127</h3>
                <p>neo got my back,<br>culture things</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="center">
                <h3>Let's talk about everything</h3>
                <p>Send me an email.</p>
            </div>

            <div class="action">
                <form>
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>

            <div class="social">
                <a href="https://www.facebook.com/mariellerectin"><i class='bx bxl-facebook'></i></a>
                <a href="https://m.me/mariellerectin"><i class='bx bxl-messenger'></i></a>
                <a href="https://www.instagram.com/onlymarkive/"><i class='bx bxl-instagram' ></i></a>
                <a href="https://t.me/onlymarkive"><i class='bx bxl-telegram' ></i></a>
            </div>
        </div>
    </section>
@endsection
