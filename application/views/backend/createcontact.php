<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create contact</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createcontactsubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<div class="input-field col s6">
<label for="company">company</label>
<input type="text" id="company" name="company" value='<?php echo set_value('company');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="phone">phone</label>
<input type="text" id="phone" name="phone" value='<?php echo set_value('phone');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="phone">phone</label>
<input type="text" id="phone" name="phone" value='<?php echo set_value('phone');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="email">email</label>
<input type="text" id="email" name="email" value='<?php echo set_value('email');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="website">website</label>
<input type="text" id="website" name="website" value='<?php echo set_value('website');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s12">
<textarea name="comments" class="materialize-textarea" length="400"><?php echo set_value( 'comments');?></textarea>
<label>comments</label>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewcontact"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
