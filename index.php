<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="POST" action="confirmation.php" id="form">
        <table>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td>
                    <input type="email" name="email" required>
                </td>
            </tr>
            <tr>
                <td>Issue Type:</td>
                <td>
                    <select name="issueType">
                        <option value="">Select...</option>
                        <option value="Query">Query</option>
                        <option value="Feedback">Feedback</option>
                        <option value="Complaint">Complaint</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Additional Comments:</td>
                <td>
                    <input type="textarea" name="comments">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type=Submit>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>