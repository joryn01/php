<?php include './layout/head.php'; ?>
    <h1>PHP Output 3</h1>
    <p>This output connects to the database and allows the user to save records into it.</p>
    <form action="redirect.php" method="POST">
        <h2>Register Person</h2>
        <table>
            <tr>
                <td>
                    <label for="fname">First Name</label>
                </td>
                <td>
                    <input type="text" name="fname" id="fname" placeholder="Enter First Name">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="mname">Middle Name</label>
                </td>
                <td>
                    <input type="text" name="mname" id="mname" placeholder="Enter Middle Name">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="lname">Last Name</label>
                </td>
                <td>
                    <input type="text" name="lname" id="lname" placeholder="Enter Last Name">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="age">Age</label>
                </td>
                <td>
                    <input type="number" name="age" id="age" placeholder="Enter Age">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="gender">Gender</label>
                </td>
                <td>
                    <select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" name="email" id="email" placeholder="Enter Email">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="address">Address</label>
                </td>
                <td>
                    <textarea name="address" id="address" placeholder="Enter Address"></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="contact">Contact Number</label>
                </td>
                <td>
                    <input type="tel" name="contact" id="contact" placeholder="Enter Contact Number">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="cancel" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
<?php include './layout/foot.php'; ?>