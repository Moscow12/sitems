<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Date Supplied</th>
                <th>Supplier Name</th>
            </thead>
            <tbody>
                <?php $numb = 1; foreach($materials as $material){?>

                <tr>
                    <td><?php echo $numb++; ?></td>
                    <td><?php echo $material['item'];?></td>
                    <td><?php echo $material['quantity'];?> <span><?php echo $material['unit']; ?></span></td>
                    <td><?php echo $material['date'];?></td>
                    <td><?php echo $material['sup_name'];?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>