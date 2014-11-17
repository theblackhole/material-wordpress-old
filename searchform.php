<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline">
    <fieldset>
		<div class="input-group">
			<div class="form-control-wrapper">
				<input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
				<span class="material-input"></span>
			</div>
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary withripple"><?php _e("Search","wpbootstrap"); ?>
					<div class="ripple-wrapper"></div>
				</button>
			</span>
		</div>
    </fieldset>
</form>