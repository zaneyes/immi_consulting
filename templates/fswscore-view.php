<?php include 'inc/header.php'; ?>

<h1>Federal Skilled Worker Score Calculator</h1>
<p>Note: Please use the score calculation tool below to estimate your eligibility of immigrating to Canada. </p>
<?php 
// TEsting


?>
<form action="fswscore.php" method="POST">
    <fieldset>
        <legend>Personal Profile</legend>
        <select name="age" id="age">
        <option value="default">Select your age</option>
        <option value="under18">Under 18</option>
        <?php 
        for ($age = 18; $age <= 59; $age++) {
            echo "<option value=".$age.">".$age."</option>";
        }
        ?>
        <option value="over60">60 or Over</option>
    </select>
    <label for="age">Age</label><br><br>
    <select name="rescountry" id="rescountry">
        <option value="default">Select your country of residence</option>
        <?php foreach($countries as $country): ?>
        <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
        <?php endforeach; ?>
    </select>
    <label for="rescountry">Country of Residence</label><br><br>

    <select name="destprovince" id="destprovince">
        <option value="default">Prefered Destination in Canada</option>
        <?php foreach(CANADIAN_PROVINCES as $canadaProvince): ?>
        <option value="<?php echo $canadaProvince; ?>"><?php echo $canadaProvince; ?></option>
        <?php endforeach; ?>
        <option value="notSure">Not sure</option>
    </select>
    <label for="destprovince">Destination</label><br><br>
    <div>
    <p>Marital Status</p>
        <input type="radio" id="single" name="maritalStatus" value="single">
        <label for="single">Single</label>
        <input type="radio" id="married" name="maritalStatus" value="married">
        <label for="married">Married</label>
        <input type="radio" id="commonLaw" name="maritalStatus" value="commonLaw">
        <label for="commonLaw">Common-Law Partner</label><br>
    </div>
    
    </fieldset><br>
    <fieldset>
        <legend>Language Skills</legend>
        <fieldset>
            <legend>English</legend>
            <select name="english_reading" id="english_reading">
            <option value="default">Select</option>
            <?php foreach(LANGUAGE_LEVELS as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>

            <label for="english">Reading</label> 
            <select name="english_listening" id="english_listening">
            <option value="default">Select</option>
            <?php foreach(LANGUAGE_LEVELS as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="english_listening">Listening</label>
            <select name="english_writing" id="english_writing">
            <option value="default">Select</option>
            <?php foreach(LANGUAGE_LEVELS as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="english_writing">Writing</label>
            <select name="english_speaking" id="english_speaking">
            <option value="default">Select</option>
            <?php foreach(LANGUAGE_LEVELS as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="english_speaking">Speaking</label> 
        </fieldset>

        <fieldset>
            <legend>French</legend>
            <select name="french_reading" id="french_reading">
            <option value="default">Select</option>
            <?php foreach(LANGUAGE_LEVELS as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="french_reading">Reading</label>
            <select name="french_listening" id="french_listening">
            <option value="default">Select</option>
            <?php foreach(LANGUAGE_LEVELS as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="french_listening">Listening</label>
            <select name="french_writing" id="french_writing">
            <option value="default">Select</option>
            <?php foreach(LANGUAGE_LEVELS as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="french_writing">Writing</label>
            <select name="french_speaking" id="french_speaking">
            <option value="default">Select</option>
            <?php foreach(LANGUAGE_LEVELS as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="french_speaking">Speaking</label>
        </fieldset>
    </fieldset>
    <fieldset>
        <legend>Education</legend>
        <select name="education" id="education">
            <option value="default">select</option>
            <?php foreach(EDUCATION_LEVELS as $educationLevel): ?>
            <option value="<?php echo $educationLevel; ?>"><?php echo $educationLevel; ?></option>
            <?php endforeach ?>
        </select>
        <div>
            <p>Did you complete the mentioned program?</p>
            <input type="radio" id="program_yes" name="program_completion" value="program_yes">
                <label for="program_yes">Yes</label><br>
            <input type="radio" id="program_no" name="program_completion" value="program_no">
                <label for="program_no">No</label>
        </div>
        <div>
            <p>Location</p>
            <input type="radio" id="edu_inside_canada" name="edu_location" value="edu_inside_canada">
                <label for="edu_inside_canada">Inside Canada</label><br>
            <input type="radio" id="edu_outside_canada" name="edu_location" value="edu_outside_canada">
                <label for="edu_outside_canada">Outside Canada</label>
        </div>
    </fieldset>
    <fieldset>
        <legend>Work Experience</legend>
        <p>Have you done any paid work during the last 10 years?</p>
        <input type="radio" id="work_experience_yes" name="work_experience" value="yes">
        <label for="work_experience_yes">Yes</label>
        <input type="radio" id="work_experience_no" name="work_experience" value="no">
        <label for="work_experience_no">No</label>
        <div id="workForm" style="display:none;" >
        <br>
            
            <div id="insideWorkForm">
                <span id="work_form_close">X</span>
                <input required list="work_experience_dropdown" name="work_experience_input" id="work_experience_input" placeholder="Please search for the best matching category..." size="45">
                <datalist name="work_experience_dropdown" id="work_experience_dropdown">
                    <?php foreach($nocs as $noc): ?>
                    <option value="<?php echo $noc->noc_title; ?>" name="<?php echo $noc->noc_numeric_code ?>">
                    <?php endforeach ?>
                </datalist>
                <label for="work_experience_dropdown">Occupation</label><br><br>
                <select name="work_length" id="work_length">
                    <option value="Select">Select</option>
                    <?php foreach(WORK_LENGTHS as $workLength): ?>
                    <option value="<?php echo $workLength; ?>"><?php echo $workLength; ?></option>
                    <?php endforeach ?>
                </select>
                <label for="work_length">Length of Work</label><br><br>
                <select name="recent_work" id="recent_work">
                    <option value="Select">Select</option>
                    <?php foreach(WORK_SINCE as $recentWork): ?>
                    <option value="<?php echo $recentWork; ?>"><?php echo $recentWork; ?></option>
                    <?php endforeach ?>
                </select>
                <label for="recent_work">When</label><br><br>
                <div>
                    <p>Work Hours</p>
                    <input type="radio" id="full_time" name="work_hours" value="full_time">
                        <label for="full_time">Full Time Job (At least 30 hours per week)</label><br>
                    <input type="radio" id="part_time" name="work_hours" value="part_time">
                        <label for="part_time">Part Time Job (At least 15 hours per week)</label><br>
                    <input type="radio" id="other" name="work_hours" value="other">
                        <label for="other">Other (Less than 15 hours per week)</label>
                </div>
                <div>
                    <p>Job Type</p>
                    <input type="radio" id="payroll" name="job_type" value="payroll">
                        <label for="payroll">Work for any organization</label><br>
                    <input type="radio" id="self_employed" name="job_type" value="self_employed">
                        <label for="self_employed">Self-employed or working for your own business</label>
                </div>
                <div>
                    <p>Location</p>
                    <input type="radio" id="work_inside_canada" name="work_location" value="work_inside_canada">
                        <label for="work_inside_canada">Inside Canada</label><br>
                    <input type="radio" id="work_outside_canada" name="work_location" value="work_outside_canada">
                        <label for="work_outside_canada">Outside Canada</label>
                </div>
                
            </div>
            <input type="button" id="one_more_job" name="one_more_job" value="Add Another Job" style="display:none;" ><br><br>
        </div>
        
    </fieldset>
    <fieldset>
        <legend>Arranged Employment in Canada</legend>
        <p>Do you have a written job offer provided by a Canadian employer?</p>
        <input type="radio" id="job_offer_yes" name="ca_job_offer" value="yes">
        <label for="job_offer_yes">Yes</label>
        <input type="radio" id="job_offer_no" name="ca_job_offer" value="no">
        <label for="job_offer_no">No</label>
        <div id="job_offer_form" style="display:none;" >
        <br>
            
            <div id="inside_job_offer_form">
                <input required list="job_offer_dropdown" name="job_offer_input" id="job_offer_input" placeholder="Please search for the best matching category..." size="45">
                <datalist name="job_offer_dropdown" id="job_offer_dropdown">
                    <?php foreach($nocs as $noc): ?>
                    <option value="<?php echo $noc->noc_title; ?>" name="<?php echo $noc->noc_numeric_code ?>">
                    <?php endforeach ?>
                </datalist>
                <label for="job_offer_dropdown">Occupation</label><br><br>
                <div>
                    <select name="job_province" id="job_province">
                        <option value="default">Select Province/Territory</option>
                        <?php foreach(CANADIAN_PROVINCES as $canadaProvince): ?>
                        <option value="<?php echo $canadaProvince; ?>"><?php echo $canadaProvince; ?></option>
                        <?php endforeach; ?>
                        <option value="notSure">Not sure</option>
                    </select>
                    <label for="job_province">Destination</label><br><br>
                </div>
                <div>
                    <p>What is the duration of the contract?</p>
                    <input type="radio" id="two_year_plus" name="contract_duration" value="two_year_plus">
                        <label for="two_year_plus">Two years or longer</label><br>
                    <input type="radio" id="one_to_two" name="contract_duration" value="one_to_two">
                        <label for="one_to_two">Between one and two years</label><br>
                    <input type="radio" id="half_to_one" name="contract_duration" value="half_to_one">
                        <label for="half_to_one">Between six months and one year</label><br>
                    <input type="radio" id="less_than_half" name="contract_duration" value="less_than_half">
                        <label for="less_than_half">Less than six months</label>
                </div>
                <div>
                    <p>Work Hours</p>
                    <input type="radio" id="full_time" name="work_hours" value="full_time">
                        <label for="full_time">Full Time Job (At least 30 hours per week)</label><br>
                    <input type="radio" id="part_time" name="work_hours" value="part_time">
                        <label for="part_time">Part Time Job (At least 15 hours per week)</label><br>
                    <input type="radio" id="other" name="work_hours" value="other">
                        <label for="other">Other (Less than 15 hours per week)</label>
                </div>
                <div>
                    <p>Is this job offer supported by LMIA (Labour Market Impact Assessment)?</p>
                    <input type="radio" id="lmia_yes" name="lmia_radio" value="yes">
                        <label for="lmia_yes">Yes</label><br>
                    <input type="radio" id="lmia_no" name="lmia_radio" value="no">
                        <label for="lmia_no">No</label><br>
                    <input type="radio" id="lmia_idk" name="lmia_radio" value="idk">
                        <label for="lmia_idk">I don't know</label>
                </div>
                <div id="lmia_exempt_form" style="display:none;" >
                    <p>Is the job being offered exempt from a LMIA by an international trade agreement (e.g. NAFTA) or a federal-provincial agreement?</p>
                    <input type="radio" id="lmia_exempt_yes" name="lmia_exempt_radio" value="yes">
                        <label for="lmia_exempt_yes">Yes</label><br>
                    <input type="radio" id="lmia_exempt_no" name="lmia_exempt_radio" value="no">
                        <label for="lmia_exempt_no">No</label><br>
                    <input type="radio" id="lmia_exempt_idk" name="lmia_exempt_radio" value="idk">
                        <label for="lmia_exempt_idk">I don't know</label>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Family in Canada</legend>
        <p>Do you have any family members or relatives living in Canada?</p>
        <input type="radio" id="family_yes" name="family_radio" value="yes">
            <label for="family_yes">Yes</label>
        <input type="radio" id="family_no" name="family_radio" value="no">
            <label for="family_no">No</label><br>
        <div id="family_form" style="display:none;">
            <p>Please list all your family members or relatives who's living in Canada</p>
            <fieldset id="inside_family_form">
                <legend>#1</legend>
                <select name="relationship" id="relationship">
                    <option value="Select">Select</option>
                    <?php foreach(RELATIVE_RELATIONSHIPS as $relativeRelationship): ?>
                    <option value="<?php echo $relativeRelationship; ?>"><?php echo $relativeRelationship; ?></option>
                    <?php endforeach ?>
                </select>
                <label for="relationship">Relationship</label><br><br>

                <select name="residency_status" id="residency_status">
                    <option value="Select">Select</option>
                    <?php foreach(RESIDENCY_STATUS as $residencyStatus): ?>
                    <option value="<?php echo $residencyStatus; ?>"><?php echo $residencyStatus; ?></option>
                    <?php endforeach ?>
                </select>
                <label for="residency_status">Residency Status</label><br><br>

                <select name="relative_province" id="relative_province">
                    <option value="default">Select Province/Territory</option>
                    <?php foreach(CANADIAN_PROVINCES as $canadaProvince): ?>
                    <option value="<?php echo $canadaProvince; ?>"><?php echo $canadaProvince; ?></option>
                    <?php endforeach; ?>
                    <option value="notSure">Not sure</option>
                </select>
                <label for="relative_province">Resident Province</label><br><br>
                
                <select name="residency_duration" id="residency_duration">
                    <option value="default">Select</option>
                    <?php foreach(RESIDENCY_LENGTHS as $residencyLengths): ?>
                    <option value="<?php echo $residencyLengths; ?>"><?php echo $residencyLengths; ?></option>
                    <?php endforeach; ?>
                    <option value="notSure">Not sure</option>
                </select>
                <label for="residency_duration">How long has he/she been living here?</label><br><br>
            </fieldset>
            <input type="button" id="one_more_relative" name="one_more_relative" value="Add Another Person" style="display:none;" ><br><br>
        </div>
    </fieldset>
    

</form>
<?php include 'inc/footer.php'; ?>