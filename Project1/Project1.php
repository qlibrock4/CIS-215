<!DOCTYPE html>
<html lang="eng-US">
    <head>
        <meta charset="utf-8">
        <title>Survey: Happiness</title>  <!-- TODO: Change "Survey Name" to the topic of your survey -->
    </head>
    
    <body>
        <p>Happiness Survey</p>
        <form action="submitt.php" method="post" class="survey">
            <fieldset>
                <label>Enter your email: </label>
                <input type="email" name="email" id="email-input">
            </fieldset>
<!-- Tested my own email to the form, as well as tested random letters such as "fgfgfgg" the email worked perfectly
 however, the fgfgfgg did not work and actually displays "please use @"--> 

            <fieldset>
                <label>Enter your password: </label>
                <input type="text" name="pw-name" id="pw-id">
            </fieldset>
            <!-- I added the right password CIS125Survey! which displayed password is correct on the submit form, but adding wrong one 
             displays "password incorrect"--> 
            <fieldset>
                <label>What age are you? </label>
                <input type="radio" name="age" id="1">
                <label>0-12 </label>
                <input type="radio" name="age" id="2">
                <label>13-17 </label>
                <input type="radio" name="age" id="3">
                <label>18-22 </label>
                <input type="radio" name="age" id="4">
                <label>23-27 </label>
                <input type="radio" name="age" id="5">
                <label>28-32 </label>
                <input type="radio" name="age" id="6">
                <label>33-37 </label>
                <input type="radio" name="age" id="7">
                <label>38-42 </label>
                <input type="radio" name="age" id="8">
                <label>43-47 </label>
                <input type="radio" name="age" id="9">
                <label>48-52 </label>
                <input type="radio" name="age" id="10">
                <label>53-57 </label>
                <input type="radio" name="age" id="11">
                <label>58-62 </label>
                <input type="radio" name="age" id="12">
                <label>63-67 </label>
                <input type="radio" name="age" id="13">
                <label>68+ </label>
            </fieldset>
        <!-- This one I just input every age and they all seemed to work--> 
        
        
        <fieldset>
            <label>Gender:</label>
            <select name="gender" id="gender">
                <option value="m">Male</option>
                <option value="f">Female</option>
                <option value="nb">Nonbinary</option>
                <option value="gf">Genderfluid</option>
                <option value="a">Agender</option>
                <option value="o">Choose not to say/Other</option>
            </select>
        </fieldset>
        <!-- Same as age, every gender worked/came out right--> 
        
        
        <!-- TODO: Add your own survey questions -->
        <fieldset>
            <label for="happy"> What makes you happy? </label>
            <input type="text" name="happy" id="happy" required minlength="1" maxlength="100" size="10">
        </fieldset>
<!-- Adding nothing displays please add something to that part, but adding anything else pretty much works--> 
        <fieldset>
            <label for="how">On a scale of 1-10 how happy are you?</label>
            <input type="number" id="how" name="how" min="1" max="10"/>
        </fieldset>
        
        
        
        
        
        
            <button type="submit" name="submit-button" id="submit-button">Submit</button>
        </form>

<!-- TODO: All the backend PHP/SQL stuff! (you may need a separate file for this!) -->

    </body>
</html>