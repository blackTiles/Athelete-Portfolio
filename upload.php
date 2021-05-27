<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into images (image, uploaded) VALUES ('$imgContent', NOW())"); 
             
            if($insert){ 
              echo '<script>alert("Image Uploaded Successfully");
                      window.location = "passwordmanage.html";
                    </script>';
            }else{ 
                $statusMsg = '<section style="font-family:sans-serif;display:flex;justify-content:center;align-items:center;flex-direction:column;background:#0083B0;position:fixed;left:50%;top:50%;transform:translate(-50%,-50%);color:red;width:100%;height:100%;">
                <h1 style="font-size:50px;">ERROR</h1>
                <p style="font-size:40px;">File upload failed. Please try again</p><br>
                <a href="passwordmanage.html" style="text-decoration:none;font-size:50px;color:white;box-shadow:1px 1px 30px 2px black;padding:10px;">Go Back</a>
                            </section>'; 
            }  
        }else{ 
            $statusMsg = '<section style="font-family:sans-serif;display:flex;justify-content:center;align-items:center;flex-direction:column;background:#0083B0;position:fixed;left:50%;top:50%;transform:translate(-50%,-50%);color:red;width:100%;height:100%;">
                            <h1 style="font-size:50px;">ERROR</h1>
                            <p style="font-size:40px;">Only jpeg, jpg, gif & png files are allowed</p><br>
                            <a href="passwordmanage.html" style="text-decoration:none;font-size:50px;color:white;box-shadow:1px 1px 30px 2px black;padding:10px;">Go Back</a>
                    </section>'; 
        } 
    }else{ 
        $statusMsg = '<section style="font-family:sans-serif;display:flex;justify-content:center;align-items:center;flex-direction:column;background:#0083B0;position:fixed;left:50%;top:50%;transform:translate(-50%,-50%);color:red;width:100%;height:100%;">
                            <h1 style="font-size:50px;">ERROR</h1>
                            <p style="font-size:40px;">You did not select any image file</p><br>
                            <a href="passwordmanage.html" style="text-decoration:none;font-size:50px;color:white;box-shadow:1px 1px 30px 2px black;padding:10px;">Go Back</a>
                    </section>'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>