<?php include 'header.php'; ?>
<body>
	<?php include 'navbar.php'; ?>
	<section id="home">
		<div class="container">
			<div class="row">
					<div class="container-fluid px-0 top-banner">
					<div class="col-lg-5 col-md-6">
						<!-- <img top-banner src="./img/biriyani.jpeg" alt=""> -->
                        <h1>Good food choices are good investments</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolores consectetur fuga temporibus totam vitae!</p>
                        <!-- <div class="mt-4">
                            <button class="main-btn">Order-now <i class="fas fa-shopping-basket ps-3"></i></button>
                            <button class="white-btn ms-lg-4 mt-lg-0 mt-4" id=""><a href="#explore-food">Order Now</a> <i class="fas fa-angle-right ps-3"></i></button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
	</section>
	<section id="about">
		<div class="container food-type border border-primary">
			<div class="row ">
				<div class="about-section wrapper">
                    <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5 d-flex justify-content-center align-items-center" style="margin-top:21rem;">
                        <h2>We make everything by hand with the best possible ingredients</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo laboriosam, doloribus fugit possimus minus assumenda nemo incidunt voluptate fugiat veritatis.</p>
                        <ul class="list-unstyled py-3">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="card border-0">
                            <img src="img/img-2.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                </div>
            </div>       
        </div>
	</section>

	<section id="menu">
		<div class="container">
			<h1 class="page-header text-center">MENU</h1>
			<ul class="nav nav-tabs">
				<?php
				$sql = "select * from category order by categoryid asc limit 1";
				$fquery = $conn->query($sql);
				$frow = $fquery->fetch_array();
				?>
				<li class="active"><a data-toggle="tab" href="#<?php echo $frow['catname'] ?>"><?php echo $frow['catname'] ?></a></li>
				<?php

				$sql = "select * from category order by categoryid asc";
				$nquery = $conn->query($sql);
				$num = $nquery->num_rows - 1;

				$sql = "select * from category order by categoryid asc limit 1, $num";
				$query = $conn->query($sql);
				while ($row = $query->fetch_array()) {
				?>
					<li><a data-toggle="tab" href="#<?php echo $row['catname'] ?>"><?php echo $row['catname'] ?></a></li>
				<?php
				}
				?>
			</ul>

			<div class="tab-content">
				<?php
				$sql = "select * from category order by categoryid asc limit 1";
				$fquery = $conn->query($sql);
				$ftrow = $fquery->fetch_array();
				?>
				<div id="<?php echo $ftrow['catname']; ?>" class="tab-pane fade in active" style="margin-top:20px;">
					<?php

					$sql = "select * from product where categoryid='" . $ftrow['categoryid'] . "'";
					$pfquery = $conn->query($sql);
					$inc = 4;
					while ($pfrow = $pfquery->fetch_array()) {
						$inc = ($inc == 4) ? 1 : $inc + 1;
						if ($inc == 1) {
							echo "<div class='row'>";
						}

					?>
						<div class="col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading text-center">
									<b><?php echo $pfrow['productname']; ?></b>
								</div>
								<div class="panel-body">
									<img src="<?php if (empty($pfrow['photo'])) {
													echo "upload/noimage.jpg";
												} else {
													echo $pfrow['photo'];
												} ?>" height="225px;" width="100%">
								</div>
								<div class="panel-footer text-center">
									BDT <?php echo number_format($pfrow['price'], 2); ?>
								</div>
							</div>
						</div>
					<?php
						if ($inc == 4) {
							echo "</div>";
						}
					}
					if ($inc == 1) {
						echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>";
					}

					if ($inc == 2) {
						echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>";
					}

					if ($inc == 3) {
						echo "<div class='col-md-3'></div></div>";
					}

					?>
				</div>
				<?php

				$sql = "select * from category order by categoryid asc";
				$tquery = $conn->query($sql);
				$tnum = $tquery->num_rows - 1;

				$sql = "select * from category order by categoryid asc limit 1, $tnum";
				$cquery = $conn->query($sql);
				while ($trow = $cquery->fetch_array()) {
				?>
					<div id="<?php echo $trow['catname']; ?>" class="tab-pane fade" style="margin-top:20px;">
						<?php

						$sql = "select * from product where categoryid='" . $trow['categoryid'] . "'";
						$pquery = $conn->query($sql);
						$inc = 4;
						while ($prow = $pquery->fetch_array()) {
							$inc = ($inc == 4) ? 1 : $inc + 1;
							if ($inc == 1) {
								echo "<div class='row'>";
							}

						?>
							<div class="col-md-3">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<b><?php echo $prow['productname']; ?></b>
									</div>
									<div class="panel-body">
										<img src="<?php if ($prow['photo'] == '') {
														echo "upload/noimage.jpg";
													} else {
														echo $prow['photo'];
													} ?>" height="225px;" width="100%">
									</div>
									<div class="panel-footer text-center">
										BDT <?php echo number_format($prow['price'], 2); ?>
									</div>
								</div>
							</div>
						<?php
							if ($inc == 4) {
								echo "</div>";
							}
						}
						if ($inc == 1) {
							echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>";
						}

						if ($inc == 2) {
							echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>";
						}

						if ($inc == 3) {
							echo "<div class='col-md-3'></div></div>";
						}

						?>
					</div>
				<?php
				}
				?>
			</div>

		</div>
	</section>
	<section id="order">
			<div class="container">
			<h1 class="page-header text-center">ORDER LIST</h1>
			<form method="POST" action="purchase.php">
				<table class="table table-striped table-bordered">
					<thead>
						<th class="text-center"><input type="checkbox" id="checkAll"></th>
						<th>Category</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Quantity</th>
					</thead>
					<tbody>
						<?php 
							$sql="select * from product left join category on category.categoryid=product.categoryid order by product.categoryid asc, productname asc";
							$query=$conn->query($sql);
							// echo $query;
							$iterate=0;
							while($row=$query->fetch_array()){
								?>
								<tr>
									<td class="text-center"><input type="checkbox" value="<?php echo $row['productid']; ?>||<?php echo $iterate; ?>" name="productid[]" style=""></td>
									<td><?php echo $row['catname']; ?></td>
									<td><?php echo $row['productname']; ?></td>
									<td name = "price" class="text-right">BDT <?php echo number_format($row['price'], 2); ?></td>
									<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
								</tr>
								<?php
								$iterate++;
							}
						?>
					</tbody>
				</table>
				
				<div class="row center">
					<div class="col-md-3">
						<input type="text" name="customer" class="form-control" placeholder="Customer Name" required>
					</div>
					<div class="col-md-2" style="margin-left:-20px;">
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</section>

	<section id="faq">
        <div class="faq wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center pb-4">
                            <h2>~Frequently Asked Questions~</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Is Foodies Bread really baked fresh each day?</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Do you bake breads containing animal fats or products?</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Can I order your products online?</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>When are you opening a shop near me?</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                    </div>
                </div>
            </div>
        </div>
	</section>

	<section id="comment">
        <div class="faq wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center pb-4">
                            <h2> Reviews </h2>
                        </div>
                    </div>
                </div>
				
                <div class="row pt-5">
					<?php
					$sql = "select * from comments";
					$result = $conn->query($sql);
					$i = 1;
					while($row = mysqli_fetch_assoc($result)){
					?>
                    <div class="col-sm-6 mb-4" style="border-bottom: 1px solid purple;">	
                        <h4><span><?php echo $i.". "; ?></span><?php echo $row['name']; ?></h4>
                        <p style="margin-left: 20px"><?php echo $row["comment"]; ?></p>
                    </div>
					<?php $i++; } ?>
                </div>
            </div>
        </div>
	</section>

	<section id="comment">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="text-center pb-2 pt-5">
						<h2>Please Give Your Opinion For Foodies</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<form action="comment.php" method="POST">
					<div class="form-group" style="margin-top: 1rem;">
					<label for="name" style="margin-bottom: 0.5rem;">Name</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
					</div>

					
					<div class="form-group" style="margin-top: 1rem;">
					<label for="comment" style="margin-bottom: 0.5rem;">Comment</label>
					<textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary mb-2" name="submit" style="margin-top: 0.5rem;" >Submit</button>
				</form>
			</div>
		</div>
	</section>

	<section id="footer">
		<div class="container">
			<div class="row">
				<footer id="footer">
					<div class="footer py-5">
						<div class="container">
							<div class="row">
								<div class="col-md-12 text-center">
									<a class="footer-link" href="#about">About</a>
									<a class="footer-link" href="#menu">Menu</a>
									<a class="footer-link" href="#comment">Review</a>
									<a class="footer-link" href="#faq">FAQ</a>
							</div>
							<div class="col-sm-12">
								<div class="footer-copy">
									<div class="copy-right text-center pt-5">
										<p class="text-light">&copy; 2022. Foodies. All rights reserved.</p>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</section>


	<!-- js file add -->
	<script src="js/main.js" ></script>
</body>



</html>