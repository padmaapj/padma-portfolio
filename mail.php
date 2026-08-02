<?php
/**
 * mail.php
 * Handles the contact form submission from contact.php (AJAX / fetch).
 * Returns a JSON response: { success: bool, message: string }
 *
 * NOTE: PHP's built-in mail() function requires a properly configured
 * mail server (sendmail/Postfix on Linux, or an SMTP relay on Windows/XAMPP).
 * On shared hosting (e.g. Hostinger) this generally works out of the box.
 * On local XAMPP you'll need to configure sendmail or use an SMTP plugin —
 * see README.md for setup instructions.
 */

header("Content-Type: application/json; charset=UTF-8");

// Only allow POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
    exit;
}

// ---------- Config ----------
$recipient_email = "padma.appj@gmail.com";
$site_name       = "Padma Lakshmi Portfolio";

// ---------- Honeypot spam check ----------
if (!empty($_POST["website"])) {
    // Silently pretend success to bots
    echo json_encode(["success" => true, "message" => "Thank you! Your message has been sent."]);
    exit;
}

// ---------- Helpers ----------
function clean_input($data) {
    $data = trim($data ?? "");
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, "UTF-8");
    return $data;
}

// ---------- Collect & validate ----------
$name    = clean_input($_POST["name"] ?? "");
$email   = clean_input($_POST["email"] ?? "");
$phone   = clean_input($_POST["phone"] ?? "");
$service = clean_input($_POST["service"] ?? "");
$subject = clean_input($_POST["subject"] ?? "");
$message = clean_input($_POST["message"] ?? "");

$errors = [];

if ($name === "" || mb_strlen($name) < 2) {
    $errors[] = "Please enter your full name.";
}
if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}
if ($subject === "" || mb_strlen($subject) < 3) {
    $errors[] = "Please enter a subject.";
}
if ($message === "" || mb_strlen($message) < 10) {
    $errors[] = "Please enter a project message (at least 10 characters).";
}

if (!empty($errors)) {
    echo json_encode(["success" => false, "message" => implode(" ", $errors)]);
    exit;
}

// ---------- Build email ----------
$mail_subject = "[$site_name] New Enquiry: $subject";

$body  = "You have received a new message from your portfolio contact form.\r\n\r\n";
$body .= "Name: $name\r\n";
$body .= "Email: $email\r\n";
$body .= "Phone: " . ($phone !== "" ? $phone : "Not provided") . "\r\n";
$body .= "Service: " . ($service !== "" ? $service : "Not specified") . "\r\n";
$body .= "Subject: $subject\r\n\r\n";
$body .= "Message:\r\n$message\r\n";

$headers  = "From: $site_name <no-reply@" . ($_SERVER["HTTP_HOST"] ?? "localhost") . ">\r\n";
$headers .= "Reply-To: $name <$email>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// ---------- Send ----------
$sent = @mail($recipient_email, $mail_subject, $body, $headers);

if ($sent) {
    // Optional: log enquiries to a local file for backup
    $log_line = date("Y-m-d H:i:s") . " | $name | $email | $subject" . PHP_EOL;
    @file_put_contents(__DIR__ . "/mail/enquiries.log", $log_line, FILE_APPEND | LOCK_EX);

    echo json_encode([
        "success" => true,
        "message" => "Thank you, $name! Your message has been sent — I'll get back to you within 24 hours."
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "message" => "Your message couldn't be sent right now. Please email padma.appj@gmail.com directly, or check that mail() is configured on this server (see README.md)."
    ]);
}
