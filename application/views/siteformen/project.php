<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
         <div class="card">
        <div class="card-header"><?php echo $title; ?></div>
        <div class="card-body">
            <?php echo form_open('index.php/Siteformen/project');?>
            <p><?php echo validation_errors(); ?></p>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Project Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="proj_name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Project Location</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="proj_location" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">  
                        <div class="col-md-2">
                           <label for="permit">Permit Number</label>  
                        </div>                 
                        <div class="col-md-10">
                            <input type="tel" name="permit" class="form-control">
                        </div>               
                                            
                </div>           
               
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Contractor Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="contractor_name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Sub Contractor Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="subcontr_name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Architect Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="arch_name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Consultance Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="consl_name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="address">Address</label>
                    </div>
                    <div class="col-md-10">
                        <textarea type="text" name="proj_address" class="form-control"></textarea>
                     </div>
                </div>
                                 
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Project Client</label>
                    </div>
                    <div class="col-md-10">
                        <select name="client_id" id="" class="form-control">
                            <option value="">--Select value--</option>
                            <?php foreach($clients as $client){?>
                            <option value="<?php echo $client['id']; ?>"><?php echo $client['name']; ?></option>
                            <?php }?>
                         </select>
                    </div>                    
                </div>
                
               
            </div>
          
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </div>
   
</div>