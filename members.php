<?php
include("includes/header.php");
include("functions.php");

$members = fetch( query("select * from members") );
$cur_user = isset( $_GET['cur_user'] ) ? $_GET['cur_user'] : "Anonymous";
?>



<section data-role="page" id="members-list">
    
    <section data-role="header">
        <h1>List of Members</h1>
    </section>    
    <div data-role="controlgroup">
    <h2>Hello, <?php echo ucfirst( $cur_user ) ?></h2>
        <ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
        <?php foreach($members as $val): ?>            
            <li class="ui-li ui-li-static ui-body-c ui-corner-top">
                <p class="ui-li-aside ui-li-desc"><strong><?php echo $val['dob'] ?></strong></p>
				<h3 class="ui-li-heading"><?php echo $val['fullname'] ?></h3>
				<p class="ui-li-desc"><strong><?php echo $val['region'] ?> is my region of residence.</strong></p>
				<p class="ui-li-desc">I am a member on this website and my username is <strong>
                <?php echo $val['username'] ?></strong></p>
			</li>        
        <?php endforeach ?>
        </ul>
    </div>
    
    <?php include("includes/footer.php"); ?>
    
</section>

</body>
</html>

