<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 1 - Credit Card</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
</head>
<body>
    <form method="post" class="pure-form pure-form-aligned">
        <fieldset>
            <div class="pure-control-group">
                <label>Amount Owed</label>
                <input type="text" name="amountOwed" value="<?php echo isset($_POST['amountOwed']) ? $_POST['amountOwed'] : ''; ?>">
            </div>
            <div class="pure-control-group">
                <label>Interest Rate</label>
                <input type="text" name="interestRate" value="<?php echo isset($_POST['interestRate']) ? $_POST['interestRate'] : ''; ?>">
            </div>
            <div class="pure-control-group">
                <label>Monthly Payment</label>
                <input type="text" name="monthlyPayment" value="<?php echo isset($_POST['monthlyPayment']) ? $_POST['monthlyPayment'] : ''; ?>">
            </div>
            <div class="pure-controls">            
                <input type="submit" value="Show me the damage" name="clickMe">
            </div>
        </fieldset>
    </form>

    <table class="pure-table pure-table-horizontal">
        <thead>
            <td>Month</td>
            <td>Interest Paid</td>
            <td>Owed</td>
        </thead>
        <tbody>
        <?php
            $amountPaid = $_POST['amountOwed'];
            $interestRate = $_POST['interestRate'];
            $monthlyPayment = $_POST['monthlyPayment'];
            $interestPaid = '';
            if (isset($_POST['amountOwed']) && isset($_POST['interestRate']) && isset($_POST['monthlyPayment'])) {
                for ($i = 1; $amountPaid > 0; $i++) {
                    $interestPaid = $amountPaid * $interestRate / 100 / 12;
                    $amountPaid = $amountPaid - $monthlyPayment + $interestPaid;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo '$'.number_format((float)$interestPaid, 2, '.', ''); ?></td>
                        <td><?php 
                            if ($amountPaid > 0) {
                                echo '$'.number_format((float)$amountPaid, 2, '.', '');
                            } else {
                                $amountPaid = '';
                                echo $amountPaid;
                            }
                        ?></td>
                    </tr><?php
                }
            }
        ?>
        </tbody>
    </table>
</body>
</html>