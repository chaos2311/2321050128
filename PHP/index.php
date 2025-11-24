<h1> anh yeu em vl</h1>
<h2> wo tou li maa</h2>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Buổi 1</title>
</head>
<body>
    <?php 
        //1 Cú pháp in ra màn hình
        echo "hello world!!!!<br>";
        
        echo "PHp<br>";

        //2: Biến
        // cú pháp : $ + tên biến = giá trị của biến
        $ten = "Trinh Thai Duy";
        $tuoi = 20;

        echo "Xin chào " .  $ten . " " . $tuoi . " tuổi<br>";
        echo '$ten'; //lưu ý nháy đơn thì trả về kiểu 1 chuỗi , đôi mới gọi đến giá trị đc gán trong biến

        //3: Hằng
        define('soPi', '3.14');
        echo soPi . '<br>';

        //5: chuỗi
        #5.1 kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";
        #5.2 Đếm số từ
        echo str_word_count($ten) . '<br>';
        #5.3 tìm kiếm ký tự trong chuỗi đang ở vị trí bn
        echo strpos($ten, "a") . '<br>';
        # 5.4 thay thế ký tự trong chuỗi
        echo str_replace("Duy", "Trang", $ten) . '<br>';

        // 6 : Toán tử +, - , * , /
        $soThuNhat = 20;
        $soThuHAI = 16;

        echo $soThuNhat + $soThuHAI . '<br>';

        //7: Câu điều kiện
        $tong = $soThuNhat + $soThuHAI;
        if($tong > 36){
            echo 'tổng là ' .$tong. 'lớn hơn 36<br>';
        }else if($tong === 36){
            echo 'tổng là' .$tong. "<br>";
        }else{
            echo 'tổng là ' .$tong. 'nhỏ hơn 36';
        }


    ?>
    
</body>
</html>