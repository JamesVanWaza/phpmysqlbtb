<footer id="footer">
	<i class="fa fa-copyright"></i>
	<?php
$fromYear = 2012;
$thisYear = (int) date('Y');
echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
?> , James Van Waza
</footer>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.min.js"></script>
    <script>
    	jQuery(document).ready(function($) {
    		$(document).foundation();
    	});
    </script>
</body>
</html>