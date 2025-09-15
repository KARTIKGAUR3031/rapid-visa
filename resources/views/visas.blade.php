@extends('layouts.app')

@section('content')
<style>
    .btn-primary {
        background-color: #ee9734ff !important;
        border-color: #ee9734ff !important;
    }
    .card {
        transition: all 0.3s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important;
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
</style>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="display-4">Visa Applications</h1>
                <p class="lead">We provide expert visa assistance for a wide range of countries. Select your destination to begin.</p>
            </div>
            
            <div class="input-group mb-5 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                <input type="text" class="form-control form-control-lg" placeholder="Search for a country...">
                <button class="btn btn-primary btn-lg" type="button">Search</button>
            </div>

            <div class="row gy-4">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1526495124232-a04e1849168c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" class="card-img-top" alt="Dubai">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Dubai</h5>
                                            <p class="card-text">Apply for your Dubai visa online. Get your visa in 24 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Dubai', 'image' => 'https://images.unsplash.com/photo-1526495124232-a04e1849168c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://plus.unsplash.com/premium_photo-1697730373939-3ebcaa9d295e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8c2luZ2Fwb3JlfGVufDB8fDB8fHww" class="card-img-top" alt="Singapore">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Singapore</h5>
                                            <p class="card-text">Apply for your Singapore visa online. Get your visa in 48 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Singapore', 'image' => 'https://plus.unsplash.com/premium_photo-1697730373939-3ebcaa9d295e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8c2luZ2Fwb3JlfGVufDB8fDB8fHww']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1508062878650-88b52897f298?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bWFsYXNpYXxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="Malaysia">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Malaysia</h5>
                                            <p class="card-text">Apply for your Malaysia visa online. Get your visa in 72 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Malaysia', 'image' => 'https://images.unsplash.com/photo-1508062878650-88b52897f298?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bWFsYXNpYXxlbnwwfHwwfHx8MA%3D%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" class="card-img-top" alt="Thailand">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Thailand</h5>
                                            <p class="card-text">Apply for your Thailand visa online. Get your visa in 24 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Thailand', 'image' => 'https://images.unsplash.com/photo-1528181304800-259b08848526?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1738706863635-c024fd3616a9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHZpdGVuYW0lMjBjaXR5fGVufDB8fDB8fHww" class="card-img-top" alt="Vietnam">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Vietnam</h5>
                                            <p class="card-text">Apply for your Vietnam visa online. Get your visa in 48 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Vietnam', 'image' => 'https://images.unsplash.com/photo-1738706863635-c024fd3616a9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHZpdGVuYW0lMjBjaXR5fGVufDB8fDB8fHww']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGluZG9uZXNpYXxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="Indonesia">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Indonesia</h5>
                                            <p class="card-text">Apply for your Indonesia visa online. Get your visa in 72 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Indonesia', 'image' => 'https://images.unsplash.com/photo-1559628209-54d638b6137a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW5kb25lc2lhfGVufDB8fDB8fHww']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1589561454226-796a8aa89b05?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8VHVya2V5fGVufDB8fDB8fHww" class="card-img-top" alt="Turkey">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Turkey</h5>
                                            <p class="card-text">Apply for your Turkey visa online. Get your visa in 24 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Turkey', 'image' => 'https://images.unsplash.com/photo-1589561454226-796a8aa89b05?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8VHVya2V5fGVufDB8fDB8fHww']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1584719866406-c76ddee48493?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8RWd5cHR8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Egypt">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Egypt</h5>
                                            <p class="card-text">Apply for your Egypt visa online. Get your visa in 48 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Egypt', 'image' => 'https://images.unsplash.com/photo-1568322445389-f64ac2515020?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZWd5cHR8ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1553412417-1e2dd39c4369?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODN8fFNjaGVuZ2VufGVufDB8fDB8fHww" class="card-img-top" alt="Schengen">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Schengen</h5>
                                            <p class="card-text">Apply for your Schengen visa online. Get your visa in 72 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Schengen', 'image' => 'https://images.unsplash.com/photo-1587742812943-f149a4133a77?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2NoZW5nZW58ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://plus.unsplash.com/premium_photo-1681803531285-75db948035d3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8VVNBfGVufDB8fDB8fHww" class="card-img-top" alt="USA">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">USA</h5>
                                            <p class="card-text">Apply for your USA visa online. Get your visa in 24 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'USA', 'image' => 'https://images.unsplash.com/photo-1508672019048-805c876b67e2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dXNhfGVufDB8fDB8fHww']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1559511260-66a654ae982a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dmFuY291dmVyfGVufDB8fDB8fHww" class="card-img-top" alt="Canada">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Canada</h5>
                                            <p class="card-text">Apply for your Canada visa online. Get your visa in 48 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Canada', 'image' => 'https://images.unsplash.com/photo-1503614472-8c93d56e92ce?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y2FuYWRhfGVufDB8fDB8fHww']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1569865867048-34cfce8d58fe?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8VUt8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="UK">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">UK</h5>
                                            <p class="card-text">Apply for your UK visa online. Get your visa in 72 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'UK', 'image' => 'https://images.unsplash.com/photo-1569865867048-34cfce8d58fe?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8VUt8ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1624138784614-87fd1b6528f8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YXVzdHJhbGlhfGVufDB8fDB8fHww" class="card-img-top" alt="Australia">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Australia</h5>
                                            <p class="card-text">Apply for your Australia visa online. Get your visa in 24 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Australia', 'image' => 'https://images.unsplash.com/photo-1508672019048-805c876b67e2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dXNhfGVufDB8fDB8fHww']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://plus.unsplash.com/premium_photo-1661962302792-4b05d3e08513?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8TmV3JTIwWmVhbGFuZHxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="New Zealand">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">New Zealand</h5>
                                            <p class="card-text">Apply for your New Zealand visa online. Get your visa in 48 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'New Zealand', 'image' => 'https://plus.unsplash.com/premium_photo-1661962302792-4b05d3e08513?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8TmV3JTIwWmVhbGFuZHxlbnwwfHwwfHx8MA%3D%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1542051841857-5f90071e7989?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8SmFwYW58ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Japan">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Japan</h5>
                                            <p class="card-text">Apply for your Japan visa online. Get your visa in 72 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Japan', 'image' => 'https://images.unsplash.com/photo-1524413840807-0c3cb6fa808d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8amFwYW58ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://plus.unsplash.com/premium_photo-1661948404806-391a240d6d40?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fFNvdXRoJTIwS29yZWF8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="South Korea">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">South Korea</h5>
                                            <p class="card-text">Apply for your South Korea visa online. Get your visa in 24 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'South Korea', 'image' => 'https://images.unsplash.com/photo-1538485394074-f9f4d8434b06?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8U291dGglMjBLb3JlYXxlbnwwfHwwfHx8MA%3D%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1508804185872-d7badad00f7d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fENoaW5hfGVufDB8fDB8fHww" class="card-img-top" alt="China">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">China</h5>
                                            <p class="card-text">Apply for your China visa online. Get your visa in 48 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'China', 'image' => 'https://images.unsplash.com/photo-1547981609-4b6bfe67ca0b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y2hpbmF8ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card mb-4 shadow-sm">
                                        <img src="https://images.unsplash.com/photo-1524230507669-5ff97982bb5e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8SU5ESUF8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="India">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">India</h5>
                                            <p class="card-text">Apply for your India visa online. Get your visa in 72 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'India', 'image' => 'https://images.unsplash.com/photo-1524230507669-5ff97982bb5e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8SU5ESUF8ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card mb-4 shadow-sm">
                                        <img src="https://images.unsplash.com/photo-1483729558449-99ef09a8c325?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8QnJhemlsfGVufDB8fDB8fHww" class="card-img-top" alt="Brazil">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Brazil</h5>
                                            <p class="card-text">Apply for your Brazil visa online. Get your visa in 24 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Brazil', 'image' => 'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8QnJhemlsfGVufDB8fDB8fHww']) }}" class="btn btn-primary">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1589909202802-8f4aadce1849?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8QXJnZW50aW5hfGVufDB8fDB8fHww" class="card-img-top" alt="Argentina">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Argentina</h5>
                                            <p class="card-text">Apply for your Argentina visa online. Get your visa in 48 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Argentina', 'image' => 'https://images.unsplash.com/photo-1589909202802-8f4aadce1849?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8QXJnZW50aW5hfGVufDB8fDB8fHww']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1542835435-4fa357baa00b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8TWV4aWNvfGVufDB8fDB8fHww" class="card-img-top" alt="Mexico">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Mexico</h5>
                                            <p class="card-text">Apply for your Mexico visa online. Get your visa in 72 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Mexico', 'image' => 'https://images.unsplash.com/photo-1542835435-4fa357baa00b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8TWV4aWNvfGVufDB8fDB8fHww']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1534943441045-1009d7cb0bb9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Q29sb21iaWF8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Colombia">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Colombia</h5>
                                            <p class="card-text">Apply for your Colombia visa online. Get your visa in 24 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Colombia', 'image' => 'https://images.unsplash.com/photo-1534943441045-1009d7cb0bb9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Q29sb21iaWF8ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1632913582790-d0ec5882095a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8UGVydXxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="Peru">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Peru</h5>
                                            <p class="card-text">Apply for your Peru visa online. Get your visa in 48 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Peru', 'image' => 'https://images.unsplash.com/photo-1632913582790-d0ec5882095a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8UGVydXxlbnwwfHwwfHx8MA%3D%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1490782300182-697b80ad4293?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Q2hpbGV8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Chile">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Chile</h5>
                                            <p class="card-text">Apply for your Chile visa online. Get your visa in 72 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Chile', 'image' => 'https://images.unsplash.com/photo-1490782300182-697b80ad4293?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Q2hpbGV8ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1580060839134-75a5edca2e99?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y2FwZSUyMHRvd258ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="South Africa">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">South Africa</h5>
                                            <p class="card-text">Apply for your South Africa visa online. Get your visa in 24 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'South Africa', 'image' => 'https://images.unsplash.com/photo-1580060839134-75a5edca2e99?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y2FwZSUyMHRvd258ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://plus.unsplash.com/premium_photo-1673415819362-c2ca640bfafe?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8TW9yb2Njb3xlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="Morocco">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Morocco</h5>
                                            <p class="card-text">Apply for your Morocco visa online. Get your visa in 48 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Morocco', 'image' => 'https://plus.unsplash.com/premium_photo-1673415819362-c2ca640bfafe?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8TW9yb2Njb3xlbnwwfHwwfHx8MA%3D%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1519659528534-7fd733a832a0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8S2VueWF8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Kenya">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Kenya</h5>
                                            <p class="card-text">Apply for your Kenya visa online. Get your visa in 72 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Kenya', 'image' => 'https://images.unsplash.com/photo-1519659528534-7fd733a832a0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8S2VueWF8ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1575999502951-4ab25b5ca889?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8VGFuemFuaWF8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Tanzania">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Tanzania</h5>
                                            <p class="card-text">Apply for your Tanzania visa online. Get your visa in 24 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Tanzania', 'image' => 'https://images.unsplash.com/photo-1575999502951-4ab25b5ca889?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8VGFuemFuaWF8ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1709403071665-47bbe085ec66?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fE5pZ2VyaWF8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Nigeria">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Nigeria</h5>
                                            <p class="card-text">Apply for your Nigeria visa online. Get your visa in 48 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Nigeria', 'image' => 'https://images.unsplash.com/photo-1709403071665-47bbe085ec66?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fE5pZ2VyaWF8ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card mb-4 shadow-sm h-100">
                                        <img src="https://images.unsplash.com/photo-1589104602532-9cee07f8f62c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8R2hhbmF8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Ghana">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Ghana</h5>
                                            <p class="card-text">Apply for your Ghana visa online. Get your visa in 72 hours.</p>
                                            <a href="{{ route('visa.show', ['country' => 'Ghana', 'image' => 'https://images.unsplash.com/photo-1589104602532-9cee07f8f62c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8R2hhbmF8ZW58MHx8MHx8fDA%3D']) }}" class="btn btn-primary btn-sm mt-auto">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>
    </div>
</div>
@endsection