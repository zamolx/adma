<form action="" method="post">
    <div class="form-group form-to">
        <label for="FromCountry">From:</label>
        <select class="form-control" name = "czechRepublic" id="czechRepublic">
            <optgroup label="CZ" value="CZ">
                <option value="CZ">Czech Republic</option>
            </optgroup>
            <optgroup label="Outside CZ" id="outsideCZFrom">
                <option value="IE">Ireland</option>
                <option value="NI">Northern Ireland</option>
                <option value="GB">United Kingdom</option>
                <option value="B">Belgium</option>
                <option value="F">France</option>
                <option value="D">Germany</option>
                <option value="L">Luxembourg</option>
                <option value="NL">Netherlands</option>
                <option value="A">Austria</option>
                <option value="DK">Denmark</option>
                <option value="CH">Switzerland</option>
                <option value="H">Hungary</option>
                <option value="I">Italy </option>
                <option value="PL">Poland </option>
                <option value="SK">Slovakia</option>
            </optgroup>
        </select>
    </div>
    <div class="form-group form-to">
        <label for="ToCountry">To:</label>
        <select class="form-control" id="FromCountryRegion" name="FromCountryRegion">
            <optgroup label="CZ" value="CZ">
                <option value="CZ">Czech Republic</option>
            </optgroup>
            <optgroup label="Outside CZ" id="outsideCZTo">
                <option value="IE">Ireland</option>
                <option value="NI">Northern Ireland</option>
                <option value="GB">United Kingdom</option>
                <option value="B">Belgium</option>
                <option value="F">France</option>
                <option value="D">Germany</option>
                <option value="L">Luxembourg</option>
                <option value="NL">Netherlands</option>
                <option value="A">Austria</option>
                <option value="DK">Denmark</option>
                <option value="CH">Switzerland</option>
                <option value="H">Hungary</option>
                <option value="I">Italy </option>
                <option value="PL">Poland </option>
                <option value="SK">Slovakia</option>
            </optgroup>
        </select>
    </div>
    <div class="form-group form-to">
        <div class="form-group col-md-2">
            <label for="inputLength">Weight</label>
            <input type="inputWeight" id="inputWeight" name="Weight" required="required" placeholder="Weight" >
        </div>
        <div class="form-group col-md-2">
            <label for="inputWeight">Weight</label>
            <select id="optionWeight" class="form-control" name ="optionWeight">
                <option selected >kg</option>
                <option>lbs</option>
            </select>
        </div>
    </div>

    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<div class="text-center">
<span id="spanWeight"></span>
    </div>
<?php
if ($answer > 0) {
    echo "<br><div id='answer' class= 'answer text-center'><strong>"."The cost price to send from ".$czech." to ".$option." for a weight of ".round($weightNew,2)."kg is €".$answer."</strong></strong></div>";
} else {
    echo "<div id='answer' class= 'answer text-center'>".$answer."</div>";
}

?>
<script src="js/index.js"></script>
