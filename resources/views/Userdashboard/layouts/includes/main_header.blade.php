
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-navcurrency">
								<li><a href="#" data-toggle="modal" data-target="#tg-modalselectcurrency">select currency</a></li>
								<li><a href="#" data-toggle="modal" data-target="#tg-modalpriceconverter">Price converter</a></li>
							</ul>
							<div class="dropdown tg-themedropdown tg-userdropdown">
								<a href="javascript:void(0);" id="tg-adminnav" class="tg-btndropdown" data-toggle="dropdown">
                                    <span class="tg-userdp"><img src="{{asset('front/UserDashboard/assets/images/author/img-01.jpg')}}" alt="image description"></span>


							<span class="tg-name">{{auth()->user()->first_name}}</span> 
							 <span class="tg-role">{{Auth::User()->email}}</span>
								</a>
								<ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-adminnav">
									<li>
										<a href="dashboard.html">
											<i class="icon-chart-bars"></i>
											<span>Insights</span>
										</a>
									</li>
									<li>
										<a href="dashboard-profile-setting.html">
											<i class="icon-cog"></i>
											<span>Profile Settings</span>
										</a>
									</li>
									<li class="menu-item-has-children">
										<a href="javascript:void(0);">
											<i class="icon-layers"></i>
											<span>My Ads</span>
										</a>
										<ul>
											<li><a href="dashboard-myads.html">All Ads</a></li>
											<li><a href="dashboard-myads.html">Featured Ads</a></li>
											<li><a href="dashboard-myads.html">Active Ads</a></li>
											<li><a href="dashboard-myads.html">Inactive Ads</a></li>
											<li><a href="dashboard-myads.html">Sold Ads</a></li>
											<li><a href="dashboard-myads.html">Expired Ads</a></li>
											<li><a href="dashboard-myads.html">Deleted Ads</a></li>
										</ul>
									</li>
									<li>
										<a href="dashboard-postanad.html">
											<i class="icon-layers"></i>
											<span>Dashboard Post Ad</span>
										</a>
									</li>
									<li class="menu-item-has-children">
										<a href="javascript:void(0);">
											<i class="icon-envelope"></i>
											<span>Offers/Messages</span>
										</a>
										<ul>
											<li><a href="dashboard-offermessages.html">Offer Received</a></li>
											<li><a href="dashboard-offermessages.html">Offer Sent</a></li>
											<li><a href="dashboard-offermessages.html">Trash</a></li>
										</ul>
									</li>
									<li>
										<a href="dashboard-payments.html">
											<i class="icon-cart"></i>
											<span>Payments</span>
										</a>
									</li>
									<li>
										<a href="dashboard-myfavourites.html">
											<i class="icon-heart"></i>
											<span>My Favourite</span>
										</a>
									</li>
									<li>
										<a href="dashboard-privacy-setting.html">
											<i class="icon-star"></i>
											<span>Privacy Settings</span>
										</a>
									</li>
									<li>
										<a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"> 
                                    <i class="icon-exit"></i>
                                    <span>Logout</span>
								</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                            </form>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>