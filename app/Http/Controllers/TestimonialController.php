<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = [
            [
                'name' => 'Ahmed K.',
                'location' => 'UAE to Canada',
                'quote' => 'From the very first consultation, I knew I was in good hands. The team was clear about the process, the requirements, and what to expect. They handled everything with professionalism and kept me informed every step of the way. I received my visa faster than I anticipated, and I couldn’t be more grateful!',
                'image' => 'img/company/review-author-5.jpg'
            ],
            [
                'name' => 'Nina D.',
                'location' => 'India to Australia',
                'quote' => 'After two failed attempts with other agencies, I was hesitant to try again. But Rapid Visa was different. They listened carefully, reviewed my case thoroughly, and built a strategy that worked. Thanks to them, I’ve finally started a new chapter in my life abroad.',
                'image' => 'img/company/review-author-6.jpg'
            ],
            [
                'name' => 'Michael T.',
                'location' => 'South Africa to UK',
                'quote' => 'It wasn’t just about paperwork for them—they actually cared about my journey. The team responded to every question promptly and explained everything clearly. They even supported me after I arrived in my new country. That level of service is rare.',
                'image' => 'img/company/review-author-7.jpg'
            ],
            [
                'name' => 'Leila M.',
                'location' => 'Morocco to Germany',
                'quote' => 'Their knowledge of immigration policies is top-notch. They made a complicated process feel easy and stress-free. Everything was handled professionally, and I felt supported the entire time. Thank you for helping me achieve my dream.',
                'image' => 'img/company/review-author-1.jpg'
            ],
            [
                'name' => 'John Doe',
                'location' => 'USA to UK',
                'quote' => 'A fantastic experience from start to finish. The team is knowledgeable, responsive, and genuinely cares about your success. I highly recommend their services to anyone navigating the complexities of immigration.',
                'image' => 'img/company/review-author-2.jpg'
            ],
            [
                'name' => 'Jane Smith',
                'location' => 'Nigeria to USA',
                'quote' => 'I was amazed at how smoothly the entire process went. The team\'s expertise and attention to detail were evident in every interaction. I\'m so grateful for their help in making my dream a reality.',
                'image' => 'img/company/review-author-3.jpg'
            ],
            [
                'name' => 'David Chen',
                'location' => 'China to Canada',
                'quote' => 'The best immigration service I have ever used. They are professional, efficient, and always available to answer any questions. I would recommend them to anyone without hesitation.',
                'image' => 'img/company/review-author-4.jpg'
            ],
            [
                'name' => 'Maria Garcia',
                'location' => 'Mexico to Spain',
                'quote' => 'I am so happy I chose this company for my visa application. They made everything so easy and stress-free. I will definitely be using their services again in the future.',
                'image' => 'img/company/review-author-5.jpg'
            ],
            [
                'name' => 'Mohammed Ali',
                'location' => 'Egypt to Germany',
                'quote' => 'The team was incredibly helpful and supportive throughout the entire process. They went above and beyond to ensure my application was successful. I can\'t thank them enough.',
                'image' => 'img/company/review-author-6.jpg'
            ],
            [
                'name' => 'Fatima Khan',
                'location' => 'Pakistan to Australia',
                'quote' => 'I was very impressed with the level of professionalism and expertise of the team. They were always available to answer my questions and provide guidance. I would highly recommend them.',
                'image' => 'img/company/review-author-7.jpg'
            ],
            [
                'name' => 'Chinedu Okoro',
                'location' => 'Nigeria to Canada',
                'quote' => 'A truly exceptional service. The team was knowledgeable, efficient, and always willing to go the extra mile. I am so grateful for their help in securing my visa.',
                'image' => 'img/company/review-author-1.jpg'
            ],
            [
                'name' => 'Sofia Rossi',
                'location' => 'Italy to USA',
                'quote' => 'I couldn\'t have asked for a better experience. The team was professional, friendly, and always available to help. I would highly recommend their services to anyone.',
                'image' => 'img/company/review-author-2.jpg'
            ],
            [
                'name' => 'Kenji Tanaka',
                'location' => 'Japan to UK',
                'quote' => 'The team provided me with excellent support and guidance throughout the entire process. They were always available to answer my questions and provide assistance. I am very grateful for their help.',
                'image' => 'img/company/review-author-3.jpg'
            ],
            [
                'name' => 'Isabella Costa',
                'location' => 'Brazil to Portugal',
                'quote' => 'I was very impressed with the professionalism and expertise of the team. They made the entire process so easy and stress-free. I would highly recommend them to anyone.',
                'image' => 'img/company/review-author-4.jpg'
            ],
            [
                'name' => 'Liam Murphy',
                'location' => 'Ireland to Australia',
                'quote' => 'A fantastic service from start to finish. The team was knowledgeable, responsive, and always willing to help. I would highly recommend them to anyone looking for immigration assistance.',
                'image' => 'img/company/review-author-5.jpg'
            ],
        ];

        return view('testimonials', compact('testimonials'));
    }
}