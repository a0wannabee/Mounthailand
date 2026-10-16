{{-- ============================================
     TESTIMONIALS — 4 testimonials
     ============================================ --}}
<section class="section" id="testimonials" style="background: #0b0b0b;">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">Reviews</span>
            <h2 class="section-title">What Customers Say</h2>
        </div>

        <div class="testimonials-carousel-wrapper">
            <button class="carousel-arrow prev" aria-label="Previous testimonial">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </button>

            <div class="testimonials-carousel-container" id="testimonials-carousel-container">
                <div class="testimonials-carousel-track" id="testimonials-carousel-track">
                    {{-- TESTIMONIAL 1 --}}
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">
                                @for ($i = 0; $i < 5; $i++)
                                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                                @endfor
                            </div>
                            <p class="testimonial-text">
                                "Kopinya harum banget. Pas pertama diseduh aromanya langsung memenuhi ruangan.
                                Rasanya kuat tapi tetap smooth."
                            </p>
                            <div class="testimonial-user">
                                <div class="testimonial-avatar">H</div>
                                <div class="testimonial-user-info">
                                    <h4>Hakim</h4>
                                    <p>Penikmat Kopi, Jakarta</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- TESTIMONIAL 2 --}}
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">
                                @for ($i = 0; $i < 5; $i++)
                                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                                @endfor
                            </div>
                            <p class="testimonial-text">
                                "Mounthailand punya karakter yang paling balance. Tidak terlalu pahit dan
                                aftertastenya enak. Recommended!"
                            </p>
                            <div class="testimonial-user">
                                <div class="testimonial-avatar">I</div>
                                <div class="testimonial-user-info">
                                    <h4>Ifham Ilmy</h4>
                                    <p>Penikmat Kopi, Yogyakarta</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- TESTIMONIAL 3 --}}
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">
                                @for ($i = 0; $i < 5; $i++)
                                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                                @endfor
                            </div>
                            <p class="testimonial-text">
                                "Packing rapi, pengiriman cepat, dan kualitas kopinya benar-benar premium. Sangat
                                cocok dijadikan oleh-oleh."
                            </p>
                            <div class="testimonial-user">
                                <div class="testimonial-avatar">B</div>
                                <div class="testimonial-user-info">
                                    <h4>Baihaqi</h4>
                                    <p>Pelanggan Setia, Yogyakarta</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- TESTIMONIAL 4 --}}
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">
                                @for ($i = 0; $i < 5; $i++)
                                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                                @endfor
                            </div>
                            <p class="testimonial-text">
                                "Kopi robusta terbaik yang pernah saya coba. Rasanya full body, cocok untuk
                                tubruk maupun espresso. Pasti repeat order!"
                            </p>
                            <div class="testimonial-user">
                                <div class="testimonial-avatar">L</div>
                                <div class="testimonial-user-info">
                                    <h4>Lukman</h4>
                                    <p>Penikmat Kopi, Magelang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-arrow next" aria-label="Next testimonial">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>
        </div>
    </div>
</section>
