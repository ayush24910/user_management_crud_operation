
<!DOCTYPE html>
    <html>
        <head>
            <style>

                body {
                    font-family: Arial, Helvetica, sans-serif;}
                
                form {border: 3px solid #f1f1f1;}

                input[type=text], input[type=password] {
                
                    text-align:center;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    box-sizing: border-box;
                }

                button {
                        background-color: #4CAF50;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        cursor: pointer;

                }

                button:hover {
                    opacity: 0.8;
                }

            </style>
        </head>
        <body>
        
                <h2 style="text-align:center"; >ADD USER</h2>

                <form action="add_user1.php" >
                
                <div class="container"  style="text-align:center";>
                    <label for="email"><b>Email_id</b><br></label>
                    <input type="text" placeholder="Enter Email_id" name="add_email" required><br>
                   
                    <label for="uname"><b>Name</b><br></label>
                    <input type="text" placeholder="Enter Name" name="add_fname" required><br>


                    <label for="psw"><b>Password</b><br></label>
                    <input type="password" placeholder="Enter Password" name="add_pass" required><br>
                        
                    <button type="submit">SAVE</button>
                    
                </div>

                </form>
            
        </body>
    </html>
