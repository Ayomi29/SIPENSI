<!-- @format -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<title> {{ $title }} </title>
		<link rel="stylesheet" href="style/dashboard.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		
	<body>
		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
				<div class="header-menu">
					<div class="title"><a href="/dashboard">SIPENSI <span>ITK</span></a> </div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<ul>
						@auth
							<li>
								<form action="/logout" method="post">
									@csrf
									<button type="submit" class=""><i class="fas fa-sign-out-alt"></i></button>
								</form>
								
							</li>
							
						@elseif ('guest')
							<li>
								<a href="/login"><i class="fas fa-sign-in-alt"></i></a>
							</li>
						@endauth
					</ul>
				</div>
			</div>
			<!--header menu end-->
			<!--sidebar start-->
			<div class="sidebar">
				<div class="sidebar-menu">
					<li class="item">
						<a href="/dashboard" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="item" id="sempro">
						<a href="#sempro" class="menu-btn">
							<i class="fas fa-users"></i><span>Seminar Proposal <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="/dosenpembimbing">
								<i class="fas fa-user-circle"></i><span>Dosen Pembimbing & BMP</span>
							</a>
							<a href="/pendaftaran-seminar">
								<i class="fas fa-address-card"></i><span>Pendaftaran Seminar Proposal</span>
							</a>
							<a href="/seminar">
								<i class="fas fa-users"></i><span>Seminar Proposal</span>
							</a>
						</div>
					</li>
					<li class="item" id="sidangakhir">
						<a href="#sidangakhir" class="menu-btn">
							<i class="fas fa-book-reader"></i><span>Sidang Akhir <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="/dosenpenguji">
								<i class="fas fa-user-circle"></i><span>Dosen Penguji</span>
							</a>
							<a href="/pendaftaran-sidang">
								<i class="fas fa-address-card"></i><span>Pendaftaran Sidang Akhir</span>
							</a>
							<a href="/sidang">
								<i class="fas fa-chalkboard-teacher"></i><span>Sidang Akhir</span>
							</a>
						</div>
					</li>
					<li class="item">
						<a href="/about" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>About Us</span>
						</a>
					</li>
				</div>
			</div>
			<!--sidebar end-->
			<div class="main-container">
			@yield('main-container')
			</div>
		</div>
		<!--wrapper end-->

		<script type="text/javascript">
			$(document).ready(function () {
				$(".sidebar-btn").click(function () {
					$(".wrapper").toggleClass("collapse");
				});
			});
		</script>
	</body>
</html>
