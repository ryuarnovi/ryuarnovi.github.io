@extends('layouts.app')

@section('title', 'Home - Layanan Sampah')

@section('content')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
<div class="container max-w-max px-4">
    <!-- Hero Section -->
    <div class="text-center py-12">
        <h1 class="text-4xl font-bold mb-4">ENVIRONMENTAL
            SUSTAINABILITY</h1>
        <p class="text-lg text-gray-600">Environmental sustainability involves making responsible choices that ensure the long-term health of our planet.</p>
    </div>

    <!-- Features Navigation -->
    <nav class="slide-nav-bar flex justify-center border-b border-gray-200 left-0 right-0">
        <a href="#" class="slide-nav flex items-center text-white" data-slide="0">
            <img src="{{asset('images/icon/daun5.png')}}" alt="Logo 1" class="h-6 w-6 mr-2">Environmental
        </a>
        <a href="#" class="slide-nav flex items-center text-white" data-slide="1">
            <img src="{{asset('images/icon/daun5.png')}}" alt="Logo 2" class="h-6 w-6 mr-2">Green
        </a>
        <a href="#" class="slide-nav flex items-center text-white" data-slide="2">
            <img src="{{asset('images/icon/daun5.png')}}" alt="Logo 3" class="h-6 w-6 mr-2">Energy
        </a>
        <a href="#" class="slide-nav flex items-center text-white" data-slide="3">
            <img src="{{asset('images/icon/daun5.png')}}" alt="Logo 4" class="h-6 w-6 mr-2">Recycling
        </a>
    </nav>

    <!-- Slide Image Section -->
    <section class="py-12">
        <div class="relative">
            <div class="slide-container overflow-hidden">
                <div class="slides flex transition-transform duration-1000" style="width: 200%;">
                    <div class="slide w-1/2">
                        <img src="{{asset('images/slideshow/image5.png')}}" alt="Image 1" class="rounded-lg shadow-lg"/>
                        <p class="text-center text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="slide w-1/2">
                        <img src="{{asset('images/slideshow/image6.png')}}" alt="Image 2" class="rounded-lg shadow-lg"/>
                        <p class="text-center text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="slide w-1/2">
                        <img src="{{asset('images/slideshow/image4.png')}}" alt="Image 3" class="rounded-lg shadow-lg"/>
                        <p class="text-center text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="slide w-1/2">
                        <img src="{{asset('images/slideshow/image7.png')}}" alt="Image 4" class="rounded-lg shadow-lg"/>
                        <p class="text-center text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="slide w-1/2">
                        <img src="{{asset('images/slideshow/image3.jpg')}}" alt="Image 5" class="rounded-lg shadow-lg"/>
                        <p class="text-center text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-12">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="space-y-4">
                <h2 class="text-4xl font-bold mb-4 text-right">One tree saves
                    the earth.</h2>
                <p class="text-gray-600 text-right">Plant a tree today, and you plant the seeds of a sustainable future, one tree can inspire a thousand hearts to care for the earth.</p>
            </div>
            <img src="{{asset('images/slideshow/image 8.png')}}" alt="Content section" class="rounded-lg shadow-lg"/>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-12">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <img src="{{asset('images/slideshow/image6.png')}}" alt="About section" class="md:w-1/2 rounded-lg shadow-lg"/>
            <div class="md:w-1/2">
                <h2 class="text-4xl font-bold mb-4">Let's register to become a volunteer.</h2>
                <p class="text-gray-600">Join us in making a difference!
                    Your time and passion can help transform lives and protect our planet. Together, we can create a brighter future.</p>
                <a href="{{ route('donasi.donasi') }}">
                    <button class="bg-green-700 text-white px-6 py-2 rounded-lg hover:bg-green-800 transition-colors duration-200">
                        Register
                    </button>
                </a>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelector('.slides');
        const links = document.querySelectorAll('nav a');
        let currentIndex = 0;
        const slideCount = slides.children.length / 2; // Adjust for two slides per view
        const slideWidth = slides.querySelector('.slide').clientWidth;

        function goToSlide(index) {
            slides.style.transform = `translateX(-${index * slideWidth}px)`;
            currentIndex = index;
        }

        links.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const slideIndex = this.getAttribute('data-slide');
                goToSlide(slideIndex);
            });
        });

        function autoSlide() {
            currentIndex = (currentIndex + 1) % slideCount;
            goToSlide(currentIndex);
        }

        setInterval(autoSlide, 3000); // Change slide every 3 seconds
    });
</script>
@endsection