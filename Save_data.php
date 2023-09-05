<?php
    function Save_data($sum){
        
        // Create the user data array
        $user = [
            'phone' => $_SESSION['phone'],
            'result' => $sum,
        ];

        // Read the existing JSON data from the file
        $file_path = 'data/data.json';
        $existing_data = file_get_contents($file_path);
        $existing_data = json_decode($existing_data, true);

        // Merge the new data with the existing data
        $existing_data[] = $user;

        // Encode the updated data as JSON
        $updated_data = json_encode($existing_data);

        // Write the updated data back to the file
        if (file_put_contents($file_path, $updated_data) === false) {
            echo "Error writing to file: " . error_get_last()['message'];
        }
    };
 ?>