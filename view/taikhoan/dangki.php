
					<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
						<!-- Login Form s-->
						<form action="index.php?act=dangky" style="width: 1300px;height: 500px;padding-left: 270px;" method="POST">
							<div class="login-form">
								<h4 class="login-title" style="text-align: center;">Đăng ký</h4>
								
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Họ và tên</label>
										<input class="mb-0 form-control" type="text" name="username" placeholder="Enter your full name" required>
									</div>
									<div class="col-12 mb--20">
										<label for="email">Email</label>
										<input class="mb-0 form-control" type="email" name="email" placeholder="Enter Your Email Address Here.." required>
									</div>

									<div class="col-12 mb--20">
										<label for="email">Số điện thoại</label>
										<input class="mb-0 form-control" type="text" name="phone" placeholder="Số điện thoại" required>
									</div>
									
									<div class="col-lg-6 mb--20">
										<label for="password">Mật khẩu</label>
										<input class="mb-0 form-control" type="password" name="password" placeholder="Enter your password" required>
									</div>
									<div class="col-lg-6 mb--20">
										<label for="password">Nhập lại mật khẩu </label>
										<input class="mb-0 form-control" type="password" name="repeat-password" placeholder="Repeat your password" required>
									</div>
									<p class="thongbao" style="color: #28a745;">
                                   <?php 
                                       if(isset($thongbao)&&($thongbao!="")){
                                         echo $thongbao;
                                           }
                                              ?>
                                            </p>
									<div class="col-md-12">
									<input type="submit" value="Đăng kí" name="dangky">
									</div>
								</div>
							</div>
							
						</form>
					</div>
					
    
					
				<br><br><br><br>
<style>
	input[type="submit"] {
    padding: 10px 20px;
    background-color: #28a745; /* Màu nền */
    color: white; /* Màu chữ */
    border: none; /* Loại bỏ viền */
    border-radius: 5px; /* Bo góc */
    cursor: pointer;
}
</style>

