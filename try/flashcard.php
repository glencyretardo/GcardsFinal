!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GCards</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
  <link rel="stylesheet" href="try.css">
 
</head>
<body>  

<?php include 'navigation.php'; ?>

<div id="flashcard-form-container"> <!-- Add wrapping div with id -->
  <form id="flashcard-form">
  <h2>Create a Set</h2> 
    <div class="form-group">
      <label for="set-dropdown">Select Set:</label>
      <select id="set-dropdown" class="form-control">
        <!-- Options will be populated dynamically from the database -->
        <option value="set1">Set 1</option>
        <option value="set2">Set 2</option>
        <!-- Add more options as needed -->
      </select>
    </div>
    <div class="form-group">
      <label for="question">Question:</label>
      <textarea id="question" class="form-control" rows="4"></textarea>
    </div>
    <div class="form-group">
      <label for="answer">Answer:</label>
      <textarea id="answer" class="form-control" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Clear</button>
  </form>
</div>

</body>
</html>