<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <form action="/welcome" method="POST">
        @csrf
        <h3>Sign Up Form</h2>

        <label for="firstName">First name:</label><br><br>
        <input type="text" id="firstName" name="firstName" value=""><br><br>
        <label for="lastName">Last name:</label><br><br>
        <input type="text" id="lastName" name="lastName" value=""><br>
        
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality" id="nationality">
            <option value="indonesian" checked>Indonesian</option>
            <option value="singapurian">Singapurian</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select><br>

        <p>Language Spoken:</p>
        <input type="checkbox" name="bahasaindonesia" value="Bahasa Indonesia">
        <label for="bahasaindonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" name="english" value="English">
        <label for="english">English</label><br>
        <input type="checkbox" name="other" value="Other">
        <label for="other">Other</label><br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea id="bio" name="bio" rows="12" cols="30"></textarea><br>

        <input type="submit" value="Sign Up">
    </form>

</body>
</html>