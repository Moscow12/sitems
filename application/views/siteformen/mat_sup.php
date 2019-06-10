<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
         <div class="card">
        <div class="card-header"><?php echo $title; ?></div>
        <div class="card-body">
            <?php echo form_open('index.php/Siteformen/mut_sup');?>
            <p><?php echo validation_errors(); ?></p>
            <div class="form-group">
                <label for="">Project </label>
                <select name="sup_id" id="" class="form-control">
                    <option value="">--Select value--</option>
                    <?php foreach($suppliers as $supplier){?>
                    <option value="<?php echo $supplier['id']; ?>"><?php echo $supplier['sup_name']; ?></option>
                    <?php }?>
                </select>
               
            </div>
            <div class="form-group">
                <label for="">Item</label>
                <select name="material_id" id="" class="form-control">
                    <option value="">--Select item--</option>
                    <?php foreach($materials as $material){?>
                    <option value="<?php echo $material['id']; ?>"><?php echo $material['item']; ?></option>
                    <?php }?>
                </select>
               
            </div>
            <div class="form-group">
                <label for="unit">Unit</label>
                <input type="text" name="unit" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="text" name="price" class="form-control" placeholder="@" title="Price per unit">
            </div>
                    
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
   
</div>