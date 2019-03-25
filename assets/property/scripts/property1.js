

    $(function () {



        var RequestAddress = document.getElementById("RequestAddress");
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showLocation, showError,
                {
                    enableHighAccuracy: true,
                    timeout: 10000 // 10s
                    //maximumAge : 0
                }
            );
        }

        function showLocation(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            $("input[name=lat]").val(latitude);
            $("input[name=lng]").val(longitude);
            getAddress(latitude, longitude);

                $("#geocomplete").geocomplete({
                    map: ".map_canvas",
                    details: "form ",
                    location: [latitude, longitude]
                    // location: [latLng.lat, latLng.ln]

                });

                $("#geocomplete").bind("geocode:click", function (event, latLng) {
                $("input[name=lat]").val(latLng.lat());
                $("input[name=lng]").val(latLng.lng());
                $("input[name=RequestAddress]").geocomplete("find", latLng.lat() + "," + latLng.lng()).val();
                $(this).geocomplete('marker')
                    .setOptions({position:latLng,map:$(this).geocomplete("map")});
                $("#lat,#lng").show();
            });
        }
        function showError(error) {
            var x = document.getElementById("alert");

            switch (error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = "User denied the request for Geolocation.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "Location information is unavailable.";
                    break;
                case error.TIMEOUT:
                    x.innerHTML = "The request to get user location timed out.";
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = "An unknown error occurred.";
                    break;
            }
            $(x).show();

            $("#geocomplete").geocomplete({
                map: ".map_canvas",
                details: "form ",
                location: [24.713551699,46.675295699]
            });

            $("#geocomplete").bind("geocode:click", function (event, latLng) {
                $("input[name=lat]").val(latLng.lat());
                $("input[name=lng]").val(latLng.lng());
                $("input[name=RequestAddress]").geocomplete("find", latLng.lat() + "," + latLng.lng()).val();
                $(this).geocomplete('marker')
                    .setOptions({position:latLng,map:$(this).geocomplete("map")});
                $("#lat,#lng").show();
            });
        }


        function getAddress(myLatitude, myLongitude) {

            var geocoder = new google.maps.Geocoder();              // create a geocoder object
            var location = new google.maps.LatLng(myLatitude, myLongitude);   // turn coordinates into an object

            geocoder.geocode({'latLng': location}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {            // if geocode success
                    var ad = results[0].formatted_address;
                    $("input[name=RequestAddress]").val(ad);                  // write address to field
                } else {
                    alert("Geocode failure: " + status);                // alert any other error(s)
                    return false;
                }
            });
        }

        $("#reset").click(function () {
            $("#geocomplete").geocomplete("resetMarker");
            $("#reset").hide();
            return false;
        });

    });
 $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        showUpload : false,

        //allowedFileTypes: ['image', 'video', 'flash'],
        
    });

  $("#file-2").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
       
    });
   $("#file-3").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        
    });
    $("#file-4").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        
    });
     $("#file-5").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['mp4'],
        overwriteInitial: false,
        maxFileSize: 100000,
        maxFilesNum: 10,
        allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });

  $('#proptype').change(function(){

            var type = $('#proptype').val();
            if(type =='1' ){
                 $('.house-prop').removeClass('visibility-show');
                    $('.land-prop').addClass('visibility-show');
              

            }else{
                 $('.land-prop').removeClass('visibility-show');

                $('.house-prop').addClass('visibility-show');
                

                 }
});
 $('#post-prop').click(function(){

        var type = $('#proptype').val(); 
         if(type =='1' ){
             $('.land-prop').remove();
             alert("Land property was Removing");
         }else{
                    $('.house-prop').remove();
             alert("House property was Removing");
         }
    });
            $('#bedval').change(function(){
                var bedval = $('#bedval').val();
                $('.removebed').remove();
for (var i = 1; i <= bedval; i++) {
    

               var val = '<div class="row with-forms removebed">'+
                ' <div class="col-md-4">'+
                '<span>Bedroom'+i+'(Length )</span></h5>'+
             '<input class="form-control" name="length'+i+'" type="text" value=""/>'+
             ' </div>'+
             ' <div class="col-md-4">'+
             '<span>(Breadth)</span></h5>'+
             '<input class="form-control" type="text" name="breadth'+i+'" value=""/>'+
             ' </div>'+

             '</div>';

               $("#bedsize").before(val); 
             // $("#bedsize").after('<p>Working</p>')
             }
            });