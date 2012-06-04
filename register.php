 <!-- Registration Page -->
        <div data-role="page" id="register">
            
            <div data-role="header">
                <h1>Register</h1>
            </div>
            
            
            <?php include( "includes/nav.php" ); ?>
         
            
            <div data-role="content">
                <form action="process_registration.php" method="POST" data-ajax="false">
                    <div data-role="fieldcontain">
                        
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="" />
                        
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="" />
                        
                        <label for="gender">Gender</label>
                        <select name="gender" data-role="slider" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        
                        <!-- Date of Birth -->
                       
                            <fieldset data-role="controlgroup" data-type="horizontal">
                                <legend>Date of Birth:</legend>
                            
                                <label for="dob_day">Day</label>
                                <select name="dob_day" id="dob_day" data-native-menu="false">
                                        <option>Day</option>
                                    <?php for($i = 1; $i <= 31; $i++): ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php endfor ?>
                                </select>
                                
                                <label for="dob_month">Month</label>
                                <select name="dob_month" id="dob_month" data-native-menu="false">
                                        <option>Month</option>
                                    <?php for($i = 1; $i <= 12; $i++): ?>                                       
                                        <option value="<?php echo $i ?>"><?php echo date( 'F', mktime(0,0,0,$i+1,0,0)) ?></option>
                                    <?php endfor ?>
                                </select>
                                
                                <label for="dob_year">Year</label>
                                <select name="dob_year" id="dob_year" data-native-menu="false">
                                        <option>Year</option>
                                    <?php for($i = 1960; $i <= 2000; $i++): ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php endfor ?>
                                </select>
                            </fieldset>
                    
                        
                        <!--END Date of Birth -->
                        
                        <label for="interests">Interests</label>
                        <textarea name="interests" id="interests" placeholder="So that I can relate to you better"></textarea>
                        
                        <label for="bio">Who are you?</label>
                        <textarea name="bio" id="bio" placeholder="A little info about you"></textarea>
                        
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
        