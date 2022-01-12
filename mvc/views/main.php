<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hệ Thống Tư Vấn Lỗi Ô Tô</title>

    <link rel="icon" href="http://butl.vn/wp-content/uploads/2017/08/4-icon-04.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="http://localhost/carFault-CaseBaseReasioning-php-mvc/public/fontawesome-free-5.15.4-web/css/all.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="http://localhost/carFault-CaseBaseReasioning-php-mvc/public/css/style.css">
</head>

<body>
    <!-- class="modal-open" -->
    <div id="header">
        <h2 class="headerText">Hệ Thống Chẩn Đoán Lỗi Xe Ô Tô <i class="fas fa-tools"></i></h2>
    </div>
    <div id="content">
        <?php require_once "./mvc/views/pages/" . $data["Page"] . ".php" ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./public/js/main.js"></script>
</body>

</html>