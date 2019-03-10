<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$name = htmlspecialcharsEx($_POST["name"]);
$phone = htmlspecialcharsEx($_POST["phone"]);
$email = htmlspecialcharsEx($_POST["email"]);
$mess = htmlspecialcharsEx($_POST["mess"]);

$arEmailMessage = [
    "NAME" => $name,
    "EMAIL" => $email,
    "PHONE" => $phone,
    "MESS" => $mess
];

CEvent::Send(
    "SEND_BOTTOM_FORM",
    "s1",
    $arEmailMessage,
    "N",
    ""
);
//header("Location: /test/");
?>