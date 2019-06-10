    <!--<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <?php echo $title; ?><?php $numb = 1; foreach($payments as $payment){?> <span><?php echo $payment['date']; ?></span>
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Work name</th>
                    <th>measurement</th>
                    <th>Amount</th>
                </thead>
                <tbody>
                    

                    <tr>
                        <td><?php echo $numb++; ?></td>
                        <td><?php echo $payment['work_name'];?></td>
                        <td><?php echo $payment['measurement'];?> </td>
                        <td><?php echo $payment['amount'];?></td>
                        
                    </tr>
                    <p>Paid to <strong><?php echo $payment['payment_name']; ?></strong></p>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div> -->
    

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <?php echo $title   .date('d/M/Y');?><?php $numb = 1; foreach($pays as $pay){?> 
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Tarehe ya Kazi</th>
                
                <th>Kiasi</th>
            </thead>
            <tbody>
                

                <tr>
                
                    <td><?php echo $numb++; ?></td>
                    <td><a href="todaytask" title=" Click to view task of that day"><?php echo $pay['todaydate'];?></a></td>
                    <td><?php echo $pay['budget'];?> </td>
                    
                    
                </tr>
                <p>Paid to <strong><?php echo $payment['payment_name']; ?></strong> On <span><?php echo $pay['todaydate'];?></span></p>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div class="col-md-2"></div>
</div> 