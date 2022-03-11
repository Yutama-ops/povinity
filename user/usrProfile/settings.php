<?php
	$query = $conn->prepare("select * from users where UserEmail = '$user_email'");

$query -> execute(array());
    $i = 0;

while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
    
    $userFN = $row['UserFirstName'];
    $userLN = $row['UserLastName'];
    $userCY = $row['UserCity'];
    $userST = $row['UserState'];
    $UserZip= $row['UserZip'];
    $LO = $row['LastOrder'];
    $ED = $row['EstimatedDelivery'];
    $userCountry = $row['UserCountry'];
    $userPH = $row['UserPhone'];
    $image = $row['image'];
    $i++;
}




?>        
                <div class="tab-pane" id="settings">
                    <div class="timeline">
                        <div class="tab-content-heading">
                            <h4>Profile Information</h4>
                            <a href="my_profile_dashbord.html"><i class="fas fa-angle-double-left"></i>Back to Profile</a>
                        </div>
                        <div class="edit-profile">
                            <form action="./upLo/uploadImage.php" method="post" enctype="multipart/form-data">
                                <div class="setting-dt">
                                    <h4>Avatar</h4>										
                                    <div class="avtar">
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($image); ?>" /> 										
                                    </div>
                                    <div class="upload-avatar">
                                        <div class="input-heading">Upload a New Avatar*</div>	
                                        <div class="input-container">																					
                                            <input class="file-upload-input" type="file" name="image" onchange="readURL(this);" accept="image/*">
                                            <button class="browse-btn">
                                              Choose File
                                            </button>
                                            <span class="file-info">Upload a file</span>
                                        </div>
                                    </div>
                                </div> <br> 
                                
                                <!-- just in case want to use background image
                                    <div class="setting-dt b-top padding-b">
                                    <h4>Background Image</h4>										
                                    <div class="background-img">
                                        <img src="images/profile/bg.jpg" alt="">											
                                    </div>
                                    <div class="upload-avatar">
                                        <div class="input-heading">Upload a New Background Image*</div>	
                                        <div class="input-container">																					
                                            <input class="file-upload-input" type="file" name="image1" onchange="readURL(this);" accept="image/*">
                                            <button class="browse-btn">
                                              Choose File
                                            </button>
                                            <span class="file-info">Upload a file</span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label for="nameUser">First Name*</label>
                                    <input type="text" class="video-form" name="userFNr" id="userFNr"  value="<?php echo $userFN;?>">							
                                </div>
                                <div class="form-group">
                                    <label for="locationUser">Where Are You Live?*</label>
                                    <div class="field-input">
                                        <input type="text" class="video-form" name = 'locationUser' id="locationUser" value="<?php echo $userCountry;?>">							
                                        <i class="fas fa-search"></i>
                                    </div>											
                                </div>
                                <!-- description if needed
                                <div class="form-group">
                                    <label for="textareaDescription">Description*</label>
                                    <textarea class="text-area" id="textareaDescription" placeholder="Description"></textarea>							
                                </div>
                                -->
                                <div class="form-group">
                                    <label for="emailAddress">Email Address*</label>
                                    <input type="text" class="video-form" name = 'emailAddress' id="" value="<?php echo $user_email;?>">							
                                </div>
                                <div class="form-group">
                                    <label for="telPhone">Phone Number*</label>
                                    <input type="text" class="video-form" name = 'telPhone' id="telPhone" value="<?php echo $userPH;?>">							
                                </div>
                                <input type="hidden" name="id" value="<?php echo $user_id?>" />		
										
                                
                                <button type="submit" name="submit" class="change-btn btn-link">Save Changes</button>
                            </form>
                        </div>
                    </div>							
                </div>	
