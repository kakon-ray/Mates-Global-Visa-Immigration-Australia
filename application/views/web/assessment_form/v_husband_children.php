<hr>
<div class="row">
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Husband name :</label>
            <input name="form_name" class="form-control" name="HusbandName" type="text" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Husband age :</label>
            <input name="form_name" class="form-control" name="HusbandAge" type="text" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Husband Highest Education :</label>
            <input name="form_name" class="form-control" name="HusbandEducation" type="text" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Husband have passport :</label>
            <select class="default-select  form-control wide" name="HusbandPassport" required>
                <option value="">Choose one</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Husband passport expiry date :</label>
            <input name="form_name" class="form-control" type="date" name="HusbandPassportExpiry" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <div class="mb-3">
                <label class="lebel_title">How many children? </label>
                <select class="default-select  form-control wide" name="HowManyChildren" onChange="show_field_children(this.value)" required>
                    <option value="">Choose one</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
    </div>

</div>

