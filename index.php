<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Automatic Chatbot</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }

    html,body{
        background:  #eb3349 ;
    background-repeat: no-repeat;
    /*display: grid;
    height: 100%;*/
    }

    /*::-webkit-scrollbar{
    width: 3px;
    border-radius: 25px;
    }*/
    /*::-webkit-scrollbar-track{
    background: #f1f1f1;
    }
    ::-webkit-scrollbar-thumb{
    background: #ddd;
    }
    ::-webkit-scrollbar-thumb:hover{
    background: #ccc;
    }*/
    .wrapper{
    margin-left: 50px;
    margin-top: 5px;
    width: 370px;
    background: #fff;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-top: 0px;
    }
    .wrapper .title{
    
    background: linear-gradient(to bottom, #33ccff 0%, #006666 100%);
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    line-height: 60px;
    text-align: center;
    border-bottom: 1px solid #006fe6;
    border-radius: 5px 5px 0 0;
    }
    .wrapper .form{
    padding: 20px 15px;
    min-height: 400px;
    max-height: 400px;
    overflow-y: auto;
    }
    .wrapper .form .inbox{
    width: 100%;
    display: flex;
    align-items: baseline;
    }
    .wrapper .form .user-inbox{
    justify-content: flex-end;
    margin: 13px 0;
    }
    .wrapper .form .inbox .icon{
    height: 40px;
    width: 40px;
    color: #FF69B4;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    background: #fff;
    }
    .wrapper .form .inbox .msg-header{
    max-width: 53%;
    margin-left: 10px;
    }
    .form .inbox .msg-header p{
    background: #fff;
    color: #FF69B4;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    word-break: break-all;
    }
    /*.form .user-inbox .msg-header p{
    color: #333;
    background: #fff;
    }*/
    .wrapper .typing-field{
    display: flex;
    height: 60px;
    width: 100%;
    align-items: center;
    justify-content: space-evenly;
    background: #fabfbf;
    border-top: 1px solid #d9d9d9;
    border-radius: 0 0 5px 5px;
    }
    .wrapper .typing-field .input-data{
    height: 40px;
    width: 335px;
    position: relative;
    }
    .wrapper .typing-field .input-data input{
    height: 100%;
    width: 100%;
    outline: none;
    border: 1px solid transparent;
    padding: 0 80px 0 15px;
    border-radius: 3px;
    font-size: 15px;
    background: #fff;
    transition: all 0.3s ease;
    }
    .typing-field .input-data input:focus{
    border-color: rgba(0,123,255,0.8);
    }
    .input-data input::placeholder{
    color: #999999;
    transition: all 0.3s ease;
    }
    .input-data input:focus::placeholder{
    color: #bfbfbf;
    }
    .wrapper .typing-field .input-data button{
    position: absolute;
    right: 5px;
    top: 50%;
    height: 30px;
    width: 65px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    opacity: 0;
    pointer-events: none;
    border-radius: 3px;
    background: linear-gradient(to bottom, #33ccff 0%, #006666 100%);
    border: 1px solid #007bff;
    transform: translateY(-50%);
    transition: all 0.3s ease;
    }
    .wrapper .typing-field .input-data input:valid ~ button{
    opacity: 1;
    pointer-events: auto;
    }
    .typing-field .input-data button:hover{
    background: green;
    }
    #question_section{
        min-height: 525px;
        background: linear-gradient(to bottom, #ffffff 0%, #00ffff 100%);
    }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6" style="margin-top: 5px; width: 390px; margin-left: 50px;">
                    <div class="card" id="question_section">
                        <div class="card-header text-center" style="background: linear-gradient(to bottom, #33ccff 0%, #00ffff 100%);">
                            <h5>All Your Question Are Here ): <br>&#x1f447; &#x1f447; &#x1f447;  </h5>
                        </div>
                        <div class="card-body">
                            <div class="col-sm-12">
                                <h5>1. Hii</h5>
                                <h5>2. What is Your Name? &#x1f600;</h5>
                                <h5>3. How Are You?</h5>
                                <h5>4. Who Developed You?</h5>
                           
                                <h5>14. Ok byy</h5>
                                <h5 class="text-center">&#x1f9e1; Thank You &#x1f9e1;</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="wrapper" style="background: linear-gradient(to bottom, #33ccff 0%, #ff00ff 100%) !important;">
                        <div class="title">&#x1f64f; Welcome &#x1f64f;</div>
                        <div class="form">
                            <div class="bot-inbox inbox">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="msg-header">
                                    <p>Hii Master &nbsp!<br>You can ask me<br> included Questions...</p>

                                </div>
                            </div>
                        </div>
                        <div class="typing-field">
                            <div class="input-data">
                                <input id="data" type="text" placeholder="Type something here.." required>
                                <button id="send-btn">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
        
        
        
        <script>
        $(document).ready(function(){
        $("#send-btn").on("click", function(){
        $value = $("#data").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
        $(".form").append($msg);
        $("#data").val('');
        
        // start ajax code
        $.ajax({
        url: 'message.php',
        type: 'POST',
        data: 'text='+$value,
        success: function(result){
        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
        $(".form").append($replay);
        // when chat goes down the scroll bar automatically comes to the bottom
        $(".form").scrollTop($(".form")[0].scrollHeight);
        }
        });
        });
        });
        </script>
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>