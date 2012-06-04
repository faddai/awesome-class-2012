 
        <!-- Login Page -->
        <div data-role="page" id="login">
            
            <div data-role="header">
                <h3>Login</h3>
            </div>
            
            <?php include( "includes/nav.php" ); ?>
                
            <div data-role="content">
                <form action="process_login.php" method="POST" data-ajax="false">
                    <div data-role="fieldcontain">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="eg. awesome@gmail.com" />
                        
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" />
                        
                        <input type="submit" name="submit" value="Login" data-theme="e" />
                    </div>
                </form>
            </div>
            
        </div>
        <!--END Login Page -->