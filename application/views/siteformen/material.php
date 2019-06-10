<div class="raw">
    <div class="col-md-4"></div>
    <div class="col-md-8">
         <div class="card">
        <div class="card-header"><?php echo $title; ?></div>
        <div class="card-body">
            <?php echo form_open('index.php/Siteformen/material');?>
            <p><?php echo validation_errors(); ?></p>
            <div class="form-group">
                <label for="item">Item</label>
                <input type="text" name="item" class="form-control">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" class="form-control">
            </div>
            <div class="form-group">
                <div class="raw">                   
                        <label for="unit">Unit</label>            
                        <input type="text" name="unit" class="form-control">         
                </div>
                
               
            </div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
   
</div>