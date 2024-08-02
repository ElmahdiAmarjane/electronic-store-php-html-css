<?php
include '../woocommerce-client.php';

if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['nbr-units']) && isset($_POST['productId'])) {
    // Start output buffering
    ob_start();

    $clientName = htmlspecialchars($_POST['name']);
    $clientPhone = htmlspecialchars($_POST['phone']);
    $clientAddress = htmlspecialchars($_POST['address']);
    $clientNbrUnits = htmlspecialchars($_POST['nbr-units']);
    $OrderProductId = htmlspecialchars($_POST['productId']);
    
    echo "client Name  = " . $clientName . "<br>";
    echo "client Phone = " . $clientPhone . "<br>";
    echo "client Address = " . $clientAddress . "<br>";
    echo "Number of Units = " . $clientNbrUnits . "<br>";
    echo "Product ID = " . $OrderProductId . "<br>";

    $woocommerce = getWooCommerceClient();

    $data = [
        'payment_method' => 'bacs',
        'payment_method_title' => 'Direct Bank Transfer',
        'set_paid' => true,
        'billing' => [
            'first_name' => $clientName,
            'last_name' => '', // Placeholder last name
            'address_1' => $clientAddress,
            'address_2' => '', // Optional, can be left empty
            'city' => '', // Example city
            'state' => '', // Example state or region
            'postcode' => '', // Example postcode
            'country' => 'MA',
            'email' => 'example@gmail.com', // Placeholder email
            'phone' => $clientPhone
        ],
        'line_items' => [
            [
                'product_id' => (int)$OrderProductId,
                'quantity' => (int)$clientNbrUnits
            ]
        ]
    ];

    // Print the data array for debugging
    echo '<pre>';
    print_r($data);
    echo '</pre>';

    try {
        $order = $woocommerce->post('orders', $data);
        print_r($order); // Debugging line to see the response

        // Clear the output buffer and redirect
        ob_end_clean();
      header("Location: /mahal/thankspage/thankspage.php");
        exit();
    } catch (Exception $e) {
        // Clear the output buffer and show the error
        ob_end_clean();
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
} else {
    echo "Required fields are missing!";
}
?>