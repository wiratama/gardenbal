/*$('li.dropdown').hover(function(){
            $(this).addClass('open');
        },
        function(){
            $(this).removeClass('open');
    });
*/
// lightbox
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        },
            onNavigate: function(direction, itemIndex) {
                            if (window.console) {
                                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                            }
            }
                    });
                });

                //Programatically call
                $('#open-image').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });
                $('#open-youtube').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });

        // navigateTo
                $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {

              var a = this.modal_content.find('.modal-footer a');
              if(a.length > 0) {

                a.click(function(e) {

                  e.preventDefault();
                  this.navigateTo(2);

                }.bind(this));

              }

                        }
                    });
                });


            });

// select picker 
/*$(document).ready(function () {
  var mySelect = $('#first-disabled2');
    $('#special').on('click', function () {
    mySelect.find('option:selected').attr('disabled', 'disabled');
    mySelect.selectpicker('refresh');
    });

  var $basic2 = $('#basic2').selectpicker({
    liveSearch: true,
    maxOptions: 1
    });
});*/

$('#monitor').html($(window).width());

$(window).resize(function() {
   var viewportWidth = $(window).width();
   $('#monitor').html(viewportWidth);
});

/*function init_map() {
          var var_location = new google.maps.LatLng(-8.649903, 115.213264);
 
              var var_mapoptions = {
                center: var_location,
                zoom: 15
            };
 
        var var_marker = new google.maps.Marker({
          position: var_location,
          map: var_map,
          title:"Denpasar"});
 
            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);
 
        var_marker.setMap(var_map); 
 
            }

          google.maps.event.addDomListener(window, 'load', init_map);*/