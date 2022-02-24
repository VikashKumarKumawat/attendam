<?php 
    $title = 'View Records';  
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    
?>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date Of Birth</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Specialty</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>vikas</td>
                    <td>kumawat</td>
                    <td>14/04/2019</td>
                    <td>vikkumar@gmail.com</td>
                    <td>5363667575</td>
                    <td>software developer</td>
                </tr>
            </tbody>
        </table>

<br> 
<br> 
<br>   
    
<?php require_once 'includes/footer.php';?>    