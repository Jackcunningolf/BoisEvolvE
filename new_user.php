<h1>Create new account</h1>
<form method="post" action="handlers/new_user_handler.php">
    <div class="input_box">
        <label for="first_name"> First name:</label>
        <input type="text" name="first_name">
    </div>
    
    <div class="input_box"> 
        <label for="last_name"> Last name:</label>
        <input type="text" name="last_name">
    </div>

    <div class="input_box">
        <label for="nickname"> Nickname : </label>
        <input type="text" name="nickname">
    </div>

    <div class="input_box">
        <label for="email"> Email : </label>
        <input type="text" name="email">
    </div>

    <div class="input_box">
        <label for="password"> Password : </label>
        <input type="text" name="password">
        
    </div>

    <div class="input_box">
        <label for="bio"> Bio : </label>
        <textarea name="bio" cols="100" rows="30"></textarea>
        <input type="submit" value="Submit">
    </div>

</form>