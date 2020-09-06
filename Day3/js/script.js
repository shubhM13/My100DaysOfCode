// IIFE - Immediately Invoked Function Expression - Ensures all the variabes and functionality are protected
// imroves code performace.

(function() {
    function loadChart() {
        // fetch : provides an interface for fetching resources (across n/w), similar to 'xhr' and 'jquery.ajax()' except that unlike
        //  ajax() it won't reject on HTTP 404/500, instead resolves normally with Ok status set to 'false'
        fetch('http://pixelprowess.com/i/lake.php', {
            method:'GET'
        }).then(response => response.json()).then(
            response => {
                console.log(response);
            }
        ).catch( errror => console.error(error));
    }

    loadChart();
}) ();