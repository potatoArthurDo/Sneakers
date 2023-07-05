<?php
function UploadFile($input, $folder) {
    $image = "";
	$temptFile = "";
    $errors = array();
    if(isset($_FILES[$input])&&$_FILES[$input]["error"]==0)
	{
		$image = $_FILES[$input]["name"];
		$temptFile = $_FILES[$input]["tmp_name"];
        //$file_size = $_FILES[$input]["size"];
		//if($file_size > 1048576)
		//{
		//	$errors[] = "<p>Lỗi upload ảnh do vượt quá kích thước</p>";
		//}
        $arr = explode('.', $image);
        $imageValue = strtolower(end($arr));
        $valid = array("jpg","png","gif","jped");
        if(in_array($imageValue, $valid) == false) {
            $errors[] = "<p>Lỗi upload ảnh do sai loại tệp</p>";
        }
        if(empty($errors) == true)
        {
            
		    move_uploaded_file($temptFile,"$folder/$image");
        }
        else {
            print_r($errors);
            die("<p> LỖI UPLOAD ẢNH</p>");
        }
    }
    return "$folder/$image";
}




