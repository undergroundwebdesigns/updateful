<!--     LOOKIGN FOR BLOCK -->
<div class="unit size1of2">
	<div class="mod simple">
		<b class="top">
			<b class="tl"></b>
			<b class="tr"></b>
		</b>
		<?= form::open(Route::url('item', array('action' => 'create')), array('class' => 'inner')); ?>
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
										</p>
									</div> 
									<div class="unit size1of3 lastUnit">
										<p>
											<?= form::input('looking_for_change_city', __('Change City?'), array('type' => 'submit', 'class' => 'city')); ?>
										</p>
									</div>

								</div>
								<div class="media">
									<iframe width="400" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/?ie=UTF8&amp;hq=&amp;hnear=26+William+St,+Hataitai+6021,+Wellington,+New+Zealand&amp;ll=-41.318044,174.809475&amp;spn=0.025399,0.047207&amp;z=13&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/?ie=UTF8&amp;hq=&amp;hnear=26+William+St,+Hataitai+6021,+Wellington,+New+Zealand&amp;ll=-41.318044,174.809475&amp;spn=0.025399,0.047207&amp;z=13&amp;source=embed" style="color:#0000FF;text-align:left"><?= __('View Larger Map'); ?></a></small>
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
</div>

<div class="unit size1of2">
	<div class="mod simple">
		<b class="top">
			<b class="tl"></b>
			<b class="tr"></b>
		</b>
		<div class="inner">
			<div class="hd">
				<h1 class="core_input"> <div class="unit size1of3">I Found: </div> <div class="unit size2of3"><input type="text" name="textfield" id="textfield" /></div></h1>
			</div>
			<div class="bd">
				<div class="line">
					<div class="unit size1of3">
						<div class="media">
							<a href=""class="img"><img src="images/pin.png" alt="" class="img" />
								<div class="bd">
									<p>Near Where?</p>
								</div>
							</a>
						</div>
					</div>
					<div class="unit size1of3">
						<div class="media">
							<a href=""class="img"><img src="images/camera.png" alt="" class="img" />
								<div class="bd">
									<p>Choose Photo</p>
								</div>
							</a>
						</div>
					</div>
					<div class="unit size1of3 lastUnit">
						<div class="media">
							<a href=""class="img"><img src="images/tag.png" alt="" class="img" />
								<div class="bd">
									<p>Describe your find</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>