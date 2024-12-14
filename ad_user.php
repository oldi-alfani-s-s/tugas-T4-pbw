if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $additional_info = $_POST['additional_info'];

    $sql = "INSERT INTO users (name, email, age, birthdate, address, phone_number, additional_info) 
            VALUES ('$name', '$email', '$age', '$birthdate', '$address', '$phone_number', '$additional_info')";
    // Proses query dan pengecekan error...
}
