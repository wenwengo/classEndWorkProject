<?php
// 指定用來存放檔案的資料夾名稱
$upload_dir = "./upload files/";

// 獲取當前日期並格式化為 YYYYMMDD
$date = date('Ymd');

// 查找當日檔案
function get_last_uploaded_file($dir, $date) {
    $files = glob($dir . 'uload' . $date . '*.*'); // 可以修改為其他副檔名，或使用通配符查找所有檔案
    
    if (empty($files)) {
        return null; // 如果沒有當日檔案，返回 null
    }

    // 根據檔案名稱中的流水號排序，並取得最後一個檔案
    usort($files, function($a, $b) {
        return basename($a) <=> basename($b);
    });

    return end($files); // 返回最後一個檔案的路徑
}

// 取得當日最後上傳的檔案
$last_uploaded_file = get_last_uploaded_file($upload_dir, $date);

if ($last_uploaded_file) {
    $last_uploaded_filename = basename($last_uploaded_file);
    echo "當日最後上傳的檔案名稱： " . $last_uploaded_filename . "<br>";
} else {
    echo "當日沒有上傳的檔案。<br>";
}
?>
