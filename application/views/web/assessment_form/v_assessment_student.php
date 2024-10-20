<hr>
<div class="row">
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">IELTS Score :</label>
            <select class="default-select  form-control wide" name="IELTSScore" required>
                <option value="">Choose one</option>
                <option value="5.0">5.0</option>
                <option value="5.5">5.5</option>
                <option value="6.0">6.0</option>
                <option value="6.5">6.5</option>
                <option value="7.0">7.0</option>
                <option value="7.5">7.5</option>
                <option value="8.0">8.0</option>
                <option value="Appeared">Appeared</option>
                <option value="Not Applicable">Not Applicable</option>
            </select>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Highest Education :</label>
            <select class="default-select  form-control wide" name="HighestEducation" required>
                <option value="">Choose one</option>
                <option value="Kindergarten">Kindergarten</option>
                <option value="Primary">Primary</option>
                <option value="Secondary School">Secondary School</option>
                <option value="Higher Secondary School">Higher Secondary School</option>
                <option value="Diploma">Diploma</option>
                <option value="Honors">Honors</option>
                <option value="Masters">Masters</option>
                <option value="PGD">PGD</option>
            </select>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Finished Year :</label>
            <input name="form_name" class="form-control" type="date" placeholder="Finished Year" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Result :</label>
            <input name="form_name" class="form-control" type="text" required>

        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Name of the institution :</label>
            <input name="form_name" class="form-control" type="text" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <div class="mb-3">
                <label class="lebel_title">Select Country for student visa</label>
                <select class="default-select  form-control wide" name="CountryStudentVisa" required>
                    <option value="">Choose one</option>
                    <option value="Australia">Australia</option>
                    <option value="NewZealand">New Zealand</option>
                    <option value="Canada">Canada</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Applying from :</label>
            <select class="default-select  form-control wide" onChange="country_apply(this.value)" name="ApplyingFrom" required>
                <option value="">Choose one</option>
                <option value="Inside">Inside of Bangladesh</option>
                <option value="Outside">Outside of Bangladesh</option>
            </select>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <div class="mb-3">
                <label class="lebel_title">Which country are you applying from?</label>
                <input name="form_name" class="form-control" name="WhichCountryForm" type="text" required>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <div class="mb-3">
                <label class="lebel_title">Which program will be enroll :</label>
                <select class="default-select  form-control wide" name="ProgramEenroll" required>
                    <option value="">Choose one</option>
                    <<option value="Diploma">Diploma</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Masters">Masters</option>
                    <option value="PGD">PGD</option>
                </select>
            </div>

        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <div class="mb-3">
                <label class="lebel_title">Which session want to apply?</label>
                <select class="default-select  form-control wide" name="HighestEducation" required>
                    <option value="">Choose one</option>
                    <option value="January to February">January to February</option>
                    <option value="June to July">June to July</option>
                    <option value="November to Decembe">November to December</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Main applicant have passport :</label>
            <select class="default-select  form-control wide" name="HighestEducation" required>
                <option value="">Choose one</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Martial Status :</label>
            <select class="default-select  form-control wide"  name="MartialStatus" onChange="show_field(this.value)" required>
                <option value="">Choose one</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select>
        </div>
    </div>

</div>



