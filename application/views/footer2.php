<!-- ============================================================== -->
<script src="<?php echo base_url();?>web/assets/plugins/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/jquery.fancybox.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/aos.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/popper.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/jquery-rating.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/slick.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/imagesloaded.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/isotope.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/select2.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/bootstrap-slider.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/datedropper.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/dropzone.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/placeholders.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/timedropper.js"></script>
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/map_infobox.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/markerclusterer.js"></script>
<script src="<?php echo base_url();?>web/assets/js/custom-maps.js"></script>

<!-- Custom js -->
<script src="<?php echo base_url();?>web/assets/js/custom.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>

<script src="<?php echo base_url();?>web/assets/js/jquery.geocomplete.js"></script>
<script src="<?php echo base_url();?>web/assets/bootstrap-clockpicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    // WRITE THE VALIDATION SCRIPT.
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>


</html>