<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
        $arr = array('Tran van truong','Nguyen Thi Hai Ha','Tran Nguyen Bao Ngoc');
       
    ?>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"># Id</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
        <?php
             foreach($arr as $key => $name){
                // echo $key. ' Name is: '.$name.'<br>';
            
        ?>
        <tr>
            <th scope="row"><?php echo $key?></th>
            <td><?php echo $name?></td>
        </tr>
         <?php
         }
         ?>   
  </tbody>
</table>




</div>
</body>
</html>