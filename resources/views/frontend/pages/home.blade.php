@extends('frontend.common.mappage_master')

<!-- page title -->
@section('title', 'Home')
<!-- page title -->

<!-- Page Content -->
@section('page_content')
<div class="map-wrapper">
    <div class="map">
        <div class="map-inner">
            <div class="map-results">
                <div class="map-results-inner">
                    <div class="map-results-list tse-scrollable">
                        <div class="tse-content">
                            <div class="map-results-header">
                                <h3>Popular Places</h3>
                                <p>
                                    Have a look at the most popular places platform.
                                </p>
                            </div>
                            <!-- /.map-results-header -->
                            <div class="map-results-content clickable">
                                @foreach($popularLocations as $index => $location)
                                <div class="listing-row-medium" data-location="{{$location->id}}">
                                    <div class="listing-row-medium-inner">
                                        <a href="listings-detail.html" class="listing-row-medium-image" style="background-image: url({{$location->images->count() == 0? 'assets/img/tmp/listing-15.jpg' : $location->images[0]->url}});">
                                        </a>
                                        <div class="listing-row-medium-content">
                                            <br>
                                            <h4 class="listing-row-medium-title">
                                                <a href="listings-detail.html">{{$location->name}}</a>
                                            </h4>
                                            <div class="listing-row-medium-address">
                                                {{$location->address}}
                                            </div>
                                            <!-- /.listing-row-medium-address -->
                                        </div>
                                        <!-- /.listing-row-medium-content -->
                                    </div>
                                    <!-- /.listing-row-medium-inner -->
                                </div>
                                @endforeach
                            </div>
                            <!-- /.map-results-content -->
                            <div class="map-results-header">
                                <h3>Recently Added Places</h3>
                                <p>
                                    Have a look at the most recent places added to our platform.
                                </p>
                            </div>
                            <!-- /.map-results-header -->
                            <div class="map-results-content clickable">
                                @foreach($locations as $index => $location)
                                <div class="listing-row-medium" data-location="{{$location->id}}">
                                    <div class="listing-row-medium-inner">
                                        <a href="listings-detail.html" class="listing-row-medium-image" style="background-image: url({{$location->images->count() == 0? 'assets/img/tmp/listing-15.jpg' : $location->images[0]->url}});">
                                        </a>
                                        <div class="listing-row-medium-content">
                                            <br>
                                            <h4 class="listing-row-medium-title">
                                                <a href="listings-detail.html">{{$location->name}}</a>
                                            </h4>
                                            <div class="listing-row-medium-address">
                                                {{$location->address}}
                                            </div>
                                            <!-- /.listing-row-medium-address -->
                                        </div>
                                        <!-- /.listing-row-medium-content -->
                                    </div>
                                    <!-- /.listing-row-medium-inner -->
                                </div>
                                @endforeach
                            </div>
                            <!-- /.map-results-content -->
                        </div>
                        <!-- /.tse-content -->
                    </div>
                    <!-- /.map-results-list -->
                    <div class="map-results-detail tse-scrollable">
                        <div class="tse-content">
                            <div class="map-results-detail-header">
                                <h3>Cozy Coffe Shop in New York</h3>
                                <div class="map-results-detail-address">
                                    1938 Caldwell Road, Brighton, NY 14623
                                </div>
                                <!-- /.map-results-detail-address -->
                                <div class="actions">
                                    <div class="actions-button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <!-- /.actions-button -->
                                    <ul class="actions-list">
                                        <li>
                                            <a href="#">Report listing</a>
                                        </li>
                                        <li>
                                            <a href="#">View Details</a>
                                        </li>
                                    </ul>
                                    <!-- /.actions-list -->
                                </div>
                                <!-- /.actions -->
                            </div>
                            <!-- .map-results-detail-header -->
                            <h4>Photo Gallery</h4>
                            <div class="map-results-detail-gallery">
                                <img src="assets/img/tmp/gallery-small-3.jpg" alt="">
                                <img src="assets/img/tmp/gallery-small-1.jpg" alt="">
                                <img src="assets/img/tmp/gallery-small-2.jpg" alt="">
                            </div>
                            <!-- /.map-results-detail-gallery -->
                            <h4>Description</h4>
                            <p>
                                <strong>Vivamus vel erat tincidunt, pretium nulla dictum, commodo purus. Vestibulum a condimentum
                                    nunc. In turpis nibh</strong>
                            </p>
                            <p>
                                Facilisis non tortor sit amet, pulvinar bibendum dolor. Integer id sagittis ligula. Nulla facilisi. Morbi suscipit quis libero
                                sed semper. Donec ut lacinia velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed fringilla bibendum tincidunt. Suspendisse finibus consectetur arcu in auctor.
                            </p>
                        </div>
                        <!-- /.tse-content -->
                    </div>
                    <!-- /.map-results-detail -->
                    <div class="map-results-toggle">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <!-- /.map-results-toggle -->
                </div>
                <!-- /.map-results-inner -->
            </div>
            <!-- /.map-results -->
            <div class="map-object">
                <div id="map-object"></div>
                <div class="map-filter-wrapper">
                    <div class="container-fluid">
                        <div class="map-filter">
                            <form action="" method="GET">
                                <div class="form-group">
                                    <input type="text" name="keyword" class="form-control" placeholder="Location">
                                </div>
                                <div class="form-group">
                                    <select name="type" class="form-control">
                                        <option value="">All</option>
                                        <option value="university">University</option>
                                        <option value="healthcare">Hospital</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="restaurant">Restaurant</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.map-filter -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.map-filter-wrapper -->
            </div>
            <!-- /#map-object -->
        </div>
        <!-- /.map-inner -->
    </div>
    <!-- /.map -->
</div>
<!-- /.map-wrapper -->
@stop()
<!-- Page Content -->
@section('page_scripts')
<script>
    let locationString = "{{$allLocations}}";
    locationString = locationString.replace(/&quot;/g, '\"');
    let locations = JSON.parse(locationString);
    console.log(locations);
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC36TsKE1EwXWhh1exmqnRz4ybKVlQ45a0&libraries=places"></script>
<script src="{{asset('assets/js/google-map-infobox.min.js')}}"></script>
<script src="{{asset('js/home.js')}}"></script>
<!--  -->
@stop()