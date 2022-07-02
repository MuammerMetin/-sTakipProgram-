<?php


$site = file_get_contents("https://ozhsoft.com/oz.txt");
$http = file_get_contents("https://ozhsoft.com/site.txt");
if($site == "ozhsoft"){
    echo "<br>";
    echo "<center>Powered by <a href=https://ozhsoft.com>OzhSoft iletişim</a></center>";
}else{
    echo "<br>";
  echo "<center>Powered by <a href=>Muammer</a></center>";  
} 
?>



</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>


<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/sweetalert/sweetalert2.all.min.js"></script>
</body>

</html>