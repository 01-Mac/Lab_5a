<!DOCTYPE html>
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        table {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 10px;
        }
        td {
            padding: 8px;
        }
    </style> 
</head> 
<body>
    <?php $name = "Ng Wei Kang"; ?>
    <?php $matricno = "DI220021"; ?>
    <?php $course = "Bachelor In Web Technology"; ?>
    <?php $yearofstudy = "3"; ?>
    <?php $address = "352, Taman Sri Ampang, 05050, Alor Setar Kedah"; ?>

    <table> 
        <tr> 
            <td>Name:</td> 
            <td><?php echo "$name"; ?></td>  
        </tr>
        <tr> 
            <td>Matric Number:</td> 
            <td><?php echo "$matricno"; ?></td>  
        </tr> 
        <tr> 
            <td>Course:</td> 
            <td><?php echo "$course"; ?></td>  
        </tr> 
        <tr> 
            <td>Year Of Study:</td> 
            <td><?php echo "$yearofstudy"; ?></td>  
        </tr> 
        <tr> 
            <td>Address:</td> 
            <td><?php echo "$address"; ?></td>  
        </tr> 
    </table>
</body> 
</html>
