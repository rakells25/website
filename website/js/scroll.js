<script type="text/javascript">
jQuery(document).ready(function($) {
    $('a[href*="#"]').click(function() {
        var anchor = $('#'+this.href.split('#')[1]);
        $('html,body').animate({scrollTop: anchor.offset().top},'slow');
        return false;
    });
});
</script>