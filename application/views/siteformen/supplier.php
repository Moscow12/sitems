<div class="row">
    <div class="col-md-4">
    <p>Welcome to our system as the supplier</p>
        <a href="mut_sup">register material you offer</a>
    </div>
    <div class="col-md-8">
         <div class="card">
        <div class="card-header"><?php echo $title; ?></div>
        <div class="card-body">
            <?php echo form_open('index.php/Siteformen/supplier');?>
            <p><?php echo validation_errors(); ?></p>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="sup_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="budget">Phone</label>
                <input type="tel" name="sup_phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="budget">location</label>
                <input type="text" name="location" class="form-control">
            </div>
            <div class="form-group">
                <label for="bc_acc">Bank Account</label>
                <input type="text" name="bc_acc" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Address</label>
                <textarea name="sup_address" class="form-control" id="" cols="20" rows="5" placeholder="P.O BOX 45.."></textarea>
               
            </div>           
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
   
</div>