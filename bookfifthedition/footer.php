<footer id="footer">
	<i class="fa fa-copyright"></i>
<?php
$fromYear = 2012;
$thisYear = (int) date('Y');
echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
?> , James Van Waza
</footer>
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
   	<script src="node_modules/what-input/dist/what-input.min.js"></script>
    <script src="node_modules/foundation-sites/dist/foundation.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
