<div class="card">
	<div class="card-header text-center">
		<h3><?php echo date('y-M/D'); ?></h3>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th rowspan="1">#</th>
					<th rowspan="1">Task Name</th>
					<th rowspan="1">Measurement</th>
					<th rowspan="1">Budget <small>per</small></th>
                    <th rowspan="1">Work Type </th>
                    <th rowspan="1">Man Power</th>
                    <th>Cost per day</th>
					
				</tr>
			</thead>
            
			<!-- Here the the table should query from table student course -->
				<?php $numb = 1; $jumla; foreach($zaleo as $task){?>
					<tr>
					<th scope="row"><?php echo $numb++; ?></th>
					<td><?php echo $task['task_name']; ?> </td>
					<td><?php echo $task['measurement']; ?> </td>
					<td><?php echo $task['budget'];?></td>
                    <td><?php echo $task['type_work']; ?> </td>
					<td><?php echo $task['numlabour'];?></td>
					<!-- <td>
                        <?php $jumla1 = $task['budget'] * $task['numlabour'] ;
                                $jumla2 = $task['measurement'] * $task['budget'];
                                if($task['type_work']=="day" ){
                                   # echo $jumla1;
                                }else{
                                   # echo $jumla2;
                                }
                        ?>
                    </td>
                     -->
					<tr>
                    <tfoot>
                        <!-- <tr>
                                <th colspan="5" ></th>
                                        
                                <td rowspan="1">
                                    Total man power 
                                 <?php $num = $task['numlabour'];
                                $totalsum += $num;
                                   # echo $totalsum; ?>
                                    </td>                            
                                <td rowspan="1">Cost per day
                                    <?php 
                                        $totalsum2 = $jumla1 + $jumla2;
                                      #  echo $totalsum2; 
                                    ?>
                                </td>
                                
                            </tr> -->
                        
                    </tfoot>
                       
				<?php }?>
		</table>
	</div>
</div>
	