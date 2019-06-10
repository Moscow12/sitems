<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
         <div class="card">
        <div class="card-header"><?php echo $title; ?></div>
        <div class="card-body">
            <?php echo form_open('index.php/Siteformen/payments');?>
            <p><?php echo validation_errors(); ?></p>
            <div class="form-group">
                <label for="name">Supervisor name</label>
                <input type="text" name="payment_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Date of payment</label>
                <input type="date" name="date" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="budget">Measurement</label>
                <input type="text" name="measurement" class="form-control">
            </div>
            <div class="form-group">
                <label for="budget">Amount</label>
                <input type="text" name="amount" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Project </label>
                <select name="project_id" class="form-control">
                    <option value="">--Select value--</option>
                    <?php foreach($projects as $project){?>
                    <option value="<?php echo $project['id']; ?>"><?php echo $project['proj_name']; ?></option>
                    <?php }?>
                </select>
               
            </div>
            <div class="form-group">
                <label for="">Work</label>
                <select name="work_id" id="" class="form-control">
                    <option value="">--Select value--</option>
                    <?php foreach($tasks as $task){?>
                    <option value="<?php echo $task['id']; ?>"><?php echo $task['work_name']; ?></option>
                    <?php }?>
                </select>
               
            </div>
            <div class="form-group">
                <label for="">Others</label>
                <textarea name="others" class="form-control" id="" cols="20" rows="5"></textarea>
               
            </div>           
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
   
</div>