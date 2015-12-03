//shrink


// select picker 
$(document).ready(function () {
  var mySelect = $('#first-disabled2');
    $('#special').on('click', function () {
    mySelect.find('option:selected').attr('disabled', 'disabled');
    mySelect.selectpicker('refresh');
    });

  var $basic2 = $('#basic2').selectpicker({
    liveSearch: true,
    maxOptions: 1
    });
});

