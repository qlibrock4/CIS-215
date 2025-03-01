<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Q Trivia</p>
        <form action="submit.php" method="post" class="hw4">
            
            <fieldset>
                <label for="goto">1. What college do we go to?</label>
                <input type="radio" name="college" id="GCC" value="1"> <label for="GCC">GCC</label>
                <input type="radio" name="college" id="ECC" value="0"> <label for="ECC">ECC</label>
            </fieldset>
            
            <fieldset>
                <label for="locate">2. Where is our college located?</label>
                <input type="radio" name="locate" id="Batavia" value="1"> <label for="Batavia">Batavia</label>
                <input type="radio" name="locate" id="Warsaw" value="0"> <label for="Warsaw">Warsaw</label>
            </fieldset>

            <fieldset>
                <label for="type">3. What type of college is this?</label>
                <input type="radio" name="type" id="two" value="1"> <label for="Two-year">Two-year</label>
                <input type="radio" name="type" id="four" value="0"> <label for="Four-year">Four-year</label>
            </fieldset>

            <fieldset>
                <label for="isthis">2. What class is this?</label>
                <input type="radio" name="class" id="215" value="1"> <label for="215">CIS 215</label>
                <input type="radio" name="class" id="112" value="0"> <label for="112">CIS 112</label>
            </fieldset>

            <button type="submit" name="submit-button" id="submit-button">Submit</button>
        </form>

    </body>


</html>

