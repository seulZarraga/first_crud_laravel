<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax Crud with Laravel 5.3</title>
	<link rel="stylesheet" href=" {{ asset('/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href=" {{ asset('/css/font-awesome.min.css') }} ">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="3" class="navbar-brand">AjaxCrud</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/blog">Home</a></li>
					<li><a href="#"></a></li>
				</ul>
				<form action="" class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"></a></li>
				</ul>
			</div> <!-- /.navbar-collapse -->
		</div> <!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below) or include individual files as yo needed -->
	<script src=" {{ asset('/js/bootstrap.min.js') }} "></script>
</body>
</html>