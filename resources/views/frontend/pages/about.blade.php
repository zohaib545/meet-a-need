@extends('frontend.common.innerpage_master')

<!-- page title -->
@section('title', 'About')
<!-- page title -->

@section('page_styles')
<style>
    #about_page p{
        font-size: 18px;
    }
    #about_page h3{
        font-size: 30px;
    }
    #about_page h4{
        font-size: 26px;
    }
    #about_page .bordered-col{
        border: 2px solid #22b88b;
        padding: 18px;
        margin-bottom: 50px;
    }
</style>
@stop()

<!-- Page Content -->
@section('page_content')
<div class="main-wrapper" id="about_page">
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
                    <span class="breadcrumb-item active">About</span>
                </nav>
                <div class="row">
                    <div class="col-12 bordered-col">
                        <h3>About Us</h3>
                        <img src="{{asset('images/about-banner.jpg')}}" alt="" class="img img-responsive img-fluid" width="100%">
                        <hr>
                        <h4>Introduction</h4>
                        <p>
                            From the very start it has been a real problem that user cannot acquire data on a single site, they have to switch sites,
                            search and compare their results. This act makes them anxious and a bit furious. By this project
                            we are empowering customers by the amount of liberation and resources they can access through
                            this website. Consumer’s effort is much reduced as there will be a no- visit in person and a
                            very short time investment is needed. This is an open-source website so anyone can feel free
                            to come and acquire what he need. Centralized database will provide updated and valid information
                            to the users. User’s queries will be answered and they are allowed to give reviews and feedback.
                            Similarly the administrator will keenly observe and keep the check and balance of this website.
                            This system is designed to minimize the time investment and to facilitate the users by fulfilling
                            their needs.
                        </p>
                        <h4>Purpose</h4>
                        <p>
                            Web based advertising sites are appealing for several reasons which include People are getting more used to work with computers
                            to do all sorts of things, namely sensitive operations such as shopping and home banking and
                            they allow people to fetch information anywhere anytime, saves their precious time and get reviews
                            about that particular thing. The main purpose of this system is to provide them comfort as well
                            as 24 hours service without any difficulty.
                        </p>
                        <h4>Existing Solutions</h4>
                        <p>
                            Out of 1.9 billion (estimated) internet users all over the world, about 60 million (estimated) users belong to Pakistan.
                            In this era of busy life, there is no such appropriate website where different Convenience Hotels,
                            Restaurants can register themselves on a single platform and provide facility to user to get
                            information. Moreover, busy users are forced to visit required need venue at the cost of their
                            precious time. In this regard, they are required to spend time in finding their desired needed
                            Hotels, Restaurants, Universities and Hospitals, then waiting in queues at counters to get informational
                            details and back. There is utmost need of a system which can not only facilitate the owners of
                            Hotels, Restaurants, Universities and Hospitals to attract customer but also make trip easier
                            for customers. This fact increases the need of such web application where different Hotels &Restaurants
                            and Hospitals place detailed information and customer can easily get that. Also in other countries
                            there are so many web applications like Yelp.com available where customers can get needed information
                            at single platform only on a one tap away. But in Pakistan there is no such appropriate web application
                            where different Hotels, Restaurants, Universities and Hospitals can register themselves and provide
                            facility to user to get detailed required information.

                        </p>
                        <h4>Proposed Solution</h4>
                        <p>
                            “Meet A Need” is a website where consumers are allowed to get Health, Universities, Hotel and Restaurant services that are
                            provided at one single platform. Health sector would provide complete information about nearby
                            hospitals, whereas Hotel and Restaurant sectors should highlight the hygienic, aseptic and best
                            dines nearby as well as the optimum solution for staying or settling down for a day or two. University
                            sector would provide complete information about nearby Universities. As a sitemap this will create
                            awareness of what’s best and what’s where. Today’s consumers are empowered by the amount of liberation
                            and resources they can access through web as everybody wants to meet his need at door. We are
                            developing a web based application where user’s needs are met at a single platform by putting
                            fewer efforts. There are Many websites that provide these services but not at a single platform.
                            So we are proving a tab and put it up front and center that would cover all the aspect of Health,
                            Hotel, Universities and Restaurants. The layout will be interactive and user friendly. Consumers
                            would be satisfied by this as they are saving their precious time. Users don’t have to spend
                            more of their time in getting their need fulfilled. Giving them variety of options to compare
                            and choose what is best for them. Providing them comfort as well as 24 hours services. Our project
                            is important because everybody will be able to achieve information in an easy way Safe, informational,
                            professional and reasonable services for customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.main-inner -->
    </div>
    <!-- /.main -->
</div>
@stop()
<!-- Page Content -->