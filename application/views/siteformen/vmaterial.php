
<div class="row">    
        <div class="col-md-4">        
            <div class="card">
                <div class="card-header"><?php echo $title1; ?></div>
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
        <div class="col-md-8">
        <p><?php echo $title;?></p>
            <table class="table table-striped" data-spy="scroll" data-target="dt">
                <thead>
                    <th>#</th>
                    <th>Item</th>
                    <th>type</th>
                    <th>Unit</th>
                </thead>
                <tbody>
                <?php $numb =1; foreach($materails as $material){?>
                    <tr id="dt">
                        <td ><?php echo $numb++; ?></td>
                        <td><?php echo $material['item']; ?></td>
                        <td><?php echo $material['type']; ?></td>
                        <td><?php echo $material['unit']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
</div>
