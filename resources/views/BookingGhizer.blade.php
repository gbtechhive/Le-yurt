<x-header-component />
<section class="section_BookingNow">
    <div class="parent_form_card_section">
        <div class="booking_form_div">
            <h3>Please provide following data to secure your booking</h3>
            <form action="">
                <div class="frist_indx_detail">
                    <input type="text" placeholder="First name *">
                    <input type="text" placeholder="Last name *">
                </div>
                <input type="text" placeholder="Email *">
                <input type="text" placeholder="Confirm Your Email *">
                <input type="text" placeholder="Contact Number *">
                <input type="text" placeholder="Promo Code (If available)">
                <button>Confirm Booking</button>
            </form>
        </div>
        <div class="booking_card_div">
            <div class="booking_card1">
                <h3>Booking Details</h3>
                <ul class="stay_details">
                    <li>Check In</li>
                    <li>Check Out</li>
                    <li>Guests</li>
                    <li>Rooms</li>
                </ul>
                <ul class="stay_date_detail">
                    <li>4/8/2022</li>
                    <li>6/8/2022</li>
                    <li>4 Nights</li>
                    <li>2</li>
                </ul>
                <ul class="total_prices">
                    <li>Price</li>
                    <li><span>$160</span></li>
                </ul>
                <button><a href="ghizarLocation">Change</a></button>
            </div>
            <div class="booking_card2">
                <div class="booking_image">
                    <img src="{{asset('/assets/images/booking-images/booking_img1.jpg')}}" alt="bookig1">
                </div>
                <div class="booking_card2_detail">
                    <h3>Room Details</h3>
                    <ul class="roomType_location">
                        <li>Room Type</li>
                        <li>Location</li>
                    </ul>
                    <ul class="room_location">
                        <li>Deluxe Yurt</li>
                        <li>Ghizer</li>
                    </ul>
                    <button><a href="ghizarLocation">Change</a> </button>
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer-component />
