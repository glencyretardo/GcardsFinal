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

<div id="set-form-container"> <!-- Add wrapping div with id -->
    <form id="create-set-form">
    <h2>Create a Set</h2> <!-- Heading for "Create a Set" -->
    <div class="form-group">
    <label for="set-name">Set Name:</label>
        <input type="text" id="set-name" class="form-control" required>
    </div>
   
    <div class="form-group">
        <label for="set-description">Set Description:</label>
        <textarea id="set-description" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-secondary">Clear</button>
</form>

</body>
</html>