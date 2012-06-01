<?php include( "includes/header.php" ) ?>
        <div data-role="page" id="welcome">
            <div data-theme="a" data-role="header">
                <h3>
                    MWG Training 2012
                </h3>
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#welcome" data-theme="" data-icon="home" class="ui-btn-active">
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="#page2" data-theme="" data-icon="star">
                                Trainees
                            </a>
                        </li>
                        <li>
                            <a href="#page3" data-theme="a" data-icon="check">
                                Instructors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-role="content">
                <div style="">
                    <img style="width: 288px; height: 80px" src="css/images/mfriday-mwg.png" />
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
        </div>
        <div data-role="page" id="page2">
            <div data-theme="a" data-role="header">
                <h3>
                    Inspiration
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
                <h3>
                    List Views
                </h3>
                <ul data-role="listview" data-divider-theme="a" data-inset="true">
                    <li data-role="list-divider" role="heading">
                        A List
                    </li>
                    <li data-theme="c">
                        <a href="#welcome" data-transition="slide">
                            One button
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#welcome" data-transition="slide">
                            Two button
                        </a>
                    </li>
                    <li data-theme="b">
                        <a href="#welcome" data-transition="slide">
                            Blue button
                        </a>
                    </li>
                </ul>
                <h3>
                    Collapsible Sections
                </h3>
                <div data-role="collapsible-set" data-theme="" data-content-theme="">
                    <div data-role="collapsible" data-collapsed="false">
                        <h3>
                            Tap me to hide/show content
                        </h3>
                        <a data-role="button" data-transition="fade" href="#page2">
                            Secret Button
                        </a>
                    </div>
                </div>
                <h3>
                    Radio Buttons
                </h3>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <legend>
                        </legend>
                        <input name="radiobuttons1" id="radio1" value="radio1" type="radio" />
                        <label for="radio1">
                            1
                        </label>
                        <input name="radiobuttons1" id="radio2" value="radio2" type="radio" />
                        <label for="radio2">
                            2
                        </label>
                        <input name="radiobuttons1" id="radio3" value="radio3" type="radio" />
                        <label for="radio3">
                            3
                        </label>
                        <input name="radiobuttons1" id="radio4" value="radio4" type="radio" />
                        <label for="radio4">
                            4
                        </label>
                    </fieldset>
                </div>
            </div>
        </div>
        <div data-role="page" id="page3">
            <div data-theme="a" data-role="header">
                <h3>
                    Make Money
                </h3>
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#welcome" data-theme="" data-icon="home">
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="#page2" data-theme="" data-icon="star">
                                Trainees
                            </a>
                        </li>
                        <li>
                            <a href="#page3" data-theme="" data-icon="check" class="ui-btn-active">
                                Instructors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-role="content">
                <div>
                    <p>
                        <strong>
                            The training gathered people who really know their stuff. People who are experienced in their respective fields.
                        </strong>
                        <strong>
                            <br />
                        </strong>
                    </p>
                </div>
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-role="list-divider" role="heading">
                        Divider
                    </li>
                    <li data-theme="c">
                        <a href="#" data-transition="slide">
                            Button
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
        <div data-role="page" id="login">
            <div data-role="content">
                Login
            </div>
        </div>
        <div data-role="page" id="register">
            
            <div data-role="header">
                <h1>Register</h1>
            </div>
            
            <div data-role="content">
                Register
            </div>
            
            <div data-role="footer">
                <h1>mFriday / MWG Training, May 2012</h1>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>