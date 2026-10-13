<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        form { max-width: 400px; margin: 40px auto; padding: 20px; background: #fff; border: 1px solid #ccc; border-radius: 6px; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input[type="text"], input[type="date"] { width: 100%; padding: 8px; box-sizing: border-box; }
        .gender label { display: inline; font-weight: normal; margin-right: 12px; }
        button { margin-top: 20px; padding: 10px 20px; cursor: pointer; }
    </style>
</head>
<body>
    <form action="success.php" method="POST">
        <h2>Registration Form</h2>

        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>

        <label>Gender</label>
        <div class="gender">
            <input type="radio" id="male" name="gender" value="Male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Other">
            <label for="other">Other</label>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
