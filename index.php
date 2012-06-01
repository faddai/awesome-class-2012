<?php include( "includes/header.php" ) ?>
        
        <!-- welcome page -->
        <div data-role="page" id="welcome">
            <div data-theme="a" data-role="header">
                <h3>
                    MWG Training 2012
                </h3>
                <?php include("includes/nav.php") ?>
            </div>
            <div data-role="content">
                <div>
                    <img width="288" height="80" src="css/images/mfriday-mwg.png" />
                </div>
                <div>
                    <p>
                        <strong>
                            Welcome to the MWG / mFriday Training, Class of May, 2012.
                        </strong>
                        
                    </p>
                </div>
                <div>
                    <p>
                        Mobile Web Ghana in collaboration with mFriday organised a vacation training for members at mFriday. This web app is the product of the Mobile Web session with
                        <strong>
                            Francis Addai
                        </strong>
                    </p>
                </div>
                <div>
                    <p>
                        <strong>
                            If you took part in the training, go ahead and login with your email address and password and you see the details of the rest of the trainees. Otherwise, you get to see some cooked up data.
                        </strong>
                    </p>
                </div>
                <a data-role="button" data-inline="true" data-transition="fade" data-theme="b" href="#login" data-icon="arrow-r" data-iconpos="right">
                    Login
                </a>
                <a data-role="button" data-inline="true" data-transition="fade" data-theme="e" href="#register" data-icon="arrow-r" data-iconpos="right">
                    Register
                </a>
            </div>
        </div><!--END of welcome page -->
        
        <div data-role="page" id="trainees">
            <div data-theme="a" data-role="header">
                <h3>
                    Trainees
                </h3>
                <?php include( "includes/nav.php" ); ?>
            </div>
            <div data-role="content">
                <div>
                    <p>
                        <b>
                            These are the awesome people we enrolled for the training.
                        </b>
                    </p>
                </div>
                
                <!-- A list of all trainees with their details -->
                <div data-role="collapsible-set" data-theme="" data-content-theme="">
                    <div data-role="collapsible" data-collapsed="false">
                        <h3>
                            Tap me to hide/show content
                        </h3>
                        <a data-role="button" data-transition="fade" href="#trainees">
                            Secret Button
                        </a>
                    </div>
                </div>
                <!--END A list of all trainees with their details -->
                
        </div>
        
        <!-- instructors page -->
        <div data-role="page" id="instructors">
            <div data-theme="a" data-role="header">
                <h3>
                    Instructors
                </h3>
                    <?php include( "includes/nav.php" ); ?>
            </div>
            <div data-role="content">
                <div>
                    <p>
                        <strong>
                            The training gathered people who really know their stuff. People who are experienced in their respective fields.
                        </strong>
                    </p>
                </div>
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-role="list-divider" role="heading">
                        Divider
                    </li>
                    <li data-theme="c">
                        <a href="#" data-transition="slide">
                            None of this is your business
                        </a>
                    </li>
                </ul>
                <div>
                    <h3>
                        <strong>
                            These folks are awesome and they have all made the training informational and also fun.
                        </strong>
                    </h3>
                </div>
            </div>
        </div>
        <!-- instructors page -->
        
        <!-- Login Page -->
        <div data-role="page" id="login">
            
            <div data-role="header">
                <h3>Login</h3>
            </div>
            
            <?php include( "includes/nav.php" ); ?>
                
            <div data-role="content">
                <form action="login.php" method="POST">
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
        
        <!-- Registration Page -->
        <div data-role="page" id="register">
            
            <div data-role="header">
                <h1>Register</h1>
            </div>
            
            
            <?php include( "includes/nav.php" ); ?>
         
            
            <div data-role="content">
                <form action="register.php" method="POST">
                    <div data-role="fieldcontain">
                        
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="" />
                        
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="" />
                        
                        <label for="gender">Gender</label>
                        <select name="gender" data-role="slider" id="gender">
                            <option>Choose gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        
                        <!-- Date of Birth -->
                       
                            <fieldset data-role="controlgroup">
                                <legend>Date of Birth:</legend>
                            
                                <label for="select-choice-month">Day</label>
                                <select name="select-choice-month" id="select-choice-month">
                                        <option>Month</option>
                                        <option value="jan">January</option>
                                        <!-- etc. -->
                                </select>
                            
                                <label for="select-choice-day">Month</label>
                                <select name="select-choice-day" id="select-choice-day">
                                        <option>Day</option>
                                        <option value="1">1</option>
                                        <!-- etc. -->
                                </select>
                                
                                <label for="select-choice-year">Year</label>
                                <select name="select-choice-year" id="select-choice-year">
                                        <option>Year</option>
                                        <option value="2011">2011</option>
                                        <!-- etc. -->
                                </select>
                            </fieldset>
                    
                        
                        <!--END Date of Birth -->
                        
                        <label for="interests">Interests</label>
                        <textarea name="interests" id="interests" placeholder="So that I can relate to you better"></textarea>
                        
                        <label for="bio">Who are you?</label>
                        <textarea name="interests" id="interests" placeholder="A little info about you"></textarea>
                        
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="eg. awesome@gmail.com" />
                        
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" id="phone" placeholder="eg. 023202023" />
                        
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" />
                        
                        <input type="submit" name="submit" value="Register" data-theme="e" />
                    </div>
                </form>
            </div>
            
            <div data-role="footer">
                <h1>mFriday / MWG Training, May 2012</h1>
            </div>
        </div>
        <!-- Registration Page -->
        
        <script>
            //App custom javascript
        </script>
    </body>
</html>