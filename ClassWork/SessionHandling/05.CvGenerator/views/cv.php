<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:30 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV</title>
</head>
<body>
<?php if (!isset($formData)): ?>
    <?php header("Location: /"); ?>
    <?php exit; ?>
<?php endif; ?>
<table border="1px" cellspacing="2px" cellpadding="5px">
    <tr>
        <th colspan="2">
            Personal Information
        </th>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?= $formData["firstName"] ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?= $formData["lastName"] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $formData["email"] ?></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><?= $formData["phoneNumber"] ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?= $formData["sex"] ?></td>
    </tr>
    <tr>
        <td>Birth Date</td>
        <td><?= $formData["birthDate"] ?></td>
    </tr>
    <tr>
        <td>Nationality</td>
        <td><?= $formData["nationality"] ?></td>
    </tr>
</table>
<br>
<table border="1px" cellspacing="2px" cellpadding="5px">
    <tr>
        <th colspan="2">
            Last Work Position
        </th>
    </tr>
    <tr>
        <td>Company Name</td>
        <td><?= $formData["companyName"] ?></td>
    </tr>
    <tr>
        <td>From</td>
        <td><?= $formData["companyFrom"] ?></td>
    </tr>
    <tr>
        <td>To</td>
        <td><?= $formData["companyTo"] ?></td>
    </tr>
</table>
<br>
<table border="1px" cellspacing="2px" cellpadding="5px">
    <tr>
        <th colspan="2">Computer Skills</th>
    </tr>
    <tr>
        <td>Programming Languages</td>
        <td>
            <table border="1px" cellspacing="2px" cellpadding="5px">
                <tr>
                    <th>Language</th>
                    <th>Skill Level</th>
                </tr>
                <?php foreach ($formData["languages"] as $language => $level): ; ?>
                    <td><?= $language ?></td>
                    <td><?= $level ?></td>
                <?php endforeach; ?>
            </table>
        </td>
    </tr>
</table>
<br>
<table border="1px" cellspacing="2px" cellpadding="5px">
    <tr>
        <th colspan="2">Other Skills</th>
    </tr>
    <tr>
        <td>Languages</td>
        <td>
            <table border="1px" cellspacing="2px" cellpadding="5px">
                <tr>
                    <th>Language</th>
                    <th>Comprehension</th>
                    <th>Reading</th>
                    <th>Writing</th>
                </tr>
                <?php foreach ($formData["speakingLanguages"] as $language => $data): ; ?>
                    <td><?= $language ?></td>
                    <td><?= $data["comprehension"] ?></td>
                    <td><?= $data["reading"] ?></td>
                    <td><?= $data["writing"] ?></td>
                <?php endforeach; ?>
            </table>
        </td>
    </tr>
    <tr>
        <td>Driver's License</td>
        <td><?= implode(", ", $formData["drivingLicense"]) ?></td>
    </tr>
</table>

</body>
</html>
