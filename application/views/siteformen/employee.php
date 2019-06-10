<div class="raw">
    <div class="col-md-4"></div>
    <div class="col-md-8">
         <div class="card">
        <div class="card-header"><?php echo $title; ?></div>
        <div class="card-body">
            <?php echo form_open('index.php/Siteformen/employee');?>
            <p><?php echo validation_errors(); ?></p>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="empname" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="emptitle" class="form-control">
            </div>
            <div class="form-group">
                <label for="location">Salary</label>
                <input type="text" name="empsalary" class="form-control">
            </div>
            <div class="form-group">
                <div class="raw">                   
                        <label for="permit">Phone Number</label>      
                   
                        <input type="tel" name="empphone" class="form-control">                    
                </div>           
               
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea type="text" name="empaddress" class="form-control" placeholder="P.O BOX 145 DSM, TZ."></textarea>
            </div>
            <div class="form-group">
                <label for="startdate">Start date</label>
                <input type="date" name="empstartdate" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Project project</label>
                <select name="project_id" id="" class="form-control">
                    <option value="">--Select value--</option>
                    <?php foreach($projects as $project){?>
                    <option value="<?php echo $project['id']; ?>"><?php echo $project['proj_name']; ?></option>
                    <?php }?>
                </select>
               
            </div>
            
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
   
</div>