@extends('layouts.app')

@section('content')
<style>
    .feature-item .icon {
        font-size: 3rem;
        color: #ECAB1D;
    }
    .hero-section {
        background: url('{{ asset('img/aboutus.png') }}') no-repeat center center;
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
        font-weight: bold;
    }
    .hero-section p {
        font-size: 1.5rem;
        color: black;
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
    .feature-item {
        text-align: center;
        padding: 30px;
        border-radius: 10px;
        background-color: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    .feature-item:hover {
        transform: translateY(-10px);
    }
    .feature-item .icon {
        font-size: 3rem;
        color: #ECAB1D;
        margin-bottom: 20px;
    }
</style>

<div class="hero-section">
    <div class="container">
        <h2>About Us</h2>
        <p>Your Trusted Partner in Immigration</p>
    </div>
</div>

<div class="container py-5">
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

<div class="mission-section">
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
                <img src="{{ asset('img/mission.png') }}" alt="Our Mission" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>

<div class="vision-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('img/vision.png') }}" alt="Our Vision" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2>Our Vision</h2>
                <p>At Rapid Visa, we envision a world where borders do not limit potential—where people from all walks of life can access global opportunities with dignity, fairness, and support.</p>
<p>We aim to be more than just a visa consultancy—we strive to become a global leader in immigration solutions, known for our integrity, innovation, and human-centered approach. Our vision is to redefine the immigration experience by making it simpler, smarter, and more compassionate for individuals and families seeking a new beginning.</p>
<p>We aspire to:</p>
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

<div class="container py-5">
    <div class="text-center mb-5">
    <h2>What We Do</h2>
</div>
    <p>We offer a wide range of immigration and visa-related services, including:</p>
    <ul>
        <li>Visa consultation and eligibility assessment</li>
        <li>Document preparation and application support</li>
        <li>Legal guidance and compliance</li>
        <li>Case monitoring and status updates</li>
        <li>Appeals and follow-up services (if required)</li>
    </ul>
    <p>Every case is different, and that’s why we take a personalized approach—developing a strategy that fits your needs, background, and destination.</p>
</div>

<div class="why-choose-us-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Why Choose Us</h2>
        </div>
        <ul>
            <li>✅ Experienced and Knowledgeable Team</li>
            <li>✅ Clear, Honest Communication</li>
            <li>✅ Tailored Solutions for Every Client</li>
            <li>✅ Up-to-Date Legal Guidance</li>
            <li>✅ Efficient and Confidential Process Handling</li>
        </ul>
        <p>We don’t just process applications—we build lasting relationships and help people take meaningful steps toward a better future.</p>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
    <h2>Our Commitment</h2>
</div>
    <p>We are committed to making the immigration journey smoother, faster, and more accessible for everyone. From your first consultation to the final decision, we offer honest advice, responsive support, and expert service at every stage.</p>
    <p>Let us help you move forward—one step, one document, one decision at a time.</p>
</div>
@endsection