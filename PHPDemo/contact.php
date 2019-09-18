<h1>Contact Me</h1>
<?php
$a = 1;
?>
<p>You can contact me. Fill out the form below.</p>

<!--<form action="http://teaching.jdholmes.net/postvget/reader/" method="post">-->
<form action="" method="post">
    <ul>
        <li>
            <label for="txtName">Name</label>
            <input type="text" id="txtName" name="name" />
        </li>
        <li>
            <label for="txtEmail">Email</label>
            <input type="email" id="txtEmail" name="email" />
        </li>
        <li>
            <label for="txtComment">Comment</label>
            <textarea id="txtComment" name="comment"></textarea>
        </li>
        <li>
            <input type="checkbox" id="chkContact" name="contact" />
            <label for="chkContact">Yes, please contact me to follow up.</label>
        </li>
        <li>
            <input type="submit" value="Send" />
        </li>
    </ul>
</form>