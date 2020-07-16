<script type="text/javascript" src="<?= base_url('../assets/js/jquery.min.js')?>"></script>   
	<script type="text/javascript" src="<?= base_url('../assets/bootstrap/js/bootstrap.min.js')?>"></script> 
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>


	<script type="text/javascript">


		$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
$(document).ready(function() {


      $(".add-more").click(function(){ 

          var html = $(".copy").html();

          $(".after-add-more").after(html);

      });


      $("body").on("click",".remove",function(){ 

          $(this).parents(".control-group").remove();

      });


    });
	</script> 

</body>
</html>