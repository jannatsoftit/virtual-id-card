<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <form action="virtual_id_data.php" method="POST" >
        <h1>Create Your Virtual ID Card</h1>

   <div class="form">

   <!--Name Field -->
    <div class="form-field">
    <label for="field" >Name<span>*</span></label>
    <section>
        <input name ="std_name" id="field" type="text" placeholder="Input Your Name">
    </section>
    </div>

     <!--Phone Field -->
     <div class="form-field">
     <label for="Phone" >Phone<span>*</span></label>
     <section>
        <input name="std_phone" id="field" type="text" placeholder="Input Your Phone">
     </section>
     </div>

     <!--course Field -->
     <div class="form-field">
     <label for="Course" >Course<span>*</span></label>
     <section>
        <input name="std_course" id="field" type="text" placeholder="Input Your Course">
     </section>
     </div>

   <!--Batch No Field -->
    <div class="form-field">
    <label for="Batch No" >Batch No<span>*</span></label>
    <section>
        <input name="std_batchno" id="field" type="text" placeholder="Batch no">
    </section>
    </div>

    <!--Email Field -->
    <div class="form-field">
    <label for="email" >Email<span>*</span></label>
    <section>
        <input name="std_email" id="field" type="text" placeholder="Enter Your Email">
    </section>
    </div>

  <!--Button Field -->
   <div class="button">
   <input type="submit" value="Generate ID" name="genetare_button" class="btn">
   </div>
 
  
 

   </div>
   </form>
    
</body>
</html>