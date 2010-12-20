<!--     LOOKING FOR BLOCK -->
<div class="unit size1of2">
	<div class="mod simple">
		<b class="top">
			<b class="tl"></b>
			<b class="tr"></b>
		</b>
		<?= form::open(Route::url('item', array('action' => 'index')), array('class' => 'inner')); ?>
			<div class="hd">
				<h1 class="core_input"> <div class="unit size1of2"><?= __('I\'m Looking For:'); ?></div> <div class="unit size1of2"><?= form::input('looking_for'); ?></div></h1>
			</div>
			<div class="bd">
				<div class="line">

					<div class="unit size1of3" id="show_map">
						<div id="look_location" class="media">
							<a href="#" class="img"><img src="images/pin.png" alt="" class="img" />
								<div class="bd">
									<p><?= __('Near Where?'); ?></p>
								</div>
							</a>
						</div>
					</div>

					<div class="unit size1of3" id="show_photo">
						<div id="look_photo" class="media">
							<a href="#" class="img"><img src="images/camera.png" alt="" class="img" />
								<div class="bd">
									<p><?= __('Choose Photo'); ?></p>
								</div>
							</a>
						</div>
					</div>



					<div class="unit size1of3 lastUnit"  id="show_tag">
						<div id="look_tag" class="media">
							<a href="#" class="img"><img src="images/tag.png" alt="" class="img"/>
								<div class="bd">
									<p><?= __('Describe what you need'); ?></p>
								</div>
							</a>
						</div>
					</div>


					<div id="look_map_show" class="unit size1of1 toggle_tab" style="display:none;">
						<div class="mod simpleExt">
							<b class="top">
								<b class="tl"></b>
								<b class="tr"></b>
							</b>
							<div class="hd">
								<h5><?= __('Where are you looking for this?'); ?></h5>
							</div>
							<div class="bd">
								<div class="line">

									<div class="unit size2of3">
										<p>
											<?= form::input('looking_for_city', __('What City?')); ?>
											<?= form::input('looking_for_latitude', null, array('type' => 'hidden')); ?>
											<?= form::input('looking_for_longitude', null, array('type' => 'hidden')); ?>
										</p>
									</div> 
									<div class="unit size1of3 lastUnit">
										<p>
											<?= form::input('looking_for_change_city', __('Change City?'), array('type' => 'submit', 'class' => 'city')); ?>
										</p>
									</div>

								</div>
								<div class="media js_gmaps_canvas">
								</div>

							</div>
						</div>
					</div>


					<div id="look_photo_show" class="unit size1of1 toggle_tab" style="display:none;">
						<div class="mod simpleExt">
							<b class="top">
								<b class="tl"></b>
								<b class="tr"></b>
							</b>
							<div class="hd">
								<h5><?= __('Upload a photo of something similar to what you are looking for:'); ?></h5>
							</div>
							<div class="bd">

								<div class="line">
									<div class="unit size2of3">
										<p>
											<?= form::input('looking_for_photo_path', __('Browse for Photo')); ?>
										</p>
									</div> 
									<div class="unit size1of3 lastUnit">
										<p>
											<?= form::input('looking_for_photo_upload', __('Upload'), array('type' => 'submit', 'class' => 'upload')); ?>
										</p>
									</div>

									<p><?= __('Or paste the URL of an image on the web here:'); ?></p>

									<div class="line">
										<div class="unit size2of3">
											<p>
												<?= form::input('looking_for_photo_url', 'http://www.123.com/example.jpg')?>
											</p>
										</div>
										<div class="unit size1of3">
											<p>
												<?= form::input('looking_for_photo_import', __('Copy From Web'), array('type' => 'submit', 'class' => 'import'))?>
											</p>
										</div>
									</div>

								</div>



							</div>
						</div>
					</div>



					<div id="look_tag_hover" class="unit size1of1 toggle_tab" style="display:none;">
						<div class="mod simpleExt">
							<b class="top">
								<b class="tl"></b>
								<b class="tr"></b>
							</b>
							<div class="hd">
								<h5><?= __('Add attributes to this thing:'); ?></h5>
								<p><?= __('Separate with a comma (,) to add multiple attributes at once.'); ?></p>
							</div>
							<div class="bd">

								<div class="line">
									<div class="unit size2of3">
										<p>
											<?= form::input('looking_for_tag', __('Chair, Dark Wood, Rocker')); ?>
										</p>
									</div> 
									<div class="unit size1of3">
										<p>
											<?= form::input('looking_for_tag_submit', __('Add Tag'), array('type' => 'submit', 'class' => 'add'))?>
										</p>
									</div>
								</div>

								<p>
									<ul class="tag_list">
										<li>Chair</li>
										<li>Dark Wood</li>
										<li>Rocker</li>
									</ul>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		<?= form::close(); ?>
	</div>
	
<!-- 	LOOKING FOR LIST -->
<!-- Begin single List Element -->
		<div class="mod simple">
			<div class="inner">
				<div class="hd">
					<div class="unit size1of3">
						<h3>Rocking Chair</h3><!-- Item Name -->
						<p><a href="#">Ben Hanna</a><br /><!-- Member Name -->
						<a href="#" class="date">Dec. 20th 2010</a></p><!-- Date -->
					</div>
					<div class="unit size2of3">
						<ul class="thumb">
							<li>
								<img src="http://egadfundraising.com/wp-content/uploads/2008/04/classic-rocking-chair.jpg" alt=""/>
							</li>
							<li>
								<img src="http://www.acupuncturebrooklyn.com/wp-content/uploads/2009/12/rocking-chair_mesquite.jpg" alt=""/>
							</li>
							<li>
								<img src="http://ludogorie91.com/images/products/big/RockingChair.jpg" alt=""/>
							</li>
							<li>
								<img src="http://www.toystore.info/images/KidKraft_Adult_Rocking_Chair-Natural.jpg" alt=""/>
							</li>
						</ul>
					</div>
				</div>
				<div class="bd">
					<div class="unit size1of3">
						<h4>I am looking for:</h4> <p>A Rocking chair in good condition that can be outside on a porch. Not painted.</p>
					</div>
					<div class="unit size2of3">
						<ul class="tag_list">
							<li>Chair</li>
							<li>Dark Wood</li>
							<li>Rocker</li>
							<li>Lathe Turned</li>
							<li>Pre 1920</li>
							<li>Good Condition</li>
							<li>Deliverable</li>
							<li>
								<?= form::input('looking_for_tag_submit', __(''), array('type' => 'submit', 'class' => 'add'))?>
							</li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
<!-- End single list element -->

<!-- Begin single List Element -->
		<div class="mod simple">
			<div class="inner">
				<div class="hd">
					<div class="unit size1of3">
						<h3>Mustang Convertable</h3><!-- Item Name -->
						<p><a href="#">Ben Hanna</a><br /><!-- Member Name -->
						<a href="#" class="date">Dec. 20th 2010</a></p><!-- Date -->
					</div>
					<div class="unit size2of3">
						<ul class="thumb">
							<li>
								<img src="http://www.classicconvertibles.net/pictures/cars/9914/1961%20Chevrolet%20Corvette%20blue%20002.jpg" alt=""/>
							</li>
							<li>
								<img src="http://i114.photobucket.com/albums/n245/LiveFromNY/66mustang.jpg" alt=""/>
							</li>
							<li>
								<img src="http://www.corvetteblogger.com/images/content/042610_4.jpg" alt=""/>
							</li>
						</ul>
					</div>
				</div>
				<div class="bd">
					<div class="unit size1of3">
						<h4>I am looking for:</h4> <p>A super fast blue Mustang convertible from 1961.</p>
					</div>
					<div class="unit size2of3">
						<ul class="tag_list">
							<li>1961</li>
							<li>Mustang</li>
							<li>Convertable</li>
							<li>Mint Condition</li>
							<li>Blue</li>
							<li>
								<?= form::input('looking_for_tag_submit', __(''), array('type' => 'submit', 'class' => 'add'))?>
							</li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
<!-- End single list element -->

</div>

<div class="unit size1of2">
	<div class="mod simple">
		<b class="top">
			<b class="tl"></b>
			<b class="tr"></b>
		</b>
		<?= form::open(Route::url('item', array('action' => 'create')), array('class' => 'inner')); ?>
			<div class="hd">
				<h1 class="core_input"> <div class="unit size1of3"><?= __('I Found:') ?></div> <div class="unit size2of3"><?= form::input('found'); ?></div></h1>
			</div>
			<div class="bd">
				<div class="line">
					<div class="unit size1of3">
						<div class="media">
							<a href=""class="img"><img src="images/pin.png" alt="" class="img" />
								<div class="bd">
									<p>
										<?= __('Near Where?'); ?>
										<?= form::input('found_latitude', null, array('type' => 'hidden')); ?>
										<?= form::input('found_longitude', null, array('type' => 'hidden')); ?>
									</p>
								</div>
							</a>
						</div>
					</div>
					<div class="unit size1of3">
						<div class="media">
							<a href=""class="img"><img src="images/camera.png" alt="" class="img" />
								<div class="bd">
									<p><?= __('Choose Photo'); ?></p>
								</div>
							</a>
						</div>
					</div>
					<div class="unit size1of3 lastUnit">
						<div class="media">
							<a href=""class="img"><img src="images/tag.png" alt="" class="img" />
								<div class="bd">
									<p><?= __('Describe your find'); ?></p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		<?= form::close(); ?>
	</div>
</div>