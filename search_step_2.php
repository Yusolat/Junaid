<form action="search_step_3.php" method="post" id="ajax-form-search-send">
    <ul class="list-field-send clearfix">
        <input type="hidden" name="arrive" value="<?php echo  isset($_POST['arrive'])?$_POST['arrive']:'';?>" />
        <input type="hidden" name="departure" value="<?php echo  isset($_POST['departure'])?$_POST['departure']:'';?>" />
        <input type="hidden" name="adults" value="<?php echo  isset($_POST['adults'])?$_POST['adults']:'';?>" />        
        <input type="hidden" name="children" value="<?php echo  isset($_POST['children'])?$_POST['children']:'';?>" />
        <li >
            <input type="text" name="name" placeholder='Name' />
        </li>
        <li >
            <input type="text" name="phone" placeholder='Phone' />
        </li>
        <li >
            <input type="text" name="email" placeholder='Email' />
        </li>
        <li>
            <a href="#" class="awe-btn awe-btn-13" id="bt-send" onclick=" return sendBooking();">SEND</a>
        </li>
    </ul>
</form>