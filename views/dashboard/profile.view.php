<?php require_once "../views/dashboard/layouts/open.php" ?>

<style>
    .user-information{
        list-style: none;   
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 10px;
        border: 1px solid #eee;
    }

    .user-information li{
        display: flex;   
        line-height: 25px;
        margin-bottom: 10px;
    }

    .user-information label{
        color: #ababab;   
        font-weight: 500;
        width: 180px;
    }

    .user-information span{  
        font-weight: 500;
        width: calc(100%-180px);
        color: #696969;
    }
</style>

<h3>My Profile</h3>
<ul class="user-information">
    <li>
        <label>Registration Date</label>
        <span> hoy viernes</span>
    </li>
    <li>
        <label>First Day</label>
        <span> Jordy</span>
    </li>
    <li>
        <label>Last Name</label>
        <span> ENP</span>
    </li>
    <li>
        <label>Username</label>
        <span> student</span>
    </li>
    <li>
        <label>Email</label>
        <span> compay@gmail.com</span>
    </li>
    <li>
        <label>Phone Number</label>
        <span> 809-200-2001</span>
    </li>
    <li>
        <label>Job Title</label>
        <span> Teacher</span>
    </li>
    <li>
        <label>bio</label>
        <span> compai</span>
    </li>
</ul>


<?php require_once "../views/dashboard/layouts/close.php" ?>