
<div id="container">
	<h1>Welcome to Site management system</h1>

	<div id="body">
		<div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div id="box">
                    <h2>Fill your details to login</h2>
                    <hr>
                    <?php echo form_open('index.php/users/register'); ?>
                    <?php echo validation_errors();?>
                    <div class="form-group">
                <label>Full name</label>
                <input type="text" class="form-control" name="name" placeholder="Email"  outofocus>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email"  outofocus>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="password"  outofocus>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="confirmpassword" placeholder="Password"  autofocus>
            </div>
            <button class="btn btn-primary" type="submit">register</button>
            <p>Already as an Account<a href="login"> login</a></p>
        </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
	</div>
