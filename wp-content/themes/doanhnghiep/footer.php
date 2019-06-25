<div class="scrolltop">
	<i class="fa fa-angle-up" aria-hidden="true"></i>	
</div>
<div class="regis_fixed">
	<?php if(get_locale() == 'vi') { ?>
	<ul>
		<li><a href="<?php echo get_permalink(307);?>">Đăng ký tham quan</a></li>
		<li><a href="<?php echo get_permalink(107);?>">Đăng ký gian hàng</a></li>
	</ul>
<?php }else{ ?>
	<ul>
		<li><a href="<?php echo get_permalink(313);?>">Registration Visitors</a></li>
		<li><a href="<?php echo get_permalink(110);?>">Booth Registration</a></li>
	</ul>
<?php }?>
</div>
<footer class="footer">
	<div class="container">
		<div class="host_patronize">
			<div class="row">
				<div class="col-sm-3">
					<div class="host_ft">
						<h4>CHỦ TRÌ VÀ CHỈ ĐẠO</h4>
						<ul>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/chutri1.jpg"></figure></li>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/chutri2.jpg"></figure></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="patronize">
						<h4>BẢO TRỢ THÔNG TIN</h4>
						<ul>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/baotro1.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/baotro2.jpg"></figure></li>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/baotro3.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/baotro14.jpg"></figure></li>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/baotro5.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/baotro6.jpg"></figure></li>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/baotro7.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/baotro8.jpg"></figure></li>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/baotro9.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/baotro10.jpg"></figure></li>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/baotro11.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/baotro12.jpg"></figure></li>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/baotro13.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/baotro14.jpg"></figure></li>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/baotro15.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/baotro16.jpg"></figure></li>
							<li><figure><img src="<?php echo BASE_URL; ?>/images/baotro17.jpg">
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="dvi_dtnn">
				<div class="row">
					<div class="col-sm-3">
						<div class="dvi">
							<h4>ĐƠN VỊ TỔ CHỨC</h4>
							<ul>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/dvtochuc1.jpg"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/dvtochuc2.jpg"></figure></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-9">
						<div class="dtnn">
							<h4>ĐỐI TÁC NƯỚC NGOÀI & ĐỒNG TỔ CHỨC</h4>
							<ul>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac1.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac2.gif"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac3.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac4.jpg"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac5.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac6.jpg"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac7.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac8.gif"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac9.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac10.gif"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac11.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac12.jpg"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac13.gif"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac14.jpg"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac15.gif"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac16.gif"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac17.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac18.jpg"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac19.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac20.gif"></figure></li>
								<li><figure><img src="<?php echo BASE_URL; ?>/images/doitac21.jpg"></figure></li><li><figure><img src="<?php echo BASE_URL; ?>/images/doitac22.jpg"></figure></li>
							</ul>
						</div>
					</div>
				</div>		
			</div>
			<div class="info_social">
				<div class="info_ft">
					<h3>Công ty Cổ phần Quảng cáo và Hội chợ Thương mại VINEXAD </h3>
					<ul>
						<?php if(get_option('address_ft')){ ?>
							<li>
								<?php if(get_locale() == 'en_US'){ echo get_option('address_ft_en'); } else { echo get_option('address_ft'); }?>
							</li>
						<?php } ?>
						<?php if(get_option('phone_ft')){ ?>
							<li>Tel: <?php echo get_option('phone_ft'); ?> </li>
						<?php } ?>
						<?php if(get_option('fax_ft')){ ?>
							<li>Fax: <?php echo get_option('fax_ft'); ?> </li>
						<?php } ?>
						<?php if(get_option('email_ft')){ ?>
							<li>Email: <?php echo get_option('email_ft'); ?></li>
						<?php } ?>
					</ul>
				</div>
				<div class="social_ft">
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="copyright">
				<p>©2019 VIETNAM MEDI-PHARM EXPO</p>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	<!-- MESSENGER -->
	<script>      
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '1953938748210615',
				xfbml      : true,
				version    : 'v2.6'
			});
		};
		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));      
	</script>
	<!-- END  MESSENGER -->
	<?php get_template_part('order_fixedf'); ?>
	<script src="<?php echo BASE_URL; ?>/js/wow.min.js"></script>
	<script src="<?php echo BASE_URL; ?>/js/slick.js"></script>
	<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
</body>
</html>
