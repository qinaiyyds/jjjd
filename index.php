<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nana Natwork</title>
</head>
<body>
    <h1>Nana Network</h1>
    <form action="subscribe.php" method="post">
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="mobile">Your mobile:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>
        
        <label for="group">Group:</label>
        <select id="group" name="group">
            <option value="test_add_group">Test Add Group</option>
        </select><br><br>
        
        <input type="radio" id="subscribe" name="action" value="subscribe" checked>
        <label for="subscribe">Nana Natwork</label>
        <input type="radio" id="unsubscribe" name="action" value="unsubscribe">
        <label for="unsubscribe">Unsubscribe</label><br><br>
        
        <input type="checkbox" id="agree" name="agree" required>
        <label for="agree">I agree to receive SMS based on my data</label><br><br>
        
        <button type="submit">Nana Network</button>
    </form>
</body>
</html>
