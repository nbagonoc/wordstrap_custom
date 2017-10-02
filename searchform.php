<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="input-group stylish-input-group">
		<input type="text" class="form-control" value="" name="s" id="s" placeholder="<?php the_search_query(); ?>" ></input>
		<span class="input-group-addon">
			<!-- <button type="submit" value="5" name="cat" id="scat">search specific category ID -->
			<button type="submit">
				<span class="fa fa-search"></span>
			</button>  
		</span>
	</div>
</form>