<div class="container">
	<div class="auth-container">
		<ul class="nav nav-tabs" id="authTabs" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab">Sign Up</button>
			</li>
		</ul>
		<div class="tab-content">
			<!-- Login Form -->
			<div class="tab-pane fade show active" id="login" role="tabpanel">
				<form id="loginForm" class="mt-3">
					<div class="mb-3">
						<label for="loginEmail" class="form-label">Email</label>
						<input type="email" class="form-control" id="loginEmail" placeholder="Enter your email" required>
					</div>
					<div class="mb-3">
						<label for="loginPassword" class="form-label">Password</label>
						<input type="password" class="form-control" id="loginPassword" placeholder="Enter your password" required>
					</div>
					<button type="submit" class="btn btn-primary w-100">Login</button>
				</form>
			</div>
			<!-- Sign-Up Form -->
			<div class="tab-pane fade" id="signup" role="tabpanel">
				<form id="signupForm" class="mt-3">
					<div class="mb-3">
						<label for="signupUsername" class="form-label">Username</label>
						<input type="text" class="form-control" id="signupUsername" placeholder="Enter your username" required>
					</div>
					<div class="mb-3">
						<label for="signupEmail" class="form-label">Email</label>
						<input type="email" class="form-control" id="signupEmail" placeholder="Enter your email" required>
					</div>
					<div class="mb-3">
						<label for="signupPassword" class="form-label">Password</label>
						<input type="password" class="form-control" id="signupPassword" placeholder="Enter your password" required>
					</div>
					<button type="submit" class="btn btn-success w-100">Sign Up</button>
				</form>
			</div>
			<div class="d-flex justify-content-between mt-3">
				<button type="button" class="btn btn-outline-danger w-100 me-1" id="googleLogin">
					<i class="fab fa-google"></i> Google </button>
				<button type="button" class="btn btn-outline-primary w-100 ms-1" id="facebookLogin">
					<i class="fab fa-facebook-f"></i> Facebook </button>
			</div>
			<div class="d-flex justify-content-between mt-3">
				<button type="button" class="btn btn-outline-dark w-100 me-1" id="githubSignup">
					<i class="fab fa-github"></i> GitHub </button>
				<button type="button" class="btn btn-outline-secondary w-100 ms-1" id="appleSignup">
					<i class="fab fa-apple"></i> Apple </button>
			</div>
		</div>
	</div>
</div>