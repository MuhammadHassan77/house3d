<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<style>
		.claraplayer span,
		.claraplayer svg {
			display: none !important;
		}

		.canvas-div {
			position: absolute;
			top: 0px;
			width: 100%;
			left: 0px;
		}
	</style>
</head>

<body>


	<!--  start-logo -->
	<nav class="navbar nav-style navbar-light m-0 p-0">
		<a class="navbar-brand p-0 m-0" href="#">
			<img src="img/logo.png" class="img-fluid logo">
		</a>
	</nav>
	<!-- end-logo -->

	<!-- start-canvas -->
	<div class="canvas-div">
		<div id="clara-embed" style="width: 100%; height: 100vh;"></div>
		<script src="./js/claraplayer.min.js"></script>
		<script>
			let clara = claraplayer('clara-embed');

			clara.on('loaded', function() {
				console.log('Clara player is loaded and ready');
			});

			// Fetch and initialize the sceneId
			// var model_id = 'f05ea1d3-658b-43c8-8fa4-ff9d54063236';
			var model_id = 'e6fc8298-5043-4648-af57-8ebae02e7649';

			// 6147cb25-e665-4558-923b-e98343f138aa
			// 2cc37870-b043-427c-841a-1ba02fad42ff
			// e63cab5d-b380-48ce-bd52-945a6d9f6f2d
			// 49ed2f42-d91e-4fd3-8907-75bda2ebb7a1
			// 7ac154f5-6e2b-4bef-a92a-7908834ed74e
			// f05ea1d3-658b-43c8-8fa4-ff9d54063236
			// 85e0cca7-3354-4eb1-ba48-94d44a0b18e4

			clara.sceneIO.fetchAndUse(model_id);
		</script>
	</div>
	<!-- end-canvas -->

	<!-- start-add-to-cart-btn -->
	<section>
		<div class="reset-btn">
			<i class="fas fa-redo-alt"></i>
			<span class="txt">RESET BUILDING</span>
		</div>

		<div class="cart-btn">
			<h4><sup>$</sup>1000.00</h4>
			<button type="button" class="btn theme-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD
				CART</button>
		</div>
	</section>

	<!-- end-add-to-cart-btn -->

	<input type="hidden" name="" class="model_id" value="6147cb25-e665-4558-923b-e98343f138aa">

	<!-- main end / footer start -->
	<footer class="nav-main top-fixed m-0 footer 	">
		<ul type="none" class="d-flex justify-content-center m-0 p-0">
			<li class="li-item first-tab-btn">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500
					500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
					<path d="M45,392.5c2.9-2.2,5.5-4.9,8.7-6.4c11.8-5.5,23.7-10.8,35.7-15.9c2.7-1.2,3.6-2.6,3.6-5.6c-0.1-56,0-112-0.2-168.1
						c0-6.1,2.2-9.5,7.8-11.9c45.7-19.5,91.3-39.2,137-58.8c3.1-1.3,4-3,3.9-6.2c-0.1-17.6-0.1-35.1-0.1-52.7c0-5.6,2.7-8.9,7.3-9.3
						c5.3-0.4,8.7,3.1,8.7,9.5c0,17.2,0.2,34.3-0.1,51.5c-0.1,4.3,1.4,6.1,5.2,7.7c45.3,19.3,90.6,38.9,135.9,58.3
						c5.4,2.3,7.6,5.7,7.6,11.5c-0.1,56-0.1,112-0.1,168.1c0,3.1,0.7,4.7,3.7,5.9c12.7,5.4,25.3,11.1,37.9,16.7c4.7,2.1,6.8,5.4,6.1,9.2
						c-1,5.4-6.1,8.1-11.6,5.8c-6.3-2.6-12.4-5.4-18.6-8.2c-7.3-3.2-14.6-6.4-21.8-9.8c-2.7-1.3-4.8-1.2-7.5,0
						c-46.2,20-92.5,39.8-138.7,59.8c-4.1,1.8-7.7,1.8-11.8,0c-46.1-19.9-92.3-39.7-138.4-59.6c-2.9-1.3-5.3-1.4-8.2,0
						c-12.5,5.8-25.2,11.3-37.8,16.9c-7.2,3.2-9.8,2.5-14.1-3.8C45,395.7,45,394.1,45,392.5z
						M120.9,373.7
						c40.6,17.4,80.4,34.6,120.4,51.8c0.1-1.1,0.2-1.6,0.2-2.1c0-52.7,0-105.3,0.1-158c0-2.9-1.6-3.5-3.6-4.4
						c-41.6-17.9-83.2-35.8-124.8-53.6c-1.3-0.6-2.6-1-4-1.5c0,51.9,0,103.6,0,155.6c6.6-2.9,12.7-5.7,18.9-8.4c4.3-1.9,8.5-3.9,12.8-5.5
						c4-1.5,8,0.4,9.8,4c1.8,3.7,0.4,8-3.4,10.3c-1.5,0.9-3.1,1.5-4.7,2.2C135.6,367.1,128.6,370.2,120.9,373.7z
						M389.8,205.7
						c-1.1,0.4-1.9,0.6-2.6,1c-42.3,18.2-84.6,36.4-127,54.6c-2.5,1.1-2.8,2.5-2.8,4.8c0.1,51.9,0,103.7,0,155.6c0,1.1,0.1,2.2,0.2,3.8
						c40.1-17.3,79.9-34.4,120.2-51.7c-1.7-0.8-2.9-1.4-4.1-2c-7.1-3.2-14.4-6.3-21.4-9.6c-4.5-2.1-6-6.6-4.2-10.7
						c1.8-3.9,6-5.5,10.5-3.8c3,1.1,5.9,2.5,8.8,3.8c7.4,3.3,14.7,6.5,22.4,9.9C389.8,309.3,389.8,257.7,389.8,205.7z
						M121.3,193.2
						c1.8,0.8,2.8,1.4,3.9,1.8c40,17.2,80.1,34.4,120.1,51.7c2.9,1.3,5.3,1.3,8.3,0c36.6-15.9,73.2-31.6,109.8-47.3
						c4.6-2,9.1-3.9,14.4-6.2c-40.4-17.4-80.2-34.5-120.3-51.7c0,6.7,0.1,12.8,0,19c-0.1,6-4.1,9.4-9.5,8.5c-4-0.7-6.4-3.9-6.4-8.8
						c-0.1-6,0-12.1,0-18.6C201.2,158.9,161.6,175.9,121.3,193.2z" />
					<path d="M172.6,349.6c-4.3-0.1-7.9-3.7-7.8-7.9c0.1-4.3,3.7-7.8,8-7.7c4.3,0.1,7.9,3.7,7.8,7.9C180.6,346.2,177,349.7,172.6,349.6z" />
					<path d="M334,342c-0.1,4.3-3.7,7.7-8.1,7.7c-4.3-0.1-7.9-3.7-7.8-8c0.1-4.3,3.7-7.7,8.1-7.7C330.5,334.1,334.1,337.7,334,342z" />
					<path d="M257.3,193.3c0,4.3-3.6,7.8-7.9,7.8c-4.4,0-7.9-3.5-8-7.8c0-4.3,3.6-7.8,7.9-7.8C253.7,185.5,257.3,189,257.3,193.3z" />
				</svg>
				<p>Models</p>
			</li>

			<li class="li-item sec-tab-btn">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
					<path d="M109.4,47.6c22.6,0,45.2,0.3,67.8-0.1c9.3-0.2,20.4,10.2,20.6,18.8c0.3,13.9,0.7,27.8,0.8,41.6c0.1,4.7-0.3,9.4-0.7,14.2
						c-0.5,6.9-4.1,12-9.7,15.9c-3.8,2.6-7.8,4-12.7,3.9c-40.9-0.2-81.8-0.2-122.8-0.3c-5.3,0-10.6-0.5-15.8-0.8
						c-4.2-0.3-7.6-2.3-10.3-5.4c-4.2-4.7-6.9-9.7-6.7-16.5c0.6-15.9,0.7-31.8,0.5-47.6c-0.1-10.9,4.4-18.5,14.5-22.6
						c1.4-0.6,3.1-1,4.6-1C62.9,47.6,86.2,47.6,109.4,47.6z M109.1,127.1c0,0.1,0,0.1,0,0.2c5.4,0,10.8,0,16.2,0
						c16.9-0.1,33.8-0.2,50.7-0.5c7.4-0.2,7.5-0.5,7.5-7.9c0.1-16.2,0-32.3,0-48.5c0-1.3-0.2-2.6-0.3-4c-0.2-2.2-1.2-3.4-3.6-3.5
						c-3-0.1-6-0.4-9.1-0.5c-15.4-0.1-30.8-0.3-46.2-0.2c-26.6,0-53.3,0.1-79.9,0.3c-9.2,0.1-9.3,0.3-9.4,9.4c-0.1,15.2,0,30.4,0,45.6
						c0,1.8,0.3,3.6,0.4,5.4c0.1,2.4,1.2,3.6,3.7,3.7c4,0.1,7.9,0.5,11.9,0.5C70.4,127.1,89.7,127.1,109.1,127.1z" />
					<path d="M291.4,48.1c20.3,0,40.6,0,61,0c1.6,0,3.2,0.1,4.8,0.3c10.8,1.2,17.7,7.5,18.3,18.4c0.7,13.7,0.5,27.4,0.6,41.1
						c0,5.5-0.6,10.9-0.6,16.4c0,6.8-9.5,16.4-16.1,16.5c-11.2,0.2-22.5,0.9-33.7,0.9c-30.8,0-61.6-0.2-92.4-0.3c-1.7,0-3.4-0.3-5.1-0.2
						c-11.8,0.4-20.3-10.5-20.2-20.5c0.2-17.6,0.3-35.2,0.1-52.7c-0.1-9.6,9.3-20.1,20.7-19.9C249.6,48.4,270.5,48.1,291.4,48.1
						C291.4,48.1,291.4,48.1,291.4,48.1z M292.2,127.1c0,0.1,0,0.1,0,0.2c12.6,0,25.1,0.1,37.7,0c8.8-0.1,17.6-0.2,26.3-0.5
						c4.1-0.2,4.9-1,4.9-5c0.2-17.2,0.2-34.4,0.2-51.6c0-1.2-0.2-2.4-0.2-3.7c-0.1-2.2-1.2-3.5-3.5-3.5c-3.5-0.1-7-0.5-10.5-0.5
						c-30-0.1-60.1-0.2-90.1-0.2c-9.5,0-19.1,0.2-28.6,0.5c-5.3,0.2-5.6,0.6-5.7,5.8c-0.2,16.2-0.2,32.5-0.2,48.7c0,1.6,0.2,3.2,0.3,4.8
						c0.1,2.8,1.4,4.4,4.3,4.4c3.3,0.1,6.6,0.4,9.9,0.4C255.3,127.1,273.7,127.1,292.2,127.1z" />
					<path d="M106.1,347.1c-17.8,0-35.5,0.1-53.3,0c-5.6,0-11.1-0.6-16.7-1c-3.7-0.3-6.8-2.1-9.1-4.7c-4.1-4.7-7.1-9.6-6.9-16.4
						c0.5-17.7,0.3-35.3,0.3-53c0-7.2,8.6-17.4,15.9-17.8c11.5-0.7,23-0.9,34.6-0.9c32.4,0,64.8,0.2,97.3,0.4c13,0.1,21.9,8.6,22.1,21.7
						c0.2,17.8,0,35.5-0.4,53.3c-0.2,9-9.4,17.7-18.5,17.9c-21.7,0.5-43.5,0.6-65.2,0.9C106.1,347.3,106.1,347.2,106.1,347.1z
						M105.9,267.6c0,0.1,0,0.3,0,0.4c-20.9,0-41.8-0.1-62.7,0c-7.8,0.1-8,0.3-8.1,8.3c-0.1,15.6-0.2,31.2,0,46.8
						c0.1,8.9,0.3,9.1,9.3,9.2c41.7,0.2,83.4,0.2,125,0.5c4.9,0,5.5-1.7,6.2-5.7c0.1-0.9,0.2-1.9,0.2-2.8c0.1-14.7,0.1-29.5,0.1-44.2
						c0-2.7-0.1-5.5-0.5-8.2c-0.5-3.3-1.7-4.2-5.1-4.2C148.8,267.6,127.3,267.6,105.9,267.6z" />
					<path d="M283.1,347.6c-21.8-0.4-42.9-0.9-64.1-0.9c-7.9,0-13.4-3.5-17.4-9.7c-1.7-2.7-3-6.3-3-9.5c-0.4-17.7-0.3-35.3-0.4-53
						c0-8.2,4.3-13.8,10.8-18.1c3.4-2.3,7.1-3.4,11.4-3.4c41.6,0.1,83.2,0.1,124.8,0.1c10.4,0,20.1,8.5,20.9,18.9
						c0.6,7,0.7,14.2,0.7,21.2c0.1,11.4-0.3,22.9-0.1,34.3c0,3.5-1.4,6.2-3.1,8.8c-4.2,6.4-9.5,10.4-17.9,10.4
						C324.7,346.7,303.6,347.3,283.1,347.6z M281.6,332.8C281.6,332.8,281.6,332.8,281.6,332.8c12,0,24,0,36,0c9.6-0.1,19.3-0.2,28.9-0.5
						c4.6-0.1,5-0.5,5.1-4.9c0.2-17.9,0.3-35.7,0.2-53.6c0-4.9-0.7-5.5-5.8-5.5c-19.7-0.3-39.5-0.5-59.2-0.5c-21.9,0-43.8,0.1-65.8,0.4
						c-7.7,0.1-8.4,1-8.5,8.6c-0.1,15.5,0,31,0,46.5c0,1.8,0.2,3.6,0.5,5.4c0.6,3.4,1.7,4.3,5.1,4.3C239.2,332.8,260.4,332.8,281.6,332.8
						z" />
					<path d="M212.3,151.4c21.2,0,42.3,0.3,63.5-0.1c8.6-0.2,19.2,10.7,19.1,18.8c-0.2,18.3,0.2,36.7,0.1,55c0,7.4-4.6,12.4-10.2,16.5
						c-3.4,2.5-7.1,3.6-11.6,3.6c-41.4-0.2-82.8-0.2-124.2,0c-6.8,0-20.1-8.9-20.3-18.4c-0.3-19.4-0.2-38.7,0.3-58.1
						c0.2-8.8,9.1-16.9,18-17.1c15.9-0.4,31.8-0.5,47.6-0.6c5.9-0.1,11.7,0,17.6,0C212.3,151,212.3,151.2,212.3,151.4z M212,165.3
						c-20.4,0-40.8,0.1-61.2,0c-5.9,0-7-0.4-7.8,7.3c-0.1,0.9-0.1,1.9-0.1,2.8c0,14.9-0.1,29.9,0,44.8c0.1,9.2,0.7,9.9,9.9,9.9
						c33.2,0.2,66.3,0.2,99.5,0.2c7.4,0,14.7-0.1,22.1-0.4c5.3-0.3,6.3-1.2,6.3-6.6c0.1-17.2,0-34.4,0-51.6c0-0.8-0.1-1.5-0.3-2.2
						c-0.7-3.3-1.8-4.2-5.1-4.2C254.1,165.3,233,165.3,212,165.3z" />
					<path d="M390.9,451c-20.2,0-40.4,0-60.7,0c-2,0-4-0.3-5.9-0.2c-7.6,0.3-12.8-3.6-17-9.4c-2.6-3.6-3.2-7.7-3.2-11.8
						c0-18.1,0-36.3,0.4-54.4c0.2-7.8,9.6-16.9,17.4-17.2c8.5-0.4,17-0.5,25.5-0.6c31.8,0,63.5,0,95.3,0.2c4.7,0,9.5,0.3,14.1,0.9
						c7.6,1,14.5,8,15.4,15.6c0.5,3.9,0.7,7.9,0.7,11.9c0.1,14.6-0.2,29.3,0.2,43.9c0.2,7.4-3.4,12.3-8.3,16.8c-3.4,3.1-7.4,4.5-12.3,4.5
						C431.9,450.7,411.4,450.9,390.9,451C390.9,450.9,390.9,451,390.9,451z M388.6,436.7c0-0.1,0-0.3,0-0.4c21.2,0,42.3,0.1,63.5,0
						c5.5,0,5.9-0.6,6-6.2c0.2-14.6,0.2-29.1,0.3-43.7c0-3.3-0.2-6.6-0.4-9.9c-0.1-2.5-1.2-4.1-4-4.1c-2.1,0-4.1-0.3-6.2-0.3
						c-18.7-0.2-37.4-0.4-56.1-0.4c-21.7,0-43.5,0.2-65.2,0.4c-7.3,0.1-7.9,0.5-8,7.7c-0.2,15.3-0.2,30.6-0.2,45.9c0,2.1,0.2,4.2,0.3,6.2
						c0.1,2.7,1.5,4.1,4.3,4.2c3.5,0.1,7,0.5,10.5,0.5C351.8,436.7,370.2,436.7,388.6,436.7z" />
					<path d="M390.6,151.3c21.3,0,42.5,0.1,63.8-0.1c6.1,0,10,3.5,13.6,7.6c3.4,3.9,5.2,8.3,5.1,13.9c-0.4,17.5-0.1,35-0.1,52.4
						c0,8.6-7.9,18-16.6,18.8c-9,0.8-18.1,1.1-27.2,1.1c-33.1,0-66.1-0.3-99.2-0.4c-2.3,0-4.5-0.5-6.8-0.5c-6.7,0-15.9-9.5-16-15.9
						c-0.1-3.4-0.6-6.8-0.6-10.2c0-14.3,0-28.5,0.1-42.8c0-1.6,0.2-3.2,0.3-4.8c0.2-8.5,5.4-13.6,12.2-17.4c1.6-0.9,3.8-1.3,5.7-1.4
						c16.7-0.2,33.4-0.3,50.2-0.5c5.2,0,10.4,0,15.6,0C390.6,151.1,390.6,151.2,390.6,151.3z M390.3,165.7c0-0.1,0-0.2,0-0.3
						c-12.2,0-24.4-0.1-36.6,0c-9.1,0.1-18.1,0.2-27.2,0.5c-4.2,0.1-5,1-5.1,5.1c-0.2,17.1-0.2,34.2-0.3,51.3c0,1.3,0.2,2.6,0.3,4
						c0.2,2.1,1.3,3.3,3.5,3.4c2.3,0.2,4.5,0.5,6.8,0.5c31.9,0.1,63.9,0.2,95.8,0.2c8.9,0,17.8-0.4,26.6-0.6c2.5,0,3.6-1.2,3.8-3.6
						c0.1-1.1,0.2-2.3,0.2-3.4c0.1-13.8,0.2-27.6,0.2-41.4c0-3.9-0.3-7.7-0.4-11.6c-0.1-2.5-1.3-3.8-3.9-3.8c-2,0-4-0.3-5.9-0.3
						C428.8,165.7,409.5,165.7,390.3,165.7z" />
					<path d="M210.9,451.8c-21.6-0.4-43.7-0.8-65.8-1.4c-2.6-0.1-5.7-1.2-7.7-2.8c-6.1-4.7-10.1-10.4-9.9-18.9c0.4-15.9,0.3-31.8,0-47.6
						c-0.2-12,6.3-18.8,16.3-23.4c0.9-0.4,2-0.4,3-0.4c43,0,86,0,129,0c1.5,0,3.2,0.5,4.6,1.1c9.7,4.5,15.2,11.6,15,22.8
						c-0.3,16.6-0.3,33.3-0.4,49.9c0,8.8-5.3,14.2-12.3,18.3c-1.4,0.8-3.4,1-5.2,1.1C255.4,450.9,233.4,451.4,210.9,451.8z M211.1,436.8
						c21.1,0,42.2-0.1,63.2,0.1c4.4,0,6-0.4,6.1-5.7c0.3-17.9,0.2-35.9,0.1-53.9c0-3.6-1.3-4.6-4.8-5.1c-1-0.1-2.1-0.2-3.1-0.2
						c-40.5,0-80.9,0-121.4,0c-8.6,0-8.9,0.4-9,8.9c-0.1,15.9-0.1,31.8-0.1,47.6c0,1.4,0.2,2.8,0.4,4.2c0.4,2.7,1.7,4,4.8,3.9
						C168.6,436.7,189.8,436.8,211.1,436.8z" />
					<path d="M67.8,151.3c9.9,0,19.8,0.1,29.7,0c9.2-0.1,19.3,9.6,19.2,19.4c-0.3,18.4-0.2,36.8-0.1,55.2c0,9.1-9.8,18.5-18.5,18.5
						c-19.6,0-39.3,0.1-58.9-0.1c-6.2,0-11-3.1-14.5-8.1c-3-4.1-4.8-8.4-4.6-13.8c0.5-16.1,0.7-32.3,0.5-48.5
						c-0.1-11.4,5.3-18.5,15.4-22.6c1.1-0.4,2.4-0.6,3.6-0.6c9.4,0,18.9,0,28.3,0C67.8,151,67.8,151.2,67.8,151.3z M68.6,230.2
						C68.6,230.2,68.6,230.2,68.6,230.2c9.3-0.1,18.5,0,27.8-0.1c4.8-0.1,5.7-1.1,6-5.9c0-0.7,0.1-1.3,0.1-2c0-16.1,0.1-32.1,0-48.2
						c-0.1-7.8-0.6-8.4-8.5-8.4c-16.9-0.1-33.8-0.1-50.8,0c-7.5,0-8,0.5-8.1,8.1c-0.2,16.1-0.1,32.1,0,48.2c0,1.5,0.3,3,0.4,4.5
						c0.1,2.1,1.2,3.3,3.4,3.4c1.5,0.1,3,0.4,4.5,0.4C51.8,230.3,60.2,230.2,68.6,230.2z" />
					<path d="M67.5,451.4c-8.2,0-16.5-0.4-24.7,0.1c-5.5,0.3-10-1.5-14.1-4.7c-4.8-3.7-8-8.6-8.1-14.9c-0.1-19.1-0.2-38.2-0.2-57.3
						c0-0.9,0.3-1.9,0.7-2.7c4.2-9,10.7-14.6,21.3-14.4c18.5,0.2,37,0.3,55.5,0.2c8.7-0.1,18.9,9.6,18.8,18.9c-0.2,18.5-0.2,37,0,55.5
						c0.1,8.9-9.4,18.6-17.5,18.5c-0.8,0-1.7,0.2-2.5,0.2c-9.7,0-19.5,0-29.2,0C67.5,451.1,67.5,451.2,67.5,451.4z M68.5,372.1
						c0,0,0-0.1,0-0.1c-8.1,0-16.3-0.1-24.4,0c-8.8,0.2-9,0.3-9.1,9.2c-0.1,15.4-0.1,30.8,0,46.2c0,1.8,0.3,3.6,0.4,5.4
						c0.1,2.3,1.3,3.4,3.6,3.5c1,0,2.1,0.3,3.1,0.3c17.9,0,35.7,0.1,53.6,0c5.7,0,6.6-1.1,6.7-6.8c0.1-17.1,0.1-34.2,0-51.3
						c0-5.3-1.1-6.3-6.4-6.4C86.9,372,77.7,372.1,68.5,372.1z" />
					<path d="M427,346.6c-10.8,0-21.5-0.1-32.3,0c-8.2,0.1-18-9.5-18-17.1c0-5.8-0.6-11.7-0.6-17.5c0-12.3,0.3-24.6,0.2-36.8
							c0-7.8,3.1-13.8,9.4-18.3c2.9-2,5.9-3.4,9.4-3.4c19.4,0,38.7,0.1,58.1,0c9.7-0.1,19.5,9.7,19.2,19c-0.2,5.7,0.3,11.3,0.4,17
							c0.1,12.2,0,24.4,0,36.6c0,8.4-6.5,17.7-14.5,20.4c-0.8,0.3-1.7,0.3-2.5,0.3c-9.6,0-19.3,0-28.9,0C427,346.7,427,346.7,427,346.6z
							M424.6,332.4c0,0.1,0,0.3,0,0.4c4.3,0,8.5,0.1,12.8,0c5.4-0.1,10.8-0.3,16.1-0.4c2.8-0.1,4.4-1.4,4.5-4.3c0-1,0.2-2.1,0.2-3.1
							c0-16.2,0.1-32.5,0-48.7c-0.1-7.9-0.3-8.2-8.2-8.3c-13.4-0.2-26.8-0.2-40.2-0.2c-4.5,0-9.1,0.1-13.6,0.4c-4,0.3-5,1-5,5
							c-0.1,18-0.2,36.1-0.1,54.1c0,4.6,0.8,5.1,5.5,5.2C405.9,332.5,415.3,332.4,424.6,332.4z" />
					<path d="M385.6,94.7c0-8.7,0.2-17.4-0.1-26.1c-0.1-3.7,0.8-6.8,2.8-9.8c4.4-6.6,9.7-10.9,18.3-10.9c16.3,0.1,32.7-0.5,49-0.1
						c5.3,0.1,9.4,4.1,12.7,8.2c3.3,4,4.9,8.5,4.7,14c-0.4,14.3-0.1,28.5-0.2,42.8c0,2.9-0.3,5.9-0.3,8.8c0,6-2.4,10.7-6.8,14.6
						c-3.1,2.8-6.5,4.8-10.6,4.8c-17.1,0.1-34.2,0.2-51.3,0c-5.5-0.1-9.8-3.2-13.2-7.4c-3.4-4.1-5.6-8.4-5.2-14.1
						C385.9,111.3,385.6,103,385.6,94.7z M458.1,94.9c0.1,0,0.2,0,0.4,0c0-1.5,0-3,0-4.5c-0.1-7.6-0.2-15.1-0.4-22.7
						c-0.1-4.1-1-4.8-5.1-5.2c-0.7-0.1-1.3-0.1-2-0.1c-14,0-28-0.1-41.9,0c-8.4,0.1-8.6,0.3-8.7,8.6c-0.1,15.3-0.1,30.6-0.1,45.9
						c0,2.3,0,4.6,0.6,6.7c0.3,1.1,1.7,2.2,2.9,2.9c0.9,0.5,2.2,0.5,3.3,0.5c15,0,30,0.1,45,0c5.2,0,6-0.9,6.1-6.3
						C458.2,112.1,458.1,103.5,458.1,94.9z" />
				</svg>
				<p>Material</p>
			</li>

			<li class="li-item third-tab-btn">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
					<path d="M249.6,268.6c-8.9,0-17.3-2-25.2-6.1c-43.6-23-87.2-46-130.9-69c-5.3-2.8-8.4-7.2-8.3-13.2c0-5.9,3.1-10.1,8.3-12.8
						c43.5-22.8,86.8-45.6,130.4-68.3c16.9-8.8,34.3-8.9,51.1-0.1c43.7,22.8,87.3,45.9,130.9,68.9c5.2,2.7,8.1,7.1,8.1,13
						c0,5.9-2.9,10.2-8.1,12.9c-43.8,22.9-87.5,45.9-131.3,68.8C266.7,266.8,258.4,268.6,249.6,268.6z M249.7,248.6
						c5.8-1.9,11.7-3,16.7-5.6c25.8-13.2,51.4-26.7,77-40.2c11.4-6,22.8-11.9,34.1-18c1.4-0.8,2.9-2.6,3-4.1c0.1-1.2-1.8-2.6-2.9-3.8
						c-0.4-0.4-1.1-0.6-1.6-0.9c-36.4-19.2-72.9-38.4-109.3-57.6c-11.5-6.1-22.9-6-34.4,0c-36.7,19.2-73.4,38.5-110,57.8
						c-1.6,0.9-3.6,2.8-3.7,4.4c-0.1,1.3,2,3.3,3.6,4.1c36.9,19.6,73.9,39.2,111,58.5C238.1,245.8,243.9,246.8,249.7,248.6z" />
					<path d="M249.7,339c-8.8,0-17.1-1.9-24.9-5.8c-45.1-22.6-90.1-45.2-135.2-67.9c-5.6-2.8-7.9-7-6.9-12.3c1.3-6.7,8.7-10.2,15.3-7
						c10.1,4.9,20.1,10,30.1,15.1c34.9,17.5,69.8,35,104.7,52.6c11.2,5.7,22.3,5.7,33.4,0.2c24.5-12.2,48.9-24.4,73.3-36.6
						c20.4-10.2,40.8-20.4,61.3-30.6c5.9-3,12-1.2,14.8,4.2c2.9,5.6,0.7,11.5-5.5,14.6c-45.3,22.7-90.6,45.4-135.9,68
						C266.6,337.2,258.4,339.2,249.7,339z" />
					<path d="M249,406.3c-7.8-0.2-15.9-2-23.6-5.7c-45.2-21.7-90.5-43.3-135.7-65c-6.3-3-8.7-8.8-6.1-14.4c2.6-5.7,8.7-7.6,15.3-4.4
						c44.3,21.1,88.5,42.2,132.7,63.5c12,5.8,23.4,6.3,35.5,0.4c44.3-21.3,88.8-42.3,133.1-63.5c4.4-2.1,8.6-2.6,12.6,0.5
						c3.4,2.6,4.5,6.2,3.7,10.4c-0.8,4.3-3.8,6.5-7.4,8.3c-24.2,11.5-48.5,23-72.7,34.5c-20.4,9.7-40.8,19.4-61.2,29.1
						C267.2,404,258.7,406.3,249,406.3z" />
				</svg>
				<p>Stories</p>
			</li>

			<li class="li-item four-tab-btn">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
					<path d="M183.5,274.3c1.7-23.5,11.9-35.7,29.6-35.9c9.4-0.1,17.2,3.5,23.4,10.6c4.9,5.6,5.8,9,7.4,25.3c4.9,0,9.8,0,14.8,0
						c4.8,0,9.7,0,14.9,0c0-9.2,0-18,0-26.8c0-3-0.1-6,0-9c0.2-3.8,2.4-6,6.2-6.1c4-0.1,8,0,12-0.1c10-0.2,17.8-8.2,17.8-18
						c0-9.8-7.8-17.7-17.8-17.9c-3.6-0.1-7.2,0-10.9,0c-5.1-0.1-7.2-2.2-7.2-7.4c0-13,0-26,0-38.9c0-5.6,2.1-7.6,7.7-7.6
						c30.6,0,61.1,0,91.7,0c12.2,0,24.4,0,36.7,0c5.6,0,7.7,2,7.7,7.7c0,86.7,0,173.4,0,260.1c0,5.6-2,7.7-7.6,7.7
						c-86.7,0-173.4,0-260.1,0c-5.8,0-7.8-2-7.8-7.9c0-42.7,0-85.3,0-128c0-5.9,2-7.8,7.9-7.8C160.9,274.3,172.1,274.3,183.5,274.3z
						M285.6,184.5c9-0.6,17.3,0.7,24.3,6.3c7.1,5.7,11,13.1,11.5,22.2c0.4,7.5-1.9,14.3-6.6,20.2c-7.5,9.3-17.6,12-29,11.1
						c0,10.3,0,20,0,30c11.7,0,23.2,0,34.7,0c4.7,0,6.9,2.2,7,6.8c0.1,3.7,0,7.5,0,11.2c0.2,10,8.1,17.8,17.9,17.8
						c9.8,0,17.7-7.8,18-17.8c0.1-3.7,0-7.5,0-11.2c0.1-4.7,2.3-6.9,6.9-6.9c8-0.1,16,0,24,0c3.6,0,7.2,0,10.8,0c0-40.2,0-79.9,0-119.5
						c-40,0-79.7,0-119.4,0C285.6,164.7,285.6,174.3,285.6,184.5z M154,286.3c0,40.2,0,79.9,0,119.6c39.9,0,79.5,0,119.3,0
						c0-10,0-19.7,0-29.8c-8.9,0.5-17.1-0.7-24.2-6.3c-7-5.6-10.9-12.9-11.5-21.8c-0.5-7.5,1.7-14.3,6.4-20.2
						c7.5-9.5,17.7-12.2,29.2-11.5c0-10.2,0-20,0-29.9c-11.7,0-23.2,0-34.7,0c-4.7,0-6.9-2.2-6.9-6.9c-0.1-3.9,0.1-7.7-0.1-11.6
						c-0.3-9.8-8.3-17.4-17.9-17.4c-9.7,0-17.6,7.7-17.9,17.4c-0.1,3.5,0,7,0,10.5c0,6.1-2,8-8.1,8C176.5,286.3,165.4,286.3,154,286.3z
						M405,405.9c0-40,0-79.7,0-119.6c-9.5,0-18.7,0-27.9,0c-0.5,0-0.9,0.1-1.8,0.2c0.6,9-0.8,17.5-6.7,24.6c-6,7.2-13.8,11-23.2,11
						c-7.4,0-14-2.5-19.5-7.3c-8.6-7.5-11.2-17.3-10.3-28.4c-10.2,0-20,0-30,0c0,1.6,0,2.9,0,4.3c0,10.1,0,20.2,0,30.3
						c0,4.9-2.2,7-7.1,7.1c-3.5,0-7,0-10.5,0c-10.3,0.1-18.2,7.9-18.3,17.8c-0.1,10.1,7.9,18,18.4,18.1c3.4,0,6.7,0,10.1,0
						c5.2,0,7.3,2.1,7.4,7.2c0,2.9,0,5.7,0,8.6c0,8.6,0,17.2,0,25.9C325.5,405.9,365.1,405.9,405,405.9z" />
					<path d="M225.6,124.6c11.4-0.8,21.2,1.7,28.7,10.4c5.1,5.9,7.5,12.9,7.2,20.7c-0.5,17.5-13.1,27.8-35.9,28.9c0,1.3,0,2.6,0,3.9
						c0,10,0,20,0,29.9c0,5.9-2,7.9-7.8,8c-12.8,0-25.7,0-38.5,0c-5.5,0-7.6-2.1-7.6-7.8c0-3.5,0.1-7,0-10.5c-0.3-10-8.2-17.7-18-17.7
						c-9.8,0-17.6,7.9-17.8,17.9c-0.1,3.7,0,7.5,0,11.2c-0.1,4.4-2.3,6.8-6.7,6.8c-13.5,0.1-26.9,0.1-40.4,0c-4.8,0-6.8-2.4-6.8-7.8
						c0-35.8,0-71.6,0-107.4c0-7,0-14,0-21c0-5.5,2.1-7.6,7.4-7.6c43,0,86.1,0,129.1,0c5.1,0,7.3,2.2,7.3,7.3
						C225.7,101.3,225.6,112.6,225.6,124.6z M213.6,94.8c-40.2,0-79.8,0-119.5,0c0,39.9,0,79.7,0,119.6c5.1,0,10,0,14.8,0
						c4.9,0,9.9,0,14.7,0c1.2-22.2,10.2-34.1,27.1-35.8c7.2-0.7,13.9,0.9,19.9,5.1c10.7,7.4,13.9,18.2,13.1,30.5c10.3,0,19.9,0,29.9,0
						c0-1.4,0-2.6,0-3.9c0-10.2,0-20.5,0-30.7c0-4.9,2.2-7.1,7.1-7.1c3.9-0.1,7.7,0.1,	.6-0.1c9.7-0.4,17.3-8.4,17.2-18.1
						c-0.1-9.5-7.7-17.4-17.2-17.7c-3.4-0.1-6.7,0-10.1,0c-6.8,0-8.6-1.7-8.6-8.7C213.6,116.9,213.6,105.9,213.6,94.8z" />
				</svg>
				<p>Addons</p>
			</li>

			<li class="li-item five-tab-btn">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
					<path d="M254.5,264.9c1.4-1.5,3.1-3.5,4.9-5.3c10.7-10.8,21.4-21.5,32.2-32.2c7-6.9,17.5-4.4,20.1,4.7c1.2,4.3,0.1,8.1-3,11.1
						c-15.5,15.7-31.1,31.3-46.8,46.8c-5,4.9-11.7,4.7-16.7-0.3c-7.7-7.5-15.3-15.1-22.9-22.9c-4.9-5-4.9-12.1-0.2-16.8
						c4.6-4.6,11.7-4.6,16.8,0.3c4.9,4.7,9.6,9.5,14.4,14.2C253.4,264.8,253.6,264.8,254.5,264.9z" />
					<path d="M269.5,116c-31.3,24-62.2,47.7-93.1,71.4c-17.4,13.3-34.8,26.6-52.1,40c-5.7,4.4-11.7,7.5-17,0.4c-5-6.7-0.4-11.4,4.9-15.5
						c49.2-37.8,98.5-75.4,147.5-113.5c7.5-5.8,13.3-5.3,20.4,0.3c19.7,15.6,39.7,30.7,62.2,48c0-9.5,0-16.5,0-23.5
						c0-6.9,1.9-13.1,9.9-13.1c8-0.1,10,6,9.7,13c0,0.4,0.1,0.7,0,1.1c-6.4,29.1,6.8,47.8,31.1,62c12.2,7.1,22.7,17.1,34,25.7
						c5.4,4.1,9.8,8.9,5,15.5c-5.3,7.3-11.3,4.1-17-0.3c-45.1-34.7-90.3-69.4-135.4-104C276.4,121,273.2,118.7,269.5,116z" />
					<path d="M371.9,346.6c0-29.1,0-57.6,0-86c0-4.4-1.2-9.3,0.4-13c1.6-4,5.8-6.9,8.9-10.2c3.2,3.3,8.6,6.2,9.2,9.9
						c1.4,8.5,0.5,17.4,0.5,26.2c0,26.3-0.2,52.6,0.1,78.8c0.1,10.1-3.7,14.4-14.2,14.4c-71.5-0.3-143.1-0.3-214.6,0
						c-10.5,0-14.4-4.2-14.3-14.3c0.2-33.6,0-67.2,0-100.7c0-6.9,0.8-14.2,9.9-14c9.1,0.1,9.3,7.4,9.2,14.3c-0.1,28.8,0.1,57.7-0.1,86.5
						c0,6.1,1.1,9.4,8.3,9.4c63.5-0.3,127-0.3,190.5-0.4C367.2,347.4,368.6,347.1,371.9,346.6z" />
				</svg>
				<p>Installation</p>
			</li>
		</ul>
	</footer>

	<!-- footer end / menus start -->

	<!-- start-1st-tab -->
	<div class="tabs-style all-tab first-tab">
		<aside class="btn-prnt">
			<button class="btn btn-primary d-block mb-2 w-100 size-btn theme-btn">Size</button>
			<button type="button" class="btn btn-primary menu-btn theme-btn w-100 ">Menu</button>
		</aside>
		<div class="first-menu ">
			<ul class="d-flex justify-content-center m-0 p-0 w-75 ">
				<li class="tabs-item selectModel" data-modelid="Model 1 S1">
					<img src="img/h1.png" class="img-fluid">
					<p>Model 1</p>
					<label class="box">
						<input type="radio" class="abc" value="7a0c946c-5406-43cc-b38f-31b279307a0b" id="r1" name="radio">
						<span class="checkmark"></span>
					</label>
					<p class="m-0 p-0">$1122</p>
				</li>
				<li class="tabs-item selectModel" data-modelid="Model 2 S1">
					<img src="img/h2.png" class="img-fluid">
					<p>Model 2</p>
					<label class="box">
						<input type="radio" checked="checked" class="abc" value="6147cb25-e665-4558-923b-e98343f138aa" id="r2" name="radio">
						<span class="checkmark"></span>
					</label>
					<p class="m-0 p-0">$1122</p>
				</li>
				<li class="tabs-item selectModel" data-modelid="Model 3 S1">
					<img src="img/h3.png" class="img-fluid">
					<p>Model 3</p>
					<label class="box">
						<input type="radio" checked="checked" name="radio">
						<span class="checkmark"></span>
					</label>
					<p class="m-0 p-0">$1122</p>
				</li>
			</ul>
		</div>
		<!-- start size meunu -->

		<div class="size-menu ">
			<ul class="d-flex justify-content-center m-0 p-0  w-75 ">
				<li class="tabs-item selectSize">
					<img src="img/s1.png" class="img-fluid">
					<p>8'x'10</p>
					<label class="box">
						<input type="radio" name="radio">
						<span class="checkmark"></span>
					</label>
					<p class="m-0 p-0">$1122</p>
				</li>
				<li class="tabs-item selectSize">
					<img src="img/s2.png" class="img-fluid">
					<p>8'x'10</p>
					<label class="box">
						<input type="radio" checked="checked" name="radio">
						<span class="checkmark"></span>
					</label>
					<p class="m-0 p-0">$1122</p>
				</li>
				<li class="tabs-item selectSize">
					<img src="img/s3.png" class="img-fluid">
					<p>8'x'10</p>
					<label class="box">
						<input type="radio" checked="checked" name="radio">
						<span class="checkmark"></span>
					</label>
					<p class="m-0 p-0">$1122</p>
				</li>
			</ul>
		</div>

		<div class="align-items-center d-flex justify-content-center m-0 p-0 text-center icons-prnt bg-inf">
			<span class="confirm-icon fmenu_cross"><i class="fas fa-times"></i></span>
			<span class="confirm-icon fmenu_tick"><i class="fas fa-check"></i></span>
		</div>
	</div>
	<!-- end-1st-tab -->

	<!-- start-color -->

	<!-- Color Menu  -->
	<div class="all-tab sec-tab" style="display: none;">

		<!-- select-part-tab  -->
		<div class="select-parts bg-white">
			<ul class="d-flex justify-content-center mx-auto p-0 w-75 ">
				<li class="tabs-item " data-partName="Wood-SPI" data-url="https://3dsium.com/portable-house/assets/walls&roof/2.jpg">
					<img src="img/h1.png" class="img-fluid">
					<p>interior</p>
					<label class="box">
						<input type="radio" checked="checked" class="abc" value="7a0c946c-5406-43cc-b38f-31b279307a0b" id="r1" name="radio">
						<span class="checkmark"></span>
					</label>
				</li>
				<li class="tabs-item " data-partName="Gypsum Wall Board">
					<img src="img/h2.png" class="img-fluid">
					<p>wall</p>
					<label class="box">
						<input type="radio" checked="checked" class="abc" value="6147cb25-e665-4558-923b-e98343f138aa" id="r2" name="radio">
						<span class="checkmark"></span>
					</label>
				</li>
				<li class="tabs-item " data-partName="structure, Wood Joist/Rafter Layer, Batt Insulation">
					<img src="img/h3.png" class="img-fluid">
					<p>roof</p>
					<label class="box">
						<input type="radio" checked="checked" name="radio">
						<span class="checkmark"></span>
					</label>
				</li>
			</ul>
			<div class="align-items-center d-flex justify-content-center m-0 p-0 text-center icons-prnt ">
				<span class="confirm-icon parts-cross"><i class="fas fa-times"></i></span>
				<span class="confirm-icon part-tick"><i class="fas fa-check"></i></span>
			</div>
		</div>
		<!-- end select-part -->
		<!-- start color-menu -->

		<div class="color-tab">
			<div class="tabs-style color_menu d-flex m-0 p-0 ">
				<div class=" col-8 d-flex colors_div">
					<div class="circle" data-color="199,21,133" style="background-color: mediumvioletred;"></div>
					<div class="circle" data-color="173,216,230" style="background-color: lightblue;"></div>
					<div class="circle" data-color="173,255,47" style="background-color: greenyellow;"></div>
					<div class="circle" data-color="0,255,255" style="background-color: aqua;"></div>
					<div class="circle" data-color="255,69,0" style="background-color: orangered;"></div>
					<div class="circle" data-color="0,0,0" style="background-color: black;"></div>
					<div class="circle" data-color="245,245,245" style="background-color: whitesmoke;"></div>
					<div class="circle" data-color="192,192,192" style="background-color: silver;"></div>
					<div class="circle" data-color="165,42,42" style="background-color: brown;"></div>
					<div class="circle" data-color="128,128,128" style="background-color: gray;"></div>
					<div class="circle" data-color="124,252,0" style="background-color: lawngreen;"></div>
					<div class="circle" data-color="255,218,185" style="background-color: peachpuff;"></div>
					<div class="circle" data-color="250,128,114" style="background-color: salmon;"></div>
					<div class="circle" data-color="240,230,140" style="background-color: khaki;"></div>
				</div>
				<div class="col-2 align-items-center d-flex justify-content-center m-0 p-0 text-center">
					<span class="confirm-icon clr_cross"><i class="fas fa-times"></i></span>
					<span class="confirm-icon clr_tick"><i class="fas fa-check"></i></span>
				</div>
			</div>
		</div>
	</div>
	<!-- end-color -->


	<!-- start-login-popup -->

	<div class="modal fade reg_modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content border-0" style=" background-color: transparent; border-radius: 40px;">
				<div class="form-div justify-content-center  mx-auto">
					<div class="model-cross" data-bs-dismiss="modal" aria-label="Close">
						<i class="fas fa-times text-white"></i>
					</div>
					<input type="checkbox" id="chk" aria-hidden="">

					<div class="signup">
						<form>
							<label class="form-label text-white" for="chk" aria-hidden="true">Sign up</label>
							<label class="form-label py-2 text-alert alert-danger error-message" style="font-size: 1.3vw; display:none;" for="chk" aria-hidden="true">This Is An ERROR MESSAGE</label>
							<input type="text" name="fname" placeholder="First name" required="" class="form-inp fname">
							<input type="text" name="lname" placeholder="Last Name" required="" class="form-inp lname">
							<input type="email" name="email" placeholder="Email" required="" class="form-inp email">
							<input type="password" name="pass" placeholder="Password" required="" class="form-inp pass">
							<input type="text" name="number" placeholder="03** *******" required="" class="form-inp phone">
							<!-- <button class="form-btn btn ">Sign up</button> -->
							<button class="btn-hover form-btn color-1 mx-auto signup-btn">Sign up</button>
						</form>
					</div>

					<div class="login">
						<form>
							<label class="form-label" for="chk" aria-hidden="true">Login</label>
							<input type="email" name="log_email" placeholder="Email" required="" class="form-inp log_email">
							<input type="password" name="log_pass" placeholder="Password" required="" class="form-inp log_pass">
							<button class="form-btn btn sub login-btn">Login</button>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- end-login-popup -->

	<!-- start-story-tab -->
	<div class="story-tab third-tab">

		<ul class="d-flex justify-content-center m-0 p-0  w-75">
			<li class="tabs-item">
				<img src="img/m1.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/m2.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/m3.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/m1.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/m3.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
		</ul>

		<div class="align-items-center d-flex justify-content-center m-0 p-0 text-center icons-prnt bg-inf">
			<span class="confirm-icon story-menu-cross"><i class="fas fa-times"></i></span>
			<span class="confirm-icon story-menu-tick"><i class="fas fa-check"></i></span>
		</div>
	</div>
	<!-- end-story-tab -->

	<!-- start-materal-tab -->
	<div class="add-tab four-tab">

		<ul class="d-flex justify-content-center m-0 p-0  w-75">
			<li class="tabs-item">
				<img src="img/a1.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/a2.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/a3.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/a1.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/a3.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
		</ul>

		<div class="align-items-center d-flex justify-content-center m-0 p-0 text-center icons-prnt bg-inf">
			<span class="confirm-icon ad-menu-cross"><i class="fas fa-times"></i></span>
			<span class="confirm-icon ad-menu-tick"><i class="fas fa-check"></i></span>
		</div>
	</div>
	<!-- end-materal-tab -->

	<!-- start-intallation-tab -->
	<div class="instal-tab five-tab">

		<ul class="d-flex justify-content-center m-0 p-0  w-75">
			<li class="tabs-item">
				<img src="img/chair1.jpg" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio" class="border-0">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/table1.png" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/chair2.jpg" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/table2.jpg" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
			<li class="tabs-item">
				<img src="img/table3.jpg" class="img-fluid">
				<p>8'x'10</p>
				<label class="box">
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<p class="m-0 p-0">$1122</p>
			</li>
		</ul>

		<div class="align-items-center d-flex justify-content-center m-0 p-0 text-center icons-prnt bg-inf">
			<span class="confirm-icon instal-menu-cross"><i class="fas fa-times"></i></span>
			<span class="confirm-icon ad-menu-tick"><i class="fas fa-check"></i></span>
		</div>
	</div>
	<!-- end-intallation-tab -->


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<script type="text/javascript" src="./js/myjs.js"></script>
	<script type="text/javascript" src="./js/func.js"></script>
	
</body>

</html>