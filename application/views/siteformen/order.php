 <!-- Example DataTables Card-->
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <?php echo form_open('index.php/Siteformen/make_order');?>
              <thead>
                <tr>
                <th>#</th>
                  <th>Item</th>
                  <th>unit</th>
                  <th>Price <span>@</span></th>
                  <th>Supplier</th>
                  <th>quantity</th>
                  <th>Select item</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>#</th>
                  <th>Item</th>
                  <th>unit</th>
                  <th>Price</th>
                  <th>Supplier</th>
                  <th>quantity</th>
                  <th>Select item</th>
                </tr>
              </tfoot>
              <tbody>
              <?php foreach($materials as $material){?>
                <tr>
                  <td>1</td>
                  <td><?php echo $material['item']; ?></td>
                  <td><?php echo $material['unit']; ?></td>
                  <td><?php echo $material['price']; ?></td>
                  <td><?php echo $material['sup_name']; ?></td>
                  <td>
                  <div class="form-check">
                    <input type="text" class="form-control"col="5px" name="quantity" placeholder="quantity">
                  </div></td>
                  <td align="center"><input type="checkbox" name="material[]" class="form-check-input" value="<?php echo $material['id']; ?>"></td>
                </tr>
              <?php }?>
              
                
              </tbody>
            </table><button class="btn btn-primary" >Submit</button>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>