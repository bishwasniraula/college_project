
<?php// echo base_url(); ?>

    <div class="container">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        	<div class="mainPannel">
        		<div class="titleLogin">
        			<h1>LOGIN</h1>
        		</div>
        		<?php// echo validation_errors(); ?>
			<?php echo form_open('Home/user_login'); ?>
			<form>
			<div class="loginFormInput">
				<div class="form-group">
        			<label for="Username">Usename</label>
        			<input name="username" required="required" type="text" class="form-control user-name" placeholder="Username" autocomplete="off">	
        		</div>
        		<label for="Password">Password</label>
        			<input name="password" required="required" type="password" class="form-control user-password" placeholder="Password">	
        			<div class="row">
        				<div class="col-xs-3 col-sm-2 col-md-3"></div>
        				<div class="col-xs-6 col-sm-8 col-md-6">
        						<!-- <a class="loginGoBtn">Go</a> -->
        						<input type="submit" value="Go" class="loginGoBtn">
			        				<div class="forgotPassword">
			        					<a>Forgot Password ?</a>	
			        				</div>
        				</div>
        				<div class="col-xs-3 col-sm-2 col-md-3"></div>
        			</div>
			</div>
        		<!-- <form class="loginFormInput" method=""> -->
        		</form>	
        	</div>
        	
        </div>
        <div class="col-sm-4"></div>
    </div>
