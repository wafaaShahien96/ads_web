@extends('Userdashboard.layouts.app')

@section('content')

<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
	
		<!--************************************
				Home Slider Start
		*************************************-->
		<div id="tg-homebanner" class="tg-homebanner tg-haslayout">
			<figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%">
				<figcaption>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-bannercontent">
									<h1>World’s Largest Marketplace</h1>
									<h2>Search from 12,45,754 Awesome Verified Ads!</h2>
									<form class="tg-formtheme tg-formbannersearch">
										<fieldset>
											<div class="form-group tg-inputwithicon">
												<i class="icon-bullhorn"></i>
												<input type="text" name="customword" class="form-control" placeholder="What are you looking for">
											</div>
											<div class="form-group tg-inputwithicon">
												<i class="icon-location"></i>
												<a class="tg-btnsharelocation fa fa-crosshairs" href="javascript:void(0);"></a>
												<input type="text" name="yourlocation" class="form-control" placeholder="Your Location">
											</div>
											<div class="form-group tg-inputwithicon">
												<i class="icon-layers"></i>
												<div class="tg-select">
													<select>
														<option value="none">Select Category</option>
														<option value="none">Mobiles</option>
														<option value="none">Electronics</option>
														<option value="none">Vehicles</option>
														<option value="none">Bikes</option>
														<option value="none">Animals</option>
														<option value="none">Furniture</option>
														<option value="none">toys</option>
													</select>
												</div>
											</div>
											<button class="tg-btn" type="button">Search Now</button>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</figcaption>
			</figure>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Categories Search Start
			*************************************-->
			<section class="tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
							<div class="tg-categoriessearch">
								<div class="tg-title">
									<h2><span>Boost your search with</span> Trending Categories</h2>
								</div>
								<div id="tg-categoriesslider" class="tg-categoriesslider tg-categories owl-carousel">
									<div class="tg-category">
										<div class="tg-categoryholder">
											<figure><img src="images/icons/img-08.png" alt="image description"></figure>
											<h3>Mobiles</h3>
										</div>
									</div>
									<div class="tg-category">
										<div class="tg-categoryholder">
											<figure><img src="images/icons/img-09.png" alt="image description"></figure>
											<h3>Electronics</h3>
										</div>
									</div>
									<div class="tg-category">
										<div class="tg-categoryholder">
											<figure><img src="images/icons/img-10.png" alt="image description"></figure>
											<h3>Vehicles</h3>
										</div>
									</div>
									<div class="tg-category">
										<div class="tg-categoryholder">
											<figure><img src="images/icons/img-11.png" alt="image description"></figure>
											<h3>Bikes</h3>
										</div>
									</div>
									<div class="tg-category">
										<div class="tg-categoryholder">
											<figure><img src="images/icons/img-12.png" alt="image description"></figure>
											<h3>Animals</h3>
										</div>
									</div>
									<div class="tg-category">
										<div class="tg-categoryholder">
											<figure><img src="images/icons/img-13.png" alt="image description"></figure>
											<h3>Furniture</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Categories Search End
			*************************************-->
			<!--************************************
					Featured Ads Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<div class="tg-title">
									<h2>Featured Ads</h2>
								</div>
								<div class="tg-description">
									<p>Over 10,56,432 Featured Ads</p>
								</div>
							</div>
						</div>
						<div class="tg-ads">
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<a href="javascript:void(0);"><img src="images/ads/img-01.jpg" alt="image description"></a>
										<span class="tg-photocount">See 18 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Mobiles</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Ei pad pro for sale</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>$200</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<a href="javascript:void(0);"><img src="images/ads/img-02.jpg" alt="image description"></a>
										<span class="tg-photocount">See 18 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Vehicles</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Classic car in low price</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>on call</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<a href="javascript:void(0);"><img src="images/ads/img-03.jpg" alt="image description"></a>
										<span class="tg-photocount">See 18 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Mobiles</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Set of 03 chairs</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>$125</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<a href="javascript:void(0);"><img src="images/ads/img-04.jpg" alt="image description"></a>
										<span class="tg-photocount">See 18 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Furniture</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Smartphone for sale</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>$160</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<a href="javascript:void(0);"><img src="images/ads/img-05.jpg" alt="image description"></a>
										<span class="tg-photocount">See 18 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Furniture</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Set of chair for sale</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>on call</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<a href="javascript:void(0);"><img src="images/ads/img-06.jpg" alt="image description"></a>
										<span class="tg-photocount">See 18 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Animals</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Eye catching blue parrot for sale</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>on call</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<a href="javascript:void(0);"><img src="images/ads/img-07.jpg" alt="image description"></a>
										<span class="tg-photocount">See 18 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Toys</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Teddy for sale</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>$30</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<a href="javascript:void(0);"><img src="images/ads/img-08.jpg" alt="image description"></a>
										<span class="tg-photocount">See 18 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Electronics</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Hp dual core 2gb ram-slim laptop</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>$260</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-btnbox">
								<a class="tg-btn" href="javascript:void(0);">View All</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Featured Ads End
			*************************************-->
			<!--************************************
					Latest Posted Ads Start
			*************************************-->
			<section class="tg-sectionspace tg-bglight tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<div class="tg-title">
									<h2>Latest Posted Ads</h2>
								</div>
								<div class="tg-description">
									<p>Over 10,56,432 New Ads</p>
								</div>
							</div>
						</div>
						<div class="tg-ads tg-adsvtwo">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<a href="javascript:void(0);"><img src="images/ads/img-09.jpg" alt="image description"></a>
										<span class="tg-photocount">See 29 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Vehicles</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Ei pad pro for sale</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>$200</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<a href="javascript:void(0);"><img src="images/ads/img-10.jpg" alt="image description"></a>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Furniture</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Classic car in low price</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>on call</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<a href="javascript:void(0);"><img src="images/ads/img-11.jpg" alt="image description"></a>
										<span class="tg-photocount">See 3 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Mobiles</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Set of 03 chairs</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>$125</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<a href="javascript:void(0);"><img src="images/ads/img-12.jpg" alt="image description"></a>
										<span class="tg-photocount">See 18 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Mobiles</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Smartphone for sale</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>$160</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<a href="javascript:void(0);"><img src="images/ads/img-13.jpg" alt="image description"></a>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Furniture</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Set of chair for sale</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>on call</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="tg-ad tg-verifiedad">
									<figure>
										<a href="javascript:void(0);"><img src="images/ads/img-14.jpg" alt="image description"></a>
										<span class="tg-photocount">See 7 Photos</span>
									</figure>
									<div class="tg-adcontent">
										<ul class="tg-productcagegories">
											<li><a href="javascript:void(0);">Electronics</a></li>
										</ul>
										<div class="tg-adtitle">
											<h3><a href="javascript:void(0);">Eye catching blue parrot for sale</a></h3>
										</div>
										<time datetime="2017-06-06">Last Updated: 4 hours ago</time>
										<div class="tg-adprice"><h4>on call</h4></div>
										<address>44-46 abc Road, Manchester</address>
										<div class="tg-phonelike">
											<a class="tg-btnphone" href="javascript:void(0);">
												<i class="icon-phone-handset"></i>
												<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
											</a>
											<span class="tg-like"><i class="fa fa-heart"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-btnbox">
								<a class="tg-btn" href="javascript:void(0);">View All</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Latest Posted Ads End
			*************************************-->
			<!--************************************
					News Article Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<div class="tg-title">
									<h2>News Articles</h2>
								</div>
								<div class="tg-description">
									<p>Stay Updated With News</p>
								</div>
							</div>
						</div>
						<div class="tg-posts">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tg-verticaltop">
								<div class="tg-post">
									<figure>
										<span class="tg-themetag tg-bookmarktag"><i class="icon-bookmark"></i></span>
										<a href="javascript:void(0);"><img src="images/post/img-01.jpg" alt="image description"></a>
									</figure>
									<div class="tg-postcontent">
										<ul class="tg-postcategories">
											<li><a href="javascript:void(0);">Lifestyle</a></li>
											<li><a href="javascript:void(0);">Entertainment</a></li>
										</ul>
										<div class="tg-posttitle">
											<h3><a href="javascript:void(0);">All I Need To Know I Learned In Kindergarten</a></h3>
										</div>
										<ul class="tg-postmetadata">
											<li>By: <a href="javascript:void(0);">Terisa Wallick</a></li>
											<li><i class="icon-bubble"></i><a href="javascript:void(0);">15642</a></li>
										</ul>
										<div class="tg-description">
											<p>Consectetur adipicing elit sed eiusmod temporie incidint ut labore et dolore magna enim ad minim veniam, quis nostrud... <a href="javascript:void(0);">read more</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tg-verticaltop">
								<div class="tg-post">
									<figure>
										<a href="javascript:void(0);"><img src="images/post/img-02.jpg" alt="image description"></a>
									</figure>
									<div class="tg-postcontent">
										<ul class="tg-postcategories">
											<li><a href="javascript:void(0);">Fashion</a></li>
											<li><a href="javascript:void(0);">Trade</a></li>
										</ul>
										<div class="tg-posttitle">
											<h3><a href="javascript:void(0);">Applause For A Great Teacher</a></h3>
										</div>
										<ul class="tg-postmetadata">
											<li>By: <a href="javascript:void(0);">Terisa Wallick</a></li>
											<li><i class="icon-bubble"></i><a href="javascript:void(0);">15642</a></li>
										</ul>
										<div class="tg-description">
											<p>Consectetur adipicing elit sed eiusmod temporie incidint ut labore et dolore magna enim ad minim veniam, quis nostrud... <a href="javascript:void(0);">read more</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tg-verticaltop">
								<div class="tg-post">
									<figure>
										<span class="tg-themetag tg-bookmarktag"><i class="icon-bookmark"></i></span>
										<a href="javascript:void(0);"><img src="images/post/img-03.jpg" alt="image description"></a>
									</figure>
									<div class="tg-postcontent">
										<ul class="tg-postcategories">
											<li><a href="javascript:void(0);">Trade</a></li>
											<li><a href="javascript:void(0);">Business</a></li>
										</ul>
										<div class="tg-posttitle">
											<h3><a href="javascript:void(0);">Books Are Food For The Brain</a></h3>
										</div>
										<ul class="tg-postmetadata">
											<li>By: <a href="javascript:void(0);">Terisa Wallick</a></li>
											<li><i class="icon-bubble"></i><a href="javascript:void(0);">15642</a></li>
										</ul>
										<div class="tg-description">
											<p>Consectetur adipicing elit sed eiusmod temporie incidint ut labore et dolore magna enim ad minim veniam, quis nostrud... <a href="javascript:void(0);">read more</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-btnbox">
								<a class="tg-btn" href="javascript:void(0);">View All</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					News Article End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-sectionspace tg-bglight tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="tg-testimonialsslider" class="tg-testimonials tg-testimonialsslider owl-carousel">
								<div class="item">
									<div class="tg-testimonial">
										<figure><img src="images/testimonials/img-01.jpg" alt="image description"></figure>
										<div class="tg-contentbox">
											<h2><a href="javascript:void(0);">Jami Gheen</a></h2>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed eiusmod temporie icididunt ut labore et dolore magna aliquaaenim.</p>
											</div>
											<h3>Developer at of <a href="javascript:void(0);">xyz company</a></h3>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="tg-testimonial">
										<figure><img src="images/testimonials/img-02.jpg" alt="image description"></figure>
										<div class="tg-contentbox">
											<h2><a href="javascript:void(0);">Johnny Zeigler</a></h2>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed eiusmod temporie icididunt ut labore et dolore magna aliquaaenim.</p>
											</div>
											<h3>Developer at of <a href="javascript:void(0);">xyz company</a></h3>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="tg-testimonial">
										<figure><img src="images/testimonials/img-01.jpg" alt="image description"></figure>
										<div class="tg-contentbox">
											<h2><a href="javascript:void(0);">Jami Gheen</a></h2>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed eiusmod temporie icididunt ut labore et dolore magna aliquaaenim.</p>
											</div>
											<h3>Developer at of <a href="javascript:void(0);">xyz company</a></h3>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="tg-testimonial">
										<figure><img src="images/testimonials/img-02.jpg" alt="image description"></figure>
										<div class="tg-contentbox">
											<h2><a href="javascript:void(0);">Johnny Zeigler</a></h2>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed eiusmod temporie icididunt ut labore et dolore magna aliquaaenim.</p>
											</div>
											<h3>Developer at of <a href="javascript:void(0);">xyz company</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
					Partners Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="tg-brandsslider" class="tg-brands tg-brandsslider owl-carousel">
								<figure class="item"><img src="images/brands/img-01.png" alt="image description"></figure>
								<figure class="item"><img src="images/brands/img-02.png" alt="image description"></figure>
								<figure class="item"><img src="images/brands/img-03.png" alt="image description"></figure>
								<figure class="item"><img src="images/brands/img-04.png" alt="image description"></figure>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Partners End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
							<div class="tg-newsletter">
								<h2>Signup For Newsletter:</h2>
								<form class="tg-formtheme tg-formnewsletter">
									<fieldset>
										<i class="icon-envelope"></i>
										<input type="email" name="email" class="form-control" placeholder="Enter your email here">
										<button type="button">Signup Now</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="tg-footerinfo">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pull-right">
							<div class="tg-widget tg-widgetsearchbylocations">
								<div class="tg-widgettitle">
									<h3>Search By Locations:</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li><a href="javascript:void(0);">-  Aberdeen</a></li>
										<li><a href="javascript:void(0);">-  Armagh</a></li>
										<li><a href="javascript:void(0);">-  Bangor</a></li>
										<li><a href="javascript:void(0);">-  Bath</a></li>
										<li><a href="javascript:void(0);">-  Belfast</a></li>
										<li><a href="javascript:void(0);">-  Birmingham</a></li>
										<li><a href="javascript:void(0);">-  Bradford</a></li>
										<li><a href="javascript:void(0);">-  Brighton and Hove</a></li>
										<li><a href="javascript:void(0);">-  Bristol</a></li>
										<li><a href="javascript:void(0);">-  Cambridge</a></li>
									</ul>
									<ul>
										<li><a href="javascript:void(0);">-  Canterbury</a></li>
										<li><a href="javascript:void(0);">-  Cardiff</a></li>
										<li><a href="javascript:void(0);">-  Carlisle</a></li>
										<li><a href="javascript:void(0);">-  Chester</a></li>
										<li><a href="javascript:void(0);">-  Chichester</a></li>
										<li><a href="javascript:void(0);">-  City of London</a></li>
										<li><a href="javascript:void(0);">-  Coventry</a></li>
										<li><a href="javascript:void(0);">-  Derby</a></li>
										<li><a href="javascript:void(0);">-  Dundee</a></li>
										<li><a href="javascript:void(0);">View All</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<div class="tg-widget tg-widgettext">
								<div class="tg-widgetcontent">
									<strong class="tg-logo"><a href="javascript:void(0);"><img src="images/logof.png" alt="image description"></a></strong>
									<div class="tg-description">
										<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua anii ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo aute irurel in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
									</div>
									<div class="tg-followus">
										<strong>Follow Us:</strong>
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
											<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
										</ul>
										<ul class="tg-appsnav">
											<li><a href="javascript:void(0);"><img src="images/apps-01.png" alt="image description"></a></li>
											<li><a href="javascript:void(0);"><img src="images/apps-02.png" alt="image description"></a></li>
										</ul>
									</div>
									<nav class="tg-footernav">
										<ul>
											<li><a href="javascript:void(0);">Listing Policy</a></li>
											<li><a href="javascript:void(0);">Terms of Use</a></li>
											<li><a href="javascript:void(0);">Privacy Policy</a></li>
											<li><a href="javascript:void(0);">Mobiles Policy</a></li>
											<li><a href="javascript:void(0);">Change Currency</a></li>
											<li><a href="javascript:void(0);">Sitemap</a></li>
											<li><a href="javascript:void(0);">News</a></li>
										</ul>
									</nav>
									<span class="tg-copyright">2017 All Rights Reserved &copy; Classified PRO</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Theme Modal Box Start
	*************************************-->
	<div id="tg-modalselectcurrency" class="modal fade tg-thememodal tg-modalselectcurrency" tabindex="-1" role="dialog">
		<div class="modal-dialog tg-thememodaldialog" role="document">
			<button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			<div class="modal-content tg-thememodalcontent">
				<div class="tg-title">
					<strong>Change Currency</strong>
				</div>
				<form class="tg-formtheme tg-formselectcurency">
					<fieldset>
						<div class="form-group">
							<div id="tg-flagstrapone" class="tg-flagstrap" data-input-name="country"></div>
						</div>
						<div class="form-group">
							<button class="tg-btn" type="button">Change Now</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div id="tg-modalpriceconverter" class="modal fade tg-thememodal tg-modalpriceconverter" tabindex="-1" role="dialog">
		<div class="modal-dialog tg-thememodaldialog" role="document">
			<button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			<div class="modal-content tg-thememodalcontent">
				<div class="tg-title">
					<strong>Currency Converter</strong>
				</div>
				<form class="tg-formtheme tg-formcurencyconverter">
					<fieldset>
						<div class="form-group">
							<div id="tg-flagstraptwo" class="tg-flagstrap" data-input-name="country"></div>
							<div class="tg-curencyrateetc">
								<span>120<sup>$</sup></span>
								<p>1 USD = 0.784769 GBP</p>
							</div>
						</div>
						<div class="form-group">
							<span class="tg-iconseprator"><i><img src="images/icons/img-36.png" alt="image description"></i></span>
						</div>
						<div class="form-group">
							<div id="tg-flagstrapthree" class="tg-flagstrap" data-input-name="country"></div>
							<div class="tg-curencyrateetc">
								<span>94.1723<sup>£</sup></span>
								<p>1 GBP = 1.27426 USD</p>
							</div>
						</div>
						<div class="form-group">
							<span class="tg-lastupdate">Last update on <time datetime="2017-08-08">2017-06-12 12:35 local time</time></span>
						</div>
						<div class="form-group">
							<button class="tg-btn" type="button">Convert Now</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
@endsection