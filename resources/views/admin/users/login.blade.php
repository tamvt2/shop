@include('layout.head')

<body>
	<!--  Body Wrapper -->
	<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed">
		<div
		class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
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
								<form action="{{ url('login') }}" method="post">
                					{{ csrf_field() }}
									<div class="mb-3">
										<label for="exampleInputtext1" class="form-label">Name</label>
										<input type="text" name="name" class="form-control" placeholder="Name">
									</div>
									<div class="mb-4">
										<label for="exampleInputPassword1" class="form-label">Password</label>
										<input type="password" name="password" class="form-control" placeholder="Password">
									</div>
									<!-- <div class="d-flex align-items-center justify-content-between mb-4">
										<div class="form-check">
											<input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
											<label class="form-check-label text-dark" for="flexCheckChecked">
												Remeber this Device
											</label>
										</div>
										<a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
									</div> -->
									<div class="mb-4">
										<button type="submit" class="btn btn-primary w-100 py-8 fs-4 rounded-2">Sign In</button>
									</div>
									<div class="d-flex align-items-center justify-content-center">
										<p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
										<a class="text-primary fw-bold ms-2" href="register">Create an account</a>
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