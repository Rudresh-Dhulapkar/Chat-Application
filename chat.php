<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Chat</title>
</head>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php
                include_once "php/config.php";
                $user_id=mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql=mysqli_query($conn, "SELECT * FROM users WHERE unique_id={$user_id}");
                if(mysqli_num_rows($sql)>0){
                    $row=mysqli_fetch_assoc($sql);
                }
            ?>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="php/images/<?php echo $row['img'] ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname']?></span>
                    <p><?php echo $row['status']?></p>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Hey, how are you ?</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="profile.jpg" alt="">
                    <div class="details">
                        <p>Good, what happned ?</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>You are so talented, why don't you work in our project Group</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="profile.jpg" alt="">
                    <div class="details">
                        <p>I am already in your project group</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>I know that. I was asking why don't you work</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area" autocomplete="off">
            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
            <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" name="message" placeholder="Type a message" class="input-field">
            <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <script src="javaScript/chat.js"></script>
</body>
</html>
