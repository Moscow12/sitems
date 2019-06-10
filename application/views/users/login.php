

<div id="container">
	<h1>Welcome to Site management system</h1>

	<div id="body">
		<div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div id="box">
                    <h2>Fill your details to login</h2>
                    <hr>
					<h4 ><?php echo $title;?></h4>
                    <?php echo form_open('index.php/users/login'); ?>
					<?php echo validation_errors();?>
            <div class="form-group">
                <label>User name</label>
                <input type="text" class="form-control" name="email" placeholder="User name"  outofocus>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password"  autofocus>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember Password</label>
                </div>
            </div><button class="btn btn-primary" type="submit">login</button>
            <p><a href="<?php echo base_url('index.php/Siteformen/index'); ?>">Create New Account</a></p>
            <p><a href="<?php echo base_url('index.php/Contractor/index'); ?>">Contractor</a></p>

        </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
	</div>
