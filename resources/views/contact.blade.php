@extends('layouts.app')

@section('content')
<style>
    .hero-section {
        background: url('{{ asset('img/contactus.png') }}') no-repeat center center;
        background-size: cover;
        color: white;
        padding: 100px 0;
        text-align: center;
        min-height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .hero-section h1 {
        font-size: 3.5rem;
        font-weight: 700;
        color: #ffffff;
        
    }
    .hero-section p {
        font-size: 1.5rem;
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }
    .contact-form-section {
        padding: 80px 0;
    }
    .contact-form-section .form-control {
        transition: all 0.3s ease;
    }
    .contact-form-section .form-control:focus {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .contact-form-section img {
        transition: transform 0.3s ease;
    }
    .contact-form-section img:hover {
        transform: scale(1.05);
    }
    .contact-info-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa, #e8f0ff);
    }
    .contact-info-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding: 25px;
        border-radius: 15px;
        transition: all 0.4s ease-in-out;
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        box-shadow: 0 8px 25px rgba(0, 0, 128, 0.1);
        border: 1px solid rgba(192, 192, 192, 0.2);
    }
    .contact-info-item:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }
    .contact-info-item .icon {
        font-size: 2rem;
        color: #000080;
        margin-right: 20px;
        background: linear-gradient(135deg, #000080, #4169E1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .branch-box {
        transition: all 0.4s ease-in-out;
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        border: 1px solid rgba(192, 192, 192, 0.2);
        border-radius: 15px;
    }
    .branch-box:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }
    .branch-box img {
        transition: transform 0.4s ease;
    }
    .branch-box img:hover {
        transform: scale(1.05);
    }
</style>

<div class="hero-section">
    <div class="container">
        <h1 data-aos="fade-up">Contact Us</h1>
        <p data-aos="fade-up" data-aos-delay="200">We're here to help. Reach out to us anytime.</p>
    </div>
</div>

<div class="contact-form-section" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center mb-5">
                    <h2>Send Us a Message</h2>
                    <p>Have a question or need support? Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/img_1.webp') }}" alt="Contact Form Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="contact-info-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Contact Information</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-item h-100">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4>Address</h4>
                        <p>Office 603, 06th Floor Umm Al Quwain Bank Building, Bank Street, Bur Dubai. Dubai, P.O.BOX : 243173, Dubai, UAE</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-item h-100">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h4>Phone</h4>
                        <p>+971-56-939-8472<br>+971-4-265-4627</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-item h-100">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h4>Email</h4>
                        <p>info@wahegurutravels.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28868.785695267783!2d55.296281666052984!3d25.25045438655568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f433ac0c101d1%3A0xae275090c62372a3!2sNational%20Bank%20of%20Umm%20Al%20Quwain!5e0!3m2!1sen!2sin!4v1757419848701!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="branches-section" style="padding: 80px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Our Main Branches</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="branch-box" style="padding: 20px; border: 1px solid #e9ecef; border-radius: 10px; text-align: center;">
                    <h4>Africa Branches</h4>
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/BJ/flat/64.png" alt="BENIN Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Cotonou<br>BENIN</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/CI/flat/64.png" alt="Cote d'Ivoire Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Abidjan<br>Cote d'Ivoire</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/LR/flat/64.png" alt="LIBERIA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Monrovia<br>LIBERIA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/RW/flat/64.png" alt="RWANDA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Kigali<br>RWANDA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/TG/flat/64.png" alt="TOGO Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Lome<br>TOGO</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/GN/flat/64.png" alt="GUINEA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Conakry<br>GUINEA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/NG/flat/64.png" alt="NIGERIA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Lagos<br>NIGERIA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/SL/flat/64.png" alt="SIERRA LEONE Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Freetown<br>SIERRA LEONE</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/NE/flat/64.png" alt="NIGER Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Niamey<br>NIGER</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/UG/flat/64.png" alt="UGANDA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Kampala<br>UGANDA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/BF/flat/64.png" alt="BURKINA FASO Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Ouagadougou<br>BURKINA FASO</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/GM/flat/64.png" alt="GAMBIA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Banjul<br>GAMBIA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/SN/flat/64.png" alt="SENEGAL Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Dakar<br>SENEGAL</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/CD/flat/64.png" alt="Democratic Republic Congo Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Kinshasa<br>Democratic Republic Congo</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/ZM/flat/64.png" alt="ZAMBIA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Lusaka<br>ZAMBIA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/MG/flat/64.png" alt="MADAGASCAR Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">W Travels<br>MADAGASCAR</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/TZ/flat/64.png" alt="TANZANIA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Dar-E-Salaam<br>TANZANIA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/GH/flat/64.png" alt="GHANA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Accra<br>GHANA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/CG/flat/64.png" alt="Congo Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Brazzaville<br>Congo</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/GA/flat/64.png" alt="GABON Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">LIBREVILLE<br>GABON</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/KE/flat/64.png" alt="KENYA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Nairobi<br>KENYA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/CM/flat/64.png" alt="CAMEROON Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Douala<br>CAMEROON</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/MA/flat/64.png" alt="Morocco Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">W travels<br>Morocco</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/AO/flat/64.png" alt="ANGOLA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Luanda<br>ANGOLA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/SD/flat/64.png" alt="Sudan Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Sudan Juba<br>Sudan</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/GA/flat/64.png" alt="GABON Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Port Gentil<br>GABON</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/NG/flat/64.png" alt="NIGERIA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Kano<br>NIGERIA</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/ML/flat/64.png" alt="Mali Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Bamako<br>Mali</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/MW/flat/64.png" alt="Malawi Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Lilongwe<br>Malawi</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/GW/flat/64.png" alt="Guinea-Bissau Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Bissau<br>Guinea-Bissau</p>
                        </div>
                    </div>
                </div>`
            </div>
            <div class="col-md-12">
                <div class="branch-box" style="padding: 20px; border: 1px solid #e9ecef; border-radius: 10px; text-align: center;">
                    <h4>India Branches</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-sm-6 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/IN/flat/64.png" alt="INDIA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Ajmer<br>INDIA</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/IN/flat/64.png" alt="INDIA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Jaipur<br>INDIA</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/IN/flat/64.png" alt="INDIA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Noida<br>INDIA</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/IN/flat/64.png" alt="INDIA Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Gurugram<br>INDIA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="branch-box" style="padding: 20px; border: 1px solid #e9ecef; border-radius: 10px; text-align: center;">
                    <h4>Middle East Branches</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-6 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/AE/flat/64.png" alt="UAE Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Dubai<br>United Arab Emirates</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6 text-center mb-4">
                            <img src="https://flagsapi.com/SA/flat/64.png" alt="Saudi Arabia Flag" style="width: 64px; height: 64px;">
                            <p class="mt-2">Riyadh<br>Saudi Arabia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="worldwide-presence-section" style="padding: 80px 0; background-color: #f8f9fa;">
    <div class="container text-center">
        <h2 class="mb-5">Worldwide Presence</h2>
        <img src="https://i.imgur.com/6B4Y73A.png" alt="Worldwide Presence" class="img-fluid">
    </div>
</div>

@endsection