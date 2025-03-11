<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full-name'];
    $company_name = $_POST['company-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $project_description = $_POST['project-description'];
    $features = implode(", ", $_POST['features']);
    $template = $_POST['template'];
    $budget = $_POST['budget'];
    $timeline_start = $_POST['timeline-start'];
    $timeline_end = $_POST['timeline-end'];

    $sql = "INSERT INTO clients (full_name, company_name, email, phone, project_description, features, template, budget, timeline_start, timeline_end)
            VALUES ('$full_name', '$company_name', '$email', '$phone', '$project_description', '$features', '$template', '$budget', '$timeline_start', '$timeline_end')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
