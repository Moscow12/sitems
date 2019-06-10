<div class="row">
    <div class="col-md-4">
        <p><a href="vtask">View task registered</a></p>
        <div class="form-group">
            <label for="photo">Upload Site photo</label>
            <input type="file" class="form-control">
        </div>
        <div class="form-group">
            <div class="btn btn-success" value="submit">
                Post
            </div>
        </div>
    </div>
    <div class="col-md-8">
         <div class="card">
        <div class="card-header"><?php echo $title; ?></div>
        <div class="card-body">
            <?php echo form_open('index.php/Siteformen/task');?>
            <p><?php echo validation_errors(); ?></p>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="work_name" class="form-control">
            </div>
            <div class="form-group">
            <div class="row">
                <div class="col-md-6">            
                    <label for="date">Start Date</label>
                    <input type="date" name="start_date" class="form-control">
                </div>
                <div class="col-md-6">            
                    <label for="date">End Date</label>
                    <input type="date" name="end_date" class="form-control">
                </div>
            </div>
            
            </div>
            
            <div class="form-group">
                <label for="budget">Budget</label>
                <input type="text" name="budget" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="20" rows="5"></textarea>
               
            </div>           
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
   
</div>