<nav class="pcoded-navbar menupos-fixed menu-dark menu-item-icon-style6">
		<div class="navbar-wrapper ">
			<div class="navbar-brand header-logo">
				<a href="" class="b-brand">
					<img width="40" src="{{asset('assets/images/logo/patshala.png')}}" alt="" class="logo images">
					<img width="40" src="{{asset('assets/images/logo/patshala.png')}}" alt="" class="logo-thumb images">
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			</div>
			<div class="navbar-content scroll-div ps ps--active-y">
				
				
				
				<ul class="nav pcoded-inner-navbar ">
		
                    
                    <li data-username="widget statistic data chart" class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="fa-solid fa-users"></i></span><span class="pcoded-mtext">Members</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="{{Route('members.index')}}" class="">List of members</a></li>
						</ul>
					</li>

					<li data-username="widget statistic data chart" class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="fa-solid fa-file-circle-exclamation"></i></span><span class="pcoded-mtext">Reports</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="{{Route('date.wise.member.join')}}" class="">Date wise member join</a></li>
						</ul>
					</li>



					<li data-username="widget statistic data chart" class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="fa-solid fa-sack-dollar"></i></i></span><span class="pcoded-mtext">Bank History</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="{{Route('points.bank')}}" class="">Points bank</a></li>
							<li class=""><a href="{{Route('coins.bank')}}" class="">Coins bank</a></li>
							<li class=""><a href="{{Route('virtual.bank')}}" class="">Virtual bank</a></li>
						</ul>
					</li>


					<li data-username="widget statistic data chart" class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="fa-solid fa-receipt"></i></span><span class="pcoded-mtext">Voucher</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="{{Route('voucher.create')}}" class="">Purchase</a></li>
						</ul>
					</li>

					<li data-username="vertical horizontal box layout RTL fixed static collapse menu color icon dark background image" class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Home Page</span></a>
						<ul class="pcoded-submenu">
							<li class="pcoded-hasmenu"><a href="#!" class="">Slider</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('slider.create')}}" class="">Add slider image</a></li>
									<li class=""><a href="{{Route('slider.index')}}" class="" >All Slider image</a></li>
								</ul>
							</li>

							<li class="pcoded-hasmenu"><a href="#!" class="">About us</a>
								<ul class="pcoded-submenu" >
									<li class=""><a href="{{Route('about')}}" class="">@if(App\Models\Aboutus::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>

							<li class="pcoded-hasmenu"><a href="#!" class="">Video</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('video')}}" class="">@if(App\Models\Video::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>

							<li class="pcoded-hasmenu"><a href="#!" class="">Testimonials</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('testimonial.create')}}" class="">Add testimonial</a></li>
									<li class=""><a href="{{Route('testimonial.index')}}" class="" >All testimonial</a></li>
								</ul>
							</li>

							<li class="pcoded-hasmenu"><a href="#!" class="">Mission</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('mission')}}" class="">@if(App\Models\Mission::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>

							<li class="pcoded-hasmenu"><a href="#!" class="">Global</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('globals')}}" class="">@if(App\Models\Globals::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>


							<li class="pcoded-hasmenu"><a href="#!" class="">Bigwigs say</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('bigwig.create')}}" class="">Add comment</a></li>
									<li class=""><a href="{{Route('bigwig.index')}}" class="" >All comment</a></li>
								</ul>
							</li>


							<li class="pcoded-hasmenu"><a href="#!" class="">Opportunity</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('opportunity')}}" class="">@if(App\Models\Opportunity::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>

							<li class="pcoded-hasmenu"><a href="#!" class="">Ranks</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('ranks')}}" class="">@if(App\Models\Rank::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>

							<li class="pcoded-hasmenu"><a href="#!" class="">Rewards</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('rewards')}}" class="">@if(App\Models\Reward::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>
							
							<li class="pcoded-hasmenu"><a href="#!" class="">Why pathshala</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('why.pathshala')}}" class="">@if(App\Models\Whypathshala::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>

							<li class="pcoded-hasmenu"><a href="#!" class="">Richtext</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('richtext')}}" class="">@if(App\Models\Richtext::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>

							<li class="pcoded-hasmenu"><a href="#!" class="">Power</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('power')}}" class="">@if(App\Models\Power::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>


						</ul>
					</li>
					
					<li data-username="widget statistic data chart" class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="fa-solid fa-file"></i></span><span class="pcoded-mtext">Pages</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="{{Route('pages.create')}}" class="">Create page</a></li>
							<li class=""><a href="{{Route('pages.index')}}" class="">All pages</a></li>
						</ul>
					</li>



					<li data-username="vertical horizontal box layout RTL fixed static collapse menu color icon dark background image" class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="fa-solid fa-diamond-turn-right"></i></span><span class="pcoded-mtext">Navigation</span></a>
						<ul class="pcoded-submenu">
							<li class="pcoded-hasmenu"><a href="#!" class="">Main menu</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('navigation.create')}}" class="">Add item</a></li>
									<li class=""><a href="{{Route('navigation.index')}}" class="">All item</a></li>
								</ul>
							</li>

							<li class="pcoded-hasmenu"><a href="#!" class="">Footer menu</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('navigation2.create')}}" class="">Add item</a></li>
									<li class=""><a href="{{Route('navigation2.index')}}" class="">All item</a></li>
								</ul>
							</li>


						</ul>
					</li>
					
					@php
						$role = App\Models\User::where('id', '=', Auth::id())->first();
					@endphp

					@if($role->menu_access == 1)
					<li data-username="widget statistic data chart" class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="fa-solid fa-user-gear"></i></span><span class="pcoded-mtext">Users Management</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="{{Route('users.create')}}" class="">Add user</a></li>
							<li class=""><a href="{{Route('users.index')}}" class="">All users</a></li>
						</ul>
					</li>
					@endif


					<li data-username="vertical horizontal box layout RTL fixed static collapse menu color icon dark background image" class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="fa-solid fa-wrench"></i></span><span class="pcoded-mtext">Settings</span></a>
						<ul class="pcoded-submenu">
							<li class="pcoded-hasmenu"><a href="#!" class="">General</a>
								<ul class="pcoded-submenu">
									<li class=""><a href="{{Route('settings.general')}}" class="">@if(App\Models\Settings::count() > 0) Update content @else Add content @endif</a></li>
								</ul>
							</li>
						</ul>
					</li>

				</ul>
				
				
				
				
			<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 320px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div></div></div>
			
		</div>
	</nav>