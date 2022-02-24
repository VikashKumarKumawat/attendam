<?php 
    $title = 'Index';  
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    
    ?>

    <h1 class="text-center"> Secure Space</h1>

    <form method="post" action="success.php">
        <div class="form-group">
           <label for="firstname" class="form-label">First Name</label>
           <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
           <label for="lastname" class="form-label">Last Name</label>
           <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
           <label for="dob" class="form-label">Date Of Birth</label>
           <input type="" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
           <label for="specialty" class="form-label">Area Of Expertise</label>
           <select class="form-control" id="specialty" name="specialty">
              <option value="1">Database Admin</option>
              <option>Software Developer</option>
              <option>Web Administrator</option>
              <option>Others</option>
           </select>
        <div class="form-group">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email"name="email"aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Contct Number</label>
            <input type="text" class="form-control" id="phone" name="phone"aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</div>
        </div>   
    
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>
<br>
<br> 
<br> 
<br> 
<br>   
    
<?php require_once 'includes/footer.php';?>
    