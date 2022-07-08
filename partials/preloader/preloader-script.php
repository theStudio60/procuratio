<div id="load" class="overlay-loader">
  <div class="load-wrap">
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            var $load = document.getElementById("load");
            var removeLoading = setTimeout(function() {
                $load.className += " loader-removed";
            }, 400);
        });
    </script>
  </div>
</div>