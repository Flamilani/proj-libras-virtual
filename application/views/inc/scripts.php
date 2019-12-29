

<!-- Bootstrap Core JavaScript -->
<script src="assets/dist/bootstrap/js/bootstrap.min.js"></script>

<?php if(isset($scripts)) {
			foreach ($scripts as $script_name) {
				$src = base_url() . "assets/js/front/" . $script_name; ?>
				<script src="<?=$src ?>"></script>
			<?php }
		}
?>

</body>

</html>