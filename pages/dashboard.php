<?php
 include 'header.php';
 $all_Info = $_SESSION['userDatas'];

 if (!$all_Info['loggedIn']) {
    header('location:index.php');
  }
 extract($all_Info);
?>

<body>

    <div class="container-fluid col-lg-6 mt-4">
        <div class="card">
            <div class="card-body ">
                <center>
                    <div class="img">
                        <img src='uploads/<?php echo $image ?>' width='100' height='100' class='rounded-circle'
                            alt='Profile' />

                    </div>
                    <div class="container">
                        <b class='h2'>
                            <?php echo $username ?>
                        </b>
                        <p><small>
                                <?php echo $email ?>
                            </small></p>
                    </div>
                    <div style='margin-left:150px'>
                        <div class="row">
                            <div class="col-4">
                                <p>Following : <span>20K</span></p>
                            </div>
                            <div class="col-4">
                                <p>Followers : <span>200K</span></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <Button class='col-4 btn btn-info'>Following</Button>
                    </div>


                </center>
                <div>
                    <div style='background:	#d3d3d3; padding:20px;   border-radius:10px; margin-top:20px;'>
                        <h5>User Details :</h5>
                    </div>
                </div>
                <div style='background:#d3d3d3; padding:20px;  border-radius:10px;  margin-top:20px;'>
                    <tabel>
                        <tr>
                            <th>Gender : </th>

                            <td class='ml-5'><b>
                                    <?php echo ucfirst($gender)  ?>
                                </b></td>
                        </tr>
                        </table>

                </div>
                <div style='background:#d3d3d3; padding:20px;  border-radius:10px;  margin-top:20px;'>
                    <tabel>
                        <tr>
                            <th>Country : </th>

                            <td class='ml-5'><b>
                                    <?php echo ucfirst($country)  ?>
                                </b></td>
                        </tr>
                        </table>
                        <div class="btn" style='float:right'>
                         <form action="general.php" method="post">
                           <button class='btn btn-danger' type='submit' name='logout'>Log Out</button>
                         </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>