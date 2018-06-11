<div class="tse-content">
    <div class="map-results-detail-header">
        <h3>{{$location->name}}</h3>
        <div class="map-results-detail-address">
            {{$location->address}}
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
                    <a href="{{url('location/'.$location->place_id)}}">View Details</a>
                </li>
            </ul>
            <!-- /.actions-list -->
        </div>
        <!-- /.actions -->
    </div>
    <!-- .map-results-detail-header -->
    <h4>Photo Gallery</h4>
    <div class="map-results-detail-gallery">
        @if($location->images->count() > 0)
        <!--  -->
        @foreach($location->images as $image)
        <img src="{{$image->url}}" height="300" alt="">
        <!--  -->
        @endforeach
        <!--  -->
        @else
        <img src="assets/img/tmp/gallery-small-3.jpg" alt=""> @endif
    </div>
    <!-- /.map-results-detail-gallery -->
    <h4>Description</h4>
    <p>
        <strong>
            {{$location->description}}
        </strong>
    </p>
</div>