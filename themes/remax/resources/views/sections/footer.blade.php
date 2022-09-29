<footer class="footer">
    <div class="container">
        <nav class="nav-secondary" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
            @if (has_nav_menu('footer_navigation'))
                <div>
                    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav', 'echo' => false]) !!}
                </div>
            @endif

            @if (has_nav_menu('footer_sub_navigation'))
                <div class="footer-terms-links-container">
                    <div>
                        {!! wp_nav_menu([
                            'theme_location' => 'footer_sub_navigation',
                            'menu_class' => 'footer-sub-nav',
                            'echo' => false,
                        ]) !!}
                    </div>
                    <div class="img-box">
                        <a href="https://www.franchise.org/franchise-opportunities/remax-llc">
                            <img src="{{ asset('./images/international-franchise-association-logo.png') }}"
                                alt="International Franchise Association Logo">
                        </a>
                    </div>
                </div>
            @endif
        </nav>

        @php
            $terms = get_field('footer_terms', 'option');
        @endphp

        @if ($terms)
            <div class="footer-terms">
                <span>&copy; <?php echo date('Y'); ?></span>
                @php echo $terms  @endphp
            </div>
        @endif
    </div>
</footer>
