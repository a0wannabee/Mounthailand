{{-- ============================================
     PRODUCTS
     ============================================ --}}
<section class="section" id="products">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">Our Products</span>
            <h2 class="section-title">Premium Coffee</h2>
            <p class="section-desc">Handcrafted Grade 1 Robusta from Temanggung, available as ground coffee or
                whole roasted beans.</p>
        </div>

        <div class="products-grid">
            {{-- PRODUCT 1 — Ground Coffee --}}
            <div class="product-card reveal">
                <div class="product-image-container">
                    <img src="{{ asset('assets/products/product powder.png') }}" alt="Mounthailand Ground Coffee" loading="lazy">
                </div>
                <div class="product-info">
                    <span class="product-cat-tag">Ground Coffee</span>
                    <h3 class="product-title">Ground Robusta</h3>
                    <div class="product-metadata">
                        Grade 1 <span>•</span> Medium+ Roast <span>•</span> Temanggung
                    </div>

                    <div class="product-price-starting">
                        <span class="starting-label">Starting from</span>
                        <span class="starting-value">Rp20.000</span>
                    </div>

                    <div class="product-accordion-wrapper">
                        <button class="product-accordion-toggle" aria-expanded="false">
                            <span>View Sizes &amp; Pricing</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="product-accordion-content">
                            <div class="product-price-list">
                                <div class="price-item">
                                    <span class="price-size">100 g</span>
                                    <span class="price-dots"></span>
                                    <span class="price-value">Rp20.000</span>
                                </div>
                                <div class="price-divider"></div>
                                <div class="price-item">
                                    <span class="price-size">250 g</span>
                                    <span class="price-dots"></span>
                                    <span class="price-value">Rp45.000</span>
                                </div>
                                <div class="price-divider"></div>
                                <div class="price-item">
                                    <span class="price-size">500 g</span>
                                    <span class="price-dots"></span>
                                    <span class="price-value">Rp86.000</span>
                                </div>
                                <div class="price-divider"></div>
                                <div class="price-item">
                                    <span class="price-size">1000 g</span>
                                    <span class="price-dots"></span>
                                    <span class="price-value">Rp155.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/6283198892832?text=Hallo%2C%20saya%20ingin%20memesan%20Mounthailand%20Ground%20Coffee"
                        target="_blank" rel="noopener noreferrer" class="product-cta-btn">
                        Order Now
                    </a>
                </div>
            </div>

            {{-- PRODUCT 2 — Roasted Beans --}}
            <div class="product-card reveal reveal-delay-1">
                <div class="product-image-container">
                    <img src="{{ asset('assets/products/product beans.png') }}" alt="Mounthailand Roasted Coffee Beans"
                        loading="lazy">
                </div>
                <div class="product-info">
                    <span class="product-cat-tag">Whole Beans</span>
                    <h3 class="product-title">Roasted Beans</h3>
                    <div class="product-metadata">
                        Grade 1 <span>•</span> Medium+ Roast <span>•</span> Temanggung
                    </div>

                    <div class="product-price-starting">
                        <span class="starting-label">Price</span>
                        <span class="starting-value-badge">Contact Us</span>
                    </div>

                    <div class="product-accordion-wrapper">
                        <button class="product-accordion-toggle" aria-expanded="false">
                            <span>View Pricing Details</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="product-accordion-content">
                            <div class="product-price-list">
                                <div class="price-request-content">
                                    <span class="price-request-badge">Price on Request</span>
                                    <p class="price-request-text">Contact us via WhatsApp for pricing and bulk
                                        orders.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/6283198892832?text=Hallo%2C%20saya%20ingin%20memesan%20Mounthailand%20Roasted%20Coffee%20Beans"
                        target="_blank" rel="noopener noreferrer" class="product-cta-btn">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
