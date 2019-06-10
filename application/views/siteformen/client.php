<div class="row">
    <div class="col-md-4">
        <P>LISTS OF OUR CLIENT</P>
        YOU CAN VIEW OUR REGISTERED CLIENT. <a href="vclient">CLIENTS</a>
        <?php foreach($clients as $client){ ?>
            <div class="table">
                <li class="table-list">
                    <?php echo $client['name']?>
                </li>
            </div>
        <?php }?>
    </div>
    <div class="col-md-8">
         <div class="card">
        <div class="card-header"><?php echo $title; ?></div>
        <div class="card-body">
            <?php echo form_open('index.php/Siteformen/client');?>
            <p><?php echo validation_errors(); ?></p>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <div class="raw">                   
                        <label for="phone">Phone Number</label>      
                   
                        <input type="tel" name="phone" class="form-control">                    
                </div>           
               
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea type="text" name="address" class="form-control"></textarea>
            </div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
</div>
</div>