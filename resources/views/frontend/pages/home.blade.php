@extends('frontend.common.mappage_master')

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
                                <h3>Best Spots Around</h3>
                                <p>
                                    Curabitur viverra risus sed tellus eleifend, ut pretium tortor pulvinar. Quisque in neque turpis. Aenean auctor enim vitae.
                                </p>
                                <div class="map-results-count">72 items matching search query</div>
                                <!-- /.map-results-count -->
                            </div>
                            <!-- /.map-results-header -->
                            <div class="map-results-content clickable">
                                <div class="listing-row-medium">
                                    <div class="listing-row-medium-inner">
                                        <a href="listings-detail.html" class="listing-row-medium-image" style="background-image: url(assets/img/tmp/listing-1.jpg);">
                                            <span class="listing-row-medium-featured">Featured</span>
                                            <!-- /.listing-row-medium-featured -->
                                        </a>
                                        <div class="listing-row-medium-content">
                                            <a class="listing-row-medium-category tag" href="listings-detail.html">Luxury Cars</a>
                                            <span class="listing-row-medium-rating">
                                                <span>(32)</span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <h4 class="listing-row-medium-title">
                                                <a href="listings-detail.html">Cozzy Coffee Shop</a>
                                            </h4>
                                            <div class="listing-row-medium-address">
                                                4700 Hart Country Lane Blue Ridge
                                            </div>
                                            <!-- /.listing-row-medium-address -->
                                        </div>
                                        <!-- /.listing-row-medium-content -->
                                    </div>
                                    <!-- /.listing-row-medium-inner -->
                                </div>
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
                            <div class="tags">
                                <div class="tag">Conditioning</div>
                                <!-- /.tag -->
                                <div class="tag">Wi-Fi</div>
                                <!-- /.tag -->
                                <div class="tag">Parking</div>
                                <!-- /.tag -->
                                <div class="tag">Credit Cards</div>
                                <!-- /.tag -->
                                <div class="tag">Cable TV</div>
                                <!-- /.tag -->
                                <div class="tag">Cleaning</div>
                                <!-- /.tag -->
                                <div class="tag">Balcony</div>
                                <!-- /.tag -->
                                <div class="tag">Newspaper</div>
                                <!-- /.tag -->
                            </div>
                            <!-- /.tags -->
                            <h4>Opening Hours</h4>
                            <table class="table table-bordered opening-hours">
                                <tbody>
                                    <tr>
                                        <th class="min-width center">Mon</th>
                                        <td>8:00 am - 8:00 pm</td>
                                    </tr>
                                    <tr>
                                        <th class="min-width center">Tue</th>
                                        <td>9:00 am - 9:00 pm</td>
                                    </tr>
                                    <tr class="open">
                                        <th class="min-width center">Wed</th>
                                        <td>8:00 am - 3:00 pm</td>
                                    </tr>
                                    <tr>
                                        <th class="min-width center">Thu</th>
                                        <td>7:00 am - 9:00 pm</td>
                                    </tr>
                                    <tr>
                                        <th class="min-width center">Fri</th>
                                        <td>10:00am - 5:00pm</td>
                                    </tr>
                                    <tr>
                                        <th class="min-width center">Sat</th>
                                        <td>8:00 am - 11:00 am</td>
                                    </tr>
                                    <tr class="closed">
                                        <th class="min-width center">Sun</th>
                                        <td>closed</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>User Reviews
                                <small>(4.8/13)</small>
                            </h4>
                            <ul class="comments">
                                <li>
                                    <div class="comment">
                                        <div class="comment-author">
                                            <a href="#" style="background-image: url('assets/img/tmp/user-1.jpg');"></a>
                                        </div>
                                        <!-- /.comment-author -->
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <div class="comment-meta-author">
                                                    Derek S. Minter
                                                </div>
                                                <!-- /.comment-meta-author -->
                                                <div class="comment-meta-date">
                                                    <span>8:54 PM 11/23/2016</span>
                                                </div>
                                            </div>
                                            <!-- /.comment -->
                                            <div class="comment-body">
                                                <div class="comment-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <!-- /.comment-rating -->
                                                <p>
                                                    Nullam sollicitudin justo neque, sit amet auctor urna pretium in. Aenean elementum venenatis nisl at tincidunt. Vivamus hendrerit
                                                    porta cursus. Cras elementum tortor ut tincidunt feugiat.
                                                </p>
                                            </div>
                                            <!-- /.comment-body -->
                                        </div>
                                        <!-- /.comment-content -->
                                        <div class="comment comment-answer">
                                            <div class="comment-author">
                                                <a href="#" style="background-image: url('assets/img/tmp/user-2.jpg');"></a>
                                            </div>
                                            <!-- /.comment-author -->
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <div class="comment-meta-author">
                                                        Elizabeth T. Schultheis
                                                    </div>
                                                    <!-- /.comment-meta-author -->
                                                    <div class="comment-meta-date">
                                                        <span>8:54 PM 11/23/2016</span>
                                                    </div>
                                                </div>
                                                <!-- /.comment -->
                                                <div class="comment-body">
                                                    <p>
                                                        Quisque aliquam ante in ullamcorper mattis. In fringilla mollis scelerisque. Morbi quis justo eget erat maximus vulputate
                                                        non nec nulla. Nam eget tincidunt sapien. Nullam aliquam enim a fringilla
                                                        rutrum.
                                                    </p>
                                                </div>
                                                <!-- /.comment-body -->
                                            </div>
                                            <!-- /.comment-content -->
                                        </div>
                                        <!-- /.comment -->
                                    </div>
                                    <!-- /.comment -->
                                </li>
                            </ul>
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
                <div class="map-toolbar">
                    <div class="map-toolbar-group">
                        <div id="map-toolbar-action-zoom-in" class="map-toolbar-group-item">
                            <i class="fa fa-plus"></i>
                        </div>
                        <!-- /.map-toolbar-group-item -->
                        <div id="map-toolbar-action-zoom-out" class="map-toolbar-group-item">
                            <i class="fa fa-minus"></i>
                        </div>
                        <!-- /.map-toolbar-group-item -->
                    </div>
                    <!-- /.map-toolbar-group -->
                    <div class="map-toolbar-group">
                        <div id="map-toolbar-action-current-position" class="map-toolbar-group-item">
                            <i class="fa fa-location-arrow"></i>
                        </div>
                        <!-- /.map-toolbar-group-item -->
                        <div id="map-toolbar-action-fullscreen" class="map-toolbar-group-item">
                            <i class="fa fa-arrows-alt"></i>
                        </div>
                        <!-- /.map-toolbar-group-item -->
                    </div>
                    <!-- /.map-toolbar-group -->
                    <div class="map-toolbar-group">
                        <div id="map-toolbar-action-roadmap" class="map-toolbar-group-item">Roadmap</div>
                        <!-- /.map-toolbar-group-item -->
                        <div id="map-toolbar-action-satellite" class="map-toolbar-group-item">Satellite</div>
                        <!-- /.map-toolbar-group-item -->
                        <div id="map-toolbar-action-terrain" class="map-toolbar-group-item">Terrain</div>
                        <!-- /.map-toolbar-group-item -->
                    </div>
                    <!-- /.map-toolbar-group -->
                </div>
                <!-- /.map-toolbar -->
                <div class="map-filter-wrapper">
                    <div class="container-fluid">
                        <div class="map-filter">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Keyword">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Location">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Category">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Price">
                                </div>
                                <!-- /.form-group -->
                                <button type="submit" class="btn">Filter Listings</button>
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