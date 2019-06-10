<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header"><?php echo $litle; ?></div>
            <div class="card-body">
                    <?php echo form_open('index.php/Siteformen/delivary');?>
                    <p><?php echo validation_errors(); ?></p>
                    <div class="form-group">
                        <label for="item">Item</label>
                        <select name="item_id" id="" class="form-control">
                            <option value="">--Select value--</option>
                            <?php foreach($materails as $materail){?>
                            <option value="<?php echo $materail['id']; ?>"><?php echo $materail['item']; ?></option>
                            <?php }?>
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Quantity</label>
                        <input type="text" name="quantity" class="form-control">         

                    </div>
                    <div class="form-group">
                        <div class="raw">                   
                                <label for="unit">Date</label>            
                                <input type="date" name="date" class="form-control">         
     
                        </div>               
                    </div>
                    <div class="form-group">
                        <div class="raw">                   
                                <label for="sup_name">Supplier</label>            
                                <input type="text" name="sup_name" class="form-control">         
                        </div>               
                    </div>
                    <button class="btn btn-primary">Submit</button>
            </div>
        </div>   
    </div>
    <div class="col-md-8"></div>
</div>