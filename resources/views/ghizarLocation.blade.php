<x-header-component />

<section class="skardu_section">
    <div class="backGd_skd" id="backGd_Gzer">
        <div class="skd_parent_txt">
            <h2>Ghizer</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam suspendisse sagittis rhoncus, ac
                congue. Vitae, aliquam at nisl, montes, pharetra urna gravida. Massa scelerisque ac sit et nunc. Tellus
                sapien ornare sed vestibulum risus arcu.</p>
            <form action="" id="form">
                <div class="skd_inputs_parent">
                    <input type="text" placeholder="family members">
                    {{-- <input type="text" list="browsers" placeholder="Ghizer"> --}}
                    {{-- <datalist id="browsers">
                        <option
                            value=" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skardu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">
                    </datalist> --}}
                    <div id="billdesc">
                        <select id="test">
                          <option class="non" value="Ghizer">Ghizer</option>
                          <option class="non" value="Skardu">Skardu</option>
                          <option class="editable" value="other">Other</option>
                        </select>
                        <input class="editOption" style="display:none;" placeholder="Text juaj"></input>
                    </div>
                    <input placeholder="4/8/2022" required="required" name="checkInn" type="text"
                        onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" />
                    <input placeholder="6/8/2022" required="required" name="checkOut" type="text"
                        onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" />
                </div>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
    <div class="avaliable_rooms">
        <h2>Rooms</h2>
        <div class="skd_parent_room">
            <div class="room_image_1">
                <img src="{{ asset('/assets/images/skd_page/skd_4.jpg') }}" alt="img1">
            </div>
            <div class="room_info">
                <h3>Deluxe Dome Yurt</h3>
                <div class="dy-row dy-row1">
                    <p><i class="fas fa-check"></i>&nbsp;2 Single Beds</p>
                    <p><i class="fas fa-check"></i>&nbsp;Complimentary Breakfast</p>
                    <p><i class="fas fa-check"></i>&nbsp;High-Speed Free Wi-Fi</p>
                </div>
                <div class="dy-row dy-row2">
                    <p><i class="fas fa-check"></i>&nbsp;*Mini bar</p>
                    <p><i class="fas fa-check"></i>&nbsp;Temperature Controlled Environment</p>
                    <p><i class="fas fa-check"></i>&nbsp;* Extra bed</p>
                </div>
                <div class="dy-row3">
                    <h3><span>$130</span>$100</h3>
                    <button>
                    <a href="BookingGhizer" class="room1_btn1">
                        Book Now
                    </a>
                </button>
                </div>
            </div>
        </div>

        <div class="skd_parent_room" id="second_room_id">
            <div class="room_image_1">
                <img src="{{ asset('/assets/images/skd_page/skd_5.jpg') }}" alt="img1">
            </div>
            <div class="room_info">
                <h3>Deluxe Yurt</h3>
                <div class="dy-row dy-row1">
                    <p><i class="fas fa-check"></i>&nbsp;King size bed</p>
                    <p><i class="fas fa-check"></i>&nbsp;Complimentary Breakfast</p>
                    <p><i class="fas fa-check"></i>&nbsp;High-Speed Free Wi-Fi</p>
                </div>
                <div class="dy-row dy-row2">
                    <p><i class="fas fa-check"></i>&nbsp;*Extra bed</p>
                    <p><i class="fas fa-check"></i>&nbsp;Temperature Controlled Environment</p>
                    <p><i class="fas fa-check"></i>&nbsp;Mini bar</p>
                </div>
                <div class="dy-row3">
                    <h3><span>$100</span>$80</h3>
                    <a href="BookingGhizer">
                        <button class="room1_btn1">Book Now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer-component />
