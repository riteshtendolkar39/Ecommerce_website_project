<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my orders</title>
</head>

<body>
    <?php
    $user_email = $_SESSION['user_email'];
    $get_user = "select * from `user_table` where user_email='$user_email'";
    $result = mysqli_query($con, $get_user);
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['user_id'];

    ?>
    <h3 class="text-success">All my Orders</h3>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th class="bg-info">Sr no</th>
                <th class="bg-info">Amount Due</th>
                <th class="bg-info">Total products</th>
                <th class="bg-info">Invoice number</th>
                <th class="bg-info">Date</th>
                <th class="bg-info">Complete/Incomplete</th>
                <th class="bg-info">Status</th>
            </tr>
        </thead>
        <tbody class="bg-info">
            <?php
            $get_order = "select * from `user_orders` where user_id=$user_id";
            $result_order = mysqli_query($con, $get_order);
            $num = 1;
            while ($row_order = mysqli_fetch_assoc($result_order)) {
                $order_id = $row_order['order_id'];
                $amount_due = $row_order['amount_due'];
                $total_products = $row_order['total_products'];
                $invoice_number = $row_order['invoice_number'];
                $order_status = $row_order['order_status'];
                if ($order_status == 'pending') {
                    $order_status = 'Incomplete';
                } else {
                    $order_status = 'Complete';
                }
                $order_date = $row_order['order_date'];
                echo "<tr>
                                <td class='bg-secondary text-light'>$num</td>
                                <td class='bg-secondary text-light'>$amount_due</td>
                                <td class='bg-secondary text-light'>$total_products</td>
                                <td class='bg-secondary text-light'>$invoice_number</td>
                                <td class='bg-secondary text-light'>$order_date</td>
                                <td class='bg-secondary text-light'>$order_status</td>";
            ?>
            <?php
                if ($order_status == 'Complete') {
                    echo "<td class='bg-secondary text-light'>Paid</td>";
                } else {
                    echo "  <td class='bg-secondary'><a href='confirm_payment.php?order_id=$order_id' class='text-light'>Confirm</a></td>
                                    
                                    </tr>";
                }
                $num = $num + 1;
            }

            ?>

        </tbody>
    </table>
</body>

</html>