<div class="infobox">
    <div class="infobox-close">
        <i class="fa fa-close"></i>
    </div>
    <h3 class="infobox-title">
        <a href="{{url('location/'.$place_id)}}">{{$name}}</a>
    </h3>
    <h4 class="infobox-address">{{$address}}</h4>
    <div class="infobox-content">
        <div class="infobox-image" style="background-image: url( {{$photo == null? '': $photo}} );"></div>
        <div class="infobox-body">
            <div class="infobox-body-inner">
                @if(isset($location))
                <div class="infobox-category tag">{{$location->type}}</div>
                @endif
                {{-- <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th><i class="fa fa-phone"></i> Phone</th>
                            <td>{{$phone == null? 'N/A': $phone}}</td>
                        </tr>
                        <tr>
                            <th><i class="fa fa-star"></i> Rating</th>
                            <td>{{$rating == null? 'N/A': $rating}}</td>
                        </tr>
                        <tr>
                            <th><i class="fa laptop"></i> Website</th>
                            @if($website == null)
                            <td>N/A</td>
                            @else
                            <td><a href="{{$website}}" target="_blank">{{$website}}</a></td>
                            @endif
                        </tr>
                    </tbody>
                </table> --}}
                <p>
                    {{$location->description}}
                </p>
            </div>
            <div class="infobox-more">
                <a href="{{url('location/'.$place_id)}}">Read More
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>