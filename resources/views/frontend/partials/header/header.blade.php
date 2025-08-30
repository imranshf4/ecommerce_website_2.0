<header class="header">
    <div class="header_top container">
        <div class="logo_wrapper">
            <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo" class="logo_img">
        </div>

        <div class="search_wrapper">
            <input type="text" class="search_input" placeholder="Search" />
            <svg viewBox="0 0 24 24" width="24" height="24"
                stroke="currentColor" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round"
                class="icon search_icon">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </div>

        <div class="contact_wrapper">
            <svg viewBox="0 0 24 24" width="24" height="24"
                stroke="currentColor" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round"
                class="icon phone_icon">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 
                     19.79 19.79 0 0 1-8.63-3.07 
                     19.5 19.5 0 0 1-6-6 
                     19.79 19.79 0 0 1-3.07-8.67 
                     A2 2 0 0 1 4.11 2h3a2 2 
                     0 0 1 2 1.72 12.84 12.84 
                     0 0 0 .7 2.81 2 2 0 0 1-.45 2.11
                     L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27
                     a2 2 0 0 1 2.11-.45 
                     12.84 12.84 0 0 0 2.81.7
                     A2 2 0 0 1 22 16.92z">
                </path>
            </svg>

            <div class="call_info">
                <span class="call_text">Call Us Now:</span>
                <span class="call_number">01723307543</span>
            </div>

            <div class="wishlist_wrapper">
                <svg viewBox="0 0 24 24" width="24" height="24"
                    stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="icon heart_icon">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67
                         l-1.06-1.06a5.5 5.5 0 0 0-7.78 
                         7.78l1.06 1.06L12 21.23l7.78-7.78 
                         1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                </svg>
            </div>

            <div class="user_wrapper">
                <svg viewBox="0 0 24 24" width="24" height="24"
                    stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="icon user_icon">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8
                         a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>

                <div class="user_info">
                    <span class="user_greeting">Hi,</span>
                    <span class="user_auth">Login/Signup</span>
                </div>
            </div>
        </div>
    </div>

    <div class="header_middle" id="myHeader">
        <h5>Header Middle</h5>
    </div>
</header>