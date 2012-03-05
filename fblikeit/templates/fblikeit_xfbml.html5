<div class="<?php echo $this->cssclass; ?>">
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/<?php echo($this->lang); ?>/all.js"></script>
	<script>
		FB.init({
		<?php if($this->fblikeit_appid): ?>appId : '<?php echo($this->fblikeit_appid); ?>',<?php endif; ?>
		
		status : true,
		cookie : true,
		xfbml : true
		});
	</script>
	<fb:like href="<?php echo($this->fblikeit_href);?>" send="<?php echo($this->fblikeit_send); ?>" layout="<?php echo $this->fblikeit_layout; ?>" show_faces="<?php echo $this->fblikeit_faces; ?>" width="<?php echo $this->fblikeit_width; ?>" action="<?php echo $this->fblikeit_verb; ?>" font="<?php echo $this->fblikeit_font; ?>" colorscheme="<?php echo $this->fblikeit_color; ?>" />
</div>