<div class="search-bar">
	<form action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label>Search</label>
		<div class="input-group">
			<input type="" name="s" value="<?php echo get_search_query(); ?>">
			<button>
				<i class="fa fa-search"></i>
			</button>
		</div>
	</form>
</div>