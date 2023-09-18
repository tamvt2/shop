@include('layout.head')

<body>
  <!--  Body Wrapper -->
	<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed">
		<div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
			<div class="d-flex align-items-center justify-content-center w-100">
				<div class="row justify-content-center w-100">
					<div class="col-md-8 col-lg-6 col-xxl-3">
						<div class="card mb-0">
							<div class="card-body">
								<a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
									<img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
								</a>
								<p class="text-center">Your Social Campaigns</p>
								@include('layout.alert')
								<form action="{{ url('register') }}" method="post">
                					{{ csrf_field() }}
									<div class="mb-3">
										<label for="exampleInputtext1" class="form-label">Name</label>
										<input type="text" name="name" class="form-control" placeholder="Name">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Email Address</label>
										<input type="email" class="form-control" placeholder="Email" name="email">
									</div>
									<div class="mb-3">
										<label for="exampleInputPassword1" class="form-label">Password</label>
										<input type="password" class="form-control" placeholder="Password" name="password">
									</div>
									<div class="mb-4">
										<label for="exampleInputPassword1" class="form-label">Confirm Password</label>
										<input type="password" class="form-control" placeholder="Retype password" name="password_confirm">
									</div>
									<div class="mb-4">
										<button type="submit" class="btn btn-primary w-100 py-8 fs-4 rounded-2">Sign Up</button>
									</div>
									<div class="d-flex align-items-center justify-content-center">
										<p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
										<a class="text-primary fw-bold ms-2" href="login">Sign In</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('layout.scripts')
</body>

</html>