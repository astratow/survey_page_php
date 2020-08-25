
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
	
	<link rel="stylesheet" href="survCSS.css">
	<script src="js.js" defer></script>
</head>

<body >
  <?php
  echo ' 
  <div class="container">
  <header class="header">
  <h1 id="title" >Survey Form</h1>
  <p id="description">This is little survey for <a href="https://freecodecamp.org target="_blank">freeCodeCamp.org</a>.</p>
     </header>
    
  <form id="survey-form" action="/action_page.php" method="get"> 
  <div class="form-group">
	<label id="name-label">Type Your Name please:</label> 
	<input type="text" id="name" required placeholder="Type Your Name please" class="form-control">
	</div>
	<div class="form-group">
	<label id="email-label">Would you disclose your email address please:</label> 
	<input type="email" id="email" required placeholder="user@email.com" class="form-control">
	</div>
	<div class="form-group">
	<label id="number-label">How old are You my friend? </label>
	<input type="number" id="number" name="quantity" min="1" max="200" placeholder="How old are You my friend?" class="form-control">
	</div>
	
	<div class="form-group">
	<label id="editor-label">What is your favourite editor?</label>
	<select id="dropdown" name="editors">
		<option value="atom">Atom</option>
		<option value="brackets">Brackets</option>
		<option value="emacs">Emacs</option>
		<option value="notepadplusplus">Notepad++</option>
		<option value="notetab">NoteTab</option>
    <option value="programmers_editor">Programmers editor</option>
		<option value="sublime">Sublime Text</option>
		<option value="Vi">Vi/Vim</option>
		<option value="visual_studio">Visual Studio Code</option>
		<option value="other">Other</option>
	</select>
	</div>
	
	<div class="form-group">
		<label id="colour">What is your favourite colour?</label>
		<label for="red">
		<input type="radio" id="red" name="colour" value="red" class="input-radio"/>Red</label>
		<label for="blue">
		<input type="radio" id="blue" name="colour" value="blue" class="input-radio"/>Blue</label>
		<label for="yellow">
		<input type="radio" id="yellow" name="colour" value="yellow" class="input-radio">Yellow</label>
		<label for="other">
		<input type="radio" id="black" name="colour" value="black" class="input-radio"/>Black</label>
		<label for="other">
		<input type="radio" id="white" name="colour" value="white" class="input-radio"/>White</label>
		<label for="other">
		<input type="radio" id="other" name="colour" value="other" class="input-radio"/>Other</label>
	</div>
	
	<div class="form-group">
	<label id="tea">When do you drink tea?</label>
		
	<label for="vehicle1"><input type="checkbox" id="morning" name="morning" value="morning" class="input-checkbox"/> In the morning.</label>
	
	<label for="afternoon"><input type="checkbox" id="afternoon" name="afternoon" value="afternoon" class="input-checkbox"/> In the afternoon.</label>
	
	<label for="evening"><input type="checkbox" id="evening" name="evening" value="evening" class="input-checkbox"/> In the evening.</label>
	
	<label for="never"><input type="checkbox" id="never" name="never"
              value="never" class="input-checkbox"/> Stupid question! I do not drink tea at all!</label>	
	</div>
	
	<div class="form-group">
	<label id="comments" for="comments">Would you be so kind and tell us anything please?</label>
	<textarea id="comment" placeholder="Would you be so kind and tell us anything please?"></textarea>
	
	</div>
	<div class="form-group">
	<button type="submit" id="submit" class="submit-button">
        Submit
      </button>
	</div>
	
    </div>
  </form>
</div>';
?>
</body>
</html>
