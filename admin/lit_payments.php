<h3 class="text-center text-success">ALl Payments</h3>
<table class="table table-bordered mt-5">
        <thead>
        <?php
            $get_payments="select * from `user_payments`";
            $result=mysqli_query($con,$get_payments);
            $row_count=mysqli_num_rows($result);
            if($row_count==0){
                echo "<h2 class='text-center mt-5 text-danger'>No payments received yet </h2>";
            }else{
                echo "        <tr class='text-center'>
                <th class='bg-info text-light'>Sr no</th>
                <th class='bg-info text-light'>Invoice number</th>
                <th class='bg-info text-light'>Amount</th>
                <th class='bg-info text-light'>Payment mode</th>
                <th class='bg-info text-light'>Order Date</th>
                <th class='bg-info text-light'>Delete</th>
            </tr>
        </thead>
        <tbody>";
                $num=0;
                while($row_data=mysqli_fetch_assoc($result)){
                    $order_id=$row_data['order_id'];
                    $payment_id=$row_data['payment_id'];
                    $invoice_number=$row_data['invoice_number'];
                    $amount=$row_data['amount'];
                    $payment_mode=$row_data['payment_mode'];
                    $date=$row_data['date'];
                    $num++;
                    echo "                <tr class='text-center'>
                    <td class='bg-secondary text-light'>$num</td>
                    <td class='bg-secondary text-light'>$invoice_number</td>
                    <td class='bg-secondary text-light'>$amount</td>
                    <td class='bg-secondary text-light'>$payment_mode</td>
                    <td class='bg-secondary text-light'>$date</td>
                    <td class='bg-secondary text-light'><a href='index.php?delete_payments=$payment_id' type='button' class='text-light' data-toggle='modal' data-target='#exampleModal'><i class='fa-solid fa-trash'></i></a></td>
                                    </tr>";
                }
            }
                ?>
    </table>
    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h4>Are you sure you want to delete this?</h4>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary"><a href='index.php?delete_payments=<?php echo $payment_id;?>' class="text-light text-decoration-none">Yes</a></button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./index.php?lit_payments" class="text-light text-decoration-none">No</a></button>
      </div>
    </div>
  </div>
</div>
