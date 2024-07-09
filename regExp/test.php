<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegExp</title>
</head>
<style>
    body {
        text-align: center;
    }

    a {
        padding: 5px;
        display: inline-block;
        color: black;
        text-decoration: none;
    }

    .email-valid,
    .phone-numbers-valid {
        background-color: rgba(0, 255, 0, 0.31);
    }

    .email-not-valide,
    .phone-numbers-not-valid {
        background-color: rgba(255, 0, 0, 0.3);
    }

    .wrapper {
        display: inline-block;
    }
</style>

<body>

</body>

</html>
<?php
$emails = [
    'simple@example.com',
    'very.common@example.com',
    'disposable.style.email.with+symbol@example.com',
    'other.email-with-dash@example.com',
    'fully-qualified-domain@example.com',
    'user.name+tag+sorting@example.com',
    'x@example.com',
    'example-indeed@strange-example.com',
    'admin@mailserver1',
    'example@s.solutions',
    'user@subdomain.example.com',
    'firstname-lastname@example.com',
    'user@[IPv6:2001:db8::1]',
    '"email"@example.com',
    '"much.more unusual"@example.com',
    '"very.unusual.@.unusual.com"@example.com',
    'user@com',
    'user@localserver',
    'user@domain-with-hyphens.com',
    'user@sub.sub.sub.domain.com',
    'admin@info.support.domain.gov'
];
$emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

foreach ($emails as $email) {
    if (preg_match($emailRegex, $email)) {
        echo "<a class='email email-valid' href='tel:$email'>$email</a>" . "<br>";
    } else {
        echo "<div class='wrapper'><a class='email email-not-valide' href='tel:$email'>$email</a> is not valid</div>" . "<br>";
    }
}

//(\+?[0-9]{1,4})? - Опциональная группа для международного кода страны
//[-.\s]? - возможный разделитель
//((\(?\d{1,4}\)?)[-.\s]?) - Группа для кода города
//(\d{1,4}[-.\s]?){1,4} - Группа для основного номера
$regExp = "/^(\+?[0-9]{1,4})?[-.\s]?((\(?\d{1,4}\)?)[-.\s]?)(\d{1,4}[-.\s]?){1,4}$/";
$phoneNumbers = [
    '+1-800-555-5555',
    '1-800-555-5555',
    '+44 20 7946 0958',
    '020 7946 0958',
    '(020) 7946 0958',
    '0044 20 7946 0958',
    '+91-9876543210',
    '9876543210',
    '+86 10 1234 5678',
    '010-1234-5678',
    '123-456-7890',
    '+7 (495) 123-45-67',
    '8 (800) 555-35-35',
    '030-123456',
    '0228 1234567',
    '03 1234 5678',
    '+33123456789',
    '+49-170-1234567'
];

foreach ($phoneNumbers as $phone) {
    if (preg_match($regExp, $phone)) {
        $cleanedPhone = preg_replace('/[ \(\)\-\.]/', '', $phone);
        echo  "<a class='phone-numbers phone-numbers-valid' href='tel:$cleanedPhone'>$phone</a>" . "<br>";
    } else {
        echo "<div class='wrapper'><a class='phone-numbers phone-numbers-not-valid' href='tel:$phone'>$phone</a> is not valid</div>" . "<br>";
    }
}

















// $enteredData = "brid@rssv.ru";
//1ый вариант 2ого задания
// $regExp = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/mi";
// $data = preg_replace(
//     $regExp,
//     "<a href='mailto:$0'>$0</a>",
//     $enteredData
// );

// echo $data . "<br>";

// $keywords = preg_split("/[\s,]+/mi", "hypertext language, programming");
// var_dump($keywords);


//2ой вариант 2ого задания
// function checkEmail($email){
//     $regExp = "/^[a-z0-9_-]+\@[a-z_]+\.[a-z_]+$/mi";
//     return preg_match($regExp, $email)?$email:"false";
// }

// echo '<a href="mailto:' . checkEmail($enteredData) . '">$enteredData</a>';


//3 задание по всей земле
// $enteredData = "88005553535";
// $data = preg_replace(
//     $regExp,
//     "<a href='tel:$0'>$0</a>",
//     $enteredData
// );
