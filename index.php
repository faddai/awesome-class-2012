<?php include( "includes/header.php" ) ?>
<?php include( "includes/functions.php" ) ?>

        <?php session_start() ?>
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
        
        <!--Trainees page -->
        <?php
            $trainees = fetch( query("SELECT DISTINCT * FROM members") );
        ?>
        <div data-role="page" id="trainees">
            <div data-theme="a" data-role="header">
                <h3>
                    Trainees
                </h3>
                <?php include( "includes/nav.php" ); ?>
            </div>
            <div data-role="content">
            <?php //echo "<pre>"; print_r($_SESSION); echo "</pre>"; die(); ?>    
                <div>
                <h3>Hello <?php echo ucfirst( $_SESSION['fname'] ) ?>,</h3>
                    <p>
                        <b>
                            These are the awesome people we enrolled for the training.
                        </b>
                    </p>
                </div>
                
                <!-- A list of all trainees with their details -->
                <div data-role="collapsible-set" data-theme="e" data-content-theme="d">
                <?php foreach( $trainees as $trainee ): ?>
                <?php $name = ucwords( $trainee['fname']. " " .$trainee['lname'] ); ?>
                    <div data-role="collapsible" <?php echo ( $_SESSION['member_id'] === $trainee['member_id'] ) ? 'data-collapsed="false"' : '' ?>>
                        <h3><?php echo $name ?></h3>
                        <div class="ui-grid-a">
                            <div class="ui-block-a">
                                <img src="<?php echo $trainee['pix'] ?>" alt="<?php echo $name ?>" title="A picture of <?php echo $name ?>" />
                            </div>
                            
                            <div class="ui-block-b">
                                <div>
                                    <strong>Your Kraa Day: </strong><?php echo get_kraa_day($trainee['dob']) ?>
                                </div>                                            
                                <div>
                                    <strong>Bio: </strong><?php echo $trainee['bio'] ?>
                                </div>                                            
                                <div>
                                    <strong>Interests: </strong><?php echo $trainee['interests'] ?>
                                </div>
                                
                                <div>
                                    <strong>Email: </strong><?php echo $trainee['email'] ?>
                                </div>                                            
                                <div>
                                    <strong>Phone #: </strong><?php echo $trainee['phone'] ?>
                                </div>                                            
                                <div>
                                    <strong>Gender: </strong><?php echo $trainee['gender'] ?>
                                </div>                                
                                
                            </div>
                        </div>
                                             
                    </div>
                <?php endforeach ?>
                    
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