@extends('index-main')
@section('csscontent')
    <style>
.popup {
    display: none;
    position: fixed;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #131944;
    color: #fe5d14;
    padding: 20px 30px;
    border-radius: 5px;
    font-weight: 800;
    z-index: 9999;
    font-size: 22px;
}

.popup.show {
    display: block;
}
@media only screen and (max-width: 630px) {
    .popup {
    display: none;
    position: fixed;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #131944;
    color: #fe5d14;
    padding: 10px 10px;
    border-radius: 5px;
    font-weight: 800;
    z-index: 9999;
    font-size: 22px;
    width: 250px;
}

.popup.show {
    display: block;
}
}
    </style>
@endsection
@section('content')
            <!-- mian-area -->
            <main>

                <!-- breadcrumb-area -->
                <section class="breadcrumb-area breadcrumb-bg" style="background-color:#011230">
                    <div class="breadcrumb-shape" data-background="assets/img/images/breadcrumb_shape.png"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="breadcrumb-content">
                                    <h2 class="title">Contact Us</h2>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{Route('index_main')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- breadcrumb-area-end -->
    
                <!-- contact-area -->
                <section class="contact-area pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-10">
                                <div class="contact-form-wrap" data-background="assets/img/images/contact_form_bg.jpg">
                                    <h2 class="title">Contact With Us</h2>
                                    <p>Send us a message and we' ll respond as soon as possible</p>
                                    
                                    
                                    {{-- <form action="{{Route('save-query')}}" class="contact-form" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="fname" name="fname" type="text" placeholder="First Name*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="lname"  name="lname" type="text" placeholder="Last Name*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="email" name="email" type="email" placeholder="Email Address*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="phone" name="phone" type="text" placeholder="Phone Number*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-grp">
                                            <input id="subject" name="subject" type="text" placeholder="Subject">
                                        </div>
                                        <div class="form-grp">
                                            <textarea id="message" name="message" placeholder="Your Message here"></textarea>
                                        </div>
                                        <button class="btn" type="submit">Send Message</button>
                                    </form> --}}
                                    
                                    
                                    <form action="{{ Route('save-query') }}" class="contact-form" id="contact-form" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="fname" name="fname" type="text" placeholder="First Name*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="lname"  name="lname" type="text" placeholder="Last Name*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="email" name="email" type="email" placeholder="Email Address*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="phone" name="phone" type="text" placeholder="Phone Number*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-grp">
                                            <input id="subject" name="subject" type="text" placeholder="Subject">
                                        </div>
                                        <div class="form-grp">
                                            <textarea id="message" name="message" placeholder="Your Message here"></textarea>
                                        </div>
                                        <button class="btn" type="submit">Send Message</button>
                                    </form>
                                    <div class="popup" id="popup-message">
                                        <span id="popup-text">Message Sent Successfully !!!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-10">
                                <div class="contact-info-wrap">
                                    <h2 class="title">Need Any Help?</h2>
                                    <p>Call us or message and we' ll respond as soon as possible</p>
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="contact-info-item">
                                                  <br>
                                                <div class="icon">
                                                    <i class="fas fa-phone-alt"></i>
                                                </div>
                                                <div class="content" style="padding-bottom: 20px">
                                                    <a href="tel:7697842277">+91-76978 42277</a>
                                                     <a href="tel:9826915756">+91-98269 15756</a>
                                                </div>
                                               
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-info-item">
                                                <div class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="content">
                                                    <p>33-A/1, R.R. industrial Area,<br> Sanwer Road Indore.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-info-item">
                                                <div class="icon">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <div class="content">
                                                    <a href="mailto:vtmetal@rediffmail.com">vtmetal@rediffmail.com</a>
                                                    <br>
                                                </div>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </div>
    
                                <!-- contact-map -->
                                <div id="contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3678.4411731319506!2d75.84025837508436!3d22.78611107934021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjLCsDQ3JzEwLjAiTiA3NcKwNTAnMzQuMiJF!5e0!3m2!1sen!2sin!4v1712648409462!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <!-- contact-map-end -->
    
                            </div>
                        </div>
                    </div>
                </section>
                <!-- contact-area-end -->
    
            </main>
            <!-- mian-area-end -->
@endsection
@section('jscontent')
<script src="script.js"></script> 
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const contactForm = document.getElementById("contact-form");
    const popupMessage = document.getElementById("popup-message");

    contactForm.addEventListener("submit", function(event) {
        event.preventDefault();
        showMessagePopup();
    });

    function showMessagePopup() {
        popupMessage.classList.add("show");
        setTimeout(function() {
            popupMessage.classList.remove("show");
        }, 3000);
    }
});
</script>
@endsection
