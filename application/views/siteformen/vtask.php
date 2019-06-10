<div class="card">
	<div class="card-header text-center">
		<h3><?php echo $title; ?></h3>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th rowspan="1">#</th>
					<th rowspan="1">Task Name</th>
					<th rowspan="1">Start date</th>
					<th rowspan="1">End date</th>
                    <th rowspan="1">Budget</th>
                    <th rowspan="1">Descripton</th>
					
				</tr>
			</thead>
			<!-- Here the the table should query from table student course -->
				<?php $numb = 1; foreach($tasks as $task){?>
					<tr>
					<th scope="row"><?php echo $numb++; ?></th>
					<td><?php echo $task['work_name']; ?> </td>
					<td><?php echo $task['start_date']; ?> </td>
					<td><?php echo $task['end_date'];?></td>
                    <td><?php echo $task['budget']; ?> </td>
					<td><?php echo $task['description'];?></td>
					<!-- <form action="attend">
                    	<td><input type="submit" class="btn btn-success" value=" View profile"></td>
						<input type="hidden" value="<?php #echo $user_view['reg_no']; ?>" name="reg_no">
					</form> -->
					<tr><br/>
				<?php }?>
		</table>
	</div>
</div>
	