<div class="sidebar-item">
	<span class="title">Search</span>
	<div class="body">
		<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div class="input-group">
		      <input type="text" class="form-control" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search for...">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
		      </span>
		    </div><!-- /input-group -->
	    </form>
	</div>
</div>