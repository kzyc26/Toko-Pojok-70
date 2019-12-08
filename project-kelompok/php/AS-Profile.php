<?php
  session_start();
  require_once('db.php');
$g = $_GET;

    $cmd_profile ="SELECT fullname, telepon,jenis_kelamin,provinsi, kab_kota,kecamatan,kelurahan,kode_pos,alamat
    from customer where username='".$_SESSION['username']."'";
    $profile_result= mysqli_query($con,$cmd_profile) or die(mysqli_error($con));
    $profile=mysqli_fetch_assoc($profile_result);
if(isset($g['profile']) == "profile"){
    $stats ="profile";
}else {$stats = "password";}




if($stats == "profile"){?> 
<script>alert('<?php echo $stats?> ');</script>
<div class="subcatprofile" id="subcatprofiles">
                <div class="profiledetails">
                    <h2>Profile</h2>
                    <table>
                        <tr>
                            <td>
                                <div class="tulisan">Nama Lengkap</div>
                            </td>
                            <td><input type="type" id="nama-lengkap" class="form-control pendek"
                                    placeholder="<?php echo strval($profile['fullname']);?>" disabled autofocus="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">No. Telepon</div>
                            </td>
                            <td><input type="tel" id="no-telp" class="form-control pendek"
                                    placeholder="<?php echo strval($profile['telepon']);?>" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Jenis Kelamin</div>
                            </td>
                            <?php if(strtolower(strval($profile['jenis_kelamin']))=="female"){
                                    $female="Checked";
                                    $male ="";} else if (strtolower(strval($profile['jenis_kelamin']))=="male"){
                                        $male="Checked";
                                        $female ="";
                                    }
                                
                                ?>
                            <td><input class="gender" type="checkbox" value="female" disabled <?php echo $female;?>>
                                Female
                                <br>
                                <input class="gender" type="checkbox" value="male" disabled <?php  echo $male;?>>
                                Male
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="subjudul">Alamat</td>
                            <script type="text/javascript">
                                var isiprovinsi = "<?php echo $fillalamat[0];?>";
                            </script>
                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Provinsi</div>

                            </td>
                            <td><select name="provinsi" id="provinsi" class="form-control pendek" disabled>
                                    <option value=""></option>
                                    <option value="jawa-timur">Jawa Timur</option>
                                    <option value="jawa-tengah">Jawa Tengah</option>
                                    <option value="jawa-barat">Jawa Barat</option>
                                </select>
                                <script type="text/javascript">
                                    document.getElementById("provinsi").value = isiprovinsi;
                                </script>

                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Kabupaten/Kota</div>
                            </td>
                            <td><select name="kabkota" id="kabkota" class="form-control pendek" disabled>
                                    <option><?php echo ucfirst($profile['kab_kota']);?></option>
                                </select>


                            </td>

                        </tr>

                        <tr>
                            <td>
                                <div class="tulisan">Kecamatan</div>
                            </td>
                            <td><select name="kecamatan" id="kecamatan" class="form-control pendek" disabled>
                                    <option><?php echo ucfirst($profile['kecamatan']);?></option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Kelurahan</div>
                            </td>
                            <td><select name="kelurahan" id="kelurahan" class="form-control pendek" disabled>
                                    <option><?php echo ucfirst($profile['kelurahan']);?></option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Kode Pos</div>
                            </td>
                            <td><input type="text" id="kodepos" class="form-control pendek"
                                    placeholder="<?php echo $profile['kode_pos'];?>" required="" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="tulisan">Alamat</div>
                            </td>
                            <td><input type="text" id="alamat" class="form-control panjang"
                                    placeholder="<?php echo $profile['alamat'];?>" required="" disabled></td>
                        </tr>
                    </table>

                </div>

            </div>

<?php }
elseif($stats=="password"){?> 
  <div class="subcatchangepass">
                <H2> Change Your Password </h2>
                <form method="post" id="passwordForm">
                    <input type="password" class="input-lg form-control" name="oldpass" id="oldpass"
                        placeholder="Current Password" required>
                    <br><br>
                    <input type="password" class="input-lg form-control" name="newpass" id="newpass"
                        placeholder="New Password" required>
                    <br><br>
                    <!-- <input type="password" class="input-lg form-control" name="password2" id="confirmpass"
                        placeholder="Repeat Password" onkeyup="confirmcheck()" required>
                    <br><br>
                    <div class="row">
                        <div class="col-sm2">
                            <span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>
                            Passwords Match
                        </div>
                    </div> -->
                    <br><br>

                    <input type="submit" class="col-xs2 btn btn-primary btn-load btn-lg"
                        data-loading-text="Changing Password..." name="changepass" value="Change Password">
                </form>
            </div>
<?php }?>