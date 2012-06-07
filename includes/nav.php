<?php //session_start() ?>
<div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#welcome" data-theme="b" data-icon="home">
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="#trainees" data-theme="b" data-icon="star"> <!-- class="ui-btn-active"> -->
                                Trainees
                            </a>
                        </li>
                        <li>
                            <a href="#instructors" data-theme="b" data-icon="check">
                                Instructors
                            </a>
                        </li>
                    <?php if(isset($_SESSION['member_id'])): ?>                        
                        <li>
                            <a href="logout.php" data-theme="b" data-icon="close" data-ajax="false">
                                Logout
                            </a>
                        </li>
                    <?php endif ?>
                    </ul>
                </div>
