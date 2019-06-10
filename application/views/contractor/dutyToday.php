<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Task</th>
                <th>Date</th>
                <th>Measurement</th>
                <th>Budget</th>
                <th>Type of work</th>
                <th>Number of labour</th>
                <th>Cost</th>                
            </thead>
           
            <tbody>
                <?php $numb = 1; $sum = 0;  foreach($tasks as $task){ 
                    if($task['type_work'] == "Day"){
                        $cost = $task['numlabour'] * $task['budget'];
                    }else{
                        $cost = $task['budget'] * $task['measurement'];
                    }
                        $sum += $cost;
                        
                    ?>
               
                
                <tr>
                    <td><?php for($i=0; $i >5; $i++){
                        $numb++;
                        
                    } echo $numb++; ?></td>
                    <td><?php echo $task['task_name'];?></td>
                    <td><?php echo $task['todaydate']; ?> </td>
                    <td><?php echo $task['measurement'];?> <span></span></td>
                    <td><?php echo $task['budget'];?></td>
                    <td><?php echo $task['type_work'];?></td>
                    <td><?php echo $task['numlabour'];?></td>
                    <td><?php echo $cost; ?></td>
                    
                </tr>
               
                
                
                
                <?php }?>
            </tbody>
             <tfoot>
            <th>
                <td colspan="6"><strong> Total Cost of the Day </strong></td>
                
                <td text-color="red"><?php  echo $sum; ?></td>
            </th>
            </tfoot>
        </table>
    </div>
    <div class="col-md-2"></div>
    
</div>