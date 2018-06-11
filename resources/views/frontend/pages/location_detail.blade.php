@extends('frontend.common.innerpage_master')

<!-- page title -->
@section('title', 'Location Detail')
<!-- page title -->

<!-- Page Content -->
@section('page_content')
<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">
            <div class="listing-hero">
                <div class="listing-hero-inner">
                    <div class="container">
                        @if(count($photos) == 0)
                        <div class="listing-hero-image" style="background-image: url('{{asset('assets/img/tmp/listing-9.jpg')}}')"></div>
                        @else
                        <div class="listing-hero-image" style="background-image: url('data:image/jpg;base64,{{$photos[0]}}')"></div>
                        @endif
                        <!-- /.listing-hero-image -->
                        <h1>{{$place->name}}
                            <!--  -->
                            @if($location != null)
                            <i class="fa fa-check"></i>
                            <!--  -->
                            @endif
                        </h1>
                        <address>
                            {{$place->formatted_address}}
                        </address>
                        <ul class="social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.listing-hero-inner -->
            </div>
            <!-- /.listing-hero -->
            <div class="listing-toolbar-wrapper">
                <div class="listing-toolbar" data-spy="affix" data-offset-top="203">
                    <div class="container">
                        <ul class="nav">
                        </ul>
                        <!-- /.nav -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.listing-toolbar -->
            </div>
            <!-- /.listing-toolbar-wrapper -->
            <div class="container">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
                    <a class="breadcrumb-item" href="{{('location')}}">Location</a>
                    <span class="breadcrumb-item active">Location Detail</span>
                </nav>
                <div class="row">
                    <div class="col-12">
                        <div class="listing-detail-section" id="listing-detail-section-description" data-title="Description">
                            <div class="gallery">
                                @if(count($photos) == 0)
                                <div class="gallery-item" style="background-image: url({{asset('assets/img/tmp/listing-22.jpg')}})"></div>
                                @else
                                <!--  -->
                                @foreach($photos as $photo)
                                <div class="gallery-item" style="background-image: url('data:image/jpg;base64,{{$photo}}')"></div>
                                @endforeach
                                <!--  -->
                                @endif
                            </div>
                            <!-- /.gallery -->
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="overview">
                                        <h2>Listing Attributes</h2>
                                        <ul>
                                            <li>
                                                <strong>Phone</strong>
                                                @if($location != null)
                                                <span>{{$location->detail->phone == null? 'N/A': $location->detail->phone}}</span>
                                                @else
                                                <span>{{!isset($place->formatted_phone_number)? 'N/A': $place->formatted_phone_number}}</span>
                                                @endif
                                            </li>
                                            <li>
                                                <strong>Rating</strong>
                                                <span>{{!isset($place->rating)? 'N/A': $place->rating}}</span>
                                            </li>
                                            <li>
                                                <strong>Website</strong>
                                                @if($location != null && $location->detail->website != null)
                                                <span>
                                                    <a href="{{$location->detail->website}}" target="_blank">{{$location->detail->website}}</a>
                                                </span>
                                                @elseif($place->website != null)
                                                <span>
                                                    <a href="{{$place->website}}" target="_blank">{{$place->website}}</a>
                                                </span>
                                                @else
                                                <span>N/A</span>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.overview -->
                                </div>
                                <!-- /.col-* -->
                                <div class="col-lg-7">
                                    <h2>Description</h2>
                                    @if($location == null)
                                    <p>Description not available.</p>
                                    @else
                                    <p>{{$location->description}}</p>
                                    @endif
                                </div>
                                <!-- /.col-* -->
                            </div>
                            <!-- /.row -->
                        </div>
                        @if(isset($place->opening_hours))
                        <!-- /.listing-detail-section -->
                        <div class="listing-detail-section" id="listing-detail-section-opening-hours" data-title="Opening Hours">
                            <h2>Opening Hours</h2>
                            <table class="table table-bordered opening-hours">
                                <tbody>
                                    @foreach($place->opening_hours->weekday_text as $hour)
                                    <tr>
                                        <td>{{$hour}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif

                        <!--  -->
                        @if($location != null)
                        <!--  -->
                        @if($location->type == 'university')
                        <!--  -->
                        @if($location->detail->admission_details->count() > 0)
                        <div class="listing-detail-section" id="listing-detail-section-custom-detail" data-title="Admission Details">
                            <h2>Admission Details</h2>
                            <table class="table table-bordered opening-hours">
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Level</th>
                                        <th>Last Date to Apply</th>
                                        <th>Eligibility Criteria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($location->detail->admission_details as $admission_detail)
                                    <tr>
                                        <td>{{$admission_detail->course_name}}</td>
                                        <td>{{$admission_detail->course_level}}</td>
                                        <td>{{$admission_detail->date}}</td>
                                        <td>{{$admission_detail->eligibility}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                        <!--  -->
                        @elseif($location->type == 'healthcare')
                        <!--  -->
                        @if($location->detail->facility_details->count() > 0)
                        <div class="listing-detail-section" id="listing-detail-section-custom-detail" data-title="Department Detail">
                            <h2>Department Detail</h2>
                            <table class="table table-bordered opening-hours">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Available Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($location->detail->facility_details as $facility_detail)
                                    <tr>
                                        <td>{{$facility_detail->name}}</td>
                                        <td>{{$facility_detail->phone}}</td>
                                        <td>{{$facility_detail->available_time}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                        <!--  -->
                        @elseif($location->type == 'hotel')
                        <!--  -->
                        @if($location->detail->hotel_details->count() > 0)
                        <div class="listing-detail-section" id="listing-detail-section-custom-detail" data-title="Rooms Details">
                            <h2>Rooms Detail</h2>
                            <table class="table table-bordered opening-hours">
                                <thead>
                                    <tr>
                                        <th>Room Type</th>
                                        <th>Options</th>
                                        <th>Price per Night</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($location->detail->hotel_details as $detail)
                                    <tr>
                                        <td>{{$detail->room_type}}</td>
                                        <td>{{$detail->options}}</td>
                                        <td>{{$detail->price_per_night}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                        <!--  -->
                        @elseif($location->type == 'restaurant')
                        <!--  -->
                        @if($location->detail->restaurant_details->count() > 0)
                        <div class="listing-detail-section" id="listing-detail-section-custom-detail" data-title="Cuisine">
                            <h2>Cuisine</h2>
                            <table class="table table-bordered opening-hours">
                                <tbody>
                                    @foreach($location->detail->restaurant_details as $detail)
                                    <tr>
                                        <td>{{$detail->cuisine}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                        <!--  -->
                        @endif
                        <!--  -->
                        @endif

                        <!-- /.listing-detail-section -->
                        <div class="listing-detail-section" id="listing-detail-section-map-position" data-title="Map Position">
                            <h2>Map Position</h2>
                            <iframe class="mb30" style="height:320px;width:100%;border:0;" src="https://www.google.com/maps/embed/v1/place?q={{$place->geometry->location->lat}},{{$place->geometry->location->lng}}&key=AIzaSyC36TsKE1EwXWhh1exmqnRz4ybKVlQ45a0">
                            </iframe>
                        </div>

                        @if(isset($place->reviews))
                        <div class="listing-detail-section mb80" id="listing-detail-section-reviews" data-title="Reviews">
                            <div class="box">
                                <div class="box-inner">
                                    <div class="box-title">
                                        <h2>Recent Reviews</h2>
                                    </div>
                                    <!-- /.box-title -->
                                    <ul class="comments">
                                        @foreach($place->reviews as $review)
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <a href="#" style="background-image: url('{{$review->profile_photo_url}}');"></a>
                                                </div>
                                                <!-- /.comment-author -->
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <div class="comment-meta-author">
                                                            {{$review->author_name}}
                                                        </div>
                                                        <!-- /.comment-meta-author -->
                                                        <div class="comment-meta-date">
                                                            <span>{{$review->relative_time_description}}</span>
                                                        </div>
                                                    </div>
                                                    <!-- /.comment -->
                                                    <div class="comment-body">
                                                        <div class="comment-rating">
                                                            @for($i = 0; $i
                                                            < $review->rating; $i++)
                                                                <i class="fa fa-star"></i>
                                                                @endfor
                                                        </div>
                                                        <!-- /.comment-rating -->
                                                        <p>
                                                            {{$review->text}}
                                                        </p>
                                                    </div>
                                                    <!-- /.comment-body -->
                                                </div>
                                                <!-- /.comment -->
                                            </div>
                                            <!-- /.comment -->
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- /.box-inner -->
                            </div>
                            <!-- /.box-->
                        </div>
                        <!-- /.listing-detail-section -->
                        @endif
                    </div>
                    <!-- /.col-* -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.main-inner -->
    </div>
    <!-- /.main -->
</div>
<!-- /.main-wrapper -->
@stop()
<!-- Page Content -->
@section('page_scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC36TsKE1EwXWhh1exmqnRz4ybKVlQ45a0&libraries=places"></script>
<script>
    var place_id = "{{$place_id}}";
</script>
<script src="{{asset('js/location_detail.js')}}"></script>
<!--  -->
@stop()