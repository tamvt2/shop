<!-- Sidebar Start -->
<aside class="left-sidebar">
	<!-- Sidebar scroll-->
	<div>
		<div class="brand-logo d-flex align-items-center justify-content-between">
			@if( auth()->check() )
				<a class="ms-8 text-uppercase fw-semibold fs-5 nav-link hide-menu" href="#">{{ auth()->user()->name }}</a>
			@endif
		</div>
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
			<ul id="sidebarnav">
				<li class="nav-small-cap">
					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
					<span class="hide-menu">Danh Mục</span>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="/admin/danhmuc/add" aria-expanded="false">
						<span>
							<i class="ti ti-circle-plus"></i>
						</span>
						<span class="hide-menu">Thêm</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="/admin/danhmuc/list" aria-expanded="false">
						<span>
							<i class="ti ti-list"></i>
						</span>
						<span class="hide-menu">Danh sách</span>
					</a>
				</li>
				<li class="nav-small-cap">
					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
					<span class="hide-menu">Sản Phẩm</span>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="/admin/sanpham/add" aria-expanded="false">
						<span>
							<i class="ti ti-circle-plus"></i>
						</span>
						<span class="hide-menu">Thêm</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="/admin/sanpham/list" aria-expanded="false">
						<span>
							<i class="ti ti-list"></i>
						</span>
						<span class="hide-menu">Danh sách</span>
					</a>
				</li>
				<li class="nav-small-cap">
					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
					<span class="hide-menu">UI COMPONENTS</span>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
						<span>
							<i class="ti ti-article"></i>
						</span>
						<span class="hide-menu">Buttons</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
						<span>
							<i class="ti ti-alert-circle"></i>
						</span>
						<span class="hide-menu">Alerts</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
						<span>
							<i class="ti ti-cards"></i>
						</span>
						<span class="hide-menu">Card</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
						<span>
							<i class="ti ti-file-description"></i>
						</span>
						<span class="hide-menu">Forms</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
						<span>
							<i class="ti ti-typography"></i>
						</span>
						<span class="hide-menu">Typography</span>
					</a>
				</li>
				<li class="nav-small-cap">
					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
					<span class="hide-menu">AUTH</span>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="login" aria-expanded="false">
						<span>
							<i class="ti ti-login"></i>
						</span>
						<span class="hide-menu">Login</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="register" aria-expanded="false">
						<span>
							<i class="ti ti-user-plus"></i>
						</span>
						<span class="hide-menu">Register</span>
					</a>
				</li>
			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->