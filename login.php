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
                <h2 style="text-align:center"; >Login Form</h2>

                <form action="dashboard.php">
                
                <div class="container"  style="text-align:center";>
                    <label for="uname"><b>Email_id</b><br></label>
                    <input type="text" placeholder="Enter Email_id" name="email" required><br>

                    <label for="psw"><b>Password</b><br></label>
                    <input type="password" placeholder="Enter Password" name="pass" required><br>
                        
                    <button type="submit">Login</button>
                    
                </div>

                </form>

        </body>
</html>


