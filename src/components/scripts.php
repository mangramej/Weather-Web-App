<!-- Scripts for autocomplete -->
<script>
let cities = [];
$.getJSON("../public/data/ph.json", function(json) {
    $.map(json, function(data) {
        cities.push(data.city);
    });
});

$("#search").autocomplete({
    source: cities,
    minLength: 1
});
</script>

<!-- Scripts for Philippine Standard Time -->
<script type="text/javascript" id="gwt-pst">
    (function(d, eId) {
        var js, gjs = d.getElementById(eId);
        js = d.createElement('script'); js.id = 'gwt-pst-jsdk';
        js.src = "//gwhs.i.gov.ph/pst/gwtpst.js?"+new Date().getTime();
        gjs.parentNode.insertBefore(js, gjs);
    }(document, 'gwt-pst'));
</script>