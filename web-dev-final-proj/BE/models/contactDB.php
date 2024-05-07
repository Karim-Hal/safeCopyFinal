<?php



function insert_into_DB($firstName, $lastName, $email, $subject, $message) {
    require_once ('../common/dbinc.php');
    $pdo = getConnection(); // Get the PDO connection
    
    try {
        $stmt = $pdo->prepare("INSERT INTO table_contacts (first_name, last_name, email, subject, body) VALUES (:firstName, :lastName, :email, :subject, :message)");
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}



?>

