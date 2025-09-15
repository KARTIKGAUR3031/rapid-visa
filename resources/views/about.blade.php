@extends('layouts.app')

@section('content')
<style>
    .hover-section {
        transition: all 0.3s ease-in-out;
    }
    .hover-section:hover {
         transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }
    .team-member img {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .team-member img:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    .mission-section img,
    .vision-section img {
        transition: transform 0.3s ease;
    }
    .mission-section img:hover,
    .vision-section img:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }
    .feature-item .icon {
        font-size: 3rem;
        color: #000080;
        background: linear-gradient(135deg, #000080, #4169E1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .hero-section {
        background: linear-gradient(135deg, rgba(0, 0, 128, 0.25), rgba(65, 105, 225, 0.2)), url('{{ asset('img/aboutus.png') }}') no-repeat center center;
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
        text-shadow: 0 4px 8px rgba(0, 0, 128, 0.3);
        background: linear-gradient(135deg, #ffffff, #e8f0ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .hero-section p {
        font-size: 1.5rem;
        color: #e8f0ff;
        text-shadow: 0 2px 4px rgba(0, 0, 128, 0.3);
    }
    .mission-section {
        padding: 80px 0 0;
        background-color: #f8f9fa;
    }
    .vision-section {
        padding: 0 0 80px;
    }
    .team-section {
        padding: 80px 0;
    }
    .team-member {
        text-align: center;
    }
    .team-member img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
    }
    .why-choose-us-section {
        padding: 80px 0;
        background-color: #f8f9fa;
    }
    .why-choose-us-section:hover,
    .why-choose-us-section + .hover-section:hover {
        background-color: #f1f1f1;
    }
    .feature-item {
        text-align: center;
        padding: 30px;
        border-radius: 10px;
        background-color: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    .feature-item:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }
    .feature-item .icon {
        font-size: 3rem;
        color: #d97706;
        margin-bottom: 20px;
    }
</style>

<div class="hero-section">
    <div class="container">
        <h2 data-aos="fade-up">About Us</h2>
        <p data-aos="fade-up" data-aos-delay="200">Your Trusted Partner in Immigration</p>
    </div>
</div>

<div class="container py-5 hover-section" data-aos="fade-up">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/image-05.png') }}" alt="About Us" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h1 class="display-4">About Our Immigration Firm</h1>
            <p class="lead">At Rapid Visa, we specialize in helping individuals and families navigate the complex world of immigration with clarity, confidence, and care. Our mission is to simplify the immigration process through expert guidance, personalized support, and a strong commitment to ethical practices.</p>
            <p>With a team of experienced immigration professionals and legal consultants, we provide comprehensive services tailored to each client’s unique goals. Whether you're seeking new opportunities abroad, reuniting with loved ones, or planning a long-term move, we’re here to support you every step of the way.<p/>
            <p>We are a trusted immigration consultancy dedicated to delivering transparent, timely, and reliable services. Over the years, we've helped countless clients successfully complete their immigration journey, and we take pride in our high success rate and strong client relationships.</p>
        </div>
    </div>
</div>

<div class="mission-section hover-section" data-aos="fade-right">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Our Mission</h2>
                <p>At Rapid Visa, our mission is to provide clear, reliable, and client-centered immigration and visa services that help people navigate the complex legal landscape of global mobility. We aim to make the process of moving abroad easier, faster, and more accessible—whether for work, study, family reunification, or permanent settlement.</p>

<p>We are dedicated to:</p>

<ul>
    <li><strong>Delivering Excellence:</strong> Offering high-quality, customized immigration solutions tailored to each client’s unique goals.</li>
    <li><strong>Maintaining Transparency:</strong> Ensuring our clients are informed at every stage of the process through honest communication and real-time updates.</li>
    <li><strong>Building Trust:</strong> Upholding integrity, confidentiality, and compliance with international immigration laws and policies.</li>
    <li><strong>Empowering Dreams:</strong> Helping individuals and families create brighter futures by opening doors to global opportunities.</li>
</ul>

<p>Through a combination of technology, expertise, and human support, we strive to remove the stress and uncertainty from the immigration journey.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/mission.png') }}" alt="Our Mission" class="img-fluid rounded" data-aos="fade-left">
            </div>
        </div>
    </div>
</div>

<div class="vision-section hover-section" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('img/vision.png') }}" alt="Our Vision" class="img-fluid rounded" data-aos="fade-right">
            </div>
            <div class="col-md-6">
                <h2>Our Vision</h2>
                <p>At Rapid Visa, we envision a world where borders do not limit potential—where people from all walks of life can access global opportunities with dignity, fairness, and support.</p>
<ul>
    <li><strong>🌍 Empower Global Mobility:</strong> Create seamless pathways for people to live, work, and thrive in new countries, without being overwhelmed by bureaucracy or uncertainty.</li>
    <li><strong>💼 Set the Standard in Service:</strong> Become the most trusted name in immigration consultancy by consistently delivering exceptional service, accurate advice, and successful outcomes.</li>
    <li><strong>🔒 Champion Ethical Immigration:</strong> Advocate for transparency, compliance, and fairness in immigration processes, ensuring every client is treated with respect and honesty.</li>
    <li><strong>🤝 Build Lasting Relationships:</strong> Grow a global community of clients, partners, and stakeholders who trust us not only as a service provider, but as a lifelong advisor in their migration journey.</li>
    <li><strong>💡 Innovate with Purpose:</strong> Leverage technology and data-driven solutions to streamline immigration processes and provide clients with real-time updates, resources, and tools that enhance their experience.</li>
    <li><strong>❤️ Humanize the Journey:</strong> Recognize that every immigration case is a personal story—and we are committed to supporting each client with empathy, care, and understanding.</li>
</ul>
<p>Our long-term vision is to break down barriers to international migration and create a more connected, inclusive, and opportunity-rich world—one successful visa at a time.</p>
            </div>
        </div>
    </div>
</div>

<div class="container py-5 hover-section" data-aos="fade-up">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="https://st2.depositphotos.com/1092019/9700/i/450/depositphotos_97006952-stock-illustration-what-we-do-on-white.jpg" alt="What We Do" class="img-fluid rounded" data-aos="fade-right">
        </div>
        <div class="col-md-6">
            <div class="text-center mb-5">
                <h2>What We Do</h2>
            </div>
            <p>At our core, we provide complete visa and immigration solutions designed to make international travel easier, safer, and stress-free. We help you with everything from visa applications and document verification to flight bookings and consultation services.</p>
            <p>Our goal is to eliminate the confusion and delays that often come with immigration processes. Whether you are applying for a student visa, work visa, tourist visa, or family visa, we provide accurate guidance and step-by-step support. We also assist with travel planning, offering affordable flight booking options that align with your visa approval and travel schedule.</p>
            <p>By combining expert knowledge with personalized service, we ensure that your journey abroad begins on the right note.</p>
        </div>
    </div>
</div>

<div class="why-choose-us-section hover-section" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-center mb-5">
                    <h2>Why Choose Us</h2>
                </div>
                <p>When it comes to something as important as your travel and immigration, choosing the right partner makes all the difference. Here’s why thousands of clients trust us:</p>
                <p>✅ Proven Expertise: With years of experience in global immigration, our visa consultants have a deep understanding of requirements and approval trends.</p>
                <p>✅ Tailored Solutions: We don’t believe in one-size-fits-all. Every case is unique, and we provide solutions that match your personal, educational, or professional needs.</p>
                <p>✅ Fast &amp; Hassle-Free: We streamline the process so you can save time and avoid unnecessary delays.</p>
                <p>✅ End-to-End Assistance: From the moment you start your application until you land at your destination, we stand by you at every step.</p>
                <p>✅ Transparent Pricing: No hidden costs—just clear, affordable services you can trust.</p>
                <p>With us, you are not just a client—you are a partner. Your success is our priority, and we go above and beyond to make your travel goals a reality.</p>
            </div>
            <div class="col-md-6">
                <img src="https://img.freepik.com/premium-photo/why-choose-us_220873-5582.jpg?semt=ais_hybrid&w=740&q=80" alt="Why Choose Us" class="img-fluid rounded" data-aos="fade-left">
            </div>
        </div>
    </div>
</div>

<div class="container py-5 hover-section" data-aos="fade-up">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="text-center mb-5">
                <h2>Our Commitment</h2>
            </div>
            <p>We understand that applying for a visa and planning international travel is more than just paperwork—it’s about dreams, opportunities, and new beginnings. That’s why we are committed to:</p>
            <p>🔹 Client-Centered Service: Putting your needs, goals, and timeline first.</p>
            <p>🔹 Integrity &amp; Transparency: Honest advice and clear communication, always.</p>
            <p>🔹 Excellence in Service: Delivering high-quality, professional assistance backed by proven results.</p>
            <p>🔹 Long-Term Support: We don’t stop at visa approval—we also help with travel bookings, follow-ups, and guidance for future needs.</p>
            <p>Our mission is to make your immigration journey smooth, stress-free, and successful—because your future deserves nothing less.</p>
        </div>
        <div class="col-md-6">
            <img src="https://t4.ftcdn.net/jpg/00/85/81/99/360_F_85819931_AaN7e7KydNChqV0e0gUu4B9bBSLKJGrK.jpg" alt="Our Commitment" class="img-fluid rounded" data-aos="fade-left">
        </div>
    </div>
</div>
@endsection