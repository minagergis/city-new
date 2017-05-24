<?php
$post_type = \Request::get('post_type');
$extra_maps = isset($post) ? json_decode($post->extra, true) : [];
//dd($extra['prop_lat']);
?>

<h2>Maps</h2>
<div id="myMap" style="height: 350px;width: 680px;"></div>
<br/>
{{--<div>--}}

{{--<br/>--}}
{{--<input type="text" id="latitude" value="29.97754921471998" placeholder="Latitude"/>--}}
{{--<input type="text" id="longitude" value="31.285543188718975" placeholder="Longitude"/>--}}


{{--</div>--}}

<div class="form-group {{ $errors->has('prop_lat') ? ' has-error block' : '' }} branch_lat">
    <div class="col-md-12">
        <input id="latitude" type="text" name="extra[prop_lat]" class="form-control"
               maxlength="255"
               placeholder="Enter Properties lat here"
               value="{{ isset($extra_maps['prop_lat']) ? $extra_maps['prop_lat']: '30.0444' }}">
        @if ($errors->has('prop_lat'))
            <span class="help-block">{{ $errors->first('prop_lat') }}</span>
        @endif
    </div>
</div>

<div class="form-group {{ $errors->has('prob_long') ? ' has-error block' : '' }}    branch_long">
    <div class="col-md-12">
        <input type="text" id="longitude" name="extra[prob_long]" class="form-control"
               maxlength="255"
               placeholder="Enter Properties long here"
               value="{{ isset($extra_maps['prob_long']) ? $extra_maps['prob_long']: '31.2357' }}">
        @if ($errors->has('branch_long'))
            <span class="help-block">{{ $errors->first('prob_long') }}</span>
        @endif
    </div>
</div>




@section('scripts')


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdeAq-qOkZyfG3HHLBnyWnFw_tf667QNw&v=3.exp&sensor=false"></script>
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
    <script type="text/javascript">
        var lat = document.getElementById('latitude').value;
        var long = document.getElementById('longitude').value;
        console.log(lat);
        console.log(long);
        var map;
        var marker;
        var myLatlng = new google.maps.LatLng(lat, long);
        var geocoder = new google.maps.Geocoder();
        var infowindow = new google.maps.InfoWindow();
        function initialize() {
            var mapOptions = {
                zoom: 18,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

            marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                draggable: true
            });

            geocoder.geocode({'latLng': myLatlng}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        $('#address').val(results[0].formatted_address);
                        $('#latitude').val(marker.getPosition().lat());
                        $('#longitude').val(marker.getPosition().lng());
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });


            google.maps.event.addListener(marker, 'dragend', function () {

                geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#address').val(results[0].formatted_address);
                            $('#latitude').val(marker.getPosition().lat());
                            $('#longitude').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


    <script src="{{ asset('public/assets/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/global/plugins/ckeditor/ckeditor.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"
            type="text/javascript"></script>
@stop