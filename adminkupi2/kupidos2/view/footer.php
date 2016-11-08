
  <script src="../bootstrap/js/jquery-1.11.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../bootstrap/js/chart.min.js"></script>
  <script src="../bootstrap/js/chart-data.js"></script>
  <script src="../bootstrap/js/easypiechart.js"></script>
  <script src="../bootstrap/js/easypiechart-data.js"></script>
  <script src="../bootstrap/js/bootstrap-datepicker.js"></script>
  <script src="../bootstrap/js/bootstrap-table.js"></script>
  <script>
    !function ($) {
      $(document).on("click","ul.nav li.parent > a > span.icon", function(){      
        $(this).find('em:first').toggleClass("glyphicon-minus");    
      }); 
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })

    /*Tooltip js initialite*/
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script> 
</body>

</html>