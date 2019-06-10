<div class="row">
    <div class="col-md-4"><a href="vtask">View task registered</a></div>
    <div class="col-md-8">
         <div class="card">
        <div class="card-header"><?php echo $title; ?></div>
        <div class="card-body">
            <?php echo form_open('index.php/Siteformen/todaytask');?>
            <p><?php echo validation_errors(); ?></p>
            <div class="form-group">
                <label for="task_name">Work Name</label>
                <input type="text" name="task_name" class="form-control">
            </div>
            
            
            <div class="form-group">
                <label for="measurement">measurement</label>
                <input type="text" name="measurement" class="form-control">
            </div>
            <div class="form-group">
                <label for="budget">Budget</label>
                <input type="text" name="budget" class="form-control">
            </div>
            <div class="form-group">
                <label for="Type wok">Type wok</label>
                <select name="type_work" id="" class="form-control">
                <option value="">--Select value--</option>
                <option value="Peace work">Peace work</option>
                <option value="Day">Day</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="">Number of man power used</label>
                <input name="numlabour" class="form-control" id="" cols="20" rows="5">
               
            </div>           
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
   
</div>