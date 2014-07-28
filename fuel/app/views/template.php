<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style>
		body { margin: 50px; }
	</style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">ユーザ情報管理システム</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#Dashboard">Dashboard</a></li>
            <li><a href="#Dashboard">管理Dashboard</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class="container">
		<div class="col-md-12">
			<h1><?php echo $title; ?></h1>
			<hr>
			<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success">
					<strong>Success</strong>
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
					</p>
				</div>
			<?php endif; ?>
			<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-error">
					<strong>Error</strong>
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
					</p>
				</div>
			<?php endif; ?>
			<?php echo $content; ?>
			<hr>
			<footer>
				<div style="text-align: center; font-size: small;">
					<p>Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
					<h6>Copyright ©<?php echo date('Y'); ?> HIT ISMC Support Center All Rights Reserved.</h6>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>
