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
        <?php foreach($canadaProvinces as $canadaProvince): ?>
        <option value="<?php echo $canadaProvince; ?>"><?php echo $canadaProvince; ?></option>
        <?php endforeach; ?>
        <option value="notSure">Not sure</option>
    </select>
    <label for="destprovince">Destination</label><br><br>

    <p>Marital Status</p>
    <input type="radio" id="single" name="maritalStatus" value="single">
    <label for="single">Single</label>
    <input type="radio" id="married" name="maritalStatus" value="married">
    <label for="married">Married</label>
    <input type="radio" id="commonLaw" name="maritalStatus" value="commonLaw">
    <label for="commonLaw">Common-Law Partner</label><br><br>

    
    </fieldset><br>
    <fieldset>
        <legend>Language Skills</legend>
        <fieldset>
            <legend>English</legend>
            <select name="english_reading" id="english_reading">
            <option value="default">Select</option>
            <?php foreach($languageLevels as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="english">Reading</label> 
            <select name="english_listening" id="english_listening">
            <option value="default">Select</option>
            <?php foreach($languageLevels as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="english_listening">Listening</label>
            <select name="english_writing" id="english_writing">
            <option value="default">Select</option>
            <?php foreach($languageLevels as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="english_writing">Writing</label>
            <select name="english_speaking" id="english_speaking">
            <option value="default">Select</option>
            <?php foreach($languageLevels as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="english_speaking">Speaking</label> 
        </fieldset>

        <fieldset>
            <legend>French</legend>
            <select name="french_reading" id="french_reading">
            <option value="default">Select</option>
            <?php foreach($languageLevels as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="french_reading">Reading</label>
            <select name="french_listening" id="french_listening">
            <option value="default">Select</option>
            <?php foreach($languageLevels as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="french_listening">Listening</label>
            <select name="french_writing" id="french_writing">
            <option value="default">Select</option>
            <?php foreach($languageLevels as $languageLevel): ?>
            <option value="<?php echo $languageLevel; ?>"><?php echo $languageLevel; ?></option>
            <?php endforeach ?>
            </select>
            <label for="french_writing">Writing</label>
            <select name="french_speaking" id="french_speaking">
            <option value="default">Select</option>
            <?php foreach($languageLevels as $languageLevel): ?>
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
            <?php foreach($educationLevels as $educationLevel): ?>
            <option value="<?php echo $educationLevel; ?>"><?php echo $educationLevel; ?></option>
            <?php endforeach ?>
        </select>
    </fieldset>
    <fieldset>
        <legend>Work Experience</legend>
        <p>Have you done any paid work during the last 10 years?</p>
        <input type="radio" id="work_experience_yes" name="work_experience" value="yes">
        <label for="work_experience_yes">Yes</label>
        <input type="radio" id="work_experience_no" name="work_experience" value="no">
        <label for="work_experience_no">No</label>
        <div id="workForm" style="display:none;" >
            <label for="work_experience_dropdown">Occupation</label>
            <input required list="work_experience_dropdown" name="work_experience_input" id="work_experience_input">
            <datalist name="work_experience_dropdown" id="work_experience_dropdown">
                <?php foreach($nocs as $noc): ?>
                <option value="<?php echo $noc->noc_title; ?>" name="<?php echo $noc->noc_numeric_code ?>">
                <?php endforeach ?>
            </datalist>
        </div>
            
    </fieldset>
    

    

</form>
<?php include 'inc/footer.php'; ?>