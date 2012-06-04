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
                <a data-role="button" data-inline="true" data-transition="fade" data-theme="b" href="login.php" data-icon="arrow-r" data-iconpos="right">
                    Login
                </a>
                <a data-role="button" data-inline="true" data-transition="fade" data-theme="e" href="register.php" data-icon="arrow-r" data-iconpos="right">
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
                <div data-role="collapsible-set" data-theme="e" data-content-theme="d">
                    <div data-role="collapsible" data-collapsed="false">
                        <h3>Angela Yankey</h3>
                        <div class="ui-grid-a">
                            <div class="ui-block-a">
                                <img src="trainees/angela.jpg" alt="Angela Yankey" title="" />
                            </div>
                            
                            <div class="ui-block-b">
                                details of member goes here
                            </div>
                        </div>
                                             
                    </div>
                    
                    <div data-role="collapsible">
                         <h3>Mona-Lisa Pokuaa</h3>
                         <p>I am a second year computer science student</p>
                    </div>
                    
                    <div data-role="collapsible">
                        <h3>Angela Yankey</h3>
                        <p>Hi, my name is Angela.</p>                       
                    </div>
                    
                    <div data-role="collapsible">
                         <h3>Mona-Lisa Pokuaa</h3>
                         <p>I am a second year computer science student</p>
                    </div>
                    
                </div>
                <!--END A list of all trainees with their details -->
            </div><!--END content -->   
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
       
        
       
        <script>
            //App custom javascript
        </script>
    </body>
</html>