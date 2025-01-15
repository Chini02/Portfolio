@extends('frontend.layouts.layout')

@section('content')
    <!-- Header-Area-Start -->
		@include('frontend.content.header')
		<!-- Header-Area-End -->

		<!-- Service-Area-Start -->
		@include('frontend.content.service')
		<!-- Service-Area-End -->
        
		<!-- About-Area-Start -->
		@include('frontend.content.about')
		<!-- About-Area-End -->

		<!-- Portfolio-Area-Start -->
		@include('frontend.content.portfolio')
		<!-- Portfolio-Area-End -->

		<!-- Skills-Area-Start -->
		@include('frontend.content.skills')
		<!-- Skills-Area-End -->

		<!-- Experience-Area-Start -->
		@include('frontend.content.experience')
		<!-- Experience-Area-End -->

		<!-- Testimonial-Area-Start -->
		@include('frontend.content.testimonial')
		<!-- Testimonial-Area-End -->

		<!-- Blog-Area-Start -->
		@include('frontend.content.blog')
		<!-- Blog-Area-End -->

		<!-- Contact-Area-Start -->
		@include('frontend.content.contact')
		<!-- Contact-Area-End -->
@endsection