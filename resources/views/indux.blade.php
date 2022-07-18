<x-header-component />
{!! Toastr::message() !!}
<div class="header">
    <div class="front_container">
        <div class="for_messages_and_call">
            <a href="mailto: abc@example.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
            <hr>
            <!-- <i class="fa-solid fa-phone"></i> -->
            <a href="https://api.whatsapp.com/send?phone=393456789715" target="_blank"><i
                    class="fa-solid fa-phone"></i></a>
        </div>
        <div class="text_section">
            <h1>Le Yurt
            </h1>
            <p>
                Destiny Is All
            </p>

        </div>

        <div class="form_container">
  
                <form action="{{ route('reservation.store') }}" method="POST" class="form">
                    @csrf
                <div class="form_inputs">
                    <input type="text" placeholder="Guests"  name="name" style="font-family: 'Mohave'; font-size:13px" />
                    <input list="browsers" placeholder="Location" name="location"
                        style="font-family: 'Mohave'; font-size:13px" />
                    <datalist id="browsers">
                        <option value="Skardu">
                        <option value="Ghizer">
                    </datalist>
                    <input placeholder="Check In" required="required"  name="checkInn" type="text" onfocus="(this.type='date')"
                        onblur="if(!this.value)this.type='text'" />
                    <input placeholder="Check Out" required="required"   name="checkOut" type="text" onfocus="(this.type='date')"
                        onblur="if(!this.value)this.type='text'" />
                </div>
                <div class="button_cont">
                    <button type="submit">Book Now</button>
                </div>
            </form>
        </div>
    </div>
</div>





<div class="welcome_container">
    <div class="contant">
        <h1>Welcome to <span>Le-Yurt</span></h1>
        <p>
            Le Yurt is a subsidiary of Apex Hotels and Resorts Pvt. that aims to provide quality residence in Gilgit
            Baltistan while being eco-friendly and sustainable. It is an initiative to boost Agrotourism in Gilgit
            Baltistan. Le Yurt offers visitors an educational and entertaining experience of a rural setting. We
            strive to provide maximum benefits to the local community by establishing ties with them.
        </p>
        <a href="">Explore more
            <hr style="text-align:center; border: 1px solid #00AA4A;width: 85px; height: 0px;">
        </a>
    </div>
</div>
<div id="services-container">
    <div class="wl_row">
        <div class="our_ser">
            <h1>Our </h1> &nbsp;&nbsp;
            <h1 class="serv">Services</h1>
        </div>
    </div>
    <div class="wi-row2">
        <div class="col50">
            <div id="hcg-tabs-1" class="tabs-container">
                <div id="tabs-nav">
                    <a href="#" data-target="tab_1" class="tabs-menu tabs-menu-active"> <i
                            class="fa-solid fa-plane"></i> &nbsp;Airplane Ticket</a>
                    <a href="#" data-target="tab_2" class="tabs-menu"><i class="fa-solid fa-car-side"></i>
                        &nbsp;Car Rental</a>
                    <a href="#" data-target="tab_3" class="tabs-menu"> <i class="fa-solid fa-person"></i>
                        &nbsp;Tour Guide</a>
                </div>
                <div class="tabs-content">
                    <div id="tab_1" class="tabs-panel" style="display:block">
                        <div class="flex-content">
                            
                <form action="{{ route('airTicketReservations.store') }}" method="POST"  enctype="multipart/form-data" class="form" id="form_section">
                    @csrf
                         
                                <div class="input-container">
                                    <div class="col50-at">
                                        <input class="input-field" type="text" placeholder="Full Name*"
                                            name="fullName" required>
                                    </div>
                                    <div class="col50-at">
                                        <!-- <i class="fa fa-user icon"></i> -->
                                        <i class="fa-solid fa-location-dot icon"></i>
                                        <input class="input-field" type="text" 
                                            placeholder="Leaving From" name="leavingFrom" required>
                                        <i class="fa-solid fa-magnifying-glass icon"></i>
                                    </div>
                                    <div class="col50-at">
                                        <i class="fa-solid fa-location-dot icon"></i>
                                        <input class="input-field" type="text" 
                                            placeholder="Leaving To" name="leavingTo" required>
                                        <i class="fa-solid fa-magnifying-glass icon"></i>
                                    </div>
                                </div>
                                <div class="input-container input-container-fw ">
                                    <i class="fa-solid fa-plane-departure icon"></i>
                                    <input class="input-field" placeholder="Departure Date" name="departureDate"
                                        type="text" onfocus="(this.type='date')"
                                        onblur="if(!this.value)this.type='text'" required>
                                </div>
                                <div class="input-container" id="input-idLast">
                                    <div class="col50-at">
                                        <i class="fa-solid fa-phone-volume icon"></i>
                                        <input type="number" class="input-field" placeholder="Contact Number" name="cellno" required>
                                    </div>
                                    <div class="col50-at">
                                        <i class="fa fa-users icon"></i>
                                        <i class="fa-solid fa-seat-airline"></i>
                                        <input class="input-field" type="text" type="number" placeholder="Number of Childs "
                                            name="numberOFChilds" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn">Submit Now</button>
                            </form>
                            <div class="col501">
                                <img src="{{ asset('assets/images/undraw_aircraft-min.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div id="tab_2" class="tabs-panel">
                        <div class="flex-content">
                            <form action="{{ route('vehicleReservations.store') }}" method="POST"  enctype="multipart/form-data" >
                                @csrf
                                <div class="input-container">
                                    <div class="col50-at">
                                        <input class="input-field" type="text" placeholder="full name"
                                            name="fullName">
                                    </div>
                                    <div class="col50-at">
                                        <i class="fa-solid fa-location-dot icon"></i>
                                        <input class="input-field" type="text" placeholder="Leaving From"
                                            name="leavingFrom">
                                        <i class="fa-solid fa-magnifying-glass icon"></i>
                                    </div>
                                    <div class="col50-at">
                                        <i class="fa-solid fa-location-dot icon"></i>
                                        <input class="input-field" type="text" placeholder="Leaving To"
                                            name="leavingTo">
                                        <i class="fa-solid fa-magnifying-glass icon"></i>
                                    </div>
                                </div>
                                <div class="input-container input-container-fw ">
                                    {{-- <i class="fa fa-solid fa-sidebar-flip icon"></i> --}}
                                    <i class="fa-solid fa-car-side icon"></i>
                                    <input class="input-field" type="text" placeholder="Departure Date"
                                        name="departureDate" onfocus="(this.type='date')"
                                        onblur="if(!this.value)this.type='text'">
                                </div>
                                <div class="input-container">
                                    <div class="col50-at">
                                        <i class="fa-solid fa-phone-volume icon"></i>
                                        <input type="number" class="input-field" name="cellno" placeholder="Contact Number">
                                    </div>
                                    <div class="col50-at">
                                        <i class="fa-solid fa-car-side icon"></i>
                                        <!-- <input class="input-field" type="text" placeholder="Class" name="class"> -->
                                        <label class=" input-field class-label" for="class">Types of Car</label>
                                        <select name="vehicle" id="class">
                                            <option value="T-z">T-z</option>
                                            <option value="V-8">V-8</option>
                                            <option value="Car">Car</option>
                                            <option value="Jeep">Jeep</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn">Submit Now</button>
                            </form>
                            <div class="col501">
                                <img src="{{ asset('assets/images/servic-img(1).png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div id="tab_3" class="tabs-panel tourGuideTab3">
                        <div class="flex-content">
                            <form action="{{ route('tourGuideReservations.store') }}" method="POST"  enctype="multipart/form-data"  id="form-tour-guide">
                                @csrf
                        
                                <div class="input-container">
                                    <div class="col50-at">
                                        <input class="input-field" type="text" placeholder="full name"
                                            name="fullName">
                                    </div>
                                    <div class="col50-at">
                                        <!-- <i class="fa fa-user icon"></i> -->
                                        <i class="fa-solid fa-location-dot icon"></i>
                                        <input class="input-field" type="text" placeholder="Location"
                                            name="location">
                                        <i class="fa-solid fa-magnifying-glass icon"></i>
                                    </div>
                                </div>
                                <div class="input-container input-container-fw ">
                                    <i class="fa fa-light fa-language icon"></i>
                                    <input class="input-field" type="text" placeholder="Language Preference"
                                        name="language">
                                </div>
                                <div class="input-container input-container-fw ">
                                    <div class="col50-at">
                                        <i class="fa-solid fa-phone-volume icon"></i>
                                        <input type="number" class="input-field"   name="cellno" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="input-container">
                                    <div class="col50-at">
                                        <i class="fa fa-light fa-user icon"></i>
                                        <label class=" input-field class-label" for="class">Gender</label>
                                        <select name="gender" id="class" >
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn">Submit Now</button>
                            </form>
                            <div class="col501">
                                <img src="{{ asset('assets/images/servic-img(2).png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- {{-- (((((((((((((((((((((((((((((slider container))))))))))))))))))))))))))))) --}} -->
<div class="slider_container">
    <h1>A Purely <span>Natural</span> Stay</h1>

    <div class="slide_container active">
        <div class="slidee">
            <div class="slider_image">
                <img src="{{ asset('assets/images/img_Slider(6).jpg') }}" width="100%" alt="">
            </div>
            <div class="slide_content">
                <h3>Yurt</h3>
                <p>Stay at a luxurious yurt equipped with modern-day facilities like a 5-star suite while being
                    eco-friendly. Experience the unique and organic Bedouin Mongolian experience instead of residing
                    in a boring, non-eco-friendly, and concrete buildings that limit our interaction with nature.
                </p>
                <a href="#">Explore more
                    <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                </a>
            </div>
        </div>
    </div>
    <div class="slide_container">
        <div class="slidee">
            <div class="slider_image">
                <img src="{{ asset('assets/images/front_image1.png') }}" width="100%" alt="">
                {{-- <div class="overlay"></div> --}}
            </div>
            <div class="slide_content">
                <h3>Live Cooking</h3>
                <p>Experience the cooking of your food, get involved with the chefs, and initiate a learning
                    process. Le Yurt provides you the opportunity to interact with the chefs and staff to learn the
                    tips and tricks of our delicious cuisine.</p>
                <a href="#">Explore more
                    <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                </a>
            </div>
        </div>
    </div>

    <div class="slide_container ">
        <div class="slidee">
            <div class="slider_image">
                <img src="{{ asset('assets/images/img_Slider(5).jpg') }}" width="100%" alt="">
            </div>
            <div class="slide_content">
                <h3>Participation in farm activities</h3>
                <p>
                    Pick your vegetables, talk to the locals, and get used to recreational on-farm activities. Enjoy
                    the art of plucking vegetables from plants and feel close to Mother Earth. Visit fruit orchards
                    and pick your favorite seasonal fruits. Enjoy the feeling of picking organic fruit from a tree
                    rather than opening a can. Enjoy the touch of nature with us.
                </p>
                <a href="#">Explore more
                    <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                </a>
            </div>
        </div>
    </div>

    <div class="slide_container">
        <div class="slidee">
            <div class="slider_image">
                <img src="{{ asset('assets/images/img_Slider(3).jpg') }}" alt="">
            </div>
            <div class="slide_content">
                <h3>Cultural Exposure:</h3>
                <p>Explore the centuries-old culture and traditions of Gilgit Baltistan with Le Yurt. Interact with
                    the locals, learn about their clothing style, learn how they live, and maybe try living like
                    them for a while.</p>
                <a href="#">Explore more
                    <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                </a>
            </div>
        </div>
    </div>
    <div class="slide_container">
        <div class="slidee">
            <div class="slider_image">
                <img src="{{ asset('assets/images/img_Slider(2).jpg') }}" alt="">
            </div>
            <div class="slide_content">
                <h3 id="heading">Experience Local Festivals</h3>
                <p>Experience the energy and passion of the indigenous people through year-long festivities. From
                    Ginani Festivals in Hunza to Shandur Polo Festival in Ghizer, enjoy the zeal and zest of locals
                    and get to know the notions behind these celebrations.</p>
                <a href="#">Explore more
                    <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                </a>
            </div>
        </div>
    </div>
    <div class="slide_container">
        <div class="slidee">
            <div class="slider_image">
                <img src="{{ asset('assets/images/img_Slider(4).jpg') }}" alt="">
            </div>
            <div class="slide_content">
                <h3 id="heading">Meditation & Yoga</h3>
                <p>Imagine sitting under the shadow of snow-capped mountains, a rushing river in front, the fruity
                    smell of gardens, and lush green land. Just sitting there will reconnect you to nature & make
                    you grounded, helping you cope with distressful mental energies and helping you rejuvenate
                    spiritually, emotionally, and physically. </p>
                <a href="#">Explore more
                    <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                </a>
            </div>
        </div>
    </div>
    <div class="slide_container">
        <div class="slidee">
            <div class="slider_image">
                <img src="{{ asset('assets/images/img_Slider(1).jpg') }}" alt="">
            </div>
            <div class="slide_content">
                <h3 id="heading">Bonfires</h3>
                <p> What’s better than a night with a bonfire, folk tales, and a cup of hot herbal tea. Learn about
                    the region's history through storytelling sessions in an open, non-judgmental, and accessible
                    environment. Share your thoughts and speak your heart out.</p>
                <a href="#">Explore more
                    <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                </a>
            </div>
        </div>
    </div>
    <div class="prev_next_counter">
        <div class="counter_parent">
            <div id="counter">
                01 / 07 | Live Cooking
            </div>
        </div>
        <div class="prev_next_parent">
            <div id="prev" onclick="prev()">
                <img src="{{ asset('assets/images/Arrow(1).jpg') }}" alt="" width="30"
                    height="20">
            </div>
            <div id="next" onclick="next()">
                <img src="{{ asset('assets/images/Arrow(2).jpg') }}" alt="" width="30"
                    height="20">
            </div>
        </div>
    </div>
</div>
<!-- {{-- {{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{Slider render }}}}}}}}}}}}}}}}}}}}}}}}}}}}}}} --}} -->
<!-- <<<<<<<<<<<<<<<<<<<<<<<page wrapper>>>>>>>>>>>>>>>>>>>>>>> -->
<div class="page_wrapper">
    <div class="post_slider">
        <!-- <<<<<<<<<<<<<<<<<post_slider>>>>>>>>>>>>>>>>>>>>> -->
        <span class="top_text">A Concentration of Comfort</span>
        <h3 class="slider_title">Yurts</h3>
        <i class="fa fa-caret-left prev" onclick="function next()" style="font-size: 36px"></i>
        <i class="fa fa-caret-right next" onclick="function prev()" style="font-size: 36px"></i>
        <div class="post_wrapper">
            <div class="post">
                <img src="{{ asset('assets/images/R_img(1).jpg') }}" alt="" class="slider_image" />
                <div class="post_info">
                    <h3>Deluxe Yurt</h3>
                    <div class="dy-row">
                        <p><i class="fas fa-check"></i>&nbsp;King size bed</p>
                        <p><i class="fas fa-check"></i>&nbsp;Complimentary Breakfast</p>
                        <p><i class="fas fa-check"></i>&nbsp;High-Speed Free Wi-Fi</p>
                    </div>
                    <div class="dy-row dy-row2">
                        <p><i class="fas fa-check"></i>&nbsp;*Extra bed</p>
                        <p><i class="fas fa-check"></i>&nbsp;Temperature Controlled Environment</p>
                        <p><i class="fas fa-check"></i>&nbsp;Mini bar</p>
                    </div>
                    <a href="#"> Explore more
                        <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                    </a>
                </div>
            </div>
            <div class="post">
                <img src="{{ asset('assets/images/R_img(3).jpg') }}" alt="" class="slider_image" />
                <div class="post_info active">
                    <h3>Deluxe Dome Yurt</h3>
                    <div class="dy-row">
                        <p><i class="fas fa-check"></i>&nbsp;2 Single Beds</p>
                        <p><i class="fas fa-check"></i>&nbsp;Complimentary Breakfast</p>
                        <p><i class="fas fa-check"></i>&nbsp;High-Speed Free Wi-Fi</p>
                    </div>
                    <div class="dy-row dy-row2">
                        <p><i class="fas fa-check"></i>&nbsp;Mini bar</p>
                        <p><i class="fas fa-check"></i>&nbsp;Temperature Controlled Environment</p>
                        <p><i class="fas fa-check"></i>&nbsp;* Extra bed</p>
                    </div>
                    <a href="#"> Explore more
                        <hr style="border: 1px solid #00AA4A;width: 85px; height: 0px;">
                    </a>
                </div>
            </div>
            <!-- <div class="post">
                    <img src="{{ asset('assets/images/R_img(6).jpg') }}" alt="" class="slider_image" />
                    <div class="post_info">
                        <h3>Deluxe</h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                        </p>
                        <a href="#"> Explore more
                            <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                        </a>
                    </div>
                </div>
                <div class="post">
                    <img src="{{ asset('assets/images/R_img(3).jpg') }}" alt="" class="slider_image" />
                    <div class="post_info">
                        <h3>Deluxe</h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                        </p>
                        <a href="#"> Explore more
                            <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                        </a>
                    </div>
                </div>
                <div class="post">
                    <img src="{{ asset('assets/images/R_img(6).jpg') }}" alt="" class="slider_image" />
                    <div class="post_info">
                        <h3>Deluxe</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.</p>
                        <a href="#"> Explore more
                            <hr style="border: 1px solid #00AA4A;;width: 85px; height: 0px;">
                        </a>
                    </div>
                </div> -->
        </div>
    </div>
</div>
<div class="great_place_container">
    <div class="great_place_up"></div>
    <h3>Stays in <span>Great Places</span></h3>
    <div class="great_parent_container">
        <div class="item">
            <div class="content">
                <h2>Ghizer</h2>
                <p>
                    Ghizer is also known as the land of lakes. This region has
                    amazing valleys of Phander, Punyal, and Yasin. Phander has
                    one of the heavenly landscapes with lush green areas with
                    sky blue rivers. Ghizer is also famous for trout fish, organic
                    food, scenic lakes, and the hospitality of the locals. Three
                    languages are spoken in this region, namely Burushaski, Shina,
                    and Khuwar.
                </p>
                <a href="#">Explore more
                    <hr style=" text-align:center; border: 1px solid #00AA4A;width: 85px; height: 0px;">
                </a>
            </div>
        </div>
        <div class="item">
            <div class="content">
                <h2>Skardu</h2>
                <p>
                    Skardu is one of the most diversified landscapes in the world. It provides easy access to the
                    famous Katpana Desert, Deosai Planes, Manthoka Waterfall,Kamush Waterfall Shangrilla Resorts, and
                    Upper Kachura
                    Lake. This region's landscapes, culture, traditions, and hospitality are so wholesome that
                    hundreds of thousands of tourists visit Skardu yearly.
                </p>
                <a href="#">Explore more
                    <hr style=" text-align:center; border: 1px solid #00AA4A;width: 85px; height: 0px;">
                </a>
            </div>
        </div>
    </div>
</div>
<x-footer-component />
