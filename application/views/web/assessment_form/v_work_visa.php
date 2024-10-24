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
                <label class="lebel_title">Have any Skilled certificate :</label>
                <select class="default-select  form-control wide" name="SkilledCertificate" required>
                    <option value="">Choose one</option>
                    <<option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Certificate name :</label>
            <input name="form_name" class="form-control" type="text" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <div class="mb-3">
                <label class="lebel_title">Select Country for work visa</label>
                <select class="default-select  form-control wide" name="CountryWorkVisa" required>
                    <option value="">Choose one</option>
                    <option value="Australia">Australia</option>
                    <option value="NewZealand">New Zealand</option>
                    <option value="Canada">Canada</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Malta">Malta</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Greece">Greece</option>
                    <option value="Poland">Poland</option>
                    <option value="Italy">Italy</option>
                    <option value="Germany">Germany</option>
                    <option value="Finland">Finland</option>
                    <option value="Norway">Norway</option>
                    <option value="Slovakia">Slovakia</option>
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
                <label class="lebel_title">Country from which you are applying :</label>
                <select class="default-select  form-control wide" name="WhichCountryForm" id="CountryApply" required>

                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <div class="mb-3">
                <label class="lebel_title">Your current occupation :</label>
                <select class="default-select  form-control wide" name="Occupation" required>
                    <option value="">Choose one</option>
                    <<option value="Job">Job</option>
                    <option value="Business">Business</option>
                    <option value="Study">Study</option>
                    <option value="Freelancer">Freelancer</option>
                    <option value="Nothing">Nothing</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <div class="mb-3">
                <label class="lebel_title">Select your work visa :</label>
                <select class="default-select  form-control wide" name="HighestEducation" required>
                    <option value="">Choose one</option>
                    <option value="Sponsor Visa">Sponsor Visa</option>
                    <option value="Seasonal Visa">Seasonal Visa</option>
                    <option value="Job seeker Visa">Job seeker Visa</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <div class="mb-3">
                <label class="lebel_title">Do you have work experience?</label>
                <select class="default-select  form-control wide" name="Experience" required>
                    <option value="">Choose one</option>
                    <<option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Mention experience type :</label>
            <input name="form_name" class="form-control" type="text" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">How many years of experience :</label>
            <input name="form_name" class="form-control" type="text" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Passport no :</label>
            <input name="form_name" class="form-control" type="text" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Passport Expiry Date :</label>
            <input name="form_name" class="form-control" type="date"  required>
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



